<?php

function updateBannerBlock(int $id, array $fields): void
{
    $block = dbFind(Tables::Content, $id);
    $blockContent = json_decode($block['content'], true);
    $content = json_encode([
        'banner' => uploadBanner($blockContent['banner'] ?? '', $id),
    ]);

    $query = getContentQuery();

    $query->bindParam('content', $content);
    $query->bindParam('id', $id, PDO::PARAM_INT);

    executeContentQuery($query, $id);

}

function uploadBanner(string $image, int $id): string
{
    if(!empty($image) && !empty($_FILES['banner']) && $_FILES['banner']['error'] === 0) {
        $newImageName = time() . "_{$_FILES['banner']['name']}";
        $path = IMAGES_DIR . '/' . $newImageName;
        uploadContentImage($_FILES['banner']['tmp_name'], $path, $id);


        $oldFile = IMAGES_DIR . '/' . $image;
        if (file_exists($oldFile)) {
            unlink($oldFile);

        }
        return $newImageName;
    }
    return $image;
}



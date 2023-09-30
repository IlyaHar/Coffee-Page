<?php
function updateAboutUsBlock(int $id, array $fields): void
{
    $block = dbFind(Tables::Content, $id);
    $blockContent = json_decode($block['content'], true);

    if (!empty($_FILES['img']) && $_FILES['img']['error'] === 0) {
        $newImageName = time() . "_" . $_FILES['img']['name'];
        $path = IMAGES_DIR . '/' . $newImageName;

        uploadContentImage($_FILES['img']['tmp_name'], $path, $id);

        $oldImage = IMAGES_DIR . '/' . $blockContent['video']['img'];
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }

        $blockContent['video']['img'] = $newImageName;
    }

    $blockContent['text']['subtitle'] = $fields['subtitle'] ?? '';
    $blockContent['text']['title'] = $fields['title'] ?? '';
    $blockContent['text']['quote'] = $fields['quote'] ?? '';
    $blockContent['text']['description'] = $fields['description'] ?? '';

    $content = json_encode($blockContent);

    $query = getContentQuery();
    $query->bindParam('content', $content);
    $query->bindParam('id', $id, PDO::PARAM_INT);

    executeContentQuery($query, $id);
}

<?php
require_once ADMIN_PARTS_DIR . '/header.php';
$fields = json_decode($block['content'], true);
?>

<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card w-100 d-flex">
                <div class="card-header text-center">
                    <h3>Block: "<?= $block['name'] ?>"</h3>
                </div>
                <form action="/" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="type" value="edit_content">
                    <input type="hidden" name="block_id" value="<?= $block['id'] ?>">
                    <input type="hidden" name="block_name" value="<?= $block['name'] ?>">

                    <div class="card-body">
                        <?php if (!empty($fields['video']['img'])): ?>
                            <div class="mb-3">
                                <p>Current img:</p>
                                <img class="img-thumbnail w-50" src="<?= IMAGES_URI . "/{$fields['video']['img']}" ?>"
                                "/>
                            </div>
                        <?php endif; ?>

                        <div class="mb-3">
                            <label for="img">Upload new img</label>
                            <input type="file" class="form-control" name="img" />
                        </div>
                        <p>Upload new text</p>
                        <div class="mb-3">
                            <label for="subtitle">Subtitle</label>
                            <input type="text" class="form-control" name="subtitle" value="<?= $fields['text']['subtitle'] ?? '' ?>">
                        </div>
                        <div class="mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="<?= $fields['text']['title'] ?? '' ?>">
                        </div>
                        <div class="mb-3">
                            <label for="quote">Quote</label>
                            <textarea class="form-control" name="quote"><?= $fields['text']['quote'] ?? '' ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description"><?= $fields['text']['description'] ?? '' ?></textarea>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-end">
                        <button type="submit" class="btn btn-outline-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require_once ADMIN_PARTS_DIR . '/footer.php';
?>

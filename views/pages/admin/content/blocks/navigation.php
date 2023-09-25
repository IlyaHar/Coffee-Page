<?php
require_once ADMIN_PARTS_DIR . '/header.php';
$fields = json_decode($block['content'], true);

?>
    <div class="container" style="padding-top: 10em;">
        <div class="row">
            <div class="col-2 "></div>
            <div class="col-8 d-flex justify-content-center">
                <div class="card w-100">
                    <div class="card-header text-center"><h3>Block: "<?= $block['name'] ?>"</h3></div>
                    <form action="/" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="type" value="edit_content">
                        <input type="hidden" name="block_id" value="<?= $block['id']?>">
                        <input type="hidden" name="block_name" value="<?= $block['name']?>">
                        <div class="card-body">
                            <?php if (!empty($fields['logo'])): ?>
                            <div class="mb-3">
                                <p>Current logo:</p>
                                <img class="img-thumbnail" src="<?= IMAGES_URI . "/$fields[logo]"?>" />
                            </div>
                        </div>
                           <?php endif; ?>
                        <div class="mb-3">
                            <label class="px-3" for="logo">Upload new logo</label>
                            <input type="file" class="form-control px-3 mt-1" name="logo">
                        </div>
                        <h5 class="px-3">Links:</h5>
                        <div class="mb-3 col-6 offset-3">
                            <?php if (!empty($fields['links'])): ?>
                                <?php foreach ($fields['links'] as $key => $link): ?>
                                    <div class="mb-3">
                                        <div class=" mb-3 d-flex align-items-center justify-content-center px-3 bg-body-secondary py-3 " >
                                            <div class="col-10">
                                                <label for="link_text_<?= $key ?>">Title</label>
                                                <input type="text" class="form-control" id="link_text_<?= $key ?>" value="<?= $link['title'] ?>">
                                                <label for="link_<?= $key ?>">Link</label>
                                                <input type="text" class="form-control" id="link_<?= $key ?>" value="<?= $link['href'] ?>">
                                            </div>
                                            <div class="col-2">
                                                <a href="#" class="btn btn-outline-danger mx-3"><i class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-outline-primary btn-upd ">Update</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php
require_once ADMIN_PARTS_DIR . '/footer.php';



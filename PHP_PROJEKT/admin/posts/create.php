<?php
include '../../path.php';
include "../../app/controllers/posts.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../assets/css/main.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- <script type="text/javascript" src="https://livejs.com/live.js"></script> -->

</head>

<body>
    <!-- --- HEADER --- -->
    <?php include("../../app/include/header-admin.php"); ?>

    <div class="container container__admin">
        <div class="row">
            <?php include '../../app/include/sidebar-admin.php'; ?>
            <div class="posts">
                <div class="button row">
                    <a href="<?php echo BASE_URL . "admin/posts/create.php"; ?>" class="btn btn-success">Add post</a>
                    <a href="<?php echo BASE_URL . "admin/posts/index.php"; ?>" class="btn btn-warning">Manage post</a>
                </div>
                <h2>Add posts</h2>

                <!-- Error output -->
                <?php include '../../app/helps/errorinfo.php'; ?>

                <div class="row add-post">
                    <form action="create.php" method="post" enctype="multipart/form-data">
                        <div class="col">
                            <input name="title" type="text" value="<?= $title ?>" class="form-control"
                                placeholder="Title" aria-label="Post name">
                        </div>
                        <div class="col">
                            <label for="editor">Post content</label>
                            <textarea name="content" class="form-control" id="editor" rows="3"></textarea>
                        </div>
                        <div class="input-group col">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            <input name="img" type="file" class="form-control" id="inputGroupFile02">
                        </div>
                        <select name="topic" class="form-select" aria-label="Select">
                            <option selected>Choose category</option>
                            <?php foreach ($topics as $key => $topic): ?>
                                <option value="<?= $topic['id']; ?>">
                                    <?= $topic['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="form-check">
                            <input name="publish" class="form-check-input" type="checkbox" value="1" id="defaultCheck1"
                                checked>
                            <label class="form-check-label" for="defaultCheck1">
                                Publish
                            </label>
                        </div>
                        <br>
                        <button name="add_post" class="btn btn-primary" type="submit">Save post</button>
                    </form>
                </div>
            </div>

        </div>
    </div>



    <!-- --- FOOTER ---  -->
    <?php include("../../app/include/footer.php"); ?>

    <!-- Visual recadtor for textarea -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/index.js"></script>
</body>

</html>
<?php
include 'links.html';
include 'conection.php';
?>
<html>
<style>
    .main {
        max-width: 600px;
        min-width: 0px;
    }
</style>

<head>
    <title>Create New post</title>
</head>

<body>
    <center>
        <div class="main">
            <h1 class="alert alert-primary text-center">Create New post</h1>
            <form class="text-center inp" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
                </div>
                <div class="mb-3  text-center inp">
                    <label for="block_content" class="form-label">block_content</label>
                    <input type="text" class="form-control" id="Block Content" name="block">
                </div>

                <div class="mb-3  text-center inp">
                    <label for="body" class="form-label">body</label>
                    <textarea type="text" class="form-control" id="body" name="content"></textarea>
                </div>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <script src="ckeditor/ckeditor.js"></script>
        <script src="ckfinder/ckfinder.js"></script>
        <script>
            var ck = CKEDITOR.replace('body');
            CKFinder.setupCKEditor(ck);

            CKEDITOR.on('dialogDefinition', function(e) {
                dName = e.data.name;
                dDef = e.data.definition;

                if (dName == "image") {
                    dDef.removeContents('advanced');
                    let info = dDef.getContents('info');
                    info.remove('txtUrl');
                    info.remove('ratioLock');
                    info.remove('browse');

                    let link = dDef.getContents('Link');
                    link.remove('browse');



                }
                if (dName == "link") {
                    dDef.removeContents('advanced');
                    let info = dDef.getContents('info');
                    info.remove('browse');


                }
            })
        </script>
    </center>
    </form>
</body>
<?php
date_default_timezone_set('Asia/Calcutta');
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $block = $_POST['block'];
    $content = $_POST['content'];

    $ts = date("Y-m-d H:i:s");

    $iq = " INSERT INTO postt(title,blockbody,content,timestamp)VALUES('$title' , '$block' , '$content', '$ts')";

    if (!mysqli_query($con, $iq)) {
        echo '<h3 class="alert alert-danger text-center">Unable To insert data Please try Again</h3>';
        echo '<h3 class="alert alert-danger text-center">"Error: " . $iq . "<br>" . mysqli_error($con)</h3>';
    }
}


?>


</html>
<!DOCTYPE html>
<html>

<?php include(dirname(__DIR__) . '/head.html'); ?>

<body>
<?php include(dirname(__DIR__) . '/navbar.html'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <p class="meme-title">GENERATE YOUR MEME</p>
            <br>
                <div id="memeCanvas">
                    <div class="row">
                        <div class="col-md-7 offset-1">
                            <img class="img-responsive" id="uploadedImage" alt="" src="http://oliclinic.pl/wp-content/uploads/2016/10/orionthemes-placeholder-image.png" width="80%">
                        </div>
                        <div class="col-md-3">
                            <form action="?page=generated" method="POST" ENCTYPE="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="toptext">Top Text</label>
                                    <input type="text" name="toptext" id="toptext" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="bottomtext">Bottom Text</label>
                                    <input type="text" name="bottomtext" id="bottomtext" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="file" value="Upload Your Image" class="form-control" id="chooseImage">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Meme It!" class="btn btn-danger form-control">
                                </div>
                            </form>
                            <br><br>
                        </div>
                    </div>
                </div>
</div>

</body>
</html>
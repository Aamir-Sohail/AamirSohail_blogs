<?php include('./includes/header.php'); 
?>
<div class="container">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Add Blog</h4>
            <p class="card-category">Add Content to your Blog</p>
        </div>
        <div class="card-body">
            <form action="add_blog_back.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label>Tag</label>
                            <input type="text" name="tag" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Blog Content</label>
                            <div class="form-group bmd-form-group">
                                <textarea class="form-control" name="desp" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Add Image</label>
                    <input type="file" class="form-control-file" name="img" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary pull-right">Add</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<?php include('./includes/footer.php') ?>
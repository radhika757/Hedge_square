<?php
echo view('Admin/admin-sidebar');
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<div class="w3-container w3-light-grey mt-4 p-3">
    <h3 class="sidebarTitle m-2">Add a new Blog</h3>
    <!-- <button class="btn  btn-outline-dark float-right">Add Blog</button> -->
    <a href='<?php echo base_url() ?>/blogs' class="btn btn-outline-dark float-right "><span>All Blog</span></a>
</div>
<br>
<form class="m-form m-form--state m-form--fit m-form--label-align-right" id="customerform" action="<?php echo base_url() ?>/add_blog_new" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="panel-body">

        <div class="form-group">
            <div class="row">
                <input type="hidden" name="blg_id" value="<?php echo $edblog['id'] ?>">
                <label class="col-3 control-label m-4">Title</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="blog_title" id="blog_title" placeholder="Enter blog title" value="<?php echo $edblog['title'] ?>">

                </div>
            </div>

            <div class="row">
                <label class="col-3 control-label m-4">Blog Type</label>
                <div class="col-sm-7">
                    <select class="form-select form-control" name="blog-cat" aria-label="Default select example">
                        <option selected><?php echo $edblog['category']; ?></option>
                        <option value="Legal">Legal</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="commerce">E-commerce</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <label for="short description" class="col-3 m-4">Short Description</label>
                <div class="col-sm-6">
                    <textarea class="form-control form-select form-control-lg" name="shrtdesc" id="shrtdesc" value="" rows="4"><?php echo $edblog['short_descr']; ?> </textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <label for="description" class="col-3 m-4">Description</label>
                <div class="col-sm-6">
                    <textarea class="form-control form-select form-control-lg" id="desc" name="descr" rows="4"><?php echo $edblog['descr']; ?></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <label for="file" class="col-3 m-4">File</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control-file form-select" name="imgs" id="fileinput"> <br>
                  
                    <img src="<?php echo app_path2 .$edblog['file'] ?>" alt="img"   width="60%" height="130px">
                </div>
                <input type="hidden" name="hiddenimg"  value="<?php echo $edblog['file'] ?>">
            </div>
            <div class="row">
                <label class="col-3 control-label m-4">Created by</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control m-3" name="created" value="<?php echo $edblog['created_by']; ?>" id="created">
                </div>
            </div>
            <!-- 
            <label class="form-check-label col-3 control-label m-3" for="radio1">Status</label>
            <div class="row"> -->
            <!--            
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input " id="radio1" name="optradio" value="option1">
                </div>
                <label class="form-check-label col-3 control-label " for="radio1">Available</label>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">
              
                <label class="form-check-label col-3 control-label" for="radio1">Available</label>
            </div> -->
            <div class="row">
                <label class="col-3 control-label m-4">Status</label>
                <div class="col-sm-7">
                    <label class="col-3 control-label ">Available</label>
                    <input type="radio" class="form-check-input" name="avail" id="avail" value="1" <?php
                                                                                                    if ($edblog['status'] == '1') {
                                                                                                        echo 'checked';
                                                                                                    }
                                                                                                    ?>>

                    <label class="col-3 control-label ms-4 ">Unavailable</label>
                    <input type="radio" class="form-check-input-1 ms-4" name="unavail" id="unavail" <?php
                                                                                                    if ($edblog['status'] == '0') {
                                                                                                        echo 'checked';
                                                                                                    }
                                                                                                    ?>>
                </div>
            </div>

            <div class="col-lg-12" style="text-align:center">
                <button type="submit" class="btn  btn-outline-dark" onclick="">Update</button>
                <a href="blogs" class="btn btn-outline-danger">Cancel</a>
            </div>
        </div>

    </div>
    </div>
</form>
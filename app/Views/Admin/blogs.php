<?php 
echo view('Admin/admin-sidebar');

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<style>
    .sidebarTitle{
        display: flex;
        justify-content: center;
    }
</style>

<div class="w3-container w3-light-grey mt-4 p-3">
    <h3 class="sidebarTitle">Blogs</h3>
    <!-- <button class="btn  btn-outline-dark float-right">Add Blog</button> -->
    <a href= 'Blog' class="btn btn-outline-dark float-right"><span>Add Blog</span></a>
</div>

<table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Blog ID</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Posted On</th>
      <th scope="col">Created By</th>
      <th scope="col">Status</th>
      <th scope="col">Views</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    $num = 1; 
foreach($blog_display as $blg){
  // for( $i = 1; $i<10; $i++){
    ?>
    <tr>
      <th scope="row"><?php echo $num;  ?></th>
      <td><?php echo $blg['title'] ?></td>
      <td><?php echo $blg['category'] ?></td>
      <td><?php echo $blg['posted_on'] ?></td>
      <td><?php echo $blg['created_by'] ?></td>     
      <td><?php echo $blg['status']; ?></td>
      <td><?php echo $blg['views'];
       $num ++;
      ?> </td>
      <td><a href="<?php echo base_url();?>/edit_blog/<?php echo $blg['id']; ?>" class="btn btn-light">Edit</a> <a href="<?php echo base_url();?>/blog_delete/<?php echo $blg['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>  
    
    <?php

}
    ?>
  </tbody>
</table>
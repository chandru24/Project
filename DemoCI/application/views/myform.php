<!DOCTYPE html>  
<html>  
  <head>  
    <title>Form</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
                padding:5px;
                background-color:#F5F5F5;
            }
        a:hover
        {
            color: orange;
            text-decoration: none;
        }
    </style>
  </head>

  <body>  
  <h1 align="center">CRUD OPERATION</h1>
  <form class="form-horizontal" method="post" action="<?php echo base_url('FormC/postdata'); ?>">
     <?php echo form_open('FormC'); ?>  

      <div class="form-group">
        <label class="control-label col-xs-1">Title:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?=set_value('title');?>" >
          <?php echo form_error('title','<div class="text-danger">','</div>'); ?>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-xs-1">Description:</label>
        <div class="col-sm-10"> 
           <textarea rows='5' class="form-control" name="descr" id="descr" placeholder="Enter Description"><?=set_value('descr');?></textarea>
           <?php echo form_error('descr','<div class="text-danger">','</div>'); ?>
        </div>
      
      <div class="form-group"> 
        <div class="col-sm-offset-1 col-sm-10" style="color:blue;margin-top:15px;margin-left:125px;">
          <button type="submit" class="btn btn-info">POST</button>
          <button type="reset" class="btn btn-warning">CLEAR</button>
        </div>
      </div>

  </form>


  <div style="margin:50px 125px 100px 125px;">
    <table class="table table-bordered table-hover">
      <thead class="thead-dark" style="background-color:black;color:white;">
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Update</th>  
          <th>Remove</th>
        </tr>
      </thead>
      <tbody style="background-color:white;">  
        <?php  
            foreach($posts as $row)  
            {  ?>  
                <tr>  
                  <td><?php echo $row->title ?></td>  
                  <td><?php echo $row->descr ?></td> 
                  <td><a href='<?php echo base_url('editdata.php?id=').$row->id;?>'>Update</a></td>
                  <td><a href='<?php echo base_url('deletedata.php?id=').$row->id;?>'>Remove</a></td>   
                </tr>
        <?php  } ?> 
      </tbody>  
    </div>

 </body>  
</html>
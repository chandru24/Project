<!DOCTYPE html>  
<html>  
<head>  
    <title>Form</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
                padding:30px;
                background-color:#F5F5F5;
        }
   </style>
</head>  
<body>  
    <h1 align="center">UPDATE DATABASE</h1>
    <?php foreach ($post as $row) {?> 
    <form class="form-horizontal" method="post" action="<?php echo base_url('FormC/updatedata'); ?>">  
    <?php echo form_open('FormC'); ?>  
    <div class="form-group">
    <label class="control-label col-xs-1" for="id">ID:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id" id="id" value="<?php echo $row->id; ?>" readonly>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-xs-1" for="title">Title:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" id="title" value="<?php echo set_value('title',$row->title);?>" >
      <?php echo form_error('title','<div class="text-danger">','</div>'); ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-1" for="descr">Description:</label>
    <div class="col-sm-10"> 
  <input class="form-control" type="text" name="descr" id="descr"value="<?php echo set_value('descr',$row->descr);?>" >
  <?php echo form_error('descr','<div class="text-danger">','</div>'); ?>
  </div>
    </div>
 <div class="form-group"> 
    <div class="col-sm-offset-1 col-sm-10" style="color:blue;margin-top:15px;margin-left:125px;">
      <button type="submit" class="btn btn-info">UPDATE</button>
    </div>
    </form>
    <?php } ?>   
</body>
</html>
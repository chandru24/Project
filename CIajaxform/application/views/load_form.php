<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<style>
    body{
                padding:5px;
                background-color:#F5F5F5;
            }
</style>
<body>
<div id="head"></div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script>

      // $(function(){
      //     $("form[name='saveform']").validate({
      //         rules:
      //         {
      //             fname:
      //             {
      //                 required: true,
      //                 minlength: 3
      //             },
      //             lname:"required"
      //         },
      //         messages:
      //         {
      //             fname:
      //             {
      //                 required: "Please Enter Your First Name",
      //                 minlength: "Name must be atleast 3 characters long"
      //             },
      //             lname: "Please Enter Your Last Name"
      //         },
      //         submitHandler: function(form)
      //         {
      //             form.submit();
      //         }
      //     });
      // });


        $(document).ready(function()
        {
            $('#loadhead').click(function()         
            {      
                $.ajax(                             
                {
                    url:'<//?=base_url()?>index.php/MyForm/loadHead',
                    success: function(result)
                    {  
                      $('#head').html(result);
                     
                    }
                });
            });
        });

</script>

<form class="form-horizontal" id="saveform" name="saveform" method="post" action="<?php echo base_url("index.php/MyForm/postdata"); ?>" style="margin:20px 240px 50px 380px;">
<?php echo form_open('MyForm'); ?>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" value="<?=set_value('fname');?>">
      <?php echo form_error('fname','<div class="text-danger">','</div>'); ?>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" value="<?=set_value('lname');?>">
      <?php echo form_error('lname','<div class="text-danger">','</div>'); ?>
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info" name="loadhead" id="loadhead" style="margin:20px 240px 50px 130px;">Submit</button>
    </div>
  </div>
</form>

</body>
</html>
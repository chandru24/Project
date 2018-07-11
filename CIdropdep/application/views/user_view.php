<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropdown Dependency</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-color:#F5F5F5;">

<div class="w3-container" style="padding:10px 100px 75px 100px;">
<h1 align="center" style="color:rgba(30, 30, 30);">DROPDOWN DEPENDENCY</h1>
<table class="w3-table-all w3-card-4">


<tr>
  <td>Brand</td>
  <td>
    <select id='sel_brand'>
      <option>-- Select brand --</option>
      <?php
      foreach($brands as $brand){
        echo "<option value='".$brand['id']."'>".$brand['bname']."</option>";
      }
      ?>
   </select>
 </td>
</tr>


<tr>
 <td>Type</td>
 <td>
   <select id='sel_type'>
     <option>-- Select type --</option>
   </select>
 </td>
</tr>


<tr>
 <td>Model</td>
 <td>
   <select id='sel_model'>
     <option>-- Select model --</option>
   </select>
 </td>
</tr>
</table>
</div>
</div>
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type='text/javascript'>

    var baseURL= "<?php echo base_url();?>";        // baseURL variable

    $(document).ready(function()
    {
        $('#sel_brand').change(function()         // brand change
        {      
            var brand = $(this).val();
            $.ajax(                              // AJAX request
            {
                url:'<?=base_url()?>index.php/User/getType',
                method: 'post',
                data: {brand: brand},
                dataType: 'json',
                success: function(response)
                { 
        
                    $('#sel_model').find('option').not(':first').remove();       // Remove options 
                    $('#sel_type').find('option').not(':first').remove();
                    $.each(response,function(index,data)                        // Add options
                    {                       
                        $('#sel_type').append('<option value="'+data['id']+'">'+data['tname']+'</option>');
                    });
                    
                }
            });
        });

        $('#sel_type').change(function()      // type change
        {
            var type = $(this).val();
            $.ajax(
            {                             // AJAX request
                url:'<?=base_url()?>index.php/User/getModel',
                method: 'post',
                data: {type: type},
                dataType: 'json',
                success: function(response)
                {
                    $('#sel_model').find('option').not(':first').remove();       // Remove options
                    $.each(response,function(index,data)        // Add options
                    {
                        $('#sel_model').append('<option value="'+data['id']+'">'+data['mname']+'</option>');
                    });
                }
            });
        });
    });
</script>
    
</body>
</html>
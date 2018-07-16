<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
</head>
<style>
    body{
                padding:5px;
                background-color:#F5F5F5;
            }
</style>
<body>
    <h1 class="text-center">AJAX FORM</h1>
    <button type="button" class="btn btn-info" name="loadform" id="loadform" style="margin:20px 50px 50px 640px;">Get Form</button>
    <div id="form"></div>
    
    <script type="text/javascript">

       
        $(document).ready(function()
        {
            $('#loadform').click(function()         
            {      
                $.ajax(                             
                {
                    url:'<?=base_url()?>index.php/MyForm/loadForm',
                    success: function(result)
                    {  
                        $('#form').html(result);
                    }
                });
            });
        });

    </script>
</body>
</html>
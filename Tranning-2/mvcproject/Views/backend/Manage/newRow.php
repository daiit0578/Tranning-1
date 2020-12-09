<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <title>Document</title>
</head>
<body>
<div class="container">
      
    <button class="btn btn-light" style="margin-left:850px;margin-top:50px"><a href="http://localhost/tranning-2/mvcproject/index.php?controller=manage"> Back</a></button>
    <hr style="Width:100%">

    <table class="table table-striped"  >
   
<form action="index.php?controller=manage&action=createNewRow" method ='post'>
    
    
    <tr>
    <td class = "first">Title</td>
    <?php
        echo ' <td class="last"><input type="text" name="title" > </td>';
    ?>
    </tr>
    
    <tr>
    <td>Description</td>
    <?php
        echo ' <td class="last"> <textarea name="description" id="" cols="30" rows="5" ></textarea></td>';
    ?>
    </tr>
    
    <tr>
    <td>Image</td>
    <?php

        echo ' <td class="last"><input type="file" name="image" ></td>';
    ?>
    
    
    </tr>

    <tr>
    <td>Status</td>
    <?php
        echo ' <td class="last">';
    ?>
    <select name="status" i>
        <option value="Enabled">Enabled</option>
        <option value="Disabled">Disabled</option>        
    </select>
    <?php
        
        echo ' </td>';
    ?>
    </tr>
   
    
    <tr>
    <td></td>
    <td  > <input class="btn btn-light" style="width:100px" type="submit" value="Submit"></td>
    </tr>

    </form>
    </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <title>Document</title>
    <style>
    .first{
        width:30%;
    }
    .last{
        width:70%;
    }
    img{
        width:120px
    }
    
    </style>
</head>
<body>
<?php 

?>
    <div class="container">
    <span style="display:inline" >Edit</span>
    <button style="margin-left:850px"  class="btn btn-primary">Show</button>    
    <button class="btn btn-light"><a href="http://localhost/tranning-2/mvcproject/index.php?controller=manage"> Back</a></button>
    <hr style="Width:100%">

    <table class="table table-striped"  >
    <?php
    echo '<form action="index.php?controller=manage&id='.$listId[0]['Id'].'"  method ="post">'
    ?>

    <form action="index.php?controller=manage&id =$listId[0]['id']"  method ="post">
    
    <tr>
    <td class = "first">Title</td>
    <?php
        echo ' <td class="last"><input type="text" name="title" id="" value="'.$listId[0]['Title'].'"> </td>';
    ?>
    </tr>
    
    <tr>
    <td>Description</td>
    <?php
        echo ' <td class="last"> <textarea name="description" id="" cols="30" rows="5" >'.$listId[0]['Description'].'</textarea></td>';
    ?>
    </tr>
    
    <tr>
    <td>Image</td>
    <?php

        echo ' <td class="last"><img src="' . $listId[0]['Image'] . '" >'; 
        echo '<input type="file" name="image" >';
    ?>
    
    <?php 
    echo '</td>';
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
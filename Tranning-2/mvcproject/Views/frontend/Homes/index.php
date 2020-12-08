<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../bootstrap/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">


    <!-- <script src="../bootstrap/bootstrap.min.js"></script> -->
    <title>Document</title>
    <style>
    img {
        width: 120px
    }



    /* a{
        text-decoration: none;
    } */
    .back {
        border-radius: 10px;
        width: 50px;
        margin-left: 968px;
    }
    </style>
</head>

<body>

    <div class='container'>
        <hr style="width: 100%;">
        <span> - List Post</span>

        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope='col' style="width:10%"> ID</th>
                    <th style="width:20%">Thumb</th>
                    <th style="width:70%">Title</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                  $countRow= count($manage);
                    for ($i=0 ;$i < $countRow; $i++)
                    {
                      echo '<tr>';
                      echo '<td>' . $manage[$i]['Id'] . '</td>';
                      echo '<td><img src="' . $manage[$i]['Image'] . '" ></td>';
                      echo '<td> <a href="http://localhost/tranning-2/mvcproject/index.php?controller=home&id='. $manage[$i]['Id'].'">' . $manage[$i]['Title'] . '</a></td>';
                            
                      echo '</tr>';
                    }
        
        ?>
            </tbody>
        </table>
        <?php

       if(count($dataId ) == 1){

        echo '<span> - Show post:</span> ';            
        echo '<button class= "back "><a  href="http://localhost/tranning-2/mvcproject/index.php?controller=home">Back</a></button>';
        echo '<table style="width:90%" style="border-collapse:collapse" >';
        echo '<thead>';
        echo '<tr>';
        echo '<th style = "width:20%"><img style ="width : 200px" src='.$dataId[0]['Image'].'></th>';
        echo  '<th style = "width:80%">'.$dataId[0]['Description'].'</th>'    ;            
        echo  '</tr>';
        echo    '</thead>';
        echo '</table>';
       }
       
       ?>
    </div>

</body>

</html>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
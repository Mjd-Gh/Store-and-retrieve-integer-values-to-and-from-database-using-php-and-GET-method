<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Data table</title>
</head>

<style>
    .tBody{
        margin: 5% 30% ;
    }

    h2{
        padding-bottom: 10px;
    }

    table{
        width: 90% ; 
        border:solid 5px; 
        text-align: center;
    }

    td{
        color: blue;
    }

    a{
        margin-left: 20px;
        color: blue;
    }
    a:hover{
        color: lightBlue;
    }

</style>
<body>
    <a href="index.php"> Back to the form</a>
   
    <div class="tBody">
    <h2>Database table of integer values </h2>

    <!--Create a table to display the data -->
    <table class="table" >
        <thead>
            <tr>
                <th>Integer number</th>
            </tr>
        </thead>
        <tbody>

        <?php

        //Start database connection  
        include 'connec.php';

        //Read all data in the table 
        $query = "SELECT * FROM int_number";
        $result = $database->query($query); //execute the query

        //Check the validity of the query
        if(!$result){
            die("Invalid query: ". $database->error);
        }

        //Read the data in each row
        while($row = $result->fetch()){

            //Print each data at the table data row

            echo "<tr>
               <td>" .$row["number"]. "</td>
             </tr>";

        }

        ?>
        </tbody>
    </table>
    </div>
</body>
</html>
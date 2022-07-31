<!DOCTYPE html >
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <script src="script.js"></script>
    <title>Store integers</title>
</head>

<!-- Page styling -->
<style>
    a{
        margin-left: 70px;
        text-decoration: none;
        color: blue;
    }
    a:hover{
        color: lightBlue;
    }
    h4{
        padding: 5px;
        margin: 20px 0 10px 50px;
    }
    form{
        padding: 15px;
        border: solid 1px;
        width: 50%;
        margin-left: 70px;
        margin-bottom: 10px;
    }
    label{
        font-weight: bold;
    }
    input{
        margin: 10px;
        display: block;
    }
</style>

<?php
    //Start database connection  
    include 'connec.php';
    
    //If the form sumbmited do the following steps
    if(isset($_GET['save'])){

        //check for the heihest id to orgnize id incrimintation statment
        $query = "ALTER TABLE int_number AUTO_INCREMENT = 1";
        $database->query($query); //execute the query

        //Insert the submited value into the database table statment
        $sql = " INSERT INTO int_number(number) VALUES('".$_GET['number']."') ";
        $database->query($sql); //execute the query
    }
?>
 

<body>
    <h4>This form will store an integers value</h4>
        <form id="numbers" action="" method="get">
            <label for="num">Enter an integer number:</label>
            <input type="number" id="num" name="number" step="1" value="">
            <input type="submit" name="save" value="Submit">
        </form>
        <a href="table.php"> Click here to display all data</a>
</body>
</html>
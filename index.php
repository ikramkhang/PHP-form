<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create HTML Form & Get User Name </title>
</head>
<style>
    .text_in{
         width:220px;
         height: 30px;
    }
    .container{
        text-align:center;
        border:2px solid black;
        width: 500px;
        margin-left:35%;
        background-color: rgb(05 150 210);
        height:700px;   
    };
</style>
<body>
   <!-- html form -->
    <form method="post" class="container">
    <h1>Enter Your Name</h1>
    <input type="text" placeholder="Username" name="name" class="text_in"><br><br>
    <input type="submit" name="submit" value="submit data" style="width: 150px; height:30px; background-color:rgb(100 200 30);">

   <!-- php -->
    <?php
    if(isset($_POST['submit'])) {
        $name =$_POST['name'];
        echo "<br><br>Hello Miss  <h2 style=background-color:red;>$name</h2>";
    }
    // current file path
    print "<h3>Current File Path</h3>"; 
    echo __FILE__,"<br>";
    echo __LINE__," Line";
    echo __CLASS__;
     
    //   variables
    print "<h3>variables</h3>";
    $Day="Good Morning"."<br>Have A Nice Day";
    echo ($Day);
    //  Conditions
    print "<h3>Conditions</h3>"; 
    $message_1 = "<br>Good Morning.";
    $message_2 = "Have a nice day!";
    echo $message_1.$message_2;

    ?>
       </form>
</body>
</html>
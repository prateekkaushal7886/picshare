
<?php
ob_start();
$servername = "localhost";
$username = "id2404113_prateekkaushal";
$password = "9431882047";
$dbname = "id2404113_face";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $fname = $_POST['notes'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM wall WHERE id=$fname";

    // use exec() because no results are returned
    $conn->exec($sql);
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
header("Location: wall1.php");
        ob_end_flush();

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="5.css">
</head>
<body>
<script type="text/javascript">
         <!--
            function Redirect() {
              window.history.back();
              //  location.reload();
            }
         //-->
         
      </script> 

<div class="cover"> 
<div class="tx">YOUR NOTES HAS BEEN DELETED!!!LOST DATA CAN NOT BE RETRIEVED.</div>
<div class="tx1"><input type="submit" name="tf" value="YEP!!!" onclick="Redirect();"></div>

</body>





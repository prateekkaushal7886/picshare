    

<?php

session_start();
$myfile = fopen("go.txt", "w") or die("Unable to open file!");
$mobil=2;
fwrite($myfile, $mobil);
fclose($myfile);
if (1) {
 	$mobile=$_SESSION["phone"];
    $pass=$_SESSION["password"];

    $myfile = fopen("mob.txt", "w") or die("Unable to open file!");

fwrite($myfile, $mobile);
fclose($myfile);
    
    $servername = "localhost";
$username = "id2404113_prateekkaushal";
$password = "9431882047";
$conn = new PDO("mysql:host=$servername;dbname=id2404113_face", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "WELCOME";

    $sql = "SELECT FIRSTNAME,SURNAME,MOBILENUMBER,PASSWORD,DAY,MONTH,YEAR,SEX FROM account where MOBILENUMBER=$mobile";
    foreach ($conn->query($sql) as $row) {
       /* print $row['FIRSTNAME'] . "<br />";
        print $row['SURNAME'] . "<br />";
        print $row['SEX'] . "\n";*/
   
}
}
    ?>

    
       
        
   <script type="text/javascript">
         <!--
            function Redirect() {
               window.location="index.php";
              // location.reload();
            }
           
         //-->
         
      </script> 
    

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="wall1.css">
</head>
<body>





<div class="wall">
<h2>YOUR WALL:</h2><br /><br />
<?php

 $m=$_SESSION['p1'];
$sql3 = "SELECT ID,MOBILENUMBER,FIRSTNAME FROM account where MOBILENUMBER=$m ";
foreach ($conn->query($sql3) as $row) {
      // print $row['MOBILENUMBER'] . " ";
$idk=$row['ID']; 
   }


 $sql4 = "SELECT id,MOBILENUMBER,name,id1 FROM wall where id1=$idk";
 
foreach ($conn->query($sql4) as $row) {
    //echo $row['MOBILENUMBER'];
    $sql3 = "SELECT ID,MOBILENUMBER,FIRSTNAME,SURNAME FROM account where MOBILENUMBER=".$row['MOBILENUMBER'];
    echo "<h3>";
    echo $row['id'].". ";
    foreach ($conn->query($sql3) as $row1) {
       print $row1['FIRSTNAME'] . " ".$row1['SURNAME'].":<br /> ";

   }
   echo "</h3>";
echo '<img src='.$row['name'].' />';
echo "<br /><br /><br /><br />";

}
?>
</div>
<div class="header">
    
        <h1 class="wel">
                    <?php
             foreach ($conn->query($sql) as $row) {
            print "WELCOME ".$row['FIRSTNAME'] ;
       
   
            }
            ?>
        </h1>
       <div class="out"><input type="submit" name="submit" value="LOG OUT" onclick="Redirect();" ></div>
        </div>

<div class="left">
    
  
  <h2>YOUR DETAILS:</h2>
    
        <table cellpadding="2px" class="t1" border="2px">


<tr>
                <td>NAME:</td><td>
                    <?php

foreach ($conn->query($sql) as $row) {
       print $row['FIRSTNAME'] . " ";
        print $row['SURNAME'] . " ";
       /* print $row['SEX'] . "\n";*/
   
}

                    ?>
                    
                </td>
            </tr>











            <tr>
                <td>MOBILE NUMBER:</td><td>
                    <?php

foreach ($conn->query($sql) as $row) {
       print $row['MOBILENUMBER'] . " ";
       
       /* print $row['SEX'] . "\n";*/
   
}

                    ?>
                    
                </td>
            </tr>

<tr>
                <td>DATE OF BIRTH:</td><td>
                    <?php

foreach ($conn->query($sql) as $row) {
       print $row['DAY'] . " ";
        print $row['MONTH'] . " ";
        print $row['YEAR'] . "";
   
}

                    ?>
                    
                </td>
            </tr>


            <tr>
                <td>GENDER:</td><td>
                    <?php

foreach ($conn->query($sql) as $row) {
       print $row['SEX'] . " ";
        
       /* print $row['SEX'] . "\n";*/
   
}

                    ?>
                    
                </td>
            </tr>

            
        </table>
        <br /><br />



<h2>DELETE IMAGE:</h2>
<form action="j1.php" method="post" enctype="multipart/form-data">
    
   
    <h4>DELETE THE IMAGE</h4><br />
    <input type="text" name="notes"  placeholder=" ENTER ID" padding='6'><br /><br />
    <input type="submit" value="Delete Image" name="submit">
</form>


</div>




<div class="right">
   <h2>PEOPLE TO SHARE IMAGES:</h2> 
<?php


    $sql1 = "SELECT id,MOBILENUMBER,NOTES FROM data where MOBILENUMBER=$mobile";
   $sql2 = "SELECT FIRSTNAME,SURNAME,MOBILENUMBER,PASSWORD,DAY,MONTH,YEAR,SEX,ID FROM account";
    echo "<table border='2px' width=''>";
    echo "<tr><td><strong>ID</strong></td><td><strong>NAME</strong></td></tr>";
    foreach ($conn->query($sql2) as $row) {
echo "<tr><td>";

       print $row['ID'];

       echo "</td><td>";
       print $row['FIRSTNAME'];
        print " ";
        print $row['SURNAME'];
        //print $row['SEX'] . "\n";
   echo "</td></tr>";
}
echo "</table>";





        ?>



<h2>UPLOAD IMAGE:</h2>
<form action="j.php" method="post" enctype="multipart/form-data">
    <h4>Select image to upload:</h4>
    <input type="file" name="fileToUpload" id="fileToUpload"><br />
    <br />
    <h4>SHARE THE IMAGE</h4><br />
    <input type="text" name="notes"  placeholder=" ENTER ID" padding='6'><br /><br />
    <input type="submit" value="Upload Image" name="submit">
</form>




</div>









</body>
</html>
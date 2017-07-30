<?php
$servername = "localhost";
$username = "id2404113_prateekkaushal";
$password = "9431882047";
 //$conn = new PDO("mysql:host=$servername;dbname=face", $username, $password);
   // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // collect value of input field
    $fname = $_POST['firstname'];
    $sname=$_POST['surname'];
    $mobile=$_POST['mobile'];
    $pass=$_POST['password'];
    $day=$_POST['Day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $sex=$_POST['sex'];

     $myfile = fopen("nid.txt", "r") or die("Unable to open file!");
$iddd=fgets($myfile);
fclose($myfile);


 if (is_numeric($mobile)) {
       
   

if($fname =="" || $sname=="" ||
    $mobile=="" ||
    $pass=="" ||
    $day=="" ||
    $month=="" ||
    $year=="" ||
    $sex=="")

{}
else
{
    
try
{

    /*connect to database*/
    $conn = new PDO("mysql:host=$servername;dbname=id2404113_face", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //execute sql command
    $stmt = $conn->prepare("INSERT INTO account(FIRSTNAME,SURNAME,MOBILENUMBER,PASSWORD,DAY,MONTH,YEAR,SEX,ID) VALUES (:firstname,:surname,:mobilenumber,:password,:day,:month,:year,:sex,:id)");  
    $stmt->bindParam("firstname", $fname,PDO::PARAM_STR) ;
    $stmt->bindParam("surname", $sname,PDO::PARAM_STR) ;
    $stmt->bindParam("mobilenumber", $mobile,PDO::PARAM_STR) ;
    $stmt->bindParam("password", $pass,PDO::PARAM_STR) ;
    $stmt->bindParam("day", $day,PDO::PARAM_STR) ;
    $stmt->bindParam("month", $month,PDO::PARAM_STR) ;
    $stmt->bindParam("year", $year,PDO::PARAM_STR) ;
    $stmt->bindParam("sex", $sex,PDO::PARAM_STR) ;
     $stmt->bindParam("id", $iddd,PDO::PARAM_STR) ;

    $stmt->execute();

$iddd+=1;
$myfile = fopen("nid.txt", "w") or die("Unable to open file!");

fwrite($myfile, $iddd);
fclose($myfile);

    

ob_start();
header("Location: index3.php");
        ob_end_flush();

    
}

catch(PDOException $e)
{
   echo  $e->getMessage(); 
}



























}
 } else {
        ob_start();
header("Location: acc.php");
        ob_end_flush();

        
    }

    
    
}









?>

















<!DOCTYPE html>
<html>
<head>
    <title>Spring Fest</title>
    <link rel="stylesheet" type="text/css" href="ind1.css">
</head>
<body>
<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="index.php";
            }
         //-->
      </script>
<h1>CLOUDY NOTES</h1>

<div class="in">

<form class="b">
     <table class="b1" cellpadding="3" >

       <tr><td> <h2>SIGN IN</h2></td></tr>
        <tr class="b3">
            <td><input type="text" name="phone" size="20" placeholder=" MOBILE NUMBER"></td> </tr><tr> 
            <td><input type="password" name="password" size="20" placeholder=" PASSWORD"></td> </tr><tr> 
            <td class="b6"><input type="submit" value="Log in" class="b4" /></td>
        </tr>

        
    </table> 
</form>
</div>







<div class="right">
    
<h2>SIGN UP</h2>

<form class="r" >
    <input type="text" placeholder=" First Name" class="g" name="firstname"/>
    <input type="text"  placeholder=" Surname" class="g" name="surname" />
    <br /><br />
    <input type="text"  placeholder=" Mobile Number" class="g" size="48" name="mobile" />
    <br /><br />
    <input type="password"  placeholder=" New password" class="g" size="48" name="password" />
    <br />
    <br />
    <h3>Birthday</h3>
    <div class="z1">

<select name="Day" class="aaa" value="Day" >
<option class="aa">Day</option>
<option class="aa">1</option><option class="aa">2</option><option class="aa">3</option><option class="aa">4</option><option class="aa">5</option><option class="aa">6</option><option class="aa">7</option><option class="aa">8</option><option class="aa">9</option><option class="aa">10</option><option class="aa">11</option><option class="aa">12</option><option class="aa">13</option><option class="aa">14</option><option class="aa">15</option><option class="aa">16</option><option class="aa">17</option><option class="aa">18</option><option class="aa">19</option><option class="aa">20</option><option class="aa">21</option><option class="aa">22</option><option class="aa">23</option><option class="aa">24</option><option class="aa">25</option><option class="aa">26</option><option class="aa">27</option><option class="aa">28</option><option class="aa">29</option><option class="aa">30</option><option class="aa">31</option>

</select>
<select name="month" value="month" class="aaa" >
    <option class="aa">Month</option><option class="aa">Jan</option><option class="aa">Feb</option><option class="aa">Mar</option><option class="aa">Apr</option><option class="aa">May</option><option class="aa">Jun</option><option class="aa">Jul</option><option class="aa">Aug</option><option class="aa">Sep</option><option class="aa">Oct</option><option class="aa">Nov</option><option class="aa">Dec</option>
</select>
<select class="aaa" name="year" value="year">
    <option class="aa">Year</option>
    <option class="aa">1990</option>
    <option class="aa">1991</option>
    <option class="aa">1992</option>
    <option class="aa">1993</option>
    <option class="aa">1994</option>
    <option class="aa">1995</option>
    <option class="aa">1996</option>
    <option class="aa">1997</option>
    <option class="aa">1998</option>
    <option class="aa">1999</option>
    <option class="aa">2000</option>
</select>
</div>
<br />
<div id="sex">
Male:<input type="radio" name="sex" value="male"/>
Female:<input type="radio" name="sex" value="female">
</div>

<div id="l">
<input type="submit" value="SIGN UP" class="z3">
</div>


</form>

</div>
<div class="cover"> 
<div class="tx">SORRY,YOUR ACCOUNT COULD NOT BE CREATED.EITHER ONE OF THE FIELDS IS MISSING OR YOUR USERNAME IS NOT UNIQUE.</div>
<div class="tx1"><input type="submit" name="tf" value="YEP!!!" onclick="Redirect();"></div>




</div>



</body>
</html>
<?php


$servername = "localhost";
$username = "id2404113_prateekkaushal";
$password = "9431882047";

      
$myfile = fopen("west1.txt", "r") or die("Unable to open file!");
$idddk=fgets($myfile);
fclose($myfile);


$idddk+=1;
$myfile = fopen("west1.txt", "w") or die("Unable to open file!");

fwrite($myfile, $idddk);
fclose($myfile);


$target_dir = "uploads/";
$target_file = $target_dir .$idddk.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
session_start();
$_SESSION["p2"] = $_POST['notes'];


    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;








    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";



 $m=$_SESSION['p1'];
 $mo=$_SESSION['p2'];






 try {
    $conn = new PDO("mysql:host=$servername;dbname=id2404113_face", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sql = "INSERT INTO MyGuests (firstname, lastname, email)
    //VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    //$conn->exec($sql);
  $myfile = fopen("west.txt", "r") or die("Unable to open file!");
$iddd=fgets($myfile);
fclose($myfile);


$iddd+=1;
$myfile = fopen("west.txt", "w") or die("Unable to open file!");

fwrite($myfile, $iddd);
fclose($myfile);



     $stmt = $conn->prepare("INSERT INTO wall(id,name,MOBILENUMBER,id1) VALUES (:firstname,:surname,:mobilenumber,:id)");  
    $stmt->bindParam("firstname", $iddd,PDO::PARAM_INT) ;
    $stmt->bindParam("surname", $target_file,PDO::PARAM_STR) ;
    $stmt->bindParam("mobilenumber", $m,PDO::PARAM_STR) ;
     $stmt->bindParam("id", $mo,PDO::PARAM_STR) ;

 $stmt->execute();



    }
catch(PDOException $e)
    {
    echo $stmt . "<br>" . $e->getMessage();
    }

































 ob_start();
        header("Location: wall1.php");
        ob_end_flush();  
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




?>






https://task1jsprateek.000webhostapp.com/

https://prateekkaushaliitkgp.000webhostapp.com
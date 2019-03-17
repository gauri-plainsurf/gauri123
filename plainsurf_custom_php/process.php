<?php
$conn = new mysqli('localhost', 'root', '', 'form');
//check connection

if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
echo "connected successfully";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_id = $_POST['email_id'];
$phone_no = $_POST['phone_no'];
$description = $_POST['description'];
$opt = $_POST['opt'];

$currentDir = getcwd();
$uploadDirectory = "/uploads/" . $fileName;
    
$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['pdf', 'doc', 'txt', 'jpg', 'png','jpeg']; // Get all the file extensions
print_r($myfile);
$fileName ="contact_". time() . mt_rand(0, 1000) .( $_FILES['myfile']['name']);

$fileSize = $_FILES['myfile']['size'];
$fileTmpName = $_FILES['myfile']['tmp_name'];
$fileType = $_FILES['myfile']['type'];
$fileExtension = strtolower(end(explode('.', $fileName)));

$uploadPath = $currentDir . $uploadDirectory . basename($fileName);

if (isset($_POST['submit'])) {

    if (!in_array($fileExtension, $fileExtensions)) {
        $errors[] = "This file extension is not allowed";
    }

    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);


        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";

            $query = "INSERT INTO contact(first_name,last_name,email_id,phone_no,description,opt,myfile)VALUES('$first_name','$last_name','$email_id','$phone_no','$description','$opt','$fileName')";
            if (mysqli_query($conn, $query)) {
                echo "records saved";
            } else {
                echo'not saved';
            }
            header("location:/contact.php", 301);
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}
?>
mysqli_close();
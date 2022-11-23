<?php
require_once "./db_connect.php";
require_once "./file_upload.php";

if ($_POST) {
    $title = $_POST['name'];
    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture']); 
    $isbn = $_POST['isbn'];
    $descrip = $_POST['description'];
    $type = $_POST['type'];
    $author_first_name = $_POST['author_first_name'];
    $author_last_name = $_POST['author_last_name'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_address = $_POST['publisher_address'];
    $publisher_date = $_POST['publisher_date'];
    $uploadError = '';
    $sql = "INSERT INTO products (title, image, isbn_code, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publischer_date) VALUES ('$title', '$picture->fileName', $isbn, '$descrip', '$type', '$author_first_name', '$author_last_name', '$publisher_name', '$publisher_address', '$publisher_date')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $descrip </td>
            </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>
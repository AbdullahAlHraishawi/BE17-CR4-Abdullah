<?php
require_once "./actions/db_connect.php";

if($_GET['id']){
    $id = $_GET['id'];
    $sql = "SELECT * FROM `products` WHERE product_id = '$id'";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result) == 1){
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $image = $data['image'];
        $isbn_code = $data['isbn_code'];
        $description = $data['description'];
        $type = $data['type'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $publisher_name = $data['publisher_name'];
        $publisher_address = $data['publisher_address'];
        $publischer_date = $data['publischer_date'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        <?php require_once './style/style.css' ?>
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="image">
            <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
        </div>
        <br>
        <h1 class="title"><?php echo $title; ?></h1>
        <br>
        <div class="content">
            <p>Type: <span><?php echo $type ?></span></p>
            <p>Author' First Name: <span><?php echo $author_first_name ?></span></p>
            <p>Author' Last Name: <span><?php echo $author_last_name ?></span></p>
            <p>Publisher: <span><?php echo $publisher_name ?></span></p>
            <p>Publisher's Address: <span><?php echo $publisher_address ?></span></p>
            <p>Publishing Date: <span><?php echo $publischer_date ?></span></p>
            <p>ISBN Code: <span><?php echo $isbn_code ?></span></p>
            <p>Description: <span><?php echo $description ?></span></p>
        </div>
    </div>
</body>

</html>
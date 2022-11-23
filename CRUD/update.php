<?php
require_once './actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE product_id = {$id}";
    $result = mysqli_query($connect, $sql);
    // var_dump($result);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $description = $data['description'];
        $image = $data['image'];
    } else {
        // header("location: error.php");
    }
} else {
    // header("location: error.php");
}
mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="title" placeholder ="Product Name" value="<?php echo $title ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type= "text" name="description" step="any"  placeholder="Description" value ="<?php echo $description ?>" /></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class="form-control" type="file" name= "image" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "product_id" value= "<?php echo $data['product_id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
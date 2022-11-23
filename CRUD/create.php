<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>PHP CRUD  |  Add Product</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add a Book</legend>
            <form action="./actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="name"  placeholder="Product Title" /></td>
                    </tr>    
                    <tr>
                        <th>ISBN Code</th>
                        <td><input class='form-control' type="text" name= "isbn" placeholder="ISBN Code comes here" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name= "type" placeholder="Type comes here" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Author's First Name</th>
                        <td><input class='form-control' type="text" name= "author_first_name" placeholder="Author's first name comes here" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Author's Last Name</th>
                        <td><input class='form-control' type="text" name= "author_last_name" placeholder="Author's last name comes here" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Publisher's Name</th>
                        <td><input class='form-control' type="text" name= "publisher_name" placeholder="Publisher name comes here" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Publisher's Address</th>
                        <td><input class='form-control' type="text" name= "publisher_address" placeholder="Publisher Address comes here" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Publishing Date</th>
                        <td><input class='form-control' type="date" name= "publisher_date" placeholder="Publishing Date comes here" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Desctription</th>
                        <td><input class='form-control' type="text" name= "description" placeholder="Description comes here" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert a Book</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
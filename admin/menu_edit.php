<?php
    session_start();
    require_once("config.php");
    // to do 
    // validation
    $id = $_GET['id'];

    $rs = $conn -> prepare('SELECT * FROM menus WHERE id =?');

    if($rs->execute([$id]) && $rs-> rowCount() == 1)
    {   
        $row = $rs->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">

        <div class="row">
            <h1 class="text-center text-primary">Edit meal</h1>
        </div>

        <div class="row">
            <form action="menu_edit_db.php" method="POST">
                <div class="col">
                    <label for="title">Title</label>
                    <input value="<?= $row['title'] ?>" type="text" name="title" id="title" class="form-control">
                </div>

                <div class="col">
                    <label for="price">Price</label>
                    <input value="<?= $row['price'] ?>" type="text" name="price" id="price" class="form-control">
                </div>

                <div class="col">
                    <label for="image">Image</label>
                    <input value="<?= $row['img'] ?>" type="text" name="image" id="image" class="form-control">
                </div>

                <div class="col">
                    <label for="info">Information</label>
                    <textarea  name="info" id="info" cols="30" rows="4" class="form-control"><?= $row['info'] ?></textarea>
                </div>

                <div class="col">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="0"<?php if($row['item_status'] == 0){echo"selected";} ?>>Hide</option>
                        <option value="1"<?php if($row['item_status'] == 1){echo"selected";} ?> >Show</option>
                    </select>
                </div>

                <div class="col">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="submit" name="submit" value="Update Item" class="btn my-3 btn-warning text-success w-100">
                </div>
            
            </form>
        </div>
    
    </div>
</body>
</html>

<?php
    }else{
        $_SESSION['msg'] = 'Error! Cannot update item';
        header("Location:menus.php");
    }
    

?>
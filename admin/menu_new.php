<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Item</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">

        <div class="row">
            <h1>Add new meal</h1>
        </div>

        <div class="row">
            <form action="menu_new_db.php" method="POST">
                <div class="col">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="col">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>

                <div class="col">
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image" class="form-control">
                </div>

                <div class="col">
                    <label for="info">Information</label>
                    <textarea name="info" id="info" cols="30" rows="4" class="form-control"></textarea>
                </div>

                <div class="col">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="0">Hide</option>
                        <option value="1">Show</option>
                    </select>
                </div>

                <div class="col">
                    <input type="submit" name="submit" value="Add new" class="btn my-3 btn-success w-100">
                </div>
            
            </form>
        </div>
    
    </div>
</body>
</html>
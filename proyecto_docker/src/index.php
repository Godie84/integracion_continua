<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <!-- Incluimos Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h6 class="text-center">Create</h6>
                <form action="create.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control form-control-sm" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control v" id="email" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                </form>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <h6 class="text-center">Read</h6>
                <form action="read.php" method="get">
                    <button type="submit" class="btn btn-primary btn-block">Read All</button>
                </form>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <h6 class="text-center">Update</h6>
                <form action="update.php" method="post">
                    <div class="form-group">
                        <label for="updateId">ID:</label>
                        <input type="text" class="form-control form-control-sm" id="updateId" name="id">
                    </div>
                    <div class="form-group">
                        <label for="updateName">Name:</label>
                        <input type="text" class="form-control form-control-sm" id="updateName" name="name">
                    </div>
                    <div class="form-group">
                        <label for="updateEmail">Email:</label>
                        <input type="email" class="form-control form-control-sm" id="updateEmail" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <h6 class="text-center">Delete</h6>
                <form action="delete.php" method="post">
                    <div class="form-group">
                        <label for="deleteId">ID:</label>
                        <input type="text" class="form-control form-control-sm" id="deleteId" name="id">
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Incluimos Bootstrap JS (opcional, solo si necesitas funcionalidades JS de Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_db";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <!-- Include CSS and JavaScript libraries (e.g., Bootstrap, jQuery) here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Include DataTables library -->
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-primary float-right btn-sm" id="new_user"><i class="fa fa-plus"></i> New user</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="card col-lg-12">
            <div class="card-body">
                <table class="table-striped table-bordered col-md-12">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $type = array("", "Admin", "Staff", "Alumnus/Alumna");
                        $users = $conn->query("SELECT * FROM users ORDER BY name ASC");
                        $i = 1;
                        while ($row = $users->fetch_assoc()):
                        ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $i++ ?>
                                </td>
                                <td>
                                    <?php echo ucwords($row['name']) ?>
                                </td>
                                <td>
                                    <?php echo $row['username'] ?>
                                </td>
                                <td>
                                    <?php echo $type[$row['type']] ?>
                                </td>
                                <td>
                                    <center>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Action</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item edit_user" href="javascript:void(0)" data-id='<?php echo $row['id'] ?>'>Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item delete_user" href="javascript:void(0)" data-id='<?php echo $row['id'] ?>'>Delete</a>
                                            </div>
                                        </div>
                                    </center>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to add a new user -->
                <form id="addUserForm">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="1">Admin</option>
                            <option value="2">Staff</option>
                            <option value="3">Alumnus/Alumna</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addUserBtn">Save User</button>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript functions for managing users
    $(document).ready(function () {
        $('table').dataTable();

        // Show the "Add User" modal when the "New User" button is clicked
        $('#new_user').click(function () {
            $('#addUserModal').modal('show');
        });

        // Add a new user when the "Save User" button is clicked
        $('#addUserBtn').click(function () {
            var name = $('#name').val();
            var username = $('#username').val();
            var type = $('#type').val();

            // Perform validation and AJAX request to add a new user
            $.ajax({
                url: 'your_add_user_script.php',
                method: 'POST',
                data: { name: name, username: username, type: type },
                success: function (response) {
                    // Handle the response (e.g., show success message, update user list)
                    $('#addUserModal').modal('hide');
                    // Reload or update the user list here
                },
                error: function (error) {
                    // Handle error (e.g., display an error message)
                }
            });
        });
    });
</script>

</body>
</html>

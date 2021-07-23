<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myModal").modal('show');
        });
    </script>
</head>

<body>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">FORM</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Upload your form and fill details</p>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="rollno" class="form-control" placeholder="roll number">
                        </div>
                        <div class="form-group">
                            <input type="file" name="myfile" class="form-control" placeholder="upload file">
                        </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</body>

</html>
<?php

include "conn.php";
if(isset($_POST["submit"])){
$name=$_POST["name"];
$rollno=$_POST["rollno"];
if (isset($_FILES['myfile'])) {
$file_name=$_FILES['myfile']['name'];
$file_type=$_FILES['myfile']['type'];
$file_data=file_get_contents($_FILES['myfile']['tmp_name']);
$sql="INSERT INTO `files`(`sno`,`name`, `rollno`, `file_name`, `file_type`, `file`) VALUES ('','$name','$rollno','$file_name','$file_type','$file_data')";
$query=mysqli_query($conn,$sql);
}

if($query){
    echo"<script>alert('Data inserted')</script>";
    header("location:table.php");
}
else{
    echo"<script>alert('Data failed')</script>";
    header("location:index.php");
}
}
?>
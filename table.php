<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .container{
            margin-top:100px;
            width:1500px;
        }
    </style>
</head>
<body>
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">sno</th>
                <th scope="col">Name</th>
                <th scope="col">Rollno</th>
                <th scope="col">File type</th>
                <th scope="col">File name</th>
            </tr>
        </thead>
        <tbody>
            <?php
	include 'conn.php';
	$sqli = "SELECT * FROM `files`";
	$query = mysqli_query($conn,$sqli);
   
	while($row = mysqli_fetch_array($query))
	{
        $id=$row["file"];
        ?>
         
		<tr>
                <td><?php echo $row["sno"]?></td>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["rollno"]?></td>
                <td><?php echo $row["file_type"]?></td>
                <?php echo '<td><a href="view.php?rollno='.$row['rollno'].'">'.$row["file_name"].'</a></td>';?>
				</tr>
	<?php
	}
?>
        </tbody>
    </table>
    </div>
</body>
</html>
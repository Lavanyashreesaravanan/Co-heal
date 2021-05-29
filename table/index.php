<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="index.css">
	<title>Monitoring</title>
</head>
<body>
<h1 class="heading"><span>Co-heal</span><br>Self Monitoring Chart</h1>
	

	<div class="form">
		
		<form method="POST" action="add.php">
			<label>Date :</label><input type="date" name="date"><br>
			<label>Temperature :</label><input type="number" name="temperature"><br>
            <label>Heart Rate :</label><input type="number" name="heartrate"><br>
            <label>SPO2 :</label><input type="number" name="oxygen"><br>
            <label>Feeling :</label><input type="text" name="feeling"><br>
            <label>Breathing :</label><input type="text" name="breathing"><br>

			<div class="submit"><input type="submit" name="add"></div>
			
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Date</th>
                <th>Temperature</th>
                <th>Heart Rate</th>
                <th>SPO2</th>
                <th>Feeling</th>
				<th>Breathing</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['temperature']; ?></td>
                            <td><?php echo $row['heartrate']; ?></td>
                            <td><?php echo $row['oxygen']; ?></td>
                            <td><?php echo $row['feeling']; ?></td>
							<td><?php echo $row['breathing']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
<html>
<head>
<title>View Result</title>
<style>
#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
h1{
	color:Blue;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr{
    background-color: white;
    }


#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color: white;
}
</style>
</head>
<body>
<h1>View Results</h1>
<table id="table">
<form action="edit.php" method="POST">
      <?php
      $con=mysqli_connect("localhost","root","","student_result");
      if($con){
         $res=mysqli_query($con,"select * from result");
          while($row=mysqli_fetch_row($res)){
	?>
        <tr>
		<th>ID</th>
		<th>Roll No</th>
		<th>Web Technology</th>
		<th>Cyber Security</th>
		<th>Information Technology</th>
		<th>Total Mark</th>
		<th>Mark Obtain</th>
		<th>Result</th>
		<th>Grade</th>
	</tr>

      <tr>
	<td><?php echo $row[0]; ?></td>
	<td><?php echo $row[1]; ?></td>
	<td><?php echo $row[2]; ?></td>
	<td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
	<td><?php echo $row[5]; ?></td>
	<td><?php echo $row[6]; ?></td>
	<td><?php echo $row[7]; ?></td>
	<td><?php echo $row[8]; ?></td>
	<td><button><lable><b>Edit</b></lable></button></td>
      </tr>
     <?php
      }
    }
      ?>
</form>
</table>	
</body>
</html>	
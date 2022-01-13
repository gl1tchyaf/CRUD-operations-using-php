<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Student ID </th>
 <th> Student Name </th>
 <th> CGPA </th>
 <th> Department </th>
 <th> MID One </th>
 <th> MID two </th>
 <th> Final </th>
 <th> Class Test </th>
 <th> Class Participation </th>
 <th> Project </th>
 <th> Delete Data </th>
 <th> Update Data </th>
 <th> Show Data </th>
 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from cse102fall2021 ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['student_id'];  ?> </td>
 <td> <?php echo $res['student_name'];  ?> </td>
 <td> <?php echo $res['cgpa'];  ?> </td>
 <td> <?php echo $res['department'];  ?> </td>
 <td> <?php echo $res['midone'];  ?> </td>
 <td> <?php echo $res['midtwo'];  ?> </td>
 <td> <?php echo $res['final'];  ?> </td>
 <td> <?php echo $res['class_test'];  ?> </td>
 <td> <?php echo $res['class_participation'];  ?> </td>
 <td> <?php echo $res['project'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>
 <td> <button class="btn-primary btn"> <a href="result.php?id=<?php echo $res['id']; ?>" class="text-white"> Show </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  
 <br><br>
<div style="text-align:center">
  <button class="btn-danger btn"> <a href="insert.php?" class="text-white"> Insert Data </a>  </button>
</div>
 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>
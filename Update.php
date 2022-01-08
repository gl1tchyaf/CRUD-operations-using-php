<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $student_id = $_POST['student_id'];
 $student_name = $_POST['student_name'];
 $cgpa = $_POST['cgpa'];
 $department = $_POST['department'];
 $midone = $_POST['midone'];
 $midtwo = $_POST['midtwo'];
 $final = $_POST['final'];
 $class_test = $_POST['class_test'];
 $class_participation = $_POST['class_participation'];
 $project = $_POST['project'];
 $total = $_POST['total'];
 $letter_grade = $_POST['letter_grade'];
 $grade_point = $_POST['grade_point'];
 $q = " update cse102fall2021 set id=$id, student_id='$student_id', student_name='$student_name',
     cgpa='$cgpa', department='$department', midone='$midone', midtwo='$midtwo', final='$final',
     class_test='$class_test', class_participation='$class_participation', project='$project',
     total='$total', letter_grade='$letter_grade', grade_point='$grade_point'
     where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:admin.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 <label> Student ID: </label>
 <input type="text" name="student_id" class="form-control"> <br>

 <label> Student Name: </label>
 <input type="text" name="student_name" class="form-control"> <br>

 <label> CGPA: </label>
 <input type="text" name="cgpa" class="form-control"> <br>

 <label> Department: </label>
 <input type="text" name="department" class="form-control"> <br>

 <label> MID One: </label>
 <input type="text" name="midone" class="form-control"> <br>

 <label> MID Two: </label>
 <input type="text" name="midtwo" class="form-control"> <br>

  <label> Final: </label>
 <input type="text" name="final" class="form-control"> <br>

 <label> Class Test: </label>
 <input type="text" name="class_test" class="form-control"> <br>

 <label> Class Participation: </label>
 <input type="text" name="class_participation" class="form-control"> <br>

 <label> Project: </label>
 <input type="text" name="project" class="form-control"> <br>

 <label> Total: </label>
 <input type="text" name="total" class="form-control"> <br>

 <label> Letter Grade: </label>
 <input type="text" name="letter_grade" class="form-control"> <br>

 <label> Grade Point: </label>
 <input type="text" name="grade_point" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Language" content="English">
  <meta name="Country" content="Bangladesh">
  <meta name="Course code" content="CSE102-1">
  <meta name="Student ID" content="2020-1-44-002">
  <meta name="Name" content="Humayra Mahbuba">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row  logo">
        <div class="col-sm-8"><img src="logo.png" alt="" srcset=""></div>
        <div class="col-sm-4"></div>
      </div>
    </div>

     
       <div class="container ">
      <div class=" second">
      
          <div class="col-sm-8 home">
           Home > Results
          </div>
       
           <input type="text" class="input" placeholder="Enter course code">
           <button class="search">Search</button>
       
        </div>
        </div>
    
    




      <div class="container ">

        <table>
            <tr>
              <th colspan="2" class="heading ">Course   Deatails</th>
            </tr>
            <tr class="even">
              <td class="leftside even">Course code:</td>
              <td class="even"> CSE102</td>
            </tr>  
            <tr class="odd">
                <td class="leftside">Course Title:</td>
                <td > Introduce to Computer</td>
              </tr> 
              <tr class="even">
                <td class="leftside even">Cradit:</td>
                <td  class="even">3.0</td>
              </tr> 
              
              <tr class="odd">
                <td class="leftside">Semester:</td>
                <td > Fall 2021</td>
              </tr> 
              <tr class="even">
                <td class="leftside even">Course Instructor:</td>
                <td class="even" > RAT</td>
              </tr> 
           
           
          </table>
          
        </div>


        <div class="container sectable">

            <table>
				<?php

				 include 'conn.php'; 
				 $id = $_GET['id'];
				 $q = "select * from cse102fall2021 where id=$id";

				 $query = mysqli_query($con,$q);

				 while($res = mysqli_fetch_array($query)){
				 ?>
								<tr>
                  <th colspan="2" class="heading">Details of students</th>
                </tr>
                <tr class="even">
                  <td class="leftside even">Student ID:</td>
                  <td> <?php echo $res['student_id'];  ?> </td>
                </tr>  
                <tr class="odd">
                    <td class="leftside">Student Name:</td>
                    <td> <?php echo $res['student_name'];  ?> </td>
                  </tr> 
                  <tr class="even">
                    <td class="leftside even">CGPA:</td>
                    <td> <?php echo $res['cgpa'];  ?> </td>
                  </tr> 
                  
                  <tr class="odd">
                    <td class="leftside">Department:</td>
                    <td> <?php echo $res['department'];  ?> </td>
                  </tr> 
                  
               
               <?php 
 }
  ?>
              </table>
              
            </div>
         <div class="container third-table">
            <table>
			<?php

				 include 'conn.php'; 
				 $id = $_GET['id'];
				 $q = "select * from cse102fall2021 where id=$id";
				  

				 $query = mysqli_query($con,$q);

				 while($res = mysqli_fetch_array($query)){
					 $total = $res['midone']+$res['midtwo']+$res['final']+$res['class_test']+$res['class_participation']+$res['project'];
				 ?>
                <tr>
                    <th colspan="3" class="heading ">Overall Performance</th>
                  </tr>
                <tr>
                  <td class="even exam talign">Midrerm-1 Exam:</td>
                  <td> <?php echo $res['midone'];  ?> </td>
                  <td class="even">Out of 20</td>
                </tr>
                <tr>
                  <td class="talign">Midterm-2 Exam:</td>
                  <td> <?php echo $res['midtwo'];  ?> </td>
                  <td>Out  of 20</td>
                </tr>
                <tr>
                  <td class="even talign">Final Exam:</td>
                  <td> <?php echo $res['final'];  ?> </td>
                  <td class="even">Out of 20</td>
                </tr>
                <tr>
                  <td class="talign">Class-Test/Assignment:</td>
                  <td> <?php echo $res['class_test'];  ?> </td>
                  <td>Out of 10</td>
                </tr>
                <tr>
                  <td class="even talign">Class Participation:</td>
                  <td> <?php echo $res['class_participation'];  ?> </td>
                  <td class="even">Out of 5</td>
                </tr>
                <tr>
                  <td class="talign">Project:</td>
                  <td> <?php echo $res['project'];  ?> </td>
                  <td>Out of 25</td>
                </tr>
                <tr>
                    <td class="talign">Total:</td>
                    <td> <?php echo $total;  ?> </td>
                    <td>Out of 100</td>
                  </tr>
				  
				  <tr>
                    <td class="talign">Grade Point:</td>
                    <td> <?php 
					if($total>=90) echo "4.00";
					else if($total>=87 && $total<90) echo "3.70";
					else if($total>=83 && $total<87) echo "3.30";
					else if($total>=80 && $total<83) echo "3.00";
					else if($total>=77 && $total<80) echo "2.70";
					else if($total>=73 && $total<77) echo "2.30";
					else if($total>=70 && $total<73) echo "2.00";
					else if($total>=67 && $total<70) echo "1.70";
					else if($total>=63 && $total<67) echo "1.30";
					else if($total>=60 && $total<63) echo "1.00";
					else if($total<60) echo "0.00";
					?> </td>
                    <td>Out of 4.00</td>
                  </tr>
				  
				  <tr>
                    <td class="talign">Grade Point:</td>
                    <td> <?php 
					if($total>=97) echo "A+";
					else if($total>=90 && $total<97) echo "A";
					else if($total>=87 && $total<90) echo "A-";
					else if($total>=83 && $total<87) echo "B+";
					else if($total>=80 && $total<83) echo "B";
					else if($total>=77 && $total<80) echo "B-";
					else if($total>=73 && $total<77) echo "C+";
					else if($total>=70 && $total<73) echo "C";
					else if($total>=67 && $total<70) echo "C-";
					else if($total>=63 && $total<67) echo "D+";
					else if($total>=60 && $total<63) echo "D";
					else if($total<60) echo "F";
					?> </td>
                    <td>Max A+</td>
                  </tr>
                  
				  <?php 
 }
  ?>
              </table>
            </div>

            <div class="container">
             <div class="btnprint">
               <center>
              <button class="print">Print</button> <br><br>
			  <button class="btn-danger btn"> <a href="Admin.php?" class="text-white"> Admin Panel </a>  </button>
<br><br>
            </center>
            </div>
          </div>

		
		
		
		
		
		

</body>
</html>
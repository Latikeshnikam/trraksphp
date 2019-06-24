<?php 
	include('configure.php');
 
 // Name=' + Name + '&Email=' + Email + '&Mobile=' + Mobile + '&Current_City=' + Current_City + '&Exp_Country=' + Exp_Country + '&Exp_Stream=' + Exp_Stream + '&Exp_program=' + Exp_program + '&Season=' + Season + '&Year=' + Year + '&EntranceExam=' + EntranceExam + '&EntranceExamScore=' + EntranceExamScore + '&VerbalExam=' + VerbalExam + '&VerbalExamScore=' + VerbalExamScore + '&loan=' + loan + '&loan_amount=' + loan_amount + '&univname=' + univname;
$Name =  $_POST['Name'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Current_City = $_POST['Current_City'];
$Exp_Country = $_POST['Exp_Country'];
$Exp_Stream = $_POST['Exp_Stream'];
$Exp_program = $_POST['Exp_program'];
$Season = $_POST['Season'];
$Year = $_POST['Year'];
$EntranceExam = $_POST['EntranceExam'];
$EntranceExamScore = $_POST['EntranceExamScore'];
$VerbalExam = $_POST['VerbalExam'];
$VerbalExamScore = $_POST['VerbalExamScore'];
$loan = $_POST['loan'];
$loan_amount = $_POST['loan_amount'];
$univname = $_POST['univname'];
$source =$_GET['source'];	


if (!empty($Name) && !empty($Email) && !empty($Mobile) && !empty($Current_City) && !empty($Exp_Country) && !empty($Exp_Stream) && !empty($Exp_program) && !empty($Season) && !empty($Year) && !empty($EntranceExam) && !empty($EntranceExamScore) && !empty($VerbalExam) && !empty($VerbalExamScore) && !empty($loan) && !empty($loan_amount) && !empty($univname)) 
{
	$select = "SELECT * FROM `university_admission_apply` WHERE `STUDENT_EMAIL` = '$Email'";
	$result = $conn->query($select);
	if ($result->num_rows > 0) {
		echo "exists";
	}
	else{
		                 $sql="INSERT INTO `university_admission_apply` (`STUDENT_NAME`, `STUDENT_EMAIL`, `STUDENT_MOBILE`, `CURRENT_LOCATION`, `EXPECTED_COUNTRY`, `EXPECTED_STREAM`, `DESIRED_PROGRAM`,`UNIVERSITY_REQUIRED`,`DESIRED_INTAKE_SEASON`, `DESIRED_INTAKE_YEAR`,`ENTRANCE_EXAM`, `ENTRANCE_ExamScore`,`VERBAL_EXAM`, `VERBAL_ExamScore`, `LOAN_REQURED`, `AMOUNT`,`SOURCE`) VALUES ('$Name', '$Email', '$Mobile', '$Current_City', '$Exp_Country', '$Exp_Stream', '$Exp_program','$univname','$Season','$Year', '$EntranceExam', '$EntranceExamScore', '$VerbalExam', '$VerbalExamScore', '$loan', '$loan_amount','$source');";
          		           
          		           if($conn->query($sql)===TRUE)
          		           {
          		               echo "inserted";
          		           }
          		              else
          		              {
          		                  echo "fail";
          		              }			
	}
}
else{
	echo "<script>window.location.href='index.php';</script>";
}

 ?>
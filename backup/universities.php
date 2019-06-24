<?php 
include("header.php");
require "configure.php";
$country=$Stream=$Entrance_Exam=$EntranceScore=$Verbal_Exam=$Verb_Score="";

$countryErr=$streamErr=$Entrance_ExamErr=$EntranceScoreErr=$Verbal_ExamErr=$VerbalScoreErr="";
if (isset($_POST['EVALUATE'])) 
{
	if ($_POST["Country"] == '') 
    {
      $countryErr = "you forgot to select country";
    } 
    else
    {
      $country =$_POST["Country"];
    // check name only contains letters and whitespace
    }

    if ($_POST["Stream"] == '') 
    {
      $streamErr = "you forgot to select country";
    } 
    else
    {
     $Stream =$_POST["Stream"];
    // check name only contains letters and whitespace
    }

	if ($_POST["Entrance_Exam"] == '') 
    {
      $Entrance_ExamErr = "you forgot to select country";
    } 
    else
    {
     $Entrance_Exam =$_POST["Entrance_Exam"];
    // check name only contains letters and whitespace
    }

	if ($_POST["EntranceScore"] == '') 
    {
      $EntranceScoreErr = "you forgot to select country";
    } 
    else
    {
       $EntranceScore =$_POST["EntranceScore"];
    // check name only contains letters and whitespace
    } 

	if ($_POST["Verbal_Exam"] == '') 
    {
      $Verbal_ExamErr = "you forgot to select country";
    } 
    else
    {
      $Verbal_Exam =$_POST["Verbal_Exam"];
    // check name only contains letters and whitespace
    }       

	if ($_POST["VerbalScore"] == '') 
    {
      $VerbalScoreErr = "you forgot to select country";
    } 
    else
    {
      $VerbalScore =$_POST["VerbalScore"];
    // check name only contains letters and whitespace
    } 

 if ( $country=="australia") {
	# code...

    if(empty($countryErr) || empty($streamErr) || empty($Verbal_ExamErr) || empty($VerbalScoreErr))
    {

				if($Verbal_Exam === 'IELTS')
				{     	
					if ($VerbalScore <=9) 
					{
							 $showuni = "SELECT * FROM `$country` WHERE (FIND_IN_SET('MBA', STREAM) OR FIND_IN_SET('MS', STREAM)) AND `IELTS_CUTOFF` <= '$VerbalScore' ORDER BY UNIVERSITY_RANK ASC";
					}
					else
					{
						ini_set('display_errors', '0');
					}               
                }else if($Verbal_Exam === 'TOEFL')
				{     
					if ($VerbalScore <=120)	
					{		
               		 $showuni = "SELECT * FROM `$country` WHERE (FIND_IN_SET('MBA', STREAM) OR FIND_IN_SET('MS', STREAM)) AND `TOEFL_CUTOFF` <= '$VerbalScore' ORDER BY UNIVERSITY_RANK ASC";
               		 }
               		 else
					{
						ini_set('display_errors', '0');
					}
                }else if($Verbal_Exam === 'PTE')
				{    
					if ($VerbalScore <=90)	
						{			
               		 $showuni = "SELECT * FROM `$country` WHERE (FIND_IN_SET('MBA', STREAM) OR FIND_IN_SET('MS', STREAM)) AND `PTE_CUTOFF` <= '$VerbalScore' ORDER BY UNIVERSITY_RANK ASC";
               		 }
					else
					{
						ini_set('display_errors', '0');
					} 
                }

                $result = $conn->query($showuni);
	}
} else if ( $country=="canada") {
	if(empty($countryErr) || empty($streamErr) || empty($EntranceScoreErr) || empty($Verbal_ExamErr) || empty($VerbalScoreErr))
	{

			if($Stream === 'MBA' && $Verbal_Exam === 'IELTS')
			{
				if($VerbalScore<= 9 && $EntranceScore<=800){

				 $showuni = "SELECT * FROM `$country` WHERE `IELTS_CUTOFF` <= '$VerbalScore' OR `GMAT_CUTOFF` <= $EntranceScore AND `GMAT_CUTOFF`!=0 ORDER BY UNIVERSITY_RANK ASC";
				}else
					{
						ini_set('display_errors', '0');
					} 

			}else if($Stream=== 'MBA' && $Verbal_Exam === 'PTE')
			{
				if($VerbalScore<=90 && $EntranceScore<=800){
                $showuni = "SELECT * FROM `$country` WHERE `PTE_CUTOFF` <= '$VerbalScore' AND `GMAT_CUTOFF` <= $EntranceScore AND `GMAT_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";
                }else
					{
						ini_set('display_errors', '0');
					}
			}else if($Stream=== 'MBA' && $Verbal_Exam === 'TOEFL')
			{	if($VerbalScore<=120 && $EntranceScore<=800){
				 $showuni = "SELECT * FROM `$country` WHERE `TOEFL_CUTOFF` <= '$VerbalScore' AND `GMAT_CUTOFF` <= $EntranceScore AND `GMAT_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";	
				 }else
					{
						ini_set('display_errors', '0');
					}
			}else if($Stream=== 'MS' && $Verbal_Exam === 'IELTS')
			{	
				if($VerbalScore <= 9){
				 $showuni = "SELECT * FROM `$country` WHERE `IELTS_CUTOFF` <= '$VerbalScore' ORDER BY UNIVERSITY_RANK ASC";	
				}else
					{
						ini_set('display_errors', '0');
					}
			}else if($Stream === 'MS' && $Verbal_Exam === 'PTE')
			{

				if($VerbalScore <= 90 && $VerbalScore != 0){
				
				 $showuni = "SELECT * FROM `$country` WHERE `PTE_CUTOFF` <= '$VerbalScore' AND `PTE_CUTOFF`!=0 ORDER BY UNIVERSITY_RANK ASC";
				 }else
					{
						ini_set('display_errors', '0');
					}

			}else if($Stream=== 'MS' && $Verbal_Exam === 'TOEFL')
			{	if($VerbalScore <= 120){
				 $showuni = "SELECT * FROM `$country` WHERE `TOEFL_CUTOFF` <= '$VerbalScore' AND `TOEFL_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";
				 }else
					{
						ini_set('display_errors', '0');
					}
			}
			$result = $conn->query($showuni);

// selecting from canada table ends
//selecting from usa table starts
	}
	}else if ( $country=="usa") {

	 if(empty($countryErr) || empty($streamErr) || empty($EntranceScoreErr) || empty($Verbal_ExamErr) || empty($VerbalScoreErr))
	{	
				if ($Stream === 'MBA')
				 {	if($EntranceScore <= 800){
				 
					 $showuni = "SELECT * FROM `$country` WHERE `GMAT_CUTOFF` <= '$EntranceScore' AND `GMAT_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";
				 }else{
				 	ini_set('display_errors', '0');
				 }
				}else if($Verbal_Exam === 'IELTS' && $Stream === 'MS')
				{	if($EntranceScore<=340 && $VerbalScore<=9){

					 $showuni = "SELECT * FROM `$country` WHERE `GRE_CUTOFF` <= '$EntranceScore' AND `GRE_CUTOFF` != 0 AND `IELTS_CUTOFF` <= '$VerbalScore' AND `IELTS_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";
					}else{
						ini_set('display_errors', '0');
					}
				}
				else if($Verbal_Exam === 'TOEFL' && $Stream === 'MS')
				{	if($EntranceScore<=340 && $VerbalScore<=120){
					 $showuni = "SELECT * FROM `$country` WHERE `GRE_CUTOFF` <= '$EntranceScore' AND `GRE_CUTOFF` != 0 AND `TOEFL_CUTOFF` <= '$VerbalScore' AND `TOEFL_CUTOFF` != 0 ORDER BY UNIVERSITY_RANK ASC";
					 }else{
						ini_set('display_errors', '0');
					}
				}	
				$result = $conn->query($showuni);
	}
}
	//var_dump($showuni);
// selecting from usa table ends
ini_set('display_errors', '0');      
    
$_SESSION['country']= $country;
$_SESSION['stream']= $Stream;
$_SESSION['EntExam']= $Entrance_Exam;
$_SESSION['EntExamScr']= $EntranceScore;
$_SESSION['VerExam']= $Verbal_Exam;
$_SESSION['VerExamScr']= $VerbalScore;  
   
// echo "<br>	".$country."<br>	";
// echo $Stream."<br>	";
// echo $Entrance_Exam."<br>	";
// echo $EntranceScore."<br>	";
// echo $Verbal_Exam."<br>	";
// echo $VerbalScore."<br>	";


}

 ?>


<div class="container"> 
<div class="row">
  <div class="col-7">
    <div class="card m-2">
      <div class="card-body">

       <?php if ($result->num_rows > 0) {?>
       <?php  while($row = $result->fetch_assoc()) {?>
       <div class="media" >
       		<div class="img" style="border: 1px solid #e8dae2; padding: 13px;">
			  <img class="mr-3" style="height: 50px; width: 100px;" src="<?php echo $row['UNIVERSITY_IMG'];?>" alt="<?php echo $row['IMG_NAME'];?>">
       		</div>

			  <div class="media-body" style="margin-left: 10px;">
			    <h5 class="mt-0"><a href="terms.php" style="color: black;" target="_blank"><?php echo $row['UNIVERSITY_NAME']; ?></h5></a>
  			<div class="city-state">
  				<span style="font-size: 12px;"><a href="<?=$row['WEBSITE'] ?>" target="_blank" style=" text-decoration: none;" ><?php echo $row['WEBSITE'] ?></a></span> <br>
  				<small>NASHIK, MAHARASHTRA</small>
  			</div>
			</div>
			<div class="worldrankbody">
				<div class="worldrank text-center">
							<i class="fas fa-graduation-cap"></i>
							<?php echo $row['UNIVERSITY_RANK']?>
				</div>
				World Rank
			</div>
		</div>
		<hr>
		<?php } } else{?>
				
					<tr>
						<td style="color: red"><p class="text-center" style="font-weight: 30;font-size: 20px;"><b style="color: red;">No record found </b><img src="images/failureemoji.png" alt="failure" style="width:50px;"></p></td>
					</tr>
			<?php } ?>
      
       
        
      </div>
    </div>
  </div>
  
  <div class="col-5">
                 <div class="col-md-12 text-center">
                    <h2><i class="fas fa-university"></i>Fill Out the fields to explore more about universities</h2>
                  </div>
    <div class="card mt-2 mr-2">
      <div class="card-body">
        <h5 class="card-title">Current Education</h5>
        <p class="card-text"></p>
        
        <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Current Degree</label>
      
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>BE</option>
        <option>B.Sc</option>
        <option>B.Tech</option>
        <option>MBA</option>
        <option>MCA</option>
        <option>ME</option>
        <option>M.Sc</option>
        <option>M.Tech</option>
        <option>Other UG/PG</option>
      </select>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Current Major</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Aeronotical</option>
        <option>Agriculture</option>
        <option>AIE</option>
        <option>Automobile</option>
        <option>BioChemical</option>
        <option>BioInformatics</option>
        <option>BioMedical</option>
        <option>BioTechnology</option>
        <option>Chemical</option>
        <option>Civil</option>
        <option>CSE</option>
        <option>ECE</option>
        <option>EEE</option>
        <option>EIE</option>
        <option>EnergyTechnology</option>
        <option>Environmental</option>
        <option>FireSafety</option>
        <option>FoodTechology</option>
        <option>Genetic</option>
        <option>GeoInformatics</option>
        <option>GeoScience</option>
        <option>IndustrailEngg</option>
        <option>IndustrialProduction</option>
        <option>InstrumentaionControl</option>
        <option>IT</option>
        <option>Leather</option>
        <option>ManMadFiber</option>
        <option>Manufacturing</option>
        <option>Marine</option>
        <option>MaterialScience</option>
        <option>Mechanical</option>
        <option>Mechatronics</option>
        <option>Metallurgical</option>
        <option>Mining</option>
        <option>OceanEngineering</option>
        <option>ProductionEngineering</option>
        <option>ProductionIndustrial</option>
        <option>Textile</option>
        <option>Other</option>
	
      </select>
      
      </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">College/University</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
      
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip03">Year of Passing</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>2017</option>
        <option>2016</option>
        <option>2015</option>
        <option>2014</option>
        <option>2013</option>
        <option>2012</option>
        <option>2011</option>
        <option>2010</option>
        <option>2009</option>
        <option>2008</option>
        <option>2007</option>
        <option>2005</option>
      </select>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">Percentage</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="" required>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">GPA</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
    
    <div class="col-md-2 mb-3">
      <label for="validationTooltip05">Backlog</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  
  
  
</form>
       
        </div>
      </div>
       <div class="col-16">
    <div class="card mt-2 mr-2">
      
  <div class="card-body">
     <h5 class="card-title">Dynamic Form</h5>
    <div class="row">

      <div class="gre col-md-4">

    <label class="my-1 ml-2 mr-2" for="inlineFormCustomSelectPref">GRE</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
          </select>        
      </div>

      <div class="ielts col-md-4">
    <label class="my-1 ml-4 mr-2" for="inlineFormCustomSelectPref">IELTS</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
          </select>        
      </div>


      <div class="gpa col-md-4">
          <label class="my-1 ml-4 mr-2" for="inlineFormCustomSelectPref">GPA</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
          </select>        
      </div>
   </div>

  </div>
</div>
   
   
   <div class="card mt-2 mr-2">
  <div class="card-body">
    <h5 class="card-title">Work Experience</h5>
    
    <form>
  <div class="form-row">
    <div class="col mr-3">
     <label>Years of Experience</label>
      <input type="text" class="form-control" placeholder="">
    </div>
    <div class="col">
    <label>Experience Letter</label> <br>
      <div class="form-check form-check-inline">
  <input class="form-check-input ml-2" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label ml-1" for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input ml-2" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label ml-1" for="inlineRadio2">No</label>
</div>

    </div>
  </div>
      <div class="my-1 ">
    <div class="form-group">
    <label for="exampleFormControlSelect1">Technology / Platform</label>
    <select class="form-control" id="exampleFormControlSelect1">
     <option>Select ...</option>
      <option>Software Engg(Java/C++/.Net/Pythan</option>
      <option>Full Stack Developer</option>
      <option>DBA</option>
      <option>System Admin(wind/linux)</option>
      <option>Web Tech.(UI/UX/DEX)</option>
    </select>
  </div>
  </div>
</form>
    

</div>
 
   </div> 
    </div>
    </div>     
</div>    
 <?php 
include("footer.php");
  ?>
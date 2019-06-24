<?php 
	include("header.php");
 ?>
<div class="container">

	<div class="row"  style="background-color: #0D3C55;margin-right: 0px;margin-left: 0px;">
		<div class="col-12">
				<p class="m-4 text-center h1" style="color: white;">Apply For Admission</p>
		</div>
		
		<div class="col m-1" style="background-image: url(images/edu2.png);background-size: cover; background-repeat: no-repeat;">
			<div class="row">
				<div class="col-12 text-center mt-5"  style="color: white;">
					<h3 style="font-size: 40px;">Getting ready for admissions? </h3>
					<hr>
					<p class="text-justify m-4"><span class="ml-4"></span>
										We realize that each student has a dream to seek after higher education in best university 
				and each student should get quality education also. 
				Trraks Education Platform gives a right profile evaluation to the understudies getting 
				ready for Master's program or Post graduation from USA, Canada and Australia and 
				also we gives a confirmation help to every student in desired universities with a simple advances. </p>
				<p class="text-justify m-4"><span class="ml-4"></span>
				Simply fill out the short application form with a right information. 
				When you finished with an application. One of the accomplished and 
				qualified co-ordinator will give the help till your admission getting affirmed.
					</p>
					<div class="row mb-2">
						<div class="col-md-6 col-sm-12">
							<img src="images/graduate2.png" alt="" width="200">
						</div>
						<div class="col-md-6 col-sm-12">
							<p style="font-size: 20px; color: #82f2fd;">An investment in <br> knowledge pays the best <br>interest. <br>
								
							</p>
							<span style="color: #ffe4b2;">-Benjamin Franklin</span>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		<div class="col m-1" style="background-color: #99d799;">
			<h2 class="text-center" style="font-weight: 400">Fill Out the form</h2>
			<hr>
					<form>
			          <div class="form-group">
			            
			            <input type="text" class="form-control drop" id="Student_name" value="<?=$_SESSION['Full_Name'];?>" placeholder="Name">
			          </div>

			          <div class="form-group">
			            <input type="email" class="form-control drop" id="Student_email" value="<?=$_SESSION['Email'];?>" placeholder="Email">
			            <small class="validation" id="Evalid" style="color:red;">Please Enter valid Email</small>
			          </div>

			          <div class="row">
			          <div class="form-group col-md-6 col-sm-6">
			            
			            <input type="tel" class="form-control drop" id="Student_mobile" value="<?=$_SESSION['Mo_No'];?>" placeholder="Mobile Eg:9132######01">
			            <small class="validation" id="Mvalid" style="color:red;">Enter Mobile number starting with 91</small>
			          </div>
			           <div class="form-group col-md-6 col-sm-6">
			            <select class="custom-select mr-sm-2 drop"  id="student_city" name="stud_city" >
			                    <option value="">Current location</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#000000"><i>-Top Metropolitan Cities-</i></font></option>
			                    <option>Ahmedabad</option> 
			                    <option>Bengaluru/Bangalore</option>
			                    <option>Chandigarh</option>
			                    <option>Chennai</option>
			                    <option>Delhi</option>
			                    <option>Gurgaon</option>
			                    <option>Hyderabad/Secunderabad</option>
			                    <option>Kolkatta</option>
			                    <option>Mumbai</option>
			                    <option>Noida</option>
			                    <option>Pune</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Andhra Pradesh-</i></font></option>
			                    <option>Anantapur</option>
			                    <option>Guntakal</option>
			                    <option>Guntur</option>
			                    <option>Hyderabad/Secunderabad</option>
			                    <option>kakinada</option>
			                    <option value="kurnool" <?php if($_SESSION['Current_Location'] == "kurnool") echo 'selected="selected"'; ?>>kurnool</option>
			                    <option>Nellore</option>
			                    <option>Nizamabad</option>
			                    <option>Rajahmundry</option>
			                    <option>Tirupati</option>
			                    <option>Vijayawada</option>
			                    <option>Visakhapatnam</option>
			                    <option>Warangal</option>
			                    <option>Andra Pradesh-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Arunachal Pradesh-</i></font></option>
			                    <option>Itanagar</option>
			                    <option>Arunachal Pradesh-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Assam-</i></font></option>
			                    <option>Guwahati</option>
			                    <option>Silchar</option>
			                    <option>Assam-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Bihar-</i></font></option>
			                    <option>Bhagalpur</option>
			                    <option>Patna</option>
			                    <option>Bihar-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Chhattisgarh-</i></font></option>
			                    <option>Bhillai</option>
			                    <option>Bilaspur</option>
			                    <option>Raipur</option>
			                    <option>Chhattisgarh-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Goa-</i></font></option>
			                    <option>Panjim/Panaji</option>
			                    <option>Vasco Da Gama</option>
			                    <option>Goa-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Gujarat-</i></font></option>
			                    <option>Ahmedabad</option>
			                    <option>Anand</option>
			                    <option>Ankleshwar</option>
			                    <option>Bharuch</option>
			                    <option>Bhavnagar</option>
			                    <option>Bhuj</option>
			                    <option>Gandhinagar</option>
			                    <option>Gir</option>
			                    <option>Jamnagar</option>
			                    <option>Kandla</option>
			                    <option>Porbandar</option>
			                    <option>Rajkot</option>
			                    <option>Surat</option>
			                    <option>Vadodara/Baroda</option>
			                    <option>Valsad</option>
			                    <option>Vapi</option>
			                    <option>Gujarat-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Haryana-</i></font></option>
			                    <option>Ambala</option>
			                    <option>Chandigarh</option>
			                    <option>Faridabad</option>
			                    <option>Gurgaon</option>
			                    <option>Hisar</option>
			                    <option>Karnal</option>
			                    <option>Kurukshetra</option>
			                    <option>Panipat</option>
			                    <option>Rohtak</option>
			                    <option>Haryana-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Himachal Pradesh-</i></font></option>
			                    <option>Dalhousie</option>
			                    <option>Dharmasala</option>
			                    <option>Kulu/Manali</option>
			                    <option>Shimla</option>
			                    <option>Himachal Pradesh-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jammu and Kashmir-</i></font></option>
			                    <option>Jammu</option>
			                    <option>Srinagar</option>
			                    <option>Jammu and Kashmir-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Jharkhand-</i></font></option>
			                    <option>Bokaro</option>
			                    <option>Dhanbad</option>
			                    <option>Jamshedpur</option>
			                    <option>Ranchi</option>
			                    <option>Jharkhand-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Karnataka-</i></font></option>
			                    <option>Bengaluru/Bangalore</option>
			                    <option>Belgaum</option>
			                    <option>Bellary</option>
			                    <option>Bidar</option>
			                    <option>Dharwad</option>
			                    <option>Gulbarga</option>
			                    <option>Hubli</option>
			                    <option>Kolar</option>
			                    <option>Mangalore</option>
			                    <option>Mysoru/Mysore</option>
			                    <option>Karnataka-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Kerala-</i></font></option>
			                    <option>Calicut</option>
			                    <option>Cochin</option>
			                    <option>Ernakulam</option>
			                    <option>Kannur</option>
			                    <option>Kochi</option>
			                    <option>Kollam</option>
			                    <option>Kottayam</option>
			                    <option>Kozhikode</option>
			                    <option>Palakkad</option>
			                    <option>Palghat</option>
			                    <option>Thrissur</option>
			                    <option>Trivandrum</option>
			                    <option>Kerela-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Madhya Pradesh-</i></font></option>
			                    <option>Bhopal</option>
			                    <option>Gwalior</option>
			                    <option>Indore</option>
			                    <option>Jabalpur</option>
			                    <option>Ujjain</option>
			                    <option>Madhya Pradesh-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Maharashtra-</i></font></option>
			                    <option>Ahmednagar</option>
			                    <option>Aurangabad</option>
			                    <option>Jalgaon</option>
			                    <option>Kolhapur</option>
			                    <option>Mumbai</option>
			                    <option>Mumbai Suburbs</option>
			                    <option>Nagpur</option>
			                    <option>Nasik</option>
			                    <option>Navi Mumbai</option>
			                    <option>Pune</option>
			                    <option>Solapur</option>
			                    <option>Maharashtra-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Manipur-</i></font></option>
			                    <option>Imphal</option>
			                    <option>Manipur-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Meghalaya-</i></font></option>
			                    <option>Shillong</option>
			                    <option>Meghalaya-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Mizoram-</i></font></option>
			                    <option>Aizawal</option>
			                    <option>Mizoram-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Nagaland-</i></font></option>
			                    <option>Dimapur</option>
			                    <option>Nagaland-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Orissa-</i></font></option>
			                    <option>Bhubaneshwar</option>
			                    <option>Cuttak</option>
			                    <option>Paradeep</option>
			                    <option>Puri</option>
			                    <option>Rourkela</option>
			                    <option>Orissa-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Punjab-</i></font></option>
			                    <option>Amritsar</option>
			                    <option>Bathinda</option>
			                    <option>Chandigarh</option>
			                    <option>Jalandhar</option>
			                    <option>Ludhiana</option>
			                    <option>Mohali</option>
			                    <option>Pathankot</option>
			                    <option>Patiala</option>
			                    <option>Punjab-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Rajasthan-</i></font></option>
			                    <option>Ajmer</option>
			                    <option>Jaipur</option>
			                    <option>Jaisalmer</option>
			                    <option>Jodhpur</option>
			                    <option>Kota</option>
			                    <option>Udaipur</option>
			                    <option>Rajasthan-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Sikkim-</i></font></option>
			                    <option>Gangtok</option>
			                    <option>Sikkim-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tamil Nadu-</i></font></option>
			                    <option>Chennai</option>
			                    <option>Coimbatore</option>
			                    <option>Cuddalore</option>
			                    <option>Erode</option>
			                    <option>Hosur</option>
			                    <option>Madurai</option>
			                    <option>Nagerkoil</option>
			                    <option>Ooty</option>
			                    <option>Salem</option>
			                    <option>Thanjavur</option>
			                    <option>Tirunalveli</option>
			                    <option>Trichy</option>
			                    <option>Tuticorin</option>
			                    <option>Vellore</option>
			                    <option>Tamil Nadu-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Tripura-</i></font></option>
			                    <option>Agartala</option>
			                    <option>Tripura-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Union Territories-</i></font></option>
			                    <option>Chandigarh</option>
			                    <option>Dadra & Nagar Haveli-Silvassa</option>
			                    <option>Daman & Diu</option>
			                    <option>Delhi</option>
			                    <option>Pondichery</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttar Pradesh-</i></font></option>
			                    <option>Agra</option>
			                    <option>Aligarh</option>
			                    <option>Allahabad</option>
			                    <option>Bareilly</option>
			                    <option>Faizabad</option>
			                    <option>Ghaziabad</option>
			                    <option>Gorakhpur</option>
			                    <option>Kanpur</option>
			                    <option>Lucknow</option>
			                    <option>Mathura</option>
			                    <option>Meerut</option>
			                    <option>Moradabad</option>
			                    <option>Noida</option>
			                    <option>Varanasi/Banaras</option>
			                    <option>Uttar Pradesh-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Uttaranchal-</i></font></option>
			                    <option>Dehradun</option>
			                    <option>Roorkee</option>
			                    <option>Uttaranchal-Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-West Bengal-</i></font></option>
			                    <option>Asansol</option>
			                    <option>Durgapur</option>
			                    <option>Haldia</option>
			                    <option>Kharagpur</option>
			                    <option>Kolkatta</option>
			                    <option>Siliguri</option>
			                    <option>West Bengal - Other</option>
			                    <option disabled="disabled" style="background-color:#3E3E3E"><font color="#FFFFFF"><i>-Other-</i></font></option>
			                    <option>Other</option>
			              
			                </select>
			           </div>
			          </div>          
			<div class="row">
			            <div class="form-group col-md-6 col-sm-6">
			                    <select class="custom-select my-1 mr-sm-2 drop" style="margin-bottom:20px" id="expected_country" name="country">
			                    <option value="">Desired country</option>
			                    <option value="USA" <?php if($_SESSION['country'] == "usa") echo 'selected="selected"'; ?>>USA</option>
			                    <option value="Canada" <?php if($_SESSION['country'] == "canada") echo 'selected="selected"'; ?>>Canada</option>
			                    <!--
			                    <option value="UK">UK</option>
			                    <option value="Germany">Germany</option>
			                    <option value="Australia">Australia</option>
			                    <option value="New Zealand">New Zealand</option>
			                       -->
			                        </select>

			            </div>            
			           <div class="form-group col-md-6 col-sm-6"> 
			          <select class="custom-select my-1 mr-sm-2 drop" id="expected_stream" name="stream">
			            <option value="">Desired Stream</option>
			            <option value="MS" <?php if($_SESSION['stream'] == "MS") echo 'selected="selected"'; ?>>MS</option>
			            <option value="MBA" <?php if($_SESSION['stream'] == "MBA") echo 'selected="selected"'; ?>>MBA</option>
			                </select>
			            </div>      
			</div>
			    

			         <div class="form-group"> 
			          <select class="custom-select my-1 mr-sm-2 drop" id="desired_program" name="stream">
			            <option value="">Desired Program</option>
			                   
			                    <option value="Aeronotical">Aeronotical</option>
			                    <option value="Agriculture">Agriculture</option>
			                    <option value="AIE">AIE</option>
			                    <option value="Automobile">Automobile</option>
			                    <option value="BioChemical">BioChemical</option>
			                    <option value="BioInformatics">BioInformatics</option>
			                    <option value="BioMedical">BioMedical</option>
			                    <option value="BioTechnology">BioTechnology</option>
			                    <option value="Chemical">Chemical</option>
			                    <option value="Civil">Civil</option>
			                    <option value="CSE">CSE</option>
			                    <option value="ECE">ECE</option>
			                    <option value="EEE">EEE</option>
			                    <option value="EIE">EIE</option>
			                    <option value="EnergyTechnology">EnergyTechnology</option>
			                    <option value="Environmental">Environmental</option>
			                    <option value="FireSafety">FireSafety</option>
			                    <option value="FoodTechology">FoodTechology</option>
			                    <option value="Genetic">Genetic</option>
			                    <option value="GeoInformatics">GeoInformatics</option>
			                    <option value="GeoScience">GeoScience</option>
			                    <option value="IndustrailEngg">IndustrailEngg</option>
			                    <option value="IndustrialProduction">IndustrialProduction</option>
			                    <option value="InstrumentaionControl">InstrumentaionControl</option>
			                    <option value="IT">IT</option>
			                    <option value="Leather">Leather</option>
			                    <option value="ManMadFiber">ManMadFiber</option>
			                    <option value="Manufacturing">Manufacturing</option>
			                    <option value="Marine">Marine</option>
			                    <option value="MaterialScience">MaterialScience</option>
			                    <option value="Mechanical">Mechanical</option>
			                    <option value="Mechatronics">Mechatronics</option>
			                    <option value="Metallurgical">Metallurgical</option>
			                    <option value="Mining">Mining</option>
			                    <option value="OceanEngineering">OceanEngineering</option>
			                    <option value="ProductionEngineering">ProductionEngineering</option>
			                    <option value="ProductionIndustrial">ProductionIndustrial</option>
			                    <option value="Textile">Textile</option>
			                    <option value="Other">Other</option>    

			                </select>
			            </div>

			               <div class="form-group">
			                          <input type="text" class="form-control drop-space" id="univname" placeholder="Enter University Name planning for">
			             </div>              
			     <div class="row">	 
			             <div class="form-group col-md-6 col-sm-6">
			          <select class="custom-select my-1 mr-sm-2 drop " id="desired_intake_season" name="stream">
			                          <option value="">Desired Intake season</option>
			                          <option value="Spring">Spring</option>
			                          <option value="Fall">Fall</option>                        
			                          <option value="Summer">Summer</option>  
			          </select>                
			             </div>
			               <div class="form-group col-md-6 col-sm-6">
			                          <select class="custom-select my-1 mr-sm-2 drop" id="desired_intake_year" name="stream">
			                                <option value="">Desired Intake Year</option>
			                                  <option value="2018">2018</option>
			                                   <option value="2019">2019</option>
			                                    <option value="2020">2020</option>

			                      	  </select>
			             </div>
			         
			     </div>    

			         <div class="row"> 
			             <div class="form-group col-md-6 col-sm-6">
			          <select class="custom-select mr-sm-2 drop" id="EntranceExam" name="stream">
			                         <option value="">Entrance Exam Given?</option>
			                          <option value="GMAT">GMAT</option>
			                          <option value="GRE">GRE</option>     
			          </select>                
			             </div>
			               <div class="form-group col-md-6 col-sm-6">
			                    <input type="text" class="form-control drop-space" id="EntranceExamScore" placeholder="Enter Entrance Exam Score">
			                    <small class="validation" id="Svalid1" style="color:red;">Only numbers acceptible</small>
			             </div>

			        </div>

			         <div class="row"> 
			             <div class="form-group col-md-6 col-sm-6">
			          <select class="custom-select mr-sm-2 drop" id="VerbalExam" name="stream">
			                         <option value="">Verbal Exam Given?</option>
			                          <option value="IELTS">IELTS</option>
			                          <option value="PTE">PTE</option>  
			                          <option value="TOEFL">TOEFL</option>     
			          </select>              
			             </div>
			               <div class="form-group col-md-6 col-sm-6">
			                          <input type="text" class="form-control drop-space" id="VerbalExamScore" placeholder="Enter Verbal Exam Score">
			                          <small class="validation" id="Svalid2" style="color:red;">Only numbers acceptible</small>
			             </div>

			        </div>
					<div class="row">
				         <div class="form-group col-md-6"> 
					          <select class="custom-select mr-sm-2 drop" id="loan_requirement" name="stream">
					            <option value="">Looking for Loan?</option>
					            <option value="YES">YES</option>
					            <option value="NO">NO</option>
					          </select>
				        </div>

		
				           <div class="form-group col-md-6">
				            
				            <input type="text" class="form-control drop-space" id="loan_amount" placeholder="Enter loan amount">
				          </div> 						
					</div>

			                   
			      
			          <div class="form-group">
			            <button type="button" id="submit" class="btn btn-primary btn-block btn-lg" style="margin-right:185px" > Submit  <i class="fas fa-spinner" id="loader"></i> </button>
			          </div>
			        </form>
		</div>
	</div>
</div>

 <?php 
 include("footer.php");
  ?>


  <script>
$('#loader').hide();
$('#Evalid').hide();
$('#Mvalid').hide();
$('#Svalid1').hide();
$('#Svalid2').hide();
  	$(document).ready(function(){
  			
  		$('#submit').click(function(){

  			var Name = $('#Student_name').val();
  			var nameReg = /^[A-Za-z ]+$/;
  			         if(Name == "" || nameReg.test(Name) == false)
                     {
                         $("#Student_name").css("border", "1px solid red");
                      	
                         setTimeout(function(){ $('#Student_name').css("border", "1px"); }, 2000);
                     }
                    
  			var Email = $('#Student_email').val();
  			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

                    if(Email == "" || reg.test(Email) == false)
                     {
                     	$('#Evalid').show();
                         $("#Student_email").css("border", "1px solid red");
                      	 
                          setTimeout(function(){ $('#Student_email').css("border", "1px"); }, 2000);
                     }else{
                     	$('#Evalid').hide();
                     }

  			var Mobile = $('#Student_mobile').val();
  			var mreg = /^91[0-9]{10}/;
  			         if(Mobile == "" || mreg.test(Mobile) == false)
                     {
                         $("#Student_mobile").css("border", "1px solid red");
                      	 $('#Mvalid').hide(); 
                          setTimeout(function(){ $('#Student_mobile').css("border", "1px"); }, 2000);
                     }

  			var Current_City = $('#student_city').val();
  			         if(Current_City == "")
                     {
                         $("#student_city").css("border", "1px solid red");
                      
                          setTimeout(function(){ $('#student_city').css("border", "1px"); }, 2000);
                     }
  			var Exp_Country = $('#expected_country').val();
  			  		if(Exp_Country == "")
                     {
                         $("#expected_country").css("border", "1px solid red");
                      	 	
                          setTimeout(function(){ $('#expected_country').css("border", "1px"); }, 2000);
                     }
  			var Exp_Stream = $('#expected_stream').val();
  			  		if(Exp_Stream == "")
                     {
                         $("#expected_stream").css("border", "1px solid red");
                      
                          setTimeout(function(){ $('#expected_stream').css("border", "1px"); }, 2000);
                     }

  			var Exp_program = $('#desired_program').val();
  			  		if(Exp_program == "")
                     {
                         $("#desired_program").css("border", "1px solid red");
                      
                          setTimeout(function(){ $('#desired_program').css("border", "1px"); }, 2000);
                     }

  			var Season = $('#desired_intake_season').val();
  			  		if(Season == "")
                     {
                         $("#desired_intake_season").css("border", "1px solid red");
                      
                          setTimeout(function(){ $('#desired_intake_season').css("border", "1px"); }, 2000);
                     }

  			var Year = $('#desired_intake_year').val();
  			  		if(Year == "")
                     {
                         $("#desired_intake_year").css("border", "1px solid red");
                      
                          setTimeout(function(){ $('#desired_intake_year').css("border", "1px"); }, 2000);
                     }

  			var EntranceExam = $('#EntranceExam').val();
  			  		if(EntranceExam == "")
                     {
                         $("#EntranceExam").css("border", "1px solid red");
                      
                          setTimeout(function(){ $('#EntranceExam').css("border", "1px"); }, 2000);
                     }

  			var EntranceExamScore = $('#EntranceExamScore').val();
  			var scoreReg = /^[0-9]/;
  			  		if(EntranceExamScore == "" || scoreReg.test(EntranceExamScore)== false)
                     {
                         $("#EntranceExamScore").css("border", "1px solid red");
                      		$('#Svalid1').show();
                          setTimeout(function(){ $('#EntranceExamScore').css("border", "1px"); }, 2000);
                     }else{
                     	$('#Svalid1').hide();
                     }

  			var VerbalExam =$('#VerbalExam').val();
  			  		if(VerbalExam == "")
                     {
                         $("#VerbalExam").css("border", "1px solid red");
                      		
                          setTimeout(function(){ $('#VerbalExam').css("border", "1px"); }, 2000);
                     }

  			var VerbalExamScore = $('#VerbalExamScore').val();
  			  		if(VerbalExamScore == "" || scoreReg.test(VerbalExamScore)== false)
                     {
                         $("#VerbalExamScore").css("border", "1px solid red");
                        $('#Svalid2').show();
                          setTimeout(function(){ $('#VerbalExamScore').css("border", "1px"); }, 2000);
                     }else{
                     	$('#Svalid2').hide();
                     }

  			var loan = $('#loan_requirement').val();
  			  		if(loan == "")
                     {
                         $("#loan_requirement").css("border", "1px solid red");
                      
                          setTimeout(function(){ $('#loan_requirement').css("border", "1px"); }, 2000);
                     }

  			var loan_amount = $('#loan_amount').val();
  			  		if(loan_amount == "")
                     {
                         $("#loan_amount").css("border", "1px solid red");
                      
                          setTimeout(function(){ $('#loan_amount').css("border", "1px"); }, 2000);
                     }

  			var univname = $('#univname').val();
   			  		if(univname == "" || nameReg.test(univname)== false)
                     {
                         $("#univname").css("border", "1px solid red");
                      
                          setTimeout(function(){ $('#univname').css("border", "1px"); }, 2000);
                     }
             var source = "<?php echo $_GET['source']; ?>";
             
 if (Name !== '' && nameReg.test(Name)== true && Email !== '' && reg.test(Email) == true && Mobile !== '' &&  mreg.test(Mobile) == true && Current_City !== '' && Exp_Country !== '' && Exp_Stream !== '' && Exp_program !== '' && Season !== '' &&  Year !== '' && EntranceExam !== '' && EntranceExamScore !== '' && VerbalExam !== '' &&  VerbalExamScore !== '' && loan !== '' && loan_amount !== '' && univname !== '' && nameReg.test(univname)== true)
        {


 			var querystring = 'Name=' + Name + '&Email=' + Email + '&Mobile=' + Mobile + '&Current_City=' + Current_City + '&Exp_Country=' + Exp_Country + '&Exp_Stream=' + Exp_Stream + '&Exp_program=' + Exp_program + '&Season=' + Season + '&Year=' + Year + '&EntranceExam=' + EntranceExam + '&EntranceExamScore=' + EntranceExamScore + '&VerbalExam=' + VerbalExam + '&VerbalExamScore=' + VerbalExamScore + '&loan=' + loan + '&loan_amount=' + loan_amount + '&univname=' + univname;

                     $.ajax({  
                          type: 'POST',
                          url: 'admission_application.php?source='+source,
                          data: querystring,
                          beforeSend: function(){
                              // Show image container
                             $('#loader').show();
                             },
                          success:(function(data) 
                          {
                                // alert(data);
                                $('#loader').hide();
	                             
	                             if (data == "inserted") 
	                             {
	                                alert("Your application for admission submitted successfully.");
	                               
	                                 window.location.href = "index.php";
	                             }else if(data == "fail")
	                             {
	                                    alert("Something went wrong while submitting form.Try again later");
	 
	                             }else if (data == "exists") 
	                             {
	                                    alert("Already applied for admission");
	                                   
	                                     window.location.href = "index.php";
	                             }else
	                             {
	                                alert("All field required");
	                                
	                             }
                          })
                   });
                      
    }


  			console.log(querystring);
  			
  		});
  	});
  </script>
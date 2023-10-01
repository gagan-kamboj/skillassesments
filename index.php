<?php
include('inc/header.php');
 session_start();
// if (isset($_GET['ref'])) {
//   $referralCode = $_GET['ref'];
//   $_SESSION['ReferralCode'] = $referralCode;
// }

// $msg = $_GET['msg']; 
  
?>

            <!--<section class="lists_section py-3 lists_hidden_mobile">-->
            <!--   <div>-->
                
 
                   
            <!--</section>-->
              <?php
						 if($msg == 'regemailsuc'){ ?>
							<div class="alert alert-success" id="alert" role="alert" style=" border: 1px solid #821c46;text-align: center; margin: 0px auto;">Please Check Your Mail & Verify.</div>					
			<?php } elseif($msg == 'regemailfailed'){ ?>
				<div class="alert alert-danger" id="alert" role="alert" style=" border: 1px solid #821c46;text-align: center; margin: 0px auto;">This Email Is Already Registered With Us.</div>
    <?php } elseif($msg == 'alreadyemail'){  ?>
    	<div class="alert alert-warning" id="alert" role="alert" style=" border: 1px solid #821c46;text-align: center; margin: 0px auto;">Registration Failed.</div>
    <?php } ?>
            
            
 <!-- Modal coming -->
                     <div class="modal fade" id="exampleModalcom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog modal-xl">
                         <div class="modal-content">
                         <div class="modal-header">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                           <div class="modal-body">
                                    <div class="comming">
                                    <h1>Coming Soon</h1>
                             </div>
                           </div>
                           
                           
                           <div class="modal-footer">
                           </div>
                         </div>
                       </div>
                     </div>
                     <!-- Modal coming end -->
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdropseeee" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              
                              
                         <form id="regForm" action="admin/inc/process.php?action=Eligibility" method="post">
                             <input type="hidden" name="refrralcode" value="<?=$_SESSION['ReferralCode'];?>">
                             <div class="row">
                                 <div class="col-lg-4 col-sm-4 col-xl-4 col-12"></div>
                                 <div class="col-lg-4 col-sm-4 col-xl-4 col-12">
                             <div class="want-work">
                                 <h4>Want to <span>WORK</span> in Australia? <span>CHECK</span> if you are eligible.</h4>
                             </div>
                             <div class="skilled-classes"><p>Complete this form to determine your eligibility to enter Australia under one of the skilled visa classes.</p></div>
                             <div class="image-1">
                                 <img src="assets/images/image-flag.jpeg" alt="image-flag" class="flag-australia"/>
                             </div>
                             </div>
                             <div class="col-lg-4 col-sm-4 col-xl-4 col-12">
                             </div>
                           <!-- One "tab" for each step in the form: -->
                           <div class="tab"><div class="EMPLOYMENT-REQUIREMENTS"><h5>STEP 1–<span class="employee">EMPLOYMENT REQUIREMENTS</span></h5></div>
                           <div class="tick-filled"><p>Tick √ to confirm your eligibility.</p></div>
                           
                            <div class="form-heading">
                            <h4><span>1.</span> Required skill assesment checklist for the following visas:</h4>
                           </div>
                           <div class="form-check-inputs">
                             <p><div class="form-check">
                                <!--<input type="checkbox" class="form-check-input" id="check1" name="employeeinfoo[]" value="Company Name and Location" required >-->
                                <label class="form-check-label" for="check1"><b>a.</b> Temporary Skill Shortage Visa (TSS) (Subclass 482) (check as most applications do not require)</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <!--<input type="checkbox" class="form-check-input" id="check2" name="employeeinfoo[]" value="Job Title" required >-->
                                <label class="form-check-label" for="check1"><b>b.</b> Skilled Nominated Visa (Subclass 190)</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <!--<input type="checkbox" class="form-check-input" id="check3" name="employeeinfoo[]" value="Job start and end dates" required >-->
                                <label class="form-check-label" for="check1"><b>c.</b> Skilled Employer Sponsored Regional (Provisional) Visa (subclass 494) – 494</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <!--<input type="checkbox" class="form-check-input" id="check4" name="employeeinfoo[]" value="Job roles and responsibilities" required  >-->
                                <label class="form-check-label" for="check1"><b>d.</b> Skilled Work Regional (Provisional) Visa (Subclass 491)</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <!--<input type="checkbox" class="form-check-input" id="check4" name="employeeinfoo[]" value="Job roles and responsibilities" required  >-->
                                <label class="form-check-label" for="check1"><b>e.</b> Skilled Independent Visa (Subclass 189) Points tested stream</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <!--<input type="checkbox" class="form-check-input" id="check4" name="employeeinfoo[]" value="Job roles and responsibilities" required  >-->
                                <label class="form-check-label" for="check1"><b>f.</b> Employer Nomination Scheme (Subclass 186) – 186 (DE)</label>
                              </div>
                             </p>
                           </div><br>
                           
                            <div class="form-heading">
                            <h4><span>2.</span> JOB POSITION APPLYING FOR THAT APPLICANT CAN PROVIDE SUPPORTING EVIDENCE:</h4>
                           </div>
                           <div class="form-check-inputs">
                             <p><div class="form-check d-flex gap-2">
                                1. <input type="text" class="formt" id="check2" name="supporting_evidencee[]" value=""  >
                              </div>
                             </p>
                              <p>
                                  <div class="form-check d-flex gap-2">
                                2. <input type="text" class="formt" id="check2" name="supporting_evidencee[]" value=" "  >
                                <!--<label class="form-check-label" for="check1"><b>b.</b> Skilled Nominated Visa (Subclass 190)</label>-->
                              </div>
                             </p>
                              <p><div class="form-check d-flex gap-2">
                                3. <input type="text" class="formt" id="check2" name="supporting_evidencee[]" value=""  >
                                <!--<label class="form-check-label" for="check1"><b>c.</b> Skilled Employer Sponsored Regional (Provisional) Visa (subclass 494) – 494</label>-->
                              </div>
                             </p>
                           </div><br>
                           
                           <div class="form-heading">
                            <h4><span>3.</span>  Can you provide a Resume with all the employment information with the following details:</h4>
                           </div>
                           <div class="form-check-inputs">
                             <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="employeeinfoo[]" value="Company Name and Location" required >
                                <label class="form-check-label" for="check1">Company Name and Location</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check2" name="employeeinfoo[]" value="Job Title" required >
                                <label class="form-check-label" for="check1">Job Title</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check3" name="employeeinfoo[]" value="Job start and end dates" required >
                                <label class="form-check-label" for="check1">Job start and end dates</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check4" name="employeeinfoo[]" value="Job roles and responsibilities" required  >
                                <label class="form-check-label" for="check1">Job roles and responsibilities</label>
                              </div>
                             </p>
                           </div><br>
                           <div class="form-heading two">
                            <h4><span>4.</span>  Can you provide Statements of Service/Employment Letter for each period of employment that counts towards eligibility.</h4>
                           </div>
                            <div class="form-check-inputs">
                             <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check5" name="statementservicee[]" value="Minimum 3 years of full-time experience" required >
                                <label class="form-check-label" for="check1">Minimum 3 years of full-time experience. (2 years within the last 10 years and 1 year within the last 3 years):</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check6" name="statementservicee[]" value="Must be on official business letterhead which includes business address and contact details" required  >
                                <label class="form-check-label" for="check1">Must be on official business letterhead which includes business address and contact details</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check7" name="statementservicee[]" value="Must include duration of employment, typical hours worked and type of employment" required  >
                                <label class="form-check-label" for="check1">Must include duration of employment, typical hours worked and type of employment (full-time/ part time / casual)</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check8" name="statementservicee[]" value="Must include a detailed description of the relevant tasks undertaken" required  >
                                <label class="form-check-label" for="check1">Must include a detailed description of the relevant tasks undertaken</label>
                              </div>
                             </p>
                                <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check9" name="statementservicee[]" value="Must include the name, position, email address and signature of the person authorised to make the statement" required  >
                                <label class="form-check-label" for="check1">Must include the name, position, email address and signature of the person authorised to make the statement</label>
                              </div>
                             </p>
                           </div><br>
                           
                            <div class="form-heading two three">
                            <h4><span>5.</span>  <strong>Employment Pay Evidence</strong> <span class="line-1">"(MUST have two (2) itemsper employer from the list belowand Evidence MUST support each period of employment that counts towards eligibility):</span></h4>
                           </div>
                           <div class="form-check-inputs">
                             <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check10" name="pay_slipss[]" value="Pay slips – minimum of three (3) per year/period of employment" required>
                                <label class="form-check-label" for="check1">Pay slips – minimum of three (3) per year/period of employment <i>(Named/labelled per employer and in sequential order)</i></label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check11" name="pay_slipss[]" value="Bank statement with the employer’s name and clearly showing income has been deposited" required>
                                <label class="form-check-label" for="check1">Bank statement with the employer’s name and clearly showing income has been deposited <i>(Saved in sequential order)</i></label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check12" name="pay_slipss[]" value="Superannuation documents citing the names of the applicant and employer" required>
                                <label class="form-check-label" for="check1">Superannuation documents citing the names of the applicant and employer<i>(if available)</i></label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check13" name="pay_slipss[]" value="Official government tax records or documents which may include payment summaries" required>
                                <label class="form-check-label" for="check1">Official government tax records or documents which may include payment summaries or group certificates</label>
                              </div>
                             </p>
                           </div>
                           </div>
                           <div class="tab"><div class="EMPLOYMENT-REQUIREMENTS"><h5>STEP 2–<span class="employee">EMPLOYMENT REQUIREMENTS</span></h5></div><br>
                           
                            <div class="form-heading">
                            <h4><span>2.</span> What relevant qualifications do you have related to the job position applying for (overseas or Australia)?</h4>
                           </div>
                           <div class="form-check-inputs">
                             <p><div class="form-check d-flex gap-2">
                              1. <textarea  class="w-100" id="" name="overseas_australia" value="" ></textarea>
                              </div>
                             </p>
                           </div><br>
                           
                           
                           
                            <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>1.</span>  What is your age? <small>(over 44 is not eligible)</small></h4>
                           </div>
                             <select name="age" id="ages" class="field-select">
                               <option value="18 - 20">18 - 20</option>
                               <option value="21 - 30">21 - 30</option>
                               <option value="31 - 44">31 - 44</option>
                               <option value="45 - 50">45 - 50</option>
                             </select>
                          
                           <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>2.</span>  What is your English ability? </h4>
                           </div>
                           <div class="row">
                               <div class="col-lg-6">
                           
                           <label for="ielts" class="PTE"><strong>IELTS score</strong></label>
                           <div class="iletsscore" id="ielts1">
                            <div class="form-check">
                           <input class="form-check-input" type="radio" id="ielts1" name="ielts" value="4" onclick="disableGroup('ielts')">
                           <label class="form-check-label">4</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="ielts1" name="ielts" value="4.5" onclick="disableGroup('ielts')">
                           <label class="form-check-label">4.5 </label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="ielts1" name="ielts" value="5" onclick="disableGroup('ielts')">
                           <label class="form-check-label">5</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="ielts1" name="ielts" value="5.5" onclick="disableGroup('ielts')">
                           <label class="form-check-label">5.5</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="ielts1" name="ielts" value="6" onclick="disableGroup('ielts')">
                           <label class="form-check-label">6</label>
                           </div>
                            <div class="form-check">
                           <input class="form-check-input" type="radio" id="ielts1" name="ielts" value="Above 6" onclick="disableGroup('ielts')">
                           <label class="form-check-label">Above 6</label>
                           </div>
                           </div>
                           
                           
                           <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>2.</span>  What is your English ability? </h4>
                           </div>
                           
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="english" name="english" value="I am fluent in English">
                           <label class="form-check-label">I am fluent in English</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="basic" name="english" value="I have basic English">
                           <label class="form-check-label">I have basic English </label>
                           </div>
                           <!--<div class="form-check">-->
                           <!--<input class="form-check-input" type="radio" id="speak" name="english" value="I don’t speak English">-->
                           <!--<label class="form-check-label">I don’t speak English</label>-->
                           <!--</div>-->
                           
                           </div>
                           
                           <div class="col-lg-6">
                           
                           <label for="pte" class="PTE"><strong>PTE</strong></label>
                            <div class="ptescore" id="pte1">
                          <div class="form-check">
                           <input class="form-check-input" type="radio" id="pte1" name="pte" value="23" onclick="disableGroup('pte')">
                           <label class="form-check-label">23</label>
                           </div>
                            <div class="form-check">
                           <input class="form-check-input" type="radio" id="pte1" name="pte" value="29" onclick="disableGroup('pte')">
                           <label class="form-check-label">29</label>
                           </div>
                            <div class="form-check">
                           <input class="form-check-input" type="radio" id="pte1" name="pte" value="36" onclick="disableGroup('pte')">
                           <label class="form-check-label">36</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="pte1" name="pte" value="46" onclick="disableGroup('pte')">
                           <label class="form-check-label">46</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="pte1" name="pte" value="56" onclick="disableGroup('pte')">
                           <label class="form-check-label">56 Above</label>
                           </div>
                          </div>
                          
                           </div>
                           </div>
                            <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>3.</span>  What is your highest level of education?</h4>
                           </div>
                        
                           <input type="text" class="form-control" id="none" name="highedu">
                          
                            <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>4.</span>  In which country was you qualification acquired?</h4>
                           </div>
                          
                           <input type="text" class="form-control" id="none" name="inwhichcountry">
                         
                           <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>5.</span>  Have you ever worked in Australia?</h4>
                           </div>
                           <div class="form-groupp">
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="yes" name="workinaus" value="Yes">
                           <label class="form-check-label">Yes</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="No" name="workinaus" value="No">
                           <label class="form-check-label">No</label>
                           </div>
                           </div>
                            <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>6.</span>  Do you have a valid passport?</h4>
                           </div>
                           <div class="form-groupp">
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="yes" name="passport" value="Yes">
                           <label class="form-check-label">Yes</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="No" name="passport" value="No">
                           <label class="form-check-label">No</label>
                           </div>
                           </div>
                            <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>7.</span>  What is country of birth?</h4>
                           </div>
                          
                           <input type="text" class="form-control" id="birth" name="birth">
                           
                           <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>8.</span>  Your full name </h4>
                           </div>
                         
                           <input type="name" class="form-control" id="name" name="fullname">
                          
                           <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>9.</span>  Your email address</h4>
                           </div>
                          
                           <input type="email" class="form-control" id="email" name="useremail">
                         
                            <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>10.</span>  Your contact number</h4>
                           </div>
                          
                           <input type="number" class="form-control" id="phone" name="phone">
                           
                           </div>
                           <div class="tab"><div class="EMPLOYMENT-REQUIREMENTS s"><h5>STEP 3 – <span class="employee"> Pay to view results</span></h5></div>
                           <div class="strps">
                               <p>To view your WORK in Australia eligibility results pay the <strong>$20 AUD</strong> processing fee</p>
                           </div>
                        
                           </div>
                           <div style="overflow:auto;margin-top: 40px;margin-bottom: 24px;">
                             <div style="float:right;">
                                 
                               <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                               <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                             </div>
                           </div>
                           <!-- Circles which indicates the steps of the form: -->
                             <div style="text-align:center;margin-top:40px;display:none;">
                             <span class="step"></span>
                             <span class="step"></span>
                             <span class="step"></span>
                             <span class="step"></span>
                           </div>
                        
                          </div>
                          </form>
                          <!--<div class="modal-footer">-->
                          <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                          <!--</div>-->
                        </div>
                      </div>
                    </div>
                    </div>
                    <!--modal desk end-->
                    
                    
            <!--mid image section-->
            <section class="image_section sec_common">
                <div cass="">
               <div class="image_container">
                  <div class="row mid_sec_row">
                      <div class="bg-dark">
                          <p ></p>
                      </div>
                     <div class="col-lg-5 mid_column_left">
                        <!--<div class="">-->
                           <h1 class="text-white heading_wr">Want to work in Australia?</h1>
                           <br>
                           <h2 class="">We specialise in Skill Assessments and Employer Sponsors</h2>
                           <br>
                           <p class="text-white mb-3">Skill Assessment Services Australia (SASA) provides current information, benefits, submission requirements, support and fees to help you in your
                              decision to apply for a Skill Assessment process, Employer Sponsor, Recognition of Prior Learning or Gap Training.
                           </p>
                        <!--</div>-->
                     </div>
                     <div class="col-lg-7 mt-4 mid-big">
                        <img src="assets/images/Depositphotos_24060543_xl-2015.jpg" class="w-100" alt="mid-big-img"/>
                     </div>
                  </div>
               </div>
               </div>
            </section>
            <!--Third section -->
            <section class="third_section sec_common">
               <div class="third_sec_container" id="secOne">
                  <h2>Service Information</h2>
                  <div class="row third_sec_content my-4">
                     <div class="col-md-3" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdroppp">
                           <div class="bg-white d-flex align-items-center justify-content-between gap-3 scroll_content">
                              <p>What is Skill Assessment</p>
                              <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                              <!--------------------------------->
                              <div class="modal fade" id="staticBackdroppp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelll" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <div class="fourth-sec-container py-3" id="secOne">
                  <h6 class="text-white fw-light">What is Skill Assessment</h6>
                  <ul class="fourth_sec_list m-0">
                     <li>The Australian Government requires individuals to undergo a skill assessment as part of the visa application process to ensure that they have the
                        required qualifications, skill, and experience to work in their nominated occupation in Australia.
                     </li>
                     <li>Skill assessment is the process of evaluating an individual's skill, knowledge, and experience against a set of criteria or standards in a particular field
                        or profession. It is usually used to determine the suitability of an individual for a particular job, occupation, or educational program.
                     </li>
                     <li>Skill assessment is an important step for individuals seeking to migrate to Australia under various visa categories.</li>
                     <li>skill assessments are issued by relevant skill assessing authorities. A skill assessing authority is an organisation that checks that your skill meet the
                        standards they set to work in a relevant occupation
                     </li>
                     <li>Skill assessment may involve various methods and tools, including tests, interviews, portfolios, and simulations. The criteria used to evaluate skill
                        may be based on industry standards, regulatory requirements, or specific job or program requirements.
                     </li>
                     <li> The skill assessment process may vary depending on the occupation and the relevant assessing authority. Each assessing authority has its own criteria
                        and requirements for skill assessment, which may include academic qualifications, work experience, language proficiency, and professional
                        registrations or memberships.
                     </li>
                     <li>A skill assessment is proof you have the relevant skill for a visa to live and work in Australia.</li>
                  </ul>
                  <div class="govt_page_links pt-4">
                  <h4 class="bg-white">Government links:</h4>
                  <p><a href="https://immi.homeaffairs.gov.au/">https://immi.homeaffairs.gov.au/</a></p>
                  <p> <a href="https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-assessment#:~:text=skill%20assessments%20are%20issued%20by,occupations%20under%204%20occupation%20lists">https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-assessment#:~:text=skill%20assessments%20are%20issued%20by,occupations%20under%204%20occupation%20lists</a>
                  </p>
                  </div>
               </div>
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
      <!--</div>-->
    </div>
  </div>
</div>
                           </div>
                     </div>
                     
                      <div class="col-md-3" type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdropppp">
                     <div class="bg-white d-flex align-items-center justify-content-between gap-3 scroll_content">
                        <p>Benefits of Skill Assessment</p>
                        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                          <div class="modal fade" id="staticBackdropppp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabellll" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row">
                  <h6 class="text-white fw-light inside_modal_title mb-2">Benefits of Skill Assessment</h6>
              <div class="col-md-6">
                  <img class="w-100" src="assets/images/Benefits of Skill Assessment.jpg" alt="Benefits of Skill Assessment">
              </div>
              <div class="col-md-6">
<div class="fourth-sec-container py-3" id="secTwo">
                  <h6 class="bg-white list_head_mid">Expand your visa options.</h6>
                  <ul class="fourth_sec_list m-0">
                     <li>A skill assessment is the first step of applying for an Australian skilled visa. </li>
                     <li>It’s also beneficial when applying for an employer sponsored visa. A positive skill assessment may offer you the chance of permanent residency, in
                        applying for the 494 visas.
                     </li>
                  </ul>
                  <h6 class="bg-white list_head_mid">Increase your Australian employability.</h6>
                  <ul class="fourth_sec_list m-0">
                     <li>An Australian skill assessment shows employer you have the skill to do the job. In such a competitive job market, a skill assessment can be the
                        difference of an employer reviewing your CV and not.
                     </li>
                  </ul>
                  <h6 class="bg-white list_head_mid">Commitment to Australia.</h6>
                  <ul class="fourth_sec_list m-0">
                     <li>It takes time, money, and motivation to complete a skill assessment. This demonstrates your commitment to working in Australia</li>
                     <li>Moreover, most Australian employers’ favour those with a skill assessment because it shows long-term intentions. </li>
                  </ul>
               </div>
             </div>
        </div>
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
         
      <!--</div>-->
    </div>
  </div>
</div>
                     </div>
                      </div>
                      
                      <div class="col-md-3" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdroppppp">
                      
                     <div class="bg-white d-flex align-items-center justify-content-between gap-3 scroll_content">
                        <p>Employer Sponsor</p>
                        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                        <div class="modal fade" id="staticBackdroppppp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelllll" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="comming">
 <div class="row">
                  <h6 class="text-white fw-light inside_modal_title mb-2">Employer Sponsor</h6>
              <div class="col-md-2 pr-0">
                  <img class=" " src="assets/images/Depositphotos_188568682_XL.jpg" alt="Benefits of Skill Assessment" style="    height: 175px;
    object-fit: fill;
    width: 150px;">
              </div>
              <div class="col-md-10 pl-0">
<div class="fourth-sec-container py-3" id="secTwo">
                   
                  <ul class="fourth_sec_list m-0 p-0">
                      <p class="text-dark">We at SASA specialise in the procurement of SBS (Standard Business Sponsor) employers 
to facilitate most in demand skill vacancies. We provide the solution both to the employer 
sponsor and the foreign skilled worker to come and work in Australia.</p>
<h6 class="bg-white fw-bold list_head_mid py-4">Here are the general steps involved:</h6>
<p class="text-dark fw-normal"><strong class=" text-dark">1. We find an Employer Sponsor:</strong> The first step is to secure a job offer from an Australian 
employer willing to sponsor you. We achieved through our network and employer 
partners. All employers are eligible to sponsor workers from overseas.
</p>
 
                  </ul>
               
               </div>
             </div>
        </div>
<p class="text-dark fw-normal py-2"><strong class=" text-dark">2. Employer Nomination:</strong> The Australian employer nominates you for a specific position. They need to 
demonstrate that they can't fill the position with an Australian citizen or resident, and that they can provide you 
with equivalent terms and conditions of employment to what an Australian worker would receive.
</p>
<p class="text-dark fw-normal py-2"><strong class=" text-dark">3. Visa Application:</strong>: Once you're nominated, you can apply for the visa. The application process includes showing 
you meet the skills, qualifications, and English language requirements for the position. You will also need to meet 
health and character requirements.</p>
<p class="text-dark fw-normal py-2"><strong class=" text-dark">4. Visa Grant:</strong>If your application is successful, you will be granted a visa, which allows you to live and work in 
Australia for a certain period. The length and conditions of your stay will depend on the specific visa subclass you 
have been nominated for.</p>
<p class="text-dark fw-normal"><em>Keep in mind that the specific requirements and procedures can vary depending on the visa subclass and the
nature of the job. We recommend consulting with a migration agent or legal professional for personalized advice.</em></p>

          </div>
<!--          <div class="row">-->
<!--                  <h6 class="text-white fw-light inside_modal_title mb-2">Employer Sponsored Job Vacancies</h6>-->
<!--              <div class="col-md-6">-->
<!--                  <img class="w-100" src="assets/images/Employer Sponsored Job Vacancies.jpg" alt="Employer Sponsored Job Search">-->
<!--              </div>-->
<!--              <div class="col-md-6">-->
<!--<div class="fourth-sec-container py-3" id="secThree">-->
<!--                  <ul class="pl-3 fourth_sec_list m-0">-->
<!--                     <li>SASA is associated with employers throughout Australia who are looking for skilled personnel. </li>-->
<!--                     <li>To apply for an employer sponsored visa, candidates must meet the criteria as required for that particular visa</li>-->
<!--                     <li>Employer Sponsored Visas allow skilled overseas workers to live and work in Australia for their nominating Australian employer. Visa applicants must be-->
<!--                        qualified or have sufficient experience working in an occupation listed on the relevant Skilled Occupation List.-->
<!--                     </li>-->
<!--                     <li> If you are looking for an Employer Sponsor, complete the <a href="#">Employer Sponsored Job Search.</a></li>-->
<!--                  </ul>-->
<!--                  <div class="govt_page_links pt-4">-->
<!--                  <h4 class="bg-white">Government links:</h4>-->
<!--                  <p><a href="https://immi.homeaffairs.gov.au/visas/employing-and-sponsoring-someone/sponsoring-workers/becoming-a-sponsor/standard-business-sponsor#Overview">https://immi.homeaffairs.gov.au/visas/employing-and-sponsoring-someone/sponsoring-workers/becoming-a-sponsor/standard-business-sponsor#Overviewa></a></p>-->
<!--               </div>-->
<!--               </div>-->
<!--               </div>-->
<!--               </div>-->
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
       
      <!--</div>-->
    </div>
  </div>
</div>
                     </div>
                     
                     </div>
                     
                      <div class="col-md-3" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropppppp">
                 
                     <div class="bg-white d-flex align-items-center justify-content-between gap-3 scroll_content">
                        <p>What is RPL?</p>
                        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                         <div class="modal fade" id="staticBackdropppppp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabellllll" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="fourth-sec-container py-3">
            <h6 class="text-white fw-light">What is RPL – Recognition of Prior Learning</h6>
            <p class="text-dark">Recognition of Prior Learning (RPL) is the process that acknowledges the skill and abilities that you have built up via prior study, which includes both formal
and non-formal learning, along with work experience and volunteering. Through RPL on specific units, you can receive your qualification without having to
repeat the same learnings that you’ve already experienced.</p>

<h6 class="bg-white">Commitment to Australia.</h6>
            <ul class="fourth_sec_list">
               <li>Faster qualification: Don’t waste time learning things that you already know. Convert your existing skill into a full qualification or use them to get a
headstart on the course you need with one of Australia’s leading RPL providers.</li>
               <li> Accelerate your career: Identify gaps in your knowledge and skill, and use this to enrol for the right course for your career advancement</li>
               <li>Gain formal recognition of your skill: You’ve worked hard to get where you are – whether through study, work experience or volunteering. Reward
yourself, and your career, with RPL.</li>
               <li>Value for money: Complete your formal qualification for less cost – RPL is cheaper!
</li>
<p class="text-dark">Check if you eligible for RPL by completing the <a href="" class=""> RPL – Eligibility Check</a></p>
            </ul>
            
            <h4 class="bg-white">Government links:</h4>
            <p><a href="https://immi.homeaffairs.gov.au/">https://immi.homeaffairs.gov.au/</a></p>
           <p> <a href="https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-assessment#:~:text=skill%20assessments%20are%20issued%20by,occupations%20under%204%20occupation%20lists">https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-assessment#:~:text=skill%20assessments%20are%20issued%20by,occupations%20under%204%20occupation%20lists</a>
        </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                        
                     </div>
                      
                     </div>
                  </div>
               </div>
               <div class="third_sec_container py-4" id="secVisas">
                  <h2>Skill Assessment</h2>
                  <p class="text-white third_sec_title">You may need to have your skill assessed by the relevant assessing authority to be eligible for any of the below visas.</p>
                  <div class="row row_content p-5 pt-4 pb-0">
                      
                      
                     <!--Modal 1st start-->
                     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
                                
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <table class="table table-hover">
                                      <thead>
                                        <tr>
                                          <th class="main_heading" scope="col" colspan="10">Temporary Skill Shortage Visa (TSS) (Subclass 482)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain" style="" scope="row" colspan="5">Short Stream Visa information</th>
                                          <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/short-term-stream">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/short-term-stream</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain" style="" scope="row" colspan="5">Skill Occupation List </th>
                                        <td><a href="https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list">https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain" style="" scope="row" colspan="5">Medium Stream Visa information</th>
                                     <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/medium-term-stream">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/medium-term-stream</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain" style="" scope="row" colspan="5">Skill Occupation List</th>
                                     <td><a href="https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list">https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain" style="" scope="row" colspan="5">Labour agreement stream Visa information</th>
                                     <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/labour-agreement-stream">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/labour-agreement-stream</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain " style="" scope="row" colspan="5">Subsequent entrant Visa information</th>
                                     <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/subsequent-entrant">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/subsequent-entrant</a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Button trigger modal -->
                     <div class="col-md-6 mb-4" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="bg-white d-flex align-items-center justify-content-between scroll_content">
                           <p >Temporary Skill Shortage Visa <br>(TSS) (Subclass 482)</p>
                           <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                        </div>
                     </div>
                     
                     
                     <!--Modal 2nd start-->
                     <div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <table class="table table-hover">
                                      <thead>
                                        <tr>
                                          <th class="main_heading" scope="col" colspan="10">Skilled Nominated Visa (Subclass 190)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain"  scope="row" colspan="5">Skilled Nominated Visa (Subclass 190) </th>
                                          <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-nominated-190">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-nominated-190</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain"  scope="row" colspan="5">Skill Occupation List</th>
                                        <td><a href="https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list">https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain"  scope="row" colspan="5">Medium Stream Visa information</th>
                                     <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/medium-term-stream">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/temporary-skill-shortage-482/medium-term-stream</a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Button trigger modal -->
                     <div class="col-md-6 mb-4" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModall">
                        <div class="bg-white d-flex align-items-center justify-content-between scroll_content py-4">
                           <p >Skilled Nominated Visa (Subclass 190)</p>
                           <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                        </div>
                     </div>
                     
                     
                     <!--Modal 3rd start-->
                     <div class="modal fade" id="exampleModalll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
 
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                    <table class="table table-hover">
                                      <thead>
                                        <tr>
                                          <th class="main_heading" scope="col" colspan="10">Skilled Employer Sponsored Regional (Provisional) Visa (subclass 494) – 494</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain"  scope="row" colspan="5">Skilled Employer Sponsored Regional (Provisional)(subclass 494) – 494</th>
                                          <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-employer-sponsored-regional-494">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-employer-sponsored-regional-494</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain" style="" scope="row" colspan="5">Employer Sponsored Stream Visa Information </th>
                                        <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-employer-sponsored-regional-494/employer-sponsored-stream">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-employer-sponsored-regional-494/employer-sponsored-stream</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain" style="" scope="row" colspan="5">Labour Agreement Stream Visa Information</th>
                                          <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-employer-sponsored-regional-494/labour-agreement-stream">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-employer-sponsored-regional-494/labour-agreement-stream</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain " style="" scope="row" colspan="5">Subsequent entrant Visa information </th>
                                     <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-employer-sponsored-regional-494/subsequent-entrant">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-employer-sponsored-regional-494/subsequent-entrant</a></td>
                                        </tr>
                                        <tr>
                                          <th class="border-dark border-end table-data_contain" scope="row" colspan="5">Skill Occupation List</th>
                                     <td><a href="https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list">https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list</a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Button trigger modal -->
                     <div class="col-md-6 mb-4" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalll">
                        <div class="bg-white d-flex align-items-center justify-content-between scroll_content">
                           <p >Skilled Employer Sponsored Regional <br>(Provisional) Visa (subclass 494) – 494</p>
                           <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                        </div>
                     </div>
                     
                     
                     <!--Modal 4th start-->
                     <div class="modal fade" id="exampleModallll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
                                  
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
<table class="table table-hover">
  <thead>
    <tr>
      <th class="main_heading" scope="col" colspan="10">Skilled Work Regional (Provisional) Visa (Subclass 491)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="border-dark border-end table-data_contain"  scope="row" colspan="5">Skilled Work Regional (Provisional) Visa (Subclass 491)</th>
      <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-work-regional-provisional-491">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-work-regional-provisional-491</a></td>
    </tr>
    <tr>
      <th class="border-dark border-end table-data_contain" style="" scope="row" colspan="5">Skilled Work Regional (Provisional) visa - Main applicant </th>
    <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-work-regional-provisional-491/application">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-work-regional-provisional-491/application</a></td>
    </tr>
    <tr>
      <th class="border-dark border-end table-data_contain"  scope="row" colspan="5">Skill Occupation List</th>
      <td><a href="https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list">https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list</a></td>
    </tr>
    <tr>
      <th class="border-dark border-end table-data_contain " style="" scope="row" colspan="5">Skilled Work Regional (Provisional) visa – Subsequent entrant
</th>
 <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-work-regional-provisional-491/subsequent-entrant">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-work-regional-provisional-491/subsequent-entrant</a></td>
    </tr>
  </tbody>
</table>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Button trigger modal -->
                     <div class="col-md-6 mb-4" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModallll">
                        <div class="bg-white d-flex align-items-center justify-content-between scroll_content">
                           <p >Skilled Work Regional (Provisional) Visa <br>(Subclass 491)</p>
                           <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                        </div>
                     </div>
                     
                     
                     <!--Modal 5th start-->
                     <div class="modal fade" id="exampleModalllll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
                             
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <table class="table table-hover">
  <thead>
    <tr>
      <th class="main_heading" scope="col" colspan="10">Employer Nomination Scheme (Subclass 186) – 186 (DE)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="border-dark border-end table-data_contain"  scope="row" colspan="5">Employer Nomination Scheme (Subclass 186) – 186 (DE) Regional Sponsored Migration Scheme (subclass 187)</th>
      <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-work-regional-provisional-491">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-work-regional-provisional-491</a></td>
    </tr>
    <tr>
      <th class="border-dark border-end table-data_contain" style="" scope="row" colspan="5">Direct Entry Stream</th>
    <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/employer-nomination-scheme-186/direct-entry-stream">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/employer-nomination-scheme-186/direct-entry-stream</a></td>
    </tr>
    <tr>
      <th class="border-dark border-end table-data_contain" style=""  scope="row" colspan="5">Labour Agreement Stream</th>
      <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/employer-nomination-scheme-186/labour-agreement-stream">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/employer-nomination-scheme-186/labour-agreement-stream</a></td>
    </tr>
    <tr>
      <th class="border-dark border-end table-data_contain" style="" scope="row" colspan="5">Temporary Residence Transitionstream</th>
 <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/employer-nomination-scheme-186/temporary-residence-transition-stream">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/employer-nomination-scheme-186/temporary-residence-transition-stream</a></td>
    </tr>
  </tbody>
</table>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Button trigger modal -->
                     <div class="col-md-6 mb-4" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalllll">
                        <div class="bg-white d-flex align-items-center justify-content-between scroll_content">
                           <p >Employer Nomination Scheme <br>(Subclass 186) – 186 (DE)</p>
                           <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                        </div>
                     </div>
                     
                     
                     <!--Modal 6th start-->
                     <div class="modal fade" id="exampleModallllll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
                                 
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                                                 <table class="table table-hover">
  <thead>
    <tr>
      <th class="main_heading" scope="col" colspan="10">Employer Nomination Scheme (Subclass 186) – 186 (DE)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="border-dark border-end table-data_contain"  scope="row" colspan="5">Skilled Independent Visa (Subclass 189)</th>
      <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-independent-189/points-tested">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/skilled-independent-189/points-tested</a></td>
    </tr>
    <tr>
      <th class="border-dark border-end table-data_contain" scope="row" colspan="5">Skill Occupation List </th>
    <td><a href="https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list">https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-occupation-list</a></td>
    </tr>
  </tbody>
</table>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Button trigger modal -->
                     <div class="col-md-6 mb-4" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModallllll">
                        <div class="bg-white d-flex align-items-center justify-content-between scroll_content">
                           <p >Skilled Independent Visa <br>(Subclass 189)Points tested stream</p>
                           <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                        </div>
                     </div>
                     
                     
                     <!--Modal 7th start-->
                     <div class="modal fade" id="exampleModalllllll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
                                
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                                                                                  <table class="table table-hover">
  <thead>
    <tr>
      <th class="main_heading" scope="col" colspan="10">Training Visa (subclass 407) – 407</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="border-dark border-end table-data_contain"  scope="row" colspan="5">Training Visa (subclass 407) - 407 </th>
      <td><a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/training-407">https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/training-407</a></td>
    </tr>
  </tbody>
</table>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Button trigger modal -->
                     <div class="col-md-6 mb-4" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalllllll">
                        <div class="bg-white d-flex align-items-center justify-content-between scroll_content py-4">
                           <p >Training Visa (subclass 407) – 407</p>
                           <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            
            
            <!--Fourth section-->
            <!--<section class="fourth-section py-4 sec_common">-->
           
               <!--<div class="fourth-sec-container py-3" id="secOne">-->
               <!--   <h6 class="text-white fw-light">What is Skill Assessment</h6>-->
               <!--   <ul class="fourth_sec_list m-0">-->
               <!--      <li>The Australian Government requires individuals to undergo a skill assessment as part of the visa application process to ensure that they have the-->
               <!--         required qualifications, skill, and experience to work in their nominated occupation in Australia.-->
               <!--      </li>-->
               <!--      <li>Skill assessment is the process of evaluating an individual's skill, knowledge, and experience against a set of criteria or standards in a particular field-->
               <!--         or profession. It is usually used to determine the suitability of an individual for a particular job, occupation, or educational program.-->
               <!--      </li>-->
               <!--      <li>Skill assessment is an important step for individuals seeking to migrate to Australia under various visa categories.</li>-->
               <!--      <li>skill assessments are issued by relevant skill assessing authorities. A skill assessing authority is an organisation that checks that your skill meet the-->
               <!--         standards they set to work in a relevant occupation-->
               <!--      </li>-->
               <!--      <li>Skill assessment may involve various methods and tools, including tests, interviews, portfolios, and simulations. The criteria used to evaluate skill-->
               <!--         may be based on industry standards, regulatory requirements, or specific job or program requirements.-->
               <!--      </li>-->
               <!--      <li> The skill assessment process may vary depending on the occupation and the relevant assessing authority. Each assessing authority has its own criteria-->
               <!--         and requirements for skill assessment, which may include academic qualifications, work experience, language proficiency, and professional-->
               <!--         registrations or memberships.-->
               <!--      </li>-->
               <!--      <li>A skill assessment is proof you have the relevant skill for a visa to live and work in Australia.</li>-->
               <!--   </ul>-->
               <!--   <div class="govt_page_links pt-4">-->
               <!--   <h4 class="bg-white">Government links:</h4>-->
               <!--   <p><a href="https://immi.homeaffairs.gov.au/">https://immi.homeaffairs.gov.au/</a></p>-->
               <!--   <p> <a href="https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-assessment#:~:text=skill%20assessments%20are%20issued%20by,occupations%20under%204%20occupation%20lists">https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-assessment#:~:text=skill%20assessments%20are%20issued%20by,occupations%20under%204%20occupation%20lists</a>-->
               <!--   </p>-->
               <!--   </div>-->
               <!--</div>-->
               <!--Benefits of Skill Assessment<-->
               <!--<div class="fourth-sec-container py-3" id="secTwo">-->
               <!--   <h6 class="text-white fw-light">Benefits of Skill Assessment</h6>-->
               <!--   <h6 class="bg-white list_head_mid">Expand your visa options.</h6>-->
               <!--   <ul class="fourth_sec_list m-0">-->
               <!--      <li>A skill assessment is the first step of applying for an Australian skilled visa. </li>-->
               <!--      <li>It’s also beneficial when applying for an employer sponsored visa. A positive skill assessment may offer you the chance of permanent residency, in-->
               <!--         applying for the 494 visas.-->
               <!--      </li>-->
               <!--   </ul>-->
               <!--   <h6 class="bg-white list_head_mid">Increase your Australian employability.</h6>-->
               <!--   <ul class="fourth_sec_list m-0">-->
               <!--      <li>An Australian skill assessment shows employer you have the skill to do the job. In such a competitive job market, a skill assessment can be the-->
               <!--         difference of an employer reviewing your CV and not-->
               <!--      </li>-->
               <!--   </ul>-->
               <!--   <h6 class="bg-white list_head_mid">Commitment to Australia.</h6>-->
               <!--   <ul class="fourth_sec_list m-0">-->
               <!--      <li>It takes time, money, and motivation to complete a skill assessment. This demonstrates your commitment to working in Australia</li>-->
               <!--      <li>Moreover, most Australian employers’ favour those with a skill assessment because it shows long-term intentions. </li>-->
               <!--   </ul>-->
               <!--</div>-->
               <!--Employer Sponsored Job Vacancies-->
               <!--<div class="fourth-sec-container py-3" id="">-->
               <!--   <h6 class="text-white fw-light">Employer Sponsored Job Vacancies</h6>-->
               <!--   <ul class="p-0 fourth_sec_list m-0">-->
               <!--      <li>SASA is associated with employers throughout Australia who are looking for skilled personnel. </li>-->
               <!--      <li>To apply for an employer sponsored visa, candidates must meet the criteria as required for that particular visa</li>-->
               <!--      <li>Employer Sponsored Visas allow skilled overseas workers to live and work in Australia for their nominating Australian employer. Visa applicants must be-->
               <!--         qualified or have sufficient experience working in an occupation listed on the relevant Skilled Occupation List.-->
               <!--      </li>-->
               <!--      <li> If you are looking for an Employer Sponsor, complete the <a href="#">Employer Sponsored Job Search.</a></li>-->
               <!--   </ul>-->
               <!--   <div class="govt_page_links pt-4">-->
               <!--   <h4 class="bg-white">Government links:</h4>-->
               <!--   <p><a href="https://immi.homeaffairs.gov.au/visas/employing-and-sponsoring-someone/sponsoring-workers/becoming-a-sponsor/standard-business-sponsor#Overview">https://immi.homeaffairs.gov.au/visas/employing-and-sponsoring-someone/sponsoring-workers/becoming-a-sponsor/standard-business-sponsor#Overviewa></a></p>-->
               <!--</div>-->
               <!--</div>-->
               <!--What is RPL -->
               <!--<div class="fourth-sec-container py-3" id="secFour">-->
               <!--   <h6 class="text-white fw-light">What is RPL – Recognition of Prior Learning</h6>-->
               <!--   <p>Recognition of Prior Learning (RPL) is the process that acknowledges the skill and abilities that you have built up via prior study, which includes both formal-->
               <!--      and non-formal learning, along with work experience and volunteering. Through RPL on specific units, you can receive your qualification without having to-->
               <!--      repeat the same learnings that you’ve already experienced.-->
               <!--   </p>-->
               <!--   <h6 class="bg-white list_head_mid pt-4">Benefits of RPL</h6>-->
               <!--   <ul class="fourth_sec_list m-0">-->
               <!--      <li>Faster qualification: Don’t waste time learning things that you already know. Convert your existing skill into a full qualification or use them to get a-->
               <!--         headstart on the course you need with one of Australia’s leading RPL providers.-->
               <!--      </li>-->
               <!--      <li> Accelerate your career: Identify gaps in your knowledge and skill, and use this to enrol for the right course for your career advancement</li>-->
               <!--      <li>Gain formal recognition of your skill: You’ve worked hard to get where you are – whether through study, work experience or volunteering. Reward-->
               <!--         yourself, and your career, with RPL.-->
               <!--      </li>-->
               <!--      <li>Value for money: Complete your formal qualification for less cost – RPL is cheaper!</li>-->
               <!--      <div class="pt-4">-->
               <!--      <p>Check if you eligible for RPL by completing the<a href="https://www.magistergroup.com.au/">  RPL – Eligibility Check</a></p>-->
               <!--      </div>-->
               <!--   </ul>-->
               <!--   <div class="govt_page_links pt-4">-->
               <!--   <h4 class="bg-white">Government links:</h4>-->
               <!--   <p><a href="https://immi.homeaffairs.gov.au/">https://immi.homeaffairs.gov.au/</a></p>-->
               <!--   <p> <a href="https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-assessment#:~:text=skill%20assessments%20are%20issued%20by,occupations%20under%204%20occupation%20lists">https://immi.homeaffairs.gov.au/visas/working-in-australia/skill-assessment#:~:text=skill%20assessments%20are%20issued%20by,occupations%20under%204%20occupation%20lists</a>-->
               <!--   </p>-->
               <!--   </div>-->
               <!--</div>-->
            <!--</section>-->
         </div>
      </main>
      
   <?php   include('inc/footer.php'); ?>
      
      <section>
              <!-- Button trigger modal -->
          <div class="d-flex justify-content-center gap-4 p-4 pt-0">
              <!--<p type="button" class="btn_title_main_wrap" data-bs-toggle="modal" data-bs-target="#exampleModals">General Conditions</p>-->
 

<!-- Modal -->
<div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabels" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <section class="condition_section">
                  <div class="condition_title">
                      <h3 class="text-center" style="color: #004d8e;">Conditions of Use for Skill Assessment Services Australia</h3>
                  </div>
                  <div class="condition_heading pt-4">
                  <h2>General Conditions</h2>
                  </div>
                  <div>
                      <p class="py-2">1.1 By using the Skill Assessment Services Australia website (the "Website"), you agree to comply with and be bound by the following terms and conditions (the "Conditions of Use").</p>
                      <p class="py-2">1.2 Skill Assessment Services Australia does not guarantee the accuracy, completeness, or suitability of any information contained on or accessed through the Website and is not responsible for its use or any reliance placed on it.</p>
                      <p class="py-2">1.3 The information provided on the Website is intended only as a general guide to relevant laws and regulations and does not address the complexities of specific situations. It is recommended that you seek independent advice tailored to your individual circumstances.</p>
                      <p class="py-2">1.4 To the extent permitted by law, Skill Assessment Services Australia and its agents exclude all liability for any loss or damage arising from the use of, or reliance on, the information contained on or accessed through the Website, whether or not caused by any negligence on the part of Skill Assessment Services Australia or its agents.</p>
                      <p class="py-2">1.5 While Skill Assessment Services Australia makes reasonable efforts to maintain up-to-date links on the Website, the currency of these links is dependent upon their respective owners notifying Skill Assessment Services Australia of any changes. If you discover a broken or outdated link, please notify Skill Assessment Services Australia by completing the online feedback form.</p>
                      <p class="py-2">By using the Skill Assessment Services Australia website, you acknowledge that you have read, understood, and agree to be bound by these Conditions of Use. </p>
                  </div>
              </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 
      </div>
    </div>
  </div>
</div>
 
              <!--<p type="button" class="btn_title_main_wrap" data-bs-toggle="modal" data-bs-target="#exampleModalss">Privacy Statement</p>-->
              <div class="modal fade" id="exampleModalss" tabindex="-1" aria-labelledby="exampleModalLabelss" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <section class="privacy_statement-wrapper">
            <div class="condition_title">
                      <h3 class="text-center" style="color: #004d8e;">Privacy Statement for Skill Assessment Services Australia</h3>
                  </div>
                  <div class="condition_heading pt-4">
                  <h2>Introduction</h2>
                  </div>
                  <div>
                      <p class="py-2">Skill Assessment Services Australia (SASA) is committed to protecting the privacy of our clients and users of our services. This Privacy Statement outlines how we collect, use, store, and disclose your personal information when you engage with our services, in accordance with the Australian Privacy Principles (APPs) under the Privacy Act 1988 (Cth).</p>
                      <p class="py-2">By using our services or providing us with your personal information, you consent to the collection, use, and disclosure of your information in accordance with this Privacy Statement.</p>
                  </div>
                  <div class="info_privacy">
                      <h2 class="pt-3">Collection of Personal Information</h2>
                      <p>We collect personal information that is necessary for providing our skill assessment services, including:</p>
                      <p>a) Contact details, such as your name, address, email, and phone number;</p>
                      <p>b) Identification details, such as your date of birth, passport, and driver's license;</p>
                      <p>c) Employment and educational history, qualifications, and skill;</p>
                      <p>d) Payment information, such as your credit card or bank account details;</p>
                      <p>e) Any other relevant information that you provide to us during the assessment process.</p>
                      <p class="pt-5">We collect personal information directly from you, or from third parties, such as employers, education providers, or referees, with your consent</p>
                  </div>
                  <div class="info_privacy">
                      <h2 class="pt-3">Use of Personal Information</h2>
                      <p>We use your personal information for the following purposes:</p>
                      <p>a) To assess your skill, qualifications, and employment history;</p>
                      <p>b) To communicate with you about your assessment or any other relevant services;</p>
                      <p>c) To process payments for our services;</p>
                      <p>d) To comply with legal and regulatory requirements;</p>
                      <p>e) To improve our services and customer experience;</p>
                      <p>f) For internal record keeping and administration purposes.</p>
                  </div>
                  <div class="info_privacy">
                      <h2 class="pt-3">Disclosure of Personal Information</h2>
                      <p>We may disclose your personal information to:</p>
                      <p>a) Third parties involved in the assessment process, such as employers, education providers, or referees;</p>
                      <p>b) Government agencies or regulatory bodies, where required or authorized by law;</p>
                      <p>c) Our service providers, including IT service providers, payment processors, and other professional advisors;</p>
                      <p>d) Any other third parties, with your consent.</p>
                  </div>
                  
                  <div class="info_privacy">
                      <h2 class="pt-3">Storage and Security of Personal Information</h2>
                      <p>We take reasonable steps to ensure that your personal information is stored securely, both electronically and in hard copy, and protected from unauthorized access, modification, or disclosure. We retain your personal information for as long as necessary to fulfill the purposes for which it was collected, or as required by law.</p>
                  </div>
                  <div class="info_privacy">
                      <h2 class="pt-3">Access and Correction of Personal Information</h2>
                      <p>You have the right to request access to your personal information held by us and request corrections if any information is inaccurate, incomplete, or outdated. To make a request, please contact us using the details provided in section 9.</p>
                      
                  </div>
                  <div class="info_privacy">
                      <h2 class="pt-3">Changes to this Privacy Statement</h2>
                      <p>We may update this Privacy Statement from time to time to reflect changes in our practices or applicable laws. Any changes will be effective from the date of publication on our website.</p>
                      
                  </div>
                  <div class="info_privacy">
                      <h2 class="pt-3">Complaints</h2>
                      <p>If you have any concerns or complaints about how we handle your personal information, please contact us using the details provided in section 9. We will investigate your complaint and respond to you within a reasonable time.</p>
                  </div>
                  <div class="info_privacy">
                      <h2 class="pt-3">Contact Information</h2>
                      <p>If you have any questions or comments about this Privacy Statement or our privacy practices, please contact us at:</p>
                      <p class="address_contact">Skill Assessment Services Australia<br>4/117 Russell street, Morley Western Australia <br>info@skill-assessment-australia.au</p>
                      <p class="pt-5">We are committed to working with you to resolve any privacy concerns and to ensure the protection of your personal information.</p>
                  </div>
       </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 
      </div>
    </div>
  </div>
</div>


<!--testimonial start-->

 <div class="modal fade" id="exampleModalssss" tabindex="-1" aria-labelledby="exampleModalLabelss" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body body">
       <section class="privacy_statement-wrapper">
           
<section id="testim" class="testim">
<!--         <div class="testim-cover"> -->
            <div class="wrap">

                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                     <li class="dot"></li>
                      <li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">
                    
                    <div class="active">
                        <!--<div class="img"><img src="" alt=""></div>-->
                        
                        <p>"I've been a mechanic for years and when I thought about moving to Australia from Manila (Philippines), I had no clue where to start. That's when I found Skill Assessment Services Australia. They were like my personal guide, helping me with my resume and evidence. The process was smooth, and I couldn't be more grateful. Top-notch service, I'd recommend them to anyone!"</p>                    
                        <h2>Raul Junior</h2>
                    </div>

                    <div>
                        <!--<div class="img"><img src="" alt=""></div>-->
                       
                        <p>"I'm an IT guy from Kolkata. My wife got a placement in university and I came on a spouse visa. I enquired about skill assessment so that I could apply for work in my field in Australia. Skill Assessment Services Australia were the professionals I needed. They put together a great report, showing off my tech skills and achievements. Now, I'm working in Australia, and I owe a huge thanks to their team.</p>                    
                        <h2>Surab</h2>
                    </div>

                    <div>
                        <!--<div class="img"><img src="" alt=""></div>-->
                        
                        <p>"As a chef from Brazil, I can handle the heat in the kitchen but the thought of the TRA skills assessment process had me sweating. Skill Assessment Services Australia stepped in and took care of everything. They didn't miss a beat, they even helped me with additional training where I needed it. I can honestly say, I wouldn't be working in Australia without their help."</p>                    
                       <h2>Christina</h2>
                    </div>

                    <div>
                        <!--<div class="img"><img src="" alt=""></div>-->
                        
                        <p>"I've always loved my work in childcare, and moving to Australia was a big step. Skill Assessment Services Australia made me feel like I didn't have to stress. They were thorough with my report and presented my skills professionally. They were my guiding light through the process. Now, I'm settled and loving my work here, all thanks to them."</p>                    
                       <h2>Gurpreet</h2>
                    </div>

                    <div>
                        <!--<div class="img"><img src="" alt=""></div>-->
                        
                        <p>"As a metal fabricator, translating my skills into a report was daunting. But Skill Assessment Services Australia supported me all the way. They created a detailed report that highlighted my skills. The service they offer is way above others. You can tell they really care about your career growth. I can't recommend them enough."</p>                    
                       <h2>Arthur</h2>
                    </div>
                        <div>
                        <!--<div class="img"><img src="" alt=""></div>-->
                        
                        <p>"As a construction worker from Kenya, moving to Australia felt very overwhelming. But with Skill Assessment Services Australia, the way they explained the process and guided me every step of the way really impressed me. They guided me through the TRA process, ensuring I ticked all the boxes. Their service was first-class all the way." </p>                    
                       <h2>Barika</h2>
                    </div>
                                            <div>
                        <!--<div class="img"><img src="" alt=""></div>-->
                        
                        <p>"Being an engineer from Pakistan, I knew that getting my skills assessed was key to my future in Australia. Skill Assessment Services Australia was the expert help I needed. They didn't just help me craft a perfect report, they also guided me in writing my career episodes and summary statements. They really know their stuff. If you're an engineer looking to work in Australia, these are the guys you want on your side." </p>                    
                       <h2>Arham</h2>
                    </div>

                </div>

            </div>

    </section>


      </div>
      </div>
      </div>
         </div>
    </section>

<script src="https://use.fontawesome.com/1744f3f671.js"></script>
  <!--testimonial script-->
    <script>
    // vars
'use strict'
var	testim = document.getElementById("testim"),
		testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
		touchStartPos,
		touchEndPos,
		touchPosDiff,
		ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
		
		testim.addEventListener("touchstart", function(e) {
				touchStartPos = e.changedTouches[0].clientX;
		})
	
		testim.addEventListener("touchend", function(e) {
				touchEndPos = e.changedTouches[0].clientX;
			
				touchPosDiff = touchStartPos - touchEndPos;
			
				console.log(touchPosDiff);
				console.log(touchStartPos);	
				console.log(touchEndPos);	

			
				if (touchPosDiff > 0 + ignoreTouch) {
						testimLeftArrow.click();
				} else if (touchPosDiff < 0 - ignoreTouch) {
						testimRightArrow.click();
				} else {
					return;
				}
			
		})
}
    
  </script>  
         
       </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary colorbtn" data-bs-dismiss="modal">Close</button>
 
      </div>
    </div>
  </div>
</div>

<!--testimonial end-->

<!-- Modal -->
<div class="modal fade" id="staticBackdroppss" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
               <div class="contact-us-form">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row design">
                    <h3>Contact Us</h3>
                    <p>We will get back to you soon</p>
                    <div class="col-lg-6">
                    <form action="admin/inc/process.php?action=contactus" method = "post">
                    <input type="text" class="form-control" name="firstname" placeholder="First Name" id="first_name">
                    
                    </div>
                    <div class="col-lg-6">
                   
                    <input type="text" class="form-control" name="lastname"  placeholder="Last Name" id="last_name">
                    
                    </div>
                    <div class="col-lg-6">
                   
                    <input type="text" class="form-control"  name="email" placeholder="Email" id="Email">
                   
                    </div>
                     <div class="col-lg-6">
                   
                    <input type="number" class="form-control"  name="phone" placeholder="Phone Number" id="Email">
                    
                    </div>
<div class="py-2">
                    <div class="d-flex align-items-center gap-2 contact-inp">
                       <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1" class="m-0">Are you enquiring about an Australian skill opportunity? <a href="#" class="eligibility-anc" type="button"  href="" data-bs-toggle="modal" data-bs-target="#staticBackdropseeee"class="btn-close" data-bs-dismiss="modal" aria-label="Close"> Check your eligibility</a></label>
                    </div>
                    <div class="d-flex align-items-center gap-2 contact-inp">
                       <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1" class="m-0"> Are you enquiring about a Skill Assessment for Australia? <a href="#" class="eligibility-anc" type="button"  href="" data-bs-toggle="modal" data-bs-target="#staticBackdropseeee"class="btn-close" data-bs-dismiss="modal" aria-label="Close"> Check your eligibility</a></label>
                    </div>
                    <div class="d-flex align-items-center gap-2 contact-inp">
                       <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1" class="m-0">Do you want to work in Australia? <a href="#" class="eligibility-anc" type="button"  href="" data-bs-toggle="modal" data-bs-target="#staticBackdropseeee"class="btn-close" data-bs-dismiss="modal" aria-label="Close"> Check your eligibility</a></label>
                    </div>
                    <div class="d-flex align-items-center gap-2 contact-inp">
                       <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1" class="m-0">Do you want to apply for skill employment in Australia? <a href="#" class="eligibility-anc" type="button"  href="" data-bs-toggle="modal" data-bs-target="#staticBackdropseeee"class="btn-close" data-bs-dismiss="modal" aria-label="Close"> Check your eligibility</a></label>
                    </div>
 </div>
                    <div class="col-lg-12">
                   
                    <textarea class="form-control m-0" rows="3"  name="messages" id="message" Placeholder="Message"></textarea>
                   
                    </div>
                    </div>
                    <button type="submit" class="send-button" >Send</button>
                </div>
                 </form>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--contact-->
              
              
          </div>
      </section>
          
      <!--multi-step-form-->
     
  <!--multi-step-form-->
  <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Pay";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("inputs");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<!--radio button field enable disable script -->

<script>
function disableGroup(groupName) {
  var groupRadios = document.querySelectorAll('input[type="radio"][name="' + groupName + '"]');
  var otherGroupName = groupName === 'ielts' ? 'pte' : 'ielts';
  var otherGroupRadios = document.querySelectorAll('input[type="radio"][name="' + otherGroupName + '"]');

  for (var i = 0; i < groupRadios.length; i++) {
    groupRadios[i].disabled = false;
  }

  for (var i = 0; i < otherGroupRadios.length; i++) {
    otherGroupRadios[i].disabled = true;
  }
}
</script>

<!--alert message -->
  <script type="text/javascript">
        setTimeout(function () {
  
            // Closing the alert
            $('#alert').alert('close');
        }, 3000);
    </script>
    
  

   </body>
</html>
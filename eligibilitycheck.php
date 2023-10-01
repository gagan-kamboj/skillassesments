 <?php
include('inc/header.php');
 session_start();
?>
 
 <style>
/* .tab {*/
/*    padding-left: 100px;*/
/*}*/
/* button#nextBtn {*/
    /* padding-right: 42px; */
/*    margin-right: 38px;*/
/*}*/
 </style>
 
 
 <div class="container">
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
                            <h4><span>1.</span>  What is your age? <small>(over 44 is not eligible)</small> </h4>
                           </div>
                           
                             <select name="age" id="ages" class="field-select">
                               <option value="18 - 20">18 - 20</option>
                               <option value="21 - 30">21 - 30</option>
                               <option value="21 - 30">31 - 44</option>
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
                           <input class="form-check-input" type="radio" id="pte1" name="pte" value="4" onclick="disableGroup('pte')">
                           <label class="form-check-label">23</label>
                           </div>
                            <div class="form-check">
                           <input class="form-check-input" type="radio" id="pte1" name="pte" value="4" onclick="disableGroup('pte')">
                           <label class="form-check-label">29</label>
                           </div>
                            <div class="form-check">
                           <input class="form-check-input" type="radio" id="pte1" name="pte" value="4" onclick="disableGroup('pte')">
                           <label class="form-check-label">36</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="pte1" name="pte" value="4" onclick="disableGroup('pte')">
                           <label class="form-check-label">46</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="pte1" name="pte" value="4" onclick="disableGroup('pte')">
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
                           <div class="tab"><div class="EMPLOYMENT-REQUIREMENTS s"><h5>STEP 3–<span class="employee">VIEW RESULTS</span></h5></div>
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
                          </div>
                            <?php   include('inc/footer.php'); ?>
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
                          
                          
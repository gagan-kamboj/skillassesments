<style>
  .paypal-button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  background-color: #f7be38;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.paypal-logo {
  display: inline-block;
  vertical-align: middle;
  width: 39px;
  height: 26px;
  margin-right: 5px;
  background-image: url('assets/images/paypal-logo.jpg');
  background-size: cover;
}

.paypal-text {
  display: inline-block;
  vertical-align: middle;
  color:#002f83;
}
.paypals-text {
  display: inline-block;
  vertical-align: middle;
  color:#026dd9;
}
.paypal-button:hover {
  background-color: #f7be38;
}

.paypal-button:disabled {
  opacity: 0.5;
  cursor: not-allowed;
}

/* Responsive styling */
@media (max-width: 768px) {
  .paypal-button {
    padding: 8px 16px;
    font-size: 14px;
  }
}

</style>
<?php
//  ini_set('display_errors', 1);
//  ini_set('display_startup_errors', 1);
//  error_reporting(E_ALL);
include('inc/header.php');
include('admin/inc/function.php');
$obj = new skillassesment();
$email = $_GET['email'];
$name = $_GET['name'];
require_once('vendor/autoload.php'); // Include the Stripe PHP library
//Set your Stripe API live keys
//$stripeSecretKey = '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';
//$stripePublicKey = 'pk_live_51MWDCxJi1p9cvOz5jqDmru7iJF2iXPrtukLTEeuvyR3FataxcoQHP8gnwOOu2OBvBZpcumgJBGYiTcT8sTBQJuFl00DUItARfC';

//Set your Stripe API Test keys
  $stripeSecretKey = 'sk_test_51MRt12K8zEoFkAoMQpXttUhaaUoHGk1l23yN14rRlIc6j1XFHBAcaQgv3u0GuWSFBhpGrzUoaWrDrlkFAY2yvqMk00c706cU8B';
  $stripePublicKey = 'pk_test_51MRt12K8zEoFkAoMJRn27caIbe2fAKTHVcWykRNuFmBmOmRyxnzCs5MUmmiebGj8afVnawJVWJ55RqKxynJ1HB4F005yXZCL6r';




\Stripe\Stripe::setApiKey($stripeSecretKey);

// Database configuration
$dbHost = 'localhost';
$dbUsername = 'vinikuma_skills';
$dbPassword = 'gsyu][!!V#?(';
$dbName = 'vinikuma_skillassessments';

// Establish a database connection
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

// Process payment
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['stripeToken'];
    $amount = 2000; // Amount in cents (e.g., $10.00)

    try {
        $charge = \Stripe\Charge::create([
            'amount' => $amount,
            'currency' => 'aud',
            'description' => 'Eligibility: Skill Assessment Australia',
            'source' => $token,
        ]);

        // Store payment details in the database
        $sql = "INSERT INTO payments (email, amount, status, token) VALUES ('$email','$amount', 'paid', '$token')";
        if ($connection->query($sql) === true) {
            
            $email = $_GET['email'];
            
            
            
$getegdata = $obj->GetEligibilityByEmail($email);

$payment = $obj->GetPaymentdataByEmail($email);

// Success Email to admin and user
$usereligibilityemail = $obj->GeteligibilitydataByEmail($email);
         $to = $email;
          
           	$subject = 'Congratutlations! Payment Successfull';

          

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'."info@skills-assessment-australia.au". "\r\n";


 $message .= ' 
         <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          
         <tbody>

             <td align="center">
               <table class="col-600" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin:0; width: 100%;">
                 <tbody>
                   <tr>
                     <td align="center" style="border: 1px solid #e5e5e5;;">
                       <table class="col-600" width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style=" border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
                         <tbody>
                           <tr>
                             <td align="right">
                               <table width="287" border="0" align="left" cellpadding="0" cellspacing="0" class="col2" style="">
                                 <tbody>
                                   <tr>
                                     <td align="center">
                                       <table class="insider" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                         </td>
                                         </tr>
                                         </tbody>
                                       </table>
                                     </td>
                                   </tr>
                                 </tbody>
                               </table>
                             </td>
                           </tr>
                          
                          
                  <section class="middle_section" style="">
                         <div class="" style="padding:20px 0;">
   <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8">
     <tr>
       <td>
         <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
           <tr>
             <td style="">&nbsp;</td>
           </tr>
           <tr>
             <td style="text-align:center;">
               <a href="" title="logo" target="_blank">
                 <img width="40%" src="https://skills-assessment-australia.au/assets/images/home-logo-png.png" title="logo" alt="logo">
               </a>
             </td>
           </tr>
           <tr>
             <td style="height:20px;">&nbsp;</td>
           </tr>
           <tr>
             <td>
               <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="max-width:670px;background:#fff; border-radius:3px; text-align:left;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                 <tr>
                   <td style="height:40px;">&nbsp;</td>
                 </tr>
                 <tr>
                   <td style="padding:0 35px;">
                     <h1 style="color:#063e5d; font-weight:500; margin:0;font-size:32px; text-align:center;">'.$title  .'
                      <span style="display:block; margin-left:auto; margin-right:auto; margin-top:19px; margin-bottom:30px; border-bottom:1px solid #cecece; width:100px;"></span>
                     </h1>
                 
                     <p style="color:#455056; font-size:17px;line-height:24px; margin:0;font-weight:500;">Hi '.$usereligibilityemail['name'].' </p>
                     <br/>
                     <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
   
                      
                     </p><br>

                   </td>
                 </tr>
                 <tr>
                   <td style="text-align:center;">
                         <p> Employement Information : '.$usereligibilityemail['employment_information'].' </p>
                         <p> Statement Service : '.$usereligibilityemail['statements_service'].' </p>
                         <p> Pay Evidence : '.$usereligibilityemail['pay_evidence'].' </p>
                         <p> Age : '.$usereligibilityemail['age'].' </p>
                         <p> Ielts : '.$usereligibilityemail['ielts'].' </p>
                         <p> Fluent English : '.$usereligibilityemail['fluent_english'].' </p>
                         <p> Education level : '.$usereligibilityemail['education_level'].' </p>
                         <p> Qualification Acquired : '.$usereligibilityemail['qualification_acquired'].' </p>
                         <p> Australia Worked : '.$usereligibilityemail['australia_worked'].' </p>
                         <p> Valid Passport : '.$usereligibilityemail['valid_passport'].' </p>
                         <p> Birth : '.$usereligibilityemail['birth'].' </p>
                         <p> Name : '.$usereligibilityemail['name'].' </p>
                         <p> Email : '.$usereligibilityemail['email'].' </p>
                         <p> Number : '.$usereligibilityemail['number'].' </p>
                        
                        
                   </td>
                 </tr>
                 <tr>
                   <td style="height:40px;">&nbsp;</td>
                 </tr>
               </table>
             </td>
           <tr>
             <td style="height:20px;">&nbsp;</td>
           </tr>
           <tr>
             <td style="text-align:center;">
              </td>
           </tr>
           <tr>
             <td style="">&nbsp;</td>
           </tr>
         </table>
       </td>
     </tr>
   </table>
   
   
                         </div>
                         </div>
                       </section>
   
      
                        <tr>
                          <td align="center">
                            <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style=" border-left: 1px solid #dbd9d9; border-right: 1px solid #dbd9d9;">
                              <tbody>
                                <tr>
                                  <td align="center" bgcolor="#34495e" background=" " height="185">
                                  
                                    <table class="col-600" width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td align="center" style="font-family: Raleway,  sans-serif; font-size:22px; font-weight: 500; color:#858585;">Follow US</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>
                                    
                                    <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr style="justify-content:center;width: 60%; ;margin: 0 auto;padding: 31px;">
                                   
                                        </tr>
                                      </tbody>
                                    </table>
                                    <br>
                                    <br>
                                    <table class="col-600" width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td align="center" style="font-family: Raleway,  sans-serif; font-size:12px; font-weight: 500; color:#858585;"> If you would like to unsubscribe. <a href="#">click here</a></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                   
               
                 </tbody>
               </table>
   
        ';
  $headers .= 'Cc:'. 'jaspreetsingh9088@gmail.com' . "\r\n";
 $mailto = mail($to,$subject,$message,$headers);
 


// EMail end 
//print_r($getegdata);

$age = $getegdata['age']; // Example age value
$ieltsBand = $getegdata['ielts']; // Example IELTS band score
$pteScore = $getegdata['pte']; // Example PTE score

 if($payment['status'] == 'paid') {
if (($age >= 18 && $age <= 20) || ($age >= 21 && $age <= 30) || ($age >= 31 && $age <= 44)) {
  if (($ieltsBand == 5.5 || $ieltsBand == 6) || ($pteScore == 36 || $pteScore == 46 || $pteScore == 56)) {
      
      
       
   echo  $message = '<section class="my-4">
   <form action="admin/inc/process.php?action=AfterCheck" method="post"enctype="multipart/form-data">
               <div class="payment_success text-center" style=" box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;padding: 40px;">
                   <svg xmlns="http://www.w3.org/2000/svg" style="width: 16%;color: #00b050;padding-bottom: 11px;"  class="tick-circl" viewBox="0 0 24 24"> <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M12 20C7.59 20 4 16.41 4 12S7.59 4 12 4 20 7.59 20 12 16.41 20 12 20M16.59 7.58L10 14.17L7.41 11.59L6 13L10 17L18 9L16.59 7.58Z" /></svg>
               <input type="hidden" name="email" value='.$email.'>
                 <input type="hidden" name="type" value="areeligible">
               <p style="padding-bottom:14px;">CONGRATULATIONS! <br><span style="color:cornflowerblue;">YOU ARE ELIGIBLE </span>  <br>
<br><div style="display: flex;gap: 6px; align-items: center;font-weight: 500;" class="inp_text">
<div class="upload-resume">Upload your comprehensive CV/resume to ascertain your Skill Assesment Eligibility <input type="file" name="file"></div>
               <div class="tick-class">
               <input  type="checkbox" style="width:10%; position:relative; bottom:11px;height:26px" name="tick" class="checks" id="" value="yes" id="checkboxresult" required> <span style="color:red;margin-bottom: 23px;font-weight: 700;">tick</span><i class="fa fa-check" style="font-size:15px;color:red;margin-bottom: 20px;"></i>
              
              I would like more information on which Visa is applicable to me, the requirements, processes, and fees..</div></p>
               <button style="margin-top:15px; border-radius:8px; background:#004d8e; color:#fff;" type="submit" id="submit" value="submit">Submit</button>
               </div>
               </div>
               </form>
           </section>';
  } else {
       echo  $message = '<section class="my-4">
        <form action="admin/inc/process.php?action=AfterCheck" method="post">
               <div class="payment_success text-center" style=" box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;padding: 40px;">
                   <svg xmlns="http://www.w3.org/2000/svg" style="width: 16%;color: #00b050;padding-bottom: 11px;"  class="tick-circl" viewBox="0 0 24 24"> <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M12 20C7.59 20 4 16.41 4 12S7.59 4 12 4 20 7.59 20 12 16.41 20 12 20M16.59 7.58L10 14.17L7.41 11.59L6 13L10 17L18 9L16.59 7.58Z" /></svg>
               <input type="hidden" name="email" value='.$email.'>
               <input type="hidden" name="type" value="couldbeeligible">
              <p  style="padding-bottom:14px;color:cornflowerblue;">YOU COULD BE ELIGIBLE <br><div style="display: flex;gap: 6px; align-items: center;font-weight: 500;" class="inp_text"> 
              <input id="myCheckbox" style="width:10%; position:relative; bottom:11px;height:26px"  type="checkbox" name="tick" value="yes" class="checks" id="checkboxresult" required> <span style="color:red;margin-bottom: 23px;font-weight: 700;">tick</span><i class="fa fa-check" style="font-size:15px;color:red;margin-bottom: 20px;"></i>
              I would like more information on how I can be eligible to WORK in Australia, which Visa is applicable to me, the requirements, processes and fees.
              </div></p>
               <button style="margin-top:15px; border-radius:8px; background:#004d8e; color:#fff;" type="submit" id="submit" value="submit">Submit</button>
               </div>
               </form>
           </section>';
   
  }
} else {
     echo  $message = '<section class="my-4">
               <div class="payment_success text-center" style=" box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;padding: 40px;">
                   <svg xmlns="http://www.w3.org/2000/svg" style="width: 16%;color: #00b050;padding-bottom: 11px;"  class="tick-circl" viewBox="0 0 24 24"> <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M12 20C7.59 20 4 16.41 4 12S7.59 4 12 4 20 7.59 20 12 16.41 20 12 20M16.59 7.58L10 14.17L7.41 11.59L6 13L10 17L18 9L16.59 7.58Z" /></svg>
               <input type="hidden" name="email" value='.$email.'>
               <input type="hidden" name="type" value="couldbeeligible">
                <p style="padding-bottom:14px;color: cornflowerblue;">YOU COULD BE ELIGIBLE <br> <div style="display: flex;gap: 6px; align-items: center;font-weight: 500;" class="inp_text">
                <input style="width:10%; position:relative; bottom:11px;height:26px" type="checkbox" name="tick" value="yes" id="checkboxresult" required> <span style="color:red;margin-bottom: 23px;font-weight: 700;">tick</span><i class="fa fa-check" style="font-size:15px;color:red;margin-bottom: 20px;"></i>
                I would like more information on how I can be eligible to WORK in Australia, which Visa is applicable to me, the requirements, processes and fees.
                </div></p>
               </div>
           </section>';
     
}
}

            // header('location:paymentsuccess.php?email=' . $email);
            exit; // Exit the script after the redirect
        } else {
            echo 'Error: Unable to store payment details.';
        }
    } catch (\Stripe\Exception\CardException $e) {
        // Card was declined
        $error = $e->getMessage();
        echo 'Error: ' . $error;
    }
}


// Close the database connection
$connection->close();
?>
 
            
             <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <h4><span>1.</span>  Can you provide a Resume with all the employment information with the following details:</h4>
                           </div>
                           <div class="form-check-inputs">
                             <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1" name="employeeinfo" value="something" required>
                                <label class="form-check-label" for="check1">Company Name and Location</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check2" name="employeeinfo" value="something" required>
                                <label class="form-check-label" for="check1">Job Title</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check3" name="employeeinfo" value="something" required>
                                <label class="form-check-label" for="check1">Job start and end dates</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check4" name="employeeinfo" value="something" required>
                                <label class="form-check-label" for="check1">Job roles and responsibilities</label>
                              </div>
                             </p>
                           </div>
                           <div class="form-heading two">
                            <h4><span>2.</span>  Can you provide Statements of Service/Employment Letter for each period of employment that counts towards eligibility.</h4>
                           </div>
                            <div class="form-check-inputs">
                             <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check5" name="statementservice" value="something" required>
                                <label class="form-check-label" for="check1"><span>Minimum 3 years of full-time experience.</span> (2 years within the last 10 years and 1 year within the last 3 years):</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check6" name="statementservice" value="something" required>
                                <label class="form-check-label" for="check1">Must be on official business letterhead which includes business address and contact details</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check7" name="statementservice" value="something" required>
                                <label class="form-check-label" for="check1">Must include duration of employment, typical hours worked and type of employment (full-time/ part time / casual)</label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check8" name="statementservice" value="something" required>
                                <label class="form-check-label" for="check1">Must include a detailed description of the relevant tasks undertaken</label>
                              </div>
                             </p>
                                <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check9" name="statementservice" value="something" required>
                                <label class="form-check-label" for="check1">Must include the name, position, email address and signature of the person authorised to make the statement</label>
                              </div>
                             </p>
                           </div>
                            <div class="form-heading two three">
                            <h4><span>3.</span>  <strong>Employment Pay Evidence</strong> <span class="line-1">"(MUST have two (2) itemsper employer from the list belowand Evidence MUST support each period of employment that counts towards eligibility):</span></h4>
                           </div>
                           <div class="form-check-inputs">
                             <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check10" name="pay_slips" value="something" required>
                                <label class="form-check-label" for="check1">Pay slips – minimum of three (3) per year/period of employment <i>(Named/labelled per employer and in sequential order)</i></label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check11" name="pay_slips" value="something" required>
                                <label class="form-check-label" for="check1">Bank statement with the employer’s name and clearly showing income has been deposited <i>(Saved in sequential order)</i></label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check12" name="pay_slips" value="something" required>
                                <label class="form-check-label" for="check1">Superannuation documents citing the names of the applicant and employer<i>(if available)</i></label>
                              </div>
                             </p>
                              <p><div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check13" name="pay_slips" value="something" required>
                                <label class="form-check-label" for="check1">Official government tax records or documents which may include payment summaries or group certificates</label>
                              </div>
                             </p>
                           </div>
                           </div>
                           <div class="tab"><div class="EMPLOYMENT-REQUIREMENTS"><h5>STEP 2–<span class="employee">EMPLOYMENT REQUIREMENTS</span></h5></div>
                            <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>1.</span>  What is your age? </h4>
                           </div>
                          
                             <select name="age" id="ages" class="field-select">
                               <option value="age-1">18 - 20</option>
                               <option value="age-2">21 - 30</option>
                               <option value="age-3">31 - 44</option>
                               <option value="age-4">45 - 50</option>
                             </select>
                          
                           <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>2.</span>  What is your English ability? </h4>
                           </div>
                           <div class="row">
                               <div class="col-lg-6">
                           
                           <label for="ielts" class="PTE"><strong>IELTS score</strong></label>
                           <select name="ielts" id="ielts" class="field-select">
                             <option value="band-1">4</option>
                             <option value="band-2">4.5</option>
                             <option value="band-3">5</option>
                             <option value="band-5">5.5</option>
                             <option value="band-6">6</option>
                             <option value="band-7">Above 6</option>
                           </select>
                           
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="english" name="english" value="something">
                           <label class="form-check-label">I am fluent in English</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="basic" name="english" value="something">
                           <label class="form-check-label">I have basic English </label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="speak" name="english" value="something">
                           <label class="form-check-label">I don’t speak English</label>
                           </div>
                           </div>
                           <div class="col-lg-6">
                           
                           <label for="pte" class="PTE"><strong>PTE</strong></label>
                           <select name="pte" id="ielts" class="field-select">
                             <option value="numbr-1">23</option>
                             <option value="numbr-2">29</option>
                             <option value="numbr-3">36</option>
                             <option value="numbr-4">46</option>
                             <option value="numbr-4">56 Above</option>
                           </select>
                         
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
                           <input class="form-check-input" type="radio" id="yes" name="workinaus" value="something">
                           <label class="form-check-label">Yes</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="No" name="workinaus" value="something">
                           <label class="form-check-label">No</label>
                           </div>
                           </div>
                            <div class="form-heading two" style="margin-bottom:10px;">
                            <h4><span>6.</span>  Do you have a valid passport?</h4>
                           </div>
                           <div class="form-groupp">
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="yes" name="passport" value="something">
                           <label class="form-check-label">Yes</label>
                           </div>
                           <div class="form-check">
                           <input class="form-check-input" type="radio" id="No" name="passport" value="something">
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
                               <p>To view your WORK in Australia eligibility results pay the $20AUD processing fee</p>
                           </div>
                           <!--<div class="pay-now">-->
                           <!--    <button type="submit" class="button5">PAY NOW</button>-->
                           <!--</div>-->
                    
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
                    
           <section class="my-4">
               <div class="payment_success text-center">
                   <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M12 20C7.59 20 4 16.41 4 12S7.59 4 12 4 20 7.59 20 12 16.41 20 12 20M16.59 7.58L10 14.17L7.41 11.59L6 13L10 17L18 9L16.59 7.58Z" /></svg>-->
               
               <p>Great! you are almost there please click and pay to see the result</p>
               
               <br>
         <form action="" method="POST">
                           <script
            src="https://checkout.stripe.com/checkout.js"
            class="stripe-button"
            data-key="<?php echo $stripePublicKey; ?>"
            data-amount="2000"
            data-name="Skill Assessment Australia"
            data-description="Eligibility : Skill Assessment Australia"
            data-currency="aud"></script>
        </form>
        <br>
         <!--paypal payment gateway start-->
               
              
           <form action="paypal-integration/charge.php" method="post">
    <input type="hidden" name="amount" value="10.00" />
    <button class="paypal-button" name="submit" type="submit">
    <span class="paypal-logo"></span>
    <span class="paypal-text">Pay</span>
      <span class="paypals-text">PayPal</span>
  </button>
</form>

		 <!--paypal payment gateway end-->
        
        
               </div>
               
           </section>
            
           
         </div>
      </main>
      
      <!--footer-->
      <footer class="footer">
             <div class="footer_list">
                  <ul class="d-flex m-0 text-center">
                     <a href="#" type="button" class="becomeaffiliate" data-bs-toggle="modal" data-bs-target="#staticBackdropp"><li>Become an Affiliate</li></a>
                     <!-- Button trigger modal -->
<!--<button >-->
<!--  Launch static backdrop modal-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade" id="staticBackdropp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabell" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row gap-5 justify-content-center">
          
       <form class="col-md-5 text-start pop_up_form p-4" action="admin/inc/process.php?action=register" method="post">
           <h4 class="pb-4 form_heading fw-normal">Register a new affiliate account</h4>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id=" " name="name" aria-describedby="emailHelp">
      <input type="hidden" class="form-control" id=" " name="referrby" value="<?=$_SESSION['ReferralCode'];?>">
   </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Username (required)</label>
    <input type="text" class="form-control" name="username" id=" ">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Account Email (required)</label>
    <input type="email" class="form-control" name="email" id=" ">
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id=" ">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Retype Password</label>
    <input type="password" class="form-control" name="password" id=" ">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">How will you promote us (required)</label>
    <textarea type="text" name="messages" rows="4" class="form-control" id=" "></textarea>
  </div>
  <button type="submit" class="btn_reg_login">Register</button>
</form>





       <form class="col-md-5 text-start pop_up_form p-4" action="admin/inc/process.php?action=UserLogin" method="post">
           <h4 class="pb-4 form_heading fw-normal">Log into your account</h4>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id=" " name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id=" " name="password">
  </div>
 
  <!--<div class="d-flex align-items-center my-3">-->
  <!--  <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
  <!--  <label class="form-check-label mb-0" for="exampleCheck1">Remember Me</label>-->
  <!--</div>-->
  <button type="submit" class="btn_reg_login">LOG IN</button>
  <div class="my-3 forgot_password_wrap"><a href="#" class="">Lost your password?</a></div>
</form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         
      </div>
    </div>
  </div>
</div>
                     <a href="#"><li><p type="button" class="btn_title_main_wrap" data-bs-toggle="modal" data-bs-target="#exampleModals">General Conditions</p></li></a>
                     <a href="#"><li><p type="button" class="btn_title_main_wrap" data-bs-toggle="modal" data-bs-target="#exampleModalss">Privacy Statement</p></li></a>
                     <a href="#"><li><p type="button" class="contact-us" data-bs-toggle="modal" data-bs-target="#staticBackdroppss">Contact Us</p></li></a>
                    
                  </ul>
               </div>
               
      </footer>
      
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
                      <h1 class="text-center">Conditions of Use for Skill Assessment Services Australia</h1>
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
                      <h1 class="text-center">Privacy Statement for Skill Assessment Services Australia</h1>
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

<!--<button type="button" class="contact-us" data-bs-toggle="modal" data-bs-target="#staticBackdroppss">-->
<!--  Contact Us-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade" id="staticBackdroppss" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
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
                    <div class="col-lg-12">
                   
                    <textarea class="form-control" rows="3"  name="messages" id="message" Placeholder="Message"></textarea>
                   
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
      <!--multi-step-form-->
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
    document.getElementById("nextBtn").innerHTML = "Submit";
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
  y = x[currentTab].getElementsByTagName("input");
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
<!--multi-step-form end-->

<!--checkbox button disable script-->
 
 

   </body>
</html>
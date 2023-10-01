<?php
session_start();

session_unset();
include('admin/inc/function.php'); 

$obj = new skillassesment();
$referral_code = $_GET['code'];
$ActivationCode = $obj->UpdateStatusByactivationcode($referral_code);
$userinfo = $obj->GetUSerByReffralCode($referral_code);
$email = $userinfo['email'];
// $password = $userinfo['password'];

     if ($ActivationCode){
          
          $subject = "You Referral Code is Generated Successfully";
   $to = $email;
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   
   // More headers
   $headers .= 'From:info@skills-assessment-australia.au'. "\r\n";
   // $message .= 'Welcome  <b>'. $username. '</b><br>'. "\r\n";
   // $message .= 'Thanking you for joining us. '. "\r\n\r\n\r\n";
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
                     <h1 style="color:#063e5d; font-weight:500; margin:0;font-size:32px; text-align:center;"> Congratulations.
                      <span style="display:block; margin-left:auto; margin-right:auto; margin-top:19px; margin-bottom:30px; border-bottom:1px solid #cecece; width:100px;"></span>
                     </h1>
                 <p> You are now successfully registered with us</p>
               <p>  Following are your credentials  </p>
                     <p style="color:#455056; font-size:17px;line-height:24px; margin:0;font-weight:500;">Hi '.$username.'</p>
                     <br/>
                     <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
   
  
                     </p><br>
                   </td>
                 </tr>
                 <tr>
                   <td style="text-align:center;"> 
                   <p> '.$email.'</p>
                    
                   
                   
                     <b><a href="https://skills-assessment-australia.au/?ref='. $referral_code .'" style="background:#ffa350;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;text-align:center;">Confirm Email Address</a></b>
                      
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
                                  <td align="center" bgcolor="#34495e" background="" height="185">
                                  
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
                                        
                                      </tbody>
                                    </table>
                                    <br>
                                    <br>
                                    <table class="col-600" width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td align="center" style="font-family: Raleway,  sans-serif; font-size:12px; font-weight: 500; color:#858585;">  If you would like to unsubscribe. <a href="#">click here</a></td>
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
   
     $headers .= 'Cc:'. "\r\n";
    $mailto = mail($to,$subject,$message,$headers);
    }
    
    // session_destroy();
 $userinfoss = $obj->DirectUserLogin($email);
 
 if($userinfoss) {
     header('location:affiliate-area.php');
 }
	?>

                  
	<div class="container" style="padding-top:100px; padding-bottom:100px;">
	  
         <?php if(empty($ActivationCode)) { ?>
       <div class="alert alert-danger" role="alert" style="float: right; width: 44%;text-align: center; margin: 0 0 0 155px;">Not Activate</div>	        
         <?php  } else { ?>
           <div class="alert alert-success" role="alert" style="width: 50%;
    text-align: center;
    font-size: 30px;
    margin: 0 auto;
    font-family: sans-serif;
    padding: 92px;
    background: #fff;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">Account activated please <a style="" class="sign_in_active" href="index.php">sign in</a></div>
                 
          <?php  }  ?>
           </div>	            
	                  			                      			               
				

 
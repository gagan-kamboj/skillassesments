<?php
session_start();
include('admin/inc/function.php'); 
include('inc/header.php');

$obj = new skillassesment();
$userid = $_SESSION['UserID'];
// print_r($_SESSION);
$userdata = $obj->GetUserById($userid);
// print_r($userdata);

$referral_code = $userdata['referral_code'];
$Referralby = $obj->GetReferralByuserId($referral_code);
$referbyme = $obj->Getmyreffreala($referral_code);
$email = $referbyme['email'];
// print_r($referbyme);
$Referralbyemail = $obj->GetRefdatabyEmail($email,$referral_code);



?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="assets/images/skill-fav-icon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
li.nav-item.\31 {
    background: #017cc0;
    margin: 0 3px;
}
a.nav-link.\31 {
    color: white;
    font-size: 16px;
    font-weight: 400;
    font-family: poppins;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: var(--bs-nav-pills-link-active-color);
    background-color: #5eafdb;
    border-radius: 0;
}
.tab-data h3 {
    color: #444444;
    font-family: poppins;
    font-size: 24px;
}
.tab-data p {
    color: grey;
    margin-bottom: 8px;
    font-family: poppins;
    font-weight: 100;
}
table, th, td {
  border: 1px solid #eeeeee;
  border-collapse: collapse;
  padding:8px 15px;
}
tr.reference th {
    background: #fafafa;
    color: #666666;
    font-family: poppins;
    font-weight: 600;
        font-size: 15px;
}
input.form-control {
    padding: 13px;
    border-radius: 0;
    width: 40%;
    margin-top: 15px;
}
button.buton {
    background: none;
    padding: 8px 16px;
    border: 0;
    color: white;
    font-family: poppins;
}
/*h3.notify {*/
/*    margin-top: 20px;*/
/*}*/
.affliate-area h2 {
    padding-top: 96px !important;
}
img.skill-logo {
    position: absolute;
    width: 218px;
}
section.banner h2 {
    background: #ededed;
    text-align: center;
    color: #004d8e;
    padding: 56px;
    font-size: 43px;
}
@media (min-width:320px) and (max-width:767px) {
/*.table-responsive {*/
/*    display: block !important;*/
/*    width: 100% !important;*/
/*    overflow-x: auto !important;*/
/*    -webkit-overflow-scrolling: touch;*/
/*    -ms-overflow-style: -ms-autohiding-scrollbar;*/
/*}*/
ul.nav.nav-pills {
    display: block;
}
img.skill-logo {
    position: absolute;
    width: 180px;
}
section.banner h2 {
    background: #ededed;
    text-align: center;
    color: #004d8e;
    padding: 56px;
    font-size: 28px !important;
}
}
</style>
</head>

 
<body>
<section class="banner">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <a href="index.php"><img src="assets/images/home-logo-png.png" alt="home_nav_logo" class="skill-logo"></a>
        </div>
    </div>
    </div>
    <div class="affliate-area">
        <h2>Affiliate Area</h2>
    </div>
</section>
<div class="container mt-3" style="margin-top: 60px !important;">
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
    <li class="nav-item 1">
      <a class="nav-link active 1" data-bs-toggle="pill" href="#AffiliateURLs">Affiliate URL</a>
    </li>
    <li class="nav-item 1">
      <a class="nav-link 1" data-bs-toggle="pill" href="#Referrals">Referrals</a>
    </li>
    <li class="nav-item 1">
      <a class="nav-link 1" data-bs-toggle="pill" href="#Payouts">Payouts</a>
    </li>
    <!--<li class="nav-item 1">-->
    <!--  <a class="nav-link 1" data-bs-toggle="pill" href="#setting">Settings</a>-->
    <!--</li>-->
    <li class="nav-item 1">
      <a href="admin/inc/process.php?action=Logout"><button type="nav-link 1" class="buton">Logout</button></a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="AffiliateURLs" class="container tab-pane active"><br>
    <div class="tab-data">
      <h3>Affiliate URLs</h3>
      <p>Your affiliate ID is : <?=$userdata['referral_code'];?></p>
      <p>Your referral URL is : https://skills-assessment-australia.au/?ref=<?=$userdata['referral_code'];?></p>
      
        <p>Your Eligibility URL is : https://skills-assessment-australia.au/eligibilitycheck.php?ref=<?=$userdata['referral_code'];?></p>
      </div>
    </div>
    <div id="Referrals" class="container tab-pane fade"><br>
    <div class="tab-data">
      <h3>Referrals</h3>
      <table style="width:100%;margin-top: 18px;" class="table-responsive">
  <tr class="reference">
    <th>Reference</th>
    <th>Amount</th> 
     <th>Status</th>
  </tr>
  <?php while($row = mysqli_fetch_array($Referralbyemail)) { 
//   print_r($row);
  ?>
  
  <tr>
   
   <td style="color:#666666;"><?=$row['email'];?></td>
   <td  style="color:#666666;">$5AUD</td>
   <td  style="color:#666666;"><?php if($row['status'] == 'paid'){echo 'Converted';} else {echo 'Not Converted';}?></td>
  
  
  
  </tr>
  <?php } ?>
</table>
</div>
    </div>
    <div id="Payouts" class="container tab-pane fade"><br>
    <div class="tab-data">
      <h3>Payouts</h3>
      <table style="width:100%;margin-top: 18px;">
  <tr class="reference">
    <th>Date</th>
    <th>Amount</th> 
    <th>Payout Method</th>
    <th>Status</th>
  </tr>
  <tr>
    <td colspan="5" style="color:#666666;">None of your referrals have been paid out yet.</td>

  </tr>
</table>
</div>
    </div>
  <!--  <div id="setting" class="container tab-pane fade"><br>-->
  <!--  <div class="tab-data">-->
  <!--  <h3>Profile Settings</h3>-->
  <!--  <p>Your Payment Email</p>-->
  <!--  <div>-->
  <!--      <input type="text" class="form-control" placeholder="" name="email">-->
  <!--  </div>-->
  <!--  </div>-->
    
  <!--</div>-->
</div>
</body>
</html>


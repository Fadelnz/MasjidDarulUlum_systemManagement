<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Notification</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Notification.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/MDUMS.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Notification">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <header class=" u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-header u-section-row-container" id="sec-d764" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" style="">
    <div class="u-section-rows">
        <div class="u-section-row" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-5694">
          <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
            <a href="index.php" class="u-align-left u-image u-logo u-image-1" data-image-width="950" data-image-height="960">
              <img src="images/MDUMS.png" class="u-logo-image u-logo-image-1">
            </a>
            <p class="u-align-center u-text u-text-default u-text-1">MASJID DARUL ULUM&nbsp;</p>
            <a href="Login-NEW.php" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-hover-grey-10 u-radius u-white u-btn-1">Logout</a>
          </div>
        </div>
    </div>
</header>
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-30c9">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-custom-color-1 u-group u-radius u-shape-round u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-out="0">
          <div class="u-container-layout u-container-layout-1">
            <p class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Notifikasi</p>
              <span class="u-file-icon u-icon u-text-white u-icon-1"><a href="Admin-Dashboard.html"><img src="images/318477-94b8fb9f.png" alt="back"></a>
            </span>
            
            <div class="custom-expanded u-align-center u-list u-list-1">
              <div class="u-repeater u-repeater-1">
              <?php
                      include('config.php');
                      $query=mysqli_query($conn,"SELECT * FROM expense WHERE Expense_status = 'pending' ORDER BY Expense_Date DESC");
                      while($row=mysqli_fetch_array($query)){
                  ?>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                    <div class="u-container-style u-grey-10 u-group u-radius u-shape-round u-group-2">
                      <div class="u-container-layout u-container-layout-3">
                        <p class="u-align-center u-custom-font u-font-roboto-condensed u-text u-text-default u-text-2">
                        <span class="u-file-icon u-icon u-icon-2"><img src="images/cash-voucher.png" title="New Cash Voucher"></span>  
                        <?php echo $row['Expense_description']; ?></p>
                        <span class="u-file-icon u-icon u-icon-2">
                        <a href="Delete_CashVoucher_admin.php?expense_id=<?php echo $row['Expense_id'];?>">
                          <img src="images/542724.png" alt="Reject">
                        </a>
                        </span>
                        <a href="Accept_CashVoucher.php?notification_id=<?php echo $row['Expense_id'];?>" class="u-border-1 u-border-active-palette-2-base u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-font-roboto-condensed u-none u-text-black u-btn-1">Accept</a>
                        <p class="u-align-center u-custom-font u-font-roboto-condensed u-text u-text-default u-text-3"><?php echo $row['Expense_Date']; ?></p>
                      </div>
                    </div>
                  </div>
            </div>
              <?php
                  }
              ?>

              <?php
                      include('config.php');
                      $query=mysqli_query($conn,"SELECT * FROM permanentresident WHERE application_status = 'pending' ORDER BY application_date DESC");
                      while($row=mysqli_fetch_array($query)){
                ?>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                    <div class="u-container-style u-grey-10 u-group u-radius u-shape-round u-group-2">
                      <div class="u-container-layout u-container-layout-3">
                        <p class="u-align-center u-custom-font u-font-roboto-condensed u-text u-text-default u-text-2">
                        <span class="u-file-icon u-icon u-icon-2"><img src="images/resident.png" title="New Ahli Kariah"></span>
                        <?php echo $row['application_name']; ?></p>
                        <span class="u-file-icon u-icon u-icon-2">
                        <a href="Delete_PermanentResident.php?application_id=<?php echo $row['application_id'];?>"><img src="images/542724.png" alt="Reject"></a>
                        </span>
                        <a href="Accept_Application.php?application_id=<?php echo $row['application_id'];?>" class="u-border-1 u-border-active-palette-2-base u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-font-roboto-condensed u-none u-text-black u-btn-1">Accept</a>
                        <p class="u-align-center u-custom-font u-font-roboto-condensed u-text u-text-default u-text-3"><?php echo $row['application_date']; ?></p>
                      </div>
                    </div>
                  </div>
            </div>
              <?php
                  }
              ?>

                        
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="u-clearfix u-custom-color-1 u-footer u-footer" id="sec-13e0"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-align-left u-image u-image-contain u-image-default u-image-1" src="images/gwenchana-2.png" alt="" data-image-width="950" data-image-height="960">
        <p class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Copyright by Gwenchana Enterprise. All Rights Reserved</p>
      </div></footer>
  
</body></html>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Buku-Akaun</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Buku-Akaun.css" media="screen">
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
    <meta property="og:title" content="Buku-Akaun">
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
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-729e">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <div class="u-container-style u-custom-color-1 u-expanded-width-sm u-expanded-width-xs u-group u-radius u-shape-round u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-out="0">
          <div class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-container-layout-1">
            <span class="u-align-right u-file-icon u-hover-feature u-icon u-icon-circle u-text-custom-color-1 u-white u-icon-1">
            <img src="images/8140054-051392a0.png" alt=""></span>
            <span class="u-align-left u-file-icon u-icon u-text-white u-icon-2"><a href ="Treasurer-Dashboard.html"><img src="images/318477-94b8fb9f.png"></a></span>
            <p class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Total balance</p>

            <?php
            include('config.php');
            $query=mysqli_query($conn,"SELECT (SELECT SUM(Income_Amount) FROM income) - (SELECT SUM(Expense_Amount) FROM expense WHERE Expense_status='accepted' ) AS net_difference");
                while($row=mysqli_fetch_array($query)){
            ?>
                <h3 class="u-text u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">RM <?php echo $row['net_difference'];?></h3>
            <?php
            }
            ?>

            <div class="u-align-center u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-align-right u-file-icon u-icon u-icon-circle u-text-custom-color-1 u-white u-icon-3"><img src="images/626075-a76309f0.png" alt=""></span>
                    <p class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-default u-text-3">Income</p>
            <?php
            include('config.php');
            $query=mysqli_query($conn,"SELECT SUM(Income_Amount) AS income FROM income");
                while($row=mysqli_fetch_array($query)){
            ?>
                <h3 class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">RM <?php echo $row['income'];?></h3>
            <?php
            }
            ?>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-align-right u-file-icon u-icon u-icon-circle u-text-custom-color-4 u-white u-icon-4"><img src="images/5548112-332f2d10.png" alt=""></span>
                    <p class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-default u-text-5">Expense</p>
            <?php
            include('config.php');
            $query=mysqli_query($conn,"SELECT SUM(Expense_Amount) AS expense FROM expense WHERE Expense_status='accepted'");
                while($row=mysqli_fetch_array($query)){
            ?>
                    <h3 class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">RM <?php echo $row['expense'];?></h3>
            <?php
            }
            ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <section class="u-clearfix u-container-align-center u-grey-10 u-section-2" id="sec-bd34">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-custom-color-1 u-group u-radius u-shape-round u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-out="0">
          <div class="u-container-layout u-container-layout-1">
            <p class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Transaction History</p>
            <span class="u-align-right u-file-icon u-hover-feature u-icon u-text-white u-icon-1"><a href = "Transaction_details.php"><img src="images/5345140-3971af4e.png" alt=""></a></span>
            <div class="custom-expanded u-align-center u-list u-list-1">
              <div class="u-repeater u-repeater-1">

            <?php
            include('config.php');
            $query=mysqli_query($conn,"SELECT Expense_Amount AS transaction_amount, Expense_id AS transaction_id, Expense_description AS transaction_desc, Expense_Date AS transaction_date, 'Expense' AS transaction_type FROM expense WHERE Expense_status = 'accepted' UNION ALL SELECT Income_Amount AS transaction_amount, Income_id AS transaction_id, Income_Description AS transaction_desc, Income_Date AS transaction_date, 'Income' AS transaction_type FROM income ORDER BY transaction_date DESC LIMIT 4;");
                while($row=mysqli_fetch_array($query)){
            ?>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                    <div class="u-container-align-center u-container-style u-grey-10 u-group u-radius u-shape-round u-group-2">
                      <div class="u-container-layout u-valign-middle u-container-layout-3">
                        <p class="u-align-center u-custom-font u-font-roboto-condensed u-text u-text-default u-text-2"><?php echo $row['transaction_date'];?></p>
                        <?php
                        if($row['transaction_type'] == "Expense"){
                        ?>
                            <p class="u-align-right u-custom-font u-font-roboto-condensed u-text u-text-3" style="color:red;">-RM <?php echo $row['transaction_amount'];?></p>
                        <?php
                        }else{
                        ?>
                            <p class="u-align-right u-custom-font u-font-roboto-condensed u-text u-text-3" style="color:green;">RM <?php echo $row['transaction_amount'];?></p>
                        <?php
                        }
                        ?>
                        <p class="u-align-center u-custom-font u-font-roboto-condensed u-text u-text-default u-text-4"><?php echo $row['transaction_desc'];?></p>
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
    <section class="u-clearfix u-container-align-center u-grey-10 u-section-3" id="sec-d447">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="custom-expanded u-align-center u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item u-list-item-1" data-animation-out="0">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <a href="Income.php" class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-font-roboto-condensed u-hover-grey-10 u-radius u-btn-1" data-animation-out="0">Add Cash Receipt</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-list-item-2" data-animation-out="0">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <a href="Expense.php" class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-custom-font u-font-roboto-condensed u-hover-grey-10 u-radius u-btn-2" data-animation-out="0">Add Cash Voucher</a>
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
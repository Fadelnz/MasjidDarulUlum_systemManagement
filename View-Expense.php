<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Form</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Form.css" media="screen">
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
    <meta property="og:title" content="Form">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en">
    <header class="u-section-row u-header" id="sec-d764" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-align-left u-image u-logo u-image-1" data-image-width="950" data-image-height="960">
          <img src="images/MDUMS.png" class="u-logo-image u-logo-image-1">
        </a>
        <p class="u-align-center u-text u-text-default u-text-1">MASJID DARUL ULUM&nbsp;</p>
        <a href="Login-NEW.php" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-hover-grey-10 u-radius u-white u-btn-1">LOGOUT</a>
      </div></header>
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-8f35">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-custom-color-1 u-group u-radius u-shape-round u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
          <div class="u-container-layout u-container-layout-1">
            <div class="custom-expanded u-container-style u-group u-group-2">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <div class="u-expanded-width u-list u-list-1">
                  <div class="u-repeater u-repeater-1">
                
                <?php
                    $expense_id = $_GET['transaction_id'];
                    include('config.php');
                    $query=mysqli_query($conn,"SELECT * FROM expense WHERE Expense_id = '$expense_id' ");
                    while($row=mysqli_fetch_array($query)){
                ?>

                  <form id = "click" action= "<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "POST">
                        
                  <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-5">
                        <p class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-3">ID</p>
                        <div class="u-shape u-shape-rectangle u-shape-2"><input type="text" name="description" placeholder="Description" value="<?php echo $row['Expense_id']; ?>" disabled></div>
                      </div>
                    </div>

                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-4">
                        <p class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-2">Type</p>
                        <div class="u-shape u-shape-rectangle u-shape-1">
                        <select name="type" placeholder="Expense type">
                        <option value="Rent">Rent</option>
                        <option value="Tax">Tax</option>
                        <option value="Utility">Utility</option>
                        <option value="Other">Other</option>
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-5">
                        <p class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-3">Description</p>
                        <div class="u-shape u-shape-rectangle u-shape-2"><input type="text" name="description" placeholder="Description" value="<?php echo $row['Expense_description']; ?>"></div>
                      </div>
                    </div>

                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-6">
                        <p class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-4">Paid to</p>
                        <div class="u-shape u-shape-rectangle u-shape-3"><input type="text" name="paid-to" placeholder="Paid to" value="<?php echo $row['Expense_To']; ?>"></div>
                      </div>
                    </div>

                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-7">
                        <p class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-5">Amount</p>
                        <div class="u-shape u-shape-rectangle u-shape-4"><input type="text" name="amount" placeholder="Amount" value="<?php echo $row['Expense_Amount']; ?>"></div>
                      </div>
                    </div>

                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-8">
                        <p class="u-align-left u-custom-font u-font-roboto-condensed u-text u-text-6">Date</p>
                        <div class="u-shape u-shape-rectangle u-shape-5"><input type="date" name="date" placeholder="Date" value="<?php echo $row['Expense_Date']; ?>"></div>
                      </div>
                    </div>

                  </div>
                </div>
                <?php
                    }
                ?>

                <div class="custom-expanded u-align-center u-list u-list-2">
                  <div class="u-repeater u-repeater-2">
                    <div class="u-container-style u-list-item u-repeater-item">
                      <div class="u-container-layout u-similar-container u-container-layout-9">
                      <button class="u-align-center u-border-none u-btn u-btn-round u-button-style u-hover-grey-10 u-radius u-text-custom-color-1 u-white u-btn-1" type="submit" name="update" form="click">UPDATE</button>
                      </div>
                    </form>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    include('config.php');
    ?>

    <?php
        if(isset($_POST['update'])){
            $type = $_POST['type'];
            $amount = $_POST['amount'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $to = $_POST['paid-to'];
            $sql = "UPDATE expense SET Expense_Type='$type',Expense_Amount='$amount',Expense_Date='$date',Expense_To='$to',Expense_description='$description' WHERE Expense_id='$expense_id'";
            
            if( mysqli_query($conn, $sql)){
                echo '<script>alert("Cash Voucher has been updated")</script>';
                echo "<script>window.location = 'Transaction_details.php'</script>";
            }else{
                echo '<script>alert("Error")</script>';
            }

        } 
    ?>
    
    
    
    <footer class="u-clearfix u-custom-color-1 u-footer u-footer" id="sec-13e0"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-align-left u-image u-image-contain u-image-default u-image-1" src="images/gwenchana-2.png" alt="" data-image-width="950" data-image-height="960">
        <p class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Copyright by Gwenchana Enterprise. All Rights Reserved</p>
      </div></footer>
  
</body></html>
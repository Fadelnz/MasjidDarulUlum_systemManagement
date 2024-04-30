<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Transaksi</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Ahli-Kariah.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i">
    
<script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/MDUMS.png",
		"sameAs": []
}
</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Ahli Kariah">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class=" u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-header u-section-row-container" id="sec-d764" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" style=""><div class="u-section-rows">
        <div class="u-section-row" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-5694">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="index.php" class="u-align-left u-image u-logo u-image-1" data-image-width="950" data-image-height="960">
              <img src="images/MDUMS.png" class="u-logo-image u-logo-image-1">
            </a>
            <p class="u-align-center u-text u-text-default u-text-1">MASJID DARUL ULUM&nbsp;</p>
            <a href="Login-NEW.php" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-hover-grey-10 u-radius u-white u-btn-1">Logout</a>
          </div>  
        </div>
            </div>
          </div> 
        </div>
      </div>
    </header>
    <section class="u-align-center u-clearfix u-grey-10 u-section-2" id="sec-2a53">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1">
          <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled" role="tablist">
<li class="u-tab-item" role="presentation">
  <a class="active u-active-custom-color-1 u-button-style u-custom-color-1 u-tab-link u-text-active-white u-text-white u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">ALL</a>
</li>
<li class="u-tab-item" role="presentation">
  <a class="u-active-custom-color-1 u-button-style u-custom-color-1 u-tab-link u-text-active-white u-text-white u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">CASH RECEIPT</a>
</li>
<li class="u-tab-item u-tab-item-3" role="presentation">
  <a class="u-active-custom-color-1 u-button-style u-custom-color-1 u-tab-link u-text-active-white u-text-white u-tab-link-3" id="tab-93fc" href="#link-tab-93fc" role="tab" aria-controls="link-tab-93fc" aria-selected="false">CASH VOUCHER</a>
</li>
</ul>
          <div class="u-tab-content">
            <div class="u-container-align-center u-container-style u-shape-rectangle u-tab-active u-tab-pane u-white" id="tab-0da5" role="tabpanel" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
            <form id="search" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
              <input type="text" name="search-button" placeholder="Search by Description">
              <button type= "submit" name="search">Search</button>
            </form>
            <div class="u-expanded-width u-table u-table-responsive u-table-1">

                  <table class="u-table-entity">
                    <colgroup>
                      <col width="15%">
                      <col width="15%">
                      <col width="30%">
                      <col width="10%">
                      <col width="30%">
                    </colgroup>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                    <tr style="height: 30px;">
                        <td class="u-table-cell">Transaction ID</td>
                        <td class="u-table-cell">Transaction Type</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Date</td>
                        <td class="u-table-cell">Action</td>
                      </tr>
                
                    <?php
					include('config.php');
					$query=mysqli_query($conn,"SELECT Expense_id AS transaction_id, Expense_description AS transaction_desc, Expense_Date AS transaction_date, 'Expense' AS transaction_type
                    FROM expense WHERE Expense_status = 'accepted'
                    UNION ALL
                    SELECT Income_id AS transaction_id, Income_Description AS transaction_desc, Income_Date AS transaction_date, 'Income' AS transaction_type
                    FROM income
                    ORDER BY transaction_date DESC;");

          if(isset($_POST['search'])){
            $search = $_POST['search-button'];
            $query=mysqli_query($conn,"SELECT Expense_id AS transaction_id, Expense_description AS transaction_desc, Expense_Date AS transaction_date, 'Expense' AS transaction_type
            FROM expense 
            WHERE Expense_status = 'accepted' AND (Expense_description LIKE '%$search%' OR Expense_Date LIKE '%$search%')
            UNION ALL
            SELECT Income_id AS transaction_id, Income_Description AS transaction_desc, Income_Date AS transaction_date, 'Income' AS transaction_type
            FROM income
            WHERE Income_Description LIKE '%$search%' OR Income_Date LIKE '%$search%'
            ORDER BY transaction_date DESC");
          }

					while($row=mysqli_fetch_array($query)){
						?>
						<tr style="height: 51px;">
							<td class="u-table-cell"><?php echo $row['transaction_id']; ?></td>
              <td class="u-table-cell"><?php echo $row['transaction_type']; ?></td>
							<td class="u-table-cell"><?php echo $row['transaction_desc']; ?></td>
              <td class="u-table-cell"><?php echo $row['transaction_date']; ?></td>
              <td class="u-table-cell">
            <?php
              if($row['transaction_type'] == 'Expense'){
            ?>
                  <a class = "u-action" href="print.php?Expense_id=<?php echo $row['transaction_id'];?>">Print</a>
                  <a class = "u-action" href="View-Expense.php?transaction_id=<?php echo $row['transaction_id'];?>">View</a>
                  <a class = "u-action" href="View-Expense.php?transaction_id=<?php echo $row['transaction_id'];?>">Update</a>
                  <a class = "u-action" href="Delete_CashVoucher_Treasurer.php?transaction_id=<?php echo $row['transaction_id'];?>">Delete</a></td>
            <?php
                }   
            ?>

            <?php
              if($row['transaction_type'] == 'Income'){
            ?>
                  <a class = "u-action" href="View-Income.php?transaction_id=<?php echo $row['transaction_id'];?>">View</a>
                  <a class = "u-action" href="View-Income.php?transaction_id=<?php echo $row['transaction_id'];?>">Update</a>
                  <a class = "u-action" href="Delete_CashReceipt_Treasurer.php?transaction_id=<?php echo $row['transaction_id'];?>">Delete</a></td>
            <?php
                }   
            ?>
                </tr>
			
            <?php
					}
            ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="u-container-align-center u-container-style u-shape-rectangle u-tab-pane u-white" id="tab-14b7" role="tabpanel" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <span><a href="Income.php"><img class="add-transaction" src="images/add-button.png" alt="Add Cash Receipt" title="Add Cash Receipt"></a></span>
                <div class="u-expanded-width u-table u-table-responsive u-table-2">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="15%">
                      <col width="40%">
                      <col width="15%">
                      <col width="30%">
                    </colgroup>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                    <tr style="height: 30px;">
                        <td class="u-table-cell">Income ID</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Date</td>
                        <td class="u-table-cell">Action</td>
                      </tr>
                
                    <?php
					include('config.php');
					$query=mysqli_query($conn,"SELECT * FROM income ORDER BY Income_Date DESC");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr style="height: 51px;">
							<td class="u-table-cell"><?php echo $row['Income_id']; ?></td>
							<td class="u-table-cell"><?php echo $row['Income_Description']; ?></td>
							<td class="u-table-cell"><?php echo $row['Income_Date']; ?></td>
              <td class="u-table-cell">
              <a class = "u-action" href="View-Income.php?transaction_id=<?php echo $row['Income_id'];?>">View</a>
              <a class = "u-action" href="View-Income.php?transaction_id=<?php echo $row['Income_id'];?>">Update</a>
              <a class = "u-action" href="Delete_CashReceipt_Treasurer.php?transaction_id=<?php echo $row['Income_id'];?>">Delete</a>
              </td>
						</tr>
						<?php
					}
				    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="u-container-align-center u-container-style u-shape-rectangle u-tab-pane u-white" id="link-tab-93fc" role="tabpanel" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-container-layout u-valign-middle u-container-layout-3">
              <span><a href="Expense.php"><img class="add-transaction" src="images/add-button.png" alt="Add Cash Voucher" title="Add Cash Voucher"></a></span>
                <div class="u-expanded-width u-table u-table-responsive u-table-3">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="10%">
                      <col width="35%">
                      <col width="10%">
                      <col width="15%">
                      <col width="30%">
                    </colgroup>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                    <tr style="height: 30px;">
                        <td class="u-table-cell">Expense ID</td>
                        <td class="u-table-cell">Description</td>
                        <td class="u-table-cell">Status</td>
                        <td class="u-table-cell">Date</td>
                        <td class="u-table-cell">Action</td>
                      </tr>
                
                    <?php
					include('config.php');
					$query=mysqli_query($conn,"SELECT * FROM expense ORDER BY Expense_Date DESC");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr style="height: 51px;">
							<td class="u-table-cell"><?php echo $row['Expense_id']; ?></td>
							<td class="u-table-cell"><?php echo $row['Expense_description']; ?></td>
							<td class="u-table-cell"><?php echo $row['Expense_status']; ?></td>
              <td class="u-table-cell"><?php echo $row['Expense_Date']; ?></td>
              <td class="u-table-cell">
              <?php
              if($row['Expense_status'] == 'accepted'){
                ?>
                <a class = "u-action" href="print.php?Expense_id=<?php echo $row['Expense_id'];?>">Print</a>
              <?php
              }
              ?>

              <a class = "u-action" href="View-Expense.php?transaction_id=<?php echo $row['Expense_id'];?>">View</a>
              <a class = "u-action" href="View-Expense.php?transaction_id=<?php echo $row['Expense_id'];?>">Update</a>
              <a class = "u-action" href="Delete_CashVoucher_Treasurer.php?transaction_id=<?php echo $row['Expense_id'];?>">Delete</a>
            </td>
						</tr>

						<?php
					}
				    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section>


    <footer class="u-clearfix u-custom-color-1 u-footer" id="sec-13e0"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-align-left u-image u-image-contain u-image-default u-image-1" src="images/gwenchana-2.png" alt="" data-image-width="950" data-image-height="960">
        <p class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Copyright by Gwenchana Enterprise. All Rights Reserved</p>
      </div></footer>
  
</body></html>
<?php 
    require ("fpdf/fpdf.php");
    require "config.php";

    $expense_id = $_GET['Expense_id'];
    $sql = "SELECT * FROM expense WHERE Expense_id = '$expense_id'";
    $result = mysqli_query($conn, $sql);  // Assuming $conn is your database connection

    while ($row = mysqli_fetch_array($result)) {

        $no = $row['Expense_id'];

        $pdf = new FPDF('L','mm',"A4");

        $pdf->AddPage();
        $pdf->setFont('Arial','B',40);
        $pdf->Cell(275, 5, 'Cash Voucher',0,0,'C');
        $pdf->setFont('Arial','B',20);
        $pdf->Ln(40);
        $pdf->Cell(200, 5, 'No: '. $row['Expense_id'], 0, 0);     
        $pdf->Cell(100, 5, 'Date: ' . $row['Expense_Date'], 0, 0);
        $pdf->Ln(30);
        $pdf->Cell(100, 5, 'Title: ' . $row['Expense_Type'], 0, 0);
        $pdf->Ln(20);
        $pdf->Cell(100, 5, 'Description: '. $row['Expense_description'], 0, 0);
        $pdf->Ln(20);
        $pdf->Cell(100, 5, 'Paid To: '. $row['Expense_To'], 0, 0);
        $pdf->Ln(60);
        $pdf->Cell(150, 5, 'Prepared by', 0, 0, 'C');
        $admin_sign = "images/admin_sign.png"; // Change this to the path of your image
        //right bottom size
        $treasurer_sign = "images/treasurer_sign.png"; // Change this to the path of your image
        //right bottom size
        $pdf->Image($admin_sign, 65, 150, 40);
        $pdf->Image($treasurer_sign, 190, 145, 38);
        $pdf->Cell(100, 5, 'Approved by', 0, 0, 'C');

        $pdf->Output();
    }    

?>
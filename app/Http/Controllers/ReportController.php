<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App;
use Auth;
use App\Models\Payment;

class ReportController extends Controller
{
    // public function report1($pid){

    //         $payment = Payment::find($pid);
    //         $pdf = App::make('dompdf.wrapper');
    //         $print.= "<div style='margin:20px; padding:20px;'>";
    //         $print.="<h1 align='center'>Payment Recipt</h1>";
    //         $print.="<hr/>";
    //         $print.="<p>Recipt No : <b>" . $pid ."</b></p>";
    //         $print.="<p>Date : <b>" .$payment->paid_date ."</b></p>";
    //         $print.="<p>Enrollment No : <b>" .$payment->enrollment->enroll_no ."</b></p>";

    //         $print.="<p>Student name : <b>" .$payment->enrollment->student->name ."</b></p>";

    //         $print.="<hr/>";
    //         $print.="<table style='width: 100%; '>";

    //         $print.="<tr>";
    //         $print.="<td>Rescription</td>";
    //         $print.="<td>Amount</td>";
            
    //         $print.="</tr>";

    //         $print.="<tr>";
    //         $print.="<td> <h3>"  .$payment->enrollment->batch->name . "</h3> </td>";
    //         $print.="<td> <h3>"  .$payment->amount . "</h3> </td>";
    //         $print.="</tr>";

    //         $print.="</table>";
    //         $print.="<hr/>";

    //         $print.="<span> Printed By: <b>" . Auth::user()->name . "</b> </span>";
    //         $print.="<span> Printed Date: <b>" . date('Y m d') . "</b> </span>";
            

    //         $print.="</div>";
    //         $pdf->loadHTML($print);
    //         return $pdf->stream();
    // }
    public function report1($pid)
{
    $payment = Payment::find($pid);

    // Check if payment exists to prevent errors
    if (!$payment) {
        return "Payment record not found for ID: " . $pid;
    }

    $pdf = App::make('dompdf.wrapper');
    
    // Initialize $print
    $print = ""; 

    $print .= "<div style='margin:20px; padding:20px;'>";
    $print .= "<h1 align='center'>Payment Receipt</h1>";
    $print .= "<hr/>";
    $print .= "<p>Receipt No : <b>" . $pid . "</b></p>";
    $print.="<p>Date : <b>" .$payment->paid_date ."</b></p>";
    $print .= "<p>Enrollment No : <b>" . $payment->enrollment->enroll_no . "</b></p>";
    $print .= "<p>Student name : <b>" . $payment->enrollment->student->name . "</b></p>";
    $print .= "<hr/>";
    $print .= "<table style='width: 100%;'>";
    $print.="<tr>";
                $print.="<td>Rescription</td>";
                $print.="<td>Amount</td>";
                
                $print.="</tr>";

                $print.="<tr>";
                $print.="<td> <h3>"  .$payment->enrollment->batch->name . "</h3> </td>";
                $print.="<td> <h3>"  .$payment->amount . "</h3> </td>";
                $print.="</tr>";
    $print .= "</div>";

    // Load content into the PDF wrapper
    $pdf->loadHTML($print);

    // Return the PDF for download
    return $pdf->download('payment_receipt_' . $pid . '.pdf');
}



}

?>
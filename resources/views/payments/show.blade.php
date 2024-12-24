@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Payment</div>
  <div class="card-body">
   
 
        <div class="card-body">
       <h5 class="card-title">Enrollment Id : {{ $payments->enrollment->enroll_no }}</h5> <!--table collum name, add. -->
        <p class="card-text">Paid Date : {{ $payments->Paid_date }}</p>
        <p class="card-text">Amount : {{ $payments->amount }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection
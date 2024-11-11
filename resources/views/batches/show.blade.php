@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Batch</div>
  <div class="card-body">
   
 
        <div class="card-body">
       <h5 class="card-title">Name : {{ $batches->name }}</h5> <!--table collum name, add. -->
        <p class="card-text">Course Id : {{ $batches->course_id }}</p>
        <p class="card-text">Start Date : {{ $batches->start_date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection
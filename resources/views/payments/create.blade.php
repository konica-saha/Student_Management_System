@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Payment</div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}

        <label>Enrollment Id</label></br>
        <!-- <input type="text" name="enrollment_id" id="enrollment_id" class="form-control"></br> -->
        <select name="enrollment_id" id="enrollment_id" class="form-control">
          @foreach($enrollments as $id => $enrollno)
          <option value="{{ $id }}">{{ $enrollno }}</option>
          @endforeach
        </select>

        <label>Paid Date</label></br>
        <input type="text" name="Paid_date" id="Paid_date" class="form-control"></br>
        

        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection
@extends('layouts.admin')



@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body dashboard-tabs p-0">
          
          @if(session('message'))
           <h2 class="alert-alert-success">{{ session('message')}},</h2>
           @endif
          
          
        </div>
  </div>
     
</div>
</div>

@endsection
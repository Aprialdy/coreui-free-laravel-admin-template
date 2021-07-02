@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> Feedback: {{ $contactus->id }}</div>
                    <div class="card-body">
                        <br>
                        <h4>Name:</h4>
                        <p> {{ $contactus->name }}</p>
                        <h4>Email:</h4>
                        <p> {{ $contactus->email }}</p>
                        <h4>Subject:</h4> 
                        <p>{{ $contactus->subject }}</p>
                        <h4>Message:</h4> 
                        <p>{{ $contactus->message }}</p>
                        
                        
                        <a href="{{ route('contactus.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a>
                    </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection
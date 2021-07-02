@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Feedback') }}</div>
                    <div class="card-body">
                        
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($contactus as $cu)
                            <tr>
                              <td><strong>{{ $cu->name }}</strong></td>
                              <td><strong>{{ $cu->email }}</strong></td>
                              <td>{{ $cu->subject }}</td>
                              <td>{{ $cu->message }}</td>
                             
                              <td>
                                <a href="{{ url('/contactus/' . $cu->id) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              
                              <td>
                                <form action="{{ route('contactus.destroy', $cu->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-block btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $contactus->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection


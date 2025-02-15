@extends('format.adminmaster')
@section('title')
    Reports
@endsection
@section('breadcamp')
    <ol class="breadcrumb w-100">
        <li class="breadcrumb-item"><a href="{{route("dashboard")}}" class="owncol">Home</a></li>
        <li class="breadcrumb-item active">Report</li>
    </ol>
@endsection

@section('content')
      <div class="card">
          <div class="card-header">
              Report
          </div>
          <div class="card-body">
              <table class="table">
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>E-Mail</th>
                      <th>Subject</th>
                      <th>Date</th>
                      <th>Controls</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($messages as $message)
                      <tr>
                         <td>{{$message->id}}</td>
                          <td>{{$message->cname}}</td>
                          <td>{{$message->cemail}}</td>
                          <td>{{$message->title}}</td>
                          <td>{{$message->updated_at}}</td>
                          <td>
                              <a href="{{route('admin-message',$message->id)}}" class="btn btn-outline-secondary d-inline">Detail</a>
                          </td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      </div>


@endsection



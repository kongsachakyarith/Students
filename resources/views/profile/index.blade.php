@extends('layouts.master')
@section('title')
    Hello
@endsection

@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      @if(session('message'))
      <div class="row">
        <div class="col-md-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
      </div>
    @endif 
        <div class="col-12">
            <div class="card">
              <div class="card-header"> 
                <a class="btn btn-sm btn-success" href="{{route('profile.create')}}"><i class="fas fa-plus"> new create</i> </a>
                {{-- <a class="btn btn-sm btn-danger" href="{{route('dashboard.student.create')}}"   >Delete</a> --}}
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Sex</th>
                      <th>Address</th>
                      <th>Date Of Birth</th>
                      <th>Phone</th>
                      <th>University</th>
                      <th>Year</th>
                      <th>Action</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>
                      
                        @foreach ($profile as $student)
                        <tr>
                        <td>{{$student->id}}</td>
                        <td class="align-middle">{{$student->student_id}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->date_of_birth}}</td> 
                        <td>{{$student->phone}}</td>
                        <td>{{$student->university}}</td>
                        <td>{{$student->year}}</td>
                        <td> <a class="btn btn-sm btn-primary" href="{{ url('/profile/' . $student->id . '/edit') }}"><i class="fas fa-edit">Edit</i> </a>
                          <a class="btn btn-sm btn-info" href=""><i class="fas fa-view">view</i> </a>
                        </td>
                        <td>
                          <form action="{{ route('student.destroy', $student->id) }}" id='delete_form' method="POST">
                            @csrf
                           @method('DELETE')
                          <div class="form-check">
                            <button class="btn btn-sm btn-primary"  type="submit"><i class="cil-trash">delele</i></button>
                          </div>
                        </form>
                        </td>
                      </tr> 
                        @endforeach
                  </tbody>
                </table>
            
              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
@extends('layouts.master')
@section('body')
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Hello<small>Student</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" novalidate="novalidate" method="POST" action="{{route('student.store')}}">
              
            <!-- Equivalent to... -->
            @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">UserName</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter name" required autofocus>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="exampleInputPassword1" placeholder="lastname" required autofocus>
                  </div>
                  
                      <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" placeholder="firstname" required autofocus>
                      </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="email" required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
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
              <li class="breadcrumb-item active">Students</li>
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
                <h3 class="card-title">Hello<small>Students</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" novalidate="novalidate" method="POST" action="{{route('dashboard.student.update_submit', $id)}}">
            <!-- Equivalent to... -->
            
            {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control"  id="exampleInputEmail1" value="{{$data[0]}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sex</label>
                    <input type="text" name="sex" class="form-control" id="exampleInputPassword1" value="{{$data[1]}}">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="text" name="date" class="form-control" id="exampleInputEmail1" value="{{$data[2]}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1"  value="{{$data[3]}}">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name='submit'>Update</button>
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
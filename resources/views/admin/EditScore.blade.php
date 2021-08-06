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
              <form id="quickForm" novalidate="novalidate" method="POST" action="{{route('dashboard.score.update_submit',$id)}}">
              
            <!-- Equivalent to... -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="card-body">
                  <div class="form-group" data-select2-id="54">
                    <label>Name</label>
                    <select name="name"   class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="{{$score[0]}}" id="name" >{{$score[0]}}</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label  for="exampleInputPassword1">Php</label>
                    <input type="text" name="php" class="form-control" id="exampleInputPassword1" value="{{$score[1]}}">
                  </div>
                  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Java</label>
                        <input type="text" name="java" class="form-control" id="exampleInputEmail1" value="{{$score[2]}}">
                      </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">.Net</label>
                    <input type="text" name="net" class="form-control" id="exampleInputPassword1" value="{{$score[3]}}">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
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
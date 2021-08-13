@extends('layouts.master')
@section('body')
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
              <form id="quickForm" novalidate="novalidate" method="POST" action="{{route('profile.store')}}">
              
            <!-- Equivalent to... -->
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="category">Category</label> 
                    <a  href="" data-toggle="tooltip" data-html="true" title="" data-original-title="<em>Add New</em>"><i class="cil-plus"></i></a>
                    <div class="form-group">
                       <select class="form-control" name="username">
                            @foreach($data as  $value)
                                <option value="{{$value->id}}">{{$value->username}}</option>                                        
                            @endforeach
                       </select>
                    </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" required autofocus/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sex</label>
                    <input type="text" name="gender" class="form-control" id="exampleInputPassword1" placeholder="gender" required autofocus/>
                  </div>
                  
                  <div class="form-group">
                    <label>Date:</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                          <input type="text" name="date_of_birth" class="form-control datetimepicker-input" data-target="#reservationdate">
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="phone" required autofocus/>
                      </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input type="text" name="age" class="form-control" id="exampleInputPassword1" placeholder="age" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">University</label>
                    <input type="text" name="university" class="form-control" id="exampleInputPassword1" placeholder="university" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Year</label>
                    <input type="text" name="year" class="form-control" id="exampleInputPassword1" placeholder="year" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Skill</label>
                    <input type="text" name="skills" class="form-control" id="exampleInputPassword1" placeholder="skills" required>
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
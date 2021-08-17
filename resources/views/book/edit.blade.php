@extends('layouts.master')
@section('body')
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Book</h1>
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
              
              <form id="quickForm" novalidate="novalidate" method="POST" action="/book/{{ $book->id }}">
              
            <!-- Equivalent to... -->
              @csrf
              @method('PUT')
                <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$book->name}}" required autofocus/>
                      </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$book->title}}" id="exampleInputPassword1" value="{{$book->title}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Author</label>
                    <input type="text" name="author" class="form-control" id="exampleInputPassword1" value="{{$book->author}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Publisher</label>
                    <input type="text" name="publisher" class="form-control" id="exampleInputPassword1" value="{{$book->publisher}}" required>
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
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
                <a class="btn btn-sm btn-success" href="{{route('book.create')}}"><i class="fas fa-plus"> new create</i> </a>
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
                      <th>Title</th>
                      <th>Name</th>
                      <th>Author</th>
                      <th>Publisher</th>
                      <th>Action</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>
                      
                        @foreach ($book as $books)
                        <tr>
                        <td>{{$books->id}}</td>
                        <td>{{$books->title}}</td>
                        <td>{{$books->name}}</td>
                        <td>{{$books->author}}</td>
                        <td>{{$books->publisher}}</td> 
                        <td> <a class="btn btn-sm btn-primary" href="{{ url('/book/' . $books->id . '/edit') }}"><i class="fas fa-edit">Edit</i> </a>
                          <a class="btn btn-sm btn-info" href=""><i class="fas fa-view">view</i> </a>
                        </td>
                        <td>
                          <form action="" id='delete_form' method="POST">
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
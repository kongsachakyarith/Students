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
                <a class="btn btn-sm btn-success" href="{{route('dashboard.score.create')}}"><i class="fas fa-plus"> new create</i> </a>
                <button onclick="return confirm('Are you sure you want to delete?')" type="submit" form="delete_form" class="btn btn-danger">Delete</button>
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
              <form action="{{route('dashboard.score.delete_submit')}}" id='delete_form' method="POST">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Php</th>
                      <th>Java</th>
                      <th>.Net</th>
                      <th>Total</th>
                      <th>Action</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php
                  $index = 1;
                  @endphp
                    @foreach($score as $id => $stu)
                    @php
                      $btn = explode(',', $stu);
                    @endphp
                    <tr>
                      <td>{{$index++}}</td>
                      @foreach ($data as $ids => $stus)
                      @php
                      $bts = explode(',', $stus);
                      @endphp
                        @if($btn[0] == $ids)
                        <td>{{$bts[0]}}</td> 
                        @endif
                      @endforeach
                      <td>{{$btn[1]}}</td>
                      <td>{{$btn[2]}}</td>
                      <td>{{$btn[3]}}</td>
                      <td>{{$btn[4]}}</td>
                      <td>
                          <a class="btn btn-sm btn-primary" href="{{route('dashboard.score.update',$id)}}"><i class="fas fa-edit">Edit</i> </a>
                      </td>
                      <td>
                          {{ csrf_field() }}
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" for="del" name="checked[]" value="<?php echo $id ?>"><label for="checkbox1"></label>
                          </div>
                      </td>
                    </tr>
                  {{-- @include('admin.Edit'); --}}
                    @endforeach
                  </tbody>
                </table>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
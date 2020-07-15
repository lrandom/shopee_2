@extends('admin.layout')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{__('main.add')}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->


    @if(session('message'))
  <div class="alert alert-success">
    {{session('message')}}
  </div>
@endif

    <form role="form" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
            <label>{{__('main.name')}}</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
          <label>{{__('main.email')}}</label>
          <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
          <label>{{__('main.password')}}</label>
          <input type="password" name="password" class="form-control">
        </div>
        {{-- <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div> --}}
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
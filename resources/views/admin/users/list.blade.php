@extends('admin.layout')
@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">
      {{__('main.users')}}
      <a class="btn btn-primary" href="{{url('admin/users/add')}}">{{__('main.add')}}</a>
    </h3>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>{{__('admin.name')}}</th>
            <th>{{__('admin.email')}}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($list as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>
              {{$item->email}}
            </td>
            <td>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      {{$list->appends(request()->query())->links()}}
    </div>
  </div>
@endsection
@extends('layout.default')
@section('title')

@endsection()


@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center">
        <h6>Class table</h6>
            <a class="btn bg-gradient-success btn-sm ms-auto" href="{{url('add-ekskul')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Class</a>
      </div>

      <div class="card-body px-0 pt-0 pb-2">
        <div class="col-6">
            <form class="form-group" action="" method="get">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <input class="form-control input-group"  placeholder="Type here..." type="text" name="keyword" value="" >
                </div>
                  <div class="col-6 d-flex align-items-center">
                    <button class="input-group-append btn bg-gradient-success mb-0" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
            <th style="width: 10px">No</th>
            <th class="text-center">Nama Extra</th>

            <th class="text-center" style="width: 40px">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($ekskul as $key=> $value)
            <tr class="text-dark">
              <td class="text-center">{{$loop->iteration}}</td>
              <td class="text-center">{{$value->name}}</td>

              <td class="text-center">
                <a href="#" class="btn btn-secondary"><i class="fa fa-pencil"></i></a>
                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                <a href="{{url('extracurricular-detail/'.$value->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection()

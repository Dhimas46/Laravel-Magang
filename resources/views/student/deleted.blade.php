@extends('layout.default')
@section('title')
Deleted Student
@endsection()


@section('content')
          <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  <div class="d-flex align-items-center">
                    <h6>Deleted Student Table</h6>
                        <a class="btn bg-gradient-warning btn-sm ms-auto" href="{{url('student')}}"><i class="fas fa-eye"></i>&nbsp;&nbsp;Back</a>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                    <div class="col-6">
                        <form class="form-group" action="" method="get">
                          <div class="row">
                            <div class="col-6 d-flex align-items-center">
                              <input class="form-control input-group"  placeholder="Type here..." type="text" name="keyword" value="" >
                            </div>
                              <div class="col-6 d-flex align-items-center">
                                <button class="input-group-append btn bg-gradient-warning mb-0" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                      <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                          <thead>
                            <tr>
                          <th class="text-left" style="width: 10px;">No</th>
                          <th class="text-left">Name</th>
                          <th class="text-left">Nis</th>
                          <th class="text-left">Gender</th>
                          <th class="text-left" style="width: 40px">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($student as $data)
                            <tr>
                              <td class="text-center">{{$loop->iteration}}</td>
                              <td>{{$data->name}}</td>
                              <td>{{$data->gender}}</td>
                              <td>{{$data->nis}}</td>
                              <td>
                                <a href="{{url('student/'.$data->id.'/restore')}}" class="btn btn-info"><i class="fa fa-book"></i>&nbsp&nbspRestore</a>
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
        </div>
@endsection()

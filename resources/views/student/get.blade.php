@extends('layout.default')
@section('title')
Student
@endsection()


@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center">
        <h6>Student table</h6>
            <a class="btn bg-gradient-info btn-sm ms-auto" href="{{url('student-deleted')}}"><i class="fas fa-eye"></i>&nbsp;&nbsp;Show Deleted Data</a>
      </div>
      <a class="btn bg-gradient-warning btn-sm ms-auto" href="{{url('add-student')}}"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Student</a>

      <div id="flash" data-flash="{{session()->get('success')}}"></div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="col-6">
            <form class="form-group" action="" method="get">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <input class="form-control input-group"  placeholder="Type here..." type="text" name="keyword" value="{{$keyword}}" >
                </div>
                  <div class="col-6 d-flex align-items-center">
                    <button class="input-group-append btn bg-gradient-warning mb-0" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
            <th class="text-left" style="width: 10px;">No</th>
            <th class="text-left">Name</th>
            <th class="text-left">Nis</th>
            <th class="text-left">Gender</th>
            <th class="text-left">Class</th>
            @if (Auth::user()->role_id == 1 && Auth::user()->role_id == 2)
            <th class="text-left" style="width: 40px">Action</th>
            @else

            @endif
              </tr>
            </thead>
            <tbody>
            @foreach($studentList as $key=> $value)
            <tr class="text-dark">
              <td class="text-center">{{$loop->iteration}}</td>
              <td class="text-left">{{$value->name}}</td>
              <td class="text-left">{{$value->nis}}</td>
              <td class="text-left text-sm">
               <span class="badge badge-sm {{ ($value->gender == 'L')?'bg-gradient-success' : 'bg-gradient-primary' }}">
              {{ ($value->gender == 'L')? 'Laki-laki' : 'Perempuan'}}
               </span>
             </td>
             <td class="text-center">{{$value->class->name}}</td>
              <td class="text-center">
                @if (Auth::user()->role_id == 1)
                <a id="btn-hapus" class="btn btn-danger" href="{{url('delete-student/'.$value->id)}}"><i class="fa fa-trash"></i></a>
                @endif
                @if(Auth::user()->role_id != 1 && Auth::user()->role_id !=2)
                @else
                <a href="{{url('student/'.$value->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                <a href="{{url('edit-student/'.$value->id)}}" class="btn btn-secondary"><i class="fa fa-pencil"></i></a>
                @endif
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer clearfix">
          {{$studentList->withQueryString()->links()}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection()

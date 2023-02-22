@extends('layout.default')
@section('title')

@endsection()


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center">
          <h6>Student Name :  {{$student->name}}</h6>
          <a class="btn bg-gradient-warning btn-sm ms-auto" href="{{url('student')}}"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Photo</th>
                <th>NIS</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Homeroom Teacher</th>
                <th>Extra</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  @if($student->image != '')
                  <img src="{{asset('/storage/img/'.$student->image)}}" width="200px" height="200px">
                  @else
                    <img src="{{asset('/img/default.png')}}" width="200px" height="200px">  
                  @endif
                </td>
                <td>{{$student->nis}}</td>
                <td class="text-left text-sm">
                 <span class="badge badge-sm {{ ($student->gender == 'L')?'bg-gradient-success' : 'bg-gradient-primary' }}">
                {{ ($student->gender == 'L')? 'Laki-laki' : 'Perempuan'}}
                 </span>
               </td>
               <td>{{$student->class->name}}</td>
               <td>{{$student->class->homeroomTeacher->name}}</td>
               <td>
                 <ol>
                     @foreach($student->extracurriculars as $item)
                    <li>{{$item->name}}</li>
                     @endforeach
                 </ol>
               </td>

              </tr>
            </tbody>
          </table>

      </div>
    </div>
  </div>
</div>

@endsection()

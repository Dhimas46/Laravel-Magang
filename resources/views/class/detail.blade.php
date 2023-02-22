@extends('layout.default')
@section('title')

@endsection()


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center">
          <h6>Class Name :  {{$class->name}}</h6>
          <a class="btn bg-gradient-warning btn-sm ms-auto" href="{{url('class')}}"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Homeroom Teacher </th>
                <th>List Student</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center"><strong>{{$class->homeroomTeacher->name}}</strong> </td>
              <td>
                <ol>
                  @foreach ($class->students as $data)
                <li>{{$data->name}}</li>
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

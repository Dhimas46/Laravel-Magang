@extends('layout.default')
@section('title')

@endsection()


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center">
          <h6>Class Details</h6>
          <a class="btn bg-gradient-warning btn-sm ms-auto" href="{{url('teachers')}}"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Name </th>
                <th>List Student</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  @if($teacher->class)
                  {{$teacher->class->name}}
                  @else
                  -
                  @endif
                </td>
              <td>

              @if ($teacher->class)
              <ol>
              @foreach ($teacher->class->students as $item)
              <li>{{$item->name}}</li>
              @endforeach
              </ol>
              @endif
              </td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

@endsection()

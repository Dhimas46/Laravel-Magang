@extends('layout.default')
@section('title')

@endsection()


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center">
          <h6>Edit Student</h6>
          <a class="btn bg-gradient-warning btn-sm ms-auto" href="{{url('student')}}"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Turn Back</a>
        </div>
      </div>
      <form action="{{url('/student/'.$student->id)}}" enctype="multipart/form-data" method="post">
      @csrf
      @method('PUT')
      <div class="card-body">
        <p class="text-uppercase text-sm">Student Information</p>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Name</label>
              <input class="form-control" type="text" name="name" value="{{$student->name}}" required autofocus>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Gender</label>
              <select name="gender" class="form-control" required autofocus>
                <option value="{{$student->gender}}">
                  @if($student->gender == 'L')
                  Laki-Laki
                  @else
                  Perempuan
                  @endif
                 </option>
                  @if($student->gender == 'L')
                    <option value="P">Perempuan</option>
                  @else
                   <option value="L">Laki-Laki</option>
                  @endif
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">NIS</label>
              <input class="form-control" name="nis" type="text" value="{{$student->nis}}">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Class</label>
              <select name="class_id" class="form-control" name="">
                <option value="{{$student->class->id}}">{{$student->class->name}}</option>
                @foreach($class as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            </div>
          </div>

        <!-- <div class="col-md-4">
          <div class="form-check">
            <input name="status" class="form-check-input" type="checkbox" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Set Active Product
            </label>
          </div>
        </div> -->
        <hr class="horizontal dark">
        <!-- <p class="text-uppercase text-sm">Product Details</p> -->
        <!-- <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Product Description</label>
              <textarea name="deskripsi" class="form-control" rows="4"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="example-text-input" id="file-input" class="custom-file-label">Product Images</label>
              <input type="file" id="file-input" class="form-control" multiple name="image[]" >
            </div>
          </div>
        </div> -->
        <div class="col-12">
          <button type="submit" class="btn btn bg-gradient-warning"><i class="fa fa-paper-plane"></i>&nbsp&nbspSave</button>
        </div>
      </div>
      </form>
    </div>
  </div>

</div>

@endsection()

@extends('layout.default')
@section('title')

@endsection()


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center">
          <h6>Add Student</h6>
          <a class="btn bg-gradient-warning btn-sm ms-auto" href="{{url('student')}}"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Turn Back</a>
        </div>
      </div>
      @if ($errors->any())
      <div id="flashError" data-flash="
      @foreach($errors->all() as $error)
      {{$error}}
      @endforeach
      ">
      </div>
      @endif
      <form action="{{url('student')}}" enctype="multipart/form-data" method="post">
      @csrf
      <div class="card-body">
        <p class="text-uppercase text-sm">Student Information</p>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Name</label>
              <input class="form-control" type="text" name="name" placeholder="Your Full Name" required autofocus>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Gender</label>
              <select name="gender" class="form-control" required autofocus>
                <option value="">Select One</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>

              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">NIS</label>
              <input class="form-control" name="nis" type="text" placeholder="2919210231231">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Class</label>
              <select name="class_id" class="form-control" name="">
                <option value="">Select One</option>
                @foreach($class as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="example-text-input" id="file-input" class="custom-file-label">Student Images</label>
              <input type="file" id="file-input" class="form-control" multiple name="photo" >
            </div>
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

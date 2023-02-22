@extends('layout.default')
@section('title')

@endsection()


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header pb-0">
        <div class="d-flex align-items-center">
          <h6>Add Product</h6>
          <a class="btn bg-gradient-warning btn-sm ms-auto" href="<?= base_url('product'); ?>"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Turn Back</a>
        </div>
      </div>
      <form action="<?= base_url('product') ?>" enctype="multipart/form-data" method="post">
        <?= csrf_field() ?>
      <div class="card-body">
        <p class="text-uppercase text-sm">Product Information</p>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Name</label>
              <input class="form-control" type="text" name="nama_product" placeholder="Your Product Name">
            </div>
          </div>
        
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Slug</label>
              <input class="form-control" type="text" name="slug" placeholder="Slug" required autofocus>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Price</label>
              <input class="form-control" name="harga" type="text" placeholder="Ex : 500000">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Quantity</label>
              <input class="form-control" name="qty" placeholder="Ex : 12" type="number" min="1" required autofocus>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Berat (Gram Units)</label>
              <input class="form-control" placeholder="Ex : 200" name="berat" type="number" min="1" required autofocus>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-check">
            <input name="status" class="form-check-input" type="checkbox" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Set Active Product
            </label>
          </div>
        </div>
        <hr class="horizontal dark">
        <p class="text-uppercase text-sm">Product Details</p>
        <div class="row">
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
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn bg-gradient-warning"><i class="fa fa-paper-plane"></i>&nbsp&nbspSave</button>
        </div>
      </div>
      </form>
    </div>
  </div>

</div>

@endsection()

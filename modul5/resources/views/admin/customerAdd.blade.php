@extends('.admin.layouts.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Customer</h4>
                    <form class="forms-sample" action="{{ url('customer') }}" method="POST">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Address</label>
                        <input type="address" name="address" class="form-control" placeholder="Address">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Telp</label>
                        <input type="telp" name="telp" class="form-control" placeholder="Telp">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

@endsection
@extends('.admin.layouts.master')
@section('content')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ticket</h4>
                    <form class="forms-sample" action="{{ url('ticket') }}" method="POST">
                        @csrf
                        <input type="text" value="1" name="employee_id" hidden>
                      <div class="form-group">
                        <label for="exampleInputName1">Category</label>
                        <input type="text" name="category" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="address" name="price" class="form-control" placeholder="Address">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

@endsection
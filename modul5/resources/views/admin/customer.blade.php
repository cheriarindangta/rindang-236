@extends('.admin.layouts.master')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">Customer
                    <br>
                    <a href="{{ url('/customerAdd') }}" class="btn btn-success" style="margin-top: 10px">Add</a> </br>
                    </h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No. </th>
                          <th> Name </th>
                          <th> Address </th>
                          <th> Email </th>
                          <th> Telp </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($customers as $item)
                        <tr>
                          <td> {{ $loop->iteration }} </td>
                          <td> {{ $item->name }} </td>
                          <td> {{ $item->address }} </td>
                          <td> {{ $item->email }}</td>
                          <td> {{ $item->telp }}</td>
                          <td>
                          <button type="button" class="btn btn-primary">Edit</button>
                          <form action="{{ url('customer/delete/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('do u really?')">
                              @method('delete')
                              @csrf
                              <button  class="btn btn-danger">Delete</button>
                            </form></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

@endsection
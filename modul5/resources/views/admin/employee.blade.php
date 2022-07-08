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
                    <h4 class="card-title">Employee
                    <br>
                    <a href="{{ url('/employeeAdd') }}" class="btn btn-success" style="margin-top: 10px; margin-bottom: -10px">Add</a> </br> </br>
                    </h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No. </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Telp </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($employees as $item)
                        <tr>
                          <td> {{ $loop->iteration }} </td>
                          <td> {{ $item->name }} </td>
                          <td> {{ $item->email }} </td>
                          <td> {{ $item->telp }} </td>
                          <td>
                          <button type="button" class="btn btn-primary">Edit</button>
                          <form action="{{ url('employee/delete/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('do u really?')">
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
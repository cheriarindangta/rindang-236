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
                  <h4 class="card-title">Tickets
                    <br>
                    <a href="{{ url('/ticketAdd') }}" class="btn btn-success" style="margin-top: 10px; margin-bottom: -10px">Add</a> </br>
                    </br>
                    </h4>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No. </th>
                          <th> Category </th>
                          <th> Price </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($tickets as $item)
                        <tr>
                          <td> {{ $loop->iteration }} </td>
                          <td> {{ $item->category }} </td>
                          <td> {{ $item->price }} </td>
                          <td> 
                          <a class="btn btn-primary" href="{{ url('ticket/edit/'.$item->id) }}">Edit</a>
                          <form action="{{ url('ticket/delete/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('do u really?')">
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
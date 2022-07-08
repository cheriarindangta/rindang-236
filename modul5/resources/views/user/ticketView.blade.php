@extends('.user.layouts.master')
@section('content')
<center>
        <table>
            <tr>
                <td>
                    @foreach ($tickets as $item)
                    <div class="content">
                        <p>{{ $item->category }}</p>
                        <img src="{{asset('assets/bmth.jpg')}}" alt="" class="content_img">
                        <h2 class="judul_content" style="text-align: center;">{{$item->category}} TICKETS PRESALE ONLY {{ $item->price }}</h2>
                        <center>
                        <button type="button" class="btn btn-warning">BOOK NOW!</button>
                        </center>
                    </div>
                    @endforeach
                </td>
            </tr>
        </table>
    </center>
@endsection
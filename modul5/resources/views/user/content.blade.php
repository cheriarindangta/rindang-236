@extends('user.layouts.master')
@section('content')
<h1>WHEN WE WERE YOUNG</h1>
    <div class="tittle">
        <h4>OCTOBER 22 + 23 + 29, 2022 - LAS VEGAS FESTIVAL GROUNDS</h4>
    </div>

    <div class="missed">
        <h2> MISSED OUT ON TICKETS? </h2>
        <h4>GO GET YOUR TICKET NOW!!!</h4>

    </div>

    <div>
        <center>
            <img src="{{asset('assets/lineup.PNG')}}" alt="Lineup Festival" class="imglineup">
        </center>
    </div>

    <div class="registertxt">
        <h2>BOOK NOW FOR PRESALE THAT STARTS FRIDAY, JANUARI 21, 10:00 AM</h2>
        <h4>ALL TICKETS STARTS AT $19.99 DOWN</h4>
            <form action="form.php" style="margin-top:20px; margin-bottom: -50px;">
            <button type="submit" name="submit" style="margin-bottom: 30px; background-color: white; border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;">BOOKING HERE!</button>
            </form>

    </div>

    <div class="line">

    </div>

    <center>
        <table>
            <tr>
                <td>
                    <div class="content">
                        <p>January 18, 2022</p>
                        <img src="{{asset('assets/bmth.jpg')}}" alt="" class="content_img">
                        <h2 class="judul_content" style="text-align: center;">BRING ME THE HORIZON CONCERT</h2>
                        <p class="text_cover">Bring Me The Horizon is playing near you. Swiss Life Hall, Hannover,
                            Germany. View all concerts
                            <a href="" style="color: red;">Read More...</a>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="content">
                        <p>January 25, 2022</p>
                        <img src="{{asset('assets/mcr.jpg')}}" alt="" class="content_img">
                        <h2 class="judul_content" style="text-align: center;">MY CHEMICAL ROMANCE ON BURN CONCERT</h2>
                        <p class="text_cover">The American emo rock band My Chemical Romance 
                            <a href="" style="color: red;">Read More...</a>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="content">
                        <p>January 30, 2022</p>
                        <img src="{{asset('assets/neckdeep.jpg')}}" alt="" class="content_img">
                        <h2 class="judul_content" style="text-align: center;">NECK DEEP ESSIGFABRIK CONCERT</h2>
                        <p class="text_cover">Neck Deep are a pop-punk band from Wrexham, Wales who formed in 2012. The
                            band have one studio 
                            <a href="" style="color: red;">Read More...</a>
                        </p>
                    </div>
                </td>
            </tr>
        </table>
    </center>

    <center>
        <table>
            <tr>
                <td>
                    <div class="content">
                        <p>Februari 04, 2022</p>
                        <img src="{{asset('assets/emo.jpg')}}" alt="" class="content_img">
                        <h2 class="judul_content" style="text-align: center;">EMO TOP SONGS EVER</h2>
                        <p class="text_cover">Emo is, notoriously, a tricky thing to define. It spans genres, cultures,
                            and hundreds of songs over 35 years. When putting together this list 
                            <a href="" style="color: red;">Read More...</a>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="content">
                        <p>Februari 07, 2022</p>
                        <center>
                            <img src="{{asset('assets/emonew.PNG')}}" alt="" class="content_img">
                        </center>
                        <h2 class="judul_content" style="text-align: center;">2022's BEST NEW EMO RELEASES!!!!</h2>
                        <p class="text_cover">New Releases!!! If u want to find top new songs of 2022 and videos from
                            the best new 2022 albums! 
                            <a href="" style="color: red;">Read More...</a>
                        </p>
                    </div>
                </td>
                <td>
                    <div class="content">
                        <p>Februari 23, 2022</p>
                        <center>
                            <img src="{{asset('assets/riot.jpg')}}" alt="" class="content_img">
                        </center>
                        <h2 class="judul_content" style="text-align: center;">THE BEST ALBUM FROM PARAMORE</h2>
                        <p class="text_cover">Hayley Williams & Co. grew up quickly between their mall-punk-y debut,
                            2005's All We Know Is Falling, and the spunkier,
                            <a href="" style="color: red;">Read More...</a>
                        </p>
                    </div>
                </td>
            </tr>
        </table>
    </center>

    <div class="line">
    </div>

    <div>
        <h1 style="margin-bottom: 50px;">CONTACT</h1>
        <h4 style="text-align: center;">For general festival questions, email us at </h4>
        <h4 style="text-align: center; color: blue;">info@whenwewereyoungfestival.com</h4>
        <h4 style="text-align: center;">For ticketing questions about your purchase, contact us at</h4>
        <h4 style="text-align: center; color: blue;"> Front Gate Tickets online</h4>
        <h4 style="text-align: center;">For sponsorship inquiries, please submit a request to talk with the sponsorship
            team</h4>
    </div>
@endsection
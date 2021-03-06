<!DOCTYPE html>
<html lang="en">

<head>
  <title>When We Were Young Festival</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</head>

<style>
  body {
    background-color: black;
  }

  .my-navbar {
    overflow: hidden;
    background-color: #333;
  }

  .my-navbar a {
    float: left;
    font-size: 16px;
    color: white;
    /* text-align: center; */
    padding: 14px 16px;
    text-decoration: none;
  }

  .dropdown {
    float: left;
    overflow: hidden;
  }

  .dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin: 0;
  }

  .my-navbar a:hover,
  .dropdown:hover .dropbtn {
    background-color: #FF5F00;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-content a:hover {
    background-color: #ddd;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }


  .footer {
    left: 0;
    bottom: 0;
    width: 100%;
    height: 300px;
    margin-top: -20px;
    margin-bottom: 0;
    background-color: rgb(43, 42, 42);
    color: white;
    text-align: center;

  }

  .tabel_footer {
    padding: 30px;
  }

  .list {
    list-style-type: none;
    text-align: left;
    margin: 8px;
    font-family: Poppins;

  }

  h4 {
    font-family: Poppins;
    margin-bottom: 10px;
    margin-left: 5px;
  }

  .content {
    background-color: rgb(88, 88, 88);
    padding: 15px;
    width: 300px;
    margin: 20px;
    border-radius: 10px;

  }

  .content_img {
    max-width: 300px;
    border-radius: 10px;
  }

  .judul_content {
    margin-top: 6px;
  }

  h2,
  h3 {
    font-family: Poppins;
  }

  .text_cover {
    font-family: Poppins;
    font-size: 15px;
  }

  .news {
    text-align: left;
    margin-left: 150px;
    width: 350px;
  }

  .text_sosmed {
    margin-left: 60px;
    margin-top: 50px;
    margin-bottom: 30px;
    width: 400px;
    text-align: left;
    font-size: 15px;
  }

  .sosmed {
    margin-left: 20px;
  }

  .input_news {
    padding-left: 10px;
    width: 200px;
    height: 30px;
    border-radius: 0%;
    border: none;
  }

  .btn_news {
    margin-left: -4px;
    height: 32px;
    width: 40px;
    border-radius: 0%;
    border: none;
  }

  .link_footer {
    text-decoration: none;
    color: #eeeeee;
  }

  .link_footer:hover {
    color: red;
  }

  .copi {
    background-color: #071116;
    color: white;
    text-align: center;
    font-size: 14px;
    margin-top: -15px;
    padding: 5px;
  }

  .content-wrapper {
    display: flex;
  }

  .content {
    background-color: rgb(88, 88, 88);
    padding: 15px;
    width: 300px;
    border-radius: 10px;
  }

  .content_img {
    width: 100%;
    height: 200px;
    border-radius: 10px;
  }

  .judul_content {
    margin-top: 6px;
  }

  .left-section {
    flex-basis: 80%;
  }

  .right-section {
    flex-basis: 20%;
    color: white;
  }

  .right-section a {
    text-decoration: none;
    color: white;
  }

  .flex-wrap {
    display: flex;
    flex-wrap: wrap;
  }

  .topnav {
    overflow: hidden;
    background-color: #e9e9e9;
  }
</style>

<body>
  <div class="my-navbar">
  <a href="/">Home</a>
        <a href="/news">News</a>
        <a href="/ticketView">Ticket</a>
  </div>

  <div>
    <center>
      <img src="{{asset('assets/homeheader.PNG')}}" alt="Home Header" style="color: white;">
    </center>
  </div>
  <h1 style="text-align: center; color: white; margin-top: 50px; margin-bottom: 50px;">HALF NEWS OF EMO\M/</h1>

  <div class="container">
    <div class="content-wrapper">
      <div class="left-section flex-wrap">
        <div class="content">
          <p>January 18, 2022</p>
          <img src="{{asset('assets/bmth.jpg')}}" alt="" class="content_img">
          <h2 class="judul_content" style="text-align: center; color: white;">BRING ME THE HORIZON CONCERT</h2>
          <p class="text_cover">Bring Me The Horizon is playing near you. Swiss Life Hall, Hannover,
            Germany. View all concerts
            <a href="" style="color: red;">Read More...</a>
          </p>
        </div>
        <div class="content" style="margin-left: 110px;">
          <p>Februari 23, 2022</p>
          <img src="{{asset('assets/riot.jpg')}}" alt="" class="content_img">
          <h2 class="judul_content" style="text-align: center; color: white;">THE BEST ALBUM FROM PARAMORE</h2>
          <p class="text_cover">Hayley Williams & Co. grew up quickly between their mall-punk-y debut,
            2005's All We Know Is Falling, and the spunkier,
            <a href="" style="color: red;">Read More...</a>
          </p>
        </div>
        <div class="content">
          <p>Februari 07, 2022</p>
          <img src="{{asset('assets/emonew.PNG')}}" alt="" class="content_img">
          <h2 class="judul_content" style="text-align: center; color: white;">2022's THE BEST EMO NEW RELEASES!!!!</h2>
          <p class="text_cover">New Releases!!! If u want to find top new songs of 2022 and videos from
            the best new 2022 albums!
            <a href="" style="color: red;">Read More...</a>
          </p>
        </div>
        <div class="content" style="margin-left: 110px;">
          <p>Februari 04, 2022</p>
          <img src="{{asset('assets/emo.jpg')}}" alt="" class="content_img">
          <h2 class="judul_content" style="text-align: center; color: white;">EMO TOP SONGS EVER</h2>
          <p class="text_cover">Emo is, notoriously, a tricky thing to define. It spans genres, cultures,
            and hundreds of songs over 35 years. When putting together this list
            <a href="" style="color: red;">Read More...</a>
          </p>
        </div>
        <div class="content">
          <p>January 30, 2022</p>
          <img src="{{asset('assets/neckdeep.jpg')}}" alt="" class="content_img">
          <h2 class="judul_content" style="text-align: center; color: white;">NECK DEEP ESSIGFABRIK CONCERT</h2>
          <p class="text_cover">Neck Deep are a pop-punk band from Wrexham, Wales who formed in 2012. The
            band have one studio
            <a href="" style="color: red;">Read More...</a>
          </p>
        </div>
        <div class="content" style="margin-left: 110px;">
          <p>Februari 04, 2022</p>
          <img src="{{asset('assets/mcr.jpg')}}" alt="" class="content_img">
          <h2 class="judul_content" style="text-align: center; color: white;">MY CHEMICAL ROMANCE ON BURN CONCERT</h2>
          <p class="text_cover">The American emo rock band My Chemical Romance
            <a href="" style="color: red;">Read More...</a>
          </p>
        </div>
      </div>
      <div class="right-section" style="margin-top: 23px; margin-bottom: 20px;">
        <input type="text" placeholder="Search..">
        <div>
          <p>
            The Best Album of EMO on 2000's
            <a href="#" style="color: red;">read more...</a>
          </p>
        </div>
        <div>
          <p>
            Check it out for The Biggest EMO Concert on 2022
            <a href="#" style="color: red;">read more...</a>
          </p>
        </div>
        <div>
          <p>
            When We Were Young and the Rise of Emo Music
            <a href="#" style="color: red;">read more...</a>
          </p>
        </div>
        <div>
          <p>
            The Best Emo Album Ever in The Whole World
            <a href="#" style="color: red;">read more...</a>
          </p>
        </div>
        <div>
          <p>
            Top Songs Emo All The Time
            <a href="#" style="color: red;">read more...</a>
          </p>
        </div>
        <div>
          <p>
            Paramore Concert 2022, Time, Place, and Date
            <a href="#" style="color: red;">read more...</a>
          </p>
        </div>
      </div>
    </div>


    <nav aria-label="Page navigation example" style="margin-bottom: 50px; margin-left: 23px;">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>

  <footer>
    <div class="footer">
      <table class="tabel_footer">
        <tr>
          <td>
            <div>
              <div class="text_sosmed">
                <p>Get your tour dates seen everywhere. But we really hope you love us<3< /p>
              </div>
              <ul class="list_ul">
                <table>
                  <tr>
                    <td>
                      <li class="list" style="margin-left: 20px;"><a href="#" target="_blank" li>
                    </td>
                    <td>
                      <li class="list" style="margin-left: 20px;"><a href="#" target="_blank" li>
                    </td>
                    <td>
                      <li class="list" style="margin-left: 20px;"><a href="#" target="_blank" li>
                    </td>
                    <td>
                      <li class="list" style="margin-left: 20px;"><a href="#" target="_blank" li>
                    </td>
                    <td>
                      <li class="list" style="margin-left: 20px;"><a href="#" target="_blank" li>
                    </td>
                  </tr>
                </table>
              </ul>
            </div>
          </td>
          <td>
            <div class="sosmed">
              <div>
                <ul class="list">
                  <li class="list"><a href="#" class="link_footer" style="font-size: 13px;">Blog</a>
                  </li>
                  <li class="list"><a href="#" class="link_footer" style="font-size: 13px;">Jobs</a>
                  </li>
                  <li class="list"><a href="#" class="link_footer" style="font-size: 13px;">Support</a>
                  </li>
                  <li class="list"><a href="#" class="link_footer" style="font-size: 13px;">Festivals</a>
                  </li>
                </ul>
              </div>
          </td>
          <td>
            <div>
              <ul class="list">
                <li class="list"><a href="#" class="link_footer" style="font-size: 13px;"> Tourbox
                    artists</a></li>
                <li class="list"><a href="#" class="link_footer" style="font-size: 13px;">Term of us</a>
                </li>
                <li class="list"><a href="#" class="link_footer" style="font-size: 13px;">Most popular</a>
                </li>
                <li class="list"><a href="#" class="link_footer" style="font-size: 13px;">Security</a>
                </li>
              </ul>
            </div>
          </td>
          <td>
            <div class="news">
              <h4 class="">NEWS LETTER</h4>
              <p style="font-size: 15px;">For more festival information, please
              </p>
              <div class="">
                <div>
                  <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1"
                    class="input_news">
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div>
      <div class="copi">
        <p class="text_copi">????? 2022 - Cheria Rindang</p>
      </div>
    </div>
  </footer>
</body>

</html>
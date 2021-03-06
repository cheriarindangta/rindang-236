<!DOCTYPE html>
<html lang="en">

<head>
    <title>When We Were Young Festival</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    body {
        background-image: url('wallpaper.jpg');
        color: white;
    }

    .navbar {
        overflow: hidden;
        background-color: #333;
    }

    .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
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

    .navbar a:hover,
    .dropdown:hover .dropbtn {
        background-color: #FF5F00;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
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

    .card {
        box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover,
    a:hover {
        opacity: 0.7;
    }

    .line2 {
        height: 40px;
        background-color: #333;
        margin-bottom: 50px;
        margin-top: 50px;
    }

    footer {
        text-align: center;
        color: white;
        background-color: #333;
        padding: 15px 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        margin-top: 50px;
    }

    .content {
        background-color: rgb(88, 88, 88);
        padding: 15px;
        width: 300px;
        margin: 20px;
        border-radius: 10px;

    }

    .content_img {
        max-width: 200px;
        border-radius: 10px;
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
        max-width: 200px;
        border-radius: 50%;
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
</style>

<body>
    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="gallery.html">News</a>
        <div class="dropdown">
            <button class="dropbtn">Tickets
                <i class="subdropbtn"></i>
            </button>
            <div class="dropdown-content">
                <a href="regular.html">Regular</a>
                <a href="vip.html">VIP</a>
                <a href="vvipcabana.html">VVIP Cabana</a>
            </div>
        </div>
        <a href="../musiclist/music.html">Music List</a>
    </nav>

    <div>
        <center>
            <img src="homeheader.PNG" alt="Home Header">
        </center>
    </div>

    <h1 style="color: white; text-align: center; margin-top: 70px;">ORDER DETAILS</h1>
    <h2 style="color: #FF5F00; text-align: center;">ID : 10112345111</h2>
    <p style="text-align: center; margin-bottom: 30px;">One PAX Tickets - VVIP Cabana</p>

    <div>
        <table>
            <tr>
                <td>
                    <div>
                        <img src="1.jpg" alt="" class="content_img" style="text-align: center; margin-left: 70px; margin-right: 70px; border-radius: 50%;">
                    </div>
                </td>

                <td>
                    <div class="content">
                    <?php
                        if (isset($_POST['submit'])) {
                            echo '<ul>';
                            echo '<li>Name : ' . $_POST['nama'] . '</li>';
                            echo '<li>ID : ' . $_POST['nim'] . '</li>';
                            echo '<li>Email : ' . $_POST['email'] . '</li>';
                            echo '<li>Date of birth : ' . $_POST['date'] . '</li>';
                            echo '<li>Gender : ' . $_POST['jenis_kelamin'] . '</li>';
                            echo '<li>Ticket : ';
                            foreach ($_POST["hobby"] as $key => $hobby) {echo $hobby;}
                            echo '<li>Address : ' . $_POST['desc'] . '</li>';
                            echo '</ul>';
                        }?>
                    </div>
                </td>

                <td>
                    <div>
                        <h3 style="color: white; margin-left: 70px; margin-bottom: 70px;">VVIP Cabana - $12500</h3>
                        <h3 style="color: white; margin-left: 70px; margin-top: 30px;">WHEN WE WERE YOUNG FESTIVAL 2022</h3>
                        <h4 style="color: white; margin-left: 70px;">LAS VEGAS FESTIVAL GROUNDS</h4>
                        <h5 style="color: white; margin-left: 70px;">Published on : April 09, 2022</h5>
                    </div>
                </td>

                <td>
                    <div>
                        <img src="qr.png" alt="qr"
                            style="height: 200px; max-width: 170px; margin-left: 20px; margin-top: 15px;">
                    </div>
                </td>
            </tr>

        </table>

    </div>

    <div class="line2">
    </div>

    <h1 style="color: white; text-align: center;">DETAILS</h1>

    <div style="margin-left: 70px;">
        <dl>
            <h3 style="color: #FF5F00;">LOCATION & TIME TICKET EXCHANGES</h3>
            <dd style="color: white; margin-bottom: 40px;">- GATE VIP LAS VEGAS FESTIVAL GROUNDS - 05:00 til 09:00 PM
            </dd>
            <h3 style="color: #FF5F00;">HOW TO TICKET EXCHANGES?</h3>
            <dd style="color: white;">- Show the ticket that has been received via email to the officer in the field to
                scan the QR Code</dd>
            <dd style="color: white;">- Adjust the brightness level of the phone screen before showing the QR Code.
                After the QR Code has been successfully verified, the customer will get a wristband that can be used to
                enter the venue</dd>
            <dd style="color: white; margin-bottom: 40px;">- Customers MUST wear masks, bring personal hand sanitizers
                and comply with all
                health protocols during the event </dd>
            <h3 style="color: #FF5F00;">GENERAL INFORMATION</h3>
            <dd style="color: white;">- Prices include tax </dd>
            <dd style="color: white;">- The minimum age of the audience is 18 years</dd>
            <dd style="color: white;">- Tickets that have been purchased are non-refundable and non-refundable</dd>
            <dd style="color: white;">- Tickets that have been purchased cannot be rescheduled</dd>
            <dd style="color: white;">- Buyers are required to fill in personal data when ordering</dd>
        </dl>
    </div>
</body>
<footer>
    <div class="footer">
        <table class="tabel_footer">
            <tr>
                <td>
                    <div>
                        <div class="text_sosmed">
                            <p>Get your tour dates seen everywhere. But we really hope you love us<3</p>
                        </div>
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

</html>
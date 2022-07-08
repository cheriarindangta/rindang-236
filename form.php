<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>When We Were Young</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    body {
        background-image: url('wallpaper.jpg');
        color: white;
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

    .content {
            background-color: rgb(88, 88, 88);
            padding: 15px;
            width: 300px;
            margin: 20px;
            border-radius: 10px;

        }

        .content_img {
            max-width: 300px;
            height: 200px;
            border-radius: 10px;
        }

        .judul_content {
            margin-top: 6px;
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
        height: 200px;
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
</style>

<body>
    <div class="my-navbar">
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
    </div>
    <div>
        <center>
            <img src="homeheader.PNG" alt="Home Header" style="color: white;">
        </center>
    </div>

    <center>
    <h1 style="text-align:cente;">
        INPUT DATA
    </h1>
    </center>

    <center>
        <table>
            <tr>
                <td>
                    <div class="content">
                        <form action="outputForm.php" method="post">
                            <div class="row" style="margin-top: 10px">
                                <label>Name</label>
                                <br><input required type="text" name="nama"
                                    value="" />
                            </div><br>

                            <div class="row">
                                <label>ID</label>
                                <br><input required type="text" name="nim"
                                    value="" <br>
                            </div><br>

                            <div class="row">
                                <label>Email</label>
                                <br><input required type="text" name="email"
                                    value="" <br>
                            </div><br>

                            <div>
                                <label>Date of birth</label>
                                <br><input required type="date" name="date"/>
                            </div>

                            <div class="row">
                                <br><label>Gender</label>
                                <div class="options">
                                <input type="radio" name="jenis_kelamin" value="Perempuan" id="rating">
                                <label for="perempuan">Female</label> <br>
                                <input type="radio" name="jenis_kelamin" value="laki" id="rating">
                                <label for="laki">Male</label>
                                </div>
                            </div>
                            <div class="row">
                                <br><label>Tickets</label>
                                <div class="options">
                                <input type="checkbox" name="hobby[]" require value="Regular" id="rating">
                                <label for="hobi1">Regular</label> <br>
                                <input type="checkbox" name="hobby[]"  require value="VIP" id="rating">
                                <label for="hobi1">VIP</label> <br>
                                <input type="checkbox" name="hobby[]" value="VVIP Cabana" id="rating">
                                <label for="hobi1">VVIP Cabana</label>
                                </div>
                                </div>
                            
                            <div class="row">
                                <br><label>Addres</label>
                                <br><textarea required rows="4" cols="30" type="textarea" name="desc"
                                      value=""></textarea><br>
                            </div><br>

                            <br><div class="row">
                                <button type="submit" name="submit" style="margin-bottom: 30px">Submit</button>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</body>

<footer style="margin-top: 50px">
    <div class="footer">
        <table class="tabel_footer">
            <tr>
                <td>
                    <div>
                        <div class="text_sosmed">
                            <p>Get your tour dates seen everywhere. But we really hope you love us<3< /p>
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
            <p class="text_copi">©️ 2022 - Cheria Rindang</p>
        </div>
    </div>
</footer>

</html>
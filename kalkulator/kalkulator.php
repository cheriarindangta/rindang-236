<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>When We Were Young</title>
    <link rel="stylesheet" type="text/css" href="../kalkulator.css" />
    <link rel="stylesheet" href="kalkulator.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
</head>

<body>
<style>
    body{
        background-image: url('wallpaper.jpg');
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

footer {
            text-align: center;
            color: white;
            background-color: #333;
            padding: 15px 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-top: 50px;
        }

        .line {
            height: 40px;
            background-color: #333;
            margin-bottom: 50px;
            margin-top: 50px;
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

<nav class="navbar">
        <a href="../index.html">Home</a>
        <a href="../profile.html">Profile</a>
        <a href="../gallery.html">News</a>
        <a href="../kalkulator/kalkulator.php">Kalkulator</a>
        <div class="dropdown">
            <button class="dropbtn">Tickets
                <i class="subdropbtn"></i>
            </button>
            <div class="dropdown-content">
                <a href="../regular.html">Regular</a>
                <a href="../vip.html">VIP</a>
                <a href="../vvipcabana.html">VVIP Cabana</a>
            </div>
        </div>
        <a href="../musiclist/music.html">Music List</a>
    </nav>

    
<div style="margin-bottom: 40px">
        <center>
            <img src="homeheader.PNG" alt="Home Header">
        </center>
    </div>

    <div id="container">
            <div id="calculator">
                <div id="result">
                    <div id="history">
                        <p id="history-value"></p>
                    </div>
                    <div id="output">
                        <p id="output-values"></p>
                    </div>
                </div>
                <div id="keyboard">
                    <button class="operator" id="clear">C</button>
                    <button class="operator" id="backspace">CE</button>
                    <button class="operator" id="%">%</button>
                    <button class="operator" id="/">&#247;</button>
                    <button class="number" id="7">7</button>
                    <button class="number" id="8">8</button>
                    <button class="number" id="9">9</button>
                    <button class="operator" id="*">&times;</button>
                    <button class="number" id="4">4</button>
                    <button class="number" id="5">5</button>
                    <button class="number" id="6">6</button>
                    <button class="operator" id="-">-</button>
                    <button class="number" id="1">1</button>
                    <button class="number" id="2">2</button>
                    <button class="number" id="3">3</button>
                    <button class="operator" id="+">+</button>
                    <button class="empty" id="empty"></button>
                    <button class="number" id="0">0</button>
                    <button class="empty" id="empty"></button>
                    <button class="operator" id="=">=</button>
                </div>
            </div>
        </div>

<script src="./kalkulator.js"></script>
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
            <p class="text_copi">©️ 2022 - Cheria Rindang</p>
        </div>
    </div>
</footer>
</html>

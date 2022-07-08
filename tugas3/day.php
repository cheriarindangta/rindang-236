<?php
//trait
trait BookingTicket
{
  public function BookingTicket()
  {
    $vanue = new vanue;
    $nonton = "Saya membooking tiket festival {$vanue->showMusic()} yang menampilkan banyak band emo, salah satunya adalah {$vanue->showArtist()} yang merupakan band kesukaan saya";
    echo $nonton;
  }
}
trait Menonton
{
  public function Menonton()
  {
    $nonton = new vanue;
    $result = "Saya menonton festival {$nonton->showMusic()} dengan pacar saya";
    echo $result;
  }
}

class day
{
  use BookingTicket, Menonton;
}

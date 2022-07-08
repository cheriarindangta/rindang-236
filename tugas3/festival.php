<?php 
//PARENT
class festival
{
  public function bookingTicket()
  {
    $day = new day;
    $day->BookingTicket();
  }

  public function mulaiNonton()
  {
    $nonton = new day;
    $nonton->Menonton();
  }
}

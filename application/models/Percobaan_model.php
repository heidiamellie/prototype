<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Percobaan_model extends CI_model
{

  function __construct()
  {
    // code...
  }
  //CAMEL STYLE : hitungLuas
  //LUPA : HitungLuas
  public function HitungLuas($nilai1,$nilai2)
  {
    $luas = $nilai1*$nilai2; //HASIL
    return $luas; //kasihin ke kontroler
  }
  public function HitungKeliling($nilai1,$nilai2)
  {
    $keliling = 2*($nilai1+$nilai2);
    return $keliling;
  }

  public function empat($nilai1,  $nilai2)
  {
    $data['nilaisatu'] = $nilai1;
    $data['nilaidua'] = $nilai2;
    $data['luas'] = $this->HitungLuas($nilai1, $nilai2);
    $data['keliling'] = $this->HitungKeliling($nilai1, $nilai2);
    return $data;
  }
}


 ?>

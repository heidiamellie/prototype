<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Percobaan extends CI_Controller
{
#fungsi cosntruct itu buat ngelist model, library, helper apa aja yang dipake di kontroler ini
  function __construct()
  {
    parent::__construct();
    $this->load->model('percobaan_model'); //ketika dibutuhkan harus dicantumkan sesuai nama model
//    $this->load->helper('url');
  }

  public function dua()
  {
    echo 'apahayo';
  }

  public function tiga($nilai)
  {
    echo 'nilainya adalah '.$nilai;
  }
public function empat($nilai1,$nilai2)
{
 // echo 'nilai p adalah : '.$nilai1.'<br>'.'nilai l adalah : '.$nilai2 .'<br>';
 //  echo 'maka luasnya adalah :'.$this->percobaan_model->HitungLuas($nilai1,$nilai2);
// $data['nilaisatu'] = $nilai1;
// $data['nilaidua'] = $nilai2;
// $data['luas'] = $this->percobaan_model->HitungLuas($nilai1, $nilai2);
// $data['keliling']=$this->percobaan_model->HitungKeliling($nilai1,$nilai2);
//   $this->load->view('empat', $data);

  $this->load->view('empat', $this->percobaan_model->empat($nilai1, $nilai2));

}


}


 ?>

<?php
/**
 *summary
 */
class Beranda extends CI_Controller
{  
  public function index()
{
  $data['judul']='Halaman Beranda';
  $this->load->view('templates.php/header.php',$data);
  $this->load->view('Beranda/index',$data);
$this->load->view('templates.php/footer.php');
}
}
?>
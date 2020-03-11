<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->database();
      $this->load->model("login_model");
      $this->load->helper(array("url", "date"));
        date_default_timezone_set("Asia/Seoul");
      $this->load->library('session');
  }

  public function index()
  {

  }

  public function check()
  {
    $id=$this->input->post("id", TRUE);
    $pw=$this->input->post("pw", TRUE);

    $row=$this->login_model->getrow($id, $pw);
    if($row)
      {
        $data=array
        (
          "id"=>$row->id,
          "rank"=>$row->class
        );
        $this->session->set_userdata($data);
      }

      $this->load->view("main_header");
      $this->load->view("main");
      $this->load->view("main_footer");
  }

  public function logout()
  {
    $data=array("id", "pw");
    $this->session->unset_userdata($data);

    $this->load->view("main_header");
    $this->load->view("main");
    $this->load->view("main_footer");
  }
}

?>

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_model {

  public function getrow($id, $pw)
  {
      $sql="select * from account where id='$id' and pw='$pw'";
      return $this->db->query($sql)->row();
  }
}

?>

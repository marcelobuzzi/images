<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MImagenes extends CI_Model{

  // ------------------------------------------------------------------------------------------
  public function get($where = '') {
    if($where) $this->db->where($where);
    return $this->db->get('imagen')->result();
  }

  // ------------------------------------------------------------------------------------------
  public function add($data) {
    return $this->db->insert('imagen', $data);
  }

  // ------------------------------------------------------------------------------------------
  public function update($id, $data) {
    $this->db->where('imagen', $id);
    return $this->db->update('imagen', $data);
  }
}

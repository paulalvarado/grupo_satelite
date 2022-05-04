<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Materias_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Materias_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function get_materias()
  {
    return $this->db->get('mat_materia')->result();
  }
  
  public function set_materia($data)
  {
    $this->db->insert('mat_materia', $data);
  }
  
  public function edit_materia($data, $id)
  {
    $this->db->set($data);
    $this->db->where('mat_id', $id);
    $this->db->update('mat_materia');
  }

  public function delete($id)
  {
    $this->db->where('mat_id', $id);
    $this->db->delete('mat_materia');
    return $this->db->affected_rows();
  }
  

  // ------------------------------------------------------------------------

}

/* End of file Materias_model.php */
/* Location: ./application/models/Materias_model.php */
<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Grados_model
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

class Grados_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function get_grados()
  {
    $grados = $this->db->get('grd_grado')->result();
    foreach ($grados as $key => $value) {
      $grados[$key]->materias = $this->get_materiaxgrado($value->grd_id);
    }
    return $grados;
  }
  public function get_materiaxgrado($id)
  {
    $resultados = $this->db->query("SELECT mxg.mxg_id_mat, mat.mat_nombre FROM mxg_materiaxgrado AS mxg INNER JOIN mat_materia AS mat ON mxg.mxg_id_mat = mat.mat_id WHERE mxg.mxg_id_grd = $id;
    ")->result();
    $result = [];
    foreach ($resultados as $key => $value) {
      $result[] = [
        $value->mat_nombre,
        $value->mxg_id_mat
      ];
    }
    return $result;
  }
  public function get_materias()
  {
    return $this->db->get('mat_materia')->result();
  }
  public function set_grado($data)
  {
    $this->db->insert('grd_grado', $data);
    return $this->db->insert_id();
  }
  public function set_mat_x_grado($arr, $id)
  {
    foreach ($arr as $key => $value) {
      $this->db->set('mxg_id_grd', $id);
      $this->db->set('mxg_id_mat', $value);
      $this->db->insert('mxg_materiaxgrado');
    }
  }
  public function edit_mat_x_grado($arr, $id)
  {
    $this->db->where('mxg_id_grd', $id);
    $this->db->delete('mxg_materiaxgrado');
    foreach ($arr as $key => $value) {
      $this->db->set('mxg_id_grd', $id);
      $this->db->set('mxg_id_mat', $value);
      $this->db->insert('mxg_materiaxgrado');
    }
  }

  public function delete($id)
  {
    $this->db->where('mxg_id_grd', $id);
    $this->db->delete('mxg_materiaxgrado');
    
    $this->db->where('grd_id', $id);
    $this->db->delete('grd_grado');
    return $this->db->affected_rows();
  }

  // ------------------------------------------------------------------------

}

/* End of file Grados_model.php */
/* Location: ./application/models/Grados_model.php */
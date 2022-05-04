<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Alumnos_model
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

class Alumnos_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function get_alumnos()
  {
    $alumnos = $this->db->query('SELECT alm.alm_id, alm.alm_codigo, alm.alm_nombre, alm.alm_sexo, alm.alm_id_grd, grd.grd_nombre, alm.alm_observacion FROM alm_alumno AS alm INNER JOIN grd_grado AS grd ON alm.alm_id_grd = grd.grd_id')->result();
    foreach ($alumnos as $key => $value) {
      $alumnos[$key]->materias = $this->get_materiaxgrado($value->alm_id_grd);
    }
    return $alumnos;
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
  public function get_grados()
  {
    return $this->db->get('grd_grado')->result();
  }
  public function set_alumnos($data)
  {
    $this->db->insert('alm_alumno', $data);
  }
  public function edit_alumnos($data, $id)
  {
    $this->db->set($data);
    $this->db->where('alm_id', $id);
    $this->db->update('alm_alumno');
  }

  public function delete($id)
  {
    $this->db->where('alm_id', $id);
    $this->db->delete('alm_alumno');
    return $this->db->affected_rows();
  }

  // ------------------------------------------------------------------------

}

/* End of file Alumnos_model.php */
/* Location: ./application/models/Alumnos_model.php */
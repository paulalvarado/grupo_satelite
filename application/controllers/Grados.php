<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Grados
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Grados extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Grados_model');
  }

  public function index()
  {
    $data['page'] = 'grados/index';
    $data['titulo'] = 'Grados';
    $data['grados'] = $this->Grados_model->get_grados();
    $data['materias'] = $this->Grados_model->get_materias();
    $this->load->view('template/content', $data);
  }

  public function guardar_grado()
  {
    $data = [];
    if (isset($_POST['nombre'])) {
      $data['grd_nombre'] = trim($_POST['nombre']);
    } else {
      echo false;
      die();
    }
    
    $id = $this->Grados_model->set_grado($data);

    if (isset($_POST['materias'])) {
      $data['materias'] = $_POST['materias'];
    } else {
      echo false;
      die();
    }

    $this->Grados_model->set_mat_x_grado($data['materias'], $id);

    echo true;
  }

  public function edit_grado()
  {
    $data = [];
    if (isset($_POST['nombre'])) {
      $data['grd_nombre'] = trim($_POST['nombre']);
    } else {
      echo false;
      die();
    }
    
    if (isset($_POST['id'])) {
      $data['grd_id'] = trim($_POST['id']);
    } else {
      echo false;
      die();
    }

    if (isset($_POST['materias'])) {
      $data['materias'] = $_POST['materias'];
    } else {
      echo false;
      die();
    }

    $this->Grados_model->edit_mat_x_grado($data['materias'], $data['grd_id']);

    echo true;
  }

  public function delete(){
    if (isset($_POST['id'])) {
      echo $this->Grados_model->delete((int)$_POST['id']);
    }else{
      echo 0;
    }
  }
}


/* End of file Grados.php */
/* Location: ./application/controllers/Grados.php */
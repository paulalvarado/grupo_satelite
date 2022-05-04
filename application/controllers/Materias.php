<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Materias
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

class Materias extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Materias_model');
  }

  public function index()
  {
    $data['page'] = 'materias/index';
    $data['titulo'] = 'Materias';
    $data['materias'] = $this->Materias_model->get_materias();
    $this->load->view('template/content', $data);
  }

  public function guardar_materia()
  {
    $data = [];
    if (isset($_POST['nombre'])) {
      $data['mat_nombre'] = trim($_POST['nombre']);
    } else {
      echo false;
      die();
    }

    $this->Materias_model->set_materia($data);

    echo true;
  }

  public function editar_materia()
  {
    $data = [];
    if (isset($_POST['nombre'])) {
      $data['mat_nombre'] = trim($_POST['nombre']);
    } else {
      echo false;
      die();
    }
    if (isset($_POST['id'])) {
      $data['mat_id'] = trim($_POST['id']);
    } else {
      echo false;
      die();
    }

    $this->Materias_model->edit_materia($data, $data['mat_id']);

    echo true;
  }

  public function delete(){
    if (isset($_POST['id'])) {
      echo $this->Materias_model->delete((int)$_POST['id']);
    }else{
      echo 0;
    }
  }
}


/* End of file Materias.php */
/* Location: ./application/controllers/Materias.php */
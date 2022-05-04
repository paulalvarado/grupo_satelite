<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Alumnos_model');
  }

  public function index()
  {
    $data['page'] = 'home/index';
    $data['titulo'] = 'Inicio';
    $data['alumnos'] = $this->Alumnos_model->get_alumnos();
    $data['grados'] = $this->Alumnos_model->get_grados();
    $this->load->view('template/content', $data);
  }

  public function guardar_alumno()
  {
    $data = [];
    if (isset($_POST['nombre'])) {
      $data['alm_nombre'] = trim($_POST['nombre']);
    } else {
      echo false;
      die();
    }

    if (isset($_POST['codigo'])) {
      $data['alm_codigo'] = trim($_POST['codigo']);
    } else {
      echo false;
      die();
    }

    if (isset($_POST['genero'])) {
      $data['alm_sexo'] = trim($_POST['genero']);
    } else {
      echo false;
      die();
    }

    if (isset($_POST['grado'])) {
      $data['alm_id_grd'] = (int)$_POST['grado'];
    } else {
      echo false;
      die();
    }

    if (isset($_POST['observacion'])) {
      $data['alm_observacion'] = trim($_POST['observacion']);
    } else {
      echo false;
      die();
    }

    $this->Alumnos_model->set_alumnos($data);

    echo true;
  }

  public function edit_alumno()
  {
    $data = [];
    if (isset($_POST['id'])) {
      $data['alm_id'] = trim($_POST['id']);
    } else {
      echo false;
      die();
    }

    if (isset($_POST['nombre'])) {
      $data['alm_nombre'] = trim($_POST['nombre']);
    } else {
      echo false;
      die();
    }

    if (isset($_POST['codigo'])) {
      $data['alm_codigo'] = trim($_POST['codigo']);
    } else {
      echo false;
      die();
    }

    if (isset($_POST['genero'])) {
      $data['alm_sexo'] = trim($_POST['genero']);
    } else {
      echo false;
      die();
    }

    if (isset($_POST['grado'])) {
      $data['alm_id_grd'] = (int)$_POST['grado'];
    } else {
      echo false;
      die();
    }

    if (isset($_POST['observacion'])) {
      $data['alm_observacion'] = trim($_POST['observacion']);
    } else {
      echo false;
      die();
    }

    $this->Alumnos_model->edit_alumnos($data, $data['alm_id']);

    echo true;
  }

  public function delete(){
    if (isset($_POST['id'])) {
      echo $this->Alumnos_model->delete((int)$_POST['id']);
    }else{
      echo 0;
    }
  }
}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
<div class="container h-100 mt-5">
    <div class="row p-0 m-0">
        <div class="col-12 my-4">
            <h1><?= $titulo ?></h1>
        </div>
        <div class="col-12 col-lg-4">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Nuevo registro</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Editar alumno</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form class="shadow w-100 card p-3 needs-validation" novalidate id="register">
                        <div class="row p-0 m-0 mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                            <div class="valid-feedback">
                                ¡Listo!
                            </div>
                            <div class="invalid-feedback">
                                Completar este campo.
                            </div>
                        </div>
                        <div class="row p-0 m-0 mb-3">
                            <label for="codigo">Código</label>
                            <input type="text" name="codigo" id="codigo" class="form-control" required>
                            <div class="valid-feedback">
                                ¡Listo!
                            </div>
                            <div class="invalid-feedback">
                                Completar este campo.
                            </div>
                        </div>
                        <div class="row p-0 m-0 mb-3">
                            <label for="codigo">Sexo</label>
                            <div class="flex align-items-center justify-content-between">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="mujer">Mujer</label>
                                        <input type="radio" name="genero" id="mujer" value="mujer" checked>
                                    </div>
                                    <div class="col-4">
                                        <label for="hombre">Hombre</label>
                                        <input type="radio" name="genero" id="hombre" value="hombre">
                                    </div>
                                    <div class="col-4">
                                        <label for="otro">Otro</label>
                                        <input type="radio" name="genero" id="otro" value="otro">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0 mb-3">
                            <label for="grado">Grado</label>
                            <select name="grado" id="" class="select">
                                <?php foreach ($grados as $key => $value) : ?>
                                    <option <?= ($key == 0) ? 'selected' : '' ?> value="<?= $value->grd_id ?>"><?= $value->grd_nombre ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="row p-0 m-0 mb-3">
                            <label for="observacion">Observaciones</label>
                            <textarea name="observacion" id="observacion" cols="10" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="row p-0 m-0 mb-3">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <form class="shadow w-100 card p-3 needs-validation" novalidate id="edit">
                        <input type="hidden" name="id" value="">
                        <div class="row p-0 m-0 mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                            <div class="valid-feedback">
                                ¡Listo!
                            </div>
                            <div class="invalid-feedback">
                                Completar este campo.
                            </div>
                        </div>
                        <div class="row p-0 m-0 mb-3">
                            <label for="codigo">Código</label>
                            <input type="text" name="codigo" id="codigo" class="form-control" required>
                            <div class="valid-feedback">
                                ¡Listo!
                            </div>
                            <div class="invalid-feedback">
                                Completar este campo.
                            </div>
                        </div>
                        <div class="row p-0 m-0 mb-3">
                            <label for="codigo">Sexo</label>
                            <div class="flex align-items-center justify-content-between">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="mujer">Mujer</label>
                                        <input type="radio" name="genero" id="mujer" value="mujer" checked>
                                    </div>
                                    <div class="col-4">
                                        <label for="hombre">Hombre</label>
                                        <input type="radio" name="genero" id="hombre" value="hombre">
                                    </div>
                                    <div class="col-4">
                                        <label for="otro">Otro</label>
                                        <input type="radio" name="genero" id="otro" value="otro">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-0 m-0 mb-3">
                            <label for="grado">Grado</label>
                            <select name="grado" id="" class="select">
                                <?php foreach ($grados as $key => $value) : ?>
                                    <option <?= ($key == 0) ? 'selected' : '' ?> value="<?= $value->grd_id ?>"><?= $value->grd_nombre ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="row p-0 m-0 mb-3">
                            <label for="observacion">Observaciones</label>
                            <textarea name="observacion" id="observacion" cols="10" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="row p-0 m-0 mb-3">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8">
            <div class="table-responsive card p-3">
                <table class="table table-hover m-0">
                    <thead>
                        <th>#</th>
                        <th>Alumno</th>
                        <th>Grado</th>
                        <th>Materias</th>
                        <th>Acción</th>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $key => $value) : ?>
                            <tr role="button" tabindex="0" onclick='edit(<?= json_encode($value) ?>)'>
                                <td><?= $value->alm_id ?></td>
                                <td><?= $value->alm_nombre ?></td>
                                <td><?= $value->grd_nombre ?></td>
                                <td>
                                    <?php
                                    foreach ($value->materias as $k => $v) {
                                        echo $v[0];
                                        if ((count($value->materias) - 1) != $k) {
                                            echo ', ';
                                        }
                                    }
                                    ?>
                                </td>
                                <td><button class="btn btn-danger" onclick='delete_item(<?= $value->alm_id ?>)'><i class="fa-solid fa-trash-can"></i></button></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Alumno</th>
                            <th>Grado</th>
                            <th>Materias</th>
                            <th>Acción</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function edit(data) {
        $('#pills-profile-tab').click()
        $('#edit input[name="id"]').val(data.alm_id)
        $('#edit input[name="nombre"]').val(data.alm_nombre)
        $('#edit input[name="codigo"]').val(data.alm_codigo)
        $('#edit input#' + data.alm_sexo).iCheck('check')
        $('#edit select[name="grado"]').val(data.alm_id_grd);
        $('#edit select[name="grado"]').select2({
            theme: 'bootstrap-5'
        }).trigger('change');
        $('#edit textarea[name="observacion"]').val(data.alm_observacion)
        console.log(data);
    }

    function delete_item(id) {
        Swal.fire({
            title: '¿Deseas eliminar este alumno?',
            showDenyButton: true,
            confirmButtonText: 'Eliminar',
            denyButtonText: `No eliminar`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $.post('<?= base_url() ?>home/delete', {
                    id: id
                }).done(function(data) {
                    if (data != 0 && data != -1) {
                        Swal.fire('¡Eliminado!', '', 'success')
                        setTimeout(function() {
                            location.reload();
                        }, 1000)
                    } else {
                        Swal.fire('¡NO se pudo eliminar el alumno!', '', 'danger')
                        setTimeout(function() {
                            location.reload();
                        }, 1000)
                    }
                })
            } else if (result.isDenied) {
                Swal.fire('Operación cancelada', '', 'info')
            }
        })
        console.log(id)
    }
    $(document).ready(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square',
            radioClass: 'iradio_square',
            increaseArea: '20%' // optional
        });
        $('#register .select').select2({
            theme: 'bootstrap-5'
        });
        $('#edit .select').select2({
            theme: 'bootstrap-5'
        });
        $('table').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "language": {
                url: '<?= base_url() ?>assets/json/datatables_spanish.json'
            }
        });


        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('#register')
            var forms_edit = document.querySelectorAll('#edit')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        event.preventDefault();

                        $.post('<?= base_url() ?>/home/guardar_alumno', {
                            nombre: $('form#register input[name="nombre"]').val(),
                            codigo: $('form#register input[name="codigo"]').val(),
                            genero: $('form#register input[name="genero"]:checked').val(),
                            grado: $('form#register select option:selected').val(),
                            observacion: $('form#register textarea[name="observacion"]').val(),
                        }).done(function(data) {
                            if (data != false) {
                                Swal.fire({
                                    icon: 'success',
                                    title: '¡Nuevo registro!',
                                    text: 'El alumno ha sido registrado!',
                                    confirmButtonText: 'Ok',
                                }).then((result) => {
                                    /* Read more about isConfirmed, isDenied below */
                                    if (result.isConfirmed) {
                                        location.reload();
                                    } else if (
                                        // Read more about handling dismissals
                                        result.dismiss === Swal.DismissReason.backdrop
                                    ) {
                                        location.reload();
                                    }
                                })
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: '¡Error!',
                                    text: 'El alumno no ha sido registrado!'
                                })
                            }
                            console.log(JSON.parse(data))
                        })
                        form.classList.add('was-validated')
                    }, false)
                })
            Array.prototype.slice.call(forms_edit)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        event.preventDefault();

                        $.post('<?= base_url() ?>home/edit_alumno', {
                            id: $('form#edit input[name="id"]').val(),
                            nombre: $('form#edit input[name="nombre"]').val(),
                            codigo: $('form#edit input[name="codigo"]').val(),
                            genero: $('form#edit input[name="genero"]:checked').val(),
                            grado: $('form#edit select option:selected').val(),
                            observacion: $('form#edit textarea[name="observacion"]').val(),
                        }).done(function(data) {
                            if (data != false) {
                                Swal.fire({
                                    icon: 'success',
                                    title: '¡Registro editado!',
                                    text: 'El alumno ha sido editado!',
                                    confirmButtonText: 'Ok',
                                }).then((result) => {
                                    /* Read more about isConfirmed, isDenied below */
                                    if (result.isConfirmed) {
                                        location.reload();
                                    } else if (
                                        // Read more about handling dismissals
                                        result.dismiss === Swal.DismissReason.backdrop
                                    ) {
                                        location.reload();
                                    }
                                })
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: '¡Error!',
                                    text: 'El alumno no ha sido editado!'
                                })
                            }
                            console.log(JSON.parse(data))
                        })
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    });
</script>
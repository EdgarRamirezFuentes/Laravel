<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="{{ asset('/css/global.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <main>
        <h1 class="text-center">Formulario de registro</h1>
        <h2 class="text-center">Edgar Alejandro Ramírez Fuentes</h2>
        <section class="container">
            <article class="row justify-content-center">
                <form action="{{ route('form.validate') }}" method="post" class="w-50" id="register-form">
                    @csrf
                    <div class="container d-flex justify-content-center align-items-center flex-column">
                        <label for="nombre" class="mt-3">Nombre <span class="error ml-3">*</span></label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                        <label for="primer_apellido" class="mt-3">Primer apellido <span class="error ml-3">*</span></label>
                        <input type="text" name="primer_apellido" id="primer_apellido" class="form-control">
                        <label for="segundo_apellido" class="mt-3">Segundo apellido <span class="error ml-3">*</span></label>
                        <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control">
                        <label for="alias" class="mt-3">Alias</label>
                        <input type="text" name="alias" id="alias" class="form-control">
                        <div class="d-flex w-100">
                            <div class="d-flex align-items-center  mt-3 justify-content-between flex-column col-6">
                                <label for="gerero_h" class="mb-3">G&eacute;nero <span class="error ml-3">*</span></label>
                                <div class="d-flex flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genero" id="genero_h" value="H"
                                            checked>
                                        <label class="form-check-label" for="genero_h">
                                            Hombre
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genero" id="genero_m" value='M'>
                                        <label class="form-check-label" for="genero_m">
                                            Mujer
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="genero" id="genero_o" value="O">
                                        <label class="form-check-label" for="genero_o">
                                            Otro
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 align-items-center justify-content-center d-flex flex-column">
                                <label for="fecha_nac" class="mt-3">Fecha nacimiento <span class="error ml-3">*</span></label>
                                <input type="date" class="form-control" name="fecha_nac" id="fecha_nac">
                            </div>
                        </div>
                        <label for="pass" class="mt-3">Contrase&ntilde;a <span class="error ml-3">*</span></label>
                        <input class="form-control"  type="password" name="pass" id="pass" >
                        <label for="pass" class="mt-3">Confirma tu Contrase&ntilde;a <span class="error ml-3">*</span></label>
                        <input class="form-control"  type="password" name="pass_confirmation" id="pass_confirmation" >
                        <button id="btn-submit" class="btn btn-primary my-3">Registrar alumno</button>
                    </div>
                </form>
            </article>
        </section>
    </main>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- jQuery Validate -->
    <script src="{{ asset('js/jquery_validate.js') }}"></script>
    <!-- Forms validation script -->
    <script src="{{ asset('js/form_validation.js') }}"></script>
    <!-- Sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>
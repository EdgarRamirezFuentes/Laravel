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
        @if (session('error'))
            <script>show_message("error", "{{ session('error') }}");</script>
        @endif
        <section class="container">
            <article class="row justify-content-center">
                <form action="{{ route('form.validate') }}" method="post" class="w-50" id="register-form">
                    @csrf
                    <div class="container d-flex justify-content-center align-items-center flex-column">
                        <label for="name" class="mt-3">Name <span class="error ml-3">*</span></label>
                        <input type="text" name="name" id="name" class="form-control">
                        <label for="publisher" class="mt-3">Publisher <span class="error ml-3">*</span></label>
                        <input type="text" name="publisher" id="publisher" class="form-control">
                        <label for="genre" class="mt-3">Genre <span class="error ml-3">*</span></label>
                        <input type="text" name="genre" id="genre" class="form-control">
                        <div class="d-flex w-50">
                            <div class="w-100 align-items-center justify-content-center d-flex flex-column">
                                <label for="release" class="mt-3">Release <span class="error ml-3">*</span></label>
                                <input type="date" class="form-control" name="release" id="release">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between w-50 my-5">
                        <button id="btn-submit" class="btn btn-primary">Register videogame</button>
                        <a href="{{ route('form.index') }}" class="btn btn-secondary">Back</a>
                        </div>
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
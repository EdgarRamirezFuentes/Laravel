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

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- jQuery Validate -->
    <script src="{{ asset('js/jquery_validate.js') }}"></script>
    <!-- Forms validation script -->
    <script src="{{ asset('js/form_validation.js') }}"></script>
    <!-- Alerts script -->
    <script src="{{ asset('js/alerts.js') }}"></script>
    <!-- Sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>
<body>
    <main>
        <h1 class="text-center">Index page</h1>
        <h2 class="text-center">Edgar Alejandro Ramírez Fuentes</h2>
        <section class="container">
            <article class="row justify-content-center">
                @if (session('success'))
                    <script>show_message("success", "{{ session('success') }}");</script>
                @endif
                <div class="row mt-5 justify-content-center align-items-center flex-column">
                    <a href="{{ route('form.register') }}" class="btn btn-primary col-6 my-5">Register videogame</a>
                    <a href="{{ route('form.showData') }}" class="btn btn-primary col-6">See videogames</a>
                </div>
            </article>
        </section>
    </main>
</body>
</html>
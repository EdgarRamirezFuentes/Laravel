<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos enviados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1 class="my-5 text-center">Datos ingresados</h1>
        <section class="row">
            <article class="col-12">
                <table class="table table-dark w-100">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Nombre(s)</th>
                            <th scope="col" class="text-center">Primer apellido</th>
                            <th scope="col" class="text-center">Segundo apellido</th>
                            <th scope="col" class="text-center">Alias</th>
                            <th scope="col" class="text-center">G&eacute;nero</th>
                            <th scope="col" class="text-center">Fecha de nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="text-center">{{ session('data')['nombre'] }}</td>
                            <td class="text-center">{{ session('data')['primer_apellido'] }}</td>
                            <td class="text-center">{{ session('data')['segundo_apellido'] }}</td>
                            @if(session('data')['alias'])
                                <td class="text-center">{{ session('data')['alias'] }}</td>
                            @else
                            <td class="text-center">N/A</td>
                            @endif
                            <td class="text-center">{{ session('data')['genero'] }}</td>
                            <td class="text-center">{{ session('data')['fecha_nac'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </article>
        </section>
    </main>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

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
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Publisher</th>
                            <th scope="col" class="text-center">Release</th>
                            <th scope="col" class="text-center">Genre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videogames as $videogame)
                            <tr>
                                <th scope="row">{{ $videogame->id }}</th>
                                <td class="text-center">{{ $videogame->name}}</td>
                                <td class="text-center">{{ $videogame->publisher }}</td>
                                <td class="text-center">{{ $videogame->release }}</td>
                                <td class="text-center">{{ $videogame->genre}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $videogames->links() }}
                <a href="{{ route('form.index') }}" class="btn btn-secondary">Back</a>
            </article>
        </section>
    </main>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

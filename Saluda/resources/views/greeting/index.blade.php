<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ram&iacute;rez Fuentes Edgar Alejandro">
    <title>Saluda</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
</head>
<body>
    <div class="main container">
        <article class="row justify-content-center p-4">
            <h1 class="text-center">Formulario para saludos!</h1>
            <form action="{{ route('greeting.validate') }}" method="POST" class="col-6 my-5">
                @csrf
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre para saludarte" name="name">
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Saludar!" class="btn btn-primary w-50 mt-3">
                </div>
            </form>
        </article>
        <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Alta de peliculas</h1>
            </div>
        </div>
        <div class="row">
            <form method="post" action="{{ route('movies.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input value="{{ old('name') }}" type="text" class="form-control" name="name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Categoria</label>
                    <input value="{{ old('category') }}" type="text" class="form-control" name="category">
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de lanzamiento</label>
                    <input value="{{ old('realize_date') }}" type="date" class="form-control" name="realize_date">
                </div>

                <div class="mb-3">
                    <label class="form-label">Director</label>
                    <input value="{{ old('director') }}" type="text" class="form-control" name="director">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success btn-outline"> Guardar</button>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-sm-6">
                @if(count($errors) > 0)
                    @foreach ($errors->all() as $message)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <li>{{ $message }}</li>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif
            </div> 
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

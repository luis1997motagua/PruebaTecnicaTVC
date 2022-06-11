<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/ico" href="{!!asset('img/newspaper.ico')!!}" type="favicon">
    <title>Google Noticias</title>
</head>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('index.index')}}"><img src="{!! asset('img/Google_logo_(2010-2013).png') !!}" style="width: 70px;"> Noticias
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"><i class="bi bi-newspaper"></i> Noticias destacadas
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="bi bi-caret-up-fill"></i> Para ti</a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="bi bi-star-fill"></i> Siguiendo</a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <i class="bi bi-search-heart-fill"></i> Busquedas guardadas</a>
           
          </li>
        
        </ul>
      </nav>
<body>
   <div class="row">
     <div class="col-lx-12">
       <div class="table-responsive">
           <table class="table table-striped">
              <thead>
                <tr>
                 <th>Opciones</th>
                 <th>ID</th>
                 <th>Titulo</th>
                 <th>Descripcion</th>
                 <th>Url Image</th>
                </tr>
              </thead>
              <tbody>
                @foreach($noticias as $notice)
                 <tr>
                    <td><a href="{{route('news.index',$notice->Id)}}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{route('listnews.destroy',$notice->Id)}}" method="post">
                       @csrf
                       @method('DELETE')
                    
                       <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                    </form>
                    </td>
                    <td>{{$notice->Id}}</td>
                    <td>{{$notice->Titulo}}</td>
                    <td>{{$notice->Descripcion}}</td>
                    <td>{{$notice->urlImage}}</td>
                 </tr>
                 @endforeach
              </tbody>
           </table>
       </div>
     </div>
   </div>    
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- icon  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{-- style  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-transparant fixed-top text-coklat" id="navbar" style="transition: 0.7s">
      <div class="container">
        <h1 style="font-family: 'Caveat', cursive; font-weight:600;">Adnan Portofolio</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-nav" id="navbarNavAltMarkup">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title fs-1" id="offcanvasNavbarLabel" style="font-family: 'Caveat', cursive; font-weight:600;">Navigation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class="navbar-nav d-flex gap-4 p-2 fw5 ms-auto">
              <a class="nav-link aktif" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#about">About Me</a>
              <a class="nav-link" href="#">Study</a>
              <a class="nav-link" href="#">Experience</a>
              <a class="nav-link" href="#">Project</a>
              <a class="nav-link" href="#">Skills</a>
              <a class="nav-link" href="#">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    {{-- end navbar --}}

    @yield('content')

    <div class="contact bg-coklat py-5 text-white">
      <div class="container">
        <div class="row px-3">
          <div class="col-sm-12 col-md-7">
            <img src="{{ asset('assets/author.png') }}" class="me-4" width="100px" style="border-radius: 50%; float:left;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa incidunt minus quibusdam doloremque cumque, quae repellat quod ipsa quaerat optio nemo officiis molestias, dolorum magnam. Odit, facilis eos? Quod nobis aperiam odio quaerat est. Doloribus amet aliquam placeat provident esse sint, explicabo accusamus possimus, nostrum mollitia sapiente laboriosam voluptates. Porro odit, labore adipisci quae officiis tempora numquam, voluptatem, excepturi obcaecati nisi quia vel tenetur? Est numquam dolor harum molestias ratione.</p>
          </div>
          <div class="col">
            <strong>Navigasi</strong>
            <div class="navbar-nav d-flex ms-auto">
              <a class="nav-link" href="#about">About Me</a>
              <a class="nav-link" href="#">Study</a>
              <a class="nav-link" href="#">Experience</a>
              <a class="nav-link" href="#">Project</a>
              <a class="nav-link" href="#">Skills</a>
            </div>
          </div>
          <div class="col">
            <strong>Links</strong>
            <div class="navbar-nav d-flex ms-auto">
              <a class="nav-link" href="https://www.linkedin.com/in/adnan-ega-maulana" target="_blank">Linked In</a>
              <a class="nav-link" href="https://www.instagram.com/adnangandul" target="_blank">Instagram</a>
              <a class="nav-link" href="https://www.github.com/Adnan394" target="_blank">Github</a>
              <a class="nav-link" href="https://www.adnangandul.com" target="_blank">Website</a>
              <a class="nav-link" href="mailto:adnanega82@gmail.com" target="_blank">Email</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-abu p-5 d-flex justify-content-center align-items-center">
      <strong class="text-center text-coklat">Copyright &copy by Adnan Ega Maulana. All Reverse</strong>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
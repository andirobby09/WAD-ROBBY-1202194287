<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Modul 5 | {{ $title }}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" >
        <div class="container justify-content-center">
            <div class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? ' fw-bold active' : '' }}" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Vaccine") ? 'fw-bold active' : ''}}" href="/vaksin">VACCINE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Pasien") ? 'fw-bold  active' : '' }}" href="/pasien">PATIENT</a>
                </li>
            </div>
          </div>
        </div>
      </nav>

      <div>
        @yield('container')
      </div>

      <!--Modal Footer-->
        <div class="modal fade" id="modalfooter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kesan Pesan Praktikum</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Kesan: Selama mengikuti praktikum saya senang, karena bisa belajar banyak tentang php dan laravel</p>
                        <p>Pesan: Semoga kakak-kakak asisten sehat salu</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="fixed-bottom text-center">
            <a type="button" data-bs-toggle="modal" data-bs-target="#modalfooter" href="" style="text-decoration: none; color:black;">
            Made with <i class="bi bi-heart-fill text-primary"></i> Andi Robby Awaluddin - 1202194287</a>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
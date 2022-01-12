<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>My Portofolio l Muhammad Ilham Prayogi</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: rgb(114, 226, 226)">
      <div class="container">
        <a class="navbar-brand" href="#">Muh.Ilham Prayogi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/IMG_20211210_195700.jpg" alt="Ilham Prayogi" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Muhammad Ilham Prayogi</h1>
      <p class="lead">Student</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,32L240,128L480,128L720,192L960,256L1200,288L1440,32L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>I am a Student of University HaluOleo Kendari, Department of teknik Informatics, Class of 2020</p>
          </div>
          <div class="col-md-4">
            <p>My daily activities are sports but besides that my hobbyis also playing guitar and making website design</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,128L288,224L576,288L864,256L1152,96L1440,128L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir About -->

    <!-- Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Gallery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Gallery/1.jpg" class="card-img-top" alt="Gallery 1" />
              <div class="card-body">
                <p class="card-text">About the Picture Of My Self.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Gallery/2.jpg" class="card-img-top" alt="Gallery 2" />
              <div class="card-body">
                <p class="card-text">About the Picture Of My Self.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Gallery/3.jpg" class="card-img-top" alt="Gallery 3" />
              <div class="card-body">
                <p class="card-text">About the Picture Of My Self.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Gallery/4.jpg" class="card-img-top" alt="Gallery 4" />
              <div class="card-body">
                <p class="card-text">About the Picture Of My Self.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Gallery/5.jpg" class="card-img-top" alt="Gallery 5" />
              <div class="card-body">
                <p class="card-text">About the Picture Of My Self.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,96L288,256L576,128L864,96L1152,256L1440,256L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Gallery -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Thank You!</strong> I have received your message.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form name="contact-web-form">
              <div class="mb-3">
                <label for="Name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
              </div>
              <div class="mb-3">
                <label for="Pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="Pesan" rows="3" name="pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>

              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact-->

    <!-- Footer -->
    <footer class="text-white text-center pb-5" style="background-color: rgb(114, 226, 226)">
      <p>Created With <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/muh.ilhamprayogi/" class="text-black-50 fw-bold">Muh. Ilham Prayogi</a></p>
    </footer>
    <!-- Akhir Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbwHRw_GxEyxp6RjCp8r3lwICDlu0vVeiEyXQlPTGS8aONpQYyBxv4IyrAPK8FHi-otBYQ/exec';
      const form = document.forms['contact-web-form'];
      const btnKirim = document.querySelector('.btn-kirim');
      const btnLoading = document.querySelector('.btn-loading');
      const myAlert = document.querySelector('.my-alert');

      form.addEventListener('submit', (e) => {
        e.preventDefault();

        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
          .then((response) => {
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            myAlert.classList.toggle('d-none');
            console.log('Success!', response);
            form.reset();
          })
          .catch((error) => console.error('Error!', error.message));
      });
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <title>Registrasi</title>
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Registrasi</h2>
              <form>
              <div class="form-outline">
                <label class="form-label" for="form3Example1cg">Masukkan Email</label>
                  <input type="text" id="email" class="form-control form-control-lg" />
                </div>
                <div class="form-outline">
                <label class="form-label" for="form3Example1cg">Masukkan Username</label>
                  <input type="text" id="username" class="form-control form-control-lg" />
                </div>
                <div class="form-outline">
                <label class="form-label" for="form3Example3cg">Masukkan Password</label>
                  <input type="password" id="password" class="form-control form-control-lg" />
                </div>

                <div class="form-outline">
                <label class="form-label" for="form3Example4cg">Konfirmasi Password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                <div class="row">
                    <div class="col-12">
                    <label class="form-label" for="form3Example4cg">Pilih seksi bidang</label><br>
                    <select class="select form-control-lg">
                    <option value="1">Admin</option>
                    <option value="2">Manajemen Barang</option>
                    <option value="3">Manajemen Produksi</option>
                  </select>
                    </div>
                </div>
                </div>
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>
                <p class="text-center text-muted mt-4 mb-0">Have already an account? <a href="login"
                    class="fw-bold text-body"><u>Login here</u></a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
@include('front.include.head')

<body>

@include('front.include.menu')

<div class="daftar">
  <div class="container">
    <div class="title text-center">
      <h1 sty>Registrasi</h1>
      <p>Mohon isi lengkap data data Anda di form di bawah ini </p>
    </div>

      <form action="" name="" role="form" class="form-daftar">
          <div class="col-lg-6">
            <div class = "form-group">
              <label for = "name">Nama Pengantin Pria</label>
              <input type = "text" class = "form-control" id = "pria" placeholder = "Enter Name">
            </div>
          </div>

          <div class="col-lg-6">
            <div class = "form-group">
              <label for = "name">Nama Pengantin Wanita</label>
              <input type = "text" class = "form-control" id = "wanita" placeholder = "Enter Name">
            </div>
          </div>

          <div class="col-lg-6">
            <div class = "form-group">
              <label for = "name">Tanggal Akad Nikah</label>
              <input type = "text" class = "form-control" id = "akad" placeholder = "Enter Date">
            </div>
          </div>

          <div class="col-lg-6">
            <div class = "form-group">
              <label for = "name">Tanggal Resepsi Pernikahan</label>
              <input type = "text" class = "form-control" id = "resepsi" placeholder = "Enter Date">
            </div>
          </div>

          <div class="col-lg-6">
            <div class = "form-group">
              <label for = "name">Pilih Tema</label>

              <select class = "form-control">
                 <option>Tema 1</option>
                 <option>Tema 2</option>
                 <option>Tema 3</option>
                 <option>Tema 4</option>
                 <option>Tema 5</option>
              </select>
            </div>
          </div>

          <div class="col-lg-6">
            <div class = "form-group">
              <label for = "name">Pilih Custom</label>

              <select class = "form-control">
                 <option>Custom 1</option>
                 <option>Custom 2</option>
                 <option>Custom 3</option>
                 <option>Custom 4</option>
                 <option>Custom 5</option>
              </select>
            </div>
          </div>

          <div class="col-lg-12 text-center">
            <button type="submit" value="daftar">Daftar</button>
          </div>

          <div class="clearfix"></div>

      </form>
    </div>
  </div>

  @include('front.include.ourwork')

  @include('front.include.footer')

  </body>
  </html>

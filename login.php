<div class="row mt-3">
  <div class="col-md-4 offset-md-4">
   <div class="card">
     <div class="card-header">
      LOGIN
  </div>

  <style>
        /*untuk teks heading di tag <body>*/
        h2
        {
            background-color: white;
            color: crimson;
            font-family: sans-serif;
            text-align: center;
            width: 45%;
            margin:auto;
            padding: 20px;
        }
 
        body
        {
            background-image: url('assets1/img/hero-img.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
  <div class="card-body">
    <form action="config/aksi_login.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Login Sebagai</label>
        <select class="form-control" name="level">
          <option value="masyarakat">Masyarakat</option>
          <option value="petugas">Petugas</option>
          <option value="admin">Admin</option>
        </select>
        </div>
       <div class="card-footer">
        <button type="submit" name="kirim" class="btn btn-primary">LOGIN</button>
        <a href="index.php?page=registrasi" class="m-3">Belum Punya Akun? Daftar disini!</a>
        </div>
       </form>
     </div>
   </div>
</div>
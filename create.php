<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Biodata</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="soal.php">Isi<span class="sr-only">(current)</span></a>
      </li>
    </ul>
      
  </div>
</nav>
    <!-- end Navbar -->
    <!-- content -->
    <div class="container">
        <div class="row" style="padding:20px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><center>Biodata</center></div>
                    <div class="card-body">
                        <form action="proses.php?aksi=tambah" method="POST">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin"  value="Laki Laki">
                                    <label class="form-check-label">
                                        Laki Laki
                                     </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <p>
                <label>Agama:</label>
                <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
                 </select>
                </p>
                   
                <div class="form-group">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="proses">Proses</button>
                <button class="btn btn-outline-danger my-2 my-sm-0" type="reset" name="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
         </div>
    </div>
   
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>

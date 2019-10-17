<?php 
include '../database.php';
$siswa = new Siswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>
<body>
    <?php 
        foreach($siswa->edit($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $tgl_lahir = $data['tgl_lahir'];
            $agama = $data['agama'];
          
        }
    ?>
    <fieldset>
        <legend>Edit Data Siswa</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th><label for="">Alamat</label></th>
                    <td><textarea name="alamat" class="form-control" rows="5" value="<?php echo $alamat; ?>"></textarea></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($jenis_kelamin == "Laki-laki"){
                        echo "checked";
                    } ?> required>Laki-laki</td>
                    <td><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($jenis_kelamin == "Perempuan"){
                        echo "checked";
                    } ?> required>Perempuan</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" required></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td><select name="agama">
                        <option value="Islam" <?php if($agama = "Islam"){ echo"selected"; } ?>>Islam</option>
                        <option value="kristen"<?php if($agama = "kristen"){ echo"selected"; } ?>>Kristen</option>
                        <option value="hindu"<?php if($agama = "hindu"){ echo"selected"; } ?>>Hindu</option>
                        <option value="budha"<?php if($agama = "budha"){ echo"selected"; } ?>>Budha</option>
                    </select></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alm" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
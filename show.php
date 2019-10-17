<?php 
include '../database.php';
$siswa = new Bio();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

</head>
<body>
    <?php 
        foreach($siswa->show($_GET['id']) as $data)
        {   
            $id = $data['id'];
            $nama = $data['nama'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $tgl_lahir = $data['tgl_lahir'];
            $agama = $data['agama'];
            $alamat = $data['alamat'];
        }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <table>
            <tr>
                <th>Nama Siswa</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jenis_kelamin" readonly value="Laki-laki" <?php if($jenis_kelamin == "Laki-laki"){
                        echo "checked";
                    } ?> required>Laki-laki</td>
                    <td><input type="radio" name="jenis_kelamink" readonly value="Perempuan" <?php if($jenis_kelamin == "Perempuan"){
                        echo "checked";
                    } ?> required>Perempuan</td>
            </tr>
            <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl_lahir" readonly value="<?php echo $tgl_lahir; ?>" required></td>
            </tr>
            <tr>
                    <th>Agama</th>
                    <td><select disabled>
                        <option value="Islam" <?php if($agama = "Islam"){ echo"selected"; } ?>>Islam</option>
                        <option value="kristen"<?php if($agama = "kristen"){ echo"selected"; } ?>>Kristen</option>
                        <option value="hindu"<?php if($agama = "hindu"){ echo"selected"; } ?>>Hindu</option>
                        <option value="budha"<?php if($agama = "budha"){ echo"selected"; } ?>>Budha</option>
                    </select></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
        </table>
    </fieldset>
    
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>

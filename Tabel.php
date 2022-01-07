<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tampil Data</title>
    <style>
        *{
            justify-content: flex;
            text-align: center;
        
        }
        .container{
            margin-top:30pt;
        }
        
    </style>
</head>

<body>
    <div class="container">
        <h1 align="center">Data Mahasiswa</h1>
        <table border="1" cellpadding="12" cellspacing="0" align="center">
            <tr>
                <th>No</th>
                <th>ID</t>
                <th>Nama</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            <?php
      $koneksi= mysqli_connect("localhost","root","","praktikum9");
      $no=1;
      $ambildata= mysqli_query($koneksi,"SELECT * FROM form");
      while($tampil = mysqli_fetch_array($ambildata)){
          echo "
          <tr>
              <td>$no</td>
              <td>$tampil[id]</td>
              <td>$tampil[nama]</td>
              <td>$tampil[email]</td>
              <td>$tampil[address]</td>
              <td>$tampil[gender]</td>
              <td>$tampil[position]</td>
              <td>$tampil[status]</td>
              <td><a href='?id=$tampil[id]'>Hapus</a></td>
          </tr>";
          $no++;
      }
      ?>
        </table>
        <?php
          if(isset($_GET['id'])){
              mysqli_query($koneksi,"DELETE FROM FORM WHERE id='$_GET[id]'");
              echo "<meta http-equev=refresh content=2;URL='Tabel.php'>";
          }
      ?>
        <br></br>
        <button type="button" class="btn btn-success" onclick="window.location.href='http://localhost/pw-Praktikum-9/Tambah.php'">Add More</button>
    </div>
</body>

</html>
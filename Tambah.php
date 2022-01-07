<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Praktikum_9</title>
    <style>
        *{
            max width: 100%;
        }
        .container{
            padding-left: 300px;
            padding-right:300px;
            padding-top: 50pt;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 align="center" style="font: italic;">Add Data</h1>
        <form action="" method="POST">
                <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" name="id">
                </div>
                <div class="form-group">
                    <label for="nama" >Nama</label>
                    <input type="text" class="form-control" name="nama" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email"  >
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                    <label for="gender" >Gender</label>
                    <select name="gender" class="form-control">
                        <option name="gender"></option>
                        <option value="Male" name="gender" >Male</option>
                        <option value="Female" name="gender">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" name="position">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option name="gender"></option>
                        <option value="Fulltime" name="gender">Fulltime</option>
                        <option value="Parttime" name="gender">Parttime</option>
                    </select>
                </div class="form-group">
                <div>
                    <input class="btn btn-primary" type="submit" value="simpan" name="proses">
                    <a href="Tabel.php">Lihat Hasil</a>
                </div>
        </form>
        
    </div>
<?php

    $koneksi= mysqli_connect("localhost","root","","praktikum9");   
        if(isset($_POST['proses'])){
            mysqli_query($koneksi,"INSERT INTO form SET
            id='$_POST[id]',
            nama='$_POST[nama]',
            email='$_POST[email]',
            address='$_POST[address]',
            gender='$_POST[gender]',
            position='$_POST[position]',
            status='$_POST[status]'");
        
        }
    
?>


</body>

</html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"><link rel="stylesheet" href="../../asset/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<?php include_once '../../include/navbar.php'; ?>
<?php include_once '../../include/footer.php'; ?>
<?php include_once '../../koneksi.php'; ?>
<br><br>

<style>
    body {
        background-color: #e0e9f3;
    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TR-CLAIM | Form Upload Display LEDClub 2020</title>
</head>
<body>
    
</body>
</html>
<div class="container">
    <div class="card">
        <div class="card-header">Upload Display LEDClub 2020</div><br>
        <div class="container">
        <form action="upload_ledclub.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="custname">Nama Customer</label>
                <input type="text" name="custname" class="form-control" id="custname" placeholder="Nama Customer">
            </div>
            <div class="form-group col-md-12">
                <label for="bulan">Pilih Bulan Claim</label>
                    <select class="form-control" id="bulan" name="bulan">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                    </select>
            </div>        
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="territory">Pilih Territory</label>
                    <select name="site" class="form-control" id="territory">
                    <option value="Jakarta 1">Jakarta 1</option>
                    <option value="Jakarta 2">Jakarta 2</option>
                    <option value="Jakarta 3">Jakarta 3</option>
                    <option value="Jakarta 4">Jakarta 4</option>
                    <option value="Jakarta 5">Jakarta 5</option>
                    <option value="Tangerang">Tangerang</option>
                    </select>
            </div>        
            <div class="form-group col-md-4">
                <label for="sales">Nama Sales</label>
                <input name="namaSales" type="text" class="form-control" id="sales" placeholder="Nama Sales">
            </div>
            <div class="form-group col-md-4">
                <label for="md">Nama MD</label>
                <input name="namaMd" type="text" class="form-control" id="md" placeholder="Nama MD">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="led">Foto Display LED</label>
                <input name="imgLed" type="file" class="form-control-file" id="led">
            </div>
            <div class="form-group col-md-4 col-sm-6">
                <label for="panjangled">Pajang</label>
                <input name="pLed" type="text" class="form-control" id="panjangled" placeholder="Panjang Display LED">
            </div>
            <div class="form-group col-md-4 col-sm-6">
                <label for="lebarled">Lebar</label>
                <input name="lLed" type="text" class="form-control" id="lebarled" placeholder="Lebar Display LED">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="led">Foto Display Downlight</label>
                <input name="imgDownlight" type="file" class="form-control-file" id="led">
            </div>
            <div class="form-group col-md-4 col-sm-6">
                <label for="panjangled">Pajang</label>
                <input name="pDownlight"  type="text" class="form-control" id="panjangdl" placeholder="Panjang Display Downlight">
            </div>
            <div class="form-group col-md-4 col-sm-6">
                <label for="lebarled">Lebar</label>
                <input name="lDownlight"  type="text" class="form-control" id="lebardl" placeholder="Lebar Display Downlight">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="led">Foto Display Wifi</label>
                <input name="imgWifi" type="file" class="form-control-file" id="led">
            </div>
            <div class="form-group col-md-4 col-sm-6">
                <label for="panjangled">Pajang</label>
                <input name="pWifi" type="text" class="form-control" id="panjangwifi" placeholder="Panjang Display Wifi">
            </div>
            <div class="form-group col-md-4 col-sm-6">
                <label for="lebarled">Lebar</label>
                <input name="lWifi" type="text" class="form-control" id="lebarwifi" placeholder="Lebar Display Wifi">
            </div>
        </div>
	<button style="margin-top: 20px;" type="submit" class="btn btn-primary">Upload</button><br><br>
</form>
</div>
</div>
<br><br><br><br>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"><link rel="stylesheet" href="../../asset/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<?php include_once '../../include/navbar.php'; ?>
<?php include_once '../../include/footer.php'; ?>
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
    <title>TR-CLAIM | Form Upload Display LDC 2020</title>
</head>
<body>
    
</body>
</html>
<div class="container">
    <div class="card">
        <div class="card-header">Upload Display LDC 2020</div><br>
        <div class="container">
        <form>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="custname">Nama Customer</label>
                <input type="text" class="form-control" id="custname" placeholder="Nama Customer">
            </div>
            <div class="form-group col-md-12">
                <label for="bulan">Pilih Bulan Claim</label>
                    <select class="form-control" id="bulan">
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    </select>
            </div>        
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="territory">Pilih Territory</label>
                    <select class="form-control" id="territory">
                    <option>Jakarta 1</option>
                    <option>Jakarta 2</option>
                    <option>Jakarta 3</option>
                    <option>Jakarta 4</option>
                    <option>Jakarta 5</option>
                    <option>Tangerang</option>
                    </select>
            </div>        
            <div class="form-group col-md-4">
                <label for="sales">Nama Sales</label>
                <input type="text" class="form-control" id="sales" placeholder="Nama Sales">
            </div>
            <div class="form-group col-md-4">
                <label for="md">Nama MD</label>
                <input type="text" class="form-control" id="md" placeholder="Nama MD">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="led">Foto Display</label>
                <input type="file" class="form-control-file" id="led">
            </div>
            <div class="form-group col-md-4 col-sm-6">
                <label for="panjangled">Pajang</label>
                <input type="text" class="form-control" id="panjangled" placeholder="Panjang Display">
            </div>
            <div class="form-group col-md-4 col-sm-6">
                <label for="lebarled">Lebar</label>
                <input type="text" class="form-control" id="lebarleds" placeholder="Lebar Display">
            </div>
        </div>
	<button style="margin-top: 20px;" type="submit" class="btn btn-primary">Upload</button><br><br>
</form>
</div>
</div>
<br><br><br>
</div>
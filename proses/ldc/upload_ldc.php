<?php  
    include_once '../../koneksi.php';
    $nama = $_POST['custname'];
    $bulan = $_POST['bulan'];
    $site = $_POST['site'];
    $nsales = $_POST['namaSales'];
    $nmd = $_POST['namaMd'];
    $pldc = $_POST['pLdc'];
    $lldc = $_POST['lLdc'];
    $date = date('d-m-y');

    $rand = rand();
    $ekstensi = array ('png','jpg','jpeg','gif');
    $filename = $_FILES['imgLdc']['name'];
    $ukuran = $_FILES['imgLdc']['size'];
    $ext1 = pathinfo($filename,PATHINFO_EXTENSION);
    
        if ($ukuran < 1044070) {
            $xx1 = $rand.'_'.$filename;
            move_uploaded_file($_FILES['imgLdc']['tmp_name'],'imgupload/'.$rand.'_'.$filename);
            mysqli_query($koneksi, "INSERT INTO ldc VALUES (NULL, '$nama','$bulan','$site','$nsales','$nmd','$xx1','$pldc','$lldc','$date')");
            header("location:confirm.php?alert=berhasil");
        }else {
            header("location:confirm.php?alert=gagal_ukuran");
        }

?>
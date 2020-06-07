<?php  
    include_once '../../koneksi.php';
    $nama = $_POST['custname'];
    $bulan = $_POST['bulan'];
    $site = $_POST['site'];
    $nsales = $_POST['namaSales'];
    $nmd = $_POST['namaMd'];
    $pled = $_POST['pLed'];
    $lled = $_POST['lLed'];
    $pdownlight = $_POST['pDownlight'];
    $ldownlight = $_POST['lDownlight'];
    $pwifi = $_POST['pWifi'];
    $lwifi = $_POST['lWifi'];
    $date = date('d-m-y');

    $rand = rand();
    $ekstensi = array ('png','jpg','jpeg','gif');
    $filename1 = $_FILES['imgLed']['name'];
    $filename2 = $_FILES['imgDownlight']['name'];
    $filename3 = $_FILES['imgWifi']['name'];
    $ukuran1 = $_FILES['imgLed']['size'];
    $ukuran2 = $_FILES['imgDownlight']['size'];
    $ukuran3 = $_FILES['imgWifi']['size'];
    $ext1 = pathinfo($filename1,PATHINFO_EXTENSION);
    $ext2 = pathinfo($filename2,PATHINFO_EXTENSION);
    $ext3 = pathinfo($filename3,PATHINFO_EXTENSION);

    
        if ($ukuran1 < 1044070 && $ukuran2 < 1044070 && $ukuran3 < 1044070) {
            $xx1 = $rand.'_'.$filename1;
            $xx2 = $rand.'_'.$filename2;
            $xx3 = $rand.'_'.$filename3;
            move_uploaded_file($_FILES['imgLed']['tmp_name'],'imgupload/'.$rand.'_'.$filename1);
            move_uploaded_file($_FILES['imgDownlight']['tmp_name'],'imgupload/'.$rand.'_'.$filename2);
            move_uploaded_file($_FILES['imgWifi']['tmp_name'],'imgupload/'.$rand.'_'.$filename3);
            mysqli_query($koneksi, "INSERT INTO ledclub VALUES (NULL, '$nama','$bulan','$site','$nsales','$nmd','$xx1','$pled','$lled','$xx2','$pdownlight','$ldownlight','$xx3','$pwifi','$lwifi','$date')");
            // header("location:index.php?alert=berhasil");
        }else {
            // header("location:index.php?alert=gagal_ukuran");
        }

?>
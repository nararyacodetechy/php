<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databases = "mahasiswa_by_sandhika";

$conn = mysqli_connect($servername, $username, $password, $databases);

// untuk mengambil/menampilkan data (fetch) mahasiswa dari object result 
// ada 4 cara dalam mengambil data :
// mysqli_fetch_row () -> mengembalikan array numerik
// $mhs = mysqli_fetch_row ($result);
// var_dump($mhs[2]); 

// mysqli_fetch_assoc () -> mengembalikan array asosiatif
// $mhs = mysqli_fetch_assoc ($result);
// var_dump($mhs["nama"]);

// mysqli_fetch_array () -> mengembalikan array numerik dan asosiatif
// $mhs = mysqli_fetch_array ($result);
// var_dump($mhs["nama"]);
// var_dump($mhs[2]);

// mysqli_fetch_object () -> mengembalikan object/nama field dari database
// $mhs = mysqli_fetch_object ($result);
// var_dump($mhs->nama);

function query ($conn, $query) {
    global $conn;  

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data) {
    global $conn;

    $namamhs = htmlspecialchars($data["nama"]);
    $nimmhs = htmlspecialchars($data["nim"]);
    // $gambarmhs = htmlspecialchars($data["gambar"]);

    $gambarmhs = upload();
    if(!$gambarmhs) {
        return false;
    }

    $jurusanmhs = htmlspecialchars($data["jurusan"]);
    $fakultasmhs = htmlspecialchars($data["fakultas"]);
    $emailmhs = htmlspecialchars($data["email"]);

    $insert = "INSERT INTO tb_mahasiswa VALUES ('', '$namamhs', '$nimmhs', '$gambarmhs', '$jurusanmhs', '$fakultasmhs', '$emailmhs')";
    
    mysqli_query($conn, $insert);

    return mysqli_affected_rows($conn);
}

function upload() {
    global $error;
    $namaFile = $_FILES['gambar']['name'];
    $sizeFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah gambar sudah di upload
        if($error === 4) {
            echo "<script>";
            echo "alert('Pilih Gambar terlebih dahulu!');";
            echo "</script>";
            return false;
        }

    // cek ekstensi file agar user tidak memasukkan gambar yang tidak disarankan
        $formatEkstensiValid = ['jpg', 'png', 'jpeg'];
        //explode untuk memecah format file menjadi array => (nama file) . (ekstensi) contoh : sandika.jpg
        $ekstensiGambar = explode('.', $namaFile);
        //strtolower => mengubah namafile huruf kecil semua
        $ekstensiGambar = strtolower(end($ekstensiGambar)); 

    // cek apakah gambar yang di upload sudah sesuai
        if (!in_array($ekstensiGambar, $formatEkstensiValid)) {
            echo "<script>";
            echo "alert('Format tidak Sesuai!');";
            echo "</script>";
            return false;
        }

    // cek apakah ukuran gambar terlalu besar
        if ($sizeFile > 1000000) {
            echo "<script>";
            echo "alert('Ukuran File Terlalu Besar!');";
            echo "</script>";
            return false;
        }

    // jika file sesuai maka upload gambar pada lokasi file yang telah ditentukan
        // generate nama file sehingga gambar tidak tertimpa 
        $namaFileGenerate = uniqid();
        $namaFileGenerate .= '.';
        $namaFileGenerate .= $ekstensiGambar;

        // pindah lokasi file 
        move_uploaded_file($tmpName, 'img/'.$namaFileGenerate);

        return $namaFileGenerate;
}

function hapus($ids) {
    global $conn;

    $delete = "DELETE FROM tb_mahasiswa WHERE id = $ids";
    
    mysqli_query($conn, $delete);

    return mysqli_affected_rows($conn);
}

function ubah ($data) {
    global $conn;

    $id = $data["id"];
    $namamhs = htmlspecialchars($data["nama"]);
    $nimmhs = htmlspecialchars($data["nim"]);
    $jurusanmhs = htmlspecialchars($data["jurusan"]);
    $fakultasmhs = htmlspecialchars($data["fakultas"]);
    $emailmhs = htmlspecialchars($data["email"]);

    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user mengganti gambar lama atau tidak
    if($_FILES['gambar']['error'] === 4 ) {
        $gambarmhs = $gambarLama;        
    } else {
        $gambarmhs = upload();  
    }

    $update = "UPDATE tb_mahasiswa SET nama = '$namamhs', nim = '$nimmhs', gambar = '$gambarmhs', jurusan = '$jurusanmhs', fakultas = '$fakultasmhs', email = '$emailmhs' WHERE id = $id";
    
    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    global $conn; 
    $search = "SELECT * FROM tb_mahasiswa WHERE nama LIKE '%$keyword%' OR
                                                nim LIKE '%$keyword%' OR
                                                jurusan LIKE '%$keyword%' OR
                                                fakultas LIKE '%$keyword%' OR
                                                email LIKE '%$keyword%'
              ";
    return query($conn, $search);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $passwordConfirm = mysqli_real_escape_string($conn, $data["passwordConfirm"]);

    // cek apakah konfirmasi password sudah sesuai 
    if( $password !== $passwordConfirm) {
        echo "<script>
                alert('Password tidak sesuai!');
              </script>"; 
        return false;
    }   

    // encrypsi password
    $encrypsiPwd = password_hash($password, PASSWORD_DEFAULT);

    // menghubungkan ke dataabase
    mysqli_query($conn, "SELECT * FROM user VALUES '', '$username', '$password'");

    return mysqli_affected_rows($conn);
}


?>



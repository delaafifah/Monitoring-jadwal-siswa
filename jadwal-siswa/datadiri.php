<?php
@session_start();

include "config/koneksi.php";

if (empty($_SESSION['username'])) {
    echo "<script>alert('Anda Belum Melakukan Login');document.location.href='index.php'</script>";
}



@$table = "tbl_siswa";
@$field = array('nama' => $_POST['nama']);
@$where = "nis = $_GET[nis], user = $_GET[user]";
@$redirect = "?menu=lihat_data";

if (isset($_POST['ubah'])) {
    echo @$perintah->ubah($con, $table, $field, $where, $redirect);
}
?>

<title>Form Siswa</title>
    </table>
    <table align="center" >
         <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" ></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="nama"  ></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="nama"  ></td>
        </tr>
       
       
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="ubah" value="Ubah"></td>
        </tr>
    </table>
</form>
 <br />


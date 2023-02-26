<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="card">
        <div class="card-header" style="color: white; background: #0d6efd";><h5>REGISTRASI</h5></div>
           
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. Telp</label>
                        <input type="number" class="form-control" name="telp" placeholder="Masukkan No. Telp" required>
                    </div>

            </div>
            <div class="card-footer">
                <button type="submit" name="kirim" class="btn btn-primary">DAFTAR</button>
                <p>Sudah punya akun? Login <a href="index.php?page=login">disini!</a></p>
            </div>
            </form>
        </div>
    </div>
</div>

<?php
include 'config/koneksi.php';
if (isset($_POST['kirim'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $level = 'masyarakat';

    $query = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp','$level')");

    if ($query) {
        header('location:index.php?page=login');
    }
}
?>
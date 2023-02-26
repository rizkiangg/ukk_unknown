<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="card">
        <div class="card-header" style="color: white; background: #4682B4";><h5>LOGIN</h5></div>
            <div class="card-body">
                <form action="config/aksi_login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                    </div>
                    
            </div>
            <div class="card-footer">
                <button type="submit" name="kirim" class="btn btn-primary">LOGIN</button>
                <p>Belum punya akun? Daftar <a href="index.php?page=registrasi">disini!</a></p>
            </div>
            </form>
        </div>
    </div>
</div>
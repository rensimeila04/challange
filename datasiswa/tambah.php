<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <h2>Tambah Data Siswa</h2>
                </div>
                <div class="card-body">
                <form method="post" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukkan NIS">
                            <small class="form-text text-muted">Contoh: 00422200001</small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="id_jurusan">Jurusan</label><br>
                            <select name="id_jurusan" id="id_jurusan">
                                <option value="">Pilih Jurusan</option>
                                <option value="RPL">RPL</option>
                                <option value="TKJ">TKJ</option>
                                <option value="MM">MM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_kelas">Kelas</label><br>
                            <select name="id_kelas" id="id_kelas">
                                <option value="">Pilih Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nilaiweb">Nilai Matpel Web</label>
                            <input type="text" class="form-control" name="nilaiweb" id="nilaiweb" placeholder="Masukkan nilai web">
                        </div>
                        <div class="form-group">
                            <label for="nilaipbo">Nilai Matpel PBO</label>
                            <input type="text" class="form-control" name="nilaipbo" id="nilaipbo" placeholder="Masukkan nilai pbo">
                        </div>
                        <div class="form-group">
                            <label for="nilaibasdat">Nilai Matpel Basdat</label>
                            <input type="text" class="form-control" name="nilaibasdat" id="nilaibasdat" placeholder="Masukkan nilai basdat">
                        </div>
                        <div class="form-group">
                            <label for="nilaidesain">Nilai Matpel Desain</label>
                            <input type="text" class="form-control" name="nilaidesain" id="nilaidesain" placeholder="Masukkan nilai desain">
                        </div>
                        <div class="form-group">
                            <label for="nilaiprogdas">Nilai Matpel Progdas</label>
                            <input type="text" class="form-control" name="nilaiprogdas" id="nilaiprogdas" placeholder="Masukkan nilai progdas">
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../aset/footer.php';
?>

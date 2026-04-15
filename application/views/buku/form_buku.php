<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Buku</h1>

    <div class="card shadow">
        <div class="card-body">
            <form method="post" action="<?= site_url('buku/simpan'); ?>">

                <div class="form-group">
                    <label>Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" 
                           value="<?= set_value('kode_buku') ?>"
                           placeholder="Contoh: BK001" required>
                </div>

                <div class="form-group">
                    <label>Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" 
                           value="<?= set_value('judul_buku') ?>"
                           placeholder="Judul buku" required>
                </div>

                <div class="form-group">
                    <label>Penulis</label>
                    <input type="text" name="penulis" class="form-control" 
                           value="<?= set_value('penulis') ?>"
                           placeholder="Nama penulis" required>
                </div>

                <div class="form-group">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" 
                           value="<?= set_value('penerbit') ?>"
                           placeholder="Nama penerbit" required>
                </div>

                <div class="form-group">
                    <label>Tahun</label>
                    <input type="number" name="tahun" class="form-control" 
                           value="<?= set_value('tahun') ?>"
                           placeholder="Contoh: 2024" required>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php foreach ($kategori as $k): ?>
                            <option value="<?= $k->id ?>" <?= set_select('id_kategori', $k->id) ?>>
                                <?= $k->nama_kategori ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" 
                           value="<?= set_value('stok') ?>"
                           placeholder="Jumlah stok" min="0" required>
                </div>

                <div class="form-group">
                    <label>Lokasi Rak</label>
                    <input type="text" name="lokasi_rak" class="form-control" 
                           value="<?= set_value('lokasi_rak') ?>"
                           placeholder="Contoh: Rak A1" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
                <a href="<?= site_url('buku'); ?>" class="btn btn-secondary">
                    Kembali
                </a>

            </form>
        </div>
    </div>
</div>
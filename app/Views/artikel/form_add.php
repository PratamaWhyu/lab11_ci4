

<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- konten -->
 <h2 class="text-xl font-bold mb-4"><?= esc($title); ?></h2>

<form action="" method="post" enctype="multipart/form-data" class="space-y-4">
    <?= csrf_field(); ?>

    <div>
        <label class="block">Judul Artikel</label>
        <input type="text" name="judul" value="<?= old('judul'); ?>" class="w-full border p-2 rounded" required>
        <?= isset($validation) && $validation->hasError('judul') ? '<p class="text-red-600 text-sm">' . $validation->getError('judul') . '</p>' : '' ?>
    </div>

    <div>
        <label class="block">Kategori</label>
        <select name="id_kategori" class="w-full border p-2 rounded">
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>"
                    <?= old('id_kategori', $data['id_kategori'] ?? '') == $k['id_kategori'] ? 'selected' : ''; ?>>
                    <?= esc($k['nama_kategori']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>


    <div>
        <label class="block">Isi Artikel</label>
        <textarea name="isi" class="w-full border p-2 rounded" rows="6"><?= old('isi'); ?></textarea>
    </div>

    <div>
        <label class="block">Upload Gambar</label>
        <input type="file" name="gambar" class="border p-2 rounded w-full">
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    <a href="<?= base_url('/admin/artikel'); ?>" class="ml-2 text-gray-600 hover:underline">Batal</a>

</form>

<?= $this->endSection() ?>

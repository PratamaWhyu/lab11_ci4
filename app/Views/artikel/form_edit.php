

<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<!-- konten -->
 
<h2 class="text-xl font-bold mb-4"><?= esc($title); ?></h2>

<form method="post" action="<?= base_url('/admin/artikel/edit/' . $data['id']); ?>" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div>
        <label class="block mb-1 font-semibold">Judul Artikel</label>
        <input type="text" name="judul" value="<?= esc($data['judul']); ?>" class="w-full p-2 border rounded" required>
        <?php if (isset($validation) && $validation->hasError('judul')): ?>
            <p class="text-red-500 text-sm"><?= $validation->getError('judul'); ?></p>
        <?php endif; ?>
    </div>

    <div>
        <label class="block">Kategori</label>
        <select name="id_kategori" class="w-full border p-2 rounded" required>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>"
                    <?= old('id_kategori', $data['id_kategori']) == $k['id_kategori'] ? 'selected' : ''; ?>>
                    <?= esc($k['nama_kategori']); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>



    <div>
        <label class="block mb-1 font-semibold">Isi Artikel</label>
        <textarea name="isi" rows="6" class="w-full p-2 border rounded"><?= esc($data['isi']); ?></textarea>
    </div>

    <div class="mb-4">
        <label class="block font-medium">Upload Gambar</label>
        <input type="file" name="gambar" class="w-full p-2 border rounded">
    </div>

    <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        <a href="<?= base_url('/admin/artikel'); ?>" class="ml-2 text-gray-600 hover:underline">Batal</a>
    </div>
</form>
<?php if (!empty($data['gambar'])): ?>
    <img src="<?= base_url('uploads/' . $data['gambar']) ?>" class="h-32 mt-2 rounded shadow">
<?php endif; ?>

<?= $this->endSection() ?>

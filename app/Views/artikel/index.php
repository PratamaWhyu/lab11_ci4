<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2 class="text-xl font-bold mb-4"><?= esc($title); ?></h2>

<!-- Form Pencarian -->
<form method="get" action="" class="mb-4">
    <input type="text" name="q" value="<?= esc($keyword); ?>" placeholder="Cari artikel..."
           class="border p-2 rounded w-1/2">
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Cari</button>
</form>

<!-- Daftar Artikel -->
<?php if($artikel): foreach($artikel as $row): ?>
<article class="border rounded p-4 mb-4 bg-white shadow">
    <h3 class="text-lg font-semibold mb-2">
        <a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="text-blue-600 hover:underline">
            <?= esc($row['judul']); ?>
        </a>
    </h3>
    
    <p class="text-gray-700"><?= esc(substr($row['isi'], 0, 200)); ?>...</p>
</article>
<?php endforeach; else: ?>
<p class="text-gray-500">Tidak ada artikel ditemukan.</p>
<?php endif; ?>

<!-- Pagination -->
<div class="mt-6">
    <?= $pager->links('artikel', 'tailwind_pagination') ?>
</div>

<?= $this->endSection() ?>

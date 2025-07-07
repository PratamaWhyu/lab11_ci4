<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<h1 class="text-2xl font-bold mb-4"><?= esc($title); ?></h1>
<p class="text-gray-700"><?= esc($content); ?></p>

<?= $this->endSection() ?>

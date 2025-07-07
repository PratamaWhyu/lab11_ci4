<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'My Website') ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-600 text-gray-800">
    <div class="  mx-6">
        <header class="bg-blue-600 text-white p-4 rounded-b-lg shadow">
            <h1 class="text-2xl font-bold text-center">Portal Artikel</h1>
        </header>

        <nav class="bg-white shadow p-4 flex gap-4 mt-2 rounded ">
            <a href="<?= base_url('/'); ?>" class="text-blue-600 hover:underline">Home</a>
            <a href="<?= base_url('/artikel'); ?>" class="text-blue-600 hover:underline">Artikel</a>
            <a href="<?= base_url('/about'); ?>" class="text-blue-600 hover:underline">About</a>
            <a href="<?= base_url('/contact'); ?>" class="text-blue-600 hover:underline">Kontak</a>
            <a href="<?= base_url('/user/login'); ?>" class="ml-auto text-blue-600 hover:underline">Manage Artikel</a>
        </nav>

        <section class="flex mt-4 gap-4">
            <main class="flex-1 bg-white p-6 rounded shadow">
                <?= $this->renderSection('content') ?>
            </main>

            <aside class="w-1/3 bg-white p-4 rounded shadow space-y-4">
                <?= view_cell('App\\Cells\\ArtikelTerkini::index') ?>


                
            </aside>
        </section>

        <footer class="bg-blue-600 text-white text-center py-4 mt-6 rounded">
            <p class="text-sm">&copy; <?= date('Y'); ?> - Universitas Pelita Bangsa</p>
        </footer>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 text-gray-800 p-8">
    <div class="max-w-6xl mx-auto ">
        <header class="bg-blue-600 text-white p-4 rounded-b-lg shadow">
            <h1 class="text-2xl font-bold text-center ">Portal Artikel</h1>
        </header>
        <nav class="bg-white shadow p-4 flex gap-4 mt-2 rounded">
            <a href="<?= base_url('/'); ?>" class="text-blue-600 hover:underline">Home</a>
            <a href="<?= base_url('/artikel'); ?>" class="text-blue-600 hover:underline">Artikel</a>
            <a href="<?= base_url('/about'); ?>" class="text-blue-600 hover:underline">About</a>
            <a href="<?= base_url('/contact'); ?>" class="text-blue-600 hover:underline">Kontak</a>
        </nav>
        <section class="flex mt-4 gap-4">
            <main class="flex-1 bg-white p-6 rounded shadow">

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow max-w-md w-full">
        <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>

        <?php if (session()->getFlashdata('flash_msg')): ?>
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                <?= session()->getFlashdata('flash_msg'); ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('/user/login'); ?>">
            <?= csrf_field(); ?>
            <div class="mb-4">
                <label class="block font-medium">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block font-medium">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">Login</button>
        </form>
    </div>
</body>
</html>

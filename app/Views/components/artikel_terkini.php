<div class="p-4 border rounded">
    <h3 class="text-lg font-semibold mb-2">Artikel Terkini</h3>
    <ul class="list-disc list-inside text-sm text-blue-600">
        <?php foreach ($artikel as $row): ?>
            <li><a href="<?= base_url('/artikel/' . $row['slug']); ?>" class="hover:underline"><?= esc($row['judul']) ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

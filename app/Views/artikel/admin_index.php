<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<h2 class="text-4xl font-bold mb-4 text-center"><?= esc($title); ?></h2>

<a href="<?= base_url('/admin/artikel/add'); ?>" class="inline-block bg-green-500 text-white px-4 py-2 mb-4 rounded hover:bg-green-600">+ Tambah Artikel</a>

<!-- Form Pencarian dan Filter Kategori -->
<form id="searchForm" class="mb-4 flex gap-4 flex-wrap">
    <input type="text" name="q" id="keyword" value="<?= esc($q ?? '') ?>" placeholder="Cari artikel..." class="border-2 p-2 rounded w-1/2" />

    <select name="kategori_id" id="kategoriFilter" class="border-2 p-2 rounded">
        <option value="">Semua Kategori</option>
        <?php foreach ($kategori as $k): ?>
            <option value="<?= $k['id_kategori']; ?>" <?= ($kategori_id == $k['id_kategori']) ? 'selected' : ''; ?>>
                <?= esc($k['nama_kategori']); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Cari</button>
</form>

<!-- Spinner Loading -->
<div id="loading" class="hidden text-center my-6">
    <div class="inline-block w-8 h-8 border-4 border-blue-500 border-t-transparent rounded-full animate-spin"></div>
    <p class="text-gray-500 mt-2">Memuat data...</p>
</div>

<!-- Container Artikel & Pagination -->
<div id="resultContainer"></div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(function () {
    const resultContainer = $('#resultContainer');
    const form = $('#searchForm');
    const loading = $('#loading');

    let currentSortBy = 'id';
    let currentSortDir = 'asc';

    function loadData(url = "<?= site_url('admin/artikel') ?>") {
        const q = $('#keyword').val();
        const kategori_id = $('#kategoriFilter').val();

        const fullUrl = `${url}?q=${encodeURIComponent(q)}&kategori_id=${encodeURIComponent(kategori_id)}&sort_by=${currentSortBy}&sort_dir=${currentSortDir}`;

        loading.removeClass('hidden');
        $.ajax({
            url: fullUrl,
            method: 'GET',
            dataType: 'json',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function (data) {
                renderTable(data.artikel);
                renderPagination(data.pager, data.q, data.kategori_id);
            },
            error: function (xhr) {
                console.error(xhr.responseText);
                resultContainer.html('<p class="text-red-500">Gagal mengambil data.</p>');
            },
            complete: function () {
                loading.addClass('hidden');
            }
        });
    }

    function renderTable(artikel) {
        if (!artikel.length) {
            resultContainer.html('<p class="text-gray-500">Tidak ada data ditemukan.</p>');
            return;
        }

        let html = `
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border-2">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="p-3 border cursor-pointer" data-sort="id">ID</th>
                        <th class="p-3 border cursor-pointer" data-sort="judul">Judul</th>
                        <th class="p-3 border cursor-pointer" data-sort="nama_kategori">Kategori</th>
                        <th class="p-3 border cursor-pointer" data-sort="status">Status</th>
                        <th class="p-3 border text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>`;

        artikel.forEach(row => {
            html += `
                <tr>
                    <td class="p-3 border">${row.id}</td>
                    <td class="p-3 border">
                        <b>${row.judul}</b>
                        <p class="text-sm text-gray-500">${row.isi.substring(0, 50)}...</p>
                    </td>
                    <td class="p-3 border">${row.nama_kategori ?? '-'}</td>
                    <td class="p-3 border">${row.status ?? 'Aktif'}</td>
                    <td class="p-3 border text-center">
                        <a href="/admin/artikel/edit/${row.id}" class="text-blue-600 hover:underline">Edit</a> |
                        <a href="#" class="text-red-600 hover:underline btn-delete" data-id="${row.id}">Hapus</a>
                    </td>
                </tr>`;
        });

        html += `</tbody></table><div id="paginationContainer" class="mt-6"></div></div>`;
        resultContainer.html(html);
    }

    function renderPagination(pager, q, kategori_id) {
        if (!pager || !pager.links) return;

        let html = '<div class="flex gap-1 flex-wrap">';
        pager.links.forEach(link => {
            if (!link.url) return;
            let url = link.url + '&q=' + encodeURIComponent(q) + '&kategori_id=' + encodeURIComponent(kategori_id) + `&sort_by=${currentSortBy}&sort_dir=${currentSortDir}`;
            html += `<a href="${url}" class="px-3 py-1 rounded border ${link.active ? 'bg-blue-600 text-white' : 'bg-gray-200'}">${link.title}</a>`;
        });
        html += '</div>';

        $('#paginationContainer').html(html);
    }

    // Handle sorting
    $(document).on('click', 'th[data-sort]', function () {
        const sortKey = $(this).data('sort');
        if (currentSortBy === sortKey) {
            currentSortDir = currentSortDir === 'asc' ? 'desc' : 'asc';
        } else {
            currentSortBy = sortKey;
            currentSortDir = 'asc';
        }
        loadData();
    });

    // Handle pencarian
    form.on('submit', function (e) {
        e.preventDefault();
        loadData();
    });

    // Handle pagination
    $(document).on('click', '#paginationContainer a', function (e) {
        e.preventDefault();
        loadData($(this).attr('href'));
    });

    // Handle delete
    // Handle delete
$(document).on('click', '.btn-delete', function (e) {
    e.preventDefault();
    const id = $(this).data('id');

    if (confirm('Yakin ingin menghapus artikel ini?')) {
        $.ajax({
            url: "<?= site_url('admin/artikel/delete') ?>/" + id,
            method: "POST",
            data: {
                _method: 'DELETE' // Spoofing
            },
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            success: function () {
                alert('Artikel berhasil dihapus.');
                loadData(); // reload data
            },
            error: function (xhr) {
                console.error("Gagal menghapus artikel:", xhr.responseText);
                alert('Gagal menghapus artikel:\n' + xhr.responseText);
            }
        });
    }
});


    // Load awal
    loadData();
});
</script>

<?= $this->endSection() ?>

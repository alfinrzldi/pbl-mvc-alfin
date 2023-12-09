<div class="max-w-4xl mx-auto mt-10">
    <div class="text-center" >
    <h1 class="text-4xl font-bold mb-6 text-button">Dashboard Kategori</h1>
    </div>
<div class="mb-3 rounded-full p-2" >
    <a href="tambah-category.php" class="text-white bg-yellow-500 hover:bg-yellow-800 hover:text-black hover:duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2" >Tambah kategory</a>
    </div>
    <!-- Tabel Kategori -->
    <div class="bg-white overflow-hidden shadow-md rounded-lg w-auto">
      <table class="w-full divide-gray-200">
        <thead class="">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Kategori</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
           
          <!-- Data Kategori -->
          <tr>
            <td class="px-6 py-4 whitespace-nowrap"></td>
            <td class="px-6 py-4 whitespace-nowrap"></td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <a href="edit-category.php" class="text-indigo-600 hover:text-indigo-900">Edit</a> || <a href="proses-hapus.php" onclick="return confirm('Yakin ingin menghapus?')" class="text-indigo-600 hover:text-indigo-900" >Hapus</a>
            </td>
          </tr>
          <!-- Tambahkan baris sesuai dengan jumlah kategori -->
        </tbody>
      </table>
    </div>
  </div>    
<script>
    $(document).ready(function () {

        $.ajax({
            url: '/api/kategoris',
            type: 'GET',
            success: function (response) {
                const tbody = response.map((item, index) => `
            <tr>
                <td>${index + 1}</td>
                <td>${item.nama_kategori}</td>
                <td>
                    <button type='button' class='btn btn-sm btn-warning kategori-edit' data-bs-toggle='modal' data-bs-target='#kategoriModal' data-bs-id='${item.id}'><i class='bi bi-pencil-square'></i>Edit</button>
                    <button type='button' class='btn btn-sm btn-danger kategori-delete' data-bs-toggle='modal' data-bs-target='#kategoriModal' data-bs-id='${item.id}'><i class='bi bi-trash'></i>Hapus</a>
                </td>
            </tr>
        `).join('');
                $('#table_kategori tbody').append(tbody);

            }
        });
    });
</script>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Kendaraan</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <header class="mb-6 rounded-2xl border border-slate-200 bg-white px-5 py-4 shadow-sm sm:px-6">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Dashboard Admin</p>
                    <h1 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">Manajemen Kendaraan</h1>
                </div>

                <div class="flex flex-wrap items-center gap-3">
                    <button type="button" class="rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50">
                        Export
                    </button>
                    <button type="button" class="rounded-xl bg-[#16273f] px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#0f1d35]">
                        + Tambah Kendaraan
                    </button>
                </div>
            </div>
        </header>

        <section class="mb-6 grid gap-4 md:grid-cols-3">
            <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                <p class="text-sm text-slate-500">Total Kendaraan</p>
                <div class="mt-3 flex items-end justify-between">
                    <span class="text-3xl font-bold text-slate-900">128</span>
                    <span class="rounded-full bg-emerald-100 px-2 py-1 text-xs font-semibold text-emerald-700">+12%</span>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                <p class="text-sm text-slate-500">Motor</p>
                <div class="mt-3 flex items-end justify-between">
                    <span class="text-3xl font-bold text-slate-900">84</span>
                    <span class="rounded-full bg-sky-100 px-2 py-1 text-xs font-semibold text-sky-700">+8%</span>
                </div>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                <p class="text-sm text-slate-500">Mobil</p>
                <div class="mt-3 flex items-end justify-between">
                    <span class="text-3xl font-bold text-slate-900">44</span>
                    <span class="rounded-full bg-violet-100 px-2 py-1 text-xs font-semibold text-violet-700">+5%</span>
                </div>
            </div>
        </section>

        <div class="grid gap-6 xl:grid-cols-[360px_minmax(0,1fr)]">
            <section class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-slate-900">Form Kendaraan</h2>
                    <p class="mt-1 text-sm text-slate-500">Lengkapi data kendaraan untuk disimpan ke database.</p>
                </div>

                <form class="space-y-5">
                    <div>
                        <label for="id_kendaraan" class="mb-2 block text-sm font-medium text-slate-700">ID Kendaraan</label>
                        <input id="id_kendaraan" type="number" value="101" class="w-full rounded-xl border border-slate-300 bg-slate-50 px-3 py-2.5 text-slate-900 outline-none transition focus:border-[#16273f] focus:ring-2 focus:ring-[#16273f]/10" placeholder="Masukkan ID kendaraan">
                    </div>

                    <div>
                        <label for="plat_nomor" class="mb-2 block text-sm font-medium text-slate-700">Plat Nomor</label>
                        <input id="plat_nomor" type="text" value="N 1234 AB" class="w-full rounded-xl border border-slate-300 bg-slate-50 px-3 py-2.5 text-slate-900 outline-none transition focus:border-[#16273f] focus:ring-2 focus:ring-[#16273f]/10" placeholder="Contoh: N 1234 AB">
                    </div>

                    <div>
                        <label for="jenis_kendaraan" class="mb-2 block text-sm font-medium text-slate-700">Jenis Kendaraan</label>
                        <select id="jenis_kendaraan" class="w-full rounded-xl border border-slate-300 bg-slate-50 px-3 py-2.5 text-slate-900 outline-none transition focus:border-[#16273f] focus:ring-2 focus:ring-[#16273f]/10">
                            <option selected>Motor</option>
                            <option>Mobil</option>
                            <option>Mobil Mewah</option>
                            <option>Truk</option>
                        </select>
                    </div>

                    <div>
                        <label for="warna" class="mb-2 block text-sm font-medium text-slate-700">Warna</label>
                        <input id="warna" type="text" value="Hitam" class="w-full rounded-xl border border-slate-300 bg-slate-50 px-3 py-2.5 text-slate-900 outline-none transition focus:border-[#16273f] focus:ring-2 focus:ring-[#16273f]/10" placeholder="Masukkan warna kendaraan">
                    </div>

                    <div>
                        <label for="pemilik" class="mb-2 block text-sm font-medium text-slate-700">Pemilik</label>
                        <input id="pemilik" type="text" value="Andi Prasetyo" class="w-full rounded-xl border border-slate-300 bg-slate-50 px-3 py-2.5 text-slate-900 outline-none transition focus:border-[#16273f] focus:ring-2 focus:ring-[#16273f]/10" placeholder="Nama pemilik kendaraan">
                    </div>

                    <div>
                        <label for="id_user" class="mb-2 block text-sm font-medium text-slate-700">ID User</label>
                        <input id="id_user" type="number" value="7" class="w-full rounded-xl border border-slate-300 bg-slate-50 px-3 py-2.5 text-slate-900 outline-none transition focus:border-[#16273f] focus:ring-2 focus:ring-[#16273f]/10" placeholder="ID user pengelola">
                    </div>

                    <div class="flex flex-wrap gap-3 pt-2">
                        <button type="submit" class="inline-flex items-center justify-center rounded-xl bg-[#16273f] px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-[#0f1d35]">
                            Simpan
                        </button>
                        <button type="reset" class="inline-flex items-center justify-center rounded-xl border border-slate-300 bg-white px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                            Reset
                        </button>
                    </div>
                </form>
            </section>

            <section class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm sm:p-6">
                <div class="mb-5 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-xl font-semibold text-slate-900">List Kendaraan</h2>
                        <p id="totalKendaraanCount" class="mt-1 text-sm text-slate-500">Menampilkan semua data kendaraan aktif.</p>
                    </div>

                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                        <div class="relative">
                            <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                            <input id="kendaraanSearch" type="search" placeholder="Cari kendaraan..." class="w-full rounded-xl border border-slate-300 bg-slate-50 py-2.5 pl-9 pr-3 text-sm text-slate-700 outline-none transition focus:border-[#16273f] focus:ring-2 focus:ring-[#16273f]/10 sm:w-56">
                        </div>

                        <select id="jenisFilter" class="rounded-xl border border-slate-300 bg-slate-50 px-3 py-2.5 text-sm text-slate-700 outline-none transition focus:border-[#16273f] focus:ring-2 focus:ring-[#16273f]/10">
                            <option>Semua</option>
                            <option>Motor</option>
                            <option>Mobil</option>
                            <option>Mobil Mewah</option>
                            <option>Truk</option>
                        </select>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200 text-left text-sm">
                        <thead class="bg-slate-50 text-slate-600">
                            <tr>
                                <th class="px-4 py-3 font-semibold">ID</th>
                                <th class="px-4 py-3 font-semibold">Plat Nomor</th>
                                <th class="px-4 py-3 font-semibold">Jenis</th>
                                <th class="px-4 py-3 font-semibold">Warna</th>
                                <th class="px-4 py-3 font-semibold">Pemilik</th>
                                <th class="px-4 py-3 font-semibold">ID User</th>
                                <th class="px-4 py-3 font-semibold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="kendaraanTableBody" class="divide-y divide-slate-200 bg-white text-slate-700">
                            <tr data-jenis="Motor" data-search="101 n 1234 ab andi prasetyo hitam motor 7">
                                <td class="px-4 py-3">101</td>
                                <td class="px-4 py-3">N 1234 AB</td>
                                <td class="px-4 py-3"><span class="rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-medium text-emerald-700">Motor</span></td>
                                <td class="px-4 py-3">Hitam</td>
                                <td class="px-4 py-3">Andi Prasetyo</td>
                                <td class="px-4 py-3">7</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center gap-2">
                                        <button type="button" class="rounded-lg border border-amber-300 bg-amber-50 px-2.5 py-1.5 text-xs font-medium text-amber-700 hover:bg-amber-100">Edit</button>
                                        <button type="button" class="rounded-lg border border-rose-300 bg-rose-50 px-2.5 py-1.5 text-xs font-medium text-rose-700 hover:bg-rose-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-jenis="Mobil" data-search="102 b 3321 cd sinta nuraeni putih mobil 8">
                                <td class="px-4 py-3">102</td>
                                <td class="px-4 py-3">B 3321 CD</td>
                                <td class="px-4 py-3"><span class="rounded-full bg-sky-100 px-2.5 py-1 text-xs font-medium text-sky-700">Mobil</span></td>
                                <td class="px-4 py-3">Putih</td>
                                <td class="px-4 py-3">Sinta Nuraeni</td>
                                <td class="px-4 py-3">8</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center gap-2">
                                        <button type="button" class="rounded-lg border border-amber-300 bg-amber-50 px-2.5 py-1.5 text-xs font-medium text-amber-700 hover:bg-amber-100">Edit</button>
                                        <button type="button" class="rounded-lg border border-rose-300 bg-rose-50 px-2.5 py-1.5 text-xs font-medium text-rose-700 hover:bg-rose-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-jenis="Mobil Mewah" data-search="103 ae 7777 xx rizky mahendra merah mobil mewah 9">
                                <td class="px-4 py-3">103</td>
                                <td class="px-4 py-3">AE 7777 XX</td>
                                <td class="px-4 py-3"><span class="rounded-full bg-violet-100 px-2.5 py-1 text-xs font-medium text-violet-700">Mobil Mewah</span></td>
                                <td class="px-4 py-3">Merah</td>
                                <td class="px-4 py-3">Rizky Mahendra</td>
                                <td class="px-4 py-3">9</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center gap-2">
                                        <button type="button" class="rounded-lg border border-amber-300 bg-amber-50 px-2.5 py-1.5 text-xs font-medium text-amber-700 hover:bg-amber-100">Edit</button>
                                        <button type="button" class="rounded-lg border border-rose-300 bg-rose-50 px-2.5 py-1.5 text-xs font-medium text-rose-700 hover:bg-rose-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-jenis="Truk" data-search="104 l 9090 yz bagus santoso biru truk 10">
                                <td class="px-4 py-3">104</td>
                                <td class="px-4 py-3">L 9090 YZ</td>
                                <td class="px-4 py-3"><span class="rounded-full bg-amber-100 px-2.5 py-1 text-xs font-medium text-amber-700">Truk</span></td>
                                <td class="px-4 py-3">Biru</td>
                                <td class="px-4 py-3">Bagus Santoso</td>
                                <td class="px-4 py-3">10</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center gap-2">
                                        <button type="button" class="rounded-lg border border-amber-300 bg-amber-50 px-2.5 py-1.5 text-xs font-medium text-amber-700 hover:bg-amber-100">Edit</button>
                                        <button type="button" class="rounded-lg border border-rose-300 bg-rose-50 px-2.5 py-1.5 text-xs font-medium text-rose-700 hover:bg-rose-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-jenis="Motor" data-search="105 p 4455 qw dewi lestari abu-abu motor 11">
                                <td class="px-4 py-3">105</td>
                                <td class="px-4 py-3">P 4455 QW</td>
                                <td class="px-4 py-3"><span class="rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-medium text-emerald-700">Motor</span></td>
                                <td class="px-4 py-3">Abu-abu</td>
                                <td class="px-4 py-3">Dewi Lestari</td>
                                <td class="px-4 py-3">11</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center gap-2">
                                        <button type="button" class="rounded-lg border border-amber-300 bg-amber-50 px-2.5 py-1.5 text-xs font-medium text-amber-700 hover:bg-amber-100">Edit</button>
                                        <button type="button" class="rounded-lg border border-rose-300 bg-rose-50 px-2.5 py-1.5 text-xs font-medium text-rose-700 hover:bg-rose-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-jenis="Mobil" data-search="106 d 7744 ef farid ramadhan hitam mobil 12">
                                <td class="px-4 py-3">106</td>
                                <td class="px-4 py-3">D 7744 EF</td>
                                <td class="px-4 py-3"><span class="rounded-full bg-sky-100 px-2.5 py-1 text-xs font-medium text-sky-700">Mobil</span></td>
                                <td class="px-4 py-3">Hitam</td>
                                <td class="px-4 py-3">Farid Ramadhan</td>
                                <td class="px-4 py-3">12</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center gap-2">
                                        <button type="button" class="rounded-lg border border-amber-300 bg-amber-50 px-2.5 py-1.5 text-xs font-medium text-amber-700 hover:bg-amber-100">Edit</button>
                                        <button type="button" class="rounded-lg border border-rose-300 bg-rose-50 px-2.5 py-1.5 text-xs font-medium text-rose-700 hover:bg-rose-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-jenis="Motor" data-search="107 z 2145 gh yuni astuti silver motor 13">
                                <td class="px-4 py-3">107</td>
                                <td class="px-4 py-3">Z 2145 GH</td>
                                <td class="px-4 py-3"><span class="rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-medium text-emerald-700">Motor</span></td>
                                <td class="px-4 py-3">Silver</td>
                                <td class="px-4 py-3">Yuni Astuti</td>
                                <td class="px-4 py-3">13</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center gap-2">
                                        <button type="button" class="rounded-lg border border-amber-300 bg-amber-50 px-2.5 py-1.5 text-xs font-medium text-amber-700 hover:bg-amber-100">Edit</button>
                                        <button type="button" class="rounded-lg border border-rose-300 bg-rose-50 px-2.5 py-1.5 text-xs font-medium text-rose-700 hover:bg-rose-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="paginationControls" class="mt-5 flex items-center justify-between gap-3 border-t border-slate-200 pt-4"></div>
            </section>
        </div>
    </div>

    <script>
        const rows = Array.from(document.querySelectorAll('#kendaraanTableBody tr'));
        const searchInput = document.getElementById('kendaraanSearch');
        const filterSelect = document.getElementById('jenisFilter');
        const paginationControls = document.getElementById('paginationControls');
        const totalKendaraanCount = document.getElementById('totalKendaraanCount');
        const pageSize = 3;
        let currentPage = 1;

        function getFilteredRows() {
            const keyword = searchInput.value.toLowerCase().trim();
            const selectedType = filterSelect.value;

            return rows.filter((row) => {
                const searchable = (row.dataset.search || '').toLowerCase();
                const jenis = row.dataset.jenis || '';
                const matchesKeyword = !keyword || searchable.includes(keyword);
                const matchesType = selectedType === 'Semua' || jenis === selectedType;
                return matchesKeyword && matchesType;
            });
        }

        function renderTable() {
            const filteredRows = getFilteredRows();
            const totalPages = Math.max(1, Math.ceil(filteredRows.length / pageSize));
            if (currentPage > totalPages) currentPage = totalPages;

            rows.forEach((row) => row.style.display = 'none');
            filteredRows
                .slice((currentPage - 1) * pageSize, currentPage * pageSize)
                .forEach((row) => row.style.display = 'table-row');

            totalKendaraanCount.textContent = `Menampilkan ${filteredRows.length} kendaraan`;
            renderPagination(totalPages, filteredRows.length);
        }

        function renderPagination(totalPages, totalRows) {
            const firstIndex = totalRows === 0 ? 0 : (currentPage - 1) * pageSize + 1;
            const lastIndex = Math.min(currentPage * pageSize, totalRows);
            const previousDisabled = currentPage === 1 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-slate-100';
            const nextDisabled = currentPage === totalPages ? 'opacity-50 cursor-not-allowed' : 'hover:bg-slate-100';

            paginationControls.innerHTML = `
                <div class="text-sm text-slate-500">Menampilkan ${firstIndex}-${lastIndex} dari ${totalRows}</div>
                <div class="flex items-center gap-2">
                    <button type="button" data-page="prev" class="rounded-lg border border-slate-300 bg-white px-3 py-1.5 text-sm font-medium text-slate-700 ${previousDisabled}">Sebelumnya</button>
                    <span class="text-sm text-slate-600">Hal ${currentPage} / ${totalPages}</span>
                    <button type="button" data-page="next" class="rounded-lg border border-slate-300 bg-white px-3 py-1.5 text-sm font-medium text-slate-700 ${nextDisabled}">Berikutnya</button>
                </div>
            `;

            const prevButton = paginationControls.querySelector('[data-page="prev"]');
            const nextButton = paginationControls.querySelector('[data-page="next"]');
            prevButton.disabled = currentPage === 1;
            nextButton.disabled = currentPage === totalPages;

            prevButton.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage -= 1;
                    renderTable();
                }
            });

            nextButton.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage += 1;
                    renderTable();
                }
            });
        }

        searchInput.addEventListener('input', () => {
            currentPage = 1;
            renderTable();
        });

        filterSelect.addEventListener('change', () => {
            currentPage = 1;
            renderTable();
        });

        renderTable();
    </script>
</body>
</html>

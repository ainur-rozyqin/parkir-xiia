<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dasboard</title>
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root{
            --ink:#1C2430;
            --paper:#F5F2EA;
            --navy:#16233B;
            --navy-line:#2C3E5C;
            --brass:#C8963E;
            --brass-soft:#E4C583;
            --muted:#5B6472;
            --hair:#D9D3C2;
        }
        body{ font-family:'IBM Plex Sans', sans-serif; background:var(--paper); color:var(--ink); }
        .font-display{ font-family:'Space Grotesk', sans-serif; }

        .blueprint-side{
            background-color: var(--navy);
            background-image:
                linear-gradient(var(--navy-line) 1px, transparent 1px),
                linear-gradient(90deg, var(--navy-line) 1px, transparent 1px);
            background-size: 28px 28px;
            background-position: -1px -1px;
        }

        .capacity-bar{ height:4px; background:#E3DDCB; position:relative; }
        .capacity-fill{ height:100%; background:var(--navy); }

        .slot{
            aspect-ratio: 1;
            border: 1.3px solid var(--navy);
            display:flex; align-items:center; justify-content:center;
            font-size: 9.5px;
            color: var(--muted);
            border-radius: 2px;
        }
        .slot.filled{
            background: var(--navy);
            color: var(--brass-soft);
            border-color: var(--navy);
        }

        .navitem{ color:#B9C2D4; }
        .navitem:hover{ color:#F5F2EA; }
        .navitem.active{ color:#F5F2EA; }
        .navitem.active .dash{ background:var(--brass); }
        .dash{ width:3px; height:16px; background:transparent; }

        .row-line{ border-bottom: 1px solid var(--hair); }

        .dot{ width:6px; height:6px; border-radius:50%; display:inline-block; }
        .dot.in{ background: var(--navy); }
        .dot.out{ background: #B9B2A0; }

        ::-webkit-scrollbar{ height:6px; width:6px; }
        ::-webkit-scrollbar-thumb{ background:#C9C2AE; border-radius:3px; }

        @media (prefers-reduced-motion: reduce){ *{ transition:none !important; } }
    </style>

</head>
<body>
<body class="min-h-screen">
<div class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="blueprint-side hidden lg:flex flex-col w-60 shrink-0 px-6 py-8 justify-between">
        <div>
            <div class="flex items-center gap-2.5 mb-12">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="9" stroke="#C8963E" stroke-width="1.4"/>
                    <circle cx="12" cy="12" r="1.6" fill="#C8963E"/>
                    <path d="M12 3V5.4M12 18.6V21M3 12H5.4M18.6 12H21" stroke="#C8963E" stroke-width="1.4" stroke-linecap="round"/>
                </svg>
                <span class="font-display text-[14px] tracking-tight text-[#E4C583]">Kabasa</span>
            </div>
            <nav class="space-y-1 text-[13.5px]">
                <a href="#" class="navitem flex items-center gap-3 py-2"><span class="dash"></span>Dashboard</a>
                <a href="#" class="navitem flex items-center gap-3 py-2"><span class="dash"></span>Kesiswaan</a>
                <a href="#" class="navitem flex items-center gap-3 py-2"><span class="dash"></span>Akademik</a>
                <a href="#" class="navitem flex items-center gap-3 py-2"><span class="dash"></span>Kepegawaian</a>
                <a href="#" class="navitem active flex items-center gap-3 py-2"><span class="dash"></span>Parkir</a>
                <a href="#" class="navitem flex items-center gap-3 py-2"><span class="dash"></span>Laporan</a>
            </nav>
        </div>
        <div class="text-[12px] text-[#7E8BA6] leading-relaxed">
            SMK Babussalam<br>Malang, Jawa Timur
        </div>
    </aside>

    <!-- Main -->
    <main class="flex-1 px-5 py-7 sm:px-9 sm:py-9 max-w-[1180px]">

        <!-- Topbar -->
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="font-display text-[26px] leading-tight">Dashboard Parkir</h1>
                <p class="text-[13.5px] text-[var(--muted)] mt-1">Pemantauan kendaraan real-time — Selasa, 1 September 2026</p>
            </div>
            <div class="relative w-full sm:w-64">
                <input type="text" placeholder="Cari plat nomor…" class="w-full text-[13.5px] bg-white border border-[var(--hair)] rounded-sm py-2 pl-3 pr-3 focus:outline-none focus:border-[var(--navy)]">
            </div>
        </div>

        <!-- Stat cards -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-px bg-[var(--hair)] border border-[var(--hair)] mb-9">
            <div class="bg-[var(--paper)] px-5 py-5">
                <p class="text-[12.5px] text-[var(--muted)] mb-2">Slot terisi</p>
                <p class="font-display text-3xl">84<span class="text-base text-[var(--muted)] font-sans"> / 120</span></p>
            </div>
            <div class="bg-[var(--paper)] px-5 py-5">
                <p class="text-[12.5px] text-[var(--muted)] mb-2">Masuk hari ini</p>
                <p class="font-display text-3xl">156</p>
            </div>
            <div class="bg-[var(--paper)] px-5 py-5">
                <p class="text-[12.5px] text-[var(--muted)] mb-2">Keluar hari ini</p>
                <p class="font-display text-3xl">142</p>
            </div>
            <div class="bg-[var(--paper)] px-5 py-5">
                <p class="text-[12.5px] text-[var(--muted)] mb-2">Slot tersisa</p>
                <p class="font-display text-3xl text-[var(--brass)]">36</p>
            </div>
        </div>

        <div class="grid lg:grid-cols-[1.5fr_1fr] gap-8 mb-9">

            <!-- Denah parkir -->
            <div>
                <div class="flex items-center justify-between mb-4">
                    <h2 class="font-display text-[15px]">Denah okupansi</h2>
                    <div class="flex items-center gap-4 text-[12px] text-[var(--muted)]">
                        <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 border border-[var(--navy)] inline-block"></span>Kosong</span>
                        <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 bg-[var(--navy)] inline-block"></span>Terisi</span>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex items-center justify-between text-[12.5px] text-[var(--muted)] mb-1.5">
                        <span>Zona Guru &amp; Staf</span><span>15 / 18</span>
                    </div>
                    <div class="capacity-bar mb-3"><div class="capacity-fill" style="width:83%"></div></div>
                    <div class="grid grid-cols-9 sm:grid-cols-9 gap-1.5" id="zonaGuru"></div>
                </div>

                <div>
                    <div class="flex items-center justify-between text-[12.5px] text-[var(--muted)] mb-1.5">
                        <span>Zona Siswa</span><span>69 / 102</span>
                    </div>
                    <div class="capacity-bar mb-3"><div class="capacity-fill" style="width:68%"></div></div>
                    <div class="grid grid-cols-12 sm:grid-cols-17 gap-1.5" id="zonaSiswa"></div>
                </div>
            </div>

            <!-- Jenis kendaraan -->
            <div>
                <h2 class="font-display text-[15px] mb-4">Jenis kendaraan hari ini</h2>
                <div class="space-y-5">
                    <div>
                        <div class="flex items-center justify-between text-[13px] mb-1.5">
                            <span>Motor</span><span class="text-[var(--muted)]">128</span>
                        </div>
                        <div class="capacity-bar"><div class="capacity-fill" style="width:82%"></div></div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between text-[13px] mb-1.5">
                            <span>Mobil</span><span class="text-[var(--muted)]">28</span>
                        </div>
                        <div class="capacity-bar"><div class="capacity-fill" style="width:18%; background:var(--brass);"></div></div>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-[var(--hair)]">
                    <p class="text-[12.5px] text-[var(--muted)] mb-1">Jam sibuk</p>
                    <p class="font-display text-xl">06.30 – 07.15</p>
                    <p class="text-[12.5px] text-[var(--muted)] mt-1">62 kendaraan masuk dalam rentang ini</p>
                </div>
            </div>

        </div>

        <!-- Tabel aktivitas -->
        <div>
            <h2 class="font-display text-[15px] mb-4">Aktivitas terbaru</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-[13.5px]">
                    <thead>
                    <tr class="row-line text-left text-[12px] text-[var(--muted)]">
                        <th class="pb-2.5 font-normal pr-4">Plat nomor</th>
                        <th class="pb-2.5 font-normal pr-4">Nama</th>
                        <th class="pb-2.5 font-normal pr-4">Jenis</th>
                        <th class="pb-2.5 font-normal pr-4">Waktu masuk</th>
                        <th class="pb-2.5 font-normal">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="row-line">
                        <td class="py-3 pr-4">N 3821 QF</td>
                        <td class="py-3 pr-4">Ahmad Rizal Fauzi</td>
                        <td class="py-3 pr-4 text-[var(--muted)]">Motor</td>
                        <td class="py-3 pr-4 text-[var(--muted)]">06.42</td>
                        <td class="py-3"><span class="dot in mr-1.5"></span>Di dalam</td>
                    </tr>
                    <tr class="row-line">
                        <td class="py-3 pr-4">N 1190 AB</td>
                        <td class="py-3 pr-4">Siti Nur Halimah</td>
                        <td class="py-3 pr-4 text-[var(--muted)]">Motor</td>
                        <td class="py-3 pr-4 text-[var(--muted)]">06.48</td>
                        <td class="py-3"><span class="dot in mr-1.5"></span>Di dalam</td>
                    </tr>
                    <tr class="row-line">
                        <td class="py-3 pr-4">N 8847 KL</td>
                        <td class="py-3 pr-4">Budi Santoso, S.Pd.</td>
                        <td class="py-3 pr-4 text-[var(--muted)]">Mobil</td>
                        <td class="py-3 pr-4 text-[var(--muted)]">06.55</td>
                        <td class="py-3"><span class="dot in mr-1.5"></span>Di dalam</td>
                    </tr>
                    <tr class="row-line">
                        <td class="py-3 pr-4">N 2234 XZ</td>
                        <td class="py-3 pr-4">Dewi Anggraini</td>
                        <td class="py-3 pr-4 text-[var(--muted)]">Motor</td>
                        <td class="py-3 pr-4 text-[var(--muted)]">07.02</td>
                        <td class="py-3"><span class="dot out mr-1.5"></span>Keluar 12.30</td>
                    </tr>
                    <tr>
                        <td class="py-3 pr-4">N 5567 MN</td>
                        <td class="py-3 pr-4">Yusuf Hidayat</td>
                        <td class="py-3 pr-4 text-[var(--muted)]">Motor</td>
                        <td class="py-3 pr-4 text-[var(--muted)]">07.08</td>
                        <td class="py-3"><span class="dot in mr-1.5"></span>Di dalam</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>

<script>
    function buildZone(id, total, filledCount){
        const el = document.getElementById(id);
        let html = '';
        const filledIdx = new Set();
        while(filledIdx.size < filledCount){
            filledIdx.add(Math.floor(Math.random()*total));
        }
        for(let i=0; i<total; i++){
            const isFilled = filledIdx.has(i);
            html += `<div class="slot${isFilled ? ' filled' : ''}">${i+1}</div>`;
        }
        el.innerHTML = html;
    }
    buildZone('zonaGuru', 18, 15);
    buildZone('zonaSiswa', 102, 69);
</script>

</body>
</html>

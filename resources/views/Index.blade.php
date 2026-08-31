<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Index</title>
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
        }
        body{ font-family:'IBM Plex Sans', sans-serif; background:var(--paper); color:var(--ink); }
        .font-display{ font-family:'Space Grotesk', sans-serif; }

        .blueprint{
            background-color: var(--navy);
            background-image:
                linear-gradient(var(--navy-line) 1px, transparent 1px),
                linear-gradient(90deg, var(--navy-line) 1px, transparent 1px);
            background-size: 32px 32px;
            background-position: -1px -1px;
            position: relative;
        }
        .blueprint::before{
            content:"";
            position:absolute; inset:0;
            background: radial-gradient(ellipse at 30% 25%, rgba(200,150,62,0.10), transparent 55%);
            pointer-events:none;
        }

        .field-input{
            background: transparent;
            border: none;
            border-bottom: 1.5px solid #C9C2AE;
            border-radius: 0;
            padding: 0.6rem 0.1rem;
            width: 100%;
            color: var(--ink);
            transition: border-color .15s ease;
        }
        .field-input:focus{
            outline: none;
            border-bottom-color: var(--navy);
        }
        .field-input::placeholder{ color: #A6A08F; }

        .btn-masuk{
            background: var(--navy);
            color: var(--paper);
            transition: background .15s ease, transform .1s ease;
        }
        .btn-masuk:hover{ background:#0F1A2C; }
        .btn-masuk:active{ transform: translateY(1px); }
        .btn-masuk:focus-visible{
            outline: 2px solid var(--brass);
            outline-offset: 2px;
        }

        a:focus-visible, input:focus-visible, button:focus-visible{
            outline: 2px solid var(--brass);
            outline-offset: 2px;
        }

        .tick-line{
            height:1px;
            background: var(--navy-line);
            position: relative;
        }
        .tick-line::before, .tick-line::after{
            content:"";
            position:absolute; top:-4px;
            width:1px; height:9px;
            background: var(--navy-line);
        }
        .tick-line::before{ left:0; }
        .tick-line::after{ right:0; }

        @media (prefers-reduced-motion: reduce){
            *{ transition: none !important; }
        }
    </style>
        </head>
<body>
{{--tailwindcss berbasis utility --}}
<body class="min-h-screen">

<div class="min-h-screen flex flex-col lg:flex-row">

    <!-- Panel kiri: identitas -->
    <div class="blueprint lg:w-[44%] flex flex-col justify-between px-8 py-10 sm:px-14 sm:py-14 lg:px-16 lg:py-16">

        <div class="flex items-center gap-2.5">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="9" stroke="#C8963E" stroke-width="1.4"/>
                <circle cx="12" cy="12" r="1.6" fill="#C8963E"/>
                <path d="M12 3V5.4M12 18.6V21M3 12H5.4M18.6 12H21" stroke="#C8963E" stroke-width="1.4" stroke-linecap="round"/>
            </svg>
            <span class="font-display text-[15px] tracking-tight text-[#E4C583]">Kabasa</span>
        </div>

        <div class="my-auto py-16 lg:py-0">
            <p class="font-display text-4xl sm:text-5xl leading-[1.08] text-[#F5F2EA]">
                Sistem Informasi<br>Parkir
            </p>
            <div class="tick-line w-40 mt-7 mb-5"></div>
            <p class="text-[15px] text-[#B9C2D4] leading-relaxed max-w-xs">
                Satu pintu masuk untuk administrasi parkir di SMK Babussalam.
            </p>

            <!-- ilustrasi garis: kompas teknik -->
            <svg class="mt-12 opacity-90" width="180" height="180" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="90" cy="90" r="62" stroke="#2C3E5C" stroke-width="1"/>
                <circle cx="90" cy="90" r="3" fill="#C8963E"/>
                <path d="M90 28V44M90 136V152M28 90H44M136 90H152" stroke="#3C4F70" stroke-width="1"/>
                <path d="M90 90L128 52" stroke="#C8963E" stroke-width="1.6" stroke-linecap="round"/>
                <path d="M90 90L60 122" stroke="#5B6E8F" stroke-width="1.6" stroke-linecap="round"/>
                <path d="M128 52L118 52M128 52L128 62" stroke="#C8963E" stroke-width="1.6" stroke-linecap="round"/>
                <path d="M60 122L60 112M60 122L70 122" stroke="#5B6E8F" stroke-width="1.6" stroke-linecap="round"/>
            </svg>
        </div>

        <div class="text-[13px] text-[#8FA0BE] leading-relaxed">
            SMK Babussalam<br>Malang, Jawa Timur
        </div>
    </div>

    <!-- Panel kanan: form -->
    <div class="flex-1 flex items-center justify-center px-6 py-14 sm:px-10">
        <div class="w-full max-w-[380px]">

            <h1 class="font-display text-[26px] text-[var(--ink)] mb-1.5">Masuk ke akun Anda</h1>
            <p class="text-[14.5px] text-[var(--muted)] mb-10">Gunakan akun yang terdaftar di sistem sekolah.</p>

            <form class="space-y-7" onsubmit="return false;">

                <div>
                    <label for="identitas" class="block text-[13.5px] text-[var(--muted)] mb-1.5">Email atau NIP</label>
                    <input id="identitas" type="text" class="field-input" placeholder="nama@smkbabussalam.sch.id" autocomplete="username">
                </div>

                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="sandi" class="block text-[13.5px] text-[var(--muted)]">Kata sandi</label>
                        <a href="#" class="text-[13px] text-[var(--navy)] hover:text-[var(--brass)] underline underline-offset-2 decoration-[#C9C2AE]">Lupa kata sandi?</a>
                    </div>
                    <div class="relative">
                        <input id="sandi" type="password" class="field-input pr-9" placeholder="••••••••" autocomplete="current-password">
                        <button type="button" onclick="togglePw()" aria-label="Tampilkan kata sandi" class="absolute right-0.5 top-1/2 -translate-y-1/2 text-[var(--muted)] hover:text-[var(--ink)]">
                            <svg id="eyeIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 12C3.5 7.5 7.5 5 12 5C16.5 5 20.5 7.5 22.5 12C20.5 16.5 16.5 19 12 19C7.5 19 3.5 16.5 1.5 12Z" stroke="currentColor" stroke-width="1.4"/>
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.4"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center gap-2 pt-1">
                    <input id="ingat" type="checkbox" class="w-4 h-4 accent-[#16233B]">
                    <label for="ingat" class="text-[13.5px] text-[var(--muted)]">Ingat saya di perangkat ini</label>
                </div>

                <button type="submit" class="btn-masuk w-full py-3 text-[14.5px] font-medium mt-2">
                    Masuk
                </button>

            </form>

            <p class="text-[13px] text-[var(--muted)] mt-10 leading-relaxed">
                Kesulitan masuk? Hubungi admin sekolah di bagian Tata Usaha.
            </p>

        </div>
    </div>

</div>

<script>
    function togglePw(){
        const input = document.getElementById('sandi');
        input.type = input.type === 'password' ? 'text' : 'password';
    }
</script>

</body>
</html>

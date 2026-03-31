<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Faris | Lebaran 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; overflow-x: hidden; }
        
        /* Background Mesh Gradient Soft */
        .bg-mesh {
            background-color: #f8fafc;
            background-image: 
                radial-gradient(at 0% 0%, hsla(161, 64%, 92%, 1) 0px, transparent 50%),
                radial-gradient(at 100% 0%, hsla(187, 81%, 94%, 1) 0px, transparent 50%),
                radial-gradient(at 100% 100%, hsla(217, 91%, 95%, 1) 0px, transparent 50%),
                radial-gradient(at 0% 100%, hsla(142, 69%, 94%, 1) 0px, transparent 50%);
            background-attachment: fixed;
        }

        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(1deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-float-slow { animation: float 8s ease-in-out infinite; }

        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }

        .glass { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255,255,255,0.3); }
    </style>
</head>
<body class="bg-mesh min-h-screen flex flex-col text-slate-800 relative">

    <div class="fixed top-0 -left-4 w-96 h-96 bg-emerald-200 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob"></div>
    <div class="fixed top-0 -right-4 w-96 h-96 bg-cyan-200 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob animation-delay-2000"></div>
    <div class="fixed -bottom-8 left-20 w-96 h-96 bg-violet-200 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob animation-delay-4000"></div>

    <nav class="fixed w-full z-50 top-0 glass border-b border-emerald-50">
    <div class="max-w-6xl mx-auto px-6 h-20 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-extrabold text-emerald-600 tracking-tighter transition-transform duration-300 hover:scale-105">
            Web Sederhana
        </a>

        <button id="mobile-menu-button" class="md:hidden text-slate-600 focus:outline-none">
            <i class="fa-solid fa-bars-staggered text-2xl"></i>
        </button>

        <div class="hidden md:flex space-x-10 items-center font-bold text-xs uppercase tracking-widest text-slate-600">
            <a href="{{ route('home') }}" class="relative group py-2 hover:text-emerald-600 transition">
                Home
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="{{ route('cerita') }}" class="relative group py-2 hover:text-emerald-600 transition">
                Cerita
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="{{ route('kontak') }}" class="relative group py-2 hover:text-emerald-600 transition">
                Kontak
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-emerald-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="{{ route('tentang') }}" class="relative group py-2 hover:text-emerald-600 transition border-l pl-8 border-slate-200">
                Tentang
                <span class="absolute bottom-0 left-8 w-0 h-0.5 bg-emerald-600 transition-all duration-300 group-hover:w-[calc(100%-32px)]"></span>
            </a>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden glass border-t border-emerald-50 p-6 absolute w-full left-0 animate-fade-in">
        <div class="flex flex-col space-y-6 font-bold text-sm uppercase tracking-widest text-slate-600">
            <a href="{{ route('home') }}" class="hover:text-emerald-600 transition">Home</a>
            <a href="{{ route('cerita') }}" class="hover:text-emerald-600 transition">Cerita</a>
            <a href="{{ route('kontak') }}" class="hover:text-emerald-600 transition">Kontak</a>
            <a href="{{ route('tentang') }}" class="hover:text-emerald-600 transition text-emerald-600">Tentang</a>
        </div>
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Nutup menu kalau layar di-resize ke desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            menu.classList.add('hidden');
        }
    });
</script>

    <main class="pt-32 pb-16 flex-grow relative z-10">
        @yield('content')
    </main>

    <footer class="py-12 bg-white/40 backdrop-blur-md border-t border-white/20 text-center relative z-10">
        <p class="text-slate-500 text-sm font-medium uppercase tracking-widest">
            Copyright @ 2026 <span class="text-emerald-600 font-bold">MuhammadFarisAndhika</span>. All rights reserved.
        </p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init({ duration: 1000, once: true }); </script>
</body>
</html>
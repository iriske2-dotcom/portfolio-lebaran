@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6">
    <div class="flex flex-col md:flex-row gap-16 items-start py-10">
        
        <div class="md:w-1/3 w-full flex justify-center sticky top-32" data-aos="fade-right">
            <div class="relative animate-float">
                <div class="absolute -inset-4 bg-emerald-100 rounded-[3rem] rotate-6 opacity-40"></div>
                <div class="relative w-full max-w-[320px] aspect-[3/4] overflow-hidden rounded-[2.5rem] shadow-2xl border-[6px] border-white glass">
                    <img src="{{ asset('img/farisbio.png') }}" alt="Muhammad Faris Andhika" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <div class="md:w-2/3 w-full space-y-10" data-aos="fade-left">
            
            <section>
                <h2 class="text-emerald-600 font-bold uppercase tracking-[0.3em] text-sm mb-4">Tentang saya</h2>
                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 leading-tight">
                    Halo, Saya <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">Muhammad Faris Andhika</span>
                </h1>
                <p class="text-slate-600 text-lg leading-relaxed font-medium">
                    Saya adalah seorang mahasiswa di <span class="text-emerald-700 font-semibold">UIN Sjech M. Djamil Djambek Bukittinggi</span> .Saya berasal dari Payakumbuh, Taeh Baruah, Sumatera Barat. Alumni SMAN 1 Kec. Payakumbuh. Lahir Pada tanggal 26 november 2004
                </p>
            </section>

            <section class="bg-white/60 backdrop-blur-md rounded-[2.5rem] p-8 md:p-10 border border-white shadow-xl">
                <h3 class="text-2xl font-bold text-slate-800 mb-8 flex items-center gap-3">
                    <i class="fa-solid fa-address-card text-emerald-500"></i> Biodata Lengkap
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-12">
                    <div class="border-b border-emerald-50 pb-4">
                        <p class="text-slate-400 text-xs font-bold uppercase mb-1">Nama Lengkap</p>
                        <p class="text-slate-800 font-semibold text-lg">Muhammad Faris Andhika</p>
                    </div>
                    <div class="border-b border-emerald-50 pb-4">
                        <p class="text-slate-400 text-xs font-bold uppercase mb-1">Pendidikan</p>
                        <p class="text-slate-800 font-semibold text-lg">Mahasiswa S1 PTIK - UIN Bukittinggi</p>
                    </div>
                    <div class="border-b border-emerald-50 pb-4">
                        <p class="text-slate-400 text-xs font-bold uppercase mb-1">Domisili</p>
                        <p class="text-slate-800 font-semibold text-lg">Payakumbuh, Taeh Baruah, Sumatera Barat</p>
                    </div>
                    <div class="border-b border-emerald-50 pb-4">
                        <p class="text-slate-400 text-xs font-bold uppercase mb-1">Tempat & Tanggal Lahir</p>
                        <p class="text-slate-800 font-semibold text-lg">Taeh Baruah, 26 November 2004</p>
                    </div>
                </div>
            </section>

            <section>
                <h3 class="text-xl font-bold text-slate-800 mb-6">Favorit</h3>
                <div class="flex flex-wrap gap-3">
                    <span class="px-5 py-2 bg-white rounded-full text-emerald-600 font-bold text-sm shadow-sm border border-emerald-50">J-ILY</span>
                    <span class="px-5 py-2 bg-white rounded-full text-emerald-600 font-bold text-sm shadow-sm border border-emerald-50">Laravel</span>
                    <span class="px-5 py-2 bg-white rounded-full text-emerald-600 font-bold text-sm shadow-sm border border-emerald-50">Android Studio</span>
                    <span class="px-5 py-2 bg-white rounded-full text-emerald-600 font-bold text-sm shadow-sm border border-emerald-50">MySQL</span>
                    <span class="px-5 py-2 bg-white rounded-full text-emerald-600 font-bold text-sm shadow-sm border border-emerald-50">PHP / CodeIgniter</span>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
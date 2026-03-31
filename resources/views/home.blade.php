@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center justify-between gap-12 py-10">
        
        <div class="md:w-3/5" data-aos="fade-right">
            <div class="inline-flex items-center gap-2 px-5 py-2 mb-8 rounded-full bg-white/80 text-emerald-700 text-xs font-bold uppercase tracking-widest shadow-sm border border-white">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                Selamat Datang
            </div>
            <h1 class="text-7xl md:text-7xl font-extrabold leading-[1.1] mb-8 text-slate-900 tracking-tight">
                Momen <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500 animate-pulse">Liburan Hari Raya </span> <br>
                Idul Fitri 1447 H.
            </h1>
            <p class="text-slate-600 text-xl mb-10 leading-relaxed max-w-lg font-medium">
                ini adalah jurnal digital saya. Tempat di mana baris kode bertemu dengan indahnya momen Lebaran 2026.
                Dibuat dengan Framework Laravel. 
            </p>
            <a href="{{ route('cerita') }}" class="group relative inline-block bg-slate-900 text-white px-10 py-4 rounded-2xl font-bold transition-all shadow-xl hover:shadow-emerald-200 overflow-hidden">
                <span class="relative z-10">Baca selengkapnya</span>
                <div class="absolute inset-0 bg-emerald-600 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
            </a>
        </div>

        <div class="md:w-2/5 flex justify-center md:justify-end animate-float">
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-emerald-400 to-cyan-400 rounded-[3rem] blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                
                <div class="absolute -inset-4 border-2 border-emerald-200 rounded-[3rem] rotate-6 opacity-50 animate-pulse"></div>
                <div class="relative w-72 h-[480px] overflow-hidden rounded-[3rem] shadow-2xl border-[6px] border-white bg-white">
                    <img src="{{ asset('img/farisaja.jpeg') }}" alt="Faris" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700 group-hover:scale-105">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-40">
        <div class="flex flex-col items-center text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                Momen <span class="text-emerald-600 italic">Lebaran 2026</span>
            </h2>
            <div class="h-1.5 w-24 bg-emerald-500 mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="animate-float-slow group" style="animation-delay: 1s;">
                <div class="relative overflow-hidden rounded-[2.5rem] shadow-2xl border-4 border-white group bg-white">
                    <img src="{{ asset('img/lebaran1.jpeg') }}" class="w-full h-80 object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end p-8">
                        <span class="text-white font-bold text-lg translate-y-4 group-hover:translate-y-0 transition-transform duration-500">Poi Barayo</span>
                    </div>
                </div>
            </div>

            <div class="animate-float group" style="animation-delay: 0.5s;">
                <div class="relative overflow-hidden rounded-[2.5rem] shadow-2xl border-4 border-white group bg-white">
                    <img src="{{ asset('img/lebaran2.jpeg') }}" class="w-full h-80 object-cover transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end p-8">
                        <span class="text-white font-bold text-lg translate-y-4 group-hover:translate-y-0 transition-transform duration-500">Sesudah Shalat IED</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
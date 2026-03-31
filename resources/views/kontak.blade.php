@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-16" data-aos="fade-down">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Mari Berteman</h2>
        <p class="text-slate-500 text-lg">Punya saran atau sekadar ingin menyapa? Hubungi saya di bawah ini.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <a href="https://wa.me/6282286011259" target="_blank" 
           class="group p-8 bg-white rounded-[2rem] border border-slate-100 shadow-xl hover:shadow-emerald-100 hover:-translate-y-2 transition-all duration-300 text-center"
           data-aos="fade-up" data-aos-delay="100">
            <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fa-brands fa-whatsapp"></i>
            </div>
            <h3 class="font-bold text-lg mb-2">WhatsApp</h3>
            <p class="text-slate-400 text-sm italic">Klik untuk Chat</p>
        </a>

        <a href="mailto:farisandhika579@gmail.com" 
           class="group p-8 bg-white rounded-[2rem] border border-slate-100 shadow-xl hover:shadow-emerald-100 hover:-translate-y-2 transition-all duration-300 text-center"
           data-aos="fade-up" data-aos-delay="200">
            <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fa-regular fa-envelope"></i>
            </div>
            <h3 class="font-bold text-lg mb-2">Email</h3>
            <p class="text-slate-400 text-sm italic">farisandhika579@gmail.com</p>
        </a>

        <a href="https://instagram.com/fariss_andhika" target="_blank"
           class="group p-8 bg-white rounded-[2rem] border border-slate-100 shadow-xl hover:shadow-emerald-100 hover:-translate-y-2 transition-all duration-300 text-center"
           data-aos="fade-up" data-aos-delay="300">
            <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <h3 class="font-bold text-lg mb-2">Instagram</h3>
            <p class="text-slate-400 text-sm italic">@fariss_andhika</p>
        </a>

        <a href="https://github.com/iriske2-dotcom" target="_blank"
           class="group p-8 bg-white rounded-[2rem] border border-slate-100 shadow-xl hover:shadow-emerald-100 hover:-translate-y-2 transition-all duration-300 text-center"
           data-aos="fade-up" data-aos-delay="400">
            <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fa-brands fa-github"></i>
            </div>
            <h3 class="font-bold text-lg mb-2">GitHub</h3>
            <p class="text-slate-400 text-sm italic">Lihat Repo Saya</p>
        </a>

    </div>

    <div class="mt-12 p-6 bg-emerald-50 rounded-[2.5rem] border border-emerald-100 text-center" data-aos="zoom-in">
        <p class="text-emerald-700 font-semibold italic text-sm">
            <i class="fa-solid fa-location-dot mr-2"></i> Payakumbuh, Taeh Baruah, Sumatera Barat
        </p>
    </div>
</div>
@endsection
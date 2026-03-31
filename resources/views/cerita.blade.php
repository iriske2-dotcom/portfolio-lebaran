@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6">
    <div class="mb-16 text-center" data-aos="fade-up">
        <h2 class="text-4xl md:text-6xl font-extrabold text-slate-900 mb-4 tracking-tight">
            Lebaran <span class="text-emerald-600">2026</span> / 1447 H
        </h2>
        <p class="text-gray-500 italic text-lg">"Pulang bukan sekadar perjalanan, tapi kembali ke pelukan doa."</p>
        <div class="h-1.5 w-24 bg-emerald-500 mx-auto mt-6 rounded-full"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
        
        <div class="group bg-white/70 backdrop-blur-md rounded-[2.5rem] overflow-hidden shadow-xl border border-white hover:shadow-emerald-100 transition-all duration-500 hover:-translate-y-2" 
             data-aos="fade-up">
            <div class="relative h-72 overflow-hidden">
                <img src="{{ asset('img/lebaran2.jpeg') }}" alt="Foto Bersama Keluarga" 
                     class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/20 to-transparent"></div>
            </div>
            
            <div class="p-8 md:p-10">
                <span class="text-emerald-600 font-bold text-xs uppercase tracking-[0.2em]">lebaran Pertama "21 Maret 2026"</span>
                <h3 class="text-3xl font-extrabold mt-4 mb-4 text-gray-800 group-hover:text-emerald-600 transition-colors">Foto Bersama Keluarga</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Lebaran tahun ini terasa spesial di kampung halaman Taeh Baruah. Udara sejuk menyambut pagi Idul Fitri 1447 H. 
                    Tahun ini, akhirnya saya bisa pulang untuk merayakan hari raya idul fitri di kampung halaman. 
                    Hangatnya Rendang buatan mama jauh lebih nikmat dari kemenangan debugging manapun 🤗.
                </p>
            </div>
        </div>

        <div class="group bg-white/70 backdrop-blur-md rounded-[2.5rem] overflow-hidden shadow-xl border border-white hover:shadow-emerald-100 transition-all duration-500 hover:-translate-y-2" 
             data-aos="fade-up" data-aos-delay="200">
            <div class="relative h-72 overflow-hidden">
                <img src="{{ asset('img/lebaran3.jpeg') }}" alt="Silaturahmi" 
                     class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/20 to-transparent"></div>
            </div>
            
            <div class="p-8 md:p-10">
                <span class="text-emerald-600 font-bold text-xs uppercase tracking-[0.2em]">Lebaran kedua "22 Maret 2026"</span>
                <h3 class="text-3xl font-extrabold mt-4 mb-4 text-gray-800 group-hover:text-emerald-600 transition-colors">Silaturahmi Ketempat Sanak Saudara</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Potret Saya dan keluarga pergi silaturahmi ke tempat kakek pada lebaran kedua tepatnya tanggal 22 maret 2026 di pagi menjelang siang. 
                    kami makan bersama, bercerita, dan saling salam lebaran😊.
                </p>
            </div>
        </div>
    </div>

    <div class="flex justify-center" data-aos="fade-up" data-aos-delay="300">
        <div class="group bg-white/70 backdrop-blur-md rounded-[2.5rem] overflow-hidden shadow-xl border border-white hover:shadow-emerald-100 transition-all duration-500 hover:-translate-y-2 max-w-2xl">
            <div class="relative h-80 overflow-hidden">
                <img src="{{ asset('img/sepupu.jpeg') }}" alt="Momen Penutup" 
                     class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/20 to-transparent"></div>
            </div>
            
            <div class="p-8 md:p-10">
                <span class="text-emerald-600 font-bold text-xs uppercase tracking-[0.2em]">Persepupuan</span>
                <h3 class="text-3xl font-extrabold mt-4 mb-4 text-gray-800 group-hover:text-emerald-600 transition-colors">Foto Bersama</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Menutup rangkaian liburan dengan penuh syukur. Menghabiskan waktu santai di rumah sebelum kembali fokus ke dunia koding dan kuliah. Setiap detik di Taeh Baruah adalah energi tambahan untuk memulai rutinitas kembali.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
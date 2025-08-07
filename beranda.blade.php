<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMK Negeri 2 Depok Sleman</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes slide {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    .animate-slide {
      animation: slide 20s linear infinite;
    }
  </style>
</head>
<body class="font-sans text-gray-800">

  <!-- Hero Section -->
  <section class="relative h-[600px] w-full overflow-hidden">
    <img src="https://www.smkn2depoksleman.sch.id/uploads/1751455665256.jpg"
         class="absolute inset-0 w-full h-full object-cover" alt="Hero Image">
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Floating Header -->
    <div class="absolute top-6 left-1/2 transform -translate-x-1/2 bg-white rounded-full shadow-md px-6 py-3 flex justify-between items-center w-[90%] md:w-[75%] z-20">
      <div class="flex items-center space-x-3">
        <img src="https://links.stembayo.sch.id/_next/image?url=%2Flogo-stembayo.png&w=3840&q=75"
             class="h-10 w-10 object-contain" alt="Logo Sekolah" />
      </div>
      <div class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
        <a href="#" class="hover:text-green-600">Beranda</a>
        <a href="#" class="hover:text-green-600">Mitra</a>
      </div>
    </div>

    <!-- Hero Content (Teks Tengah) -->
    <div class="relative z-10 flex flex-col justify-center h-full text-white container mx-auto px-6">
      <div class="mb-4 w-2/5 bg-green-700 rounded-full">
        <button class="bg-green-700 text-sm font-semibold px-4 py-2 rounded-full mr-2">Info PKL</button>
        <a href="#" class="text-sm inline-flex items-center hover:underline">
          Baca Selengkapnya
          <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24"
               stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               d="M9 5l7 7-7 7" /></svg>
        </a>
      </div>
      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">SMK NEGERI 2 DEPOK</h1>
      <p class="text-lg font-light mt-1">Unggul, Berkarakter, Kompeten</p>
    </div>
  </section>

  <!-- Running Logo Section -->
  <section class="bg-white py-6 overflow-hidden">
    <div class="whitespace-nowrap">
      <div class="flex gap-10 animate-slide">
        <img src="https://blog.gamatechno.com/wp-content/uploads/2017/05/gamatechno.png" class="h-10" />
        <img src="https://blog.gamatechno.com/wp-content/uploads/2017/05/gamatechno.png" class="h-10" />
        <img src="https://blog.gamatechno.com/wp-content/uploads/2017/05/gamatechno.png" class="h-10" />
        <img src="https://blog.gamatechno.com/wp-content/uploads/2017/05/gamatechno.png" class="h-10" />
        <img src="https://blog.gamatechno.com/wp-content/uploads/2017/05/gamatechno.png" class="h-10" />
        <img src="https://blog.gamatechno.com/wp-content/uploads/2017/05/gamatechno.png" class="h-10" />
      </div>
    </div>
  </section>

  <!-- Tentang Sekolah -->
  <section class="bg-gray-100 py-10">
    <div class="container mx-auto px-6 md:flex items-center gap-6">
      <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,f_auto,q_auto:best,w_640/v1634025439/01gdfn7a08g0f01b4jck0238xr.jpg"
           class="w-full md:w-1/2 rounded-lg shadow" alt="Gedung Sekolah" />
      <div class="md:w-1/2 mt-6 md:mt-0 bg-[#3f5240]  text-white p-6 rounded-lg">
        <h2 class="text-xl font-bold mb-2">SMK Negeri 2 Depok Sleman</h2>
        <p class="text-sm">SMK Negeri 2 Depok Sleman adalah sekolah berbasis kejuruan yang menjalin kemitraan dengan dunia industri dan usaha. Fokus utama kami adalah menghasilkan lulusan yang siap kerja dan mampu berkompetisi secara global.</p>
      </div>
    </div>
  </section>

  <!-- Visi dan Misi -->
<section class="bg-white py-20">
  <div class="container mx-auto px-6 flex justify-center">
    <div class="bg-white rounded-xl shadow-md px-6 py-10 w-full max-w-3xl text-center">
      <p class="text-sm text-green-600 flex items-center justify-center gap-2 mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4v16m8-8H4" />
        </svg>
        Visi dan Misi
      </p>
      <h2 class="text-xl md:text-2xl font-bold text-green-700 mb-6">Visi Membangun Masa Depan</h2>
      <p class="text-gray-700 text-lg leading-relaxed mb-6">
        Menghasilkan peserta didik yang unggul, berkarakter,<br />
        kompeten, dan berwawasan lingkungan.
      </p>
      <a href="#misi" class="text-sm font-semibold text-gray-800 hover:text-green-700 inline-flex items-center">
        Misi
        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5l7 7-7 7" />
        </svg>
      </a>
    </div>
  </div>
</section>

  <!-- Pengalaman PKL -->
<section class="bg-white py-16">
  <div class="container mx-auto px-6 md:flex items-center justify-between gap-12">
    <!-- Gambar bertumpuk -->
    <div class="relative w-full md:w-[360px] h-[260px]">
      <div class="absolute top-4 left-4 bg-[#c2d39f] w-full h-full rounded"></div>
      <div class="absolute top-0 left-0 bg-[#35493f] w-full h-full rounded shadow-lg"></div>
    </div>
    <!-- Teks -->
    <div class="mt-10 md:mt-0 md:w-2/3">
      <p class="text-sm text-green-700 flex items-center gap-2 mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 4v16m8-8H4" />
        </svg>
        Info Praktik Kerja Lapangan
      </p>
      <h3 class="text-xl font-bold text-green-800 mb-3">Pengalaman Nyata untuk Masa Depan Karier</h3>
      <p class="text-sm text-gray-700 leading-relaxed">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
        make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged.
      </p>
    </div>
  </div>
</section>

  <!-- Statistik Mitra Industri -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-6 text-center">
    <p class="text-sm text-green-700 flex items-center justify-center gap-2 mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24"
           stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 4v16m8-8H4" />
      </svg>
      Jumlah Mitra Industri
    </p>
    <div class="bg-[#3f5240] rounded-xl text-white flex flex-col md:flex-row justify-around items-center py-8">
      <div class="mb-6 md:mb-0">
        <p class="text-2xl font-bold">100 +</p>
        <p class="text-sm">Jumlah Mitra</p>
      </div>
      <div class="mb-6 md:mb-0">
        <p class="text-2xl font-bold">80 +</p>
        <p class="text-sm">Dalam Provinsi</p>
      </div>
      <div>
        <p class="text-2xl font-bold">20 +</p>
        <p class="text-sm">Luar Provinsi</p>
      </div>
    </div>
  </div>
</section>

<!-- Footer Baru -->
<footer class="bg-[#3f5240] text-white py-12">
  <div class="container mx-auto px-6">
    <h2 class="text-xl font-semibold mb-8">Jiwa Kesatria, Prestasi Mendunia</h2>
    <div class="grid md:grid-cols-4 gap-8">
      
      <!-- Tentang -->
      <div>
        <h3 class="font-bold mb-2">SMK Negeri 2 Depok</h3>
        <p class="text-sm leading-relaxed mb-3">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
        <div class="flex space-x-4 mt-2">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- Navigasi -->
      <div>
        <h3 class="font-bold mb-2">Navigasi</h3>
        <ul class="text-sm space-y-2">
          <li><a href="#" class="hover:underline">Beranda</a></li>
          <li><a href="#" class="hover:underline">Mitra</a></li>
        </ul>
      </div>

      <!-- Kontak -->
      <div>
        <h3 class="font-bold mb-2">Kontak</h3>
        <ul class="text-sm space-y-2">
          <li class="flex items-start"><span class="mr-2">📞</span> (0274) 513515</li>
          <li class="flex items-start"><span class="mr-2">✉️</span> info@smkn2depoksleman.sch.id</li>
          <li class="flex items-start"><span class="mr-2">🕒</span> Senin - Jumat :<br />07.00 WIB – 15.00 WIB</li>
        </ul>
      </div>

      <!-- Lokasi -->
      <div>
        <h3 class="font-bold mb-2">Lokasi</h3>
        <img src="https://via.placeholder.com/150x100?text=Lokasi" alt="Peta Lokasi" class="rounded-md" />
      </div>
    </div>

    <!-- Garis & Copyright -->
    <hr class="border-white/30 my-6" />
    <p class="text-center text-sm">
      Copyright © 2025 SMK Negeri 2 Depok Sleman. All Rights Reserved
    </p>
  </div>
</footer>

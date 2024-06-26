<?php $title = 'CLINISKIN | Registasi Dokter'; ?>

<div class="font-['Poppins'] bg-gradient-to-r from-[#355186] to-[#687CA3] flex items-center justify-center min-h-screen">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <img src="<?= urlpath('asset/img/registrasi.png') ?>" alt="" class="mt-10 max-w-xs md:w-auto mx-auto md:mx-0 lg:ml-44 md:mr-2">

        <form action="/cliniskin/registrasi" method="post" class="max-w-sm lg:max-w-2xl lg:w-2/5 mx-auto bg-[#F9F9F9] rounded-xl p-10 md:my-10">
            <div class="flex flex-col mb-6">
                <span class="text-[#2D4574] font-extrabold text-3xl">Selamat datang!</span>
                <span class="text-[#355186] font-medium text-sm">Silahkan lengkapi akun anda untuk melakukan Registrasi</span>
            </div>
            <div class="mb-5">
                <label for="nama" class="block mb-2 text-base font-bold text-[#355186]">Nama Lengkap</label>
                <input type="text" id="nama" name="nama"
                    class="bg-[#E9E9E9] border-none text-gray-900 text-sm rounded-lg focus:ring-[#355186] block w-full p-2.5" placeholder="Masukkan nama lengkap anda"
                    required />
            </div>
            <div class="mb-5">
                <label for="no_telp" class="block mb-2 text-base font-bold text-[#355186]">No. Telepon</label>
                <input type="number" id="no_telp" name="no_telp"
                    class="bg-[#E9E9E9] border-none text-gray-900 text-sm rounded-lg focus:ring-[#355186] block w-full p-2.5" placeholder="Masukkan nomor telepon anda"
                    required />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-base font-bold text-[#355186]">Email</label>
                <input type="email" id="email" name="email"
                    class="bg-[#E9E9E9] border-none text-gray-900 text-sm rounded-lg focus:ring-[#355186] block w-full p-2.5"
                    placeholder="nama@gmail.com" required />
            </div>
            <div class="mb-5">
                <label for="alamat" class="block mb-2 text-base font-bold text-[#355186]">Alamat</label>
                <input type="text" id="alamat" name="alamat" 
                    class="bg-[#E9E9E9] border-none text-gray-900 text-sm rounded-lg focus:ring-[#355186] block w-full p-2.5" placeholder="Masukkan alamat rumah anda"
                    required />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-base font-bold text-[#355186]">Password</label>
                <input type="password" id="password" name="password"
                    class="bg-[#E9E9E9] border-none text-gray-900 text-sm rounded-lg focus:ring-[#355186] block w-full p-2.5" placeholder="Buat password untuk akun anda"
                    required />
            </div>
            <button type="submit"
                class="text-white bg-[#355186] hover:bg-[#2D4574] focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Registrasi
            </button>
            <div class="text-sm text-[#355186] font-medium mt-4 flex justify-center">
                <span>Sudah punya akun? 
                    <a href="<?= urlpath('login') ?>" class="underline">Login sekarang
                    </a>
                </span>
            </div>
        </form>
    </div>
</div>
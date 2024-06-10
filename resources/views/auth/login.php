<?php $title = 'CLINISKIN | Login'; ?>

<div class="font-['Poppins'] bg-gradient-to-r from-[#355186] to-[#687CA3] flex items-center justify-center min-h-screen">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <img src="<?= urlpath('asset/img/login.png') ?>" alt="" class="mt-10 max-w-sm mx-auto md:mx-0 md:max-w-lg lg:max-w-2xl md:ml-2 md:mr-2">
        <form action="<?='/cliniskin/' . 'login'?>" method="post" class="max-w-sm lg:max-w-xl lg:w-2/5 mx-auto bg-[#F9F9F9] rounded-xl p-10 md:my-10">
            <div class="flex flex-col mb-6">
                <span class="text-[#2D4574] font-extrabold text-3xl">Selamat datang!</span>
                <span class="text-[#355186] font-medium text-sm">Masukkan akun untuk melanjutkan</span>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-base font-bold text-[#355186]">Email</label>
                <input type="email" name="email" id="email" class="bg-[#E9E9E9] border-none text-gray-900 text-sm rounded-lg focus:ring-[#355186] block w-full p-2.5" placeholder="name@gmail.com" required />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-base font-bold text-[#355186]">Password</label>
                <input type="password" name="password" id="password" class="bg-[#E9E9E9] border-none text-gray-900 text-sm rounded-lg focus:ring-[#355186] block w-full p-2.5" required />
            </div>
            <!-- HARUS ADA BACKEND NYA - PAKAI COOKIE -->
            <div class="flex items-start mb-5">
                <div class="flex items-center h-5">
                    <input name="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" />
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-gray-900">Remember
                    me</label>
            </div>
            <button type="submit" class="text-white bg-[#355186] hover:bg-[#2D4574] focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Login
            </button>
            <div class="text-sm text-[#355186] font-medium mt-4 flex justify-center">
                <span>Belum punya akun?
                    <a href="<?= urlpath('registrasi') ?>" class="underline">Buat sekarang
                    </a>
                </span>
            </div>
        </form>
    </div>
</div>


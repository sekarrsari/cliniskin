<?php $title = 'CLINISKIN | Beranda Customer'; ?>

<!-- Hero start -->
<section>
    <div class="font-['Poppins'] bg-gradient-to-b from-[#355186] to-[#687DA3]">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between md:pl-5 lg:pl-20">
            <img src="<?= urlpath('asset/img/hero-img.png') ?>" alt="" class="max-w-sm mx-auto md:mb-8 md:mx-0 md:max-w-md lg:max-w-lg lg:mr-32">
            <div class="flex flex-col items-center md:items-end text-white mr-8 mt-8 md:mt-0 md:ml-8 lg:mr-24">
                <span class="font-extrabold text-4xl lg:text-5xl mb-2 md:mb-3">Cliniskin</span>
                <span class="font-medium mb-6 md:mb-8 lg:mb-10 text-base lg:text-lg">Make Your Skin
                    Beautiful</span>
                <span class="font-normal mb-10 md:mb-12 lg:mb-14 text-sm ms:text-sm lg:text-base text-center md:text-right lg:text-right">
                    Cliniskin adalah klinik kecantikan yang menyediakan berbagai perawatan kulit dan kecantikan berkualitas tinggi, didukung oleh tenaga profesional berpengalaman dan teknologi terkini.
                </span>
                <a href="<?= urlpath('beranda-cust/appointment/create') ?>" type="button" class="py-2 px-4 md:py-2.5 md:px-5 text-sm mb-10 font-medium text-white bg-[#92A5CA] rounded-lg drop-shadow-lg hover:bg-gray-100 hover:text-[#355186]">Buat
                    Jadwal Treatment</a>
            </div>
        </div>
    </div>
</section>
<!-- Hero end -->

<!-- Jadwal start -->
<section>
    <div class="font-['Poppins'] bg-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="flex flex-col items-center mt-20 mb-10 md:items-start md:my-32 md:ml-20 lg:mr-32">
                <span class="text-[#355186] font-extrabold text-2xl lg:text-3xl mb-3">Ada jadwal treatment apa hari
                    ini?</span>
                <span class="font-medium text-sm md:text-base mb-10 md:mb-12 lg:mb-14">Daftar jadwal treatment
                    dengan client dan dokter Cliniskin</span>
                <a href="<?= urlpath('beranda-cust/appointment') ?>" type="button" class="py-2 px-4 md:py-2.5 md:px-5 text-sm mb-6 font-medium text-white bg-[#92A5CA] rounded-lg drop-shadow-lg hover:bg-gray-200 hover:text-[#355186]">Lihat
                    Kalender Treatment</a>
            </div>
            <img src="<?= urlpath('asset/img/jadwal.png') ?>" alt="" class="max-w-sm mx-auto mb-20 md:my-20 md:mx-0 md:max-w-md lg:max-w-lg lg:mr-20">
        </div>
    </div>
</section>
<!-- Jadwal end -->


<!-- Dokter klinik yang bertugas start -->
<section>
    <div class="font-['Poppins'] bg-[#A0ACC3] relative">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <img src="<?= urlpath('asset/img/circle-a.png') ?>" alt="" class="absolute -top-32 left-0 w-6/12 sm:w-64 md:w-64">
            <img src="<?= urlpath('asset/img/dokter-klinik.png') ?>" alt="" class="max-w-sm mx-auto my-10 md:my-20 md:mx-30">
            <div class="flex flex-col items-center mb-10 md:items-end md:my-32 md:ml-20 lg:mr-32">
                <span class="text-white font-extrabold text-2xl lg:text-3xl mb-3">Siapa dokter klinik yang
                    bertugas?</span>
                <span class="text-white font-medium text-sm md:text-base mb-10 md:mb-12 lg:mb-14">Biodata dokter dan
                    status kerja</span>
                <a href="<?= urlpath('beranda-cust/list-dokter') ?>" type="button" class="py-2 px-4 md:py-2.5 md:px-5 text-sm mb-6 font-medium text-white bg-[#355186] rounded-lg drop-shadow-lg hover:bg-gray-300 hover:text-[#355186]">Lihat
                    Daftar Dokter Cliniskin</a>
            </div>
            <img src="<?= urlpath('asset/img/circle-b.png') ?>" alt="" class="absolute bottom-0 right-0 w-4/12 sm:w-56 md:w-56">
        </div>
    </div>
</section>
<!-- Dokter klinik yang bertugas end -->
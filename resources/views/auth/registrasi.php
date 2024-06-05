<?php $title = 'CLINISKIN | Registrasi'; ?>

<div class="text-white font-['Poppins'] bg-gradient-to-r from-[#355186] to-[#687CA3] min-h-screen">
    <h2 class="text-4xl pt-14 mb-16 md:mb-14 text-center font-bold">Pilih role anda</h2>
    <div class="flex items-center justify-center text-center">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center">
            <div class="max-w-xs bg-[#A0ACC3] rounded-lg shadow-lg">
                <a href="<?= urlpath('registrasi-dokter') ?>">
                    <img class="rounded-t-lg h-auto" src="<?= urlpath('asset/img/dokter.png') ?>" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Dokter</h5>
                    </div>
                </a>
            </div>
            <div class="max-w-xs bg-[#A0ACC3] rounded-lg shadow-lg p-4">
                <a href="<?= urlpath('registrasi-staff'); ?>">
                    <img class="rounded-t-lg h-auto" src="<?= urlpath('asset/img/staff.png') ?>" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Staff Klinik</h5>
                    </div>
                </a>
            </div>
            <div class="max-w-xs bg-[#A0ACC3] rounded-lg shadow-lg p-4">
                <a href="<?= urlpath('registrasi-cust'); ?>">
                    <img class="rounded-t-lg h-auto" src="<?= urlpath('asset/img/cust.png') ?>" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Customer</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
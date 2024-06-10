<?php $title = 'CLINISKIN | List Treatment'; ?>


<div class="font-['Poppins'] bg-gradient-to-b from-[#A0ACC3] to-[#D6D6D6] min-h-screen flex justify-center">
    <div class="lg:max-w-6xl bg-white p-8 rounded-lg shadow-md my-12">
        <div class="relative overflow-x-auto">
            <div class="flex flex-col sm:flex-row flex-wrap gap-4 items-center justify-between pb-4">

                <!-- Search Bar Start -->
                <form action="/cliniskin/beranda-staff/search-treatment" class="max-w-md mx-auto w-full">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <input type="search" id="default-search" name="letters"
                            class="block w-full p-4 pl-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Cari Jenis Treatment..." required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-[#2D4675] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                    </div>
                </form>
                <!-- Search Bar End -->

                <!-- List Treatment Start -->
                <?php foreach ($treatments as $treatment): ?>
                    <div class="max-w-screen-lg mx-auto bg-white border border-gray-200 rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center">
                            <span class="bg-[#355186] text-white text-sm font-medium mr-2 px-10 py-1.5 rounded"><?= $treatment['jenis'];?></span>
                            <span class="bg-yellow-400 text-black text-sm font-medium mr-2 px-3 py-1.5 rounded">Rp <?= number_format($treatment['harga'],0,',','.');?></span>
                        </div>
                        <div class="mt-4">
                            <p class="font-semibold">Manfaat: <span class="font-normal"><?= $treatment['manfaat'];?></span></p>
                            <p class="font-semibold mt-2">Cocok Untuk: <span class="font-normal"><?= $treatment['cocok'];?></span></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- List Treatment End -->
            </div>
        </div>
    </div>
    <!-- Table end -->
    </div>
</div>

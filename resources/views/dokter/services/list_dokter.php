<?php $title = 'CLINISKIN | List Dokter'; ?>


<div class="font-['Poppins'] bg-gradient-to-b from-[#A0ACC3] to-[#D6D6D6] min-h-screen flex justify-center">
    <div class="w-full max-w-screen-lg p-4 bg-white border border-gray-200 rounded-lg shadow-md my-12">
        <div class="relative overflow-x-auto">
            <div class="flex flex-col sm:flex-row flex-wrap gap-4 items-center justify-center pb-4">

                <!-- Search Bar Start -->
                <form class="w-full max-w-2xl">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <input type="search" id="default-search"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Cari Dokter Kecantikan..." required />
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-[#2D4675] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                    </div>
                </form>
                <!-- Search Bar End -->
            </div>

            <!-- List Dokter Start -->
            <div class="w-full max-w-screen-lg p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200">

                        <li class="py-3 sm:py-4 my-2">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-16 h-16 rounded-full" src="<?= urlpath('asset/img/list-dokter/listdoct.png') ?>" alt="Doctor Image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-lg font-semibold text-gray-900 truncate">
                                                dr. Eunike Sonbay
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-medium text-gray-900">Dokter Kecantikan - Radiant
                                                Glow
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <p class="text-sm text-gray-500 truncate">
                                            081122653398
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            Jl. Kalimantan No. 7, Sumbersari, Jember, Jawa Timur, 16028
                                        </p>
                                    </div>
                                    <div class="mt-2 bg-[#E5E6E8] text-xs font-medium px-3 py-1.5 rounded inline-block">
                                        <span class="font-bold text-[#355186]">9 Pasien</span>
                                        <span class="text-[#355186]">telah membuat janji dengan dokter ini</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-3 sm:py-4 my-2">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-16 h-16 rounded-full" src="<?= urlpath('asset/img/list-dokter/listdoct.png') ?>" alt="Doctor Image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-lg font-semibold text-gray-900 truncate">
                                                dr. Shandra Jani
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-medium text-gray-900">Dokter Kecantikan - Anti-Aging
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <p class="text-sm text-gray-500 truncate">
                                            085978789879
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            Jl. Sumatra No. 9, Sumbersari, Jember, Jawa Timur, 16012
                                        </p>
                                    </div>
                                    <div class="mt-2 bg-[#E5E6E8] text-xs font-medium px-3 py-1.5 rounded inline-block">
                                        <span class="font-bold text-[#355186]">9 Pasien</span>
                                        <span class="text-[#355186]">telah membuat janji dengan dokter ini</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="py-3 sm:py-4 my-2">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-16 h-16 rounded-full" src="<?= urlpath('asset/img/list-dokter/listdoct.png') ?>" alt="Doctor Image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-lg font-semibold text-gray-900 truncate">
                                                dr. Cantika Cipta
                                            </p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-sm font-medium text-gray-900">Dokter Kecantikan - Acne Care
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <p class="text-sm text-gray-500 truncate">
                                            085978789899
                                        </p>
                                        <p class="text-sm text-gray-500 truncate">
                                            Jl. Sumatra No. 9, Sumbersari, Jember, Jawa Timur, 16012
                                        </p>
                                    </div>
                                    <div class="mt-2 bg-[#E5E6E8] text-xs font-medium px-3 py-1.5 rounded inline-block">
                                        <span class="font-bold text-[#355186]">9 Pasien</span>
                                        <span class="text-[#355186]">telah membuat janji dengan dokter ini</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- List Dokter End -->
        </div>
    </div>
</div>

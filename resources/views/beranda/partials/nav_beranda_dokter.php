<nav class="border-gray-200 bg-[#355186] font-['Poppins']">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="<?= urlpath('beranda-dokter') ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="<?= urlpath('asset/img/logo.png') ?>" class="h-8" alt="Cliniskin Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Cliniskin</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium text-black flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:bg-inherit md:text-white">
                <li>
                    <a href="<?= urlpath('beranda-dokter') ?>" class="block py-2 px-3 bg-[#687DA3] text-white rounded-lg hover:bg-gray-100 md:bg-transparent md:hover:bg-transparent md:border-0 md:hover:text-[#92A5CA] md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#92A5CA] md:p-0 md:w-auto">Services <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="<?= urlpath('beranda-dokter/list-treatment') ?>" class="block px-4 py-2 hover:bg-gray-100">List Treatment</a>
                            </li>
                            <li>
                                <a href="<?= urlpath('beranda-dokter/list-dokter') ?>" class="block px-4 py-2 hover:bg-gray-100">List Dokter</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?= urlpath('beranda-dokter/profile') ?>" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#92A5CA] md:p-0">Profile</a>
                </li>
                <li>
                    <a href="<?= urlpath('beranda-dokter/appointment') ?>" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#92A5CA] md:p-0">Appointment</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
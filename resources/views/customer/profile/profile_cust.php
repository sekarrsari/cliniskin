<?php $title = 'CLINISKIN | Profile'; ?>


<div class="font-['Poppins'] bg-gradient-to-b from-[#A0ACC3] to-[#D6D6D6] min-h-screen flex justify-center">
    <div class="lg:max-w-4xl bg-white p-8 rounded-lg shadow-md my-12">
        <div class="relative overflow-x-auto">
            <div class="flex flex-col sm:flex-row flex-wrap gap-4 items-center justify-between pb-4">

                <!-- Profile Customer Start -->
                <div class="container mx-xl mt-10">
                    <div class="bg-white p-8 rounded-lg ">
                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                    <input value="<?=$user['nama']?>" disabled type="text" id="name" class="mt-1 block w-96 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="Dea Novela">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                                    <div class="mt-1 flex">
                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">+62</span>
                                        <input value="<?=$user['no_telp']?>" disabled type="text" id="phone" class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="888-0000-0000">
                                    </div>
                                </div>
                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                                    <input value="<?=$user['alamat']?>" disabled type="text" id="address" class="mt-1 block w-96 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="Jl. Letnan Rantam, No 7, Badean, Bondowoso">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input value="<?=$user['email']?>" disabled type="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="deanovelaraa@gmail.com">
                                </div>
                            </div>
                            <div class="mt-6 text-right">
                                <a href="/cliniskin/logout" class="py-2 px-4 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Logout</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Profile Customer End -->
            </div>
        </div>
    </div>
    <!-- Table end -->
    </div>
</div>

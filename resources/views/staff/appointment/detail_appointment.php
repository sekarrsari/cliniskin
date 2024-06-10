<?php $title = 'CLINISKIN | Detail Appointment'; ?>


<div class="font-['Poppins'] bg-gradient-to-b from-[#A0ACC3] to-[#D6D6D6] min-h-screen flex justify-center">
    <div class="w-full max-w-screen-lg p-4 bg-white border border-gray-200 rounded-lg shadow-md my-12">
        <div class="relative overflow-x-auto">
            <div class="flex flex-col sm:flex-row flex-wrap gap-4 items-center justify-between pb-4">
                <!-- Create Appointment Start -->
                <div class="container mx-xl mt-10">
                    <div class="bg-white p-8 rounded-lg ">
                        <form class="/cliniskin/beranda-staff/appointment/detail" method="POST">
                            <input type="hidden" name="id" value="<?=$appointment['id']?>" id="">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Nama -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                    <input type="text" id="name" value="<?=$appointment['nama']?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100" placeholder="Ex: Dea Novela" disabled>
                                </div>
                                <!-- No. Telepon -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">No.
                                        Telepon</label>
                                    <div class="mt-1 flex">
                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">+62</span>
                                        <input type="text" id="phone" value="<?=$appointment['no_telp']?>" class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100" placeholder="888-0000-0000" disabled>
                                    </div>
                                </div>
                                <!-- Keluhan -->
                                <div class="relative md:col-span-2">
                                    <label for="keluhan" class="block mb-2 text-sm font-medium text-gray-900">Keluhan</label>
                                    <textarea id="keluhan" rows="3" value="" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Ex: Saya mengalami masalah kulit berjerawat di daerah pipi" disabled><?=$appointment['keluhan']?></textarea>
                                </div>
                                <!-- Jenis Treatment -->
                                <div>
                                    <label for="jenistreatment" class="block text-sm font-medium text-gray-700 ">Jenis
                                        Treatment</label>
                                    <input type="text" id="jenistreatment" value="<?=$appointment['jenis']?>" class="flex-1 min-w-0 block w-full px-3 py-2 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100" disabled>
                                </div>
                                <!-- Nama Dokter -->
                                <div>
                                    <label for="namadokter" class="block text-sm font-medium text-gray-700 ">Nama
                                        Dokter</label>
                                    <input type="text" id="namadokter" value="<?=$appointment['dokter']?>" class="flex-1 min-w-0 block w-full px-3 py-2 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100" disabled>
                                </div>
                            </div>

                            <div class="mt-6 md:mt-8 grid grid-cols-1 md:grid-cols-4">
                                <!-- Waktu Treatment -->
                                <div>
                                    <label for="waktu" class="block text-sm font-medium text-gray-700">Waktu
                                        Treatment</label>
                                    <div class="relative max-w-sm mb-6 md:mb-0 mt-1">
                                        <input type="text" id="waktu" value="<?=$appointment['tanggal']?>" class="flex-1 min-w-0 block w-full px-3 py-2 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100" disabled>
                                    </div>
                                </div>
                                <!-- Jam -->
                                <div class="md:ml-16">
                                    <label for="time" class="block text-sm font-medium text-gray-900 mb-1">Jam</label>
                                    <input type="text" value="<?=$appointment['jam']?>" id="time" class="flex-1 min-w-0 block w-full px-3 py-2 rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100" disabled>
                                </div>
                                <!-- Status -->
                                <div class="mt-6 md:mt-0 lg:mt-0 md:col-span-2 md:ml-20">
                                    <label for="status" class="block text-sm font-medium text-gray-700 ">Status Treatment
                                    </label>
                                    <select name="status" id="status" class="py-2.5 mt-1 block w-full md:w-2/3 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100 pl-5" required>
                                        <option hidden value=""><?php if(!empty($appointment['status'])) {echo $appointment['status'];} else {echo 'Pilih status treatment';}?></option>
                                        <option value="On Progress">On Progress</option>
                                        <option value="Cancelled">Cancelled</option>
                                        <option value="Done">Done</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Button start -->
                            <div class="flex justify-end mt-10">
                                <!-- Button Batal -->
                                <a href="/cliniskin/beranda-staff/appointment" class="text-[#355186] border border-[#355186] hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-1 text-center me-2 mb-2">Batal</a>
                                <!-- Button Simpan -->
                                <button type="submit" class="text-white bg-[#355186] hover:bg-[#2b426d] border border-[#355186] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 me-2 mb-2 focus:outline-none">Simpan</button>
                            </div>
                            <!-- Button end -->

                            <!-- Create Appointment End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</div>
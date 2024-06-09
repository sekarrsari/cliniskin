<?php $title = 'CLINISKIN | Appointment'; ?>


<div class="font-['Poppins'] bg-gradient-to-b from-[#A0ACC3] to-[#D6D6D6] min-h-screen flex justify-center">
    <div class="w-full max-w-screen-lg p-4 bg-white border border-gray-200 rounded-lg shadow-md my-12">
        <div class="relative overflow-x-auto">
            <div class="flex flex-col sm:flex-row flex-wrap gap-4 items-center justify-between pb-4">
                <!-- Create Appointment Start -->
                <div class="container mx-xl mt-10">
                    <div class="bg-white p-8 rounded-lg">
                        <form method="post" action="/cliniskin/create-appointment">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Nama -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                    <input type="text" disabled value="<?=$user['nama']?>" name="nama"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100"
                                        placeholder="Ex: Dea Novela">
                                </div>
                                <!-- No. Telepon -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                                    <div class="mt-1 flex">
                                        <span
                                            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">+62</span>
                                        <input type="text" disabled value="<?=$user['no_telp']?>" name="no_telp"
                                            class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100"
                                            placeholder="888-0000-0000">
                                    </div>
                                </div>
                                <!-- Keluhan -->
                                <div class="relative md:col-span-2">
                                    <label for="keluhan" class="block mb-2 text-sm font-medium text-gray-900">Keluhan</label>
                                    <textarea name="keluhan" rows="3"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Ex: Saya mengalami masalah kulit berjerawat di daerah pipi"></textarea>
                                </div>
                                <!-- Jenis Treatment -->
                                <div>
                                    <label for="jenis_treatment" class="block text-sm font-medium text-gray-700">Jenis Treatment</label>
                                    <select name="jenis_treatment" id="jenistreatment"
                                        class="py-2.5 mt-1 block w-full md:w-3/4 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100 pl-5"
                                        required>
                                        <option hidden value="">Pilih salah satu treatment</option>
                                        <?php foreach ($jenis_treatments as $jenis_treatment): ?>
                                        <option value="<?=$jenis_treatment['id']?>"><?= $jenis_treatment['jenis'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- Nama Dokter -->
                                <div>
                                    <label for="namadokter" class="block text-sm font-medium text-gray-700">Nama Dokter</label>
                                    <select name="dokter" id="namadokter"
                                        class="py-2.5 mt-1 block w-full md:w-3/4 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm bg-gray-100 pl-5"
                                        required>
                                        <option hidden value="">Pilih salah satu dokter</option>
                                        <?php foreach ($dokters as $dokter): ?>
                                        <option value="<?=$dokter['id']?>"><?=$dokter['nama']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- Waktu Treatment -->
                                <div>
                                    <label for="waktutreatment" class="block text-sm font-medium text-gray-700">Waktu Treatment</label>
                                    <div class="relative max-w-sm mt-1">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input datepicker datepicker-autohide name="tanggal" type="text"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                                            placeholder="Select date" id="waktutreatment">
                                    </div>
                                </div>
                                <!-- Jam -->
                                <div>
                                    <label for="time" class="block text-sm font-medium text-gray-700">Jam</label>
                                    <div class="relative mt-1">
                                        <div class="absolute inset-y-0 right-0 top-0 flex items-center pr-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="time" id="time" name="jam"
                                            class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-2.5 p-2.5"
                                            min="09:00" max="18:00" value="00:00" required />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 text-right">
                                <button type="submit"
                                    class="text-white bg-[#355186] hover:bg-[#2b426d] border border-[#355186] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 me-2 mb-2 focus:outline-none">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Create Appointment End -->
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</div>
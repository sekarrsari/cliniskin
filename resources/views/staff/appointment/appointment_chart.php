<?php $title = 'CLINISKIN | Detail Appointment'; ?>


<div class="font-['Poppins'] bg-gradient-to-b from-[#A0ACC3] to-[#D6D6D6] min-h-screen flex justify-center">
    <div class="w-full max-w-screen-lg p-4 bg-white border border-gray-200 rounded-lg shadow-md my-12">
        <div class="relative overflow-x-auto">
            <div class="flex flex-col sm:flex-row flex-wrap gap-4 items-center justify-between pb-4">
                <!-- Create Appointment Start -->
                <div class="container mx-xl mt-10" style="display: flex; justify-content:center">
                    <div class="bg-white p-8 rounded-lg ">
                    <div>
                        <canvas id="myChart"></canvas>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                        <script>
                        const ctx = document.getElementById('myChart');
                        let charts = <?= $charts;?>;
                        let dokter = charts.map(element => {
                            return element['nama'];
                        });
                        let jumlah = charts.map(element => {
                            return element['jumlah_appointment'];
                        });

                        new Chart(ctx, {
                            type: 'bar',
                            data: {
                            labels: dokter,
                            datasets: [{
                                label: '# of Votes',
                                data: jumlah,
                                borderWidth: 1
                            }]
                            },
                            options: {
                            scales: {
                                y: {
                                beginAtZero: true
                                }
                            }
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</div>
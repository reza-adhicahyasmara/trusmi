<?php $this->load->view('test/partials/head.php') ?>

<main id="main" class="main">
    
    <div class="pagetitle">
        <h1>Analisa KPI Marketing</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url($this->session->userdata('ses_akses').'/dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Analisa KPI Marketing</li>
            </ol>
            <div class="float-end"></div>
            
        </nav>
    </div>

    <section class="section profile"><div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data KPI Marketing</h5>
                    <h6></h6> 
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center; vertical-align: middle;">NO</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">TASKLIST</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">KPI</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">KARYAWAN</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">DEADLINE</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">AKTUAL</th>
                            </tr>
                        </thead>
                            <tbody>
                            <?php 
                                $no = 1; 
                                foreach($data_kpi as $row){ ?>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $no; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->tasklist; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->kpi; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->karyawan; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->deadline; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->aktual; ?></td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Performa Marketing Karyawan (Soal 1 dan Soal 3)</h5>
                    <h6></h6> 
                    <canvas id="chart_1" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>    
                    <br>    
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">NO</th>
                                <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">NAMA</th>
                                <th colspan="4" scope="col" style="text-align: center; vertical-align: middle;">SALES</th>
                                <th colspan="4" scope="col" style="text-align: center; vertical-align: middle;">REPORT</th>
                                <th rowspan="2" style="text-align: center; vertical-align: middle;">KPI</th>
                            </tr>
                            <tr>
                                <th scope="col" style="text-align: center; vertical-align: middle;">TARGET</th> 
                                <th scope="col" style="text-align: center; vertical-align: middle;">ACTUAL</th> 
                                <th scope="col" style="text-align: center; vertical-align: middle;">PENCAPAIAN</th> 
                                <th scope="col" style="text-align: center; vertical-align: middle;">ACTUAL BOBOT</th> 
                                <th scope="col" style="text-align: center; vertical-align: middle;">TARGET</th> 
                                <th scope="col" style="text-align: center; vertical-align: middle;">ACTUAL</th> 
                                <th scope="col" style="text-align: center; vertical-align: middle;">PENCAPAIAN</th> 
                                <th scope="col" style="text-align: center; vertical-align: middle;">ACTUAL BOBOT</th> 
                            </tr>
                        </thead>
                            <tbody>
                            <?php 
                                $no = 1; 
                                $sub_total_sales = 0;
                                $sub_total_report = 0;
                                foreach($data_kpi_aktual as $row){ 
                            ?>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $no; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $row->karyawan; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $row->target; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $row->total_sales; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $row->total_sales * $row->bobot."%"; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $sub_total_sales = ($row->total_sales * $row->bobot) / 2; echo "%";  ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $row->target; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $row->total_report; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $row->total_report * $row->bobot."%"; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $sub_total_report = ($row->total_report * $row->bobot) / 2; echo "%"; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $sub_total_sales + $sub_total_report."%"; ?></td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tasklist (Soal 2 Soal 4)</h5>
                    <canvas id="chart_2" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>    
                    <br>  
                    <h6>Ontime</h6> 
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col" style="text-align: center; vertical-align: middle;">NO</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">TANGGAL</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">KARYAWAN</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">KPI</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">TASKLIST</th>
                            </tr>
                        </thead>
                            <tbody>
                            <?php 
                                $no = 1; 
                                $total_tasklist = 0; 
                                $jumlah_tasklist = 0;
                                foreach($data_kpi as $row){ 
                                    if($row->aktual <= $row->deadline){
                            ?>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $no; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->aktual; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->karyawan; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->kpi; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->tasklist; ?></td>
                            </tr>
                            <?php $no++; $jumlah_tasklist += 1;} $total_tasklist += 1;} ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" style="text-align: right; vertical-align: middle;">TOTAL</td>
                                <td style="text-align: right; vertical-align: middle;"><?php echo $jumlah_tasklist; ?></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="text-align: right; vertical-align: middle;">PERSENTASE</td>
                                <td style="text-align: right; vertical-align: middle;"><?php echo number_format(($jumlah_tasklist / $total_tasklist) * 100, 2, ",", ".")."%"; ?></td>
                            </tr>
                        </tfoot>
                    </table>
                    <br>
                    <hr>
                    <br>
                    <h6>Latetime</h6> <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col" style="text-align: center; vertical-align: middle;">NO</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">TANGGAL</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">KARYAWAN</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">KPI</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">TASKLIST</th>
                            </tr>
                        </thead>
                            <tbody>
                            <?php 
                                $no = 1; 
                                $total_tasklist = 0; 
                                $jumlah_tasklist = 0;
                                foreach($data_kpi as $row){ 
                                    if($row->aktual >= $row->deadline){
                            ?>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $no; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->aktual; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->karyawan; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->kpi; ?></td>
                                <td style="text-align: left; vertical-align: middle;"><?php echo $row->tasklist; ?></td>

                            </tr>
                            <?php $no++; $jumlah_tasklist += 1;} $total_tasklist += 1;} ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" style="text-align: right; vertical-align: middle;">TOTAL</td>
                                <td style="text-align: right; vertical-align: middle;"><?php echo $jumlah_tasklist; ?></td>
                            </tr>
                            <tr>
                                <td colspan="4" style="text-align: right; vertical-align: middle;">PERSENTASE</td>
                                <td style="text-align: right; vertical-align: middle;"><?php echo number_format(($jumlah_tasklist / $total_tasklist) * 100, 2, ",", ".")."%"; ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </section>
</main>

<?php $this->load->view('test/partials/footer.php') ?>
<?php $this->load->view('test/partials/script.php') ?>

<!-----------------------FUNGSI----------------------->

    
<script>
    function getRandomColor() {
        var colors = [];
        for (var i = 0; i < 100; i++) {
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var x = 0; x < 6; x++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            colors.push(color);
        }
        return colors;
    }       

    var ctx = document.getElementById("chart_1").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo $gr_nama; ?>, 
            datasets: [
                {
                    label : <?php echo $gr_nama; ?>,
                    backgroundColor : getRandomColor(),
                    borderColor : getRandomColor(),
                    pointRadius : 4,
                    fill : false,
                    data : <?php echo $gr_persen; ?>
                },
            ],
        },
        
        options: {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
                position: "bottom",
                labels: {
                    usePointStyle: true,
                    generateLabels: (chart) => {
                        const datasets = chart.data.datasets;
                        return datasets[0].data.map((data, i) => ({
                            text: `${chart.data.labels[i]}`+` (`+ `${data}`+`%)`,
                            fillStyle: datasets[0].backgroundColor[i],
                            index: i
                        }))
                    }
                }
            },
        },
    });

    var ctx = document.getElementById("chart_2").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Ontime","Latetime"], 
            datasets: [
                {
                    label : ["<?php echo $gr_ontime; ?>", "<?php echo $gr_latetime; ?>"],
                    backgroundColor : getRandomColor(),
                    borderColor : getRandomColor(),
                    pointRadius : 4,
                    fill : false,
                    data : ["<?php echo $gr_ontime; ?>", "<?php echo $gr_latetime; ?>"]
                },
            ],
        },
        
        options: {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
                position: "bottom",
                labels: {
                    usePointStyle: true,
                    generateLabels: (chart) => {
                        const datasets = chart.data.datasets;
                        return datasets[0].data.map((data, i) => ({
                            text: `${chart.data.labels[i]}`+` (`+ `${data}`+`%)`,
                            fillStyle: datasets[0].backgroundColor[i],
                            index: i
                        }))
                    }
                }
            },
        },
    });
</script>

</body>
</html>
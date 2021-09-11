<!doctype html>
<html><head>
    <title>&nbsp;</title>
    <style>
        @page {
            size: auto;   /* auto is the initial value */
            margin: 0;  /* this affects the margin in the printer settings */
        }

        .container{
            min-width: 992px !important;
        }

        body { font-family: Arial, Helvetica, sans-serif; }

        table { border-collapse: collapse; width: 100%; }

        .table {
            width: 100%; margin-bottom: 1rem; color: #212529;
        }

        .table th,
        .table td {
            padding: .75rem;

            vertical-align: top;

            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;

            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .text-center {
            text-align: center !important;
        }

        
        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right !important;
        }

        .signature {
            display: inline;
            width: 30%
        }

        html { font-family: sans-serif; line-height: 1.15; -webkit-text-size-adjust: 100%; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

        .float-left {
            float: left !important;
        }

        .float-right {
            float: right !important;
        }

        .float-none {
            float: none !important;
        }

        h1,h2,h3,h4,h5,h6 { margin-top: 0; margin-bottom: .5rem; }

        .mb-5,.my-5 {
            margin-bottom: 3rem !important;
        }

        .mt-5,.my-5 {
            margin-top: 3rem !important;
        }

        .mt-4,.my-4 {
            margin-top: 1.5rem !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }
    </style>
</head><body>
    <div class="text-center mt-4">
        <h4>LAPORAN KEGIATAN INTERNSHIP</h4>
        <h4>HARIAN</h4>
    </div>
    <div>
    <pre>
        <h3 class="text-uppercase">Nama         : <?= $this->session->userdata('name') ?></h3><br>
        <h3 class="text-uppercase" style="margin-top: -40px;">Alamat       : <?= $this->session->userdata('_address') ?></h3>
    </pre>
    </div>
    <table class="table table-bordered mt-4">
        <tr>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>SCHEDULE</th>
            <th>WAKTU PELAKSANAAN</th>
        </tr>
        <?php
        $no = 1;
        foreach ($export_pdf as $data) :
        ?>
            <tr>
                <td class="align-middle text-center"><?= $no++ ?></td>
                <td class="align-middle text-center"><?= $data->date ?></td>
                <td class="align-middle text-uppercase"><?= $data->schedule.'<br>'.$data->schedule2 ?></td>
                <td class="align-middle text-uppercase text-center"><?= $data->execute_time.'<br>'.$data->execute_time2 ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="mt-5">
        <h4 style="text-align: right; padding-bottom: 80px;">Tanda Tangan Pembimbing</h4>
    </div>
    <div>
        <h4 style="text-align: right; margin-right: 50px;">nama terang</h4>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body></html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Toast</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #fef1fd;
        }

        .title {
            font-weight: 700;
            font-size: 45px;
            margin-top: 30px;
        }

        .subtitle {
            font-weight: 300;
            font-size: 20px;
            margin-top: 10px;
            margin-left: 5px;
        }

        .textheader .col-3,
        .textheader .col-6 {
            border-color: #f888af !important;
            background-color: #f3c8d6;
        }

        .tabeltitle {
            font-weight: 600;
            font-size: 18px;
            margin-top: 20px;
            text-align: center;
        }

        .textrow .col-3,
        .textrow .col-6 {
            align-items: center;
            justify-content: center;
            min-height: 55px;
            padding: 10px;
            text-align: center;
            background-color: rgb(247, 224, 237);
            border-color: #f888af !important;
        }

        .textwaktu {
            font-size: 16px;
            margin-top: 15px;
        }

        .textkegiatan {
            font-size: 16px;
            text-align: left;
            margin-top: 15px;
        }

        .tabelstatus {
            margin-top: 15px;
        }

        .btn-belum {
            background-color: hsl(150, 73%, 53%);
            color: white;
            border: none;
            margin-top: 9px;
        }

        .btn-ongoing {
            background-color: #ffc247;
            color: white;
            border: none;
            margin-top: 9px;
        }

        .btn-selesai {
            background-color: #ff4400;
            color: white;
            border: none;
            margin-top: 9px;
        }
    </style>
</head>


<body>

    <div class="container">
        <h1 class="title">📅 WEEKLY ACTIVITY LIST</h1>
        <p class="subtitle">Biar nggak bentrok sana sini 😵‍💫</p>

        <div class="row textheader">
            <div class="col-3 border">
                <p class="tabeltitle">Waktu</p>
            </div>
            <div class="col-6 border">
                <p class="tabeltitle">Kegiatan</p>
            </div>
            <div class="col-3 border">
                <p class="tabeltitle">Status</p>
            </div>
        </div>
        <div class="row textrow">
            <div class="col-3 border">
                <p class="textwaktu">07.30 - 09.50</p>
            </div>
            <div class="col-6 border">
                <p class="textkegiatan">Permodelan dan Analitika Prediktif</p>
            </div>
            <div class="col-3 border">
                <button type="button" class="btn btn-belum" id="buttonSelesai">Selesai</button>
            </div>
        </div>
        <div class="row textrow">
            <div class="col-3 border">
                <p class="textwaktu">10.00 - 12.50</p>
            </div>
            <div class="col-6 border">
                <p class="textkegiatan">Pemrograman Web</p>
            </div>
            <div class="col-3 border">
                <button type="button" class="btn btn-ongoing" id="buttonOnGoing">On Going</button>
            </div>
        </div>
        <div class="row textrow">
            <div class="col-3 border">
                <p class="textwaktu">13.30 - 16.20</p>
            </div>
            <div class="col-6 border">
                <p class="textkegiatan">Desain dan Manajemen Jaringan Komputer</p>
            </div>
            <div class="col-3 border">
                <button type="button" class="btn btn-selesai" id="buttonBelum">Belum</button>
            </div>
        </div>


        <p></p>
        <div class="toastBelum">
            <div class="toast-header bg-dark text-white">
                <strong>Menunggu</strong>
            </div>
            <div class="toast-body bg-white border">
                Tunggu sesuai waktu yang dijadwalkan ⏰
            </div>
        </div>


        <div class="toastOnGoing">
            <div class="toast-header bg-dark text-white">
                <strong>Berlangsung</strong>
            </div>
            <div class="toast-body bg-white border">
                Sedikit lagi selesai, semangat!🔥
            </div>
        </div>


        <div class="toastSelesai">
            <div class="toast-header bg-dark text-white">
                <strong>Selesai</strong>
            </div>
            <div class="toast-body bg-white border">
                Good job! sudah selesai 🎉
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#buttonBelum").click(function () {
                $('.toastBelum').toast('show');
            });

            $("#buttonOnGoing").click(function () {
                $('.toastOnGoing').toast('show');
            });

            $("#buttonSelesai").click(function () {
                $('.toastSelesai').toast('show');
            });
        });
    </script>

</body>

</html>

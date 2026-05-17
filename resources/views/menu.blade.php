<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8e4ec;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Nunito', sans-serif;
            padding: 32px 16px;
        }

        .menu-box {
            background-color: white;
            width: 100%;
            max-width: 520px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0px 10px 30px rgba(100, 0, 30, 0.15);
        }

        /* Header */
        .menu-header {
            background-color: #7a1a35;
            padding: 32px 32px 24px;
            text-align: center;
        }

        .menu-header h1 {
            font-size: 32px;
            font-weight: 800;
            color: white;
            margin-bottom: 8px;
        }

        .menu-header p {
            font-size: 13px;
            color: #f5c0d0;
            margin-bottom: 0px;
        }

        /* Body */
        .menu-body {
            padding: 24px;
        }

        /* Grid */
        .project-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 20px;
        }

        .menu-btn {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 16px 12px;
            border-radius: 12px;
            text-decoration: none;
            border: 2px solid transparent;
            transition: transform 0.2s, box-shadow 0.2s;
            min-height: 80px;
        }

        .menu-btn:hover {
            transform: translateY(-3px);
            text-decoration: none;
        }

        .btn-title {
            font-size: 13px;
            font-weight: 800;
            margin-bottom: 4px;
            line-height: 1.3;
        }

        .btn-subtitle {
            font-size: 11px;
            font-weight: 400;
            margin-bottom: 0px;
            opacity: 0.8;
        }

        .full-width {
            grid-column: span 2;
        }

        /* Warna A - Pink */
        .ca {
            background-color: #fde8f0;
            border-color: #f5a8c0;
        }

        .ca .btn-title  { color: #8a1a3a; }
        .ca .btn-subtitle { color: #8a1a3a; }

        .ca:hover {
            box-shadow: 0px 6px 15px rgba(138, 26, 58, 0.2);
        }

        /* Warna B - Maroon */
        .cb {
            background-color: #7a1a35;
            border-color: #5a0f25;
        }

        .cb .btn-title { color: white; }
        .cb .btn-subtitle { color: #f5c0d0; }

        .cb:hover {
            box-shadow: 0px 6px 15px rgba(90, 15, 37, 0.3);
        }

    </style>
</head>
<body>
    <div class="menu-box">

        <!-- Header -->
        <div class="menu-header">
            <h1>Portfolio Menu</h1>
            <p>5026241131 &bull; Rofifah Zain Nur Alfiyah</p>
        </div>

        <!-- Body -->
        <div class="menu-body">
            <div class="project-grid">

                <a href="http://127.0.0.1:8000/WelcomeITS" target="_blank" class="menu-btn ca">
                    <p class="btn-title">Welcome ITS</p>
                    <p class="btn-subtitle">Pertemuan 1</p>
                </a>

                <a href="http://127.0.0.1:8000/Robodog" target="_blank" class="menu-btn ca">
                    <p class="btn-title">Robodog Creative</p>
                    <p class="btn-subtitle">Pertemuan 2</p>
                </a>

                <a href="http://127.0.0.1:8000/RobodogITS" target="_blank" class="menu-btn cb">
                    <p class="btn-title">RoboDog ITS</p>
                    <p class="btn-subtitle">Pertemuan 2</p>
                </a>

                <a href="http://127.0.0.1:8000/Bootstrap" target="_blank" class="menu-btn cb">
                    <p class="btn-title">Grid Danantara</p>
                    <p class="btn-subtitle">Pertemuan 3</p>
                </a>

                <a href="http://127.0.0.1:8000/Template" target="_blank" class="menu-btn ca">
                    <p class="btn-title">Template Bootstrap</p>
                    <p class="btn-subtitle">Pertemuan 3</p>
                </a>

                <a href="http://127.0.0.1:8000/WeeklyActivity" target="_blank" class="menu-btn ca">
                    <p class="btn-title">Weekly Activity</p>
                    <p class="btn-subtitle">Tugas Pertemuan 3</p>
                </a>

                <a href="http://127.0.0.1:8000/LandingPage" target="_blank" class="menu-btn cb">
                    <p class="btn-title">Landing Page</p>
                    <p class="btn-subtitle">Pertemuan 4</p>
                </a>

                <a href="http://127.0.0.1:8000/Dell" target="_blank" class="menu-btn cb">
                    <p class="btn-title">Dell Website</p>
                    <p class="btn-subtitle">Pertemuan 5</p>
                </a>

                <a href="http://127.0.0.1:8000/Boost" target="_blank" class="menu-btn ca">
                    <p class="btn-title">Boost LinkTree</p>
                    <p class="btn-subtitle">Tugas Pertemuan 5 & Pertemuan 6</p>
                </a>

                <a href="http://127.0.0.1:8000/Pamellato" target="_blank" class="menu-btn ca">
                    <p class="btn-title">Pomellato Website</p>
                    <p class="btn-subtitle">Tugas Pra ETS</p>
                </a>

                <a href="http://127.0.0.1:8000/Portofolio" target="_blank" class="menu-btn cb full-width">
                    <p class="btn-title">Project Gallery</p>
                    <p class="btn-subtitle">Menu Pertemuan 5 - ETS</p>
                </a>

            </div>
        </div>
    </div>
</body>
</html>

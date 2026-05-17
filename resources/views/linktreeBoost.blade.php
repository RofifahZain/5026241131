<!DOCTYPE html>
<html lang="en">

<head>
    <title>LinkTree_5026241131</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        function showme() {
            //alert("Halo Selamat Siang");
            Swal.fire({
                title: "Halo!",
                text: "Selamat Siang",
                icon: "success"
            });
            console.log("Ini baris 18, sudah sampai disini");
            a = 18 + 10;
            console.log("Hasil PEnjumlahan : " + a);
            c = 1 * 2 * 3;
            console.log("Hasil perkalian : " + c);
        }

        function ChangeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
        }

        function ChangeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "white";
            element.style.background = "black";
        }

    </script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            font-size: larger;
            background-color: #a8a8a8;
            color: #418641;
            display: flex;
            justify-content: center;
            min-height: 100%;
        }

        .container {
            max-width: 645px;
            min-height: 100%;
            width: 100%;
            padding: 30px 35px 30px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: #efefef;
            border-radius: 25px 25px 0 0;
            margin: 45px auto 0 auto;
        }

        /* Top Bar Style */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            margin-bottom: 5px;
            margin-top: 4px;
        }

        .icon-btn {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: white;
            cursor: pointer;
            transition: 0.2s;
        }

        .icon-btn:hover {
            background: #f0f0f0;
        }

        /*Profile style*/
        .profile {
            width: 105px;
            height: 105px;
            margin-top: 25px;
            margin-bottom: 12px;
            border-radius: 50%;
        }

        h3 {
            margin-bottom: 2px !important;
        }

        .desc {
            margin-bottom: 35px;
        }

        /* Main Links Style*/
        .link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 8px;
            padding-right: 25px;
            background-color: white;
            border-radius: 12px;
            width: 570px;
            height: 70px;
            text-decoration: none;
            cursor: pointer;
            margin-bottom: 15px;
        }

        .link img {
            width: 52px;
            height: 52px;
            border-radius: 8px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .link p {
            flex: 1;
            text-align: center;
            margin: 0;
            color: #418641;
        }

        .link i,
        .social-icons i {
            color: #418641;
        }

        a:hover {
            text-decoration: none;
            color: inherit;
        }

        .link:hover {
            background-color: #efefef;
        }

        .noimg {
            padding-left: 55px;
        }

        .p-img {
            padding-right: 20px;
        }

        .subtitle {
            margin-bottom: 15px;
            margin-top: 15px;
            font-size: large;
        }

        /* Social media style*/
        .social-icons {
            display: flex;
            gap: 25px;
            justify-content: center;
            margin: 20px 0;
            font-size: 28px;
        }

        .social-icons a:hover {
            transform: scale(1.1);
            /*untuk memperbesar saat hover tanpa menggeser icon disekitarnya*/
        }

        /* Join button style*/
        .join-btn {
            display: block;
            text-align: center;
            background-color: white;
            color: #111;
            padding: 14px 24px;
            border-radius: 50px;
            font-weight: 600;
            font-size: large;
            text-decoration: none;
            width: fit-content;
            margin: 10px auto;
            box-sizing: border-box;
            margin-top: 50px;
            box-shadow: 0 6px 5px rgba(0, 0, 0, 0.15);
            /*untuk shadow*/
        }

        .join-btn:hover {
            background-color: #f0f0f0;
            text-decoration: none;
            color: #111;
        }

        /* Footer style*/
        .footer {
            font-size: 12px;
            color: #5a5959;
            text-align: center;
            margin-top: 16px;
            margin-bottom: 50px;
        }

        /*Button*/
        .button {
            width: 570px;
            height: 70px;
            margin-bottom: 20px;
            background-color:#418641;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Top Bar -->
        <div class="top-bar">
            <a href="https://linktr.ee">
                <div class="icon-btn">
                    <img src="assets/img/image/linktree.png" alt="logo linktree" width="20px" height="20px">
                </div>
            </a>
            <div class="icon-btn">
                <img src="assets/img/image/share.png" alt="tombol share" width="20px" height="20px">
            </div>
        </div>

        <!-- Profile Section -->
        <img class="profile"
            src="https://tse3.mm.bing.net/th/id/OIP.iM5OLm1qINCqBPc0-PhHaAHaHa?rs=1&pid=ImgDetMain&o=7&rm=3">
        <h3 id="intro"><strong>Boost Juice Indonesia</strong> </h3>
        <p class="desc">Your favourite smoothie in town! 🍉</p>

        <!-- Main Links -->
        <a class="link" id="tombol" href="https://www.boostjuicebars.co.id/">
            <img src="https://www.mainplace.com.my/public/files/8664a3f94621580ed6bc3c91763af4988e5df66c9d5830daa3985ced9ebf1fbe.jpg"
                alt="avatar">
            <p class="p-img">What's New!</p>
            <i class="bi bi-three-dots-vertical"></i>
        </a>

        <p class="subtitle"><strong>💚 Boost Juice Indonesia 💚</strong></p>
        <a href="https://www.boostjuicebars.co.id/vibe/">
            <div class="link">
                <p class="noimg">SIGN UP FOR VIBE CLUB</p>
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </a>

        <a href="https://www.boostjuicebars.co.id/stores/">
            <div class="link">
                <p class="noimg">FIND YOUR NEAREST STORE</p>
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </a>

        <a href="https://www.boostjuicebars.co.id/drinks/">
            <div class="link">
                <p class="noimg">OUR DRINKS</p>
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </a>

        <a href="https://restaurant.momos.io/boost-juice-indonesia-2bad7/survey/ff3f27e7-7bac-4992-908a-29e5bda97482">
            <div class="link">
                <p class="noimg">GIVE US FEEDBACK</p>
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </a>

        <p class="subtitle"><strong>💚 Delivery Platforms 💚</strong></p>

        <a href="https://gofood.link/a/BEj9Vo5#">
            <div class="link">
                <img src="assets\img\image\gofood.webp" alt="avatar">
                <p class="p-img">GoFood by Gojek</p>
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </a>

        <a
            href="https://www.grab.com/id/download/?is_retargeting=true&c=ID_CLUSTERALL-ALL_PAX_GF_SOCM_LOC__ID23GFPDF2BEBAS23_Broad_MEX-BOOSTJUICE&af_ad=MEX-BOOSTJUICE&pid=instagram-organic&af_sub5=organic&af_force_deeplink=true">
            <div class="link">
                <img src="assets\img\image\grab.png" alt="avatar">
                <p class="p-img">GrabFood</p>
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </a>

        <a
            href="https://shopee.co.id/now-food/storeListing/55442?stm_medium=referral&stm_source=rw&uls_trackid=55avluj601pr">
            <div class="link">
                <img src="assets\img\image\shopeefood.png" alt="avatar">
                <p class="p-img">ShopeeFood</p>
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </a>

        <p class="subtitle"><strong>💚 Big Order Bliss 💚</strong></p>

        <a href="https://api.whatsapp.com/send/?phone=6287700292731&text&type=phone_number&app_absent=0">
            <div class="link">
                <img src="https://tse1.mm.bing.net/th/id/OIP.LxkRUcLSsE2-FveMHNYaNgHaHa?pid=ImgDet&w=197&h=197&c=7&dpr=1,3&o=7&rm=3"
                    alt="avatar">
                <p class="p-img">BIG ORDER INQUIRIES</p>
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </a>

        <button class="btn btn-primary button" onclick="showme()">Showme</button>
        <button class="btn btn-primary button" onclick="ChangeText()">Change Text</button>
        <button class="btn btn-primary button" onclick="ChangeStyle()">Change Style</button>


        <!-- Social Media Section -->
        <div class="social-icons">
            <a href="https://www.boostjuicebars.co.id/"><i class="bi bi-globe"></i></a>
            <a href="https://www.instagram.com/idboostjuice"><i class="bi bi-instagram"></i></a>
            <a href="https://www.tiktok.com/@boostjuiceid"><i class="bi bi-tiktok"></i></a>
            <a href="https://web.facebook.com/boostjuiceindonesia/?_rdc=1&_rdr#"><i class="bi bi-facebook"></i></a>
        </div>

        <!-- Tombol Join -->
        <a href="https://linktr.ee" class="join-btn">Join boostjuicebarsindonesia on
            Linktree</a>

        <!-- Footer -->
        <p class="footer"><strong>
                Cookie Preferences · Report · Privacy · Explore
            </strong></p>

    </div>
</body>

</html>

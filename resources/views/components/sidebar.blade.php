<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 250px;
            background: white;
            height: 100vh;
            position: fixed;
            padding: 20px;
            transition: all 0.3s;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar .logo {
            margin-top: 10px;
            margin-bottom: 50px;
            font-size: 22px;
            font-weight: bold;
            color: #72B5F6;
        }

        .menu-item {
            padding: 10px;
            margin-top: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
            cursor: pointer;
        }

        .menu-sub-item {
            padding: 10px;
            display: block;
            margin-left: 30px;
            color: #333;
            text-decoration: none;
            transition: 0.3s;
        }

        .rotate.open {
            transform: rotate(180deg);
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: 0.3s;
        }

        .toggle-btn {
            font-size: 24px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .sidebar {
                margin-left: -250px;
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="logo">Vibe<span style="color:blueviolet;">Four</span></div>

        <a href="#" class="menu-item"><i class="bi bi-house-door"></i> Beranda</a>

        <a class="menu-item" data-bs-toggle="collapse" href="#menu_vote" role="button" aria-expanded="false"
            data-target="#menu_vote">
            <i class="bi bi-check-circle"></i> Voting
            <i class="bi bi-chevron-down ms-auto rotate" id="arrow_vote"></i>
        </a>
        <div class="collapse" id="menu_vote">
            <a href="/vote" class="menu-sub-item">Vote Saya</a>
        </div>

        <a class="menu-item" data-bs-toggle="collapse" href="#menu_penjadwalan" role="button" aria-expanded="false"
            data-target="#menu_penjadwalan">
            <i class="bi bi-calendar-event"></i> Penjadwalan
            <i class="bi bi-chevron-down ms-auto rotate" id="arrow_penjadwalan"></i>
        </a>
        <div class="collapse" id="menu_penjadwalan">
            <a href="#" class="menu-sub-item">Jadwal Saya</a>
        </div>

        <a href="/logout" class="menu-item"><i class="bi bi-box-arrow-right"></i> Keluar Akun</a>
    </div>
    <!-- 
    <div class="content" id="content">
        <i class="bi bi-list toggle-btn" id="toggleSidebar"></i>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("toggleSidebar").addEventListener("click", function() {
            document.getElementById("sidebar").classList.toggle("d-none");
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".menu-item[data-bs-toggle='collapse']").forEach(function(item) {
                let arrow = item.querySelector(".rotate");
                let target = document.querySelector(item.dataset.target);

                target.addEventListener("show.bs.collapse", function() {
                    arrow.classList.add("open");
                });
m
                target.addEventListener("hide.bs.collapse", function() {
                    arrow.classList.remove("open");
                });
            });
        });
    </script>
</body>

</html>
@include('components.sidebar')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vote Anda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins';
        }

        .line {
            height: 2px;
            background-color: black;
            width: 100%;
            margin: 20px 0;
        }

        .text {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            height: 50vh;
        }

        .navbar {
            background: white;
            padding: 20px;
            display: flex;
            /* align-items: center; */
            justify-content: center;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px
        }

        .header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .header_menu {
            display: flex;
            gap: 10px;
            font-size: 20px;
        }

        .header .create {
            background-color: #E8F4FF;
            border: none;
            font-size: 20px;
            color: #000000;
            width: 200px;
        }

        .card {
            width: 397px;
            height: 241px;
            background-color: #E8F4FF;
            border: none;
            cursor: pointer;
        }

        .card-body h5 {
            font-size: 30px;
            font-weight: bold;
        }

        .content {
            width: 87%;
            min-height: fit-content;
        }

        .card .card_footer .share {
            background-color: #ffffff;
            border: none;
        }
    </style>
</head>

<body>

    <!-- <div class="card" style="max-width: 1580px; margin-left: auto; margin-right: 40px;">
        <div class=" d-flex justify-content-between align-items-center" style="margin-top: auto; ">
            <h5 class="mb-0">Vote Anda</h5>
            <button class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-sliders"></i> Filter
            </button>
        </div>
        <hr>
        <div class="card-body" style="min-height: 300px;">
        </div>
    </div>
    <div class="text-end mt-2">
        <button class="btn btn-primary btn-sm">Buat Vote +</button>
    </div> -->

    <div class="content">
        <div class="header">
            <h3>Vote Saya</h3>
            <div class="header_menu">
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-sliders"></i> Filter
                </button>
                <!-- <a href="/ta" class="btn btn-primary btn-sm ">Buat Vote<i class="bi bi-plus"></i></a> -->
                <a href="/tambahvote" type="button" class="create btn "><i class="bi bi-plus"></i>
                    Tambah Vote
                </a>
            </div>
        </div>
        <div class="line"></div>

        <div class="text">
            <p>Belum ada vote</p>
        </div>
    </div>
</body>

</html>
@include('components.sidebar')
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Vote</title>
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

        .setting {
            display: flex;
            gap: 10px;
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
            <h3>Tambah Vote</h3>
        </div>
        <div class="line"></div>


        <div class="container mt-4">
            <div class="card p-4">
                <h5>Judul</h5>
                <input type="text" class="form-control mb-3" placeholder="">

                <h5>Deskripsi</h5>
                <textarea class="form-control mb-3" rows="3"></textarea>

            </div>

            <div class="card p-4 mt-3">
                <h5>Pertanyaan</h5>
                <input type="text" class="form-control mb-3" placeholder="">

                <h5>Pilihan</h5>
                <div class="form-check form-switch mb-2">
                    <label class="form-check-label" for="multiChoice">Izinkan Pilih Banyak Jawaban</label>
                    <input class="form-check-input" type="checkbox" id="multiChoice">
                </div>

                <div class="row mb-2 align-items-center">
                    <div class="col">
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-danger">X</button>
                    </div>
                    <div class="col-auto">
                        <div class="d-flex align-items-center">
                            <label for="uploadImage2" class="btn btn-primary d-flex align-items-center">
                                <i class="bi bi-image me-2"></i>
                                Tambah Gambar
                            </label>
                            <input type="file" id="uploadImage2" class="d-none">
                        </div>
                    </div>
                </div>

                <div class="row mb-2 align-items-center">
                    <div class="col">
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-outline-danger">X</button>
                    </div>
                    <div class="col-auto">
                        <div class="d-flex align-items-center">
                            <label for="uploadImage2" class="btn btn-primary d-flex align-items-center">
                                <i class="bi bi-image me-2"></i>
                                Tambah Gambar
                            </label>
                            <input type="file" id="uploadImage2" class="d-none">
                        </div>
                    </div>
                </div>

                <div class="text-start ">
                    <button class="btn btn-link " style="text-decoration: none;">Tambah Pilihan +</button>
                </div>

                <div class="text-end">
                    <button class="btn btn-primary">+ Tambah Pertanyaan</button>
                </div>
            </div>

            <div class="card p-4 mt-3">
                <!-- <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" id="protectVote">
                    <label class="form-check-label" for="protectVote">Lindungi voting dengan kode</label>
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="includeName">
                    <label class="form-check-label" for="includeName">Sertakan nama untuk mengisi</label>
                </div>

                <label class="form-label">Tutup vote pada</label>
                <input type="datetime-local" class="form-control mb-3">

                <label class="form-label">Tampilan hasil vote</label>
                <select class="form-select mb-3">
                    <option>Private</option>
                    <option>Publik</option>
                </select> -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="protectVote">
                            <label class="form-check-label" for="protectVote">Lindungi voting dengan kode</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="includeName">
                            <label class="form-check-label" for="includeName">Sertakan nama untuk mengisi</label>
                        </div>
                    </div>

                    <div class="col-auto d-flex align-items-center">
                        <div class="vr h-100"></div>
                    </div>

                    <div class="col-md-5">
                        <div class="mb-2">
                            <label for="voteCloseDate" class="form-label">Tutup vote pada</label>
                            <input type="datetime-local" class="form-control" id="voteCloseDate">
                        </div>
                        <div>
                            <label for="voteVisibility" class="form-label">Tampilan hasil vote</label>
                            <select class="form-select" id="voteVisibility">
                                <option>Private</option>
                                <option>Public</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button class="btn btn-primary" style="margin-top: 10px; width:200px;">Simpan</button>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>


</html>
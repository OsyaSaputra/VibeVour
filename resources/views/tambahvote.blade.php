@include('components.sidebar')
@include('components.uploadFotoModal')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".menu-item[data-bs-toggle='collapse']").forEach(function(item) {
            let arrow = item.querySelector(".rotate");
            let targetId = item.getAttribute("href");
            let target = document.querySelector(targetId);

            if (target) {
                target.addEventListener("show.bs.collapse", function() {
                    arrow.classList.add("open");
                });

                target.addEventListener("hide.bs.collapse", function() {
                    arrow.classList.remove("open");
                });
            }
        });
    });
</script>


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
    <div class="content">
        <div class="header" style="margin-top: 5%;">
            <h3>Tambah Vote</h3>
        </div>
        <div class="line"></div>


        <div class="container mt-4">
            <div class="card p-4">
                <h4>apa</h4>
                <hr style="height: 2px; background-color: black; width: 100%; margin: 20px 0;">
                
                <h5>Judul</h5>
                <input type="text" class="form-control mb-3" placeholder="">

                <h5>Deskripsi</h5>
                <textarea class="form-control mb-3" rows="3"></textarea>

            </div>

            <div id="questionContainer">
            </div>

            <div class="text-end mt-3">
                <button class="btn btn-primary" id="addQuestionBtn">
                    <i class="bi bi-plus"></i>
                    Tambah Pertanyaan</button>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const questionContainer = document.getElementById("questionContainer");
                    const addQuestionBtn = document.getElementById("addQuestionBtn");

                    function createQuestionCard() {
                        const questionIndex = document.querySelectorAll('.card-question');
                        const card = document.createElement("div");
                        card.classList.add("card", "p-4", "mt-3", "position-relative", "card-question");

                        card.innerHTML = `
                        <button class="btn-close position-absolute top-0 end-0 m-2 d-none delete-question-btn"></button>

                        <h4>apa</h4>
                <hr style="height: 2px; background-color: black; width: 100%; margin: 20px 0;">
                        <h5>Pertanyaan </h5>
                        <textarea class="form-control mb-3" rows="3" placeholder="Masukkan pertanyaan"></textarea>

                        <h5>Pilihan</h5>
                        <div class="form-check form-switch mb-2">
                            <label class="form-check-label" for="multiChoice${questionIndex}">Izinkan Pilih Banyak Jawaban</label>
                            <input class="form-check-input" type="checkbox" id="multiChoice${questionIndex}">
                        </div>

                        <div class="choices">
                            ${createChoiceElement()}
                            ${createChoiceElement()}
                        </div>

                        <div class="text-start">
                            <button class="btn btn-link add-choice-btn" style="text-decoration: none;">Tambah Pilihan +</button>
                        </div>
                    `;

                        questionContainer.appendChild(card);

                        card.querySelector(".add-choice-btn").addEventListener("click", function(e) {
                            e.preventDefault();
                            card.querySelector(".choices").insertAdjacentHTML("beforeend", createChoiceElement());
                        });

                        updateDeleteButtons();
                    }

                    function createChoiceElement() {
                        return `
                        <div class="row mb-2 align-items-center">
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-auto">
                            <button class="btn btn-outline-danger remove-choice-btn">
                            <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <label class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#uploadFotoModal">
                                    <i class="bi bi-image me-2"></i>
                                    Tambah Gambar
                                </label>
                            </div>
                        </div>
                    `;
                    }

                    function updateDeleteButtons() {
                        const questionCards = document.querySelectorAll(".card-question");
                        questionCards.forEach((card, index) => {
                            const deleteBtn = card.querySelector(".delete-question-btn");
                            if (questionCards.length > 1) {
                                deleteBtn.classList.remove("d-none");
                            } else {
                                deleteBtn.classList.add("d-none");
                            }
                        });
                    }

                    addQuestionBtn.addEventListener("click", function() {
                        createQuestionCard();
                    });

                    questionContainer.addEventListener("click", function(e) {
                        if (e.target.classList.contains("remove-choice-btn")) {
                            if (a) {

                            }
                            e.target.closest(".row").remove();
                        }
                    });

                    questionContainer.addEventListener("click", function(e) {
                        if (e.target.classList.contains("delete-question-btn")) {
                            e.target.closest(".card-question").remove();
                            updateDeleteButtons();
                        }
                    });

                    createQuestionCard();
                });
            </script>


            <div class="card p-4 mt-3">
                <h4>apa</h4>
                <hr style="height: 2px; background-color: black; width: 100%; margin: 20px 0;">
                <div class="row ">
                    <div class="col-md-4 ">
                        <div class="form-check form-switch mb-2">
                            <label class="form-check-label" for="protectVote">Lindungi voting dengan kode</label>
                        </div>
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="includeName">Sertakan nama untuk mengisi</label>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="protectVote">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="includeName">
                        </div>
                    </div>

                    <div class="col-sm d-flex align-items-center">
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
                <button class="btn btn-success" style="margin-top: 10px; width:200px;">Simpan</button>
            </div>
        </div>
    </div>
</body>


</html>
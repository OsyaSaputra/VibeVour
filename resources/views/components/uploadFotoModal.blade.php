<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="modal fade" id="uploadFotoModal" tabindex="-1" aria-labelledby="uploadFotoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadFotoModalLabel">Upload Foto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div id="uploadContainer" class="border rounded p-4 d-flex flex-column align-items-center justify-content-center"
                        style="border-style: dashed; cursor: pointer; position: relative; width: 100%; height: 200px;">

                        <i id="uploadIcon" class="bi bi-upload" style="font-size: 2rem;"></i>
                        <p id="uploadText" class="mt-2">Klik untuk upload foto</p>
                        <p id="uploadHint" class="text-muted">JPG, PNG, Max 3MB</p>

                        <img id="previewImage" src="" alt="Preview" class="d-none" style="max-width: 100%; max-height: 100%; object-fit: cover; position: absolute;">

                        <input type="file" class="d-none" id="uploadInput" accept="image/png, image/jpeg">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const uploadContainer = document.getElementById("uploadContainer");
            const uploadInput = document.getElementById("uploadInput");
            const previewImage = document.getElementById("previewImage");
            const uploadIcon = document.getElementById("uploadIcon");
            const uploadText = document.getElementById("uploadText");
            const uploadHint = document.getElementById("uploadHint");
            const uploadFotoModal = document.getElementById("uploadFotoModal");

            uploadContainer.addEventListener("click", function() {
                uploadInput.click();
            });

            uploadInput.addEventListener("change", function() {
                const file = uploadInput.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        previewImage.classList.remove("d-none");

                        uploadIcon.classList.add("d-none");
                        uploadText.classList.add("d-none");
                        uploadHint.classList.add("d-none");
                    };
                    reader.readAsDataURL(file);
                }
            });

            uploadFotoModal.addEventListener("hidden.bs.modal", function() {
                uploadInput.value = "";
                previewImage.src = "";
                previewImage.classList.add("d-none");

                uploadIcon.classList.remove("d-none");
                uploadText.classList.remove("d-none");
                uploadHint.classList.remove("d-none");
            });
        });
    </script>

</body>

</html>
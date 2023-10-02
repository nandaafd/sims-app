// Mengambil elemen-elemen HTML yang diperlukan
const sidebar = document.querySelector('#sidebar');
const content = document.querySelector('.content');
const toggleButton = document.querySelector('#toggle');
const item1 = document.querySelector('#with-text')
const item2 = document.querySelector('#no-text')

// Menambahkan event listener ke tombol toggle
toggleButton.addEventListener('click', function() {
    // Mengecek apakah sidebar sedang terbuka atau tertutup
    if (sidebar.style.left === '0px') {
        // Jika terbuka, tutup sidebar
        sidebar.style.left = '-210px';
        content.style.marginLeft = '60px';
    } else {
        // Jika tertutup, buka sidebar
        sidebar.style.left = '0';
        content.style.marginLeft = '280px';
    }
});

const dropArea = document.getElementById("drop-area");
        const fileInput = document.getElementById("file-input");

        // Mencegah event default untuk drag and drop
        dropArea.addEventListener("dragover", function(e) {
            e.preventDefault();
            dropArea.classList.add("dragover");
        });

        dropArea.addEventListener("dragleave", function(e) {
            e.preventDefault();
            dropArea.classList.remove("dragover");
        });
        dropArea.addEventListener("drop", function(e) {
            e.preventDefault();
            dropArea.classList.remove("dragover");

            // Mendapatkan daftar file yang di-drop
            const files = e.dataTransfer.files;

            // Menambahkan file ke input file asli
            for (let i = 0; i < files.length; i++) {
                fileInput.files.add(files[i]);
            }

            // Menampilkan nama file di area drop
            dropArea.innerHTML = "";
            for (let i = 0; i < files.length; i++) {
                const fileName = files[i].name;
                const fileNameElement = document.createElement("p");
                fileNameElement.textContent = fileName;
                dropArea.appendChild(fileNameElement);
            }
        });
        // Jika pengguna mengklik area drop, munculkan input file
        dropArea.addEventListener("click", function() {
            fileInput.click();
        });

        // Saat file terpilih dengan input file, munculkan nama file di area drop
        fileInput.addEventListener("change", function() {
            dropArea.innerHTML = "";
            for (let i = 0; i < fileInput.files.length; i++) {
                const fileName = fileInput.files[i].name;
                const fileNameElement = document.createElement("p");
                fileNameElement.textContent = fileName;
                dropArea.appendChild(fileNameElement);
            }
        });

<!-- Tombol Live Chat -->
<button type="button" class="btn btn-success rounded-circle" id="liveChatBtn" data-bs-toggle="modal" data-bs-target="#chatModal" title="Live Chat" style="position: fixed; bottom: 100px; right: 20px; z-index: 999;">
    <i class="fas fa-comments fa-lg"></i>
</button>


<!-- Modal Chat -->
        <!-- Chat Modal -->
        <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="chatModalLabel">Live Chat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="chat-box" style="height: 300px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;">
                            <!-- Pesan chat akan muncul di sini -->
                        </div>

                      <form id="chat-form" onsubmit="return handleSubmit(event);">
                            <div class="input-group mt-3">
                                <input type="text" id="name" class="form-control" name="name" placeholder="Nama" required>
                                <textarea class="form-control" name="message" placeholder="Pesan" required></textarea>
                                <button class="btn btn-primary" type="submit">Kirim</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>



<!-- Tombol Go to Top -->
    <button onclick="topFunction()" id="goTopBtn" title="Go to Top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Footer Section -->
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <div class="row text-center text-md-start">
                <!-- Kolom Call -->
                <div class="col-12 col-md-4 mb-3">
                    <h5>Call</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone-alt"></i><?php echo $sekolah['telepon']; ?></li>
                        <li><i class="fas fa-envelope"></i><?php echo $sekolah['email']; ?></li>
                        <li><i class="fab fa-whatsapp"></i><?php echo $sekolah['wa']; ?></li>
                        <li><i class="fas fa-home"></i>Alamat : <?php echo $sekolah['alamat']; ?></li>
                    </ul>
                </div>

                <!-- Kolom Link -->
                <div class="col-12 col-md-4 mb-3">
                    <h5>Link</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php" class="text-white">Beranda</a></li>
                        <li><a href="./index.php?aksi=profil" class="text-white">Profil</a></li>
                        <li><a href="./index.php?aksi=fasilitas" class="text-white">Fasilitas</a></li>
                        <li><a href="./index.php?aksi=guru" class="text-white">Staf & Guru</a></li>
                        <li><a href="./index.php?aksi=artikel" class="text-white">Artikel</a></li>
                        <li><a href="./index.php?aksi=kontak" class="text-white">Call me</a></li>
                    </ul>
                </div>

                <!-- Kolom Telusuri Kami -->
                <div class="col-12 col-md-4 mb-3 text-md-center d-none d-md-block">
                <h5>Telusuri Kami</h5>
                <a href="<?php echo $sekolah['facebook']; ?>" class="text-white me-2"><i class="fab fa-facebook-f fa-2x"></i></a>
                <a href="<?php echo $sekolah['instagram']; ?>" class="text-white me-2"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="<?php echo $sekolah['twitter']; ?>" class="text-white me-2"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="<?php echo $sekolah['youtube']; ?>" class="text-white me-2"><i class="fab fa-youtube fa-2x"></i></a>
            </div>


            </div>
            <hr class="my-3 border-white">
            <div class="text-center">
                <p>&copy; 2024, All Rights Reserved.</p>
            </div>
        </div>

 
<!-- Footer Social Media Section (hanya terlihat di mobile) -->
<div class="footer-info d-md-none fixed-bottom" style="padding-top: 5px; text-align: center;">
    <h6 style="color: blue;">Telusuri Kami 
    <a href="<?php echo $sekolah['facebook']; ?>" class="social-icon">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="<?php echo $sekolah['instagram']; ?>" class="social-icon">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="<?php echo $sekolah['twitter']; ?>" class="social-icon">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="<?php echo $sekolah['youtube']; ?>" class="social-icon">
        <i class="fab fa-youtube"></i>
    </a>
</div>

<!-- CSS -->
<style>
    .social-icon {
        display: inline-block;
        width: 30px; /* Ukuran lebih kecil */
        height: 30px; /* Ukuran lebih kecil */
        margin: 0 8px; /* Spasi antar ikon */
        background-color: #b0c4de; /* Warna biru abu-abu */
        border-radius: 50%; /* Lingkaran */
        text-align: center;
        line-height: 30px; /* Menyelaraskan teks secara vertikal */
        color: #007bff; /* Warna tulisan biru */
        font-size: 14px; /* Ukuran ikon lebih kecil */
        transition: background-color 0.3s, color 0.3s; /* Transisi untuk efek hover dan aktif */
    }

    .social-icon:hover {
        background-color: #007bff; /* Warna biru pada hover */
        color: white; /* Warna ikon putih pada hover */
    }

    .social-icon:active {
        background-color: #000; /* Warna hitam saat diklik */
        color: white; /* Warna tulisan putih saat diklik */
    }

    .footer-info {
        position: fixed; /* Memastikan tetap terlihat saat menggulir */
        bottom: 0;
        left: 0;
        width: 100%; /* Lebar penuh */
        z-index: 1000; /* Menjaga agar tetap di atas konten lainnya */
        background: floralwhite; /* Gradient biru-kuning */
        padding: 10px 0; /* Padding vertikal */
    }
</style>







    </footer>

   <!-- Bootstrap JS and other Scripts -->
<!-- Script untuk tombol Go to Top -->
<script>
    // Get the button
    let goTopBtn = document.getElementById("goTopBtn");
    let liveChatBtn = document.getElementById("liveChatBtn");

    // When the user scrolls down 20px from the top of the document, show the buttons
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            goTopBtn.style.display = "block";
            liveChatBtn.style.display = "block"; // Menampilkan tombol Live Chat
        } else {
            goTopBtn.style.display = "none";
            liveChatBtn.style.display = "none"; // Menyembunyikan tombol Live Chat
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    }
</script>

<!-- Bootstrap JS and other Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>

<script>
    // JavaScript untuk validasi form
    (function () {
        'use strict'
        
        // Ambil form dengan class 'needs-validation'
        var forms = document.querySelectorAll('.needs-validation')

        // Lakukan loop untuk mencegah form yang tidak valid di-submit
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })() 
</script>


<!-- untuk live chat JS and other Scripts -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Load chat messages
        function loadChat() {
            $.ajax({
                url: 'load_chat.php',
                method: 'GET',
                success: function(data) {
                    $('#chat-box').html(data);
                }
            });
        }

        // Send chat message
        $('#chat-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: 'send_chat.php',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    loadChat();
                  //  $('#chat-form')[0].reset();
                   
                   //  $('input[name="name"]').val(""); // Mengosongkan input name
                     $('textarea[name="message"]').val(""); // Mengosongkan pesan
                }
            });
        });

        // Load chat messages every 5 seconds
        setInterval(loadChat, 5000);

        function handleSubmit(event) {
        // Mencegah form dari pengiriman default
        event.preventDefault();
        
        // Ambil nilai dari input name
        const name = document.getElementById("name").value;
        const message = document.querySelector("textarea[name='message']").value;

        // Proses data di sini (misalnya, kirim ke server dengan AJAX)
        console.log("Nama:", name);
        console.log("Pesan:", message);

        // Jika ingin tetap menampilkan nilai pada input, jangan reset nilainya
        // Anda bisa mengosongkan textarea jika diperlukan
        //  document.querySelector("text[name='name']").value = name; // Mengosongkan pesan
    }
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Live Chat</h1> 
        <!-- Button to Open the Chat Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chatModal">
            Buka Chat
        </button>

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

                        <form id="chat-form">
                            <div class="input-group mt-3">
                                <input type="text" class="form-control" name="name" placeholder="Nama" required>
                                <textarea class="form-control" name="message" placeholder="Pesan" required></textarea>
                                <button class="btn btn-success" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
                    $('#chat-form')[0].reset();
                }
            });
        });

        // Load chat messages every 5 seconds
        setInterval(loadChat, 5000);
    </script>
</body>
</html>

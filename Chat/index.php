<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Chat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php
session_start();
?>
  <!-- nav bar -->
  <nav class="navbar bg-body-tertiary flex-nowrap">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../img/head-logo.png" alt="Logo" width="13%" class="d-inline-block ms-5 h align-text-top">
    </a>
    
<?php
    if ($_SESSION['role'] === 'admin') {
       $exit_path = "../User-Admin.php";
    } elseif ($_SESSION['role'] === 'user') {
       $exit_path = "../User.php";
    } else {
       // Default exit path if role is not defined
       $exit_path = "";
    }
?>
        <a href="<?php echo $exit_path; ?>">
        <button class="button">Back</button></a>
    

    
</div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col">
                <div id="chat-box" class="border p-3 mb-3">
                    <!-- Chat messages will be displayed here -->
                </div>
                <form id="chat-form" class="form-inline">
                <div class="form-group flex-grow-1 mr-2">
                    <input type="text" id="message" class="form-control w-100" placeholder="Type your message">
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>

            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // Function to retrieve chat messages from the server
        function getMessages() {
            $.ajax({
                url: 'get_messages.php',
                method: 'GET',
                success: function(response) {
                    $('#chat-box').html(response); // Update chat box with messages
                    scrollToBottom(); 
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        // Function to send a new message to the server
        function sendMessage(message) {
            $.ajax({
                url: 'send_message.php',
                method: 'POST',
                data: { message: message },
                success: function(response) {
                    // Message sent successfully, update chat box
                    getMessages();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

       
        function scrollToBottom() {
            $('#chat-box').scrollTop($('#chat-box')[0].scrollHeight);
        }

        // Event listener for chat form submission
        $('#chat-form').submit(function(event) {
            event.preventDefault(); // Prevent form submission
            var message = $('#message').val().trim();
            if (message !== '') {
                sendMessage(message); // Send message to server
                $('#message').val(''); // Clear message input field
            }
        });

        // Initial retrieval of chat messages when the page loads
        $(document).ready(function() {
            getMessages();

            // Set interval to auto-reload messages every 5 seconds (adjust as needed)
            setInterval(getMessages, 5000); // 5000 milliseconds = 5 seconds
        });


    </script>
</body>
</html>

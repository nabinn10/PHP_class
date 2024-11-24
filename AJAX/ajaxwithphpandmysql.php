<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX with PHP and MySQL</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>AJAX with PHP and MySQL</h1>
    <input type="text" id="name" placeholder="Enter your name" onkeyup="myfunction()">

    <div id="response"></div>

    <script>
        function myfunction() {
            // Get the input value
            var name = $("#name").val();

            // Make AJAX call
            $.ajax({
                url: 'userdata.php', // PHP file to handle the request
                type: 'POST',        // Request type
                data: { name: name }, // Data to be sent to the server
                success: function(response) {
                    // Display the response in the 'response' div
                    $("#response").html(response);
                },
                error: function() {
                    alert('Error in AJAX call')
                }
            });
        }
    </script>
</body>
</html>

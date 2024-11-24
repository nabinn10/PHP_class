<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX with jQuery</title>
</head>
<body>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'ajaxData.php', // Corrected file name
                type: "GET",
                success: function(data) {
                    alert('AJAX call was successful');
                    alert(data); // Display the actual data returned
                },
                error: function() {
                    alert('Error on AJAX call');
                }
            });
        });
    </script>
</body>
</html>

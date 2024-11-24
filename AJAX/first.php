<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Example</title>
</head>

<body>
// ajax example 
    <h1>First AJAX Example</h1>
    <button onclick="myFunction()">Click me</button>
    <script>
    
        function myFunction ()
        {
        var olgXMLHttpRequest = new XMLHttpRequest();
        olgXMLHttpRequest.onreadystatechange = function() {
            // check if the request is completed
            if (olgXMLHttpRequest.readyState == 4) {
                // check if the request is successful
                if (olgXMLHttpRequest.status == 200) {
                    alert(olgXMLHttpRequest.responseText);
                }
           
            else {
                alert("Error: " + olgXMLHttpRequest.status);
                alert("Error: " + olgXMLHttpRequest.statusText);
            }
        } 
        }
        olgXMLHttpRequest.open("GET", "ajaxData.php");
        olgXMLHttpRequest.send();
        }
    </script>
</body>

</html>
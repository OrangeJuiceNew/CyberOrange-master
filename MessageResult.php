<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Orange MessageResult</title>
</head>
<body>
    <div id="MessageResult"></div>
    <p><a href="/">Return to Post</a></p>
    <script> 
        let messageList = document.getElementById('MessageResult')
        new URLSearchParams(window.location.search).forEach((value, name) => {
            messageList.append(`${name}: ${value}`)
            messageList.append(document.createElement('br'))
        })
    </script>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Design</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container">
        <button type="submit" class="btn" onclick="openPopup()">Submit</button>
        <div class="popup" id="popup">
            <img src="C:\\Users\\Sakshi\\Desktop\\ONE-CLICK-PICK\\IMAGES\\click.jpeg">
            <h2>Thank You!</h2>
            <p>Your details has been successfullly submitted.Thanks!</p>
           <th><a href="index.php"><button>OK</button></a></th>
        </div>

    </div>
    <script>
        let popup = document.getElementById("popup");

        function openPopup() {
            popup.classList.add("open-popup");
        }

        function closePopup() {
            popup.classList.remove("open-popup");
        }
    </script>

</body>

</html>
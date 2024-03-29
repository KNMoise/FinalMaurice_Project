<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        /* Basic styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            
        }

        header {
            /* background-color: rgba(255, 255, 255, 0.2); */
            /* Semi-transparent white */
            backdrop-filter: blur(10px);
            /* Apply blur effect */
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        /* Overlay styles */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
            z-index: 9999;
        }

        .overlay-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .close-btn {
            position: absolute;
            top: 5px;
            right: 15px;
            font-size: 28px;
            cursor: pointer;
            color: #C71E1E;
            font-size: medium;
        }
    </style>
</head>

<body>

    <header>
        <h1>Welcome to My Website</h1>
    </header>

    <main>
        <p>This is the main content of the website.</p>
    </main>

    <div id="overlay" class="overlay">
        <div class="overlay-content">
            <span class="close-btn" onclick="closeOverlay()">X</span>
            <h2>&quot;Quality is not an act, it is a habit&quot;</h2>
            &nbsp;
            <p>This assures our clients that we keep developing quality as a talent for the things we have been repeatedly practicing.
                We adopt a continuous standards maintenance and continuous learning to prevent bad routines in our procedures.
                This should ensure our customers that any assignment given to WTC LTD is undertaken with the highest quality.
            </p>
        </div>
    </div>

    <script>
        // Function to open the overlay
        function openOverlay() {
            document.getElementById("overlay").style.display = "block";
        }

        // Function to close the overlay
        function closeOverlay() {
            document.getElementById("overlay").style.display = "none";
        }

        // Open the overlay when the page loads
        window.onload = function() {
            openOverlay();
        };
    </script>
</body>

</html>
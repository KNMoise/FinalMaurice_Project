<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<style>
    body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #fafafa;
}

.container {
    text-align: center;
    border: #fff;

}

.logo {
    width: 100px; /* Adjust size as needed */
    height: auto; /* Maintain aspect ratio */
    margin-bottom: 20px;
}

a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

</style>
<body>
    <div class="container">
        <img src="img/logo.png" alt="Logo" class="logo">
        <p>Your message has been sent successfully!</p>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>

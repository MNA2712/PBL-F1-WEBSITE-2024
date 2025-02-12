<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>About</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="about.php" class="active">About</a>
            <a href="where.html">Where</a>
            <a href="booking.html">Booking</a>
        </nav>
    </header>

    <!-- About Content -->
    <section class="about-content">
        <div class="box">
            <p>
                This website is created by Tuan Muhammad Rayyan Sameer and Muhammad Naufal. This website offers travelers as well as students to find the perfect vacation spot. Our website also offers you the perfect vehicle for you to ride whether it's on land, on water or in the air.
            </p>
        </div>
        <div class="box">
            <p>
                Our services can guarantee you a great and enjoyable moment by going to the Where page and the Booking page.
            </p>
            <p>
                You can also give us opinions and feedbacks by going to the bottom of the About page.
            </p>
        </div>

        <!-- Login Form -->
        <div class="login-form">
            <h2>Login</h2>
            <form action="#" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </section>

<style>
/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
  background: url('https://wallpapers.com/images/featured-full/light-blue-2iuzyh711jo9bmgo.jpg') no-repeat center center/cover; /* Replace with the actual URL of your image */
  color: white;
  text-align: center;
  position: relative;
}

header {
    background-color: #0d0d0e;
    padding: 10px 0;
}

header h1 {
    font-size: 32px;
    color: white;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-size: 18px;
}

nav a.active, nav a:hover {
    border-bottom: 2px solid white;
}

/* About Section */
.about-content {
    margin: 30px auto;
    max-width: 80%;
}

.about-content .box {
    background: rgba(0, 0, 0, 0.7);
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
}

.about-content p {
    font-size: 18px;
    line-height: 1.5;
    margin: 10px 0;
}

/* Login Form */
.login-form {
    background: rgba(0, 0, 0, 0.7);
    padding: 20px;
    border-radius: 5px;
    max-width: 400px;
    margin: 0 auto;
    margin-top: 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.login-form h2 {
    color: #ffffff;
    margin-bottom: 20px;
    font-size: 24px;
}

.login-form label {
    display: block;
    margin: 10px 0 5px;
    color: #ddd;
}

.login-form input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    outline: none;
    font-size: 16px;
}

.login-form input:focus {
    outline: 2px solid #0056b3;
}

.login-form button {
    background-color: #004085;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-form button:hover {
    background-color: #0056b3;
}

</style>

</body>
</html>
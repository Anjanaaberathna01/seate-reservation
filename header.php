<!-- Header -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}

#blue_bar {
    background-color: #0542c5;
    padding: 10px 0;
}

#blue_bar .blue_container {
    width: 90%;
    max-width: 1000px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    /* Title left, nav right */
    flex-wrap: wrap;
}

#blue_bar h1 {
    color: white;
    font-size: 28px;
    margin: 0;
}

#blue_bar h1 a {
    color: white;
    text-decoration: none;
}

#blue_bar .nav-links {
    display: flex;
    align-items: center;
    gap: 15px;
}

#blue_bar .nav-links a {
    color: white;
    text-decoration: none;
    font-size: 14px;
    padding: 5px 10px;
    border-radius: 4px;
    transition: background 0.3s;
}

#blue_bar .nav-links a:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

/* Responsive: stack links under title on very small screens */
@media screen and (max-width: 500px) {
    #blue_bar .blue_container {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
}
</style>

<div id="blue_bar">
    <div class="blue_container">
        <!-- Left: Website title -->
        <h1>
            <a href="index.php">Seat Reservation</a>
        </h1>

        <!-- Right: Navigation -->
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="login.php">Log In</a>
            <a href="admin.php">Admin</a>
        </div>
    </div>
</div>
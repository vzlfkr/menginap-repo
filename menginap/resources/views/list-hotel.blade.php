<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website</title>
    <link rel="stylesheet" href="/css/list-style.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/navbar-no-reg.css">
</head>
<body>
@include('components.navbar-no-reg')
    <div class="header">
        <div class="slider">
            <div class="slide active">
                <img src="https://via.placeholder.com/800x300" alt="Hotel Ubud">
                <div class="caption">
                    <h2>Hotel Ubud</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
                </div>
            </div>
            <div class="slide active">
                <img src="https://via.placeholder.com/800x300" alt="Hotel Ubud">
                <div class="caption">
                    <h2>Hotel Canggu</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="hotels">
        <h2 style="margin-top: 10px;">Check these hotels you might interested in!</h2>
        <div class="hotel-cards">
            <div class="hotel-card">
                <img src="https://via.placeholder.com/200x150" alt="Hotel Canggu">
                <h3>Hotel Canggu</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/200x150" alt="Hotel Ubud">
                <h3>Hotel Ubud</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/200x150" alt="Hotel Buyan">
                <h3>Hotel Buyan</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/200x150" alt="Hotel Canggu">
                <h3>Hotel Canggu</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/200x150" alt="Hotel Ubud">
                <h3>Hotel Ubud</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/200x150" alt="Hotel Ubud">
                <h3>Hotel Gianyar</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/200x150" alt="Hotel Ubud">
                <h3>Hotel Kuta</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/200x150" alt="Hotel Ubud">
                <h3>Hotel Buyan</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
            </div>
            <div class="hotel-card">
                <img src="https://via.placeholder.com/200x150" alt="Hotel Ubud">
                <h3>Hotel Batur</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in vestibulum dui.</p>
            </div>
        </div>
    </section>
    <script src="js/list-script.js"></script>
</body>
</html>
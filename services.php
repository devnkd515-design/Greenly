<?php include 'includes/header.php'; ?>

<!-- Services Header -->
<div class="header-bg" style="background: linear-gradient(rgba(46,125,50,0.8), rgba(46,125,50,0.8)), url('https://images.unsplash.com/photo-1557429287-b2e26467fc2b?q=80&w=1000'); background-size: cover; padding: 100px 0; text-align: center; color: white;">
    <h1>Our Professional Services</h1>
    <p>Expert care for your green spaces</p>
</div>

<div class="container section-padding">
    <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <!-- Service 1 -->
        <div class="card service-card" style="background: var(--card-bg); padding: 30px; border-radius: 15px; box-shadow: var(--shadow); text-align: center;">
            <div class="icon-box"><i class="fa-solid fa-leaf"></i></div>
            <h3>Plant Care & Maintenance</h3>
            <p>Regular watering, pruning, and health checks for your plants.</p>
            <ul style="text-align: left; margin: 20px 0; padding-left: 20px;">
                <li>Weekly visits</li>
                <li>Fertilizer application</li>
                <li>Pest control</li>
            </ul>
            <a href="book_service.php?service=maintenance" class="btn btn-outline">Book Now</a>
        </div>

        <!-- Service 2 -->
        <div class="card service-card" style="background: var(--card-bg); padding: 30px; border-radius: 15px; box-shadow: var(--shadow); text-align: center;">
            <div class="icon-box"><i class="fa-solid fa-compass-drafting"></i></div>
            <h3>Garden Design</h3>
            <p>Transform your balcony or backyard into a beautiful oasis.</p>
            <ul style="text-align: left; margin: 20px 0; padding-left: 20px;">
                <li>Landscape planning</li>
                <li>Plant selection</li>
                <li>Pot arrangement</li>
            </ul>
            <a href="book_service.php?service=design" class="btn btn-outline">Book Now</a>
        </div>

        <!-- Service 3 -->
        <div class="card service-card" style="background: var(--card-bg); padding: 30px; border-radius: 15px; box-shadow: var(--shadow); text-align: center;">
            <div class="icon-box"><i class="fa-solid fa-seedling"></i></div>
            <h3>Seasonal Updates</h3>
            <p>Refresh your garden with the seasons.</p>
            <ul style="text-align: left; margin: 20px 0; padding-left: 20px;">
                <li>Seasonal planting</li>
                <li>Soil renewal</li>
                <li>Cleaning & Prep</li>
            </ul>
            <a href="book_service.php?service=seasonal" class="btn btn-outline">Book Now</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

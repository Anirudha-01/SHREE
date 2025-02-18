<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>

    body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background-color: #ffffff; /* White background */
    color: #333;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}
nav {
    background-color: #ffffff !important;
}


.logo img {
    width: 120px; /* Adjust logo size */
}

nav ul {
    list-style: none;
    display: flex;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: #333;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
}

nav ul li a:hover {
    text-decoration: underline;
}
    
        .header {
            text-align: center;
            padding: 20px;
        }
        .header h1 {
            margin: 0;
            color:rgba(231, 15, 15, 0.89);
        }
        .services-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 20px;
            
            
        }

        .services-row {
          display: flex;
           justify-content: space-between;
           background-color: #e6f2ff;  /* Light blue background */
          padding: 20px;
           border-radius: 8px;
           margin-bottom: 20px;
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

        }
        .service-card {
            flex: 1;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin 0 10px;
            transition: transform 0.3s ease;
        }
        .service-card:hover {
            transform: scale(1.05);
        }
        .service-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .service-card-content {
            padding: 15px;
        }
        .service-card-content h3 {
            margin: 0 0 10px;
            color: #333;
        }
        .service-card-content p {
            font-size: 14px;
            color: #555;
        }
        .learn-more {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            color: #fff;
            background:rgb(225, 46, 46);
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .learn-more:hover {
            background: #cc0000;
        }
        .services-list {
            margin: 30px;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .services-list h2 {
            margin-bottom: 20px;
            color: #ff0000;
        }
        .services-list ul {
            list-style: none;
            padding: 0;
            text-align: left;
        }
        .services-list ul li {
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }
        .services-list ul li:last-child {
            border-bottom: none;
        }
        @media (max-width: 768px) {
            .services-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
     <!-- Header Section -->
     <header>
        <div class="logo">
            <img src="assets/logo.png" alt="Shree Enviro Tech Logo"> <!-- Replace with actual logo -->
        </div>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
        </div>
        <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about_us.php">About us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Clients</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="contact_us.php">Contact</a></li>
        </ul>
  </div>
</nav> 
    </header>

    <div class="header">
        <h1>Services</h1>
        <p>Explore our comprehensive range of services designed for environmental engineering solutions.</p>
    </div>

    <!-- Services Section -->
    <div class="services-container">
        <div class="service-card">
            <img src="assets\STP.jpg" alt="Sewage Treatment Plant">
            <div class="service-card-content">
                <h3>Sewage Treatment Plant (STP)</h3>
                <p>Sewage Treatment is the need of the day as it is the most simple & convenient way 
                    of treatment for recycling and reuse of precious water. The sewage must be treated
                     and disposed of to avoid water and soil pollution matter.
We provide complete solution along with Design, Drawing, Engineering Supervision,
 Construction Fabrication, Supply, Erection, Testing & Commissioning including Mechanical,
  Piping, Electrical & Instrumentation work of the STP plants on Turnkey basis.</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
        <div class="service-card">
            <img src="assets\ETP.png" alt="Common Effluent Treatment Plant">
            <div class="service-card-content">
                <h3> Effluent Treatment Plant (ETP)</h3>
                <p>Keeping in view of the wastewater generated from factories and fresh water demand for drinking as well as for industries,
                     the scarcity of fresh water is the most burning problem for today's life.
                We provide complete solution of works including Design, Drawing, Engineering, Fabrication, Renovation, 
                Supply, Erection, Testing & Commissioning including Mechanical, Electrical, Piping and Instrumentation items of works of
                 Effluent Treatment Plants on Turnkey Basis.</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
        <div class="service-card">
            <img src="assets\CPU.jpg" alt="Condensate Polishing Unit">
            <div class="service-card-content">
                <h3>Condensate Polishing Unit (CPU)</h3>
                <p>Condensate Polishing Unit is most successful for Sugar Factories and Distilleries to control effluent
                     generation and to avoid make fresh water. In sugar factories, we collect all excess condensate and give proper
                      treatment. Our design is based on HRT basis depending on BOD load.

We design, supply, erection and commission the Condensate Polishing Unit on turnkey basis and give final 
treated water with best quality for reuse all treated condensate within the factory.</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
        <div class="service-card">
            <img src="assets\RO.jpg" alt="Reverse Osmosis Plant">
            <div class="service-card-content">
                <h3>Reverse Osmosis Plant (RO)</h3>
                <p>Reverse Osmosis (RO) Plant is one of the most effective solutions for water purification, designed to remove dissolved salts,
                     impurities, and contaminants from water. It ensures a consistent supply of
                      pure and safe water for various industrial and domestic applications.

We provide end-to-end services for Reverse Osmosis Plants, including:
Design, Engineering, Supply, Installation, and Commissioning on a turnkey basis.
Custom-built systems to meet specific client
 requirements for industries like pharmaceuticals, food processing, and power generation.</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
        <div class="service-card">
            <img src="assets\DM.jpg" alt="Demineralization Plant">
            <div class="service-card-content">
                <h3>Demineralization Plant (DM)</h3>
                <p>A Demineralization (DM) Plant removes dissolved salts and minerals from water using ion-exchange technology, 
                    making it suitable for high-purity applications. It ensures water with low conductivity and high purity, essential for
                     industries like power generation, pharmaceuticals, and chemical processing.

We offer design, supply, erection, and commissioning of DM Plants on a turnkey basis.
 The plant can include two-bed, mixed-bed, and multi-stage configurations based on client requirements.
  Our systems guarantee reliable performance and capacities ranging from 1 m³/h to 100 m³/h. Treated water is ideal for boilers, cooling systems, and process water.

</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
        <div class="service-card">
            <img src="assets\WTP.jpg" alt="Water Treatment Plant">
            <div class="service-card-content">
                <h3>Water Treatment Plant (WTP)</h3>
                <p>A Water Treatment Plant (WTP) is designed to purify raw water and make it safe for drinking, industrial use, 
                    or other applications. It removes impurities like suspended solids, bacteria, harmful chemicals, and dissolved
                     salts to meet required water quality standards.

We offer customized design, supply, erection, and commissioning of WTPs on a turnkey basis.
 The treatment processes include filtration, sedimentation, disinfection, and softening, based 
on water quality and client needs. WTPs are widely used in municipal, industrial,
 and residential sectors, ensuring a reliable supply of treated water.</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
    </div>

    <!-- Services List Section -->
    <div class="services-list">
        <h2>Our Services</h2>
        <ul>
            <li>Effluent Treatment Plant (ETP)</li>
            <li>Sewage Treatment Plant (STP)t</li>
            <li>Condensate Polishing Unit (CPU)</li>
            <li>Demineralization Plant (DM)</li>
            <li>Reverse Osmosis Plant(RO)</li>
            <li>Water Treatment Plant(WTP)</li>
            <li>Ultraviolet(UV) (Disinfection System)</li>
            <li>Ultrafilteration Plant(UF)</li>
            <li>Oilskimmers Plant</li>
            <li>Bio-culture And Related Equipment</li>
            
        </ul>
    </div>

</body>
</html>

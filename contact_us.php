<!DOCTYPE html>
<html>
<head>
</head>
<title>Contact Form</title>
</head>
<body>
    <title>Contact Form</title>
    <body>
        <style>
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
       </style>
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
    </body>
</body>
    <style>
        .contact-container {
            display: flex;
            min-height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.8)), url('assets/tinu.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            font-family: Arial, sans-serif;
            padding: 2rem;
        }

        .contact-info {
            flex: 1;
            padding: 2rem;
        }

        .form-container {
            flex: 1;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .contact-info h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .info-item i {
            margin-right: 1rem;
            color: #4a90e2;
        }

        .form-container h2 {
            color: #333;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        input, textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        button {
            background: #4a90e2;
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #357abd;
        }

        .message {
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            background: #4a90e2;
            color: white;
        }

        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
            }
            
            .contact-info, .form-container {
                width: 100%;
                margin-bottom: 2rem;
            }
        }
    </style>
<body>
    <div class="contact-container">
        <div class="contact-info">
            <h2>Contact us</h2>
            <div class="info-item">
                <i>📍</i>
                <span>1 Shreyas apt Dangat, SR. No.79/2, Pandurang Industrial Area, Shivane, Pune, Maharashtra 411023
                Shree Enviro Tech, Shop No.01, Shreyas Apartment, Shivane, Dangat Industrial Area, Near Chaudhary Witbhati, Pune, Pune, Maharashtra, 411023</span>
            </div>
            <div class="info-item">
                <i>📞</i>
                <span>+ 1235 2355 98</span>
            </div>
            <div class="info-item">
                <i>✉️</i>
                <span>info@yoursite.com</span>
            </div>
            <div class="info-item">
                <i>🌐</i>
                <span>aqua.shree@gmail.com</span>
            </div>
        </div>
        
        <div class="form-container">
            <h2>Contact us</h2>
            <?php if($message): ?>
                <div class="message"><?php echo $message; ?></div>
            <?php endif; ?>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Message" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</body>

  <!-- Chatbot Placeholder -->
  <style>
        .chat-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 20px auto;
            max-width: 800px;
        }

        .chat-title {
            color: #1B4B36;  /* Dark green color */
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .chat-text {
            font-size: 20px;
            color: #333;
            text-align: center;
            margin: 0;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .chat-container {
                margin: 10px;
                padding: 20px;
            }

            .chat-title {
                font-size: 28px;
            }

            .chat-text {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <?php
        // You can make these variables dynamic if needed
        $chatTitle = "Need Help? Chat with Us!";
        $chatText = "[Chatbot Integration Coming Soon]";
        
        echo "<h2 class='chat-title'>$chatTitle</h2>";
        echo "<p class='chat-text'>$chatText</p>";
        ?>
    </div>
</body>

    <footer>
        <style>
            footer {
    background-color: #ffffff;
    color: #333;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
}

.social-media img {
    width: 30px;
    margin: 5px;
}
body {
        font-family: Arial, sans-serif;
        margin: 20px;
        padding: 20px;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
    }
    input, textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
    }
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
    </style>
        <p>&copy; 2025 Shree Enviro Tech. All rights reserved.</p>
        <div class="social-media">
            <a href="#"><img src="assets/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="assets/linkedin.png" alt="LinkedIn"></a>
            <a href="#"><img src="assets/twitter.jpg" alt="Twitter"></a>
        </div>
    </footer>
</body>
</html>
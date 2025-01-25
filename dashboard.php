<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    :root {
      --primary-color: #ff7a00; /* Orange */
      --secondary-color: #872e2e; /* Red */
      --hover-color: #ff4500; /* Bright Red */
      --text-color: #ffffff; /* White */
      --background-color: #fff7e6; /* Light Beige */
    }

    body {
      background: var(--background-color);
      min-height: 100vh;
    }

    .dashboard {
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar Styles */
    .sidebar {
      width: 250px;
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      padding: 20px;
      color: var(--text-color);
      position: fixed;
      height: 100vh;
      overflow-y: auto;
      transform: translateX(-100%);
      transition: transform 0.3s ease-in-out;
    }

    .sidebar.open {
      transform: translateX(0);
    }

    .sidebar .logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .sidebar .logo h2 {
      font-size: 1.5rem;
    }

    .menu-item {
      padding: 12px 15px;
      margin: 5px 0;
      border-radius: 8px;
      color: #ffff;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s ease;
  }

    .menu-item:hover {
      background: var(--light-sky);
      color: var(--primary-sky);
    }
.dropdown {
    position: relative;
    top: 0%; 
    left: 0;
    background-color: rgb(239, 234, 234);
    border: 1px solid #f7f3f3;
    border-radius: 4px;
    padding: 8px 0;
    min-width: 100px;
    display: none; /* Hidden by default */
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    z-index: 1000;
    text-transform: uppercase;
    color: #f5f5f5;
}

.dropdown.show {
    display: block;
}

.dropdown li {
    list-style: none;
    padding: 8px 16px;
}

.dropdown li a {
    text-decoration: none;
    color: #333;
    display: block;
}

.dropdown li:hover {
    background-color: rgb(53, 85, 248);
  color: #f9fbfd;
  
   }
   menu-item {
    position: relative;
    display: inline-block;
    text-decoration: none;
}

.menu-item:hover {
  background-color: #ffff;
  color: #0284c7;
   
}


    /* Main Content Styles */
    .main-content {
      flex: 1;
      margin-left: 0;
      padding: 20px;
      transition: margin-left 0.3s ease-in-out;
    }

    .main-content2.shifted {
      margin-left: 250px;
    }

 

    .main-content.shifted {
      margin-left: 250px;
    }

    .header {
      background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
      color: var(--text-color);
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
      text-align: center;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header h1 {
      margin: 0;
    }

    .action-buttons {
      display: flex;
      gap: 10px;
    }

    .action-buttons a,
    .action-buttons button {
      padding: 10px 20px;
      color: var(--text-color);
      background: var(--hover-color);
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s;
    }

    .action-buttons a:hover,
    .action-buttons button:hover {
      background: var(--secondary-color);
    }

    /* Services Grid */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr); /* Default: 4 columns */
      gap: 20px;

    }

    @media (max-width: 768px) {
      .services-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns for smaller screens */
      }
    }

    .service-card {
      background: var(--text-color);
      color: var(--primary-color);
      border: 1px solid var(--hover-color);
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
      text-decoration: none;
    
    }

    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .service-icon {
      margin-bottom: 15px;
      
    }

    /* Three-dot Menu */
    .menu-toggle {
      position: fixed;
      top: 20px;
      left: 20px;
      background: var(--primary-color);
      color: var(--text-color);
      padding: 10px;
      border: 1px;
      border-radius: 50%;
      cursor: pointer;
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .menu-toggle span {
      display: block;
      width: 20px;
      height: 2px;
      background: var(--text-color);
      margin: 4px 0;
    }

    .quick-stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 15px;
      margin-bottom: 30px;
    }

    .stat-card {
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
      border: 1px solid var(--hover-color);
      border-radius: 10px;
    }

    .fund-wallet-btn {
    display: inline-block;
    margin-top: 12px;
    padding: 1px 4px; /* Adjusted for better spacing */
    font-size: 0.9rem;
    font-weight: 600;
    color: white;
    background: var(--primary-color);
    border-radius: 6px;
    text-decoration: none;
    transition: background 0.3s ease;
    position: relative; /* Keeps the button within a specific context */
    bottom: 60px; /* Fixed distance from the bottom of the parent container */
    left: 80%; /* Anchors the button at 25% from the left of the parent */
    transform: translateX(-50%); /* Adjusts for center alignment relative to the left */
    z-index: 1000; /* Keeps the button on top of other elements */
}

.fund-wallet-btn:hover {
    background: #0052a3; /* Hover effect */
}

    .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
         
            height: 60px;
            background-color: var(--primary-color);
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .footer .icon {
            color: white;
            text-align: center;
            font-size: 0.8rem;
            flex: 1;
            text-decoration: none;
        }

        .footer .icon img {
            width: 24px;
            height: 24px;
        }

        /* Floating Center Button */
        .floating-icon {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 64px;
            height: 64px;
            background-color:var(--primary-color);
            border-radius: 50%;
            border: 4px solid white;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .floating-icon img {
            width: 32px;
            height: 32px;
        }

        /* Hover Effect */
        .floating-icon:hover {
            background-color: #FFC107;
            cursor: pointer;
        }

  </style>
</head>

<body>
  <button class="menu-toggle" onclick="toggleSidebar()">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <div class="dashboard">
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <div class="logo">
        <h2>Unify</h2>
        <img src="hh.jpeg" alt="Logo">
      </div>
       <a href="#" class="menu-item" id="ninMenu">
        <img src="" alt="">
        <span>NIN Services</span>
       </a>
        <ul class="dropdown" id="ninDropdown">
        <li><a href="nin-search.html">NIN Search</a></li>
        <li><a href="nin-search-by-phone.html">NIN Search by Phone</a></li>
        <li><a href="nin-validation.html">NIN Validation</a></li>
        <li><a href="nin-search.html">NIN Search</a></li>
        <li><a href="nin-search-by-phone.html">NIN Search by Phone</a></li>
        <li><a href="nin-validation.html">NIN Validation</a></li>
        <li><a href="nin-search.html">NIN Search</a></li>
        <li><a href="nin-search-by-phone.html">NIN Search by Phone</a></li>
        <li><a href="nin-validation.html">NIN Validation</a></li>
        </ul>

       <a href="#" class="menu-item" id="bvnMenu">
        <img src="" alt="">
        <span>BVN Services</span>
       </a>
       <ul class="dropdown" id="bvnDropdown">
        <li><a href="bvnverificationpage.html">BVN Verification</a></li>
        <li><a href="bvnphonesearch.html">BVN Search by Phone</a></li>
        <li><a href="bvnticketid.html">BVN Retrieval by Ticket ID</a></li>
        </ul>   

        <a href="databundle.html" class="menu-item">
        <img src="" alt="">
        <span>Data Bundle</span>
         </a>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
      <div class="header">
     <h1>Welcome, User!</h1>
      <div class="action-buttons">
      <img src="hh.png" alt="Logo" width="60" height="60">
    </a>
  </div>
</div>

<div class="quick-stats">
    <div class="stat-card">
        <div class="stat-number">₦50,000</div>
        <div class="stat-label">Wallet Balance</div>
        <a href="fund-wallet.php" class="fund-wallet-btn">Fund Wallet</a>
        </div>
      <div class="stat-card">
        <div class="stat-number">24</div>
        <div class="stat-label">Total Transactions</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">10</div>
        <div class="stat-label">Active Services</div>
    </div>
</div>

      <!-- Services Grid -->
      <div class="services-grid">
       <a href="ninlayout.html" class="service-card">
      <div class="service-icon">
      <img src="NIN2.png" alt="Search icon" width="60" height="60">
       </div>
       <h3>NIN Services</h3>
      </a>
  
        <div class="service-card">
        <div class="service-icon"><img src="bvn2.jpeg" alt="Search icon" width="60" height="60"></div>
          <h3>BVN Services</h3>
        </div>
        <div class="service-card">
        <div class="service-icon"><img src="signal.jpeg" alt="Search icon" width="60" height="60"></div>
          <h3>Data Bundle</h3>
        </div>
        <div class="service-card">
        <div class="service-icon"><img src="images (5).jpeg" alt="Search icon" width="60" height="60"></div>
          <h3>Airtime</h3>
        </div>
        <div class="service-card">
          <div class="service-icon">💼</div>
          <h3>CAC Registration</h3>
        </div>
        <div class="service-card">
          <div class="service-icon">📺</div>
          <h3>Cable Subscription</h3>
        </div>
        <div class="service-card">
          <div class="service-icon">💡</div>
          <h3>Bill Payment</h3>
        </div>
        <div class="service-card">
          <div class="service-icon">📰</div>
          <h3>Newspaper Publication</h3>
        </div>
        <div class="service-card">
          <div class="service-icon">🎓</div>
          <h3>JAMB Services</h3>
        </div>
    
        <div class="footer">
    <a href="dashboard.php" class="icon">
        <img src="home_icon.webp" alt="Home"><br>Home
    </a>
    <a href="history.html" class="icon">
        <img src="history_icon.png" alt="History"><br>History
    </a>
    <a href="https://wa.me/your-whatsapp-number" class="icon" target="_blank">
        <img src="whatsapp_logo.jpeg" alt="Help"><br>Help
    </a>
    <a href="logout.php" class="icon">
        <img src="logout_icon.png" alt="Logout"><br>Logout
    </a>
</div>

<div class="floating-icon">
    <a href="menu.html">
        <img src="menu_icon.png" alt="Floating">
    </a>
</div>

      </div>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const mainContent = document.getElementById('main-content');
      sidebar.classList.toggle('open');
      mainContent.classList.toggle('shifted');
    }

    const sidebar = document.querySelector('.sidebar');
    const menuToggle = document.querySelector('.menu-toggle');

    menuToggle.addEventListener('click', () => {
      sidebar.classList.toggle('hidden');
    });

    const ninMenu = document.getElementById('ninMenu');
    const ninDropdown = document.getElementById('ninDropdown');
    
    // Toggle dropdown menu on click
    ninMenu.addEventListener('click', (event) => {
        event.preventDefault();
        ninDropdown.classList.toggle('show');
    });
    
    // Close dropdown if clicked outside
    document.addEventListener('click', (event) => {
        if (!ninMenu.contains(event.target) && !ninDropdown.contains(event.target)) {
            ninDropdown.classList.remove('show');
        }
    });

    const bvnMenu = document.getElementById('bvnMenu');
    const bvnDropdown = document.getElementById('bvnDropdown');
    
    // Toggle dropdown menu on click
    bvnMenu.addEventListener('click', (event) => {
        event.preventDefault();
        bvnDropdown.classList.toggle('show');
    });
    
    // Close dropdown if clicked outside
    document.addEventListener('click', (event) => {
        if (!bvnMenu.contains(event.target) && !bvnDropdown.contains(event.target)) {
            bvnDropdown.classList.remove('show');
        }
    });
  </script>
</body>
</html>

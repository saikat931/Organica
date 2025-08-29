<?php
session_start();

require_once '../config/db_config.php';

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Get the logged-in user's information (e.g., username)
$username = $_SESSION['username'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="/assets/css/admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="admin-container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="logo">Organica Admin</h2>
      <nav class="nav">
        <ul>
          <li class="nav-item active" data-target="dashboard"><i class="fas fa-chart-line"></i> Dashboard</li>
          <li class="nav-item" data-target="vendor"><i class="fas fa-store"></i> Vendor</li>
          <li class="nav-item" data-target="delivery"><i class="fas fa-motorcycle"></i> Delivery Partners</li>
          <li class="nav-item" data-target="users"><i class="fas fa-users"></i> Users</li>
          <li class="nav-item" data-target="feedback"><i class="fas fa-comment-dots"></i> Feedback</li>
          <li class="nav-item" data-target="logout"><i class="fa-solid fa-right-from-bracket"></i> Log Out</li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <section id="dashboard" class="section active-section">
        <h1>Dashboard Overview</h1>
        <div class="cards">
          <button class="card">Total Orders<sup> 30000000</sup></button>
          <button class="card">Revenue<sup> 30000000</sup></button>
          <button class="card">Active Users<sup> 300</sup></button>
          <button class="card">Pending Verifications<sup> 10</sup></button>
        </div>
        <div class="chart-container">
          <canvas id="ordersChart" height="100"></canvas>
        </div>
        <div class="chart-container">
          <canvas id="annualRevenueChart" height="100"></canvas>
        </div>
      </section>

      <!-- vendor  -->

      <section id="vendor" class="section">
        <h1>Vendor Management</h1>
        <button class="add-btn">+ Add Vendor</button>
        <table class="data-table">
          <thead>
            <tr><th>Name</th><th>Status</th><th>Location</th><th>Actions</th></tr>
          </thead>
          <tbody>
            <tr><td>Pizza Palace</td><td>Active</td><td>Delhi</td><td><button>Details</button><button>Accept</button><button>Delete</button></td></tr>
          </tbody>
        </table>
      </section>

        <!-- vendor popup -->

      <div class="vendor-request">
        <div class="vendor-request-popup">
    <div class="vendor-request-header">
      <div class="badge">PRO</div>
      <div class="avatar">
        <img src="https://storage.googleapis.com/a1aa/image/33f1439f-44a1-4644-c04a-5593306cd8eb.jpg" alt="Portrait of a smiling young woman">
      </div>
      <h2 class="name">Ricky Park</h2>
      <p class="location">NEW YORK</p>
      <p class="bio">User interface designer and front-end developer</p>
      <div class="buttons">
        <button class="btn btn-message">Message</button>
        <button class="btn btn-follow">Following</button>
      </div>
    </div>
    <div class="vendor-request-footer">
      <p class="skills-title">Skills</p>
      <div class="skills">
        <span class="skill">UI / UX</span>
        <span class="skill">Front End Development</span>
        <span class="skill">HTML</span>
        <span class="skill">CSS</span>
        <span class="skill">JavaScript</span>
        <span class="skill">React</span>
        <span class="skill">Node</span>
      </div>
    </div>
  </div>
      </div>

      <!-- user  -->

      <section id="delivery" class="section">
        <h1>Delivery Partner Management</h1>
        <button class="add-btn">+ Add Partner</button>
        <table class="data-table">
          <thead>
            <tr><th>Name</th><th>Status</th><th>Last Location</th><th>Orders Delivered</th><th>Actions</th></tr>
          </thead>
          <tbody>
            <tr><td>John</td><td>Active</td><td>Mumbai</td><td>120</td><td><button>Details</button><button>Delete</button></td></tr>
          </tbody>
        </table>
      </section>

      <section id="users" class="section">
        <h1>User Management</h1>
        <table class="data-table">
          <thead>
            <tr><th>Name</th><th>Status</th><th>Orders</th><th>Actions</th></tr>
          </thead>
          <tbody>
            <tr><td>Jane Doe</td><td>Active</td><td>32</td><td><button>View</button><button>Ban</button></td></tr>
          </tbody>
        </table>
      </section>

      <section id="feedback" class="section">
        <h1>User Feedback & Tickets</h1>
        <table class="data-table">
          <thead>
            <tr><th>User</th><th>Issue</th><th>Status</th><th>Actions</th></tr>
          </thead>
          <tbody>
            <tr><td>Amit</td><td>Late Delivery</td><td>Open</td><td><button>Resolve</button></td></tr>
          </tbody>
        </table>
      </section>

      <section id="logout" class="section">
        <h1>Log Out</h1>
        <p>Are You Sure, You want tot log Out</p>
         

          <div class="logout-container" id="logoutContainer">
        <div class="logout-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" y1="12" x2="9" y2="12"></line>
            </svg>
        </div>
        <h1 class="logout-title">Log Out</h1>
        <p class="logout-message">Are you sure you want to log out? You'll need to sign in again to access your account.</p>
        <div class="button-group">
            <button class="btn btn-cancel" id="cancelBtn">Cancel</button>
            <button class="btn btn-logout" id="logoutBtn">Log Out</button>
        </div>
    </div>
    
    <div class="confirmation-animation" id="confirmationAnimation">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
            <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
            <path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
        </svg>
        <div class="confirmation-message">Logged Out Successfully</div>
        <div class="redirect-message">Redirecting to login page...</div>
    </div>



      </section>
    </main>
  </div>

  <script>
    const navItems = document.querySelectorAll('.nav-item');
    const sections = document.querySelectorAll('.section');

    navItems.forEach(item => {
      item.addEventListener('click', () => {
        navItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');

        const target = item.getAttribute('data-target');
        sections.forEach(section => {
          section.classList.remove('active-section');
          if (section.id === target) {
            section.classList.add('active-section');
          }
        });
      });
    });

    const ctx = document.getElementById('ordersChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
          label: 'Orders This Week',
          data: [120, 190, 170, 210, 250, 300, 280],
          backgroundColor: '#ff4c4c'
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    const annualCtx = document.getElementById('annualRevenueChart').getContext('2d');
    new Chart(annualCtx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'Annual Revenue (₹)',
          data: [15000, 18000, 17000, 19000, 21000, 25000, 23000, 24000, 26000, 28000, 30000, 32000],
          fill: false,
          borderColor: '#4caf50',
          tension: 0.1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: false
          }
        }
      }
    });


    // log out

    document.addEventListener('DOMContentLoaded', function() {
            const logoutContainer = document.getElementById('logoutContainer');
            const cancelBtn = document.getElementById('cancelBtn');
            const logoutBtn = document.getElementById('logoutBtn');
            const confirmationAnimation = document.getElementById('confirmationAnimation');
            
            // Cancel button handler
            cancelBtn.addEventListener('click', function() {
                // In a real app, you might redirect back to the previous page
                // For this demo, we'll just show a message
                logoutContainer.classList.add('hidden');
                setTimeout(() => {
                    alert('Logout canceled. You would be redirected back to the previous page in a real application.');
                    logoutContainer.classList.remove('hidden');
                }, 300);
            });
            
            // Logout button handler
//             logoutBtn.addEventListener('click', function () {
//     confirmationAnimation.classList.add('active');

//     setTimeout(() => {
//         fetch('logout.php')
//             .then(() => {
//                 window.location.href = 'login.php';
//             });
//     }, 1500);
// });

logoutBtn.addEventListener('click', function () {
    confirmationAnimation.classList.add('active');

    setTimeout(() => {
        // Notify other tabs about logout
        localStorage.setItem('logout', Date.now());

        // Perform logout via fetch
        fetch('logout.php')
            .then(() => {
                window.location.href = 'login.php';
            });
    }, 1500);
});

window.addEventListener('storage', function(event) {
    if (event.key === 'logout') {
        // alert("You have been logged out in another tab.");
        window.location.href = 'login.php';
    }
});


        });



  // vendor-request 
  hhhhhhhhhhh

  </script>
</body>
</html>

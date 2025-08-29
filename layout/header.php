<!-- Global header/nav -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Organica - Quality organic fruit & vegetables.</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href= "./assets/css/main.css">
  <link rel="stylesheet" href= "./assets/css/home.css">
  <link rel="stylesheet" href= "./assets/css/header.css">
  <link rel="stylesheet" href= "./assets/css/about.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="top-bar">
      <div class="container">
        <p>Free shipping for all order of $105</p>
      </div>
    </div>

    <div class="nav-wrapper">
      <div class="container">

        <h1 class="h1">
          <a href="./index.php" class="logo">Organ<span class="span">ica</span></a>
        </h1>

        <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

        <nav class="navbar" data-navbar>

          <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

          <ul class="navbar-list">

            <li>
              <a href="./index.php?page=home" class="navbar-link">Home</a>
            </li>

            <li>
              <a href="index.php?page=about" class="navbar-link">About</a>
            </li>

            <li>
              <a href="index.php?page=shop" class="navbar-link">Shop</a>
            </li>

            <li>
              <a href="index.php?page=blog" class="navbar-link">Blog</a>
            </li>

            <li>
              <a href="index.php?page=product-details" class="navbar-link">Products</a>
            </li>

            <li>
              <a href="index.php?page=contact" class="navbar-link">Contact</a>
            </li>

          </ul>

        </nav>

        <div class="header-action">

          <div class="search-wrapper" data-search-wrapper>

            <button class="header-action-btn" aria-label="Toggle search" data-search-btn>
              <ion-icon name="search-outline" class="search-icon"></ion-icon>
              <ion-icon name="close-outline" class="close-icon"></ion-icon>
            </button>

            <div class="input-wrapper">
              <input type="search" name="search" placeholder="Search here" class="search-input">

              <button class="search-submit" aria-label="Submit search">
                <ion-icon name="search-outline"></ion-icon>
              </button>
            </div>

          </div>

          <button class="header-action-btn" aria-label="Open whishlist" data-panel-btn="whishlist">
            <ion-icon name="heart-outline"></ion-icon>

            <data class="btn-badge" value="3">03</data>
          </button>

          <button class="header-action-btn" aria-label="Open shopping cart" data-panel-btn="cart">
            <ion-icon name="basket-outline"></ion-icon>

            <data class="btn-badge" value="2">02</data>
          </button>

          <button
              class="header-action-btn"
              aria-label="Open shopping user"
              data-panel-btn="user"
            >
              <ion-icon name="person-outline"></ion-icon>

              <!-- <data class="btn-badge" value="2">02</data> -->
            </button>

        </div>

      </div>
    </div>

  </header>



  <!-- 
    - #ASIDE
  -->

  <aside class="aside">

    <!-- whishlist  -->
    <div class="side-panel" data-side-panel="whishlist">

      <button class="panel-close-btn" aria-label="Close whishlist" data-panel-btn="whishlist">
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <ul class="panel-list">

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-1.jpg" width="46" height="46" loading="lazy"
                alt="Bright Side Vegetarian">
            </figure>

            <div>
              <p class="item-title">Bright Side Vegetarian</p>

              <span class="item-value">$20.15x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-2.jpg" width="46" height="46" loading="lazy" alt="Eco Vegetable">
            </figure>

            <div>
              <p class="item-title">Eco Vegetable</p>

              <span class="item-value">$13.25x2</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-3.jpg" width="46" height="46" loading="lazy"
                alt="House of Veggies">
            </figure>

            <div>
              <p class="item-title">House of Veggies</p>

              <span class="item-value">$20.15x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

      </ul>

      <div class="subtotal">
        <p class="subtotal-text">Subtotal:</p>

        <data class="subtotal-value" value="215.14">$215.14</data>
      </div>

      <a href="./whishlist.html" class="panel-btn">View Whishlist</a>

    </div>


    <!-- cart  -->
    <div class="side-panel" data-side-panel="cart">

      <button class="panel-close-btn" aria-label="Close cart" data-panel-btn="cart">
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <ul class="panel-list">

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-1.jpg" width="46" height="46" loading="lazy"
                alt="Bright Side Vegetarian">
            </figure>

            <div>
              <p class="item-title">Bright Side Vegetarian</p>

              <span class="item-value">$20.15x1</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

        <li class="panel-item">
          <a href="./product-details.html" class="panel-card">

            <figure class="item-banner">
              <img src="./assets/images/product-small-2.jpg" width="46" height="46" loading="lazy" alt="Eco Vegetable">
            </figure>

            <div>
              <p class="item-title">Eco Vegetable</p>

              <span class="item-value">$13.25x2</span>
            </div>

            <button class="item-close-btn" aria-label="Remove item">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </a>
        </li>

      </ul>

      <div class="subtotal">
        <p class="subtotal-text">Subtotal:</p>

        <data class="subtotal-value" value="215.14">$215.14</data>
      </div>

      <a href="./cart.html" class="panel-btn">View Cart</a>

    </div>

    <!-- user  -->
    <div class="side-panel" data-side-panel="user">
        <button
          class="panel-close-btn"aria-label="Close user"data-panel-btn="user"><ion-icon name="close-outline"></ion-icon></button>

        <div class="card">
          <!-- Top bar -->
          <div class="user-top-bar">
            <button aria-label="Back">
              <i class="fas fa-chevron-left text-lg"></i>
            </button>
            <h1>Profile</h1>
          </div>
          <!-- Profile image -->
          <div class="profile">
            <div class="profile-img">
              <img
                src="https://storage.googleapis.com/a1aa/image/b6cb3d28-e565-41ab-f8de-14156d6b21f1.jpg"
                alt="Portrait of a smiling man"
              />
              <button aria-label="Edit profile picture">
                <i class="fas fa-camera text-sm"></i>
              </button>
            </div>
            <h2>Roan Atkinson</h2>
            <p>Entrepreneur</p>
          </div>
          <!-- Pink wave -->
          <div class="wave">
            <img src="./assets/images/header-user.png" alt="wave background" />
          </div>

          <!-- Content -->
          <div class="content">
            <h3>My Orders</h3>
            <div class="orders">
              <div>
                <img
                  src="https://storage.googleapis.com/a1aa/image/81aec5e8-ebd5-46f2-13d9-b90b57c9afd0.jpg"
                  alt="Pending Payment"
                /><span>Pending Payment</span>
              </div>
              <div>
                <img
                  src="https://storage.googleapis.com/a1aa/image/556e2dd0-2f3f-4f7c-8c0c-166dbb8c556a.jpg"
                  alt="Delivered"
                /><span>Delivered</span>
              </div>
              <div>
                <img
                  src="https://storage.googleapis.com/a1aa/image/845ffc99-4b4f-4233-1c34-c85faa2b1a4c.jpg"
                  alt="Processing"
                /><span>Processing</span>
              </div>
              <div>
                <img
                  src="https://storage.googleapis.com/a1aa/image/31d0c8cb-d1fe-4741-ecfe-ad973e42a3cd.jpg"
                  alt="Cancelled"
                /><span>Cancelled</span>
              </div>
              <div>
                <img
                  src="https://storage.googleapis.com/a1aa/image/92c94298-8df4-4d0d-e060-b7f69c30130d.jpg"
                  alt="Wishlist"
                /><span>Wishlist</span>
              </div>
              <div>
                <img
                  src="https://storage.googleapis.com/a1aa/image/a574cf4c-baa5-48d8-6dac-31671008f570.jpg"
                  alt="Customer Care"
                /><span>Customer Care</span>
              </div>
            </div>
            <div class="settings">
              <button aria-label="Edit Profile">
                <div><i class="fas fa-user"></i><span>Edit Profile</span></div>
                <i class="fas fa-chevron-right"></i>
              </button>
              <button aria-label="Shipping Address">
                <div>
                  <i class="fas fa-map-marker-alt"></i
                  ><span>Shipping Address</span>
                </div>
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </div>
          <button class="logout" type="button">
            <span>Logout</span><i class="fas fa-sign-out-alt"></i>
          </button>
        </div>
    </div>
     

  </aside>

  
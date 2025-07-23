<!-- Homepage with search/featured -->



<?php include("./layout/header.php"); ?>

  

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">25% off all products.</p>

            <h2 class="h1 hero-title">
              Qualityful <span class="span">organic</span>
              fruit & <span class="span">vegetables.</span>
            </h2>

            <p class="hero-text">
              It has survived not only five centuries also there leaped.
            </p>

            <a href="./shop.html" class="btn btn-primary">
              <span class="span">Shop Now</span>

              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="603" height="634" loading="lazy" alt="Vegetables"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="item-icon">
                <img src="./assets/images/service-icon-1.png" width="40" height="40" loading="lazy" alt="Truck icon">
              </div>

              <h3 class="h3 item-title">Free Shipping</h3>
            </li>

            <li class="service-item">
              <div class="item-icon">
                <img src="./assets/images/service-icon-2.png" width="40" height="40" loading="lazy"
                  alt="Payment card icon">
              </div>

              <h3 class="h3 item-title">Safe Payment</h3>
            </li>

            <li class="service-item">
              <div class="item-icon">
                <img src="./assets/images/service-icon-3.png" width="40" height="40" loading="lazy" alt="Helpline icon">
              </div>

              <h3 class="h3 item-title">24/7 Support</h3>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #OFFERS
      -->

      <section class="section offers">
        <div class="container">

          <ul class="offers-list has-scrollbar">

            <li class="offers-item">
              <a href="./shop.html" class="offers-card">

                <figure class="card-banner">
                  <img src="./assets/images/offer-1.png" width="292" height="230" loading="lazy"
                    alt="Fresh vegetables package" class="w-100">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Up To 25% Off</p>

                  <h3 class="h3 card-title">Fresh vegetables package.</h3>

                  <div class="btn btn-primary">Shop Now</div>
                </div>

              </a>
            </li>

            <li class="offers-item">
              <a href="./shop.html" class="offers-card">

                <figure class="card-banner">
                  <img src="./assets/images/offer-2.png" width="336" height="244" loading="lazy"
                    alt="Healthy & fresh beef" class="w-100">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Up To 25% Off</p>

                  <h3 class="h3 card-title">Healthy & fresh beef.</h3>

                  <div class="btn btn-primary">Shop Now</div>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        All Organic Products
      -->

      <section class="section product">
        <div class="container">

          <p class="section-subtitle"> -- Organic Products --</p>

          <h2 class="h2 section-title">All Organic Products</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn active">
                <img src="./assets/images/filter-1.png" width="20" alt="" class="default">

                <img src="./assets/images/filter-1-active.png" width="20" alt="" class="color">

                <p class="filter-text">Fresh Vegetables</p>
              </button>
            </li>

            <li>
              <button class="filter-btn">
                <img src="./assets/images/filter-2.png" width="20" alt="" class="default">

                <img src="./assets/images/filter-2-active.png" width="20" alt="" class="color">

                <p class="filter-text">Fish & Meat</p>
              </button>
            </li>

            <li>
              <button class="filter-btn">
                <img src="./assets/images/filter-3.png" width="20" alt="" class="default">

                <img src="./assets/images/filter-3-active.png" width="20" alt="" class="color">

                <p class="filter-text">Healthy Fruit</p>
              </button>
            </li>

            <li>
              <button class="filter-btn">
                <img src="./assets/images/filter-1.png" width="20" alt="" class="default">

                <img src="./assets/images/filter-1-active.png" width="20" alt="" class="color">

                <p class="filter-text">Dairy Products</p>
              </button>
            </li>

          </ul>

          <ul class="grid-list fresh-vegetables active">

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-1.png" width="189" height="189" loading="lazy" alt="Fresh Orangey">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Fresh Orangey</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-2.png" width="189" height="189" loading="lazy" alt="key Lime">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">key Lime</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-3.png" width="189" height="189" loading="lazy"
                    alt="Fresh Watermelon">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Fresh Watermelon</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-4.png" width="189" height="189" loading="lazy" alt="Visual matches">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Visual matches</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

          </ul>

          <ul class="grid-list fish-&-meat">

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-5.png" width="189" height="189" loading="lazy"
                    alt="Pomagranate Fruit">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Pomagranate Fruit</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-6.png" width="189" height="189" loading="lazy" alt="Red onion">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Red onion</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-7.png" width="189" height="189" loading="lazy"
                    alt="Lens Results Broccoli">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Lens Results Broccoli</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-8.png" width="189" height="189" loading="lazy"
                    alt="Lens Results Spinach">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Lens Results Spinach</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

          </ul>

          <ul class="grid-list healthy-fruit">

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-5.png" width="189" height="189" loading="lazy"
                    alt="Pomagranate Fruit">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Pomagranate Fruit</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-6.png" width="189" height="189" loading="lazy" alt="Red onion">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Red onion</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-7.png" width="189" height="189" loading="lazy"
                    alt="Lens Results Broccoli">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Lens Results Broccoli</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-8.png" width="189" height="189" loading="lazy"
                    alt="Lens Results Spinach">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Lens Results Spinach</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

          </ul>

          <ul class="grid-list dairy-products">

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-5.png" width="189" height="189" loading="lazy"
                    alt="Pomagranate Fruit">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Pomagranate Fruit</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-6.png" width="189" height="189" loading="lazy" alt="Red onion">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Red onion</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-7.png" width="189" height="189" loading="lazy"
                    alt="Lens Results Broccoli">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Lens Results Broccoli</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">
                  <img src="./assets/images/product-8.png" width="189" height="189" loading="lazy"
                    alt="Lens Results Spinach">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <h3 class="h4 card-title">
                  <a href="./product-details.html">Lens Results Spinach</a>
                </h3>

                <div class="price-wrapper">
                  <del class="del">$75.00</del>

                  <data class="price" value="85.00">$85.00</data>
                </div>

                <button class="btn btn-primary">Add to Cart</button>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <p class="section-subtitle">Summer Offer</p>

          <h2 class="h2 section-title">Up To 50% Off All Product.</h2>

          <p class="cta-text">
            It has survived not only five centuries also leaped.
          </p>

          <a href="./shop.html" class="btn btn-primary">
            <span>Shop Now</span>

            <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>





      <!-- 
        - #TOP PRODUCT
      -->

      <section class="section top-product">
        <div class="container">

          <p class="section-subtitle"> -- Organic Food --</p>

          <h2 class="h2 section-title">Trendy Products</h2>

          <ul class="top-product-list grid-list">

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="./assets/images/top-product-1.png" width="100" height="100" loading="lazy"
                    alt="Fresh Orangey">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="./product-details.html">Fresh Orangey</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">$75.00</del>

                    <data class="price" value="85.00">$85.00</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="./assets/images/top-product-2.png" width="100" height="100" loading="lazy" alt="key Lime">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="./product-details.html">key Lime</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">$75.00</del>

                    <data class="price" value="85.00">$85.00</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="./assets/images/top-product-3.png" width="100" height="100" loading="lazy"
                    alt="Fresh Watermelon">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="./product-details.html">Fresh Watermelon</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">$75.00</del>

                    <data class="price" value="85.00">$85.00</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="./assets/images/top-product-4.png" width="100" height="100" loading="lazy" alt="Stobery">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="./product-details.html">Stobery</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">$75.00</del>

                    <data class="price" value="85.00">$85.00</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="./assets/images/top-product-5.png" width="100" height="100" loading="lazy"
                    alt="Pomagranate Fruit">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="./product-details.html">Pomagranate Fruit</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">$75.00</del>

                    <data class="price" value="85.00">$85.00</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="./assets/images/top-product-6.png" width="100" height="100" loading="lazy"
                    alt="Lens Results Broccoli">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="./product-details.html">Lens Results Broccoli</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">$75.00</del>

                    <data class="price" value="85.00">$85.00</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="./assets/images/top-product-7.png" width="100" height="100" loading="lazy"
                    alt="Lens Results Spinach">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="./product-details.html">Lens Results Spinach</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">$75.00</del>

                    <data class="price" value="85.00">$85.00</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="./assets/images/top-product-8.png" width="100" height="100" loading="lazy"
                    alt="Lorigun Artificial">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="./product-details.html">Lorigun Artificial</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">$75.00</del>

                    <data class="price" value="85.00">$85.00</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

            <li class="top-product-item">
              <div class="product-card top-product-card">

                <figure class="card-banner">
                  <img src="./assets/images/top-product-9.png" width="100" height="100" loading="lazy"
                    alt="Leaf lettuce">

                  <div class="btn-wrapper">
                    <button class="product-btn" aria-label="Add to Whishlist">
                      <ion-icon name="heart-outline"></ion-icon>

                      <div class="tooltip">Add to Whishlist</div>
                    </button>

                    <button class="product-btn" aria-label="Quick View">
                      <ion-icon name="eye-outline"></ion-icon>

                      <div class="tooltip">Quick View</div>
                    </button>
                  </div>
                </figure>

                <div class="card-content">

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <h3 class="h4 card-title">
                    <a href="./product-details.html">Leaf lettuce</a>
                  </h3>

                  <div class="price-wrapper">
                    <del class="del">$75.00</del>

                    <data class="price" value="85.00">$85.00</data>
                  </div>

                  <button class="btn btn-primary">Add to Cart</button>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PARTNER
      -->

      <section class="section partner">
        <div class="container">

          <p class="section-subtitle"> -- Organic Food --</p>

          <h2 class="h2 section-title">Trusted Partners</h2>

          <ul class="has-scrollbar">

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-1.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-2.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-3.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-4.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-5.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

            <li class="partner-item">
              <figure class="partner-logo">
                <img src="./assets/images/partner-6.png" width="132" height="134" loading="lazy" alt="Partner logo">
              </figure>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testimonials">
        <div class="container">

          <p class="section-subtitle"> -- Some Testimonial --</p>

          <h2 class="h2 section-title">Feedback From Happy Clients</h2>

          <ul class="has-scrollbar">

            <li class="testi-item">
              <div class="testi-card">

                <div class="card-header">

                  <img src="./assets/images/quote-left.png" width="25" height="25" aria-hidden="true" alt="">

                  <img src="./assets/images/testimonial-1.jpg" width="90" height="90" loading="lazy"
                    alt="Willow Peralta" class="card-avatar">

                  <img src="./assets/images/quote-right.png" width="25" height="25" aria-hidden="true" alt="">

                </div>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <blockquote class="card-text">
                  It was popularised in the 1960s
                  with the release of Letraset sheets
                  containing Lorem passages and more recently with desktop publishing software like including.
                </blockquote>

                <h3 class="card-title">Willow Peralta</h3>

                <p class="card-subtitle">Web Developer</p>

              </div>
            </li>

            <li class="testi-item">
              <div class="testi-card">

                <div class="card-header">

                  <img src="./assets/images/quote-left.png" width="25" height="25" aria-hidden="true" alt="">

                  <img src="./assets/images/testimonial-2.jpg" width="90" height="90" loading="lazy"
                    alt="Pamelia Hamrick" class="card-avatar">

                  <img src="./assets/images/quote-right.png" width="25" height="25" aria-hidden="true" alt="">

                </div>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <blockquote class="card-text">
                  It was popularised in the 1960s
                  with the release of Letraset sheets
                  containing Lorem passages and more recently with desktop publishing software like including.
                </blockquote>

                <h3 class="card-title">Pamelia Hamrick</h3>

                <p class="card-subtitle">Web Developer</p>

              </div>
            </li>

            <li class="testi-item">
              <div class="testi-card">

                <div class="card-header">

                  <img src="./assets/images/quote-left.png" width="25" height="25" aria-hidden="true" alt="">

                  <img src="./assets/images/testimonial-3.jpg" width="90" height="90" loading="lazy"
                    alt="Novella Gerber" class="card-avatar">

                  <img src="./assets/images/quote-right.png" width="25" height="25" aria-hidden="true" alt="">

                </div>

                <div class="rating-wrapper">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>

                <blockquote class="card-text">
                  It was popularised in the 1960s
                  with the release of Letraset sheets
                  containing Lorem passages and more recently with desktop publishing software like including.
                </blockquote>

                <h3 class="card-title">Novella Gerber</h3>

                <p class="card-subtitle">Web Developer</p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog">
        <div class="container">

          <p class="section-subtitle"> -- News And Blog --</p>

          <h2 class="h2 section-title">Bright Side Vegetarianism</h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="./assets/images/blog-1.jpg" width="451" height="310" loading="lazy"
                    alt="We automatically search for andapply coupons when." class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="wrapper-item">
                      <ion-icon name="calendar-clear-outline"></ion-icon>

                      <time class="text" datetime="2022-04-13">13 April, 2022</time>
                    </div>

                    <div class="wrapper-item">
                      <ion-icon name="heart-outline"></ion-icon>

                      <span class="text">58 Million</span>
                    </div>

                  </div>

                  <h3 class="h3 card-title">
                    <a href="./404.html">We automatically search for andapply coupons when.</a>
                  </h3>

                  <a href="./404.html" class="btn btn-primary">
                    <span>Read More</span>

                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="./assets/images/blog-2.jpg" width="451" height="310" loading="lazy"
                    alt="How to get more traffic in your website of ecommerce." class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="wrapper-item">
                      <ion-icon name="calendar-clear-outline"></ion-icon>

                      <time class="text" datetime="2022-04-13">13 April, 2022</time>
                    </div>

                    <div class="wrapper-item">
                      <ion-icon name="heart-outline"></ion-icon>

                      <span class="text">58 Million</span>
                    </div>

                  </div>

                  <h3 class="h3 card-title">
                    <a href="./404.html">How to get more traffic in your website of ecommerce.</a>
                  </h3>

                  <a href="./404.html" class="btn btn-primary">
                    <span>Read More</span>

                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="./assets/images/blog-3.jpg" width="451" height="310" loading="lazy"
                    alt="25 Rules and regulation to be successful in your business." class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-wrapper">

                    <div class="wrapper-item">
                      <ion-icon name="calendar-clear-outline"></ion-icon>

                      <time class="text" datetime="2022-04-13">13 April, 2022</time>
                    </div>

                    <div class="wrapper-item">
                      <ion-icon name="heart-outline"></ion-icon>

                      <span class="text">58 Million</span>
                    </div>

                  </div>

                  <h3 class="h3 card-title">
                    <a href="./404.html">25 Rules and regulation to be successful in your business.</a>
                  </h3>

                  <a href="./404.html" class="btn btn-primary">
                    <span>Read More</span>

                    <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter">
        <div class="container">

          <div class="newsletter-card">

            <p class="section-subtitle"> -- Subscribe Newsletter --</p>

            <h2 class="h2 section-title">Sign Up To Newsletter & Get <span class="span">20% Off.</span></h2>

            <form action="" class="newsletter-form">

              <input type="email" name="email" placeholder="Enter your email" required class="input-email">

              <button type="submit" class="btn btn-primary">
                <span>Sign Up</span>

                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





<?php include("./layout/footer.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('media.css'); ?>">
    <title>Wide Wide</title>
</head>

<body>
    <header>
        <nav>
            <h4>Wide Wide </h4>
            <ul id="menu_bx">
                <li><a href="#">Discover</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Special Deals</a></li>
                <li><a href="#">About US</a></li>
                <li><a href="#">Register</a></li>
            </ul>
            <i class="bi bi-three-dots"></i>
        </nav>
        <div class="content">
      <div class="cont_bx">
        <h1>The right destination for you and your family</h1>
        <p>Creative taglines have the capability of capturing the attention of potential customer.</p>
        <button>Start your search</button>
      </div>

      <div class="trip_bx">
        <div class="search_bx">
          <div class="card">
            <h4>Location <i class="bi bi-caret-down-fill"></i></h4>
            <input type="text" placeholder="Enter your destination">
          </div>
          <div class="card">
            <h4>Date <i class="bi bi-caret-down-fill"></i></h4>
            <input type="date">
          </div>
          <div class="card">
            <h4>People <i class="bi bi-caret-down-fill"></i></h4>
            <input type="number" placeholder="How many People?">
          </div>
          <input type="button" value="Explore Now">
        </div>

        <div class="travel_bx">
          <h4>Countries to travel</h4>
          <div class="cards">
            <div class="card">
              <h3>INDIA <img src="img/india-flag.jpg" alt=""></h3>
              <img src="img/Mumbai-india-at-night.jpg" alt="">
              <div class="btn_city">
                <a href="">Read Now</a>
                <h5>Mumbai Central <br><span>₹20000</span></h5>
              </div>
            </div>

            <div class="card">
              <h3>UNITED STATE <img src="img/united-state.png" alt=""></h3>
              <img src="img/NewYork.jpeg" alt="">
              <div class="btn_city">
                <a href="">Read Now</a>
                <h5>NewYork<br><span>₹65000</span></h5>
              </div>
            </div>

            <div class="card">
              <h3>RUSSIA <img src="icon/russia.png" alt=""></h3>
              <img src="img/Saintpeterburg.jpeg" alt="">
              <div class="btn_city">
                <a href="">Read Now</a>
                <h5>Saint Petersburg<br><span>₹80000</span></h5>
              </div>
            </div>

            <div class="card">
              <h3>SPAIN <img src="icon/Flag_of_Spain.webp" alt=""></h3>
              <img src="img/barcilona.jpeg" alt="">
              <div class="btn_city">
                <a href="">Read Now</a>
                <h5>Barcelona<br><span>₹85000</span></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Offers Section -->
  <div class="offers">
    <h1>Best tour Package offers for You</h1>
    <p>Choose your next destination</p>
    <div class="cards">
      <div class="card">
        <h3>Lotus-Delhi</h3>
        <div class="img_text">
          <img src="img/lotus-temple.jpeg" alt="">
          <h4>Included: flight ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
        </div>
        <div class="cont_bx">
          <div class="price">
            <div class="heart_chat">
              <i class="bi bi-heart-fill"><span>78643</span></i>
              <i class="bi bi-chat-fill"><span>47594</span></i>
            </div>
            <div class="info_price">
              <a href="">More Info</a>
              <h4>₹40,000</h4>
            </div>
          </div>
          <div class="days">5 <br> Days <br> India</div>
        </div>
      </div>

      <div class="card">
        <h3>Burj Khalifa -Dubai</h3>
        <div class="img_text">
          <img src="img/burj-khalifa.jpeg" alt="">
          <h4>Included: flight ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
        </div>
        <div class="cont_bx">
          <div class="price">
            <div class="heart_chat">
              <i class="bi bi-heart-fill"><span>87695</span></i>
              <i class="bi bi-chat-fill"><span>35790</span></i>
            </div>
            <div class="info_price">
              <a href="">More Info</a>
              <h4>₹95000</h4>
            </div>
          </div>
          <div class="days">10 <br> Days <br> Dubai</div>
        </div>
      </div>

      <div class="card">
        <h3>Pyramids-Egypt</h3>
        <div class="img_text">
          <img src="img/pyramid.jpeg" alt="">
          <h4>Included: flight ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
        </div>
        <div class="cont_bx">
          <div class="price">
            <div class="heart_chat">
              <i class="bi bi-heart-fill"><span>98753</span></i>
              <i class="bi bi-chat-fill"><span>48321</span></i>
            </div>
            <div class="info_price">
              <a href="">More Info</a>
              <h4>₹78000</h4>
            </div>
          </div>
          <div class="days">7 <br> Days <br> Egypt</div>
        </div>
      </div>

      <div class="card">
        <h3>Ha Long Bay-Vietnam</h3>
        <div class="img_text">
          <img src="img/ha long bay.jpeg" alt="">
          <h4>Included: flight ticket, Hotel, Breakfast, Tours, Airport Transfer</h4>
        </div>
        <div class="cont_bx">
          <div class="price">
            <div class="heart_chat">
              <i class="bi bi-heart-fill"><span>64321</span></i>
              <i class="bi bi-chat-fill"><span>49794</span></i>
            </div>
            <div class="info_price">
              <a href="">More Info</a>
              <h4>₹45000</h4>
            </div>
          </div>
          <div class="days">12 <br> Days <br> Vietnam</div>
        </div>
      </div>
    </div>
  </div>
    <div class="destination">
        <div class="des_bx">
            <h4>Our Destination</h4>
            <p>choose your next Destination</p>
            <li>India</li>
            <li>Dubai</li>
            <li>USA</li>
            <li>Vietnam</li>
            <li>Russia</li>
            <li>Brazil</li>
            <h6>Included: Air ticket, Hotel, Breakfast, Tours, Airport transfer</h6>
            <button>MORE INFO</button>
        </div>
        <div class="img_bx">
            <img src="img/des-image.jpeg" alt="">
            <div class="msg">
                <img src="icon/round_india_flag.png" alt="">
                <div class="cont">
                    <h4>India</h4>
                    <div class="icon">
                        <i class="bi bi-heart-fill"><span>86415</span></i>
                        <i class="bi bi-chat-fill"><span>4586</span></i>
                    </div>
                </div>
            </div>
            <div class="msg">
                <img src="icon/united-states.png" alt="">
                <div class="cont">
                    <h4>United State</h4>
                    <div class="icon">
                        <i class="bi bi-heart-fill"><span>86415</span></i>
                        <i class="bi bi-chat-fill"><span>4586</span></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <h2>Subscribe & <br> get special discount</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt neque animi .</p>
        <div class="input">
            <input type="text" placeholder="Enter your Email Address">
            <button>Subscribe</button>
        </div>
        <ul>
            <li>7823 <br> <h6>Years Serving the travel Industry</h6></li>
            <li>6374 <br><h6>Global <br> Partner</h6> </li>
            <li>1496 <br> <h6>Industry Awards since 2022</h6></li>
            <li>5658 <br> <h6>Subscribe</h6></li>
        </ul>
    </footer>
    <script src="app.js"></script>
    
</body>

</html>

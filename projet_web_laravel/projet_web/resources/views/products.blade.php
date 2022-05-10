<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Products - Red store</title>
    <link rel="stylesheet" href="style boutique.css" />
    <link rel="icon" href="image/logo.png">

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="index.html">
            <img src="images/Logo_cesi.png" alt="" width="125px"
          /></a>
        </div>
        <nav>
          <ul id="MenuItems">
          <li><a href="/index">HOME</a></li>
                    <li><a href="#">EVENT</a>
                        <ul><li><a href="/event" id="pars">Participate</a></li></ul></li>
                    <li><a href="#about">ABOUT US</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="#">STORE</a></li>
                    <li><a href="/box_visiteurs">SUGGESTION BOX</a></li>
          </ul>
        </nav>
        <a href="/cart"
          ><img src="images/cart.png" alt="" width="30px" height="30px"
        /></a>
        <img
          src="images/menu.png"
          alt=""
          class="menu-icon"
          onclick="menutoggle()"
        />
      </div>
    </div>

    <div class="small-container">
      <div class="row row-2">
        <h2>All Products</h2>
        <select name="" id="">
          <option value="">Default Sorting</option>
          <option value="">Sort by Price</option>
          <option value="">Sort by Popularity</option>
          <option value="">Sort by Rating</option>
          <option value="">Sort by sales</option>
        </select>
      </div>

      <div class="row">
        <div class="col-4">
         <a href="/product-details">
            <img src="images/product-1.jpg" alt="" /></a> 
          <h4>Red Printed T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>

        <div class="col-4">
          <a href="/product-details">
            <img src="images/product-1.jpg" alt="" /></a> 
          <h4>Red Printed T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>

        <div class="col-4">
          <a href="/product-details">
            <img src="images/product-1.jpg" alt="" /></a> 
          <h4>Red Printed T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class="col-4">
          <a href="/product-details">
            <img src="images/product-1.jpg" alt="" /></a> 
          <h4>Red Printed T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <a href="/product-details">
            <img src="images/product-1.jpg" alt="" /></a> 
          <h4>Red Printed T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>

        <div class="col-4">
          <a href="/product-details">
            <img src="images/product-1.jpg" alt="" /></a> 
          <h4>Red Printed T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>

        <div class="col-4">
          <a href="/product-details">
            <img src="images/product-1.jpg" alt="" /></a> 
          <h4>Red Printed T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class="col-4">
          <a href="/product-details.">
            <img src="images/product-1.jpg" alt="" /></a> 
          <h4>Red Printed T-shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>
      </div>


      <div class="page-btn">
          <a href="/products"><span>1</span></a>  
          <a href="/product-2"><span>2</span></a>
          <a href="/products"><span>3</span></a>
          <a href="/products"><span>4</span></a>
        <span>&#8594;</span>
      </div>
    </div>

   <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>
              Download App for Android <br />
              and ios mobile phone
            </p>
            <div class="app-logo">
              <img src="images/play-store.png" alt="" />
              <img src="images/app-store.png" alt="" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/Logo_cesi.png" alt="" />
            <p>
              Lorem, ipsum dolor sit amet consectetur <br />adipisicing elit.
              Porro, eum?
            </p>
          </div>

          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>YouTube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p>&copy; bde.cesi@2022.ucac-icam.com | Designed by Groupe 1©
                <a href="/mentionslegales">Legal Notice</a>></p>       </div>
    </div>
    <!-- JS for Toggle menu -->
    <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
  </body>
</html>
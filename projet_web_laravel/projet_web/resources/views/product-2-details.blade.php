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
            <!-- TODo: 22:20 -->
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

    <!-- Single Products Detail -->
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img src="images/product-2.jpg" width="100%" id="ProductImg" />

          <div class="small-img-row">
            <div class="small-img-col">
              <img src="images/product-2.jpg" class="small-img" />
            </div>
            <div class="small-img-col">
              <img src="images/product-2.jpg" class="small-img" />
            </div>
            <div class="small-img-col">
              <img src="images/product-2.jpg" class="small-img" />
            </div>
            <div class="small-img-col">
              <img src="images/product-2.jpg" class="small-img" />
            </div>
          </div>
        </div>
        <div class="col-2">
          <p>Home / T-shirt</p>
          <h2>Red Printed T-Shirt By HRX</h2>
          <h4>$50.00</h4>
          <select name="" id="">
            <option value="">Select Size</option>
            <option value="">XXL</option>
            <option value="">XL</option>
            <option value="">Large</option>
            <option value="">Medium</option>
            <option value="">Small</option>
          </select>
          <input type="number" value="1" />
          <a href="" class="btn">Add to Cart</a>
          <h3>Product Details<i class="fa fa-indent"></i></h3>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nemo
            nam magnam rerum sunt explicabo! Distinctio ipsam doloremque nostrum
            ipsum?
          </p>
        </div>
      </div>
    </div>

    <!-- Title -->
    <div class="small-container">
      <div class="row row-2">
        <h2>Related Products</h2>
          <a href="products.html"> <p>View More</p> </a>
      </div>
    </div>

    <!-- Similar Products -->

    <div class="small-container">
      <div class="row">
        <div class="col-4">
          <img src="images/product-2.jpg" alt="" />
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
          <img src="images/product-2.jpg" alt="" />
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
          <img src="images/product-2.jpg" alt="" />
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
          <img src="images/product-2.jpg" alt="" />
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
    </div>

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


    <!-- js for product gallery -->
    <script>
      var ProductImg = document.getElementById("ProductImg");
      var smallImg = document.getElementsByClassName("small-img");
      smallImg[0].onclick = function () {
        ProductImg.src = smallImg[0].src;
      };
      smallImg[1].onclick = function () {
        ProductImg.src = smallImg[1].src;
      };
      smallImg[2].onclick = function () {
        ProductImg.src = smallImg[2].src;
      };
      smallImg[3].onclick = function () {
        ProductImg.src = smallImg[3].src;
      };
    </script>
  </body>
</html>
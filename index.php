<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
  <style>

    
    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    /* Header Styles */
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }
    
    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    
    nav ul li {
      display: inline-block;
      margin-right: 10px;
    }
    
    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 5px 10px;
    }
    
    nav ul li a.active {
      font-weight: bold;
    }
    
    /* Hero Section Styles */
    .hero {
      background-image: url('hero-image.jpg');
      background-size: cover;
      background-position: center;
      height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .hero-content {
      text-align: center;
    }
    
    .hero h1 {
      font-size: 60px;
      margin-bottom: 20px;
      color: #fff;
	  font-family: "Chambord";
    }
    
    .hero p {
      font-size: 24px;
      margin-bottom: 20px;
      color: #fff;
    }
    
    .hero .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }
	img {
    width:  100px;
    height: 90px;
    object-fit: cover;
}	
    
    /* Featured Dishes Section Styles */
    .featured-dishes {
      padding: 2px;
      background-color: #DFC48B;
      text-align: center;
    }
    
    .featured-dishes h2 {
      font-size: 45px;
      margin-bottom: 20px;
      color: #333;
	  font-family: "Chambord";

    }
    
    .dish {
      display: inline-block;
      width: 300px;
      margin: 20px;
      padding: 10px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .dish img {
      width: 200px;
      height: 200px;
      margin-bottom: 10px;
      border-radius: 5px;
    }
    
    .dish h3 {
      font-size: 24px;
      margin-bottom: 5px;
      color: #333;
    }
    
    .dish p {
      font-size: 18px;
      color: #666;
    }
    
    /* About Us Section Styles */
    .about-us {
      padding: 40px;
      text-align: center;
	  
    }
    
    .about-us h2 {
      font-size: 50px;
      margin-bottom: 5px;
      color: #333;
	  font-family: "Chambord";
    }
    
    .about-us p {
      font-size: 18px;
      margin-bottom: 20px;
    }
    
    /* Contact Section Styles */
    .contact {
      padding: 40px;
      background-color: #f9f9f9;
      text-align: center;
    }
    
    .contact h2 {
      font-size: 36px;
      margin-bottom: 20px;
      color: #333;
    }
    
    .contact p {
      font-size: 18px;
      margin-bottom: 10px;
      color: #666;
    }
    
    /* Footer Styles */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    footer p {
      margin: 0;
    }

	body {
    margin: 0;
    padding: 0;
	background-image: url('https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2FmZXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
  }
  
  </style>



  
  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to CafeXpress</h1>
      <p>Experience the perfect blend of delightful flavors, cozy ambiance, and exceptional service at our online cafe resto.</p>
      <a href="menu.php" class="btn" style="background-color: #DFC48B; color: white;">View Menu</a>
    </div>
  </section>

  <section class="featured-dishes">
  <h2>Featured Dishes</h2>
  <div class="dish">
    <img src="img/aglio.jpg" alt="Dish 1">
    <h3>Aglio E Olio</h3>
    <p>The "Aglio e Olio" is a classic Italian pasta dish consisting of spaghetti tossed in olive oil, garlic, red pepper flakes, and parsley, creating a flavorful and aromatic combination.</p>
  </div>
  <div class="dish">
    <img src="img/banoffee.jpg" alt="Dish 2">
    <h3>Banoffee Pie</h3>
    <p>Banoffee Pie is a delightful dessert that combines the flavors of bananas and toffee in a creamy and indulgent treat.</p>
  </div>
  <div class="dish">
    <img src="img/vegan.jpg" alt="Dish 3">
    <h3>Vegan Burger</h3>
    <p>The vegan burger is a delicious plant-based alternative made with black beans and a variety of flavorful ingredients, offering a satisfying and healthy choice for burger enthusiasts.</p>
  </div>
</section>


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  

  <section class="contact">
    <h2>Contact Us</h2>
    <p>123 Main Street, City, Country</p>
    <p>Phone: (123) 456-7890</p>
    <p>Email: info@caferestaurant.com</p>
  </section>


<footer style="font-family: 'Optima', sans-serif; color: #DFC48B;font-weight: bold;"><center>By Agustin, Rivera, Torres | BSCS 2A (2022-2023)</center></footer>





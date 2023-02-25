<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Marketplace.css">
    <title>FlashDelivery Marketplace</title>
</head>
<body>
    <nav class="nav-bar">
        <a id="logoLink" href="../HomePage/home.php"><h1 id="titleLogo">FlashDelivery</h1></a>
        <div>
        <ul id="nav-elements" >
            <a  class="nav-li" href="../HomePage/home.php"><img class="logo-link" src="home.png" alt="shop"></a>
            <a  class="nav-li" href="../Login/Login.php"> <img class="logo-link" src="user.png" alt="payment"></a>
        </ul>
        <ul id="navElements">
            <a  class="navli" href="../HomePage/home.php">Home</a>
            <a  class="navli" href="../Login/Login.php">Log In</a>
        </ul>
    </div>
    </nav>
    <div class="bodypart">
        <div class="categories">
            <h2 class="div-title" id="categoriesBrowse">Browse Categories</h2>
            <div class="categoriesDiv">
                <div class="category" id="burgers" >
                    <img class="categoryimg" src="hamburger.png" alt="">
                    <h4 id="categoryTitle"></h4>
                </div>
                <div class="category" id="pizza">
                    <img class="categoryimg" src="pizza.png" alt="">
                    <h4 id="categoryTitle"></h4>
                </div>
                <div class="category" id="cold">
                    <img class="categoryimg" src="cold.png" alt="">
                    <h4 id="categoryTitle"></h4>
                </div>
                <div class="category" id="pasta">
                    <img class="categoryimg" src="pasta.png" alt="">
                    <h4 id="categoryTitle"></h4>
                </div>
            </div>
            
        </div>
        <div class="popular">
            <h2 class="div-title" id="populartitle">Popular Products</h2>
            <div class="popularDiv">
                <div class="populars" id="burgers">
                    
                    <img src="fav.png" alt="">
                    <img class="popularimg" src="bigBurger.png" alt="">
                    <h4 class="popularTitle">King Burger</h4>
                    <h4 class="price">5$</h4>
                </div>
                <div class="populars" id="pizza">
                    <img src="fav.png" alt="">
                    <img class="popularimg" src="bigPizza.png" alt="">
                    <h4 class="popularTitle">Big Pizza</h4>
                    <h4 class="price">8$</h4>
                </div>
                <div class="popularsWeb" id="burgers" >
                    <img src="fav.png" alt="">
                    <img class="popularimg" src="bigBurger.png" alt="">
                    <h4 class="popularTitle">King Burger</h4>
                    <h4 class="price">5$</h4>
                </div>
                <div class="popularsWeb" id="pizza">
                    <img src="fav.png" alt="">
                    <img class="popularimg" src="bigPizza.png" alt="">
                    <h4 class="popularTitle">Big Pizza</h4>
                    <h4 class="price">8$</h4>
                </div>
                <div class="popularsWeb" id="burgers" >
                    <img src="fav.png" alt="">
                    <img class="popularimg" src="bigBurger.png" alt="">
                    <h4 class="popularTitle">King Burger</h4>
                    <h4 class="price">5$</h4>
                </div>
                <div class="popularsWeb" id="pizza">
                    <img src="fav.png" alt="">
                    <img class="popularimg" src="bigPizza.png" alt="">
                    <h4 class="popularTitle">Big Pizza</h4>
                    <h4 class="price">8$</h4>
                </div>
                <div class="popularsWeb" id="pizza">
                    <img src="fav.png" alt="">
                    <img class="popularimg" src="bigPizza.png" alt="">
                    <h4 class="popularTitle">Big Pizza</h4>
                    <h4 class="price">8$</h4>
                </div>
            
            </div>

        </div>
        <div class="recommendation">
            <h2 class="div-title">Recommendations</h2>
            <div class="recommendationDiv">
                <div class="recommendations" id="tropicalLemon" >
                    <img src="fav.png" alt="">
                    <img class="recommendationimg" src="lemonade.png" alt="">
                    <h4 class="recommendationTitle">Tropical Lemonades</h4>
                    <h4 class="price">3$</h4>
                </div>
                <div class="recommendations" id="tropicalMilk">
                    <img src="fav.png" alt="">
                    <img class="recommendationimg" src="milkshakes.png" alt="">
                    <h4 class="recommendationTitle">Tropical Milkshakes</h4>
                    <h4 class="price">4$</h4>
                </div>
                <div class="recommendationsWeb" id="tropical" >
                    <img src="fav.png" alt="">
                    <img class="recommendationimg" src="lemonade.png" alt="">
                    <h4 class="recommendationTitle">Tropical Lemonades</h4>
                    <h4 class="price">3$</h4>
                </div>
                <div class="recommendationsWeb" id="tropical">
                    <img src="fav.png" alt="">
                    <img class="recommendationimg" src="milkshakes.png" alt="">
                    <h4 class="recommendationTitle">Tropical Milkshakes</h4>
                    <h4 class="price">4$</h4>
                </div>
                <div class="recommendationsWeb" id="tropical" >
                    <img src="fav.png" alt="">
                    <img class="recommendationimg" src="lemonade.png" alt="">
                    <h4 class="recommendationTitle">Tropical Lemonades</h4>
                    <h4 class="price">3$</h4>
                </div>
                <div class="recommendationsWeb" id="tropical">
                    <img src="fav.png" alt="">
                    <img class="recommendationimg" src="milkshakes.png" alt="">
                    <h4 class="recommendationTitle">Tropical Milkshakes</h4>
                    <h4 class="price">4$</h4>
                </div>
            </div>

        </div>

        <div id="footer1">
            <h2 id="footerTitle">Your Favourites</h2>
            <h4 class="textFooter">Here you can add your favourite food or drink</h4>
            <h4 class="textFooter">We will rate them and add to our website</h4>
            <div id="form1">
                <form action="">
                <input class="formInput" type="text" placeholder="Your Favorite Drink" name="" id="drinkForm">
                <input class="formInput"  type="text" placeholder="Your Favorite Food" name="" id="foodForm">
            </form>
            <button id="submitButton" type="submit">Submit</button>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Bookstore</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../jquery-3.6.0.min.js">

</head>
<body>
    <div class="header">
        <nav class="navbar">
            <a class=" navbarElement navbarElementLogo" href="#">MEGA</a>
            <a class="navbarElement navbarElementRedirect" href="../Signin/Login-register.php">Book Store</a>   
          </nav>
    </div>
    <div class="section">
        <h2 style="margin-left: 10px ;">For you</h2>
        <div class="ligthslider">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <input type="radio" name="radio-btn" id="radio6">
                    <div class="slide first">
                        <div class="book-slide"> 
                            <div class="slide-img">
                                <img class="book_image" class="img" 
                                src="../../Img/125 Ways to Enhance Usability, Influence Perception, Increase Appeal, Make Better Design Decisions, and Teach through Design.jpg"
                                alt="125 Ways to Enhance Usability, Influence Perception, Increase Appeal, Make Better Design Decisions, and Teach through Design" /> 
                            </div>
                        <div class="book_detail">
                            <p class="book_detail_title">125 Ways to Enhance Usability</p>
                            <p class="book_detail_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores dicta iure, totam quo quam expedita? Suscipit repellat velit maxime temporibus eius quos aspernatur repellendus quae!</p>
                            <p class="book_detail_rating">&#9733&#9733&#9733&#9733</p>
                        </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="book-slide"> 
                            <div class="slide-img">
                            <img class="book_image" class="img" src="../../Img/Ego Is the Enemy.jpg" alt="" />
                            </div>
                        <div class="book_detail">
                            <p class="book_detail_title">Ego Is the Enemy</p>
                            <p class="book_detail_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores dicta iure, totam quo quam expedita? Suscipit repellat velit maxime temporibus eius quos aspernatur repellendus quae!</p>
                            <p class="book_detail_rating">&#9733&#9733&#9733&#9733</p>
                        </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="book-slide"> 
                            <div class="slide-img">
                                <img class="book_image" class="img" src="../../Img/Eloquent JavaScript A Modern Introduction to Programming.jpg" alt="" />
                            </div>
                        <div class="book_detail">
                            <p class="book_detail_title">Eloquent JavaScript</p>
                            <p class="book_detail_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores dicta iure, totam quo quam expedita? Suscipit repellat velit maxime temporibus eius quos aspernatur repellendus quae!</p>
                            <p class="book_detail_rating">&#9733&#9733&#9733&#9733</p>
                        </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="book-slide"> 
                            <div class="slide-img">
                                <img class="book_image" class="img" src="../../Img/Shoe Dog.jpg" alt="" />
                            </div>
                        <div class="book_detail">
                            <p class="book_detail_title">Shoe Dog</p>
                            <p class="book_detail_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores dicta iure, totam quo quam expedita? Suscipit repellat velit maxime temporibus eius quos aspernatur repellendus quae!</p>
                            <p class="book_detail_rating">&#9733&#9733&#9733&#9733</p>
                        </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="book-slide"> 
                            <div class="slide-img">
                                <img class="book_image" class="img"  src="../../Img/The Design of Everyday Things.jpg" alt="" />
                            </div>
                        <div class="book_detail">
                            <p class="book_detail_title">The Desing of Everyday Things</p>
                            <p class="book_detail_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores dicta iure, totam quo quam expedita? Suscipit repellat velit maxime temporibus eius quos aspernatur repellendus quae!</p>
                            <p class="book_detail_rating">&#9733&#9733&#9733&#9733</p>
                        </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="book-slide"> 
                            <div class="slide-img">
                                <img class="book_image" class="img" src="../../Img/Logo Design Love.jpg" alt="Logo Design Love" />
                            </div>
                        <div class="book_detail">
                            <p class="book_detail_title">Logo Design Love</p>
                            <p class="book_detail_desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores dicta iure, totam quo quam expedita? Suscipit repellat velit maxime temporibus eius quos aspernatur repellendus quae!</p>
                            <p class="book_detail_rating">&#9733&#9733&#9733&#9733</p>
                        </div>
                        </div>
                    </div>
            <!--slide images end-->
            </div>
        </div>
    <main class="items">
        <div class="books">
            <h2>Browse</h2>
           <div class="browse">
                <section class="container">
                        <form>
                            <div class="input">
                                <img style="width: 30px; height: 30px;" src="icons/search_100px.png" alt="">
                                <input type="name" name="" id="search-item" value="" placeholder="Search for books" >
                            </div>
                        </form>
                        <div class="book-list">
                            <div class="book">
                                <img  src="../../Img/The Javascript Way.jpg" alt="" />
                                <div class="book_info">
                                <h2 class="book_info_title">The Javascript Way</h2>
                                <div class="book_info_details">
                                    <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                    <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                            <div class="book">
                                <img  src="../../Img/JavaScript Allongé.jpg" alt="" />
                                <div class="book_info">
                                <h2 class="book_info_title">JavaScript Allongé</h2>
                                <div class="book_info_details">
                                    <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                    <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                            <div class="book">
                                <img  src="../../Img/Unfuk Yourself.jpg" alt="" />
                                <div class="book_info">
                                <h2 class="book_info_title">Unfuk Yourself</h2>
                                <div class="book_info_details">
                                    <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                    <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                            <div class="book">
                                <img  src="../../Img/the four hour work week.jpg" alt="" />
                                <div class="book_info">
                                <h2 class="book_info_title">The Four Hour Work Week</h2>
                                <div class="book_info_details">
                                    <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                    <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                            <div class="book">
                                <img  src="../../Img/Design Elements, Color Fundamentals.jpg" alt="" />
                                <div class="book_info">
                                <h2 class="book_info_title">Design Elements</h2h2>
                                <div class="book_info_details">
                                        <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                        <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                            <div class="book">
                                <img src="../../Img/Design Principles for Using Grids .jpg" alt="" />
                                <div class="book_info">
                                <h2 class="book_info_title">Design Principles for Using Grids</h2>
                                <div class="book_info_details">
                                    <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                    <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                            <div class="book">
                                <img 
                                src="../../Img/125 Ways to Enhance Usability, Influence Perception, Increase Appeal, Make Better Design Decisions, and Teach through Design.jpg"
                                alt="125 Ways to Enhance Usability, Influence Perception, Increase Appeal, Make Better Design Decisions, and Teach through Design" />
                                <div class="book_info">
                                    <h2 class="book_info_title">125 Ways to Enhance Usability</h2>
                                    <div class="book_info_details">
                                        <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                        <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                    </div>
                                    </div>
                            </div>
                            <div class="book">
                                <img  src="../../Img/Ego Is the Enemy.jpg" alt="" />
                                <div class="book_info">
                                <h2 class="book_info_title">Ego Is the Enemy</h2>
                                <div class="book_info_details">
                                    <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                    <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                            <div class="book">
                                <img  src="../../Img/Eloquent JavaScript A Modern Introduction to Programming.jpg" alt="" />
                                <div class="book_info">
                                <h2 class="book_info_title">Eloquent JavaScript</h2>
                                <div class="book_info_details">
                                    <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                    <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                            <div class="book">
                                <img  src="../../Img/Shoe Dog.jpg" alt="" />
                                <div class="book_info">
                                <h2 class="book_info_title">Shoe Dog</h2>
                                <div class="book_info_details">
                                    <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                    <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                            <div class="book">
                                <img  src="../../Img/The Design of Everyday Things.jpg" alt="" />
                                <div class="book_info">
                                <h2 class="book_info_title">The Desing of Everyday Things</h2>
                                <div class="book_info_details">
                                    <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                    <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                            <div class="book">
                                <img  src="../../Img/Logo Design Love.jpg" alt="Logo Design Love" />
                                <div class="book_info">
                                <h2 class="book_info_title">Logo Design Love</h2>
                                <div class="book_info_details">
                                    <h3 class="book_info_rating">&#9733&#9733&#9733&#9733</h3>
                                    <a class="book_info_goToStore" href="../Signin/Login-register.php">Go to store</a>
                                </div>
                                </div>
                            </div>
                        </div>
                </section>               
           </div>
        </div>
        <div class="authors">
            <h2>Authors</h2>
            <div class="author">
                <img class="author_image" src="icons/author_100px.png" alt="">
                <div class="author_info">
                    <p class="author_info_name">Lorem, ipsum dolor.</p>
                </div>
            </div>
            <div class="author">
                <img class="author_image" src="icons/author_100px.png" alt="">
                <div class="author_info">
                    <p class="author_info_name">Lorem, ipsum dolor.</p>
                </div>
            </div>
            <div class="author">
                <img class="author_image" src="icons/author_100px.png" alt="">
                <div class="author_info">
                    <p class="author_info_name">Lorem, ipsum dolor.</p>
                </div>
            </div>
            <div class="author">
                <img class="author_image" src="icons/author_100px.png" alt="">
                <div class="author_info">
                    <p class="author_info_name">Lorem, ipsum dolor.</p>
                </div>
            </div>
            <div class="author">
                <img class="author_image" src="icons/author_100px.png" alt="">
                <div class="author_info">
                    <p class="author_info_name">Lorem, ipsum dolor.</p>
                </div>
            </div>
            <div class="author">
                <img class="author_image" src="icons/author_100px.png" alt="">
                <div class="author_info">
                    <p class="author_info_name">Lorem, ipsum dolor.</p>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="app.js"></script>
</html>
<?php 
require('src/config.php');
require('src/dbconnect.php');


$pageTitle = 'Home';
if(!isset($_SESSION['user'])){
    require_once("layout/header.php");
}else{  
    require_once("layout/header-signedin.php");
}
	
?>

<!-- Products -->
<div class="boxes">
				<div class="card">
					<img src="images/chia.jpg" alt="Chia Seeds">
					<h1>Chia Seeds</h1>
					<div class="rating_stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p class="price">$19.99</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique officia ex dolore vero, quibusdam molestias.</p>
					<p><button>Add to Cart</button></p>
				</div>
				<div class="card">
					<img src="images/almond1.jpg" alt="almond">
					<h1>Almond</h1>
					<div class="rating_stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p class="price">$19.99</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique officia ex dolore vero, quibusdam molestias.</p>
					<p><button>Add to Cart</button></p>
				</div>
				<div class="card">
					<img src="images/oats.jpg" alt="oats">
					<h1>Oats</h1>
					<div class="rating_stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p class="price">$19.99</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique officia ex dolore vero, quibusdam molestias.</p>
					<p><button>Add to Cart</button></p>
				</div>
				<div class="card">
					<img src="images/peanut-butter.png" alt="peanut-butter">
					<h1>Chia Seeds</h1>
					<div class="rating_stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p class="price">$19.99</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique officia ex dolore vero, quibusdam molestias.</p>
					<p><button>Add to Cart</button></p>
				</div>
				<div class="card">
					<img src="images/dumbell.jpg" alt="Dumbbell">
					<h1>Chia Seeds</h1>
					<div class="rating_stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p class="price">$19.99</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique officia ex dolore vero, quibusdam molestias.</p>
					<p><button>Add to Cart</button></p>
				</div>
				<div class="card">
					<img src="images/dumbbell-bar.jpg" alt="Denim Jeans">
					<h1>Chia Seeds</h1>
					<div class="rating_stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p class="price">$19.99</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique officia ex dolore vero, quibusdam molestias.</p>
					<p><button>Add to Cart</button></p>
				</div>
				<div class="card">
					<img src="images/mat.jpg" alt="Mat">
					<h1>Mat</h1>
					<div class="rating_stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p class="price">$19.99</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique officia ex dolore vero, quibusdam molestias.</p>
					<p><button>Add to Cart</button></p>
				</div>
				<div class="card">
					<img src="images/blender.jpg" alt="blender">
					<h1>Blender</h1>
					<div class="rating_stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p class="price">$19.99</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique officia ex dolore vero, quibusdam molestias.</p>
					<p><button>Add to Cart</button></p>
				</div>
			</div>
		</div>
<!-- /products -->



<?php include ('layout/footer.php') ?>
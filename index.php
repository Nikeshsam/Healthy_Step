<?php 

include('header.php');

require_once 'DbConnect.php';  // Database connection

// Fetch categories
$sql = "SELECT category_id, category_name FROM category_list";
$result = $conn->query($sql);

// Initialize categories array
$categories = [];
if ($result->num_rows > 0) {
    // Store each row in the categories array
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
}


?>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="carousel-content">
                            <i>Eat Clean and Green</i>
                            <h1>Shop for our easy to <br/>cook Millet Products</h1>
                            <p>Mixed Millet Khichidi, Millet Sattu, Millet pasts</p>
                            <button class="btn-primary" type="button">
                                <span>shop now</span> 
                                <i><img src="assets/images/btn-cart.svg" alt=""></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="banner-product-carousel">
                            <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">test2</div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4"></div>
                </div>
            </div>
        </div>
        <div class="carousel-item" >
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">test3</div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4"></div>
                </div>
            </div>
        </div> -->
    </div>
</div>

<section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xl-3 col-xxl-3">
                <div class="terms">
                    <img src="assets/images/term-handmade.svg" alt="">
                    <div class="terms-content">
                        <h4>Handmade</h4>
                        <p>Eat local, consume local, closer to nature.</p>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xl-3 col-xxl-3">
                <div class="terms">
                    <img src="assets/images/term-natural.svg" alt="">
                    <div class="terms-content">
                        <h4>100% natural </h4>
                        <p>Eat local, consume local, closer to nature.</p>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xl-3 col-xxl-3">
                <div class="terms">
                    <img src="assets/images/term-shipping.svg" alt="">
                    <div class="terms-content">
                        <h4>Free Shipping</h4>
                        <p>Eat local, consume local, closer to nature.</p>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xl-3 col-xxl-3">
                <div class="terms">
                    <img src="assets/images/term-24-support.svg" alt="">
                    <div class="terms-content">
                        <h4>24/7 Support</h4>
                        <p>Eat local, consume local, closer to nature.</p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="main-title">
        <i>Trending Now</i>
        <h3>Best Selling Product</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 primary-tabs pt-4">
            <ul class="nav nav-pills mb-4 pb-2" id="pills-tab" role="tablist">
                <?php if (!empty($categories)): ?>
                    <?php foreach ($categories as $index => $category): ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?= $index === 0 ? 'active' : '' ?>"
                                    data-category-id="<?= $category['category_id'] ?>" 
                                    type="button">
                                <?= htmlspecialchars($category['category_name']) ?>
                            </button>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li class="nav-item" role="presentation">
                        <span>No categories available.</span>
                    </li>
                <?php endif; ?>
            </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-daily" role="tabpanel" aria-labelledby="pills-daily-tab">
                        <div class="product-slide" id="product-list" style="display:flex";>
                        
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5">
                            <button class="btn-secondary" type="button">
                                <span>view all</span>
                                <i class="d-flex"><img src="assets/images/arrow-dropdown-right.svg" alt=""></i>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-millet" role="tabpanel" aria-labelledby="pills-millet-tab">
                        <div class="product-slide">
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5">
                            <button class="btn-secondary" type="button">
                                <span>view all</span>
                                <i class="d-flex"><img src="assets/images/arrow-dropdown-right.svg" alt=""></i>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-grocery" role="tabpanel" aria-labelledby="pills-grocery-tab">
                        <div class="product-slide">
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5">
                            <button class="btn-secondary" type="button">
                                <span>view all</span>
                                <i class="d-flex"><img src="assets/images/arrow-dropdown-right.svg" alt=""></i>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-dry" role="tabpanel" aria-labelledby="pills-dry-tab">
                        <div class="product-slide">
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5">
                            <button class="btn-secondary" type="button">
                                <span>view all</span>
                                <i class="d-flex"><img src="assets/images/arrow-dropdown-right.svg" alt=""></i>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                        <div class="product-slide">
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5">
                            <button class="btn-secondary" type="button">
                                <span>view all</span>
                                <i class="d-flex"><img src="assets/images/arrow-dropdown-right.svg" alt=""></i>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-traditional" role="tabpanel" aria-labelledby="pills-traditional-tab">
                        <div class="product-slide">
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5">
                            <button class="btn-secondary" type="button">
                                <span>view all</span>
                                <i class="d-flex"><img src="assets/images/arrow-dropdown-right.svg" alt=""></i>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-pooja" role="tabpanel" aria-labelledby="pills-pooja-tab">
                        <div class="product-slide">
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="products">
                                    <div class="pro-img">
                                        <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                    </div>
                                    <div class="pro-brand-star">
                                        <span>Millet Noodels</span>
                                        <div class="rating"> 
                                            <input type="radio" name="rating" value="5" id="5">
                                            <label for="5">☆</label> 
                                            <input type="radio" name="rating" value="4" id="4">
                                            <label for="4">☆</label> 
                                            <input type="radio" name="rating" value="3" id="3">
                                            <label for="3">☆</label> 
                                            <input type="radio" name="rating" value="2" id="2">
                                            <label for="2">☆</label> 
                                            <input type="radio" name="rating" value="1" id="1">
                                            <label for="1">☆</label> 
                                        </div>
                                    </div>
                                    <div class="pro-name"><a href="#">Healthy Steps - Kollu Noodles</a></div>
                                    <div class="pro-price-weight">
                                        <div class="pro-price">
                                            <div class="pro-off-price">₹ 350.00</div>
                                            <div class="pro-mrp-price">₹ 410.00</div>
                                        </div>
                                        <div class="pro-weight">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>500gm</option>
                                                <option value="1">200gm</option>
                                                <option value="2">750gm</option>
                                                <option value="3">1kg</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center mt-5">
                            <button class="btn-secondary" type="button">
                                <span>view all</span>
                                <i class="d-flex"><img src="assets/images/arrow-dropdown-right.svg" alt=""></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #FED506; margin-bottom: 30px; margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="deal-content">
                    <i>Deal of this week!</i>
                    <h1>Healthy Steps - Kollu Noodles Home Made Product</h1>
                    <p>A fruit is a mature, ripened ovary, along with the contents of the ovary. The ovary is the ovule-bearing reproductive structure in the plant flower.</p>
                    <button class="btn-primary" type="button">
                        <span>shop now</span> 
                        <i><img src="assets/images/btn-cart.svg" alt=""></i>
                    </button>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="product-deal">
                    <div>
                        <div class="products products-deals">
                            <div class="pro-img">
                                <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                            </div>
                            <div class="pro-brand-star">
                                <span>Millet Noodels</span>
                                <div class="rating"> 
                                    <input type="radio" name="rating" value="5" id="5">
                                    <label for="5">☆</label> 
                                    <input type="radio" name="rating" value="4" id="4">
                                    <label for="4">☆</label> 
                                    <input type="radio" name="rating" value="3" id="3">
                                    <label for="3">☆</label> 
                                    <input type="radio" name="rating" value="2" id="2">
                                    <label for="2">☆</label> 
                                    <input type="radio" name="rating" value="1" id="1">
                                    <label for="1">☆</label> 
                                </div>
                            </div>
                            <div class="pro-name"><a href="">Healthy Steps - Kollu Noodles</a></div>
                            <div class="pro-price-weight">
                                <div class="pro-price">
                                    <div class="pro-off-price">₹ 350.00</div>
                                    <div class="pro-mrp-price">₹ 410.00</div>
                                </div>
                                <div class="pro-weight">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>500gm</option>
                                        <option value="1">200gm</option>
                                        <option value="2">750gm</option>
                                        <option value="3">1kg</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="products products-deals">
                            <div class="pro-img">
                                <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                            </div>
                            <div class="pro-brand-star">
                                <span>Millet Noodels</span>
                                <div class="rating"> 
                                    <input type="radio" name="rating" value="5" id="5">
                                    <label for="5">☆</label> 
                                    <input type="radio" name="rating" value="4" id="4">
                                    <label for="4">☆</label> 
                                    <input type="radio" name="rating" value="3" id="3">
                                    <label for="3">☆</label> 
                                    <input type="radio" name="rating" value="2" id="2">
                                    <label for="2">☆</label> 
                                    <input type="radio" name="rating" value="1" id="1">
                                    <label for="1">☆</label> 
                                </div>
                            </div>
                            <div class="pro-name"><a href="">Healthy Steps - Kollu Noodles</a></div>
                            <div class="pro-price-weight">
                                <div class="pro-price">
                                    <div class="pro-off-price">₹ 350.00</div>
                                    <div class="pro-mrp-price">₹ 410.00</div>
                                </div>
                                <div class="pro-weight">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>500gm</option>
                                        <option value="1">200gm</option>
                                        <option value="2">750gm</option>
                                        <option value="3">1kg</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xl-6 col-xxl-6 d-flex justify-content-center">
                <img class="product-img" src="assets/images/Product-Image/pro-deal.svg" alt="">
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="align-items-start main-title">
                    <i>Why us?</i>
                    <h3>Highest Quality</h3>
                </div>
                <div class="accordion primary-accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Only fresh products
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Many years on the Market
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Huge choice of Millets
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Thousands of satisfied clients
                            </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="colxxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="cless-1">
                    <div class="beffect">
                        <a href="">
                            <img class="product-img" src="assets/images/Product-Image/ads.svg" alt="">
                        </a>
                    </div>
                    <div class="imgtext">
                        <div class="imgff">
                            <h2>Fresh <b>organic</b><br/><b>Home</b> Made<br/> Milk</h2>
                            <button class="btn-primary" type="button">
                                <span>shop now</span> 
                                <i><img src="assets/images/btn-cart.svg" alt=""></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colxxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="cless-2">
                    <div class="beffect">
                        <a href="">
                            <img src="assets/images/Product-Image/ads2.svg" alt="">
                        </a>
                    </div>
                    <div class="imgtext">
                        <div class="imgff">
                            <h2>Natural <b>organic</b><br/> <b>Noodles</b> Home <br/>Made Product</h2>
                            <button class="btn-primary" type="button">
                                <span>shop now</span> 
                                <i><img src="assets/images/btn-cart.svg" alt=""></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #FAFFEA; margin-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="main-title pt-2">
                <i>Testimonials</i>
                <h3>We provide value of our clients</h3>
            </div>
            <div class="testimonials-slide">
                <div>
                    <div class="testimonials">
                        <div class="testi-name-img">
                            <div class="testi-name">Stella Larson</div>
                            <div class="testi-img">
                                <img class="product-img" src="assets/images/test-img.jpg" alt="">
                            </div>
                        </div>
                        <div class="testi-content">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries but also the leap into electronic typesetting</p>
                        </div>
                        <div class="testi-date">
                            <p>monday, august 2024</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials">
                        <div class="testi-name-img">
                            <div class="testi-name">Stella Larson</div>
                            <div class="testi-img">
                                <img class="product-img" src="assets/images/test-img.jpg" alt="">
                            </div>
                        </div>
                        <div class="testi-content">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries but also the leap into electronic typesetting</p>
                        </div>
                        <div class="testi-date">
                            <p>monday, august 2024</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials">
                        <div class="testi-name-img">
                            <div class="testi-name">Stella Larson</div>
                            <div class="testi-img">
                                <img class="product-img" src="assets/images/test-img.jpg" alt="">
                            </div>
                        </div>
                        <div class="testi-content">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries but also the leap into electronic typesetting</p>
                        </div>
                        <div class="testi-date">
                            <p>monday, august 2024</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials">
                        <div class="testi-name-img">
                            <div class="testi-name">Stella Larson</div>
                            <div class="testi-img">
                                <img class="product-img" src="assets/images/test-img.jpg" alt="">
                            </div>
                        </div>
                        <div class="testi-content">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries but also the leap into electronic typesetting</p>
                        </div>
                        <div class="testi-date">
                            <p>monday, august 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>


<script>
    $(document).ready(function() {
    // Load initial products for the first category
    loadProducts(<?= $categories[0]['category_id'] ?>);

    // Event handler for category selection
    $('.nav-link').click(function() {
        // Remove active class from all nav items and add to the selected one
        $('.nav-link').removeClass('active');
        $(this).addClass('active');

        // Fetch category ID and load respective products
        var categoryId = $(this).data('category-id');
        loadProducts(categoryId);
    });

    // Function to load products by category ID
    function loadProducts(categoryId) {
        $.ajax({
            url: 'fetch_products.php',
            type: 'POST',
            data: { category_id: categoryId },
            success: function(response) {
                var products_data = JSON.parse(response);
                var productList = $('#product-list');
                productList.empty(); // Clear existing products

                // Loop through products and append HTML dynamically
                products_data.forEach(function(product) {
                    var productHtml = `
                  
                        <div class="products">
                            <div class="pro-img">
                                <img class="product-img" src="${product.image_url}" alt="${product.product_name}">
                                <div class="pro-action_links">
                                    <ul>
                                        <li class="wishlist">
                                            <a href="javascript: void(0)" data-product-id="${product.id}" data-original-title="+ Add to wishlist">
                                                <img src="assets/images/pro-wish.svg" alt="Add to wishlist">
                                            </a>
                                        </li>
                                        <li class="add_to_cart">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-product-cart" data-original-title="Add to cart">
                                                <img src="assets/images/pro-cart.svg" alt="Add to cart">
                                            </a>
                                        </li>
                                        <li class="quick_button">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#quick-view" data-original-title="Quick View">
                                                <img src="assets/images/pro-view.svg" alt="Quick View">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-brand-star">
                                <span>${product.product_name}</span>
                                <div class="rating"> 
                                    <input type="radio" name="rating_${product.id}" value="5" id="rating_${product.id}_5">
                                    <label for="rating_${product.id}_5">☆</label> 
                                    <input type="radio" name="rating_${product.id}" value="4" id="rating_${product.id}_4">
                                    <label for="rating_${product.id}_4">☆</label> 
                                    <input type="radio" name="rating_${product.id}" value="3" id="rating_${product.id}_3">
                                    <label for="rating_${product.id}_3">☆</label> 
                                    <input type="radio" name="rating_${product.id}" value="2" id="rating_${product.id}_2">
                                    <label for="rating_${product.id}_2">☆</label> 
                                    <input type="radio" name="rating_${product.id}" value="1" id="rating_${product.id}_1">
                                    <label for="rating_${product.id}_1">☆</label> 
                                </div>
                            </div>
                            <div class="pro-name"><a href="#">${product.product_name}</a></div>
                            <div class="pro-price-weight">
                                <div class="pro-price">
                                    <div class="pro-off-price">₹ ${parseFloat(product.price).toFixed(2)}</div>
                                    <div class="pro-mrp-price">₹ ${(parseFloat(product.price) + 50).toFixed(2)}</div>
                                </div>
                                <div class="pro-weight">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>${product.weight}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        `;
                    productList.append(productHtml);
                });
            }
        });
    }
});

// Wishlist button click handler
document.addEventListener('click', function (e) {console.log("wish");
    if (e.target.closest('.add-to-wishlist')) {
        e.preventDefault();
        const productId = e.target.closest('.add-to-wishlist').dataset.productId;
console.log(productId);
        fetch('add_to_wishlist.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `product_id=${productId}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert('Product added to wishlist');
            } else {
                alert(data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    }
});

</script>

<?php include('footer.php');?>
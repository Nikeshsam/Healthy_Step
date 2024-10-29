<?php include('header.php');?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="breadcrumb">
                    <a href="#" title="Home">Home</a>
                    <span aria-hidden="true">
                        <svg viewBox="0 0 512 512" class="arrowrightw"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "></polygon></svg>
                    </span>
                    <span>All Product</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-xxl-3">
                <div class="filter-container">
                    <form action="">
                        <div class="filter__wrapper">
                            <div class="filter__disclosure">
                                <summary class="filter__summary">
                                    <div>
                                        <span>Availability</span>
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z">
                                            </path>
                                        </svg>
                                    </div>
                                </summary>
                                <div class="filter__display">
                                    <div class="filter__header">
                                        <span class="filter__selected no-js-hidden">0 selected</span>
                                        <a href="#" class="filter__reset">
                                            Reset
                                        </a>
                                    </div>
                                    <ul class="filter__list">
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="instock">
                                                <label class="form-check-label" for="instock">
                                                    In stock <span>(10)</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="outstock">
                                                <label class="form-check-label" for="outstock">
                                                    Out of stock <span>(3)</span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter__disclosure">
                                <summary class="filter__summary">
                                    <div>
                                        <span>Availability</span>
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z">
                                            </path>
                                        </svg>
                                    </div>
                                </summary>
                                <div class="filter__display">
                                    <div class="filter__header">
                                        <span class="filter__selected no-js-hidden">0 selected</span>
                                        <a href="#" class="filter__reset">
                                            Reset
                                        </a>
                                    </div>
                                    <ul class="filter__list">
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="all-categories">
                                                <label class="form-check-label" for="all-categories">
                                                    All Categories
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="daily-product">
                                                <label class="form-check-label" for="daily-product">
                                                    Daily Products
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="grocery">
                                                <label class="form-check-label" for="grocery">
                                                    Grocery
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="dry-fruits">
                                                <label class="form-check-label" for="dry-fruits">
                                                    Dry Fruits
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="millets">
                                                <label class="form-check-label" for="millets">
                                                    Millet Noodles & Pasta & Vermicelli
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="personal-care">
                                                <label class="form-check-label" for="personal-care">
                                                    Personal Care
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="pooja-items">
                                                <label class="form-check-label" for="pooja-items">
                                                    Pooja Items
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="traditional-snack-sweet">
                                                <label class="form-check-label" for="traditional-snack-sweet">
                                                    Traditional Snacks & Sweet
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter__disclosure">
                                <summary class="filter__summary">
                                    <div>
                                        <span>Product Rating count</span>
                                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z">
                                            </path>
                                        </svg>
                                    </div>
                                </summary>
                                <div class="filter__display">
                                    <div class="filter__header">
                                        <span class="filter__selected no-js-hidden">0 selected</span>
                                        <a href="#" class="filter__reset">
                                            Reset
                                        </a>
                                    </div>
                                    <ul class="filter__list">
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="rate1">
                                                <label class="form-check-label" for="rate1">
                                                    1 <span>(10)</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="rate2">
                                                <label class="form-check-label" for="rate2">
                                                    2 <span>(3)</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="rate3">
                                                <label class="form-check-label" for="rate3">
                                                    3 <span>(5)</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="rate4">
                                                <label class="form-check-label" for="rate4">
                                                    4 <span>(2)</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="filter__list">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="rate5">
                                                <label class="form-check-label" for="rate5">
                                                    5 <span>(3)</span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xxl-9">
                <div class="row g-4">
                    <div class="col-xxl-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="view">
                                <label for="">view as</label>
                                <a href="">
                                    <img src="assets/images/grid.svg" alt="">
                                </a>
                                <a href="">
                                    <img src="assets/images/column.svg" alt="">
                                </a>
                            </div>
                            <div class="page-filter">
                                <div class="mb-1">
                                    <label for="">items per page</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>20</option>
                                        <option value="1">5</option>
                                        <option value="2">10</option>
                                        <option value="3">15</option>
                                        <option value="3">20</option>
                                        <option value="3">25</option>
                                    </select>
                                </div>
                                <div class="mb-1">
                                    <label for="">sort by</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Best selling</option>
                                        <option value="1">5</option>
                                        <option value="2">10</option>
                                        <option value="3">15</option>
                                        <option value="3">20</option>
                                        <option value="3">25</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <div class="products p-0">
                            <div class="pro-img">
                                <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                <div class="pro-action_links">
                                    <ul>
                                        <li class="wishlist">
                                            <a href="javascript: void(0)" data-original-title="+ Add to wishlist">
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
                    <div class="col-xxl-4">
                        <div class="products p-0">
                            <div class="pro-img">
                                <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                <div class="pro-action_links">
                                    <ul>
                                        <li class="wishlist">
                                            <a href="javascript: void(0)" data-original-title="+ Add to wishlist">
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
                    <div class="col-xxl-4">
                        <div class="products p-0">
                            <div class="pro-img">
                                <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                <div class="pro-action_links">
                                    <ul>
                                        <li class="wishlist">
                                            <a href="javascript: void(0)" data-original-title="+ Add to wishlist">
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
                    <div class="col-xxl-4">
                        <div class="products p-0">
                            <div class="pro-img">
                                <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                <div class="pro-action_links">
                                    <ul>
                                        <li class="wishlist">
                                            <a href="javascript: void(0)" data-original-title="+ Add to wishlist">
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
                    <div class="col-xxl-4">
                        <div class="products p-0">
                            <div class="pro-img">
                                <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                <div class="pro-action_links">
                                    <ul>
                                        <li class="wishlist">
                                            <a href="javascript: void(0)" data-original-title="+ Add to wishlist">
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
                    <div class="col-xxl-4">
                        <div class="products p-0">
                            <div class="pro-img">
                                <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                <div class="pro-action_links">
                                    <ul>
                                        <li class="wishlist">
                                            <a href="javascript: void(0)" data-original-title="+ Add to wishlist">
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
                    <div class="col-xxl-4">
                        <div class="products p-0">
                            <div class="pro-img">
                                <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                <div class="pro-action_links">
                                    <ul>
                                        <li class="wishlist">
                                            <a href="javascript: void(0)" data-original-title="+ Add to wishlist">
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
                    <div class="col-xxl-4">
                        <div class="products p-0">
                            <div class="pro-img">
                                <img class="product-img" src="assets/images/Product-Image/pro-banner.svg" alt="">
                                <div class="pro-action_links">
                                    <ul>
                                        <li class="wishlist">
                                            <a href="javascript: void(0)" data-original-title="+ Add to wishlist">
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

<?php include('footer.php');?>
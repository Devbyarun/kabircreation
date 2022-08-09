<?php require_once("header.php"); ?>


<main>
    <div class="breadcrumb cart-breadcrumb">
      <h1 class="text-white heading-1">Cart</h1>
    </div>
    <!-- wishlist section starts -->
    <div class="container-fluid  padding-bw">
      <div class="container">
        <div class="row">
          <div class="col-12">
          <table class="table table-bordered border-primary text-center">
                            <h2 class="heading-product text-dark pb-3">My wishliston kabir Creation</h2>
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col" class="heading3">PRODUCT NAME</th>
                                <th scope="col" class="heading3">UNIT PRICE</th>
                                <th scope="col" class="heading3">STOCK STATUS</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row"><i class="fa fa-close"></i></th>
                                <td><img src="./assets/img/icons/ic_cart.svg" class="img-fluid" alt=""></td>
                                <td class="heading3">Colorful Laptop bagpack</td>
                                <td class="heading3">₹ 24,00.00</td>
                                <td class="text-success heading3">In Stock</td>
                                <!-- <td><i class="fas fa-shopping-cart"></i></td> -->
                                <td><img src="./assets/img/icons/ic_cart.svg" class="img-fluid" alt=""></td>
                              </tr>
                            </tbody>
                        </table>
            <div class="container">
              <div class="row p-3" style="border: 1px solid gray;">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7">
                    <input type="text" class="form-control m-0" style="padding:1.01rem ">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                    <button class="mybutton">Apply cupon</button>
                    </div>
                  </div>
                  <!-- <input type="text" class="form-control">
                  <button class="mybutton">Apply cupon</button> -->
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-end">
                  <!-- <input type="text"> -->
                  <button class="mybutton">Cupon code</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-end">
          <div>
            <h2 class="heading-time">CART TOTAL</h2>
            <div class="row p-2" style="border-bottom:1px solid gray ;">
              <div class="col-3">
                <h3 class="heading3">SUBTOTAL</h3>
              </div>
              <div class="col-9 price ">
               <p class="paragraph"> ₹499.00</p>
              </div>
            </div>
            <div class="row p-2" style="border-bottom:1px solid gray ;">
              <div class="col-3">
                <h3 class="heading3">SUBTOTAL</h3>
              </div>
              <div class="col-9 price">
                <p class="paragraph">Flat rate ₹ 499.00</p>
                <p class="paragraph">Shipping options will be updated during checkout.</p>
                <a href="" class="paragraph"><strong>Calculate shipping</strong> <i class="fas fa-shipping-fast"></i></a>
              </div>
            </div>
            <div class="row p-2">
              <div class="col-3">
                <h3 class="heading3">SUBTOTAL</h3>
              </div>
              <div class="col-9 price">
                <p class="paragraph">₹499.00</p>
              </div>
            </div>
            <div class="row p-2">
              <div class="col-12 text-center pt-3">
                <button class="mybutton">Cupon code</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- wishlist section ends -->
  </main>


<?php require_once("footer.php"); ?>
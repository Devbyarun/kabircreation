<?php require_once("header.php"); ?>


<main>
    <div class="breadcrumb checkout-breadcrumb">
      <h1 class="text-white">Checkout</h1>
    </div>

    <!-- from section starts -->
    <div class="container-fluid padding-bw">
      <div class="container">
        <div class="row">
          <div class="coupon-div mb-5">
            <div class="coupon ">
            <p class="text-dark paragraph"><a href=""><span class="heading3 text-info">Have a coupon?</span> &nbsp;</a>Click here to enter your code</p>

            </div>
           
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class=" order-md-1">
            <h2 class="heading2">Billing address</h2>
              <form class="needs-validation" novalidate="">
                <div class="row">
                  <div class=" mb-3 heading3">
                    <label for="firstName">First name*</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                    <!-- <div class="invalid-feedback"> Valid first name is required. </div> -->
                  </div>
                  <div class="mb-3 heading3">
                    <label for="lastName">Last name*</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                    <!-- <div class="invalid-feedback"> Valid last name is required. </div> -->
                  </div>
                </div>
                <div class="mb-3 heading3">
                  <label for="username">Company name(optional)</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <!-- <span class="input-group-text">@</span> -->
                    </div>
                    <input type="text" class="form-control" id="username" placeholder="" required="">
                    <!-- <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div> -->
                  </div>
                </div>

                <div class="row">
                  <div class=" mb-3 heading3">
                    <label for="country">Country / Region*</label>
                    <select class="custom-select d-block w-100 form-control" id="country" required="">
                      <!-- <option value="">Choose...</option> -->
                      <option>United States</option>
                      <option>India</option>
                      <option>China</option>
                      <option>Japan</option>
                    </select>
                    <!-- <div class="invalid-feedback"> Please select a valid country. </div> -->
                  </div>
                  <div class="mb-3 heading3">
                    <label for="street">Street address*</label>
                    <input type="text" class="form-control" id="street" placeholder="" required="">
                    <!-- <div class="invalid-feedback"> Please enter your shipping address. </div> -->
                  </div>
                  <div class="mb-3 heading3">
                    <label for="zip">Postcode / ZIP (optional)*</label>
                    <input type="number" class="form-control" id="zip" placeholder="" required="">
                    <!-- <div class="invalid-feedback"> Please enter your shipping address. </div> -->
                  </div>
                  <div class="mb-3 heading3">
                    <label for="address">Town / City*</label>
                    <input type="text" class="form-control" id="address" placeholder="" required="">
                    <!-- <div class="invalid-feedback"> Please enter your shipping address. </div> -->
                  </div>
                  <div class="mb-3 heading3">
                    <label for="phone">Phone*</label>
                    <input type="number" class="form-control" id="phone" placeholder="" required="">
                    <!-- <div class="invalid-feedback"> Please enter your shipping address. </div> -->
                  </div>
                  <div class="mb-3 heading3">
                    <label for="email">Email address*</label>
                    <input type="email" class="form-control" id="email" placeholder="" required="">
                    <!-- <div class="invalid-feedback"> Please enter your shipping address. </div> -->
                  </div>

                </div>

                <!-- </form> -->
            </div>
          </div>

          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2 class="heading2">Billing address</h2>
            <div class="mb-3 heading3">
              <label for="email">Order notes(optional)*</label>
              <!-- <input type="email" row="3" class="form-control" id="email" placeholder="" required=""> -->
              <textarea name="" id="" cols="71" rows="4" class="form-control"></textarea>
              <!-- <div class="invalid-feedback"> Please enter your shipping address. </div> -->
            </div>


          </div>
        </div>
        <!-- <button class="btn btn-primary btn-lg btn-block text-center" type="submit">Continue to checkout</button> -->
        </form>
      </div>
    </div>
    </div>
    </div>
    </div>
    <!-- form section ends -->
    <div class="container-fluid padding-bw">
      <div class="container p-0">
        <div class="row">
          <div class="col-12">
            <h2 class="heading2">Your order</h2>
            <table class="table table-bordered">
              <thead class="bg-light">
                <tr>
                  <th>Product</th>
                  <th>Product</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="heading3">Women black solid t shirt x 1</td>
                  <td class="heading3">₹ 499.00</td>

                </tr>
                <tr>
                  <td class="heading3">Subtotal</td>
                  <td class="heading3">₹ 499.00</td>

                </tr>
                <tr>
                  <td class="heading3">Shipping</td>
                  <td class="heading3">Flat rate: ₹ 40.00</td>

                </tr>
                <tr>
                  <td class="heading3">Total</td>
                  <td class="heading3">₹ 439.00</td>

                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid padding-bw">
      <div class="container">
        <div class="row p-4 border" >
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1"><p class="paragraph">Cash payment</p>
            <label class="form-check-label" for="radio1"></label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"><p class="paragraph">Check payment</p>
            <label class="form-check-label" for="radio2"></label>
          </div>
        </div>
        <div class="row p-4 border"style="height:auto;" >
          <p class="text-dark paragraph">Your personal data will be used to process your orer, support your experience thoughout thiswebsite, and
            for other purposes described in our privacy policty</p>
          <div>
            <a href="" class=" mybutton">Place order</a>
          </div>
        </div>
      </div>
    </div>
  </main>


<?php require_once("footer.php"); ?>
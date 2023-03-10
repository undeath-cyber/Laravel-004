@extends('layouts.app')
@section('title', 'Cart List')
    
@section('content')
        <!-- Page Content -->
        <div class="page-content page-cart">
            <!-- Section Breadcrumb -->
            <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <nav aria-label="">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a href="/index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                          Cart
                        </li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </section>
      
            
            
      
      
      
          </div>
      
          <!-- Store Cart -->
          <section class="store-cart">
            <div class="container">
              <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12 table-responsive">
                  <table class="table table-borderless table-cart">
                    <th>
                      <tr>
                        <td>Image</td>
                        <td>Name &amp; Seller</td>
                        <td>Price</td>
                        <td>Menu  </td>
                      </tr>
                    </th>
                    <tbody>
                      <tr>
                        <td style="width:20%;">
                          <img src="images/product-cart-1.jpg" alt="product" class="cart-image w-100"></td>
                        <td style="width:35%;">
                          <div class="product-title">Sofa Ternyaman</div>
                          <div class="product-subtitle">by Dede Rohendi</div>
                        </td>
                        <td style="width:35%;">
                          <div class="product-title">$29,112</div>
                          <div class="product-subtitle">USD</div>
                        </td>
                        <td style="width:20%;">
                          <a href="#" class="btn btn-remove-cart">Remove</a>
                        </td>
                      </tr>
                      <tr>
                        <td style="width:15%;">
                          <img src="images/product-cart-2.jpg" alt="product" class="cart-image w-100"></td>
                        <td style="width:35%;">
                          <div class="product-title">Seneakers</div>
                          <div class="product-subtitle">by Ilham Sahidan</div>
                        </td>
                        <td style="width:35%;">
                          <div class="product-title">$80,309</div>
                          <div class="product-subtitle">USD</div>
                        </td>
                        <td style="width:20%;">
                          <a href="#" class="btn btn-remove-cart">Remove</a>
                        </td>
                      </tr>
                      <tr>
                        <td style="width:15%;">
                          <img src="images/product-cart-3.jpg" alt="product" class="cart-image w-100"></td>
                        <td style="width:35%;">
                          <div class="product-title">Coffe Holder</div>
                          <div class="product-subtitle">by Yang Yang</div>
                        </td>
                        <td style="width:35%;">
                          <div class="product-title">$13,492</div>
                          <div class="product-subtitle">USD</div>
                        </td>
                        <td style="width:20%;">
                          <a href="#" class="btn btn-remove-cart">Remove</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12">
                  <hr> 
                </div>
                <div class="col-12">
                  <h2 class="mb-4">Shopping Details</h2>
                </div>
              </div>
              <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
      
                <!-- line one -->
                <div class="col-md-6">
                  <div class="form-group"> 
                    <label for="addressOne">adrress 1</label>
                    <input type="text" class="form-control" id="addressOne" name="addressOne" value="Sutra Duta Cemara">
                  </div>
                </div>
      
                <div class="col-md-6">
                  <div class="form-group"> 
                    <label for="addressTwo">adrress 2</label>
                    <input type="text" class="form-control" id="addressTwo" name="addressTwo" value="Blok B2 NO. 34">
                  </div>
                </div>
      
                <!-- Line Two -->
               
      
                <div class="col-md-4">
                  <div class="form-group"> 
                    <label for="province">Province</label>
                    <select name="province" id="province" class="form-control">
                      <option value="#">West Java</option>
                      <option value="#">West Borneo</option>
                      <option value="#">South Sumatra</option>
                    </select>
                  </div>
                </div>
      
                <div class="col-md-4">
                  <div class="form-group"> 
                    <label for="city">City</label>
                    <select name="city" id="province" class="form-control">
                      <option value="#">Bandung</option>
                      <option value="#">Jakarta</option>
                      <option value="#">Surabaya</option>
                    </select>
                  </div>
                </div>
      
                <div class="col-md-4">
                  <div class="form-group"> 
                    <label for="postalCode">Postal Code</label>
                    <input type="text" class="form-control" id="postalCode" name="postslCode" value="40391">
                  </div>
                </div>
      
                <!-- Line Three -->
                <div class="col-md-6">
                  <div class="form-group"> 
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" value="Indonesia">
                  </div>
                </div>
      
                <div class="col-md-6">
                  <div class="form-group"> 
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="+628 2020 11111">
                  </div>
                </div>
      
              </div>
              <div class="row" data-aos="fade-up" data-aos-delay="250">
                <div class="col-12">
                  <hr> 
                </div>
                <div class="col-12">
                  <h2 class="mb-1">Payment Information</h2>
                </div>
              </div>
              <div class="row" data-aos="fade-up" data-aos-delay="300">
                <div class="col-4 col-md-2">
                  <div class="product-title">$10</div>
                  <div class="product-subtitle">Country Tax</div>
                </div>
                <div class="col-4 col-md-3">
                  <div class="product-title">$280</div>
                  <div class="product-subtitle">Product Insurance</div>
                </div> 
                <div class="col-4 col-md-2">
                  <div class="product-title">$580</div>
                  <div class="product-subtitle">Ship to Bandung</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="product-title text-success">$392,409</div>
                  <div class="product-subtitle">Total</div>
                </div>
                <div class="col-8 col-md-3">
                  <a href="#" class="btn btn-success mt-4 px-4 btn-block">
                    Checkout Now
                  </a>
                </div>
              </div>
            </div>
          </section>
@endsection
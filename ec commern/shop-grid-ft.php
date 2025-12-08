<?php
require_once('file/header1.php')
?>
      <!-- Page Title-->
      <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Grid left sidebar</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Shop grid left sidebar</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <!-- Sidebar-->
          <aside class="col-lg-4">
            <!-- Sidebar-->
            <div class="offcanvas offcanvas-collapse bg-white w-100 rounded-3 shadow-lg py-1" id="shop-sidebar" style="max-width: 22rem;">
              <div class="offcanvas-header align-items-center shadow-sm">
                <h2 class="h5 mb-0">Filters</h2>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                <!-- Categories-->
                <div class="widget widget-categories mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Categories</h3>
                  <div class="accordion mt-n1" id="shop-categories">
                    <!-- Shoes-->
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shoes" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shoes">Shoes</a></h3>
                      <div class="accordion-collapse collapse" id="shoes" data-bs-parent="#shop-categories">
                        <div class="accordion-body">
                          <div class="widget widget-links widget-filter">
                            <div class="input-group input-group-sm mb-2">
                              <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                            </div>
                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">View all</span><span class="fs-xs text-muted ms-3">1,953</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Pumps &amp; High Heels</span><span class="fs-xs text-muted ms-3">247</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Ballerinas &amp; Flats</span><span class="fs-xs text-muted ms-3">156</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="nexsole_page.php"><span class="widget-filter-item-text">NEXSOLE</span><span class="fs-xs text-muted ms-3">310</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Sneakers</span><span class="fs-xs text-muted ms-3">402</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Boots</span><span class="fs-xs text-muted ms-3">393</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Ankle Boots</span><span class="fs-xs text-muted ms-3">50</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Loafers</span><span class="fs-xs text-muted ms-3">93</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Slip-on</span><span class="fs-xs text-muted ms-3">122</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Flip Flops</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Clogs &amp; Mules</span><span class="fs-xs text-muted ms-3">24</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Athletic Shoes</span><span class="fs-xs text-muted ms-3">31</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Oxfords</span><span class="fs-xs text-muted ms-3">9</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Smart Shoes</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Clothing-->
              
                    <!-- Bags-->

                    <!-- Sunglasses-->

                    <!-- Watches-->

                    <!-- Accessories-->

                <!-- Price range-->
                <div class="widget mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Price</h3>
                  <div class="range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                    <div class="range-slider-ui"></div>
                    <div class="d-flex pb-1">
                      <div class="w-50 pe-2 me-2">
                        <div class="input-group input-group-sm"><span class="input-group-text">$</span>
                          <input class="form-control range-slider-value-min" type="text">
                        </div>
                      </div>
                      <div class="w-50 ps-2">
                        <div class="input-group input-group-sm"><span class="input-group-text">$</span>
                          <input class="form-control range-slider-value-max" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Filter by Brand-->
                <div class="widget widget-filter mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Brand</h3>
                  <div class="input-group input-group-sm mb-2">
                    <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                  </div>
                  <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar data-simplebar-auto-hide="false">
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="adidas">
                        <label class="form-check-label widget-filter-item-text" for="adidas">Adidas</label>
                      </div><span class="fs-xs text-muted">425</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ataylor">
                        <label class="form-check-label widget-filter-item-text" for="ataylor">Ann Taylor</label>
                      </div><span class="fs-xs text-muted">15</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="armani">
                        <label class="form-check-label widget-filter-item-text" for="armani">Armani</label>
                      </div><span class="fs-xs text-muted">18</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="banana">
                        <label class="form-check-label widget-filter-item-text" for="banana">Banana Republic</label>
                      </div><span class="fs-xs text-muted">103</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bilabong">
                        <label class="form-check-label widget-filter-item-text" for="bilabong">Bilabong</label>
                      </div><span class="fs-xs text-muted">27</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="birkenstock">
                        <label class="form-check-label widget-filter-item-text" for="birkenstock">Birkenstock</label>
                      </div><span class="fs-xs text-muted">10</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="klein">
                        <label class="form-check-label widget-filter-item-text" for="klein">Calvin Klein</label>
                      </div><span class="fs-xs text-muted">365</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="columbia">
                        <label class="form-check-label widget-filter-item-text" for="columbia">Columbia</label>
                      </div><span class="fs-xs text-muted">508</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="converse">
                        <label class="form-check-label widget-filter-item-text" for="converse">Converse</label>
                      </div><span class="fs-xs text-muted">176</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="dockers">
                        <label class="form-check-label widget-filter-item-text" for="dockers">Dockers</label>
                      </div><span class="fs-xs text-muted">54</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fruit">
                        <label class="form-check-label widget-filter-item-text" for="fruit">Fruit of the Loom</label>
                      </div><span class="fs-xs text-muted">739</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hanes">
                        <label class="form-check-label widget-filter-item-text" for="hanes">Hanes</label>
                      </div><span class="fs-xs text-muted">92</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="choo">
                        <label class="form-check-label widget-filter-item-text" for="choo">Jimmy Choo</label>
                      </div><span class="fs-xs text-muted">17</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="levis">
                        <label class="form-check-label widget-filter-item-text" for="levis">Levi's</label>
                      </div><span class="fs-xs text-muted">361</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lee">
                        <label class="form-check-label widget-filter-item-text" for="lee">Lee</label>
                      </div><span class="fs-xs text-muted">264</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="wearhouse">
                        <label class="form-check-label widget-filter-item-text" for="wearhouse">Men's Wearhouse</label>
                      </div><span class="fs-xs text-muted">75</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="newbalance">
                        <label class="form-check-label widget-filter-item-text" for="newbalance">New Balance</label>
                      </div><span class="fs-xs text-muted">218</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="nike">
                        <label class="form-check-label widget-filter-item-text" for="nike">Nike</label>
                      </div><span class="fs-xs text-muted">810</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="navy">
                        <label class="form-check-label widget-filter-item-text" for="navy">Old Navy</label>
                      </div><span class="fs-xs text-muted">147</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="polo">
                        <label class="form-check-label widget-filter-item-text" for="polo">Polo Ralph Lauren</label>
                      </div><span class="fs-xs text-muted">64</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="puma">
                        <label class="form-check-label widget-filter-item-text" for="puma">Puma</label>
                      </div><span class="fs-xs text-muted">370</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="reebok">
                        <label class="form-check-label widget-filter-item-text" for="reebok">Reebok</label>
                      </div><span class="fs-xs text-muted">506</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="skechers">
                        <label class="form-check-label widget-filter-item-text" for="skechers">Skechers</label>
                      </div><span class="fs-xs text-muted">209</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hilfiger">
                        <label class="form-check-label widget-filter-item-text" for="hilfiger">Tommy Hilfiger</label>
                      </div><span class="fs-xs text-muted">487</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="armour">
                        <label class="form-check-label widget-filter-item-text" for="armour">Under Armour</label>
                      </div><span class="fs-xs text-muted">90</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="urban">
                        <label class="form-check-label widget-filter-item-text" for="urban">Urban Outfitters</label>
                      </div><span class="fs-xs text-muted">152</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="vsecret">
                        <label class="form-check-label widget-filter-item-text" for="vsecret">Victoria's Secret</label>
                      </div><span class="fs-xs text-muted">238</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="wolverine">
                        <label class="form-check-label widget-filter-item-text" for="wolverine">Wolverine</label>
                      </div><span class="fs-xs text-muted">29</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="wrangler">
                        <label class="form-check-label widget-filter-item-text" for="wrangler">Wrangler</label>
                      </div><span class="fs-xs text-muted">115</span>
                    </li>
                  </ul>
                </div>
                <!-- Filter by Size-->
                <div class="widget widget-filter mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Size</h3>
                  <div class="input-group input-group-sm mb-2">
                    <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                  </div>
                  <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar data-simplebar-auto-hide="false">
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-xs">
                        <label class="form-check-label widget-filter-item-text" for="size-xs">XS</label>
                      </div><span class="fs-xs text-muted">34</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-s">
                        <label class="form-check-label widget-filter-item-text" for="size-s">S</label>
                      </div><span class="fs-xs text-muted">57</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-m">
                        <label class="form-check-label widget-filter-item-text" for="size-m">M</label>
                      </div><span class="fs-xs text-muted">198</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-l">
                        <label class="form-check-label widget-filter-item-text" for="size-l">L</label>
                      </div><span class="fs-xs text-muted">72</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-xl">
                        <label class="form-check-label widget-filter-item-text" for="size-xl">XL</label>
                      </div><span class="fs-xs text-muted">46</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-39">
                        <label class="form-check-label widget-filter-item-text" for="size-39">39</label>
                      </div><span class="fs-xs text-muted">112</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-40">
                        <label class="form-check-label widget-filter-item-text" for="size-40">40</label>
                      </div><span class="fs-xs text-muted">85</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-41">
                        <label class="form-check-label widget-filter-item-text" for="size-40">41</label>
                      </div><span class="fs-xs text-muted">210</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-42">
                        <label class="form-check-label widget-filter-item-text" for="size-42">42</label>
                      </div><span class="fs-xs text-muted">57</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-43">
                        <label class="form-check-label widget-filter-item-text" for="size-43">43</label>
                      </div><span class="fs-xs text-muted">30</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-44">
                        <label class="form-check-label widget-filter-item-text" for="size-44">44</label>
                      </div><span class="fs-xs text-muted">61</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-45">
                        <label class="form-check-label widget-filter-item-text" for="size-45">45</label>
                      </div><span class="fs-xs text-muted">23</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-46">
                        <label class="form-check-label widget-filter-item-text" for="size-46">46</label>
                      </div><span class="fs-xs text-muted">19</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-47">
                        <label class="form-check-label widget-filter-item-text" for="size-47">47</label>
                      </div><span class="fs-xs text-muted">15</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-48">
                        <label class="form-check-label widget-filter-item-text" for="size-48">48</label>
                      </div><span class="fs-xs text-muted">12</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-49">
                        <label class="form-check-label widget-filter-item-text" for="size-49">49</label>
                      </div><span class="fs-xs text-muted">8</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-50">
                        <label class="form-check-label widget-filter-item-text" for="size-50">50</label>
                      </div><span class="fs-xs text-muted">6</span>
                    </li>
                  </ul>
                </div>
                <!-- Filter by Color-->
                <div class="widget">
                  <h3 class="widget-title">Color</h3>
                  <div class="d-flex flex-wrap">
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-blue-gray">
                      <label class="form-option-label rounded-circle" for="color-blue-gray"><span class="form-option-color rounded-circle" style="background-color: #b3c8db;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-blue-gray">Blue-gray</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-burgundy">
                      <label class="form-option-label rounded-circle" for="color-burgundy"><span class="form-option-color rounded-circle" style="background-color: #ca7295;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-burgundy">Burgundy</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-teal">
                      <label class="form-option-label rounded-circle" for="color-teal"><span class="form-option-color rounded-circle" style="background-color: #91c2c3;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-teal">Teal</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-brown">
                      <label class="form-option-label rounded-circle" for="color-brown"><span class="form-option-color rounded-circle" style="background-color: #9a8480;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-brown">Brown</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-coral-red">
                      <label class="form-option-label rounded-circle" for="color-coral-red"><span class="form-option-color rounded-circle" style="background-color: #ff7072;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-coral-red">Coral red</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-navy">
                      <label class="form-option-label rounded-circle" for="color-navy"><span class="form-option-color rounded-circle" style="background-color: #696dc8;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-navy">Navy</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-charcoal">
                      <label class="form-option-label rounded-circle" for="color-charcoal"><span class="form-option-color rounded-circle" style="background-color: #4e4d4d;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-charcoal">Charcoal</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-sky-blue">
                      <label class="form-option-label rounded-circle" for="color-sky-blue"><span class="form-option-color rounded-circle" style="background-color: #8bcdf5;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-sky-blue">Sky blue</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
              <div class="d-flex flex-wrap">
                <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                  <label class="text-light opacity-75 text-nowrap fs-sm me-2 d-none d-sm-block" for="sorting">Sort by:</label>
                  <select class="form-select" id="sorting">
                    <option>Popularity</option>
                    <option>Low - Hight Price</option>
                    <option>High - Low Price</option>
                    <option>Average Rating</option>
                    <option>A - Z Order</option>
                    <option>Z - A Order</option>
                  </select><span class="fs-sm text-light opacity-75 text-nowrap ms-2 d-none d-md-block">of 287 products</span>
                </div>
              </div>
              <div class="d-flex pb-3"><a class="nav-link-style nav-link-light me-3" href="#"><i class="ci-arrow-left"></i></a><span class="fs-md text-light">1 / 5</span><a class="nav-link-style nav-link-light ms-3" href="#"><i class="ci-arrow-right"></i></a></div>
              <div class="d-none d-sm-flex pb-3"><a class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100 me-2" href="#"><i class="ci-view-grid"></i></a><a class="btn btn-icon nav-link-style nav-link-light" href="shop-list-ls.html"><i class="ci-view-list"></i></a></div>
            </div>
            <!-- Products grid-->
            <div class="row mx-n2">
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
               <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="RUNOVA_sneaker/RN1.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
            <!-- Banner-->
            <div class="py-sm-2">
              <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden mb-4 rounded-3">
                <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                  <h4 class="fs-lg fw-light mb-2">Converse All Star</h4>
                  <h3 class="mb-4">Make Your Day Comfortable</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
                </div><img class="d-block ms-auto" src="img/shop/catalog/banner.jpg" alt="Shop Converse">
              </div>
            </div>
            <!-- Products grid-->
            <div class="row mx-n2">
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
               <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX1.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX1.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
               <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX1.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX1.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="NEXSOLE_sneaker/NX1.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Sneakers</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">¥15000</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
            <!-- Pagination-->
            <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="shop-grid-ft.php"><i class="ci-arrow-left me-2"></i>Prev</a></li>
              </ul>
              <ul class="pagination">
                <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="shop-grid-ft1.php">2</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
              </ul>
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="shop-grid-ft1.php" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
              </ul>
            </nav>
          </section>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Shop departments</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp; Eyewear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Account &amp; shipping info</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
              </ul>
            </div>
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>
              <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                  <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>
            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Download our app</h3>
              <div class="d-flex flex-wrap">
                <div class="me-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-rocket text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-support text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-card text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light mb-5">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-start mb-4">
              <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 me-3" href="#"><img class="d-block" src="img/footer-logo-light.png" width="117" alt="Cartzilla"></a>
                <div class="btn-group dropdown disable-autohide">
                  <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png" width="20" alt="English">Eng / $</button>
                  <ul class="dropdown-menu my-1">
                    <li class="dropdown-item">
                      <select class="form-select form-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                      </select>
                    </li>
                      <div class="language-dropdown">
                          <button class="dropbtn">
                              🇯🇵 日本語 <span class="arrow">▼</span> 
                          </button>
                          <div class="dropdown-content">
                              <a href="/en/...">English</a>
                              <a href="/ja/...">日本語</a>
                              <a href="/zh/...">中文</a>
                          </div>
                      </div>
                  </ul>
                </div>
              </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Outlets</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Support</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Privacy</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-end mb-4">
              <div class="mb-3"><a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook ms-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i class="ci-instagram"></i></a><a class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube ms-2 mb-2" href="#"><i class="ci-youtube"></i></a></div><img class="d-inline-block" src="img/cards-alt.png" width="187" alt="Payment methods">
            </div>
          </div>
          <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices (Shop)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#shop-sidebar"><span class="handheld-toolbar-icon"><i class="ci-filter-alt"></i></span><span class="handheld-toolbar-label">Filters</span></a><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/nouislider/dist/nouislider.min.js"></script>
    <script src="vendor/drift-zoom/dist/Drift.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>

<!-- Mirrored from cartzilla.createx.studio/shop-grid-ls.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 15:49:57 GMT -->
</html>
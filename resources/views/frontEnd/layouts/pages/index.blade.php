@extends('frontEnd.layouts.master')
@section('content')
<section class="slider-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="home-slider-container">
                    <div class="main_slider owl-carousel">
                        @foreach ($sliders as $key => $value)
                            <div class="slider-item">
                               <a href="{{$value->link}}">
                                    <img src="{{ asset($value->image) }}" alt="" />
                               </a>
                            </div>
                            <!-- slider item -->
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- col-end -->
            <div class="col-sm-4">
                <div class="banner-right">
                    @foreach($sliderrightads as $key=>$value)
                    <div class="banner-right-item item-{{$key+1}}">
                        <a href="{{$value->link}}">
                            <img src="{{asset($value->image)}}" alt="">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- slider end -->
    <div class="home-category">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="category-title">
                    <h3>Top Categories</h3>
                </div>
                <div class="category-slider owl-carousel">
                    @foreach($categories as $key=>$value)
                    <div class="cat-item">
                        <div class="cat-img">
                            <a href="">
                                <img src="{{asset($value->image)}}" alt="">
                            </a>
                        </div>
                        <div class="cat-name">
                            <a href="">
                                {{$value->name}}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
    <section class="homeproduct">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section-title">
              <h3><a href="http://localhost/sell-pixer/best-deals">Best Deals</a></h3>
              <a href="http://localhost/sell-pixer/best-deals" class="view_all">View All</a>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="product_slider owl-carousel owl-loaded owl-drag">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1186px, 0px, 0px); transition: 0.25s; width: 4744px;">
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>35% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/luxury-leather-men-shoes-for-wedding-formal-oxfords-business-casual-office-work-shoes-for-men-classic-men%27s-pointed-dress-shoes-10">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1730123193-p10.1.webp"
                              alt="Luxury Leather Men Shoes for Wedding Formal Oxfords Business Casual Office Work Shoes for Men Classic Men's Pointed Dress Shoes"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/luxury-leather-men-shoes-for-wedding-formal-oxfords-business-casual-office-work-shoes-for-men-classic-men%27s-pointed-dress-shoes-10">
                              Luxury Leather Men Shoes for Wedding Formal Oxfords Business Casual Office Work...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 3008</del>
                              ৳ 1955
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="10"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>55% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/goodman-premium-quality-beige-color-semi-long-panjabi-for-men.-9">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730122726-p9.1.webp" alt="GoodMan Premium Quality Beige Color Semi Long Panjabi for Men." />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/goodman-premium-quality-beige-color-semi-long-panjabi-for-men.-9">GoodMan Premium Quality Beige Color Semi Long Panjabi for Men.</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2739</del>
                              ৳ 1240
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="9"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---deep-black---pant-8">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730120539-p8.1.webp" alt="Slim-Fit Stretchable Denim Jeans Pant For Men - Deep Black - Pant" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---deep-black---pant-8">Slim-Fit Stretchable Denim Jeans Pant For Men - Deep Black - Pant</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              ৳ 699
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="8"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/polo-tshirt-3">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730095622-p3.1.webp" alt="POLO TSHIRT" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/polo-tshirt-3">POLO TSHIRT</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 790</del>
                              ৳ 550
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="3"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>28% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/treee-new-stylish-casual-t-shirt-for-men-1">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730009353-p1.1.webp" alt="Treee New Stylish Casual T-Shirt for men" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/treee-new-stylish-casual-t-shirt-for-men-1">Treee New Stylish Casual T-Shirt for men</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 250</del>
                              ৳ 180
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="1"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>13% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/naira-cut-three-piece-for-women-exclusive-collection-unstitched-screen-print-exclusive,-stylist,-fashionable-three-pics-for-woman.---3-pice-dress-55">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740461586-9e3728d17ba99ee1c1c8279187a773f9.jpg_720x720q80.jpg_.webp"
                              alt="Naira Cut Three Piece For Women Exclusive Collection Unstitched Screen Print Exclusive, Stylist, Fashionable Three Pics For Woman. - 3 Pice Dress"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/naira-cut-three-piece-for-women-exclusive-collection-unstitched-screen-print-exclusive,-stylist,-fashionable-three-pics-for-woman.---3-pice-dress-55">
                              Naira Cut Three Piece For Women Exclusive Collection Unstitched Screen Print Exc...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 920</del>
                              ৳ 800
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="55"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>28% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/unstitched-cotton-screen-printed-shalwar-kameez-for-women3piece-dress---ethnic-elegance-53">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740461095-708c963eafbd20486fe0a0d3f46c70fc.jpg_720x720q80.jpg_.webp"
                              alt="Unstitched Cotton Screen Printed Shalwar Kameez For Women3Piece Dress - Ethnic Elegance"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/unstitched-cotton-screen-printed-shalwar-kameez-for-women3piece-dress---ethnic-elegance-53">
                              Unstitched Cotton Screen Printed Shalwar Kameez For Women3Piece Dress - Ethnic E...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 650</del>
                              ৳ 470
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="53"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>10% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/women-pink-ethnic-three-piece-set-50">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740460452-sb-3pcs-tw25-04ef-61970_9_768x.webp" alt="Women Pink Ethnic Three Piece Set" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/women-pink-ethnic-three-piece-set-50">Women Pink Ethnic Three Piece Set</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 4150</del>
                              ৳ 3750
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="50"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730303673-p23.1.webp" alt="Moxx MPOD ENC True Wireless Earbuds" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">Moxx MPOD ENC True Wireless Earbuds</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 940
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="24" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>13% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/indian-new-stylish-exclusive-collection-weightless-georgette-computer-embroidery-work-four-piece-salwar-kameez-for-women---chic-for-any-season-17">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1730286811-p15.1.webp"
                              alt="Indian New Stylish Exclusive Collection Weightless Georgette Computer Embroidery Work Four-Piece Salwar Kameez For Women - Chic for Any Season"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/indian-new-stylish-exclusive-collection-weightless-georgette-computer-embroidery-work-four-piece-salwar-kameez-for-women---chic-for-any-season-17">
                              Indian New Stylish Exclusive Collection Weightless Georgette Computer Embroidery...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 800</del>
                              ৳ 700
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="17"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>35% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/luxury-leather-men-shoes-for-wedding-formal-oxfords-business-casual-office-work-shoes-for-men-classic-men%27s-pointed-dress-shoes-10">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1730123193-p10.1.webp"
                              alt="Luxury Leather Men Shoes for Wedding Formal Oxfords Business Casual Office Work Shoes for Men Classic Men's Pointed Dress Shoes"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/luxury-leather-men-shoes-for-wedding-formal-oxfords-business-casual-office-work-shoes-for-men-classic-men%27s-pointed-dress-shoes-10">
                              Luxury Leather Men Shoes for Wedding Formal Oxfords Business Casual Office Work...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 3008</del>
                              ৳ 1955
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="10"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>55% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/goodman-premium-quality-beige-color-semi-long-panjabi-for-men.-9">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730122726-p9.1.webp" alt="GoodMan Premium Quality Beige Color Semi Long Panjabi for Men." />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/goodman-premium-quality-beige-color-semi-long-panjabi-for-men.-9">GoodMan Premium Quality Beige Color Semi Long Panjabi for Men.</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2739</del>
                              ৳ 1240
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="9"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---deep-black---pant-8">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730120539-p8.1.webp" alt="Slim-Fit Stretchable Denim Jeans Pant For Men - Deep Black - Pant" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---deep-black---pant-8">Slim-Fit Stretchable Denim Jeans Pant For Men - Deep Black - Pant</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              ৳ 699
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="8"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/polo-tshirt-3">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730095622-p3.1.webp" alt="POLO TSHIRT" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/polo-tshirt-3">POLO TSHIRT</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 790</del>
                              ৳ 550
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="3"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>28% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/treee-new-stylish-casual-t-shirt-for-men-1">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730009353-p1.1.webp" alt="Treee New Stylish Casual T-Shirt for men" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/treee-new-stylish-casual-t-shirt-for-men-1">Treee New Stylish Casual T-Shirt for men</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 250</del>
                              ৳ 180
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="1"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>13% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/naira-cut-three-piece-for-women-exclusive-collection-unstitched-screen-print-exclusive,-stylist,-fashionable-three-pics-for-woman.---3-pice-dress-55">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740461586-9e3728d17ba99ee1c1c8279187a773f9.jpg_720x720q80.jpg_.webp"
                              alt="Naira Cut Three Piece For Women Exclusive Collection Unstitched Screen Print Exclusive, Stylist, Fashionable Three Pics For Woman. - 3 Pice Dress"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/naira-cut-three-piece-for-women-exclusive-collection-unstitched-screen-print-exclusive,-stylist,-fashionable-three-pics-for-woman.---3-pice-dress-55">
                              Naira Cut Three Piece For Women Exclusive Collection Unstitched Screen Print Exc...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 920</del>
                              ৳ 800
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="55"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>28% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/unstitched-cotton-screen-printed-shalwar-kameez-for-women3piece-dress---ethnic-elegance-53">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740461095-708c963eafbd20486fe0a0d3f46c70fc.jpg_720x720q80.jpg_.webp"
                              alt="Unstitched Cotton Screen Printed Shalwar Kameez For Women3Piece Dress - Ethnic Elegance"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/unstitched-cotton-screen-printed-shalwar-kameez-for-women3piece-dress---ethnic-elegance-53">
                              Unstitched Cotton Screen Printed Shalwar Kameez For Women3Piece Dress - Ethnic E...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 650</del>
                              ৳ 470
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="53"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>10% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/women-pink-ethnic-three-piece-set-50">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740460452-sb-3pcs-tw25-04ef-61970_9_768x.webp" alt="Women Pink Ethnic Three Piece Set" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/women-pink-ethnic-three-piece-set-50">Women Pink Ethnic Three Piece Set</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 4150</del>
                              ৳ 3750
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="50"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730303673-p23.1.webp" alt="Moxx MPOD ENC True Wireless Earbuds" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">Moxx MPOD ENC True Wireless Earbuds</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 940
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="24" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>13% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/indian-new-stylish-exclusive-collection-weightless-georgette-computer-embroidery-work-four-piece-salwar-kameez-for-women---chic-for-any-season-17">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1730286811-p15.1.webp"
                              alt="Indian New Stylish Exclusive Collection Weightless Georgette Computer Embroidery Work Four-Piece Salwar Kameez For Women - Chic for Any Season"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/indian-new-stylish-exclusive-collection-weightless-georgette-computer-embroidery-work-four-piece-salwar-kameez-for-women---chic-for-any-season-17">
                              Indian New Stylish Exclusive Collection Weightless Georgette Computer Embroidery...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 800</del>
                              ৳ 700
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="17"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
              </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="homeproduct">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section-title">
              <h3><a href="http://localhost/sell-pixer/category/mens-fashion">Mens Fashion </a></h3>
              <a href="http://localhost/sell-pixer/category/mens-fashion" class="view_all">View All</a>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="product_slider owl-carousel owl-loaded owl-drag">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1423px, 0px, 0px); transition: 0.25s; width: 4507px;">
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>70% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/men%27s-printed-shirt-seaside-vacation-casual-top-large-size-oversized-beach-clothing-5">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730097347-p5.1.webp" alt="Men's Printed Shirt Seaside Vacation Casual Top Large Size Oversized Beach Clothing" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/men%27s-printed-shirt-seaside-vacation-casual-top-large-size-oversized-beach-clothing-5">
                              Men's Printed Shirt Seaside Vacation Casual Top Large Size Oversized Beach Cloth...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2978</del>
                              ৳ 896
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="5"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>46% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/premium-trendy-stylist-design-men%27s-polo-shirt---casual-elegance-for-all-seasons---effortless-style-for-everyday-wear-4">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730096961-p4.1.webp" alt="Premium Trendy Stylist Design Men's Polo Shirt - Casual Elegance for All Seasons - Effortless Style for Everyday Wear" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/premium-trendy-stylist-design-men%27s-polo-shirt---casual-elegance-for-all-seasons---effortless-style-for-everyday-wear-4">
                              Premium Trendy Stylist Design Men's Polo Shirt - Casual Elegance for All Seasons...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 499</del>
                              ৳ 268
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="4"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/polo-tshirt-3">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730095622-p3.1.webp" alt="POLO TSHIRT" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/polo-tshirt-3">POLO TSHIRT</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 790</del>
                              ৳ 550
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="3"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>54% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/new-update-collection-full-sleeves-t-shirt-&amp;-full-pant-combo-%28set%29-for-man-2">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730084017-p2.1.webp" alt="New Update collection full Sleeves T-Shirt &amp; Full Pant Combo (Set) for Man" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/new-update-collection-full-sleeves-t-shirt-&amp;-full-pant-combo-%28set%29-for-man-2">
                              New Update collection full Sleeves T-Shirt &amp; Full Pant Combo (Set) for Man
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1250</del>
                              ৳ 569
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="2"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>28% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/treee-new-stylish-casual-t-shirt-for-men-1">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730009353-p1.1.webp" alt="Treee New Stylish Casual T-Shirt for men" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/treee-new-stylish-casual-t-shirt-for-men-1">Treee New Stylish Casual T-Shirt for men</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 250</del>
                              ৳ 180
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="1"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>55% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/goodman-premium-quality-beige-color-semi-long-panjabi-for-men.-9">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730122726-p9.1.webp" alt="GoodMan Premium Quality Beige Color Semi Long Panjabi for Men." />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/goodman-premium-quality-beige-color-semi-long-panjabi-for-men.-9">GoodMan Premium Quality Beige Color Semi Long Panjabi for Men.</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2739</del>
                              ৳ 1240
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="9"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---deep-black---pant-8">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730120539-p8.1.webp" alt="Slim-Fit Stretchable Denim Jeans Pant For Men - Deep Black - Pant" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---deep-black---pant-8">Slim-Fit Stretchable Denim Jeans Pant For Men - Deep Black - Pant</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              ৳ 699
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="8"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---dark-blue-7">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730117259-p7.1.webp" alt="Slim-fit Stretchable Denim Jeans Pant For Men - Dark Blue" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---dark-blue-7">Slim-fit Stretchable Denim Jeans Pant For Men - Dark Blue</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              ৳ 699
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="7"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>64% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/denim-casual-shirt-for-men---shirt-for-men---shirt-for-men-6">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730116825-p6.1.webp" alt="Denim Casual shirt for men - Shirt For Men - Shirt For Men" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/denim-casual-shirt-for-men---shirt-for-men---shirt-for-men-6">Denim Casual shirt for men - Shirt For Men - Shirt For Men</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1651</del>
                              ৳ 592
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="6"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>70% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/men%27s-printed-shirt-seaside-vacation-casual-top-large-size-oversized-beach-clothing-5">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730097347-p5.1.webp" alt="Men's Printed Shirt Seaside Vacation Casual Top Large Size Oversized Beach Clothing" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/men%27s-printed-shirt-seaside-vacation-casual-top-large-size-oversized-beach-clothing-5">
                              Men's Printed Shirt Seaside Vacation Casual Top Large Size Oversized Beach Cloth...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2978</del>
                              ৳ 896
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="5"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>46% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/premium-trendy-stylist-design-men%27s-polo-shirt---casual-elegance-for-all-seasons---effortless-style-for-everyday-wear-4">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730096961-p4.1.webp" alt="Premium Trendy Stylist Design Men's Polo Shirt - Casual Elegance for All Seasons - Effortless Style for Everyday Wear" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/premium-trendy-stylist-design-men%27s-polo-shirt---casual-elegance-for-all-seasons---effortless-style-for-everyday-wear-4">
                              Premium Trendy Stylist Design Men's Polo Shirt - Casual Elegance for All Seasons...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 499</del>
                              ৳ 268
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="4"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/polo-tshirt-3">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730095622-p3.1.webp" alt="POLO TSHIRT" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/polo-tshirt-3">POLO TSHIRT</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 790</del>
                              ৳ 550
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="3"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>54% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/new-update-collection-full-sleeves-t-shirt-&amp;-full-pant-combo-%28set%29-for-man-2">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730084017-p2.1.webp" alt="New Update collection full Sleeves T-Shirt &amp; Full Pant Combo (Set) for Man" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/new-update-collection-full-sleeves-t-shirt-&amp;-full-pant-combo-%28set%29-for-man-2">
                              New Update collection full Sleeves T-Shirt &amp; Full Pant Combo (Set) for Man
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1250</del>
                              ৳ 569
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="2"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>28% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/treee-new-stylish-casual-t-shirt-for-men-1">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730009353-p1.1.webp" alt="Treee New Stylish Casual T-Shirt for men" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/treee-new-stylish-casual-t-shirt-for-men-1">Treee New Stylish Casual T-Shirt for men</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 250</del>
                              ৳ 180
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="1"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>55% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/goodman-premium-quality-beige-color-semi-long-panjabi-for-men.-9">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730122726-p9.1.webp" alt="GoodMan Premium Quality Beige Color Semi Long Panjabi for Men." />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/goodman-premium-quality-beige-color-semi-long-panjabi-for-men.-9">GoodMan Premium Quality Beige Color Semi Long Panjabi for Men.</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2739</del>
                              ৳ 1240
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="9"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---deep-black---pant-8">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730120539-p8.1.webp" alt="Slim-Fit Stretchable Denim Jeans Pant For Men - Deep Black - Pant" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---deep-black---pant-8">Slim-Fit Stretchable Denim Jeans Pant For Men - Deep Black - Pant</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              ৳ 699
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="8"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---dark-blue-7">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730117259-p7.1.webp" alt="Slim-fit Stretchable Denim Jeans Pant For Men - Dark Blue" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/slim-fit-stretchable-denim-jeans-pant-for-men---dark-blue-7">Slim-fit Stretchable Denim Jeans Pant For Men - Dark Blue</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              ৳ 699
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="7"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>64% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/denim-casual-shirt-for-men---shirt-for-men---shirt-for-men-6">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730116825-p6.1.webp" alt="Denim Casual shirt for men - Shirt For Men - Shirt For Men" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/denim-casual-shirt-for-men---shirt-for-men---shirt-for-men-6">Denim Casual shirt for men - Shirt For Men - Shirt For Men</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1651</del>
                              ৳ 592
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="6"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>70% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/men%27s-printed-shirt-seaside-vacation-casual-top-large-size-oversized-beach-clothing-5">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730097347-p5.1.webp" alt="Men's Printed Shirt Seaside Vacation Casual Top Large Size Oversized Beach Clothing" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/men%27s-printed-shirt-seaside-vacation-casual-top-large-size-oversized-beach-clothing-5">
                              Men's Printed Shirt Seaside Vacation Casual Top Large Size Oversized Beach Cloth...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2978</del>
                              ৳ 896
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="5"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
              </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="homeproduct">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section-title">
              <h3><a href="http://localhost/sell-pixer/category/womens-fashion">Womens Fashion </a></h3>
              <a href="http://localhost/sell-pixer/category/womens-fashion" class="view_all">View All</a>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="product_slider owl-carousel owl-loaded owl-drag">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1897px, 0px, 0px); transition: 0.25s; width: 4033px;">
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>38% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/premium-quality-leather-pu-fashionable-shoulder-bag-for-women-for-girls%289.5x6x3inc%29-16">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730286506-p14.1.webp" alt="Premium Quality leather PU Fashionable Shoulder Bag for Women for girls(9.5x6x3inc)" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/premium-quality-leather-pu-fashionable-shoulder-bag-for-women-for-girls%289.5x6x3inc%29-16">
                              Premium Quality leather PU Fashionable Shoulder Bag for Women for girls(9.5x6x3i...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 3549</del>
                              ৳ 2129
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="16"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>64% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/new-women-wallet-korean-style-large-capacity-multi-functional-shoulder-bag-mid-length-clutch-coin-purse-15">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730284496-p13.1.webp" alt="New Women Wallet Korean Style Large Capacity Multi-Functional Shoulder Bag Mid-Length Clutch Coin Purse" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/new-women-wallet-korean-style-large-capacity-multi-functional-shoulder-bag-mid-length-clutch-coin-purse-15">
                              New Women Wallet Korean Style Large Capacity Multi-Functional Shoulder Bag Mid-L...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2350</del>
                              ৳ 850
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="15"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>28% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/high-quality-women%E2%80%99s-lattice-shoulder-small-square-chain-party-bags.%F0%9F%92%BC-14">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730264468-d64de91600b687628bca86374594e4af.jpg_400x400q75.jpg_.webp" alt="High Quality women’s lattice shoulder small square chain party Bags.💼" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/high-quality-women%E2%80%99s-lattice-shoulder-small-square-chain-party-bags.%F0%9F%92%BC-14">High Quality women’s lattice shoulder small square chain party Bags.💼</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 780</del>
                              ৳ 559
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="14"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>23% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/new-handbags-satchel-designer-ladies-leather-bag-messenger-bag-women-bag-set-shoulder-tote-13">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1730263403-780f7854c52c8b31784b09d39ed746c8.jpg_400x400q75.jpg_.webp"
                              alt="New Handbags Satchel Designer Ladies Leather Bag Messenger Bag Women Bag Set Shoulder Tote"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/new-handbags-satchel-designer-ladies-leather-bag-messenger-bag-women-bag-set-shoulder-tote-13">
                              New Handbags Satchel Designer Ladies Leather Bag Messenger Bag Women Bag Set Sho...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1250</del>
                              ৳ 962
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="13" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>39% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/ladies-hand-bag-set-monipuri-handmade-hand-bag-and-purse-set;-bag-for-girls-12">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730174830-p12.1.webp" alt="Ladies Hand Bag Set Monipuri Handmade Hand Bag and Purse Set; bag for girls" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/ladies-hand-bag-set-monipuri-handmade-hand-bag-and-purse-set;-bag-for-girls-12">Ladies Hand Bag Set Monipuri Handmade Hand Bag and Purse Set; bag for girls</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 600</del>
                              ৳ 365
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="12"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>12% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/unready-digital-printed-&amp;-embroidery-work-salwar-kamez-four-piece-dress-for-women-18">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730287212-p16.1.webp" alt="Unready Digital Printed &amp; Embroidery Work Salwar Kamez four Piece Dress for Women" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/unready-digital-printed-&amp;-embroidery-work-salwar-kamez-four-piece-dress-for-women-18">
                              Unready Digital Printed &amp; Embroidery Work Salwar Kamez four Piece Dress for Wome...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2000</del>
                              ৳ 1752
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="18"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>13% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/indian-new-stylish-exclusive-collection-weightless-georgette-computer-embroidery-work-four-piece-salwar-kameez-for-women---chic-for-any-season-17">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1730286811-p15.1.webp"
                              alt="Indian New Stylish Exclusive Collection Weightless Georgette Computer Embroidery Work Four-Piece Salwar Kameez For Women - Chic for Any Season"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/indian-new-stylish-exclusive-collection-weightless-georgette-computer-embroidery-work-four-piece-salwar-kameez-for-women---chic-for-any-season-17">
                              Indian New Stylish Exclusive Collection Weightless Georgette Computer Embroidery...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 800</del>
                              ৳ 700
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="17"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>38% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/premium-quality-leather-pu-fashionable-shoulder-bag-for-women-for-girls%289.5x6x3inc%29-16">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730286506-p14.1.webp" alt="Premium Quality leather PU Fashionable Shoulder Bag for Women for girls(9.5x6x3inc)" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/premium-quality-leather-pu-fashionable-shoulder-bag-for-women-for-girls%289.5x6x3inc%29-16">
                              Premium Quality leather PU Fashionable Shoulder Bag for Women for girls(9.5x6x3i...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 3549</del>
                              ৳ 2129
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="16"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>64% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/new-women-wallet-korean-style-large-capacity-multi-functional-shoulder-bag-mid-length-clutch-coin-purse-15">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730284496-p13.1.webp" alt="New Women Wallet Korean Style Large Capacity Multi-Functional Shoulder Bag Mid-Length Clutch Coin Purse" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/new-women-wallet-korean-style-large-capacity-multi-functional-shoulder-bag-mid-length-clutch-coin-purse-15">
                              New Women Wallet Korean Style Large Capacity Multi-Functional Shoulder Bag Mid-L...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2350</del>
                              ৳ 850
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="15"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>28% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/high-quality-women%E2%80%99s-lattice-shoulder-small-square-chain-party-bags.%F0%9F%92%BC-14">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730264468-d64de91600b687628bca86374594e4af.jpg_400x400q75.jpg_.webp" alt="High Quality women’s lattice shoulder small square chain party Bags.💼" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/high-quality-women%E2%80%99s-lattice-shoulder-small-square-chain-party-bags.%F0%9F%92%BC-14">High Quality women’s lattice shoulder small square chain party Bags.💼</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 780</del>
                              ৳ 559
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="14"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>23% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/new-handbags-satchel-designer-ladies-leather-bag-messenger-bag-women-bag-set-shoulder-tote-13">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1730263403-780f7854c52c8b31784b09d39ed746c8.jpg_400x400q75.jpg_.webp"
                              alt="New Handbags Satchel Designer Ladies Leather Bag Messenger Bag Women Bag Set Shoulder Tote"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/new-handbags-satchel-designer-ladies-leather-bag-messenger-bag-women-bag-set-shoulder-tote-13">
                              New Handbags Satchel Designer Ladies Leather Bag Messenger Bag Women Bag Set Sho...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1250</del>
                              ৳ 962
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="13" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>39% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/ladies-hand-bag-set-monipuri-handmade-hand-bag-and-purse-set;-bag-for-girls-12">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730174830-p12.1.webp" alt="Ladies Hand Bag Set Monipuri Handmade Hand Bag and Purse Set; bag for girls" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/ladies-hand-bag-set-monipuri-handmade-hand-bag-and-purse-set;-bag-for-girls-12">Ladies Hand Bag Set Monipuri Handmade Hand Bag and Purse Set; bag for girls</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 600</del>
                              ৳ 365
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="12"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>12% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/unready-digital-printed-&amp;-embroidery-work-salwar-kamez-four-piece-dress-for-women-18">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730287212-p16.1.webp" alt="Unready Digital Printed &amp; Embroidery Work Salwar Kamez four Piece Dress for Women" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/unready-digital-printed-&amp;-embroidery-work-salwar-kamez-four-piece-dress-for-women-18">
                              Unready Digital Printed &amp; Embroidery Work Salwar Kamez four Piece Dress for Wome...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2000</del>
                              ৳ 1752
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="18"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>13% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/indian-new-stylish-exclusive-collection-weightless-georgette-computer-embroidery-work-four-piece-salwar-kameez-for-women---chic-for-any-season-17">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1730286811-p15.1.webp"
                              alt="Indian New Stylish Exclusive Collection Weightless Georgette Computer Embroidery Work Four-Piece Salwar Kameez For Women - Chic for Any Season"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/indian-new-stylish-exclusive-collection-weightless-georgette-computer-embroidery-work-four-piece-salwar-kameez-for-women---chic-for-any-season-17">
                              Indian New Stylish Exclusive Collection Weightless Georgette Computer Embroidery...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 800</del>
                              ৳ 700
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="17"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>38% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/premium-quality-leather-pu-fashionable-shoulder-bag-for-women-for-girls%289.5x6x3inc%29-16">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730286506-p14.1.webp" alt="Premium Quality leather PU Fashionable Shoulder Bag for Women for girls(9.5x6x3inc)" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/premium-quality-leather-pu-fashionable-shoulder-bag-for-women-for-girls%289.5x6x3inc%29-16">
                              Premium Quality leather PU Fashionable Shoulder Bag for Women for girls(9.5x6x3i...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 3549</del>
                              ৳ 2129
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="16"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>64% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/new-women-wallet-korean-style-large-capacity-multi-functional-shoulder-bag-mid-length-clutch-coin-purse-15">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730284496-p13.1.webp" alt="New Women Wallet Korean Style Large Capacity Multi-Functional Shoulder Bag Mid-Length Clutch Coin Purse" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/new-women-wallet-korean-style-large-capacity-multi-functional-shoulder-bag-mid-length-clutch-coin-purse-15">
                              New Women Wallet Korean Style Large Capacity Multi-Functional Shoulder Bag Mid-L...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 2350</del>
                              ৳ 850
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="15"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>28% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/high-quality-women%E2%80%99s-lattice-shoulder-small-square-chain-party-bags.%F0%9F%92%BC-14">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730264468-d64de91600b687628bca86374594e4af.jpg_400x400q75.jpg_.webp" alt="High Quality women’s lattice shoulder small square chain party Bags.💼" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/high-quality-women%E2%80%99s-lattice-shoulder-small-square-chain-party-bags.%F0%9F%92%BC-14">High Quality women’s lattice shoulder small square chain party Bags.💼</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 780</del>
                              ৳ 559
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="14"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
              </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="homeproduct">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section-title">
              <h3><a href="http://localhost/sell-pixer/category/cosmetics">Cosmetics </a></h3>
              <a href="http://localhost/sell-pixer/category/cosmetics" class="view_all">View All</a>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="product_slider owl-carousel owl-loaded owl-drag">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1186px, 0px, 0px); transition: 0.25s; width: 3558px;">
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>36% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/dexe-anti-hair-loss-shampoo-200ml-%28men-&amp;-women%29-23">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730292174-p21.1.webp" alt="Dexe Anti Hair Loss Shampoo 200ml (Men &amp; Women)" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/dexe-anti-hair-loss-shampoo-200ml-%28men-&amp;-women%29-23">Dexe Anti Hair Loss Shampoo 200ml (Men &amp; Women)</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1250</del>
                              ৳ 799
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="23" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>32% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/international-usa-body-spray-brut-for-male---200-ml-22">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288785-p20.1.webp" alt="International USA Body spray BRUT for male - 200 ml" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/international-usa-body-spray-brut-for-male---200-ml-22">International USA Body spray BRUT for male - 200 ml</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 650</del>
                              ৳ 439
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="22" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>35% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/body-spray-signature-intense-perfume-axe---122-ml-21">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288574-p19.1.webp" alt="Body spray Signature Intense perfume Axe - 122 ml" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/body-spray-signature-intense-perfume-axe---122-ml-21">Body spray Signature Intense perfume Axe - 122 ml</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 550</del>
                              ৳ 355
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="21" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>-5% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/international-uae-product-dorall-collection-dc-ville-de-lamour-perfume-for-women---100-ml-20">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288340-p18.1.webp" alt="International UAE product Dorall collection DC Ville DE Lamour perfume for women - 100 ml" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/international-uae-product-dorall-collection-dc-ville-de-lamour-perfume-for-women---100-ml-20">
                              International UAE product Dorall collection DC Ville DE Lamour perfume for women...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 600</del>
                              ৳ 630
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="20" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>45% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/jaara-cool-water-6ml-roll-on-system-fragrance---alcohol-free-perfume-oil---refreshing-scent-19">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288170-p17.1.webp" alt="JAARA Cool Water 6ml Roll-On System Fragrance - Alcohol-Free Perfume Oil - Refreshing Scent" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/jaara-cool-water-6ml-roll-on-system-fragrance---alcohol-free-perfume-oil---refreshing-scent-19">
                              JAARA Cool Water 6ml Roll-On System Fragrance - Alcohol-Free Perfume Oil - Refre...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 455</del>
                              ৳ 250
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="19" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>36% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/dexe-anti-hair-loss-shampoo-200ml-%28men-&amp;-women%29-23">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730292174-p21.1.webp" alt="Dexe Anti Hair Loss Shampoo 200ml (Men &amp; Women)" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/dexe-anti-hair-loss-shampoo-200ml-%28men-&amp;-women%29-23">Dexe Anti Hair Loss Shampoo 200ml (Men &amp; Women)</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1250</del>
                              ৳ 799
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="23" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>32% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/international-usa-body-spray-brut-for-male---200-ml-22">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288785-p20.1.webp" alt="International USA Body spray BRUT for male - 200 ml" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/international-usa-body-spray-brut-for-male---200-ml-22">International USA Body spray BRUT for male - 200 ml</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 650</del>
                              ৳ 439
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="22" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>35% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/body-spray-signature-intense-perfume-axe---122-ml-21">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288574-p19.1.webp" alt="Body spray Signature Intense perfume Axe - 122 ml" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/body-spray-signature-intense-perfume-axe---122-ml-21">Body spray Signature Intense perfume Axe - 122 ml</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 550</del>
                              ৳ 355
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="21" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>-5% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/international-uae-product-dorall-collection-dc-ville-de-lamour-perfume-for-women---100-ml-20">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288340-p18.1.webp" alt="International UAE product Dorall collection DC Ville DE Lamour perfume for women - 100 ml" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/international-uae-product-dorall-collection-dc-ville-de-lamour-perfume-for-women---100-ml-20">
                              International UAE product Dorall collection DC Ville DE Lamour perfume for women...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 600</del>
                              ৳ 630
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="20" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>45% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/jaara-cool-water-6ml-roll-on-system-fragrance---alcohol-free-perfume-oil---refreshing-scent-19">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288170-p17.1.webp" alt="JAARA Cool Water 6ml Roll-On System Fragrance - Alcohol-Free Perfume Oil - Refreshing Scent" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/jaara-cool-water-6ml-roll-on-system-fragrance---alcohol-free-perfume-oil---refreshing-scent-19">
                              JAARA Cool Water 6ml Roll-On System Fragrance - Alcohol-Free Perfume Oil - Refre...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 455</del>
                              ৳ 250
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="19" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>36% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/dexe-anti-hair-loss-shampoo-200ml-%28men-&amp;-women%29-23">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730292174-p21.1.webp" alt="Dexe Anti Hair Loss Shampoo 200ml (Men &amp; Women)" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/dexe-anti-hair-loss-shampoo-200ml-%28men-&amp;-women%29-23">Dexe Anti Hair Loss Shampoo 200ml (Men &amp; Women)</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1250</del>
                              ৳ 799
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="23" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>32% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/international-usa-body-spray-brut-for-male---200-ml-22">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288785-p20.1.webp" alt="International USA Body spray BRUT for male - 200 ml" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/international-usa-body-spray-brut-for-male---200-ml-22">International USA Body spray BRUT for male - 200 ml</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 650</del>
                              ৳ 439
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="22" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>35% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/body-spray-signature-intense-perfume-axe---122-ml-21">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288574-p19.1.webp" alt="Body spray Signature Intense perfume Axe - 122 ml" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/body-spray-signature-intense-perfume-axe---122-ml-21">Body spray Signature Intense perfume Axe - 122 ml</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 550</del>
                              ৳ 355
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="21" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>-5% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/international-uae-product-dorall-collection-dc-ville-de-lamour-perfume-for-women---100-ml-20">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288340-p18.1.webp" alt="International UAE product Dorall collection DC Ville DE Lamour perfume for women - 100 ml" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/international-uae-product-dorall-collection-dc-ville-de-lamour-perfume-for-women---100-ml-20">
                              International UAE product Dorall collection DC Ville DE Lamour perfume for women...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 600</del>
                              ৳ 630
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="20" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>45% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/jaara-cool-water-6ml-roll-on-system-fragrance---alcohol-free-perfume-oil---refreshing-scent-19">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730288170-p17.1.webp" alt="JAARA Cool Water 6ml Roll-On System Fragrance - Alcohol-Free Perfume Oil - Refreshing Scent" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/jaara-cool-water-6ml-roll-on-system-fragrance---alcohol-free-perfume-oil---refreshing-scent-19">
                              JAARA Cool Water 6ml Roll-On System Fragrance - Alcohol-Free Perfume Oil - Refre...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 455</del>
                              ৳ 250
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="19" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
              </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="homeproduct">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section-title">
              <h3><a href="http://localhost/sell-pixer/category/gadgets">Gadgets </a></h3>
              <a href="http://localhost/sell-pixer/category/gadgets" class="view_all">View All</a>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="product_slider owl-carousel owl-loaded owl-drag">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1660px, 0px, 0px); transition: 0.25s; width: 3321px;">
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730303673-p23.1.webp" alt="Moxx MPOD ENC True Wireless Earbuds" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">Moxx MPOD ENC True Wireless Earbuds</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 940
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="24" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/redmi-note-13-27">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730305016-p26.1.webp" alt="Redmi Note 13" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/redmi-note-13-27">Redmi Note 13</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              ৳ 22999
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="27"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>52% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/mocho-m10-tws-earbuds-2500mah-charging-box-bluetooth-compatible-stereo-waterproof-26">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730304096-p25.1.webp" alt="Mocho M10 TWS Earbuds 2500mAh Charging Box Bluetooth-compatible Stereo Waterproof" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/mocho-m10-tws-earbuds-2500mah-charging-box-bluetooth-compatible-stereo-waterproof-26">
                              Mocho M10 TWS Earbuds 2500mAh Charging Box Bluetooth-compatible Stereo Waterproo...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 578</del>
                              ৳ 278
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="26" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>31% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/premium-high-quality-airbuds-with-next-level-bass-mpod-enc-tws-25">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730303857-p24.1.webp" alt="Premium High Quality Airbuds With Next Level Bass MPOD ENC TWS" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/premium-high-quality-airbuds-with-next-level-bass-mpod-enc-tws-25">Premium High Quality Airbuds With Next Level Bass MPOD ENC TWS</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 930
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="25" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730303673-p23.1.webp" alt="Moxx MPOD ENC True Wireless Earbuds" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">Moxx MPOD ENC True Wireless Earbuds</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 940
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="24" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/redmi-note-13-27">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730305016-p26.1.webp" alt="Redmi Note 13" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/redmi-note-13-27">Redmi Note 13</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              ৳ 22999
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="27"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>52% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/mocho-m10-tws-earbuds-2500mah-charging-box-bluetooth-compatible-stereo-waterproof-26">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730304096-p25.1.webp" alt="Mocho M10 TWS Earbuds 2500mAh Charging Box Bluetooth-compatible Stereo Waterproof" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/mocho-m10-tws-earbuds-2500mah-charging-box-bluetooth-compatible-stereo-waterproof-26">
                              Mocho M10 TWS Earbuds 2500mAh Charging Box Bluetooth-compatible Stereo Waterproo...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 578</del>
                              ৳ 278
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="26" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>31% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/premium-high-quality-airbuds-with-next-level-bass-mpod-enc-tws-25">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730303857-p24.1.webp" alt="Premium High Quality Airbuds With Next Level Bass MPOD ENC TWS" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/premium-high-quality-airbuds-with-next-level-bass-mpod-enc-tws-25">Premium High Quality Airbuds With Next Level Bass MPOD ENC TWS</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 930
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="25" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730303673-p23.1.webp" alt="Moxx MPOD ENC True Wireless Earbuds" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">Moxx MPOD ENC True Wireless Earbuds</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 940
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="24" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/redmi-note-13-27">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730305016-p26.1.webp" alt="Redmi Note 13" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/redmi-note-13-27">Redmi Note 13</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              ৳ 22999
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="27"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>52% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/mocho-m10-tws-earbuds-2500mah-charging-box-bluetooth-compatible-stereo-waterproof-26">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730304096-p25.1.webp" alt="Mocho M10 TWS Earbuds 2500mAh Charging Box Bluetooth-compatible Stereo Waterproof" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/mocho-m10-tws-earbuds-2500mah-charging-box-bluetooth-compatible-stereo-waterproof-26">
                              Mocho M10 TWS Earbuds 2500mAh Charging Box Bluetooth-compatible Stereo Waterproo...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 578</del>
                              ৳ 278
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="26" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>31% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/premium-high-quality-airbuds-with-next-level-bass-mpod-enc-tws-25">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730303857-p24.1.webp" alt="Premium High Quality Airbuds With Next Level Bass MPOD ENC TWS" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/premium-high-quality-airbuds-with-next-level-bass-mpod-enc-tws-25">Premium High Quality Airbuds With Next Level Bass MPOD ENC TWS</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 930
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="25" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730303673-p23.1.webp" alt="Moxx MPOD ENC True Wireless Earbuds" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/moxx-mpod-enc-true-wireless-earbuds-24">Moxx MPOD ENC True Wireless Earbuds</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 940
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="24" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/redmi-note-13-27">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1730305016-p26.1.webp" alt="Redmi Note 13" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/redmi-note-13-27">Redmi Note 13</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              ৳ 22999
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="27"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
              </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="homeproduct">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section-title">
              <h3><a href="http://localhost/sell-pixer/category/eid-collection">Eid Collection </a></h3>
              <a href="http://localhost/sell-pixer/category/eid-collection" class="view_all">View All</a>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="product_slider owl-carousel owl-loaded owl-drag">
              <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-3795px, 0px, 0px); transition: 0.25s; width: 5693px;">
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>12% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/topllc-women-simply-fashion-bag-strap-messenger-shoulder-bag-mobile-phone-bag-63">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740463384-0ba784c1-3122-4f48-92fc-15a95343cf8a.55adff8af09acea4cee7645b340f83f4.webp"
                              alt="TopLLC Women Simply Fashion Bag Strap Messenger Shoulder Bag Mobile Phone Bag"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/topllc-women-simply-fashion-bag-strap-messenger-shoulder-bag-mobile-phone-bag-63">TopLLC Women Simply Fashion Bag Strap Messenger Shoulder Bag Mobile Phone Bag</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1300</del>
                              ৳ 1150
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="63" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>29% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/embroidery-georgette-4-pcs-with-stone-work-for-women-62">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740463364-168ffc4204ae53edcefedef63c647570.jpg_720x720q80.jpg_.webp" alt="Embroidery georgette 4 pcs with stone work for women" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/embroidery-georgette-4-pcs-with-stone-work-for-women-62">Embroidery georgette 4 pcs with stone work for women</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1260</del>
                              ৳ 890
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="62"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>13% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/ready-stock-micole-sb2963-casual-women%27s-sling-bag-crossbody-shoulder-bags-handbag-travel-beg-61">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740463310-3yprafvf66e52699ef32f_1726293658.jpg" alt="Ready Stock MICOLE SB2963 Casual Women's Sling Bag Crossbody Shoulder Bags Handbag Travel Beg" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/ready-stock-micole-sb2963-casual-women%27s-sling-bag-crossbody-shoulder-bags-handbag-travel-beg-61">
                              Ready Stock MICOLE SB2963 Casual Women's Sling Bag Crossbody Shoulder Bags Handb...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1150</del>
                              ৳ 999
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="61" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>14% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/2024-bolso-marca-women-hands-beg-fashion-ladies-shoulder-handbags-wholesale-china-trend-women-60">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740463229-638703021962470000.jpeg" alt="2024 Bolso Marca Women Hands Beg Fashion Ladies Shoulder Handbags Wholesale China Trend Women" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/2024-bolso-marca-women-hands-beg-fashion-ladies-shoulder-handbags-wholesale-china-trend-women-60">
                              2024 Bolso Marca Women Hands Beg Fashion Ladies Shoulder Handbags Wholesale Chin...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1450</del>
                              ৳ 1250
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="60" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>8% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/disney-2024-latest-trend-pu-leather-stylish-fashionable-bag-for-women-and-girls|-back-pack-59">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740462927-s3a2076c5cd794cd490ae6411f16fd10ch.jpg_720x720q80.jpg_.webp"
                              alt="Disney 2024 Latest Trend Pu Leather Stylish Fashionable Bag for Women and Girls| Back pack"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/disney-2024-latest-trend-pu-leather-stylish-fashionable-bag-for-women-and-girls|-back-pack-59">
                              Disney 2024 Latest Trend Pu Leather Stylish Fashionable Bag for Women and Girls|...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 600</del>
                              ৳ 550
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="59" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>26% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/men%27s-large-size-cloth-shoes-breathable-pointed-point-canvas-formal-work-shoes-business-casual-shoes-58">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740462621-sbbf94e500df54969b129f731bc1caa435.jpg_720x720q80.jpg_.webp"
                              alt="Men's large size cloth shoes Breathable pointed point canvas formal work shoes business casual shoes"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/men%27s-large-size-cloth-shoes-breathable-pointed-point-canvas-formal-work-shoes-business-casual-shoes-58">
                              Men's large size cloth shoes Breathable pointed point canvas formal work shoes b...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 999
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="58"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>27% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/screen-print-japani-silk-saree-for-women---traditional-design-70">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740465645-e04d9b51902e1da3e67121f42ce6aafe.jpg_720x720q80.jpg_.webp" alt="Screen Print Japani Silk Saree for Women - Traditional Design" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/screen-print-japani-silk-saree-for-women---traditional-design-70">Screen Print Japani Silk Saree for Women - Traditional Design</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1750</del>
                              ৳ 1280
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="70"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/sirajganj-half-silk-katan-saree---traditional-style,-multiple-colors,-premium-quality-69">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740465254-97f1a319f20890be1714b74709f91579.jpg_720x720q80.jpg_.webp"
                              alt="Sirajganj Half-Silk Katan Saree - Traditional Style, Multiple Colors, Premium Quality"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/sirajganj-half-silk-katan-saree---traditional-style,-multiple-colors,-premium-quality-69">
                              Sirajganj Half-Silk Katan Saree - Traditional Style, Multiple Colors, Premium Qu...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 890</del>
                              ৳ 620
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="69"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>36% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/tangail-half-silk-golden-saree-for-women---available-in-multiple-colors-68">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740464972-25b05238d40a203cbc6ccaad94c09ec5.jpg_720x720q80.jpg_.webp" alt="Tangail Half Silk Golden Saree for Women - Available in Multiple Colors" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/tangail-half-silk-golden-saree-for-women---available-in-multiple-colors-68">Tangail Half Silk Golden Saree for Women - Available in Multiple Colors</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 550</del>
                              ৳ 350
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="68"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>40% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/exclusive-tangail-half-silk-nokshi-pair-with-khesh-saree-by-jahangir-textile---comfortable-and-suitable-for-all-seasons-67">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740464688-511e3ae803d9996b0c734ab1d7bb3d32.jpg_720x720q80.jpg_.webp"
                              alt="Exclusive Tangail Half Silk Nokshi Pair With Khesh Saree by Jahangir Textile - Comfortable and Suitable for All Seasons"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/exclusive-tangail-half-silk-nokshi-pair-with-khesh-saree-by-jahangir-textile---comfortable-and-suitable-for-all-seasons-67">
                              Exclusive Tangail Half Silk Nokshi Pair With Khesh Saree by Jahangir Textile - C...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 750</del>
                              ৳ 450
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="67"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>29% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/tangail-tan-half-silk-nokshi-saree-%E2%80%93-black-and-blue,-all-seasons-66">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740464162-74a5a3e5a799857a2289261597f438ae.jpg_720x720q80.jpg_.webp" alt="Tangail Tan Half-Silk Nokshi Saree – Black and Blue, All Seasons" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/tangail-tan-half-silk-nokshi-saree-%E2%80%93-black-and-blue,-all-seasons-66">Tangail Tan Half-Silk Nokshi Saree – Black and Blue, All Seasons</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1740</del>
                              ৳ 1240
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="66"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>14% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/chic-&amp;-practical:-unveiling-the-perfect-lady-shoulder-bag-64">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740463502-db0ca86ea75abdc74d1a95cf04d1ec45.jpg" alt="Chic &amp; Practical: Unveiling the Perfect Lady Shoulder Bag" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/chic-&amp;-practical:-unveiling-the-perfect-lady-shoulder-bag-64">Chic &amp; Practical: Unveiling the Perfect Lady Shoulder Bag</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1800</del>
                              ৳ 1550
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="64" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>12% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/topllc-women-simply-fashion-bag-strap-messenger-shoulder-bag-mobile-phone-bag-63">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740463384-0ba784c1-3122-4f48-92fc-15a95343cf8a.55adff8af09acea4cee7645b340f83f4.webp"
                              alt="TopLLC Women Simply Fashion Bag Strap Messenger Shoulder Bag Mobile Phone Bag"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/topllc-women-simply-fashion-bag-strap-messenger-shoulder-bag-mobile-phone-bag-63">TopLLC Women Simply Fashion Bag Strap Messenger Shoulder Bag Mobile Phone Bag</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1300</del>
                              ৳ 1150
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="63" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>29% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/embroidery-georgette-4-pcs-with-stone-work-for-women-62">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740463364-168ffc4204ae53edcefedef63c647570.jpg_720x720q80.jpg_.webp" alt="Embroidery georgette 4 pcs with stone work for women" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/embroidery-georgette-4-pcs-with-stone-work-for-women-62">Embroidery georgette 4 pcs with stone work for women</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1260</del>
                              ৳ 890
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="62"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>13% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/ready-stock-micole-sb2963-casual-women%27s-sling-bag-crossbody-shoulder-bags-handbag-travel-beg-61">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740463310-3yprafvf66e52699ef32f_1726293658.jpg" alt="Ready Stock MICOLE SB2963 Casual Women's Sling Bag Crossbody Shoulder Bags Handbag Travel Beg" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/ready-stock-micole-sb2963-casual-women%27s-sling-bag-crossbody-shoulder-bags-handbag-travel-beg-61">
                              Ready Stock MICOLE SB2963 Casual Women's Sling Bag Crossbody Shoulder Bags Handb...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1150</del>
                              ৳ 999
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="61" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>14% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/2024-bolso-marca-women-hands-beg-fashion-ladies-shoulder-handbags-wholesale-china-trend-women-60">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740463229-638703021962470000.jpeg" alt="2024 Bolso Marca Women Hands Beg Fashion Ladies Shoulder Handbags Wholesale China Trend Women" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/2024-bolso-marca-women-hands-beg-fashion-ladies-shoulder-handbags-wholesale-china-trend-women-60">
                              2024 Bolso Marca Women Hands Beg Fashion Ladies Shoulder Handbags Wholesale Chin...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1450</del>
                              ৳ 1250
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="60" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>8% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/disney-2024-latest-trend-pu-leather-stylish-fashionable-bag-for-women-and-girls|-back-pack-59">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740462927-s3a2076c5cd794cd490ae6411f16fd10ch.jpg_720x720q80.jpg_.webp"
                              alt="Disney 2024 Latest Trend Pu Leather Stylish Fashionable Bag for Women and Girls| Back pack"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/disney-2024-latest-trend-pu-leather-stylish-fashionable-bag-for-women-and-girls|-back-pack-59">
                              Disney 2024 Latest Trend Pu Leather Stylish Fashionable Bag for Women and Girls|...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 600</del>
                              ৳ 550
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="59" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>26% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/men%27s-large-size-cloth-shoes-breathable-pointed-point-canvas-formal-work-shoes-business-casual-shoes-58">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740462621-sbbf94e500df54969b129f731bc1caa435.jpg_720x720q80.jpg_.webp"
                              alt="Men's large size cloth shoes Breathable pointed point canvas formal work shoes business casual shoes"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/men%27s-large-size-cloth-shoes-breathable-pointed-point-canvas-formal-work-shoes-business-casual-shoes-58">
                              Men's large size cloth shoes Breathable pointed point canvas formal work shoes b...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1350</del>
                              ৳ 999
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="58"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>27% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/screen-print-japani-silk-saree-for-women---traditional-design-70">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740465645-e04d9b51902e1da3e67121f42ce6aafe.jpg_720x720q80.jpg_.webp" alt="Screen Print Japani Silk Saree for Women - Traditional Design" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/screen-print-japani-silk-saree-for-women---traditional-design-70">Screen Print Japani Silk Saree for Women - Traditional Design</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1750</del>
                              ৳ 1280
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="70"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>30% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/sirajganj-half-silk-katan-saree---traditional-style,-multiple-colors,-premium-quality-69">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740465254-97f1a319f20890be1714b74709f91579.jpg_720x720q80.jpg_.webp"
                              alt="Sirajganj Half-Silk Katan Saree - Traditional Style, Multiple Colors, Premium Quality"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/sirajganj-half-silk-katan-saree---traditional-style,-multiple-colors,-premium-quality-69">
                              Sirajganj Half-Silk Katan Saree - Traditional Style, Multiple Colors, Premium Qu...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 890</del>
                              ৳ 620
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="69"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned active" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>36% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/tangail-half-silk-golden-saree-for-women---available-in-multiple-colors-68">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740464972-25b05238d40a203cbc6ccaad94c09ec5.jpg_720x720q80.jpg_.webp" alt="Tangail Half Silk Golden Saree for Women - Available in Multiple Colors" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/tangail-half-silk-golden-saree-for-women---available-in-multiple-colors-68">Tangail Half Silk Golden Saree for Women - Available in Multiple Colors</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 550</del>
                              ৳ 350
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="68"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>40% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/exclusive-tangail-half-silk-nokshi-pair-with-khesh-saree-by-jahangir-textile---comfortable-and-suitable-for-all-seasons-67">
                            <img
                              src="http://localhost/sell-pixer/public/uploads/product/1740464688-511e3ae803d9996b0c734ab1d7bb3d32.jpg_720x720q80.jpg_.webp"
                              alt="Exclusive Tangail Half Silk Nokshi Pair With Khesh Saree by Jahangir Textile - Comfortable and Suitable for All Seasons"
                            />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/exclusive-tangail-half-silk-nokshi-pair-with-khesh-saree-by-jahangir-textile---comfortable-and-suitable-for-all-seasons-67">
                              Exclusive Tangail Half Silk Nokshi Pair With Khesh Saree by Jahangir Textile - C...
                            </a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 750</del>
                              ৳ 450
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="67"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>29% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/tangail-tan-half-silk-nokshi-saree-%E2%80%93-black-and-blue,-all-seasons-66">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740464162-74a5a3e5a799857a2289261597f438ae.jpg_720x720q80.jpg_.webp" alt="Tangail Tan Half-Silk Nokshi Saree – Black and Blue, All Seasons" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/tangail-tan-half-silk-nokshi-saree-%E2%80%93-black-and-blue,-all-seasons-66">Tangail Tan Half-Silk Nokshi Saree – Black and Blue, All Seasons</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1740</del>
                              ৳ 1240
                            </p>
                          </div>
                          <div class="pro_btn">
                            <button class="variable-modal" data-id="66"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item cloned" style="width: 227.2px; margin-right: 10px;">
                    <div class="product_item wist_item">
                      <div class="product_item_inner">
                        <div class="discount">
                          <p>14% Discount</p>
                        </div>
                        <div class="pro_img">
                          <a href="http://localhost/sell-pixer/product/chic-&amp;-practical:-unveiling-the-perfect-lady-shoulder-bag-64">
                            <img src="http://localhost/sell-pixer/public/uploads/product/1740463502-db0ca86ea75abdc74d1a95cf04d1ec45.jpg" alt="Chic &amp; Practical: Unveiling the Perfect Lady Shoulder Bag" />
                          </a>
                        </div>
                        <div class="pro_des">
                          <div class="pro_name">
                            <a href="http://localhost/sell-pixer/product/chic-&amp;-practical:-unveiling-the-perfect-lady-shoulder-bag-64">Chic &amp; Practical: Unveiling the Perfect Lady Shoulder Bag</a>
                          </div>
                          <div class="pro_price">
                            <p>
                              <del>৳ 1800</del>
                              ৳ 1550
                            </p>
                          </div>
                          <div class="pro_btn">
                            <div class="cart_btn">
                              <form action="http://localhost/sell-pixer/cart/store" method="POST">
                                <input type="hidden" name="_token" value="jb3o6SGHhMAGVuf8bkSGqW0HNc3JXpRWijjPaaJt" autocomplete="off" /> <input type="hidden" name="id" value="64" />
                                <button type="submit"><i class="fa-solid fa-shopping-cart"></i> Order Now</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
              </div>
              <div class="owl-dots disabled"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <div class="home-category mt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="category-title">
                        <h3>Brands</h3>
                    </div>
                    <div class="category-slider owl-carousel">
                        @foreach($brands as $key=>$value)
                        <div class="brand-item">
                            <a href="{{route('brand',$value->slug)}}">
                                <img src="{{asset('public/'.$value->image)}}" alt="">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-gap"></div>

@endsection
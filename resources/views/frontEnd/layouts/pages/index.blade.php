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
                            <a href="{{route('category',$value->slug)}}">
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
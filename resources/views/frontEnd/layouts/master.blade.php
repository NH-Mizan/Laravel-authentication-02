<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title')</title>
  <!-- App favicon -->
  <link rel="shortcut icon" href="" alt="Websolution IT" />
  <meta name="author" content="Websolution IT" />
  <link rel="canonical" href="{{ asset('public/' . $generalsetting->favicon)}}" />
  @stack('seo') @stack('css')
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/animate.css') }}" />
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/all.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.theme.default.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/mobile-menu.css') }}" />
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/select2.min.css') }}" />
  <!-- toastr css -->
  <link rel="stylesheet" href="{{ asset('public/backEnd/') }}/assets/css/toastr.min.css" />
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/wsit-menu.css') }}" />
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/style.css?v=1.0.3') }}" />
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/responsive.css?v=1.0.2') }}" />
  <script src="{{ asset('public/frontEnd/js/jquery-3.7.1.min.js') }}"></script>



</head>

<body class="gotop">
  <div class="coupon-section alert alert-dismissible fade show">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="coupon-code">
            <p>
              Get 10 Tk Discount use the coupon code <span id="couponCode">offer10</span>
              <button onclick="copyCouponCode()"><i class="fas fa-copy"></i></button>
            </p>
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <div class="mobile-menu">
    <div class="mobile-menu-logo">
      <div class="logo-image">
        <img src="{{ asset('public/' . $generalsetting->dark_logo)}}" alt="" />
      </div>
      <div class="mobile-menu-close">
        <i class="fa fa-times"></i>
      </div>
    </div>
    <ul class="first-nav">
      <li class="parent-category">
        <a href="" class="menu-category-name">
          <img src="" alt=""
            class="side_cat_img" />
          Mens Fashion
        </a>
        <span class="menu-category-toggle">
          <i class="fa fa-caret-down"></i>
        </span>
        <ul class="second-nav" style="display: none;">
          <li class="parent-subcategory">
            <a href="" class="menu-subcategory-name">Clothing</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/t-shirt"
              class="menu-childcategory-name">T-Shirt</a></li>
          

    </ul>
    <div class="mobilemenu-bottom">
      <ul>
        <li class="for_order">
          <a href="http://localhost/sell-pixer/customer/login">Login / Sign Up</a>
        </li>
        <li>
          <a href="http://localhost/sell-pixer/customer/order-track"> Order Track </a>
        </li>
        <li>
          <a href="http://localhost/sell-pixer/site/contact-us">Contact Us </a>
        </li>
      </ul>
    </div>
  </div>
  <header id="navbar_top">
    <!-- mobile header start -->
    <div class="mobile-header sticky">
      <div class="mobile-logo">
        <div class="menu-bar">
          <a class="toggle">
            <i class="fa-solid fa-bars"></i>
          </a>
        </div>
        <div class="menu-logo">
          <a href="http://localhost/sell-pixer"><img src="{{ asset('public/' . $generalsetting->dark_logo) }}"
              alt="" /></a>
        </div>
        <div class="menu-bag">
          <a href="http://localhost/sell-pixer/customer/checkout" class="margin-shopping">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="mobilecart-qty">0</span>
          </a>
        </div>
      </div>
    </div>
    <div class="mobile-search main-search">
      <form action="http://localhost/sell-pixer/search">
        <button>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-search">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </button>
        <input type="text" placeholder="Search Product..." class="search_keyword search_click" name="keyword" />
      </form>
      <div class="search_result"></div>
    </div>
    <!-- mobile header end -->

    <!-- main header start -->
    <div class="main-header">
      <div class="logo-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="logo-header">
                <div class="main-logo">
                  <a href="http://localhost/sell-pixer"><img src="{{ asset('public/' . $generalsetting->dark_logo) }}"
                      alt="" /></a>
                </div>
                <div class="main-search">
                  <form action="http://localhost/sell-pixer/search">
                    <button>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                      </svg>
                    </button>
                    <input type="text" placeholder="Search Product..." class="msearch_keyword msearch_click"
                      name="keyword" />
                  </form>
                  <div class="search_result"></div>
                </div>
                <div class="header-list-items">
                  <ul>
                    <li class="track_btn">
                      <a href="http://localhost/sell-pixer/customer/order-track"> <i class="fa fa-truck"></i></a>
                    </li>
                    <li class="for_order">
                      <p>
                        <a href="http://localhost/sell-pixer/customer/login">
                          <i class="fa-regular fa-user"></i>
                        </a>
                      </p>
                    </li>

                    <li class="cart-dialog" id="cart-qty">
                      <a href="http://localhost/sell-pixer/customer/checkout">
                        <p class="margin-shopping">
                          <i class="fa-solid fa-cart-shopping"></i>
                          <span>0</span>
                        </p>
                      </a>
                      <div class="cshort-summary">
                        <ul></ul>
                        <p><strong>SubTotal : ৳0.00</strong></p>
                        <a href="http://localhost/sell-pixer/customer/checkout" class="go_cart">Process To Order </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- logo area end -->

      <div class="menu-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="main-menu">
                <ul>
                  <li>
                    <a href="http://localhost/sell-pixer/category/mens-fashion">
                      Mens Fashion
                      <i class="fa-solid fa-angle-down cat_down"></i>
                    </a>
                    <div class="mega_menu">
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/clothing" class="cat-title">
                            Clothing
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/t-shirt">T-Shirt</a>
                        </li>
                        
                      </ul>
                     
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- menu area end -->
    </div>
    <!-- main-header end -->
  </header>
  <div id="content">
    @yield('content')
  </div>
  <!-- content end -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="footer-about">
              <a href="http://localhost/sell-pixer">
                <img src="{{ asset('public/' . $generalsetting->dark_logo) }}" alt="" />
              </a>
               <p>{{ $contact->address }}</p>
                            <p><a href="tel:{{ $contact->hotline }}"
                                    class="footer-hotlint">{{ $contact->hotline }}</a></p>
                            <p><a href="mailto:{{ $contact->hotmail }}"
                                    class="footer-hotlint">{{ $contact->hotmail }}</a></p>
            </div>
          </div>
          <!-- col end -->
          <div class="col-sm-3">
            <div class="footer-menu">
              <ul>
                <li class="title"><a>Useful Link</a></li>
                <li><a href="http://localhost/sell-pixer/page/refund-&amp;-return-policy">Refund &amp; Return Policy</a>
                </li>
                <li><a href="http://localhost/sell-pixer/page/terms-&amp;-conditions">Terms &amp; Conditions</a></li>
                <li><a href="http://localhost/sell-pixer/page/privacy-policy">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <!-- col end -->
          <div class="col-sm-2">
            <div class="footer-menu">
              <ul>
                <li class="title"><a>Customer Link</a></li>
                <li><a href="http://localhost/sell-pixer/customer/register">Register</a></li>
                <li><a href="http://localhost/sell-pixer/customer/login">Login</a></li>
                <li><a href="http://localhost/sell-pixer/customer/forgot-password">Forgot Password?</a></li>
                <li><a href="http://localhost/sell-pixer/site/contact-us">Contact</a></li>
              </ul>
            </div>
          </div>

          <!-- col end -->
          <div class="col-sm-3">
            <div class="footer-menu">
              <ul>
                <li class="title text-center"><a>Follow Us</a></li>
              </ul>
                    <ul class="social_link">
                      @foreach ($socialicons as $value)
                <li>
                  <a href="{{ $value->link }}"><i class="{{ $value->icon }}"></i></a>
                </li>
              @endforeach
                    </ul>
              <ul>
                <li class="title text-center mb-0"><a class="mb-0">Delivery Partner</a></li>
                <li class="delivery-partner">
                  <img src="http://localhost/sell-pixer/public/frontEnd/images/delivery-partner.png" alt="" />
                </li>
              </ul>
            </div>
          </div>
          <!-- col end -->
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright">
              <p>Copyright © 2025 Sell Pixer. All rights reserved. Developed By <a
                  href="https://websolutionit.com">Websolution IT</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--=====-->
  <div class="fixed_whats">
    <a href="https://api.whatsapp.com/send?phone=8801766950986" target="_blank"><i
        class="fa-brands fa-whatsapp"></i></a>
  </div>

  <div class="scrolltop" style="display: none;">
    <div class="scroll">
      <i class="fa fa-angle-up"></i>
    </div>
  </div>

  <!-- /. fixed sidebar -->

  <div id="custom-modal"></div>
  <div id="variable-modal"></div>
  <div id="page-overlay"></div>
  <div id="loading">
    <div class="custom-loader"></div>
  </div>
  <script src="http://localhost/sell-pixer/public/frontEnd/js/bootstrap.min.js"></script>
  <script src="http://localhost/sell-pixer/public/frontEnd/js/owl.carousel.min.js"></script>
  <script src="http://localhost/sell-pixer/public/frontEnd/js/mobile-menu.js"></script>
  <script src="http://localhost/sell-pixer/public/frontEnd/js/wsit-menu.js"></script>
  <script src="http://localhost/sell-pixer/public/frontEnd/js/mobile-menu-init.js"></script>
  <script src="http://localhost/sell-pixer/public/frontEnd/js/wow.min.js"></script>
  <!-- feather icon -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
  <script>
    feather.replace();
  </script>
  <script src="http://localhost/sell-pixer/public/frontEnd/js/script.js"></script>
  <script>
    new WOW().init();
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <script src="http://localhost/sell-pixer/public/backEnd/assets/js/toastr.min.js"></script>
  <script type="text/javascript"></script>
  <script src="http://localhost/sell-pixer/public/frontEnd/js/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function () {
      // main slider
      $(".main_slider").owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        autoplay: true,
        nav: true,
        autoplayHoverPause: false,
        margin: 0,
        mouseDrag: true,
        smartSpeed: 8000,
        autoplayTimeout: 3000,

        navText: ["<i class='fa-solid fa-angle-left'></i>", "<i class='fa-solid fa-angle-right'></i>"],
      });

      $(".category-slider").owlCarousel({
        margin: 15,
        loop: true,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 3,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 7,
          },
        },
      });

      $(".product_slider").owlCarousel({
        margin: 10,
        items: 5,
        loop: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 2,
            nav: false,
          },
          600: {
            items: 5,
            nav: false,
          },
          1000: {
            items: 5,
            nav: false,
          },
        },
      });
    });
  </script>
  <script>
    $(".quick_view").on("click", function () {
      var id = $(this).data("id");
      $("#loading").show();
      if (id) {
        $.ajax({
          type: "GET",
          data: {
            id: id,
          },
          url: "http://localhost/sell-pixer/quick-view",
          success: function (data) {
            if (data) {
              $("#custom-modal").html(data);
              $("#custom-modal").show();
              $("#loading").hide();
              $("#page-overlay").show();
            }
          },
        });
      }
    });
  </script>
  <!-- quick view end -->

  <script>
    $(document).on("click", ".variable-modal", function (e) {
      var id = $(this).data("id");
      $("#loading").show();
      if (id) {
        $.ajax({
          type: "GET",
          data: {
            id: id,
          },
          url: "http://localhost/sell-pixer/variable-view",
          success: function (data) {
            if (data) {
              $("#variable-modal").html(data);
              $("#variable-modal").addClass("show");
              $("#loading").hide();
              $("#page-overlay").show();
              $("body").css("overflow", "hidden");
            }
          },
        });
      }
    });

    $(document).on("click", ".close-variable-button", function (e) {
      $("#page-overlay").hide();
      $("#variable-modal").removeClass("show");
      $("body").css("overflow", "initial");
    });
  </script>
  <!-- cart js start -->
  <script>
    $(".addcartbutton").on("click", function () {
      var id = $(this).data("id");
      var qty = 1;
      if (id) {
        $.ajax({
          cache: "false",
          type: "GET",
          url: "http://localhost/sell-pixer/add-to-cart/" + id + "/" + qty,
          dataType: "json",
          success: function (data) {
            if (data) {
              toastr.success("Success", "Product add to cart successfully");
              return cart_count() + mobile_cart();
            }
          },
        });
      }
    });
    $(".cart_store").on("click", function () {
      var id = $(this).data("id");
      var qty = $(this).parent().find("input").val();
      if (id) {
        $.ajax({
          type: "GET",
          data: {
            id: id,
            qty: qty ? qty : 1,
          },
          url: "http://localhost/sell-pixer/cart/store",
          success: function (data) {
            if (data) {
              toastr.success("Success", "Product add to cart succfully");
              return cart_count() + mobile_cart();
            }
          },
        });
      }
    });

    $(".cart_remove").on("click", function () {
      var id = $(this).data("id");
      if (id) {
        $.ajax({
          type: "GET",
          data: {
            id: id,
          },
          url: "http://localhost/sell-pixer/cart/remove",
          success: function (data) {
            if (data) {
              $(".cartlist").html(data);
              return cart_count() + mobile_cart() + cart_summary();
            }
          },
        });
      }
    });

    $(".cart_increment").on("click", function () {
      var id = $(this).data("id");
      if (id) {
        $.ajax({
          type: "GET",
          data: {
            id: id,
          },
          url: "http://localhost/sell-pixer/cart/increment",
          success: function (data) {
            if (data) {
              $(".cartlist").html(data);
              return cart_count() + mobile_cart();
            }
          },
        });
      }
    });

    $(".cart_decrement").on("click", function () {
      var id = $(this).data("id");
      if (id) {
        $.ajax({
          type: "GET",
          data: {
            id: id,
          },
          url: "http://localhost/sell-pixer/cart/decrement",
          success: function (data) {
            if (data) {
              $(".cartlist").html(data);
              return cart_count() + mobile_cart();
            }
          },
        });
      }
    });

    function cart_count() {
      $.ajax({
        type: "GET",
        url: "http://localhost/sell-pixer/cart/count",
        success: function (data) {
          if (data) {
            $("#cart-qty").html(data);
          } else {
            $("#cart-qty").empty();
          }
        },
      });
    }

    function mobile_cart() {
      $.ajax({
        type: "GET",
        url: "http://localhost/sell-pixer/mobilecart/count",
        success: function (data) {
          if (data) {
            $(".mobilecart-qty").html(data);
          } else {
            $(".mobilecart-qty").empty();
          }
        },
      });
    }

    function cart_summary() {
      $.ajax({
        type: "GET",
        url: "http://localhost/sell-pixer/shipping-charge",
        dataType: "html",
        success: function (response) {
          $(".cart-summary").html(response);
        },
      });
    }
  </script>
  <!-- cart js end -->
  <script>
    $(".search_click").on("keyup change", function () {
      var keyword = $(".search_keyword").val();
      $.ajax({
        type: "GET",
        data: {
          keyword: keyword,
        },
        url: "http://localhost/sell-pixer/livesearch",
        success: function (products) {
          if (products) {
            $(".search_result").html(products);
          } else {
            $(".search_result").empty();
          }
        },
      });
    });
    $(".msearch_click").on("keyup change", function () {
      var keyword = $(".msearch_keyword").val();
      $.ajax({
        type: "GET",
        data: {
          keyword: keyword,
        },
        url: "http://localhost/sell-pixer/livesearch",
        success: function (products) {
          if (products) {
            $("#loading").hide();
            $(".search_result").html(products);
          } else {
            $(".search_result").empty();
          }
        },
      });
    });
  </script>
  <!-- search js start -->
  <script>
    $(document).ready(function () {
      $(document).on("click", "#variableSubmit", function (e) {
        e.preventDefault();
        var color = $(".variable_color:checked").data("color");
        var size = $(".variable_size:checked").data("size");
        const productId = $(this).data("id");
        $.ajax({
          url: "http://localhost/sell-pixer/ajax-cart-store",
          type: "POST",
          data: {
            _token: $('meta[name="csrf-token"]').attr("content"),
            id: productId,
            color: color,
            size: size,
          },
          success: function (response) {
            if (response.success) {
              toastr.success("Product add to cart succfully", "Success");
              $("#page-overlay").hide();
              $("#variable-modal").hide();
              cart_count();
              mobile_cart();
              window.location.href = "http://localhost/sell-pixer/customer/checkout";
            } else if (!response.success) {
              toastr.error("Product stock over", "Sorry");
            } else {
              console.log(response.message || "Failed to update cart");
            }
          },
          error: function () {
            console.log("An error occurred while updating the cart.");
          },
        });
      });
    });
  </script>
  <script>
    $(document).on("click", ".ajax-stock-check", function (e) {
      var color = $(".variable_color:checked").data("color");
      var size = $(".variable_size:checked").data("size");
      var id = $("#variableSubmit").data("id");

      if (id) {
        $.ajax({
          type: "GET",
          data: {
            id: id,
            color: color,
            size: size,
          },
          url: "http://localhost/sell-pixer/stock-check",
          dataType: "json",
          success: function (response) {
            if (response.status && response.product.stock > 0) {
              $(".variable-submit").prop("disabled", false);
            } else {
              toastr.warning("Please select another color or size");
              $(".variable-submit").prop("disabled", true);
            }
          },
        });
      }
    });
  </script>
  <script>
    $(".district").on("change", function () {
      var id = $(this).val();
      $.ajax({
        type: "GET",
        data: {
          id: id,
        },
        url: "http://localhost/sell-pixer/districts",
        success: function (res) {
          if (res) {
            $(".area").empty();
            $(".area").append('<option value="">Select..</option>');
            $.each(res, function (key, value) {
              $(".area").append('<option value="' + key + '" >' + value + "</option>");
            });
          } else {
            $(".area").empty();
          }
        },
      });
    });
  </script>
  <script>
    $(".toggle").on("click", function () {
      $("#page-overlay").show();
      $(".mobile-menu").addClass("active");
    });

    $("#page-overlay").on("click", function () {
      $("#page-overlay").hide();
      $(".mobile-menu").removeClass("active");
      $(".feature-products").removeClass("active");
      $("#variable-modal").removeClass("show");
      $("body").css("overflow", "initial");
    });

    $(".mobile-menu-close").on("click", function () {
      $("#page-overlay").hide();
      $(".mobile-menu").removeClass("active");
    });

    $(".mobile-filter-toggle").on("click", function () {
      $("#page-overlay").show();
      $(".feature-products").addClass("active");
    });
  </script>
  <script>
    $(document).ready(function () {
      $(".parent-category").each(function () {
        const menuCatToggle = $(this).find(".menu-category-toggle");
        const secondNav = $(this).find(".second-nav");

        menuCatToggle.on("click", function () {
          menuCatToggle.toggleClass("active");
          secondNav.slideToggle("fast");
          $(this).closest(".parent-category").toggleClass("active");
        });
      });
      $(".parent-subcategory").each(function () {
        const menuSubcatToggle = $(this).find(".menu-subcategory-toggle");
        const thirdNav = $(this).find(".third-nav");

        menuSubcatToggle.on("click", function () {
          menuSubcatToggle.toggleClass("active");
          thirdNav.slideToggle("fast");
          $(this).closest(".parent-subcategory").toggleClass("active");
        });
      });
    });
  </script>

  <script>
    var menu = new MmenuLight(document.querySelector("#menu"), "all");

    var navigator = menu.navigation({
      selectedClass: "Selected",
      slidingSubmenus: true,
      // theme: 'dark',
      title: "ক্যাটাগরি",
    });

    var drawer = menu.offcanvas({
      // position: 'left'
    });
    document.querySelector('a[href="#menu"]').addEventListener("click", (evnt) => {
      evnt.preventDefault();
      drawer.open();
    });
  </script>

  <script>
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $(".scrolltop:hidden").stop(true, true).fadeIn();
      } else {
        $(".scrolltop").stop(true, true).fadeOut();
      }
    });
    $(function () {
      $(".scroll").click(function () {
        $("html,body").animate(
          {
            scrollTop: $(".gotop").offset().top,
          },
          "1000"
        );
        return false;
      });
    });
  </script>
  <script>
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 100) {
        $(".logo-area").addClass("fixed-top");
        $(".mobile-menu").addClass("fixed-top");
        $(".mobile-header").addClass("fixed-top");
      } else {
        $(".logo-area").removeClass("fixed-top");
        $(".mobile-menu").removeClass("fixed-top");
        $(".mobile-header").removeClass("fixed-top");
      }
    });
  </script>
  <script>
    $(".filter_btn").click(function () {
      $(".filter_sidebar").addClass("active");
      $("body").css("overflow-y", "hidden");
    });
    $(".filter_close").click(function () {
      $(".filter_sidebar").removeClass("active");
      $("body").css("overflow-y", "auto");
    });
  </script>

  <script>
    $(document).ready(function () {
      $(".logoslider").owlCarousel({
        margin: 0,
        loop: true,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 6000,
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        smartSpeed: 3000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false,
            dots: false,
          },
          600: {
            items: 1,
            nav: false,
            dots: false,
          },
          1000: {
            items: 1,
            nav: false,
            loop: true,
            dots: false,
          },
        },
      });
    });
  </script>
  <script src="http://localhost/sell-pixer/public/frontEnd/js/owl.carousel.min.js"></script>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHQVQ3N5" height="0" width="0"
      style="display: none; visibility: hidden;"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <script>
    function copyCouponCode() {
      var couponCode = document.getElementById("couponCode").innerText;
      var tempInput = document.createElement("input");
      tempInput.value = couponCode;
      document.body.appendChild(tempInput);
      tempInput.select();
      tempInput.setSelectionRange(0, 99999);
      document.execCommand("copy");
      document.body.removeChild(tempInput);
      toastr.success("Coupon Code copied successfully!");
    }
  </script>
</body>


</html>
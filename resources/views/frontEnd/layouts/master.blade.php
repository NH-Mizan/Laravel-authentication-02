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
        <a href="http://localhost/sell-pixer/category/mens-fashion" class="menu-category-name">
          <img src="http://localhost/sell-pixer/public/uploads/category/1729870308-men-fashion.webp" alt=""
            class="side_cat_img" />
          Mens Fashion
        </a>
        <span class="menu-category-toggle">
          <i class="fa fa-caret-down"></i>
        </span>
        <ul class="second-nav" style="display: none;">
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/clothing" class="menu-subcategory-name">Clothing</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/t-shirt"
              class="menu-childcategory-name">T-Shirt</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/polo-shirt"
              class="menu-childcategory-name">Polo Shirt</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/shirt"
              class="menu-childcategory-name">Shirt</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/jeans"
              class="menu-childcategory-name">Jeans</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/panjabi"
              class="menu-childcategory-name">Panjabi</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/y-cloth"
              class="menu-childcategory-name">Y-cloth</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/shoes" class="menu-subcategory-name">Shoes</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/formal-shoes"
              class="menu-childcategory-name">Formal Shoes</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/loafer"
              class="menu-childcategory-name">Loafer</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/sneakers"
              class="menu-childcategory-name">Sneakers</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/casual-shoes"
              class="menu-childcategory-name">Casual Shoes</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/sandals"
              class="menu-childcategory-name">Sandals</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/accessories" class="menu-subcategory-name">Accessories</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/hats-&amp;-caps"
              class="menu-childcategory-name">Hats &amp; Caps</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/ties"
              class="menu-childcategory-name">Ties</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/belt-&amp;-wallet"
              class="menu-childcategory-name">Belt &amp; Wallet</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/watches" class="menu-subcategory-name">Watches</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/metal-chain"
              class="menu-childcategory-name">Metal Chain</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/leather-strap"
              class="menu-childcategory-name">Leather Strap</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/sunthetic-strap"
              class="menu-childcategory-name">Sunthetic Strap</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/original-brand"
              class="menu-childcategory-name">Original Brand</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/smart-watch"
              class="menu-childcategory-name">Smart Watch</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/eyewear" class="menu-subcategory-name">Eyewear</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/eyeglasses"
              class="menu-childcategory-name">Eyeglasses</a></li>
        </ul>
      </li>
      <li class="parent-category">
        <a href="http://localhost/sell-pixer/category/womens-fashion" class="menu-category-name">
          <img src="http://localhost/sell-pixer/public/uploads/category/1729870638-womens-fashion.webp" alt=""
            class="side_cat_img" />
          Womens Fashion
        </a>
        <span class="menu-category-toggle">
          <i class="fa fa-caret-down"></i>
        </span>
        <ul class="second-nav" style="display: none;">
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/bags" class="menu-subcategory-name">Bags</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/hand-bag"
              class="menu-childcategory-name">Hand Bag</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/party-bag"
              class="menu-childcategory-name">Party Bag</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/leather-bag"
              class="menu-childcategory-name">Leather Bag</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/wallet"
              class="menu-childcategory-name">Wallet</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/purse"
              class="menu-childcategory-name">Purse</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/watches" class="menu-subcategory-name">Watches</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/metal-chain"
              class="menu-childcategory-name">Metal Chain</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/leather-strap"
              class="menu-childcategory-name">Leather Strap</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/original-brand"
              class="menu-childcategory-name">Original Brand</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/salwar-kameez" class="menu-subcategory-name">Salwar
              Kameez</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/unstitched"
              class="menu-childcategory-name">Unstitched</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/readymade"
              class="menu-childcategory-name">ReadyMade</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/replica"
              class="menu-childcategory-name">Replica</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/deshi-boutique"
              class="menu-childcategory-name">Deshi Boutique</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/lawn"
              class="menu-childcategory-name">Lawn</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/womens-sharee" class="menu-subcategory-name">womens
              Sharee</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/cotton"
              class="menu-childcategory-name">Cotton</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/painted-sharee"
              class="menu-childcategory-name">Painted Sharee</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/tangail"
              class="menu-childcategory-name">Tangail</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/taant"
              class="menu-childcategory-name">Taant</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/kota"
              class="menu-childcategory-name">Kota</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/jewellery" class="menu-subcategory-name">Jewellery</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/ring"
              class="menu-childcategory-name">Ring</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/earrings"
              class="menu-childcategory-name">EarRings</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/bracelet"
              class="menu-childcategory-name">Bracelet</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/necklace"
              class="menu-childcategory-name">Necklace</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/shoes" class="menu-subcategory-name">Shoes</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/heels"
              class="menu-childcategory-name">Heels</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/pump-shoes"
              class="menu-childcategory-name">Pump Shoes</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/sneakers"
              class="menu-childcategory-name">Sneakers</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/flats"
              class="menu-childcategory-name">Flats</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/innerwear" class="menu-subcategory-name">Innerwear</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/bras"
              class="menu-childcategory-name">Bras</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/panties"
              class="menu-childcategory-name">Panties</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/lingerie-sets"
              class="menu-childcategory-name">Lingerie Sets</a></li>
        </ul>
      </li>
      <li class="parent-category">
        <a href="http://localhost/sell-pixer/category/cosmetics" class="menu-category-name">
          <img src="http://localhost/sell-pixer/public/uploads/category/1729870761-cosmetics.webp" alt=""
            class="side_cat_img" />
          Cosmetics
        </a>
        <span class="menu-category-toggle">
          <i class="fa fa-caret-down"></i>
        </span>
        <ul class="second-nav" style="display: none;">
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/personal-care" class="menu-subcategory-name">Personal
              Care</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/sanitary-napkin"
              class="menu-childcategory-name">Sanitary Napkin</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/toothpaste"
              class="menu-childcategory-name">Toothpaste</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/cleaning"
              class="menu-childcategory-name">Cleaning</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/fragrances" class="menu-subcategory-name">Fragrances</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/perfumed"
              class="menu-childcategory-name">Perfumed</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/men%27s-body"
              class="menu-childcategory-name">Men's Body</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/women%27s-body-spray"
              class="menu-childcategory-name">Women's Body Spray</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/haire-care" class="menu-subcategory-name">Haire Care</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/hair-styler"
              class="menu-childcategory-name">Hair Styler</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/conditioner"
              class="menu-childcategory-name">Conditioner</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/shampoo"
              class="menu-childcategory-name">Shampoo</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/haire-oil"
              class="menu-childcategory-name">Haire Oil</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/haire-color"
              class="menu-childcategory-name">Haire Color</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/haire-brush"
              class="menu-childcategory-name">Haire brush</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/man%27s-care" class="menu-subcategory-name">Man's Care</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/body-and-skin-care"
              class="menu-childcategory-name">Body and Skin Care</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/hair-care"
              class="menu-childcategory-name">Hair Care</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/aftershave-&amp;-foam"
              class="menu-childcategory-name">Aftershave &amp; Foam</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/skin-care" class="menu-subcategory-name">Skin Care</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/body-lotion"
              class="menu-childcategory-name">Body Lotion</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/soap-&amp;-body-wash"
              class="menu-childcategory-name">Soap &amp; Body Wash</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/face-wash"
              class="menu-childcategory-name">Face Wash</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/cream"
              class="menu-childcategory-name">Cream</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/talcum-powder"
              class="menu-childcategory-name">Talcum Powder</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/face-mask-&amp;-packs"
              class="menu-childcategory-name">Face Mask &amp; Packs</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/makeup" class="menu-subcategory-name">Makeup</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/lips"
              class="menu-childcategory-name">Lips</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/face"
              class="menu-childcategory-name">Face</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/nails"
              class="menu-childcategory-name">Nails</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/makeup-palettes-&amp;-sets"
              class="menu-childcategory-name">Makeup Palettes &amp; Sets</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/makeup-removers"
              class="menu-childcategory-name">Makeup Removers</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/body-&amp;-massage-oils" class="menu-subcategory-name">Body
              &amp; Massage Oils</a>
          </li>
        </ul>
      </li>
      <li class="parent-category">
        <a href="http://localhost/sell-pixer/category/gadgets" class="menu-category-name">
          <img src="http://localhost/sell-pixer/public/uploads/category/1729870905-gadgets.webp" alt=""
            class="side_cat_img" />
          Gadgets
        </a>
        <span class="menu-category-toggle">
          <i class="fa fa-caret-down"></i>
        </span>
        <ul class="second-nav" style="display: none;">
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/head-phones" class="menu-subcategory-name">Head Phones</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/mpod-earbuds"
              class="menu-childcategory-name">MPod Earbuds</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/tws-earbuds"
              class="menu-childcategory-name">TWS Earbuds</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/air-series"
              class="menu-childcategory-name">Air Series</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/earphone"
              class="menu-childcategory-name">Earphone</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/neckband"
              class="menu-childcategory-name">Neckband</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/mobile-accessories" class="menu-subcategory-name">Mobile
              Accessories</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/smart-phone"
              class="menu-childcategory-name">Smart Phone</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/tablet"
              class="menu-childcategory-name">Tablet</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/adapter"
              class="menu-childcategory-name">Adapter</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/powerbank"
              class="menu-childcategory-name">Powerbank</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/cable"
              class="menu-childcategory-name">Cable</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/charger"
              class="menu-childcategory-name">Charger</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/computer-accessories"
              class="menu-subcategory-name">Computer Accessories</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/laptop"
              class="menu-childcategory-name">Laptop</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/desktop"
              class="menu-childcategory-name">Desktop</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/monitor"
              class="menu-childcategory-name">Monitor</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/keyboard"
              class="menu-childcategory-name">Keyboard</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/mouse"
              class="menu-childcategory-name">Mouse</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/portable-speaker"
              class="menu-childcategory-name">Portable Speaker</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/speaker-microphone" class="menu-subcategory-name">Speaker/
              Microphone</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/bluetooth-speaker"
              class="menu-childcategory-name">Bluetooth Speaker</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/smart-speaker"
              class="menu-childcategory-name">Smart Speaker</a></li>
        </ul>
      </li>
      <li class="parent-category">
        <a href="http://localhost/sell-pixer/category/grocery" class="menu-category-name">
          <img src="http://localhost/sell-pixer/public/uploads/category/1729871263-grocery.webp" alt=""
            class="side_cat_img" />
          Grocery
        </a>
        <span class="menu-category-toggle">
          <i class="fa fa-caret-down"></i>
        </span>
        <ul class="second-nav" style="display: none;">
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/fruits,-meat-&amp;-frozen"
              class="menu-subcategory-name">Fruits, Meat &amp; Frozen</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/fruits"
              class="menu-childcategory-name">Fruits</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/vegetables"
              class="menu-childcategory-name">Vegetables</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/fish"
              class="menu-childcategory-name">Fish</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/meat"
              class="menu-childcategory-name">Meat</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/snacks-&amp;-beverages"
              class="menu-subcategory-name">Snacks &amp; Beverages</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/noodles"
              class="menu-childcategory-name">Noodles</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/coffee"
              class="menu-childcategory-name">Coffee</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/dry-fruits"
              class="menu-childcategory-name">Dry Fruits</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/tea"
              class="menu-childcategory-name">Tea</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/cofee"
              class="menu-childcategory-name">Cofee</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/dairy-&amp;-eggs" class="menu-subcategory-name">Dairy &amp;
              Eggs</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/uht-milk"
              class="menu-childcategory-name">UHT Milk</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/milk-powder"
              class="menu-childcategory-name">Milk Powder</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/milk-powder"
              class="menu-childcategory-name">Milk Powder</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/condensed-milk"
              class="menu-childcategory-name">Condensed Milk</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/herbs,-spices-&amp;-sauces"
              class="menu-subcategory-name">Herbs, Spices &amp; Sauces</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/spices"
              class="menu-childcategory-name">Spices</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/cooking-sauce"
              class="menu-childcategory-name">Cooking Sauce</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/ready-mix"
              class="menu-childcategory-name">Ready Mix</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/shemai-&amp;-suji"
              class="menu-childcategory-name">Shemai &amp; Suji</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/cooking" class="menu-subcategory-name">Cooking</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/rice"
              class="menu-childcategory-name">Rice</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/oil"
              class="menu-childcategory-name">Oil</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/salt"
              class="menu-childcategory-name">Salt</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/sugar"
              class="menu-childcategory-name">Sugar</a></li>
        </ul>
      </li>
      <li class="parent-category">
        <a href="http://localhost/sell-pixer/category/home-&amp;-lifestyle" class="menu-category-name">
          <img src="http://localhost/sell-pixer/public/uploads/category/1729957138-home-lifestyle.webp" alt=""
            class="side_cat_img" />
          Home &amp; Lifestyle
        </a>
        <span class="menu-category-toggle">
          <i class="fa fa-caret-down"></i>
        </span>
        <ul class="second-nav" style="display: none;">
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/kitchen-&amp;-dining" class="menu-subcategory-name">Kitchen
              &amp; Dining</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/crockeries"
              class="menu-childcategory-name">Crockeries</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/rice-cooker"
              class="menu-childcategory-name">Rice Cooker</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/pressure-cooker"
              class="menu-childcategory-name">Pressure Cooker</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/cookware-set"
              class="menu-childcategory-name">Cookware-Set</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/blender-and-juice-maker"
              class="menu-childcategory-name">Blender and Juice Maker</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/cleaning" class="menu-subcategory-name">Cleaning</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/brooms,-mops-&amp;-sweepers"
              class="menu-childcategory-name">Brooms, Mops &amp; Sweepers</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/cleaning-buckets-&amp;-tubs"
              class="menu-childcategory-name">Cleaning Buckets &amp; Tubs</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/cleaning-gloves"
              class="menu-childcategory-name">Cleaning Gloves</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/bedding" class="menu-subcategory-name">Bedding</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/bedding-sets"
              class="menu-childcategory-name">Bedding Sets</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/bed-sheets"
              class="menu-childcategory-name">Bed Sheets</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/mattress-protectors"
              class="menu-childcategory-name">Mattress Protectors</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/electric-blankets"
              class="menu-childcategory-name">Electric Blankets</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/bath" class="menu-subcategory-name">Bath</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/bath-mats"
              class="menu-childcategory-name">Bath Mats</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/bath-towels"
              class="menu-childcategory-name">Bath Towels</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/bathrobes"
              class="menu-childcategory-name">Bathrobes</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/bathroom-mirrors"
              class="menu-childcategory-name">Bathroom Mirrors</a></li>

          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/furniture" class="menu-subcategory-name">Furniture</a>
          </li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/bedroom-furniture"
              class="menu-childcategory-name">Bedroom Furniture</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/kitchen-&amp;-dining-furniture"
              class="menu-childcategory-name">Kitchen &amp; Dining Furniture</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/living-room-furniture"
              class="menu-childcategory-name">Living Room Furniture</a></li>
          <li class="childcategory"><a href="http://localhost/sell-pixer/products/home-office-furniture"
              class="menu-childcategory-name">Home Office Furniture</a></li>
        </ul>
      </li>
      <li class="parent-category">
        <a href="http://localhost/sell-pixer/category/eid-collection" class="menu-category-name">
          <img src="http://localhost/sell-pixer/public/uploads/category/1740459837-eid-collection.webp" alt=""
            class="side_cat_img" />
          Eid Collection
        </a>
        <span class="menu-category-toggle">
          <i class="fa fa-caret-down"></i>
        </span>
        <ul class="second-nav" style="display: none;">
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/panjabi" class="menu-subcategory-name">Panjabi</a>
          </li>
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/3-piece" class="menu-subcategory-name">3 piece</a>
          </li>
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/sharee" class="menu-subcategory-name">Sharee</a>
          </li>
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/mens-shoes" class="menu-subcategory-name">Mens Shoes</a>
          </li>
          <li class="parent-subcategory">
            <a href="http://localhost/sell-pixer/subcategory/women-bags" class="menu-subcategory-name">Women Bags</a>
          </li>
        </ul>
      </li>
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
                        <li>
                          <a href="http://localhost/sell-pixer/products/polo-shirt">Polo Shirt</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/shirt">Shirt</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/jeans">Jeans</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/panjabi">Panjabi</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/y-cloth">Y-cloth</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/shoes" class="cat-title">
                            Shoes
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/formal-shoes">Formal Shoes</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/loafer">Loafer</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/sneakers">Sneakers</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/casual-shoes">Casual Shoes</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/sandals">Sandals</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/accessories" class="cat-title">
                            Accessories
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/hats-&amp;-caps">Hats &amp; Caps</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/ties">Ties</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/belt-&amp;-wallet">Belt &amp; Wallet</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/watches" class="cat-title">
                            Watches
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/metal-chain">Metal Chain</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/leather-strap">Leather Strap</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/sunthetic-strap">Sunthetic Strap</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/original-brand">Original Brand</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/smart-watch">Smart Watch</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/eyewear" class="cat-title">
                            Eyewear
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/eyeglasses">Eyeglasses</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="http://localhost/sell-pixer/category/womens-fashion">
                      Womens Fashion
                      <i class="fa-solid fa-angle-down cat_down"></i>
                    </a>
                    <div class="mega_menu">
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/bags" class="cat-title">
                            Bags
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/hand-bag">Hand Bag</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/party-bag">Party Bag</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/leather-bag">Leather Bag</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/wallet">Wallet</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/purse">Purse</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/watches" class="cat-title">
                            Watches
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/metal-chain">Metal Chain</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/leather-strap">Leather Strap</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/original-brand">Original Brand</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/salwar-kameez" class="cat-title">
                            Salwar Kameez
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/unstitched">Unstitched</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/readymade">ReadyMade</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/replica">Replica</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/deshi-boutique">Deshi Boutique</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/lawn">Lawn</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/womens-sharee" class="cat-title">
                            womens Sharee
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/cotton">Cotton</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/painted-sharee">Painted Sharee</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/tangail">Tangail</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/taant">Taant</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/kota">Kota</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/jewellery" class="cat-title">
                            Jewellery
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/ring">Ring</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/earrings">EarRings</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/bracelet">Bracelet</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/necklace">Necklace</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/shoes" class="cat-title">
                            Shoes
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/heels">Heels</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/pump-shoes">Pump Shoes</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/sneakers">Sneakers</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/flats">Flats</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/innerwear" class="cat-title">
                            Innerwear
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/bras">Bras</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/panties">Panties</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/lingerie-sets">Lingerie Sets</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="http://localhost/sell-pixer/category/cosmetics">
                      Cosmetics
                      <i class="fa-solid fa-angle-down cat_down"></i>
                    </a>
                    <div class="mega_menu">
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/personal-care" class="cat-title">
                            Personal Care
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/sanitary-napkin">Sanitary Napkin</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/toothpaste">Toothpaste</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/cleaning">Cleaning</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/fragrances" class="cat-title">
                            Fragrances
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/perfumed">Perfumed</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/men%27s-body">Men's Body</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/women%27s-body-spray">Women's Body Spray</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/haire-care" class="cat-title">
                            Haire Care
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/hair-styler">Hair Styler</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/conditioner">Conditioner</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/shampoo">Shampoo</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/haire-oil">Haire Oil</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/haire-color">Haire Color</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/haire-brush">Haire brush</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/man%27s-care" class="cat-title">
                            Man's Care
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/body-and-skin-care">Body and Skin Care</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/hair-care">Hair Care</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/aftershave-&amp;-foam">Aftershave &amp; Foam</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/skin-care" class="cat-title">
                            Skin Care
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/body-lotion">Body Lotion</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/soap-&amp;-body-wash">Soap &amp; Body Wash</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/face-wash">Face Wash</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/cream">Cream</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/talcum-powder">Talcum Powder</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/face-mask-&amp;-packs">Face Mask &amp; Packs</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/makeup" class="cat-title">
                            Makeup
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/lips">Lips</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/face">Face</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/nails">Nails</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/makeup-palettes-&amp;-sets">Makeup Palettes
                            &amp; Sets</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/makeup-removers">Makeup Removers</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/body-&amp;-massage-oils" class="cat-title">
                            Body &amp; Massage Oils
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="http://localhost/sell-pixer/category/gadgets">
                      Gadgets
                      <i class="fa-solid fa-angle-down cat_down"></i>
                    </a>
                    <div class="mega_menu">
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/head-phones" class="cat-title">
                            Head Phones
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/mpod-earbuds">MPod Earbuds</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/tws-earbuds">TWS Earbuds</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/air-series">Air Series</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/earphone">Earphone</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/neckband">Neckband</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/mobile-accessories" class="cat-title">
                            Mobile Accessories
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/smart-phone">Smart Phone</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/tablet">Tablet</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/adapter">Adapter</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/powerbank">Powerbank</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/cable">Cable</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/charger">Charger</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/computer-accessories" class="cat-title">
                            Computer Accessories
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/laptop">Laptop</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/desktop">Desktop</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/monitor">Monitor</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/keyboard">Keyboard</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/mouse">Mouse</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/portable-speaker">Portable Speaker</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/speaker-microphone" class="cat-title">
                            Speaker/ Microphone
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/bluetooth-speaker">Bluetooth Speaker</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/smart-speaker">Smart Speaker</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="http://localhost/sell-pixer/category/grocery">
                      Grocery
                      <i class="fa-solid fa-angle-down cat_down"></i>
                    </a>
                    <div class="mega_menu">
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/fruits,-meat-&amp;-frozen" class="cat-title">
                            Fruits, Meat &amp; Frozen
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/fruits">Fruits</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/vegetables">Vegetables</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/fish">Fish</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/meat">Meat</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/snacks-&amp;-beverages" class="cat-title">
                            Snacks &amp; Beverages
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/noodles">Noodles</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/coffee">Coffee</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/dry-fruits">Dry Fruits</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/tea">Tea</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/cofee">Cofee</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/dairy-&amp;-eggs" class="cat-title">
                            Dairy &amp; Eggs
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/uht-milk">UHT Milk</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/milk-powder">Milk Powder</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/milk-powder">Milk Powder</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/condensed-milk">Condensed Milk</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/herbs,-spices-&amp;-sauces"
                            class="cat-title">
                            Herbs, Spices &amp; Sauces
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/spices">Spices</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/cooking-sauce">Cooking Sauce</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/ready-mix">Ready Mix</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/shemai-&amp;-suji">Shemai &amp; Suji</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/cooking" class="cat-title">
                            Cooking
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/rice">Rice</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/oil">Oil</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/salt">Salt</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/sugar">Sugar</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="http://localhost/sell-pixer/category/home-&amp;-lifestyle">
                      Home &amp; Lifestyle
                      <i class="fa-solid fa-angle-down cat_down"></i>
                    </a>
                    <div class="mega_menu">
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/kitchen-&amp;-dining" class="cat-title">
                            Kitchen &amp; Dining
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/crockeries">Crockeries</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/rice-cooker">Rice Cooker</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/pressure-cooker">Pressure Cooker</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/cookware-set">Cookware-Set</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/blender-and-juice-maker">Blender and Juice
                            Maker</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/cleaning" class="cat-title">
                            Cleaning
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/brooms,-mops-&amp;-sweepers">Brooms, Mops &amp;
                            Sweepers</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/cleaning-buckets-&amp;-tubs">Cleaning Buckets
                            &amp; Tubs</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/cleaning-gloves">Cleaning Gloves</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/bedding" class="cat-title">
                            Bedding
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/bedding-sets">Bedding Sets</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/bed-sheets">Bed Sheets</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/mattress-protectors">Mattress Protectors</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/electric-blankets">Electric Blankets</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/bath" class="cat-title">
                            Bath
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/bath-mats">Bath Mats</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/bath-towels">Bath Towels</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/bathrobes">Bathrobes</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/bathroom-mirrors">Bathroom Mirrors</a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/furniture" class="cat-title">
                            Furniture
                          </a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/bedroom-furniture">Bedroom Furniture</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/kitchen-&amp;-dining-furniture">Kitchen &amp;
                            Dining Furniture</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/living-room-furniture">Living Room Furniture</a>
                        </li>
                        <li>
                          <a href="http://localhost/sell-pixer/products/home-office-furniture">Home Office Furniture</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="http://localhost/sell-pixer/category/eid-collection">
                      Eid Collection
                      <i class="fa-solid fa-angle-down cat_down"></i>
                    </a>
                    <div class="mega_menu">
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/panjabi" class="cat-title">
                            Panjabi
                          </a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/3-piece" class="cat-title">
                            3 piece
                          </a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/sharee" class="cat-title">
                            Sharee
                          </a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/mens-shoes" class="cat-title">
                            Mens Shoes
                          </a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="http://localhost/sell-pixer/subcategory/women-bags" class="cat-title">
                            Women Bags
                          </a>
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
              <p>Dinajpur City College, Balubari, Dinajpur</p>
              <p><a href="tel:01766950986" class="footer-hotlint">01766950986</a></p>
              <p><a href="mailto:info@websolutionit.com" class="footer-hotlint">info@websolutionit.com</a></p>
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
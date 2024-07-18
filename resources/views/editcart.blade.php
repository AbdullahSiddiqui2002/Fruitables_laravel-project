<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner"
            class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a
                                href="#" class="text-white">123 Street, New York</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                                class="text-white">Email@Example.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2">Sales and
                                Refunds</small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="/" class="navbar-brand">
                        <h1 class="text-primary display-6">Fruitables</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="/" class="nav-item nav-link">Home</a>
                            <a href="/search?query=&search" class="nav-item nav-link">Shop</a>
                            <a href="/add-product" class="nav-item nav-link">Add Product</a>
                            <a href="/manage-product" class="nav-item nav-link">Manage Product</a>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <button
                                class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                                data-bs-toggle="modal" data-bs-target="#searchModal"><i
                                    class="fas fa-search text-primary"></i></button>
                            <a href="/cart" class="position-relative me-4 my-auto">
                                <i class="fa fa-shopping-bag fa-2x"></i>
                                <span
                                    class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                    style="top: -5px; left: 15px; height: 20px; min-width: 20px;">{{ $cartItemCount }}</span>
                            </a>
                            <a href="#" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="/search" method="get">
                        <div class="modal-body d-flex align-items-center">
                            <div class="input-group w-75 mx-auto d-flex">
                                <input name='query'
                                    class="form-control p-3"
                                    type="text" placeholder="Search">
                                <button name='search' type="submit"
                                    class="input-group-text p-3"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Product Detail</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/cart">Cart</a></li>
                <li class="breadcrumb-item active text-white">Edit Cart Detail</li>
            </ol>
        </div>
        <!-- Single Page Header End -->

        <!-- Single Product Start -->
        <div class="container-fluid py-5 mt-5">
            <div class="container py-5">
                <div class="row g-4 mb-5">
                    <div class="col-lg-8 col-xl-9">
                        <div class="row g-4">
                            @if ($status = Session::get('success'))
                                @if ($status == 'Cart updated successfully.')
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <strong>{{ $status }}</strong>
                                    </div>
                                @endif
                            @endif
                            <div class="col-lg-6">
                                <div class="border border-primary rounded">
                                    <a href="#">
                                        <img src="/img/{{ $product_detail['image'] }}" style="height: 300px;"
                                            class="img-fluid rounded w-100" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3">{{ $product_detail['name'] }}</h4>
                                @if ($product_detail['category'] == 3)
                                    <p class="mb-3">Category: Fruit</p>
                                @elseif ($product_detail['category'] == 4)
                                    <p class="mb-3">Category: Vegetable</p>
                                @elseif ($product_detail['category'] == 5)
                                    <p class="mb-3">Category: Bread</p>
                                @else
                                    <p class="mb-3">Category: Meat</p>
                                @endif
                                <h5 class="fw-bold mb-3">Rs {{ $product_detail['price'] }}</h5>
                                <div class="d-flex mb-4">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="mb-4">{{ $product_detail['description'] }}</p>
                                <form action="/updatecart/{{$editcart->id}}" method="post" enctype="multipart/form-data" id="add-to-cart-form">
                                    @csrf
                                    <input type="hidden" value="{{ $product_detail['id'] }}" name="product_id">
                                    <div class="input-group quantity mb-3" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-minus rounded-circle bg-light border" type="button" id="minusBtn">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control form-control-sm text-center border-0" value="{{$editcart->quantity}}" name="quantity" id="quantityInput">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-plus rounded-circle bg-light border" type="button" id="plusBtn">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary">
                                        <i class="fa fa-shopping-bag me-2 text-primary"></i> Update cart
                                    </button>
                                </form>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        var minusBtn = document.getElementById("minusBtn");
                                        var plusBtn = document.getElementById("plusBtn");
                                        var quantityInput = document.getElementById("quantityInput");

                                        // Initialize button states
                                        updateButtonStates();

                                        // Add event listeners
                                        minusBtn.addEventListener("click", function() {
                                            decrementQuantity();
                                        });

                                        plusBtn.addEventListener("click", function() {
                                            incrementQuantity();
                                        });

                                        quantityInput.addEventListener("input", function() {
                                            updateButtonStates();
                                        });

                                        // Function to decrement quantity
                                        function decrementQuantity() {
                                            var currentValue = parseInt(quantityInput.value);
                                            if (currentValue > 1) {
                                                quantityInput.value = currentValue - 1;
                                                updateButtonStates();
                                            }
                                        }

                                        // Function to increment quantity
                                        function incrementQuantity() {
                                            var currentValue = parseInt(quantityInput.value);
                                            quantityInput.value = currentValue + 1;
                                            updateButtonStates();
                                        }

                                        // Function to update button states
                                        function updateButtonStates() {
                                            var currentValue = parseInt(quantityInput.value);
                                            minusBtn.disabled = currentValue === 1;
                                        }
                                    });
                                </script>

                            </div>
                            <div class="col-lg-12">
                                <nav>
                                    <div class="nav nav-tabs mb-3">
                                        <button class="nav-link active border-white border-bottom-0" type="button"
                                            role="tab" id="nav-about-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-about" aria-controls="nav-about"
                                            aria-selected="true">Description</button>
                                        <button class="nav-link border-white border-bottom-0" type="button"
                                            role="tab" id="nav-mission-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-mission" aria-controls="nav-mission"
                                            aria-selected="false">Reviews</button>
                                    </div>
                                </nav>
                                <div class="tab-content mb-5">
                                    <div class="tab-pane active" id="nav-about" role="tabpanel"
                                        aria-labelledby="nav-about-tab">
                                        <p>{{ $product_detail['description'] }}</p>
                                        <div class="px-2">
                                            <div class="row g-4">
                                                <div class="col-6">
                                                    <div
                                                        class="row bg-light align-items-center text-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Weight</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">1 kg</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Country of Origin</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">Agro Farm</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row bg-light text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Quality</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">Organic</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Сheck</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">Healthy</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="row bg-light text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Min Weight</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">250 Kg</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="nav-mission" role="tabpanel"
                                        aria-labelledby="nav-mission-tab">
                                        @foreach ($reviews as $rev)
                                            <div class="d-flex">
                                                <img src="/img/avatar.jpg" class="img-fluid rounded-circle p-3"
                                                    style="width: 100px; height: 100px;" alt="">
                                                <div class="">
                                                    @php
                                                        $formattedDate = \Carbon\Carbon::parse(
                                                            $rev['created_at'],
                                                        )->format('d/m/Y');
                                                    @endphp
                                                    <p class="mb-2" style="font-size: 14px;">{{ $formattedDate }}
                                                    </p>
                                                    <div class="d-flex justify-content-between">
                                                        <h5>{{ $rev['name'] }}</h5>
                                                        <div class="d-flex mb-3">
                                                            <i class="fa fa-star text-secondary"></i>
                                                            <i class="fa fa-star text-secondary"></i>
                                                            <i class="fa fa-star text-secondary"></i>
                                                            <i class="fa fa-star text-secondary"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p>{{ $rev['comment'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="tab-pane" id="nav-vision" role="tabpanel">
                                        <p class="text-dark">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et
                                            tempor sit. Aliqu diam
                                            amet diam et eos labore. 3</p>
                                        <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et
                                            eos
                                            labore.
                                            Clita erat ipsum et lorem et sit</p>
                                    </div>
                                </div>
                            </div>
                            @if ($status = Session::get('success'))
                                @if ($status == 'Review added successfully.')
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                        <strong>{{ $status }}</strong>
                                    </div>
                                @endif
                            @endif
                            <h4 class="mb-5 fw-bold">Leave a Reply</h4>
                            <form action="/postcomment" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="border-bottom rounded">
                                            <input type="text" class="form-control border-0 me-4" name="name"
                                                placeholder="Your Name *" value="{{ old('name') }}">
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="border-bottom rounded">
                                            <input type="email" name="email" class="form-control border-0"
                                                placeholder="Your Email *" value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-bottom rounded my-4">
                                            <textarea name="review" id="" class="form-control border-0" cols="30" rows="8"
                                                placeholder="Your Review *" value="{{ old('review') }}"></textarea>
                                        </div>
                                        @error('review')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between py-3 mb-5">
                                            <button
                                                class="btn border border-secondary text-primary rounded-pill px-4 py-3"
                                                name="comment" type="submit">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="row g-4 fruite">
                            <div class="col-lg-12">
                                <h4 class="mb-3">Featured products</h4>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="/img/best-product-6.jpg" class="img-fluid rounded"
                                            style="height: 100px; width: 100px;" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Fresh Apples</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rs 90</h5>
                                            <h5 class="text-danger text-decoration-line-through">Rs 160</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="/img/fruite-item-3.jpg" class="img-fluid rounded"
                                            style="height: 100px; width: 100px;" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Banana</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rs 60</h5>
                                            <h5 class="text-danger text-decoration-line-through">Rs 100</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="/img/best-product-1.jpg" class="img-fluid rounded"
                                            style="height: 100px; width: 100px;" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Fresh Oranges</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rs 120</h5>
                                            <h5 class="text-danger text-decoration-line-through">Rs 180</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="/img/b8bdddabafd4892124d854dfecdb4a63.jpg" class="img-fluid rounded"
                                            style="height: 100px; width: 100px;" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Fresh Bread</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rs 90</h5>
                                            <h5 class="text-danger text-decoration-line-through">Rs 150</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="/img/featur-3.jpg" class="img-fluid rounded"
                                            style="height: 100px; width: 100px;" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Broccoli</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rs 60</h5>
                                            <h5 class="text-danger text-decoration-line-through">Rs 100</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="/img/vegetable-item-5.jpg" class="img-fluid rounded"
                                            style="height: 100px; width: 100px;" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Potato</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">Rs 50</h5>
                                            <h5 class="text-danger text-decoration-line-through">Rs 80</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-4">
                                    <a href="#"
                                        class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Vew
                                        More</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative">
                                    <img src="/img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                                    <div class="position-absolute"
                                        style="top: 50%; right: 10px; transform: translateY(-50%);">
                                        <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="fw-bold mb-0">Related products</h1>
                <div class="vesitable">
                    <div class="owl-carousel vegetable-carousel justify-content-center">
                        @foreach ($allproductsfordetail as $prod)
                            @if ($prod['category'] == $product_detail['category'])
                                <div class="rounded position-relative fruite-item border border-secondary">
                                    <div class="fruite-img">
                                        <img src="/img/{{ $prod->image }}" class="img-fluid w-100 rounded-top"
                                            style="height: 200px;" alt="">
                                    </div>
                                    @if ($product_detail['category'] == 3)
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Fruit</div>
                                    @elseif ($product_detail['category'] == 4)
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Vegetable</div>
                                    @elseif ($product_detail['category'] == 5)
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Bread</div>
                                    @else
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Meat</div>
                                    @endif
                                    <div class="p-4 border border-secondary border-start-0 border-end-0 border-bottom-0 rounded-bottom"
                                        style="height: 250px;">
                                        <h4 class="text-center">{{ $prod['name'] }}</h4>
                                        <p class="text-center">{{ $prod['description'] }}</p>
                                        <div class="text-center">
                                            <p class="text-dark fs-5 fw-bold mb-2">Rs
                                                {{ $prod['price'] }}</p>
                                            <a href="/product-detail/{{ $prod['id'] }}"
                                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                    class="fa fa-shopping-bag me-2 text-primary"></i>
                                                Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Fruitables</h1>
                                <p class="text-secondary mb-0">Fresh products</p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number"
                                    placeholder="Your Email">
                                <button type="submit"
                                    class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white"
                                    style="top: 0; right: 0;">Subscribe Now</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle"
                                    href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                                    href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle"
                                    href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Why People Like us!</h4>
                            <p class="mb-4">typesetting, remaining essentially unchanged. It was
                                popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                            <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read
                                More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="">About Us</a>
                            <a class="btn-link" href="">Contact Us</a>
                            <a class="btn-link" href="">Privacy Policy</a>
                            <a class="btn-link" href="">Terms & Condition</a>
                            <a class="btn-link" href="">Return Policy</a>
                            <a class="btn-link" href="">FAQs & Help</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Account</h4>
                            <a class="btn-link" href="">My Account</a>
                            <a class="btn-link" href="">Shop details</a>
                            <a class="btn-link" href="">Shopping Cart</a>
                            <a class="btn-link" href="">Wishlist</a>
                            <a class="btn-link" href="">Order History</a>
                            <a class="btn-link" href="">International Orders</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: 1429 Netus Rd, NY 48247</p>
                            <p>Email: Example@gmail.com</p>
                            <p>Phone: +0123 4567 8910</p>
                            <p>Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i
                                    class="fas fa-copyright text-light me-2"></i>Your
                                Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed
                        By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
                class="fa fa-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>

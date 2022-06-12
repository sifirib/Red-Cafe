<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}" >
                <img src="{{asset('assets')}}/images/logo.png" style="width: 130px; height: 60px" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            @php
                $mainCategories = \App\Http\Controllers\HomeController::mainCategoryList();
            @endphp
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Categories</a>

                            @foreach($mainCategories as $rs)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">{{$rs->title}}</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                        @if(count($rs->children))
                                            @include('home.categorytree', ['children' => $rs->children]);
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </div>
                    </li>

            <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="reservation.html">Reservation</a>
                            <a class="dropdown-item" href="stuff.html">Stuff</a>
                            <a class="dropdown-item" href="gallery.html">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="blog.html">blog</a>
                            <a class="dropdown-item" href="blog-details.html">blog Single</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>




                @auth
                    <a class="align-items-center" style="border: #0d6aad; color: yellow; background: #2c4762; border-color: #2c4762" href="/"> <span class=" d-lg-inline">{{Auth::user()->name}}</span></a>
                    <a class="align-items-center btn-warning d-flex h5 m-0 nav-link px-2 px-lg-4 text-white headerv2-login" href="/logoutuser"> <span class=" d-lg-inline">LOGOUT</span></a>
                    <div class="dropdown align-items-stretch btn-danger d-flex h5 m-0 px-2 px-lg-4 nav-link text-white">
                        <button class="btn-link border-0 p-0" type="button" id="dd-sepet" aria-haspopup="true" aria-expanded="false">
                            <img class="d-none" src="{{asset('assets')}}/images/empty_basket.png" style="height: 30px; width: 30px"> <span class="d-none d-lg-inline">BASKET</span><span class="item-count font1"></span>

                        </button>
                        <div class="dropdown-menu font1 open-basket" aria-labelledby="dd-sepet">
                            <div class="dropdown-item">
                                <div class="row">
                                    Sepetinizde ürün bulunmamaktadır.
                                </div>
                            </div>

                        </div>
                    </div>

                @else
                    <a class="align-items-center btn-warning d-flex h5 m-0 nav-link px-2 px-lg-4 text-white headerv2-login" href="/loginuser"> <span class=" d-lg-inline">LOGIN</span></a>
                    <div class="dropdown align-items-stretch btn-danger d-flex h5 m-0 px-2 px-lg-4 nav-link text-white">
                        <button class="btn-link border-0 p-0" type="button" id="dd-sepet" aria-haspopup="true" aria-expanded="false">
                            <img class="d-none" src="{{asset('assets')}}/images/empty_basket.png" style="height: 30px; width: 30px"> <span class="d-none d-lg-inline">BASKET</span><span class="item-count font1"></span>

                        </button>
                        <div class="dropdown-menu font1 open-basket" aria-labelledby="dd-sepet">
                            <div class="dropdown-item">
                                <div class="row">
                                    Sepetinizde ürün bulunmamaktadır.
                                </div>
                            </div>

                        </div>
                    </div>
                @endauth





            </div>
        </div>
    </nav>
</header>
<!-- End header -->







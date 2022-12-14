    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="{{ route('users.show', Auth::user()) }}" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="{{ asset('user_img/' . Auth::user()->image) }}" alt="profile">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2">{{ Auth::user()->fname . ' ' . Auth::user()->lname }}</span>
                        {{-- <span class="text-secondary text-small">Project Manager</span> --}}
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <span class="menu-title">HOME</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Category" aria-expanded="false"
                    aria-controls="Category">
                    <span class="menu-title">Categories</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi mdi-weight menu-icon"></i>
                </a>
                <div class="collapse" id="Category">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('categories.index') }}">All
                                Categories</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('categories.create') }}">Add New
                                Category</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Product" aria-expanded="false"
                    aria-controls="Product">
                    <span class="menu-title">Product</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi mdi-wallet-giftcard menu-icon"></i>
                </a>
                <div class="collapse" id="Product">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('productes.index') }}">All Products</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('productes.create') }}">Add New
                                Product</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Brand" aria-expanded="false"
                    aria-controls="Brand">
                    <span class="menu-title">Brands</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi mdi-cube menu-icon"></i>
                </a>
                <div class="collapse" id="Brand">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('brands.index') }}"> All Brands</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('brands.create') }}"> Add New Brand
                            </a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Blog" aria-expanded="false" aria-controls="Blog">
                    <span class="menu-title">Blogs</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi mdi-blogger menu-icon"></i>
                </a>
                <div class="collapse" id="Blog">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('blogs.index') }}"> All Blogs</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('blogs.create') }}"> Add New Blog </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Order" aria-expanded="false"
                    aria-controls="Order">
                    <span class="menu-title">Orders</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi mdi-cart menu-icon"></i>
                </a>
                <div class="collapse" id="Order">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="{{ route('orders.index') }}">All Orders
                            </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('orders.completed') }}"> Orders
                                Completed </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('orders.pending') }}"> Orders
                                Pending </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('orders.canceled') }}"> Orders
                                Canceled </a></li>
                        {{-- <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li> --}}
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Slider" aria-expanded="false"
                    aria-controls="Slider">
                    <span class="menu-title">Sliders</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi mdi-backburger menu-icon"></i>
                </a>
                <div class="collapse" id="Slider">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('sliders.index') }}">All
                                Sliders</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('sliders.create') }}">Add New
                                Slider</a></li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#Blog" aria-expanded="false"
                    aria-controls="Blog">
                    <span class="menu-title">Messages</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi mdi-message-text menu-icon"></i>
                </a>
                <div class="collapse" id="Blog">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('messages.index') }}"> Messages
                                Customer</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('admin.messages') }}"> Messages
                                Admin</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('replay_message') }}"> Messages
                                Replay </a>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('not_replay_message') }}"> Messages
                                Not Replay </a>

                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#User" aria-expanded="false"
                    aria-controls="User">
                    <span class="menu-title">User</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi mdi-account menu-icon"></i>
                </a>
                <div class="collapse" id="User">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('users.index') }}">All User</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('users.create') }}">Add New
                                User</a></li>
                    </ul>
                </div>
            </li>




            <li class="nav-item sidebar-actions">
                <span class="nav-link">
                    <div class="border-bottom">
                        <h6 class="font-weight-normal mb-3">Categories</h6>
                    </div>
                    <a href="{{ route('categories.create') }}"
                        class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add Category</a>
                </span>
            </li>
        </ul>
    </nav>

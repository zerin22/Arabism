<aside class="side-nav" id="sideNav">
    <div class="text-end d-lg-none">
      <button id="closeButton" class="btn side-menu-button me-1">
        Close
      </button>
    </div>
    <img class="img-fluid brand-image" src="{{ asset('backend') }}/assets/images/logo.png" alt="brand">

    <div class="navigation">
      <a class="nav-links" href="#"><span><i class="fas fa-home"></i></span> Home</a>

      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed p-0" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Advanced
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body px-0">
              Content
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed p-0" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <span><i class="fas fa-male"></i></span> Rules
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body px-0">
              Content
            </div>
          </div>
        </div>
      </div>

      <a class="nav-links" href="#"><span><i class="fas fa-chevron-right"></i></span>Admin</a>
      <a class="nav-links" href="Operator.html"><span><i class="fas fa-chevron-right"></i></span>Operator</a>
      <a class="nav-links {{ request()->routeIs('user*') ? 'active' : '' }}" href="{{ route('user.index') }}"><span><i class="fas fa-user"></i></span>Users</a>
      <a class="nav-links" href="customer-advanced.html"><span><i class="fas fa-users"></i></span>Customer</a>
      <a class="nav-links {{ request()->routeIs('product*') ? 'active' : '' }}" href="{{ route('product.index') }}"><span><i class="far fa-cube"></i></span>Products</a>
      <a class="nav-links {{ request()->routeIs('category*') ? 'active' : '' }}" href="{{ route('category.index') }}"><span><i class="far fa-cube"></i></span>Category</a>
      <a class="nav-links" href="orders.html"><span><i class="far fa-cube"></i></span>Order</a>

    </div>
  </aside>

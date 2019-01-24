<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="/admin/images/faces/face1.jpg" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Richard V.Welsh</p>
            <div>
              <small class="designation text-muted">Manager</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Product</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="product">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('showproduct'))}}">All Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('createproduct'))}}">Add Product</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Categories</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="categories">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('showcategory'))}}">All Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('createcategory'))}}">Add Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset(route('editcat'))}}">Edit Categories</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
            <a class="nav-link" href="{{route('frontend_index')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Go To Site</span>
            </a>
          </li>

  </ul>
</nav>

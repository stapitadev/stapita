<div style="background-color:#146dcc" class="sidebar-menu">
  <div class="sidebar-menu-inner">
    <header class="logo-env">
      <!-- logo -->
      <div class="logo">
        <a href="dashboard.php">
          <h3 class="text-center" style="color: #fff; margin-top:5px;">
            <strong class="text-custom" style="font-size:20px !important; "> <?php echo strtoupper($shopname); ?> </strong>
          </h3>
        </a>
      </div>
      <!-- logo collapse icon -->
      <div class="sidebar-collapse">
        <a href="#" class="sidebar-collapse-icon">
          <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
          <i class="entypo-menu"></i>
        </a>
      </div>
      <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
      <div class="sidebar-mobile-menu visible-xs">
        <a href="#" class="with-animation">
          <!-- add class "with-animation" to support animation -->
          <i class="entypo-menu"></i>
        </a>
      </div>
    </header>
    <ul id="main-menu" class="main-menu">
      <!-- add class "multiple-expanded" to allow multiple submenus to open -->
      <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
      <li>
        <a href="dashboard.php">
          <i class="entypo-flow-line"></i>
          <span class="title">Dashboard</span>
        </a>
      </li>
    

 
    <li>             
      <a><i class="entypo-gauge"></i><span class="title">Users</span></a><ul>
   <li><a href="create_user.php"><i class="entypo-flow-line"></i><span class="title">Add New Users</span></a></li>
  <li><a href="user_list.php"><i class="entypo-flow-line"></i><span class="title">All Users</span></a></li></ul></li>


  <li>
        <a>
          <i class="entypo-gauge"></i>
          <span class="title">Seller Content</span>
        </a>
        <ul>
          <li>
            <a href="create_home.php">
              <i class="entypo-flow-line"></i>
              <span class="title">Add Seller Content</span>
            </a>
          </li>
          <li>
            <a href="home_list.php">
              <i class="entypo-flow-line"></i>
              <span class="title">All Seller Content</span>
            </a>
          </li>
        </ul>
      </li>

  

      <li>
        <a>
          <i class="entypo-gauge"></i>
          <span class="title">Gallery</span>
        </a>
        <ul>
          <li>
            <a href="add_gallery.php">
              <i class="entypo-flow-line"></i>
              <span class="title">Add Gallery</span>
            </a>
          </li>
          <li>
            <a href="gallery_list.php">
              <i class="entypo-flow-line"></i>
              <span class="title">All Gallery</span>
            </a>
          </li>
        </ul>
      </li>



  </div>
</div>
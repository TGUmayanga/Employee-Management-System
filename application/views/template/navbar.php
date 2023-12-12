<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><h3><span class="badge badge-secondary">Employee Management System</span></h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

  
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('userpage')?>">User Page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('adminpag')?>">Admin Page</a>
      </li>
     
      <?php if(!$this->session->has_userdata('authenticated')){
        ?>
      <li class="nav-item">
        <a class="nav-link"href="<?=base_url('login')?>">Login</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('register')?>">Register</a>
      </li>
    <?php } ?>
    <?php if($this->session->has_userdata('authenticated')== TRUE){
        ?>
    <li class="nav-item">
        <a class="nav-link" href="<?=base_url('logout')?>">Logout</a>
      </li>
      
      <?php } ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
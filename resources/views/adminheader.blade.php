@if (Session::has('admin'))
<nav class="navbar navbar-expand-md navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand " style="color:#D8E1F3" href="/"><img class="logo me-2"  role="img" src="img/logo.png" alt="" >................</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav navbar-nav2 rounded-3 me-auto mb-2 mb-md-0 navbar-right">
        <li class="nav-item">
          <a class="nav-link" style="color: white;" aria-current="page" href="/home">Dashboard</a>
        </li>
        <br />
        <li class="nav-item">
          <a class="nav-link" style="color: white;" href="/administrator">Administrators</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" style="color: white;"href="/admin_order">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white;"href="admin_product">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white;"href="organisation">Organization Details</a>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
           <li class="nav-item dropdown">
           <li><a class="dropdown-item" href="/logout"><i class="bi-person-fill" style="font-size: 3em; color:#6A58AE;"></i><br/>Log Out</a></li>
                  
          </li>
      </ul>
    </div>
  </div>
</nav>
<p class="navbar-brand text-muted" style="color:#6B59AF;font-size:0.8em; margin-left: 1%;">Well Come: {{Session::get('admin')['name']}}</p>
@else
<script>window.location="/login";</script>
 @endif

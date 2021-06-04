@if (Session::has('admin'))
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">New Sky Technologies</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/administrators">Administrators</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="admin">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorders">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">{{Session::get('admin')['name']}}</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="/logout">log out</a></li>
              @else
               <script>window.location="/login";</script>
                @endif
           </ul>
          </li>
      </ul>
     
    </div>
  </div>
</nav>
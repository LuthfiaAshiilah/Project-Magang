<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"/>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    
    <title>{{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/style2.css">
    
  </head>


  <body>
      <div>
        <header class="p-2" style="background: rgb(187, 201, 211)" >
            <div style="margin: 0 20px 0 20px">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a class="navbar-brand link-secondary navbar-brand mr-4" style="font-size: 25px" href="/"><strong>Med.net</strong></a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="/" class="nav-link px-2 link-secondary" style="margin: 0 10px 0 10px">Dashboard</a></li>
                  <li><a href="/todo" class="nav-link px-2 link-secondary" style="margin-right: 10px">Tasks</a></li>
                  <li><a href="/produk" class="nav-link px-2 link-secondary" style="margin-right: 10px">Product</a></li>
                  <li><a href="#" class="nav-link px-2 link-secondary" style="margin-right: 10px">Report</a></li>
                </ul>
                <div class="text-end" style="margin-right: 20px"> 
                  <a class="link-secondary fs-5" href="/chat"><i class="bi bi-chat-right-dots"></i></a>
                </div>
                <div class="dropdown text-end">
                  <a href="#" class="d-block link-secondary fs-5" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 30px">
                    <i class="bi bi-bell"></i>
                  </a>                
                  <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li>
                      <div class="container">
                      <a class="text container">
                        <h5><strong>Notification</strong></h5>
                      </a>
                      </div>
                    </li>
                    <li class="nav-user-info dropdown-item">
                      <div class="section one">
                        <div class="card" style="margin-bottom: 8px">
                        <div class="text one"><a><strong>Andi Hidayat (Client)</strong></a><i class="bi bi-dot"></i><a>11 May 20:32</a></div>
                        <div class="rect one" style="margin-left: 30px">Andi Hidayat (Client) send you a message.</div>      
                        </div>
                      </div>
                      <div class="section one">
                        <div class="card" style="margin-bottom: 8px">
                          <div class="text one"><a><strong>Samuel Jordan (Team)</strong></a><i class="bi bi-dot"></i><a>11 May 18:26</a></div>
                          <div class="rect one" style="margin-left: 30px">Samuel Jordan (Team) send you a message.</div>     
                        </div>
                      </div>
                    </li>
                    <div class="container">
                    <a class="text">
                      <p><a class="text-end" href="link-secondary">View All</a></p>
                    </a>
                    </div>
                  </ul>
                </div>
                <div class="dropdown text-end">
                  <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="mdo" width="32" height="32" class="rounded-circle">
                  </a>
                  <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li class="nav-user-info dropdown-item"> 
                      <h5 class="mb-0 text-dark nav-user-name">PUTRA PRATAMA</h5> <span class="status"></span><span class="ml-2">Active</span>
                      <p type="email">putraprt@gmail.com</p>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="/profile"><i class="bi bi-person"></i> Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="/login"><i class="bi bi-box-arrow-right"></i> Sign out</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </header>
      </div>
  </body>

  
    <div>
       @yield('container')
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
  crossorigin="anonymous"></script>  
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

  </body>
</html>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Sample Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MyCart 
          <span class="badge badge-light">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" >Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Sample shop for you</h1>
          <p class="lead text-muted">Just buy it & enjoy it</p> 
        </div>
      </section>
   
       <div class="album py-5 bg-light">
          <div class="container">
        
          <div class="row">
            @foreach($Products as $product)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <p class="card-body"><strong>{{$product->name}}</strong></p>
                <div class="card-body">
                  <p class="card-text">{{$product->description}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{ route('cart.add', $product->id) }}" methood="post" class="btn btn-sm btn-outline-secondary">Add to cart</a>   
                    </div>
                    <small class="text-muted">Price: {{$product->price}} EUR </small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </main>
    </div>

</body>
</html>
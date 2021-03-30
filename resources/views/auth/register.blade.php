<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
    
  </head>
  <body>
  <div class="container">    
        <div class="row justify-content-center my-5">
            <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                <h1>register</h1>
                <form method="POST" action="{{ route('register.store') }}" class="needs-validation">
              @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your email
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div>              
              <div class="form-group">
                <div class="d-block">
                  <label for="name" class="control-label">nama</label>
                </div>
                <input id="name" type="text" class="form-control" name="name" tabindex="2" required>
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div>                                        

              <div class="form-group text-right">                
                <button type="submit" class="btn btn-primary mt-2 btn-icon icon-right" tabindex="4">
                  Register
                </button>
              </div>              
            </form>
                </div>
            </div>            
        </div>
    </div>
  </div>
  </body>
      <!-- Option 2: Separate Popper and Bootstrap JS -->    
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</html>
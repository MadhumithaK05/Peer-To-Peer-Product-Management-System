<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <style>
        body{
          font-family: sans-serif;
          margin: 0;
          padding:0;
        }
        #intro{
            background-image: url("https://img.freepik.com/free-vector/watercolor-back-school-background-with-white-space_52683-41450.jpg?w=740&t=st=1686985513~exp=1686986113~hmac=94ab64d57a85b57aec05492a23a6d1bc613293016e6b48dd5ad8214e909b54a7");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            text-align: center;
            padding:18rem;
        }
        .navbar{
          position:sticky;
        }
        .content{
          z-index: 10; 
          position: absolute; 
          border:solid 1px #FFE3FB;
          border-radius: 50%;
          top:60%;
          left:50%;
          transform :translate(-50%,-50%);
          width: 40%;
          background-color: #FFE3FB;
          padding: 2rem;
          
        }
        
       
        h2,p{
          font-family: cursive;
        }
       
        
        
       
       li{
        margin: 2rem;
        list-style-type: none;
        
       }
       a{
        text-decoration: none;
       }
        
      </style>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Peer To Peer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#intro">Home</a>
                </li>
                
              </ul>
              <form class="d-flex">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" href="signup.php">Signup</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="signin.php">Signin</a>
                  </li>
                  </ul>
              </form>
            </div>
          </div>
        </nav>
        <section id="intro">
          <div class="content">
            <h2>Peer to Peer</h1>
            <p>Buy,sell and rent easily!</p>
          </div>
          
        </section>
        
        
       
        
      </body>
</html>
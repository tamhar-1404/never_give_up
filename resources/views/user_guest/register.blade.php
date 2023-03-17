<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Register</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    /* background-color: #080710; */
    background-image: url("upload/slide3.jpg");
    
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 850px;
    width: 500px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 80px 30px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #000000;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body >

	<!-- Container -->
	<div id="container" >
		

	

		<section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                     
      
                      <form class="mx-1 mx-md-4" method="POST" action="{{Route('create')}}" class="sign-form" enctype="multipart/form-data" >
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-20">
                          
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="email"> Email</label>
                            <input class="sign-form__input-text  @error('email') is-invalid @enderror" type="text" name="email" :value="old('email')" required placeholder="Enter your email" />
                          </div>
                        </div>
                        @error ('email')
                        <p class="text-black" style="color:black;">{{$message}}</p>
                        @enderror
      
                        <div class="d-flex flex-row align-items-center mb-20">
                          
                          <div class="form-outline flex-fill mb-20">
                            <label class="form-label" for="username2">Username</label>
                            <input class="sign-form__input-text @error('username') is-invalid @enderror" type="text" name="username" :value="old('username')" required autofocus  id="name" placeholder="Enter your name" />
                          </div>
                        </div>
                        @error ('username')
                        <p class="text-black" style="color:black;">{{$message}}</p>
                        @enderror
      
                        <div class="d-flex flex-row align-items-center mb-10">
                        
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="password2">Password</label>
                            <input class="sign-form__input-text   @error('password') is-invalid @enderror" type="password" name="password" required id="password" placeholder="Password" />
                          </div>
                        </div>
                        @error ('password')
                        <p class="text-black" style="color:black;">{{$message}}</p>
                        @enderror

						

      
                        <div class="d-flex flex-row align-items-center mb-4">
                          
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="password2">konfirmasi password</label>
                            <input class="sign-form__input-text  @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required id="password" placeholder="Password" />
                          </div>
                        </div>
                        @error ('password_confirmation')
                        <p class="text-black" style="color:black;">{{$message}}</p>
                        @enderror
                       
                      
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button  type="submit" id="submit_signup" class="btn btn-danger btn-lg" style="background-color: rgb(228, 72, 98)" >Register</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
      
                    </div>
                  </div>
                </div>
           
    
</body>
</html>

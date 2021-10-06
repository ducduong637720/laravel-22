<!DOCTYPE html>
 <html lang="en"> <head> <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Register form</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style> 
    body{ 
        margin: 0; 
        padding: 0; 
        background-image: url(/frontend/images/login.jpeg); 
        background-size: cover; 
    } 
    .container{ 
        width: 30%;
        top: 50%; 
        left: 50%; 
        position: absolute; 
        transform: translate(-50%,-50%); 
    } 
    .card{ 
        padding: 60px 40px 50px 40px; 
        background:wheat ; 
        border-radius: 10px; 
    } 
    </style> 
    </head> 
    <body> 
        <div class="container"> 
            <div class="card"> 
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Đăng ký</h1>
                 </div>
                <form>
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" placeholder="Họ và tên">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mật khẩu</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
                        <input type="repassword" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu mới">
                      </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                  </form>
            </div> 
        </div> 
    </body> 
</html>
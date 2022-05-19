<!DOCTYPE html>
<head>
    <title>YourLibrary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
        body, html {
        height: 100%;
        margin: 0;
        }

        body {
        background-image: url("./asset/background.png");
        height: 100%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }

        .boxSquare{
            position: fixed;
            width: 10cm;
            height: 10cm;
            background-color: aqua;
        }
        #box{
            background-color: rgb(255,255,255,0.8);
            margin: 12% auto auto auto;
            height: 10cm;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20cm;
        }

        .welcome-icon{
            width: 10cm;
            opacity: 100%;
            display: flex;
            align-items:flex-start;
            justify-content: flex-start;
            float: left;
        }
        .login-form{
            text-align: center;
            background-color: rgb(1, 161, 173, 0.42);
            border: 1px rgb(1, 161, 173);
            border-radius: 0.5cm;
            height: 350px;
        }
        #box-form{
            padding-left: 2cm;
        }
        .set-width{
            padding-left: 1cm;
            padding-right: 1cm;
        }
        .login-form a{
            font-size: small;
            color: #014656;
        }
        .login-title{
            padding-top: 10%;
            margin-bottom: 20px;
            color: rgb(1, 70, 86);
        }
        img{
            height: 350px;
        }
        .forgot{
            float: left;
            margin-top: 2%;
        }
</style>
</head>
<body>
    <div class="container" id="box">
        <div class="row">
            <div class="col-md-6 offset md-3">
                <img src="./asset/icon.jpeg" class="welcome-icon" id="gambar">
            </div>
            <div class="col-md-6 offset md-3" id="box-form">
                <form class="login-form">
                    <div class="login-title">
                        <h4><b>REGISTER</b></h4>
                    </div>
                    <div class="set-width">
                        <form action="/register" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                            <input type="text" class="form-control" name="Username" placeholder="Username">
                            </div><br>
                            <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            </div><br>
                            <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Confirm Password">
                            </div><br>
                            <button type="submit" class="btn btn-warning">Submit</button><br>
                        </form>      
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
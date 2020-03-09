<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body {
        background: url(backgroun math.jpg);
        background-repeat: no-repeat;
        background-size:cover;
        margin:0;
        padding:0;
       
    }
    @media screen and (max-width:680px){
#maincontent{
    width: auto;
    float: none;
}
.registration-form .form-icon{
	text-align: center;
    background-color: #5891ff;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 110px;
    height: 150px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 120px;
}
#sidebar{
    width: auto;
    float: none;
}
}
    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 600px;
        margin: 6rem auto 8.1rem auto;
        width: 400px;
    }
    #card-content {
        padding: 12px 44px;
    }
    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 22px;
        padding-top: 13px;
        text-align: center;
    }
    .underline-title {
        background: -webkit-linear-gradient(right, #7a110a, #7a110a);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }
    a {
        text-decoration: none;
    }
    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }
    #forgot-pass {
        color: #020f2e;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }
    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }
    .form-border {
        background: -webkit-linear-gradient(right, #456ecc, #456ecc);
        height: 1px;
        width: 100%;
    }
    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 15px;
    }
    #signup {
    color: #456ecc;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}

#submit-btn {
    background: -webkit-linear-gradient(right, #456ecc, #456ecc);
    border: none;
    border-radius: 25px;
    box-shadow: 0px 1px 8px #456ecc;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.35s;
    width: 150px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #456ecc;
}
.container{
    width: 500px;
    margin: auto;
#copy{
  font-family: "Raleway Thin", sans-serif;
  color:#ffffff;
  letter-spacing: 1px;
  padding-bottom: 2px;
  padding-top: 20px;
  text-align: center;
}
</style>
</head>
<body>
<div id="card">
<div id="card-content">
    <div id="card-title");>
        <img src="layang layang.jpg"  width="240px" height="150px">
        <h6>Situs Belajar Online TERPERCAYA</h6>
    </div>
    <form action="post.php" method="POST" class="form">
    <div class="form-icon">
    <span><i class="icon icon-user"></i></span>
    </div> 
    <label for="username" style="padding-top:13px">&nbsp;Username</label>
    <input id="username" class="form-content" type="username" name="username"  required />
    <div class="form-border">
    </div>
    <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
    <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
    <div class="form-border">
    </div>
    <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
    <input id="user-password" class="form-content" type="password" name="password" required />
    <div class="form-border"></div>
    <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
    <a href="#" id="signup"></a>
</div>
</div>
</div> 
<div class id="copy">&copy; Copyright by Your.D</div>
</form>
</body>
</html>
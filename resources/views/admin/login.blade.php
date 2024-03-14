<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Admin</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <style>body {
        background: #456;
        font-family: 'Open Sans', sans-serif;
      }
      .login {
        width: 400px;
        margin: 16px auto;
        font-size: 16px;
      }
      /* Reset top and bottom margins from certain elements */
      .login-header,
      .login p {
        margin-top: 0;
        margin-bottom: 0;
      }
      .login-header {
        background: #28d;
        padding: 20px;
        font-size: 1.4em;
        font-weight: normal;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
      }
      .login-container {
        background: #ebebeb;
        padding: 12px;
      }
      /* Every row inside .login-container is defined with p tags */
      .login p {
        padding: 12px;
      }
      .login input {
        box-sizing: border-box;
        display: block;
        width: 100%;
        border-width: 1px;
        border-style: solid;
        padding: 16px;
        outline: 0;
        font-family: inherit;
        font-size: 0.95em;
      }
      .login input[type="email"],
      .login input[type="password"] {
        background: #fff;
        border-color: #bbb;
        color: #555;
      }
      /* Text fields' focus effect */
      .login input[type="email"]:focus,
      .login input[type="password"]:focus {
        border-color: #888;
      }
      .login input[type="submit"] {
        background: #28d;
        border-color: transparent;
        color: #fff;
        cursor: pointer;
      }
      .login input[type="submit"]:hover {
        background: #17c;
      }
      /* Buttons' focus effect */
      .login input[type="submit"]:focus {
        border-color: #05a;
      }</style>
</head>
<body>
    <html>
<head>
	<title>Cara Membuat Form Login Sederhana Tapi Berkelas</title>
</head>
<body>
<div class="login">
    <h2 class="login-header">Form Login Admin</h2>
        <form action="{{ url('simpan/login/admin') }}" method="post"  class="login-container">
            @csrf
            <p>
                <input type="text" id="Username" name="Username" placeholder="Username">
            </p>
            <p>
                <input type="password" id="Password" name="Password" placeholder="Password">
            </p>
            <p>
                <input type="submit" value="Log in">
            </p>
        </form>
</div>
</body>
</html>
</body>
</html>
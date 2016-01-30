<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fb</title>
    <style media="screen">
      .login{
      }
    </style>
  </head>
  <body>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '460054894180938',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

   function login() {
     FB.login(function(response){

     })
   }
</script>
<div id="status"></div>
<button type="button" name="button" onclick="login()">Login</button>
  </body>
</html>

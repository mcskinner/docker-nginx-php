<!DOCTYPE html>
<html>
<head>
<title>Welcome to nginx in Docker!</title>
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>
<h1>Welcome to a PHP-enabled configuration of nginx in Docker!</h1>
<p>If you see this page, then you have successfully set up the Docker image and
provided the sample configuration!

<p>If you don't believe this is PHP, just look at the phpinfo() results at the bottom!</p>

<p>This is just a sample though, so you still have more configuration to do.</p>

<p>Remember, there is always more configuration to do.</p>

<p>For configuration starters, head back to the source at
<a href="https://github.com/mcskinner/docker-nginx-php">github.com/mcskinner/docker-nginx-php</a>.</p>

<p>For nginx online documentation and support please refer to
<a href="http://nginx.org/">nginx.org</a>.</p>

<p><em>Thank you for using nginx with PHP in Docker.</em></p>

<div><?php phpinfo(); ?></div>
</body>
</html>

## mcskinner/nginx-php

This repository contains a **Dockerfile** to add [PHP-FPM](http://php-fpm.org/)
support to an underlying [NGINX](http://nginx.org/en/) image.

Hat tip to [eugeneware/docker-wordpress-nginx](https://github.com/eugeneware/docker-wordpress-nginx)
for providing a solid starting point. Most notably, the configuration for
[Supervisor](http://supervisord.org/) was indispensable.

For more detail on how this works, visit [blog.mcskinner.com](http://blog.mcskinner.com/2016/04/17/behold-dockerfiles/).

### Base Docker Image

* [mcskinner/nginx](https://hub.docker.com/r/mcskinner/nginx) ([GitHub](https://github.com/mcskinner/docker-nginx))

### Usage

	# Serve the NGINX boilerplate content.
    docker run -d -p 80:80 mcskinner/nginx-php

    # Serve your own site.
    docker run -d -p 80:80 \
      -v $(pwd)/example/sites-enabled:/etc/nginx/sites-enabled \
      -v $(pwd)/example/php:/var/www/html \
      mcskinner/nginx-php

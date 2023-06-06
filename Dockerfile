FROM ctftraining/base_image_nginx_php_56

LABEL Author="tan91"
LABEL Blog="zxw-nudt.blog.csdn.net"

COPY html /var/www/html
COPY file /

RUN chmod 777 /flag.sh

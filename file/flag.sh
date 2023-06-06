#!/bin/bash

# sed -i "s/flag{test}/$FLAG/" /var/www/html/vue.global.js
ENCODED_FLAG=$(echo -n "$FLAG" | base64) && sed -i "s/flag{test}/$ENCODED_FLAG/" /var/www/html/vue.global.js


rm -rf /flag.sh
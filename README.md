# SimpleTemplate
A very simple template


If you are using MAMP or WAMP you will need MOD Rewrite for the routes to work.

in nginx edit the file /Applications/MAMP/conf/nginx/nginx.conf
```
location / {
    index   index.html index.php;
    try_files $uri $uri/ /index.php?$args;
}
```

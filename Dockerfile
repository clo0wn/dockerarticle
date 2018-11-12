FROM nginx:latest

COPY app/cadastro-exec.php /usr/share/nginx/html
COPY app/cadastro.php /usr/share/nginx/html
COPY app/index.php /usr/share/nginx/html
COPY app/login-exec.php /usr/share/nginx/html
COPY app/login.php /usr/share/nginx/html
COPY app/logout.php /usr/share/nginx/html
COPY app/painel.php /usr/share/nginx/html
COPY app/verifica_login.php /usr/share/nginx/html
COPY app/css/bulma.min.css /usr/share/nginx/html
COPY app/css/login.css /usr/share/nginx/html
COPY app/css/style.css /usr/share/nginx/html

EXPOSE 80 443 	

CMD ["nginx", "-g", "daemon off;"]

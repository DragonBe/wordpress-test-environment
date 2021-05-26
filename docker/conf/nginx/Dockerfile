FROM nginx:1.20-alpine as nginx-base

RUN mkdir -p /var/www/html
COPY ./wordpress /var/www/html
COPY ./plugins /var/www/html/wp-content/plugins
RUN chown -R nginx:nginx /var/www/html
FROM nginx:alpine

# Arguments defined in docker-compose
ARG build

# put nginx config
COPY ./$build/nginx/nginx.conf /etc/nginx/conf.d/default.conf
FROM php

WORKDIR /app
ADD . ./

EXPOSE 8888
CMD [ "-S 0.0.0.0:8888" ]
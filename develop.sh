#!/usr/bin/env bash

docker build -t pimf-twig-app .
docker run -d -p 1337:1337 pimf-twig-app

# K8s-test-container

This is a simple test container that allow you to do some simple testing.
This is intended to deploy into K8s with network policy.

## Getting Started on docker

Have Docker and docker-compose installed
Clone this repo

in docker-compose.yml
* modify the environment varables to point to your servers

from the main directory run the following
 sudo docker-compose up --build -d

To check if 
curl 127.0.0.1:8000/check_status.php

To exec into the container
sudo docker ps
sudo docker exec -IT 3d289b9e8b7f /bin/bash

## Getting Started on OpenShift

This is written with OpenShift 3.9, but should work with other version



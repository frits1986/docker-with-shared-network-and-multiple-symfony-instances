# docker-with-shared-network-and-multiple-symfony-instances
This repo is for reproducing problem described in https://stackoverflow.com/questions/56166632/docker-shared-network-with-multiple-nginx-instances-gives-random-nginx-instance/56167917

You only need to start the 2 docker-compose files:
api.example.com/docker (this one needs to be started first, it contains the network)
auth.example.com/docker

When all the docker containers are running, keep refreshing http://localhost:21182/port and the problem will be visible. It will be switching to show the contents of port 21181 and 21182.

Note: this is on windows machine

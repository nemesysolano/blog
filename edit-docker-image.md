A good idea to edit docker image when Docker file is unavailable is to run an existing image as a container, make the required modifications in it and then create a new image from the modified container.

a. First, Log into the linux server that host the a container based on the desired image.

b. Then connect to the container via bash shell

```
docker exec -it <container-name>; bash
```

c. From the shell, make the changes in the container as required. This can include installing new packages, modifying configuration files, downloading or removing files, compiling modules, and so on.

d. Once the changes are done, exit the container. Then commit the container as a new image. This will save the modified container state as a new image.

```
docker commit <container-id> <image-name>
```

e. Finally upload to a registry. 
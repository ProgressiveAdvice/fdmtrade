# fdmtrade

## Docker
Alap fogalmak: Image -> Container. Az Image a class (OOP programozás terminológia), a container a példány/instance. 


Docker repostory címe: hub.docker.com
Itt tudsz keresgélni imagekre és azoknak a dokumentációját, Dockerfile-ját megnézni.

Fontos parancsok:

docker images:  image lista
docker ps: container lista (csak a futó)
docker ps -a: container lista (összes)
docker rm: container törlése
docker rmi: image törlése
docker pull <image-neve>: adott imaget lehúz a docker repositoryjából

## Docker compose
A docker containerek "kompozícióját" tudod vele beállítani
Dokumentáció: https://docs.docker.com/compose/compose-file

## Dockerfile
Dokumentáció: https://docs.docker.com/engine/reference/builder/
#!/bin/bash
containerName='freightera-common-lib'
if [ "$1" == "" ];
then
    set -x
    docker exec -it $containerName /bin/bash
    set +x
else
    set -x
    docker-compose --compatibility "$@"
    set +x
fi

ARG FROM_BASE=alpine:3.6
FROM $FROM_BASE

# name and version of this docker image
ARG CONTAINER_NAME=supervisord-monitor
ARG CONTAINER_VERSION=1.0.0

LABEL org_name=$CONTAINER_NAME \
      version=$CONTAINER_VERSION 

# set to non zero for the framework to show verbose action scripts
ARG DEBUG_TRACE=0

# Add CBF, configuration and customizations
ARG CBF_VERSION=${CBF_VERSION:-v2.0}
ADD "https://github.com/ballab1/container_build_framework/archive/${CBF_VERSION}.tar.gz" /tmp/
COPY build /tmp/


ARG SMONITOR_VERSION=v1.1.0


# build content
RUN set -o verbose \
    && chmod u+rwx /tmp/build.sh \
    && /tmp/build.sh "$CONTAINER_NAME"
RUN [ $DEBUG_TRACE != 0 ] || rm -rf /tmp/* 


ENTRYPOINT [ "docker-entrypoint.sh" ]
#CMD ["$CONTAINER_NAME"]
CMD ["supervisord-monitor"]

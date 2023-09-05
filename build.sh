#!/bin/bash

# Stop and remove any existing container based on the previous image
docker stop cornatul/news.ai:latest
docker rm cornatul/news.ai:latest

# Get the ID of the previous image (if it exists)
PREVIOUS_IMAGE_ID=$(docker images -q cornatul/news.ai:latest)

# If the previous image exists, delete it
if [ -n "$PREVIOUS_IMAGE_ID" ]; then
    echo "Deleting previous image: $PREVIOUS_IMAGE_ID"
    docker rmi $PREVIOUS_IMAGE_ID --force
fi

# Build the new Docker image from scratch
docker build -t cornatul/news.ai:latest --no-cache --progress=plain .

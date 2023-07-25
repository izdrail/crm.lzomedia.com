#!/bin/bash

# This is a shell script example to print all messages in green color

# Define a variable for green color escape sequence
GREEN='\033[0;32m'

# Define a variable to reset the color back to default
NC='\033[0m'

# Override the echo command to print all messages in green color
echo() {
    builtin echo "${GREEN}$@${NC}"
}


# Print a message in green color
echo "Ahoy captain !!"
echo "I'm putting down the sails !!"
docker-compose down
echo "The sails are down"




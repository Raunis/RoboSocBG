#!/bin/bash

# some older test, doesn't work and complains and I get this message on command line: "QApplication::qAppName: Please instantiate the QApplication object first"
# I also can't enter text after command executes
#echo "Hello World!"
#exec konsole --noclose -e cat ~/.aliases



#gnome-terminal -e bash --command "ls -lh"



# didn't do anything except make me type exit an extra time where I executed my shell script
#$SHELL

cd ..
cd ..
cd ..
cd splanner
make clean
make
#echo "compilando"



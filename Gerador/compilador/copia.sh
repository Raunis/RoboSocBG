#!/bin/bash

# some older test, doesn't work and complains and I get this message on command line: "QApplication::qAppName: Please instantiate the QApplication object first"
# I also can't enter text after command executes
#echo "Hello World!"
#exec konsole --noclose -e cat ~/.aliases



#gnome-terminal -e bash --command "ls -lh"



# didn't do anything except make me type exit an extra time where I executed my shell script
#$SHELL

#echo "compilando"


CONTADOR=1;

while [ $CONTADOR != -1 ];
	do if [ ! -d "../versionamento/`date +%d-%b-%Y`" ]; 
		then mkdir ../versionamento/`date +%d-%b-%Y`; 
	fi; 
	if [ ! -d "../versionamento/`date +%d-%b-%Y`/splanner_V$CONTADOR" ]; 
		then mkdir ../versionamento/`date +%d-%b-%Y`/splanner_V$CONTADOR; 
		let MARCADOR=CONTADOR;
		CONTADOR=-1; 
	else let  CONTADOR=CONTADOR+1; 
	fi; 
done;


cp -rp ../../../splanner ../versionamento/`date +%d-%b-%Y`/splanner_V$MARCADOR


This Tool was developed using XAMPP 7.2.9. Please, make sure you are using the same version to avoid incompabilities.
You can access this XAMPP official link to download the 7.2.9 version:
https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/7.2.9/

1. First, place the folder Gerador in the folder htdocs of Xampp.

2. Open file caminho.php to configure the path of SPlanner and the team that you want to modify.

The SPlanner project configured to be modified by generator follows the same git directory of RoboSocBG.
We suggest that you place the splanner folder in the /home directory.
Only configure the path for the team if you have configured the team to be modified by the generator.

Make sure that the folders of SPlanner and Team are with permission to RoboSocBG modify the the files envolved in the creation of new behaviors. If unsure, please, use the commands bellow:
sudo su
chmod -R 777 ./home/SPlanner_Path
chmod -R 777 ./home/Team_Path	(if you do not have the team folder, skip this step)

3. Start Xampp control painel and then start apache web server, necessary to execute php.
4. Open RoboSocBG using the web link:
localhost/Gerador/gerador.php

Please, recompile first FSF library and after recompile SPlanner, in order to apply the changes of new behavior created.

You can recompile FSF library using the commands bellow, in the FSF library folder (splanner/libs/libsetplay):
make clean
make

You can recompile SPlanner using the commands bellow, in the SPlanner folder (splanner/):
make clean
make

Note that the SPlanner tool will not work correctly if the FSF library doesn't be recompiled, or if SPlanner is recompiled before FSF.

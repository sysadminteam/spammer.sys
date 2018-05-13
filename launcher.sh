#!/bin/sh
#Title........: SPAMMER SYSTEM
#Description..: SPAMMER SYSTEM LAUNCHER
#Author.......: Fray117
#Date.........: 12 May 2018
#Version......: CLI 0.4
#Bash Version.: 4.2 or later

version="CLI v0.4.3"

#Colors vars
green_color="\033[1;32m"
green_color_title="\033[0;32m"
red_color="\033[1;31m"
red_color_slim="\033[0;031m"
blue_color="\033[1;34m"
cyan_color="\033[1;36m"
brown_color="\033[0;33m"
yellow_color="\033[1;33m"
pink_color="\033[1;35m"
white_color="\033[1;37m"
normal_color="\033[1;0m"

function print_logo() {
  sleep 0.15 && echo "${green_color} _______ ______ _______ _______ _______ _______ ______"
  sleep 0.15 && echo "|     __|   __ \   _   |   |   |   |   |    ___|   __ |"
  sleep 0.15 && echo "|__     |    __/       |       |       |    ___|      <"
  sleep 0.15 && echo "|_______|___|  |___|___|__|_|__|__|_|__|_______|___|__|"
  sleep 0.15 && echo ""
  sleep 0.15 && echo " _______ ___ ___ _______ _______ _______ _______"
  sleep 0.15 && echo "|     __|   |   |     __|_     _|    ___|   |   |"
  sleep 0.15 && echo "|__     |\     /|__     | |   | |    ___|       |"
  sleep 0.15 && echo "|_______| |___| |_______| |___| |_______|__|_|__|${normal_color}"
  sleep 0.15 && echo ""
  sleep 0.15 && echo "$version"
  sleep 0.15
}

function dev() {
  echo "DevMode ON"
  pause 'Press anything to Exit'
  exit
}

cd sys
function pause() {
  read -p "$*"
}
clear
print_logo
echo "${red_color} SYSTEM ADMINISTRATOR"
echo "${yellow_color} Author: Fray117"
echo "${green_color} contact: fray117.sys@gmail.com"
echo "${cyan_color} Available Client:"
echo " 1.  tokopedia"
echo " 2.  Telkomsel"
echo " 3.  Matahari Mall"
echo " 4.  PHD"
echo " 5.  JD.id"
echo " 6.  Private Mailer"
echo " 7.  KFC"
echo " 8.  ZiPAY"
echo " 9.  whiskas"
echo " 10. HOOQ"
echo " 11. PHPMailer"
echo " 12. Facebook Comments"
echo " 13. WordPress Comments"
echo " 14. Grab"
echo " 15. IP Tracer"
echo " 16. IP Spammer"
echo " 0.  Exit"
echo "${white_color} 81. About this tool"
echo "${yellow_color} Enter Number: ${normal_color}"; read menu

if [[ $menu = 1 ]] || [[ $menu = 1 ]]
then
clear
echo "${green_color}
 __          __                         __ __
|  |_.-----.|  |--.-----.-----.-----.--|  |__|.---.-.
|   _|  _  ||    <|  _  |  _  |  -__|  _  |  ||  _  |
|____|_____||__|__|_____|   __|_____|_____|__||___._|
                        |__|
"
php 1.php
fi

if [[ $menu = 2 ]] || [[ $menu = 2 ]]
then
clear
echo "${red_color}
 _______         __ __                                __
|_     _|.-----.|  |  |--.-----.--------.-----.-----.|  |
  |   |  |  -__||  |    <|  _  |        |__ --|  -__||  |
  |___|  |_____||__|__|__|_____|__|__|__|_____|_____||__|

"
php 2.php
fi

if [[ $menu = 3 ]] || [[ $menu = 3 ]]
then
clear
echo "${red_color}"
echo "
 _______         __          __                __    _______         __ __
|   |   |.---.-.|  |_.---.-.|  |--.---.-.----.|__|  |   |   |.---.-.|  |  |
|       ||  _  ||   _|  _  ||     |  _  |   _||  |  |       ||  _  ||  |  |
|__|_|__||___._||____|___._||__|__|___._|__|  |__|  |__|_|__||___._||__|__|
"
php 3.php
fi


if [[ $menu = 4 ]] || [[ $menu = 4 ]]
then
clear
echo "
 ______ _______ _____
|   __ \   |   |     \,
|    __/       |  --  |
|___|  |___|___|_____/
"
echo "${white_color}"
php 4.php
fi

if [[ $menu = 5 ]] || [[ $menu = 5 ]]
then
clear
echo "
   _____ _____    __     __
 _|     |     \  |__|.--|  |
|       |  --  |_|  ||  _  |
|_______|_____/__|__||_____|"
echo "${normal_color}"
php 5.php
fi

if [[ $menu = 6 ]] || [[ $menu = 6 ]]
then
clear
echo "
 ______        __               __          _______         __ __
|   __ \.----.|__|.--.--.---.-.|  |_.-----.|   |   |.---.-.|__|  |.-----.----.
|    __/|   _||  ||  |  |  _  ||   _|  -__||       ||  _  ||  |  ||  -__|   _|
|___|   |__|  |__| \___/|___._||____|_____||__|_|__||___._||__|__||_____|__|
"
echo "${cyan_color}"
python2 6.py
fi

if [[ $menu = 7 ]] || [[ $menu = 7 ]]
then
clear
echo "
 __  __ _______ ______
|  |/  |    ___|      |
|     <|    ___|   ---|
|__|\__|___|   |______|
"
echo "${white_color}"
php 7.php
fi

if [[ $menu = 8 ]] || [[ $menu = 8 ]]
then
clear
echo "
 _______ __ ______ _______ ___ ___
|__     |__|   __ \   _   |   |   |
|     __|  |    __/       |\     /
|_______|__|___|  |___|___| |___|
"
echo "${white_color}"
php 8.php
fi

if [[ $menu = 9 ]] || [[ $menu = 9 ]]
then
clear
echo "
           __     __         __
.--.--.--.|  |--.|__|.-----.|  |--.---.-.-----.
|  |  |  ||     ||  ||__ --||    <|  _  |__ --|
|________||__|__||__||_____||__|__|___._|_____|
"
echo "${white_color}"
php 9.php
fi

if [[ $menu = 10 ]] || [[ $menu = 10 ]]
then
clear
echo "
 _______
|   |   |.-----.-----.-----.
|       ||  _  |  _  |  _  |
|___|___||_____|_____|__   |
                        |__|
"
echo "${white_color}"
php 10.php
fi

if [[ $menu = 11 ]] || [[ $menu = 11 ]]
then
clear
echo "
 ______ _______ ______ _______         __ __
|   __ \   |   |   __ \   |   |.---.-.|__|  |.-----.----.
|    __/       |    __/       ||  _  ||  |  ||  -__|   _|
|___|  |___|___|___|  |__|_|__||___._||__|__||_____|__|
"
echo "${white_color}"
php 11.php
fi

if [[ $menu = 12 ]] || [[ $menu = 12 ]]
then
clear
echo "
 _______ __      ______                                       __
|    ___|  |--. |      |.-----.--------.--------.-----.-----.|  |_.-----.
|    ___|  _  | |   ---||  _  |        |        |  -__|     ||   _|__ --|
|___|   |_____| |______||_____|__|__|__|__|__|__|_____|__|__||____|_____|
"
echo "${white_color}"
python 12.py
fi

if [[ $menu = 13 ]] || [[ $menu = 13 ]]
then
clear
echo "
 ________                __ ______
|  |  |  |.-----.----.--|  |   __ \.----.-----.-----.-----.
|  |  |  ||  _  |   _|  _  |    __/|   _|  -__|__ --|__ --|
|________||_____|__| |_____|___|   |__| |_____|_____|_____|
"
echo "${white_color}"
php 13.php
fi

if [[ $menu = 14 ]] || [[ $menu = 14 ]]
then
clear
echo "
 _______              __
|     __|.----.---.-.|  |--.
|    |  ||   _|  _  ||  _  |
|_______||__| |___._||_____|
"
echo "${white_color}"
python 14.py
fi

if [[ $menu = 15 ]] || [[ $menu = 15 ]]
then
clear
echo "
 _______ ______   _______
|_     _|   __ \ |_     _|.----.---.-.----.-----.----.
 _|   |_|    __/   |   |  |   _|  _  |  __|  -__|   _|
|_______|___|      |___|  |__| |___._|____|_____|__|
"
echo "${white_color}"
python 15.py
fi

if [[ $menu = 16 ]] || [[ $menu = 16 ]]
then
clear
echo "
 _______ ______   _______
|_     _|   __ \ |     __|.-----.---.-.--------.--------.-----.----.
 _|   |_|    __/ |__     ||  _  |  _  |        |        |  -__|   _|
|_______|___|    |_______||   __|___._|__|__|__|__|__|__|_____|__|
                          |__|
"
echo "${white_color}"
python 16.py
fi

if [[ $menu = 81 ]] || [[ $menu = 81 ]]
then
clear
print_logo
echo "${red_color}Developer: SYSTEM ADMINISTRATOR"
echo "${green_color}Author: Fray117"
echo "${green_color}${version} "
echo "${cyan_color}Reverse Elite System Exploiter Team"
echo "${yellow_color}GitHub: https://github.com/sysadminteam/"
echo "${red_color}Thanks to: "
echo "${cyan_color}"
echo "K1D2ZON3"
echo "Mr. HC"
echo "AMRiez"
echo "Mr. GONGLI"
echo "Mr. TenWap"
echo "4WSec"
echo "Handika Pratama"
echo "Mr.Rm"
echo "Mr.IM81"
echo "ACT"
echo "SECURITY DARKNET"
echo "${white_color}";
pause 'Press [Enter]] key to continue...';echo "${green_color}"
fi

if [[ $menu = 0 ]] || [[ $menu = 0 ]]
then
echo "${red_color} Quiting..."
cd ..
echo "${green_color} ...Complete"
sleep 1
clear
exit
fi

if [[ $menu = "" ]] || [[ $menu = "" ]]
then
clear
echo "
 ________                           _______               __
|  |  |  |.----.-----.-----.-----. |     __|.--.--.-----.|  |_.---.-.--.--.
|  |  |  ||   _|  _  |     |  _  | |__     ||  |  |     ||   _|  _  |_   _|
|________||__| |_____|__|__|___  | |_______||___  |__|__||____|___._|__.__|
                           |_____|          |_____|
"
sleep 1
sh ../launcher.sh
fi

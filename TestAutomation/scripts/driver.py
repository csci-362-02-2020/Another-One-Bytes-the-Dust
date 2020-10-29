#! /usr/bin/python3.8

import sys
import subprocess
import webbrowser
import time


result = subprocess.run(
	['php', '../testCasesExecutables/TC01_05Driver.php'],
	stdout=subprocess.PIPE,
	check=True
)
x = str(result.stdout)
y = x.split('***')
#print(y)
for case in y:
	attr = case.split('$$$')
	yes = attr #trying to get what is printed to output to html file. 
	print(attr) #how do we put what is being printed in a variable?


text = f'''<!DOCTYPE html> <title>Test Report</title> <body> <h1>Test Report</h1> <br> {case} </body> </html>'''
with open("testReport.html","w") as html_file:
	html_file.write(text)





#file = open("testReport.html","w")
#file.write(text)
#file.close() 

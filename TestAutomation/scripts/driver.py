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
outstring = ""
for case in y:
	attr = case.split('$$$')
	for thing in attr:
		#str += thing 
		outstring += str(thing) #would love to test this, maybe we don't need a second loop? I don't know.
	print(attr)


Test = "Test"


wrapper = '''<!DOCTYPE html> 
<head>
<style>
.container{
	width: 90%;
	margin-left: auto;
	margin-right: auto;
	height: 1000px;
	background-color: #f2f2f2;
	
</style>
<meta charset="utf-8">
<title>Test Report</title> </head>
<body> <div class="container"><h1>Test Report</h1><br>
%s
	</div>
	</body> 
	</html>'''
text = wrapper % (Test) #attempt to get what the print(attr) outputs	
with open("testReport.html","w") as html_file:
	html_file.write(text) #just change text to wrapper to output the html file normally
html_file.close()
open_new_tab(testReport.html)






#file = open("testReport.html","w")
#file.write(text)
#file.close() 

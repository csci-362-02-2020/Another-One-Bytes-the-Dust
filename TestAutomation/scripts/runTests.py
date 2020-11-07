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

htmlOpening = '''
<!DOCTYPE html> 
<head>
<style>
.header{
	text-align: center;
	font-size: 100px;
	font-family: Arial, Helvetica, sans-serif;
	
}
.container{
	width: 90%;
	margin-left: auto;
	margin-right: auto;
	height: 380px;
	background-color: #f2f2f2;
	
</style>
<meta charset="utf-8">
<title>Test Report</title> </head>
<body>
<h1 class="header">AOBTD TESTING FRAMEWORK</h1>
'''

htmlClosing = '''
</body> 
</html>'''

innerText = '''
<div class="container">
<p>-------------------------------------------</p>
<p>Test ID: %s</p>
<p>Requirements: %s</p>
<p>Driver: %s</p>
<p>Class Tested: %s</p>
<p>Method Tested: %s</p>
<p>Testing Input: %s</p>
<p>Actual Output: %s</p>
<p>Expected Output: %s</p>
<p>Success or Fail: %s</p>
<p>-------------------------------------------</p>
</div>
'''

f = open("../temp/testReport.html", "w+")
f.write(htmlOpening)


x = str(result.stdout)
y = x.split('***')
#print(y)
outstring = ""
for case in y:
	attr = case.split('$$$')
	if (len(attr) == 9):
		whole = innerText % (attr[0].replace("b'", ""), attr[1], attr[2], attr[3], attr[4], attr[5], attr[6], attr[7], attr[8])
		f.write(whole)
	
f.write(htmlClosing)
f.close()
webbrowser.open("../temp/testReport.html")


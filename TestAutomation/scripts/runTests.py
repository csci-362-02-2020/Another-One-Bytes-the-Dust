#! /usr/bin/python3.8

import sys
import subprocess
import webbrowser
import time
import glob
import json
import functools



#read in the test cases

arrayOfCases = (glob.glob("../testCases/*.json"));
cases = []
outputs = []
driversUsed = []
php = 'php'
for case in arrayOfCases:
	f = open(case);
	data = json.load(f)
	cases.append(data)
	testingInput = ""
	driverName = ""
	for key, val in data.items():
		if (key == "driver"):
			driverName = str(val)
			if driverName not in driversUsed:
				driversUsed.append(driverName)
		if (key == "testingInputs"):
			testingInput = str(val)
	driverName = '../testCasesExecutables/' + driverName
	result = subprocess.run(
	[php, driverName, testingInput],
	stdout=subprocess.PIPE,
	check=True)
	outputs.append((str(result.stdout).replace("b'", ""))[:-1])

	
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
iteratorForActualOutput = 0

for case in cases:
	for driver in driversUsed:
		if (case['driver'] == driver):
			successOrFail = ""
			if (outputs[iteratorForActualOutput] == case['expectedOutput']):
				successOrFail = "Success"
			else:
				successOrFail = "Fail"
			whole = innerText % (case['testId'], case['requirement'], case['driver'], case['classTested'], case['methodTested'],case['testingInputs'], outputs[iteratorForActualOutput], case['expectedOutput'], successOrFail)
		f.write(whole)
	iteratorForActualOutput += 1
	
f.write(htmlClosing)
f.close()
webbrowser.open("../temp/testReport.html")


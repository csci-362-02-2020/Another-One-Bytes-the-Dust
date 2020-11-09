#! /usr/bin/python3.8

import importlib.util
import sys
import subprocess
import webbrowser
import time
import glob
import json
import functools

spec = importlib.util.spec_from_file_location("compareExpected.py", "../oracles/compareExpected.py")
compare = importlib.util.module_from_spec(spec)
spec.loader.exec_module(compare)

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
body{
	background-color: #f2f2f2;
}
table, th, td {
	border: 1px solid black
}
.header{
	text-align: center;
	font-size: 80px;
	font-family: Arial, Helvetica, sans-serif;
	
}	
</style>


<meta charset="utf-8">
<title>Test Report</title>
</head>
<body>
<h1 class="header">AOBTD TESTING FRAMEWORK</h1>
<table style="width:100%"
<tr>
	<th>Test ID</th>
	<th>Requirements</th>
	<th>Driver</th>
	<th>Class Tested</th>
	<th>Method Tested</th>
	<th>Testing Input</th>
	<th>Actual Output</th>
	<th>Expected Output</th>
	<th>Pass/Fail</th>
</tr>
'''

htmlClosing = '''
</table>
</body> 
</html>
'''


innerText = '''
<tr style="">
	<th>%s</th>
	<th>%s</th>
	<th>%s</th>
	<th>%s</th>
	<th>%s</th>
	<th>%s</th>
	<th>%s</th>
	<th>%s</th>
	<th>%s</th>
</tr>
'''

f = open("../temp/testReport.html", "w+")
f.write(htmlOpening)
iterator = 0

for case in cases:
	for driver in driversUsed:
		if (case['driver'] == driver):
			comparedOutputs = compare.compareExp(outputs[iterator], case['expectedOutput'])
			whole = innerText % (case['testId'], case['requirement'], case['driver'], case['classTested'], 				case['methodTested'],case['testingInputs'], outputs[iterator], case['expectedOutput'], comparedOutputs)
		f.write(whole)
	iterator += 1
f.write(htmlClosing)
f.close()
webbrowser.open("../temp/testReport.html")


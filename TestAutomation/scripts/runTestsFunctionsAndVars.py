#! /usr/bin/python3.8

import json

import subprocess



def addOutputsAsAttr(cases, outputs):
	throughOutputs = 0;
	for case in cases:
		case['actualOutput'] = outputs[throughOutputs]
		throughOutputs += 1

def compareExp(actualOutput, expectedOutput):
	if (actualOutput == expectedOutput):
		return "Pass"
	else:
		return "Fail"

def getOutputsFromDrivers(arrayOfCases, cases, driversUsed, outputs):
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
		['php', driverName, testingInput],
		stdout=subprocess.PIPE,
		check=True)
		outputs.append((str(result.stdout).replace("b'", ""))[:-1])



def sort(casesArr):
	casesArray = casesArr
	for i in range(len(casesArray)):
		min_index = i
		for j in range(i+1, len(casesArray)):
			if casesArray[min_index]['testId'][2:] > casesArray[j]['testId'][2:]:
				min_index = j
		casesArray[i], casesArray[min_index] = casesArray[min_index], casesArray[i]
	
	return casesArray

def sortDrivers(driversUsed, cases, sortedCases):
	for driver in driversUsed:
		tempSortedCases = []
		for case in cases:
			if (case['driver'] == driver):
				tempSortedCases.append(case)
		tempSortedCases = sort(tempSortedCases)
		for i in tempSortedCases:
			sortedCases.append(i)


def addCaseToHTML(sortedCases, f):
	for case in sortedCases:
		comparedOutputs = compareExp(case['actualOutput'], case['expectedOutput'])
		whole = innerText % (case['testId'], case['requirement'], case['driver'], case['classTested'], 				case['methodTested'],case['testingInputs'], case['actualOutput'], case['expectedOutput'], comparedOutputs)
		f.write(whole)

htmlOpening = '''
<!DOCTYPE html> 
<head>
<style>
body{
	background-color: #f2f2f2;
}
table, th, td {
	border: 1px solid black;
	font-size: 9px;
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


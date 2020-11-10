#! /usr/bin/python3.8

import importlib.util
import sys
import webbrowser
import time
import glob
import functools
from runTestsFunctionsAndVars import *

# read in the test cases
arrayOfCases = (glob.glob("../testCases/*.json"));

# globals
cases = []
outputs = []
driversUsed = []
sortedCases = []

# run subprocess to drivers to get outputs
getOutputsFromDrivers(arrayOfCases, cases, driversUsed, outputs)

#add outputs as attribute to cases
addOutputsAsAttr(cases, outputs)
	
#sort cases according to drivers
sortDrivers(driversUsed, cases, sortedCases)

# write html opening to html report
f = open("../temp/testReport.html", "w+")
f.write(htmlOpening)

# add cases in html format to the html report
addCaseToHTML(sortedCases, f)

# add html closing to html report
f.write(htmlClosing)
f.close()

#open temp file in browser
webbrowser.open("../temp/testReport.html")


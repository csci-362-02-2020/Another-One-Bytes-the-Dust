#! /usr/bin/python3.8

import sys
import subprocess
import webbrowser

print("Number of arguments:" , len(sys.argv), "arguments.")
print("Argument List:", str(sys.argv))
arg1 = sys.argv[1]


result = subprocess.run(
	#['php', '../testCasesExecutables/validEmailTest.php', arg1],
	stdout=subprocess.PIPE,
	check=True
)
print(result.stdout)
text = '''
<!DOCTYPE html>
<title>Test Report</title>
	<body>
		<h1>Test Report</h1>
		Test ID: <br>
		Designed by: <br>
		Design Date: <br>
		Requirement Tested: <br>
		Driver Name: <br>
		Class Tested: <br>
		Method Tested: <br>
		Test Input: <br>
		Expected Output: <br>
		Actual Output: <br>
		Test Successful: <br>
	</body>
</html>
'''

file = open("testReport.html","w")
file.write(text)
file.close() 

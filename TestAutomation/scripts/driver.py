#! /usr/bin/python3.8

import sys
import subprocess
import webbrowser


result = subprocess.run(
	['php', '../testCasesExecutables/TC01_05Driver.php'],
	stdout=subprocess.PIPE,
	check=True
)
#x = result
#result.stdout
#y = x.split("***")
print(result.stdout)
text = '''
<!DOCTYPE html>
<title>Test Report</title>
	<body>
		<h1>Test Report</h1>
		
	</body>
</html>
'''

file = open("testReport.html","w")
file.write(text)
file.close() 

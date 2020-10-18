#! /usr/bin/python3.8

import sys
import subprocess

print("Number of arguments:" , len(sys.argv), "arguments.")
print("Argument List:", str(sys.argv))
arg1 = sys.argv[1]


result = subprocess.run(
	['php', '../testCasesExecutables/validEmailTest.php', arg1],
	stdout=subprocess.PIPE,
	check=True
)
print(result.stdout)

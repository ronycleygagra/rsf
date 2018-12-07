import sys
import os
import decimal

soma = 0
contador=0
try:
    while(True):
        val = raw_input()
	if val != "": 
		soma=soma+float(val)
		
		contador=contador+1
		#print val.replace("-", "")
		#val = val.replace("-", "") 
        	#print val
except EOFError as e:
    print soma/contador

import sys
import os

id_no = int(sys.argv[1])

id_canal = int(sys.argv[2])

try:
    while(True):
        val = int(raw_input())
        #print("No: "+str(val))
        #verificar o no, se tiver mais
        if(val == id_no):
            ch = int(raw_input())
           # print("Ch: "+str(ch))
            
            if (ch == id_canal):
                rssi = int(raw_input())
            
                rssi_u = 1.649*pow(10,-10)*pow(rssi,5) - 1.064*pow(10,-7)*pow(rssi,4) + 2.523*pow(10,-5)*pow(rssi,3) - 0.0027*pow(rssi,2) + 0.3146*rssi- 90
            
                rssi = int(raw_input())
            
                rssi_d = 1.649*pow(10,-10)*pow(rssi,5) - 1.064*pow(10,-7)*pow(rssi,4) + 2.523*pow(10,-5)*pow(rssi,3) - 0.0027*pow(rssi,2) + 0.3146*rssi- 90
            
                saida = str(rssi_u)# + "\t" + str(rssi_d)
            
                #saida = saida.replace(".",",")
            
                print(saida)
            
                for i in range(3):
                    val = raw_input()
            else:
                for i in range(5):
                    val = raw_input()
        else:
            for i in range(6):
                val = raw_input()
                
except EOFError as e:
    print ""
        
        
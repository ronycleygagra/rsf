import serial

ser = serial.Serial('/dev/serial/by-id/usb-FTDI_FT232R_USB_UART_AI03GNWF-if00-port0', 38400)
 
while(True):
    data = ser.read() # read data from serial                              # port and strip line endings
    d = ord(data)
    print(d)
    continue
    if(d == 255):
        data = ser.read() # read data from serial                              # port and strip line endings
        idnode = ord(data)
        data = ser.read() # read data from serial                              # port and strip line endings
        ch = ord(data)
        data = ser.read() # read data from serial                              # port and strip line endings
        prr = ord(data)
        if(idnode == 3):
            print(idnode)
            print(ch)
            print(prr)

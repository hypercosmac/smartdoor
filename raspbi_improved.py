import serial

serial_port = '/dev/ttyACM0';
baud_rate = 9600;
input_file = open(file.txt, "r+");
ser = serial.Serial(serial_port, baud_rate, timeout=1)

if ser.isOpen():
    print(ser.name + ' is open...')
while True:
    status = file.read(1)
    print (status)
    if status=='1':
        print("Door opened")
        #GPIO.output(5,True)#Signal to arduino to open door
    elif status=='2':
        print("Mailed")
        #GPIO.output(6,True)#Take picture and send to mail
    elif status=='3':
        print("Streaming")
        #GPIO.output(7,True)#Send IP address
    elif status=='4':
        print("last opened: just now")

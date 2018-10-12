import RPi.GPIO as GPIO
import urllib.error
import urllib.request
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(5,GPIO.OUT)
true = 1
while(true):
    try:
        response = urllib2.urlopen('http://smartdoor/buttonStatus.php')
        status = response.read()
    except urllib.error.HTTPError as e:
        print (e.code)

    except urllib.errorURLError as e:
        print (e.args)

    print (status)
    if status=='1':
        GPIO.output(5,True)#Signal to arduino to open door
    elif status=='2':
        GPIO.output(6,True)#Take picture and send to mail
    elif status=='3':
        GPIO.output(7,True)#Send IP address
    elif status=='4':
        


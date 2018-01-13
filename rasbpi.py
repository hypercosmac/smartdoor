import RPi.GPIO as GPIO
import urllib2
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(5,GPIO.OUT)
true = 1
while(true):
                try:
                        response = urllib2.urlopen('http://smartdoor/buttonStatus.php')
                        status = response.read()
                except urllib2.HTTPError, e:
                                        print e.code

                except urllib2.URLError, e:
                                        print e.args

                print status
                if status=='1':
                                GPIO.output(5,True) #Signal to arduino to open door
                elif status=='2':
                        #Take picture and send to mail
                elif status=='3':
                        #Send IP address


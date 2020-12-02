import sys
import Adafruit_DHT
from datetime import datetime
from time import sleep
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM) # Broadcom pin-numbering scheme
GPIO.setup(22, GPIO.OUT) # Heater pin set as output
GPIO.output(22, 1)

print sys.argv[0] # prints python_script.py
print sys.argv[1] # prints var1

self.DHT_SENSOR = Adafruit_DHT.DHT11
self.DHT_PIN = 4
lastTemp = 0
lastHumid = 0
counter = 0

While lastTemp < sys.argv[1] and counter == 2:
    sleep(5)
    for x in range(10):
        sleep(0.1)
            humidity, temperature = Adafruit_DHT.read(DHT_SENSOR, DHT_PIN)
            if humidity is not None and temperature is not None:
                if temperature != lastTemp or humidity != lastHumid:
                    #print("Temp={0:0.1f}*C  Humidity={1:0.1f}%".format(self.temperature, self.humidity))
                    lastTemp = temperature
                    lastHumid = humidity
                    counter = counter + 1


GPIO.output(22, 0)
print("python done")

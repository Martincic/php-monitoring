#!/usr/bin/env python

# External module imports
import RPi.GPIO as GPIO
import time

# Pin Definitons:
buzzer = 18 # Broadcom pin 23 (P1 pin 16)

# Pin Setup:
GPIO.setmode(GPIO.BCM) # Broadcom pin-numbering scheme
GPIO.setup(buzzer, GPIO.OUT) # Buzzer pin set as output

GPIO.output(buzzer, GPIO.LOW)
try:
        for x in range(1, 200):
                time.sleep(0.00035)
                lowOrHigh = x % 2
                GPIO.output(buzzer, lowOrHigh)
        
        time.sleep(0.1)
        for x in range(1, 500):
                time.sleep(0.0005)
                lowOrHigh = x % 2
                GPIO.output(buzzer, lowOrHigh)
                        
        GPIO.cleanup()
except KeyboardInterrupt: # If CTRL+C is pressed, exit cleanly:
    GPIO.cleanup() # cleanup all GPIO


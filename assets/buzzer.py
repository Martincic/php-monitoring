#!/usr/bin/env python

# External module imports
import RPi.GPIO as GPIO
import time

# Pin Definitons:
buzzer = 18 # Broadcom pin 23 (P1 pin 16)

# Pin Setup:
GPIO.setmode(GPIO.BCM) # Broadcom pin-numbering scheme
GPIO.setup(buzzer, GPIO.OUT) # Buzzer pin set as output

print("TESTING TESTING")
GPIO.output(buzzer, GPIO.LOW)
try:
    for x in range(1, 20):
        time.sleep(0.005)
        lowOrHigh = x % 2
        GPIO.output(buzzer, lowOrHigh)
                
    GPIO.output(buzzer, 0)
    GPIO.cleanup()

    """
    for x in range(1, 100):
        time.sleep(0.0005)
        lowOrHigh = x % 2
        GPIO.output(buzzer, lowOrHigh)
    
    time.sleep(0.4)
    for x in range(1, 100):
        time.sleep(0.008)
        lowOrHigh = x % 2
        GPIO.output(buzzer, lowOrHigh)
        
    time.sleep(0.4)
    for x in range(1, 100):
        time.sleep(0.001)
        lowOrHigh = x % 2
        GPIO.output(buzzer, lowOrHigh)
    """ 
except KeyboardInterrupt: # If CTRL+C is pressed, exit cleanly:
    GPIO.cleanup() # cleanup all GPIO


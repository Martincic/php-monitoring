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
    for x in range(1, 100):
        time.sleep(0.004)
        lowOrHigh = x % 2
        GPIO.output(buzzer, lowOrHigh)
    GPIO.output(buzzer, 0)
    time.sleep(0.5)
    
    for x in range(1, 200):
        time.sleep(0.003)
        lowOrHigh = x % 2
        GPIO.output(buzzer, lowOrHigh)
    GPIO.output(buzzer, 0)
    time.sleep(0.5)
    
    for x in range(1, 100):
        time.sleep(0.005)
        lowOrHigh = x % 2
        GPIO.output(buzzer, lowOrHigh)
                
    GPIO.output(buzzer, 0)
    GPIO.cleanup()

except KeyboardInterrupt: # If CTRL+C is pressed, exit cleanly:
    GPIO.cleanup() # cleanup all GPIO


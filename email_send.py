#!/usr/bin/env python
import sys

print ("this was executed")

"""from sys import argv
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

argv = argv[1:] #Removes the useless "python3" tag

gmailUser = 'username@gmail.com'
gmailPassword = 'password'
recipient = 'email@example.co.uk'

#TODO: Format the message to the recipient.

msg = MIMEMultipart()
msg['From'] = gmailUser
msg['To'] = recipient
msg['Subject'] = subject
msg.attach(MIMEText(message))

mailServer = smtplib.SMTP('smtp.gmail.com', 587)
mailServer.ehlo()
mailServer.starttls()
mailServer.ehlo()
mailServer.login(gmailUser, gmailPassword)
mailServer.sendmail(gmailUser, recipient, msg.as_string())
mailServer.close()"""
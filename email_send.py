#!/usr/bin/env python
#argv[0] = just python things
#argv[1] = message
#argv[2] = email
#argv[3] = gmailUser
#argv[4] = gmailPassword
#argv[5] = recipient

from sys import argv
s=""
for x in argv:
	s+=x+";";
print ("this was executed, 'argv's were:", s)

from sys import argv
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

gmailUser = argv[3]
gmailPassword = argv[4]
recipient = argv[5]

subject = "New message from website."
message = "Main Message:\n" + argv[1] + "\nSender Email:" + argv[2]

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
mailServer.close()
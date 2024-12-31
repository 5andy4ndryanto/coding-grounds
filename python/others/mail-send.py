from dotenv import load_dotenv
from email.mime.text import MIMEText
import smtplib
import os


load_dotenv()

smtp_server = os.getenv("EMAIL_HOST")
smtp_port = os.getenv("EMAIL_PORT")
sender_email = os.getenv("EMAIL_HOST_USER")
sender_password = os.getenv("EMAIL_HOST_PASSWORD")
recipient_email = "recipient_email@gmail.com"

# Create the email content
subject = "Test Email"
body = "This is a test email sent from Python!"
msg = MIMEText(body, "plain")  # "plain" for plain text, "html" for HTML emails
msg["Subject"] = subject
msg["From"] = sender_email
msg["To"] = recipient_email

# Send the email
try:
    with smtplib.SMTP(smtp_server, smtp_port) as server:
        server.starttls()  # Upgrade to a secure connection
        server.login(sender_email, sender_password)
        server.sendmail(sender_email, recipient_email, msg.as_string())
        print("Email sent successfully!")
except Exception as e:
    print(f"Error sending email: {e}")
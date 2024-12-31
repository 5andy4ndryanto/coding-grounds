from apscheduler.schedulers.background import BackgroundScheduler
import time

# Define a job function
def my_job():
    print("Job executed at:", time.strftime("%Y-%m-%d %H:%M:%S"))

# Initialize the scheduler
scheduler = BackgroundScheduler()

# Add a job to run every 5 seconds
scheduler.add_job(my_job, 'interval', seconds=5)

# Start the scheduler
scheduler.start()

try:
    # Keep the program running to observe scheduled jobs
    while True:
        time.sleep(1)
except (KeyboardInterrupt, SystemExit):
    # Shut down the scheduler on exit
    scheduler.shutdown()
    print("Scheduler stopped.")

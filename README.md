# Banner View Counter

A simple website that displays an image and counts how many times it has been viewed by different users.
The project is implemented in pure PHP without any frameworks.

## How to run
1. Open a terminal and navigate to the project's root directory.
2. Run the following command: docker compose up.
3. Wait for a minute or so for MySQL to initialize and apply the migrations. Yes, it would have been better to implement a healthcheck for the db :)
4. Once MySQL is initialized, navigate to http://localhost:8000 in your web browser and enjoy.

## About the data
The MySQL image has no volumes mounted, so all data, configurations, etc. that you create during a session will be lost on the next restart.

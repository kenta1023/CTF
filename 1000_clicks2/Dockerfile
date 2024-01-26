# Use an official Python runtime as a parent image
FROM python:3.9-slim
# Set the working directory to /app
WORKDIR /app
# Copy the current directory contents into the container at /app
COPY . /app
# Install any needed packages specified in requirements.txt
RUN pip install --no-cache-dir -q Flask
# Make port 50010 available to the world outside this container
EXPOSE 50010
# Define environment variable
ENV FLASK_APP=app.py
ENV FLASK_RUN_HOST=0.0.0.0
ENV FLASK_RUN_PORT=50010
ENV FLASK_ENV=production
# Run app.py when the container launches
CMD ["flask", "run"]

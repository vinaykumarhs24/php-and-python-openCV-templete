# Face Detection System using Python OpenCV and PHP

This project integrates a simple face detection system using Python's OpenCV and a web interface powered by PHP. It's designed to be straightforward and easy to execute, demonstrating the seamless integration between Python for face detection and PHP for the web interface.

An advantage of this system is that it provides a solution to avoid opening a separate window for viewing OpenCV captures, while still executing the capture seamlessly within the web interface.

It is also an explanation for organizing the file structure.

## Repository

- GitHub: [Basic Sample PHP Template Example](https://github.com/stevesohcot/basic-sample-php-template-example)
- GitHub: [OpenCV to WebSocket (opencv2ws)](https://github.com/gonzalo123/opencv2ws)

The `opencv2ws` repository demonstrates how to use WebSockets with OpenCV to stream the video capture directly to a web interface, providing inspiration and additional reference for similar integrations.

## Requirements

- Python 3.x
- PHP (any version supporting `php -S`)
- OpenCV for Python
- Flask for Python (to handle the web server in Python)

## Installation and Setup

### 1. Install PHP

To get started, ensure that PHP is installed on your system. You can download PHP from [here](https://www.php.net/downloads) or use your system's package manager.

### 2. Run PHP Web Server

Once PHP is installed, navigate to your project folder and run the following command to start a simple PHP server:

```bash
php -S localhost:8000

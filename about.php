<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        code {
            background-color: #eee;
            padding: 5px;
            border-radius: 5px;
            display: block;
            margin: 10px 0;
        }
        p {
            line-height: 1.6;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	
	        <h2>Guide to Executing the Face Detection Project</h2>
        <p>Follow these steps to execute the face detection project:</p>
        
        <h2>Step 1: Set up a Virtual Environment</h2>
        <p>Open Command Prompt (CMD) in the folder where your project is located. Then, execute the following commands:</p>
        <code>python -m venv virtual_env</code>
        <p>This creates a virtual environment named <em>virtual_env</em>.</p>

        <h2>Step 2: Install Dependencies</h2>
        <p>Activate the virtual environment (on Windows, use <code>cd virtual_env\Scripts\activate</code>), and install the required Python packages:</p>
        <code>pip install opencv-python</code>
        <code>pip install Flask</code>

        <h2>Step 3: Run the Application</h2>
        <p>Once the dependencies are installed, start the Python application by running:</p>
        <code>python app.py</code>
		or
		<code>python ..\..\app.py</code>
		

        <h2>Step 4: View the Face Detection Output</h2>
        <p>To view the face detection feed directly from the Python server, open the following link in your web browser:</p>
        <p><a href="http://127.0.0.1:5000/video_feed" target="_blank">http://127.0.0.1:5000/video_feed</a></p>

        <h2>Final Step: Navigate to 'Python OpenCV'</h2>
        <p>On the web interface, navigate to the section labeled <strong>'Python OpenCV'</strong> to automatically open your camera and start the face detection process. The camera feed will display detected faces in real-time.</p>
</div>

<?php include("includes/footer.php");?>

</body>
</html>
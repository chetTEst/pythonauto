<!DOCTYPE html>
<html>
<head>
<?php require_once "header.php"; ?>
</head>
<body>
<h1>Prototype AutoGrader for Python for Informatics</h1>
<p>
Welcome to my *very early* protype auto-grader for Python using the 
<a href="http://www.skulpt.org" target="_new">Skulpt</a> in-browser
Python execution environment from <a href="https://twitter.com/bnmnetp" target="_new">
Brad Miller</a>.
</p>
<p>
I am preparing this as an expereimnt for my SI301 course in January.  
Send comments to Dr. Chuck.
</p>
<ul class="nav nav-pills nav-stacked">

<li><a href="auto.php?exercise=2.2">Exercise 2.2</a></li>
<li><a href="auto.php?exercise=2.3">Exercise 2.3</a></li>
<li><a href="auto.php">Counting the lines in a file</a></li>
</ul>
<p>
Unlike 
<a href="http://www.codeskulptor.org/" target="_new">CodeSkulptor</a> from Rice
University used in their excellent 
<a href="https://www.coursera.org/course/interactivepython" target="_new">Python course</a> 
on Coursera, my goal here is for auto-grading - not to be the environment that folks 
will use to write their code.  I want them to write code on their comptuters and turn 
in their assignments for grading here.
</p>
<p>
Soon this will work with 
<a href="http://developers.imsglobal.org" target="_new">IMS Learning Tools Interoperability</a>
and will send grades back to an LMS automatically when the student completes the task.
</p>

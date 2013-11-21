<?php include 'dependency.php'; ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            input[type=text]{
                border:1px solid #999;
                padding:0.5em;
                font-size: 1.2em;
                width: 300px;
            }
           input[type=button] {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000;
	padding: 10px 20px;
	background: -moz-linear-gradient(
		top,
		#a3a3a3 0%,
		#3b3b3b 50%,
		#242424 50%,
		#000000);
	background: -webkit-gradient(
		linear, left top, left bottom, 
		from(#a3a3a3),
		color-stop(0.50, #3b3b3b),
		color-stop(0.50, #242424),
		to(#000000));
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	border: 1px solid #000000;
	-moz-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 1px rgba(255,255,255,0.6);
	-webkit-box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 1px rgba(255,255,255,0.6);
	box-shadow:
		0px 1px 3px rgba(000,000,000,0.5),
		inset 0px 0px 1px rgba(255,255,255,0.6);
	text-shadow:
		0px -1px 0px rgba(000,000,000,1),
		0px 1px 0px rgba(255,255,255,0.2);
}
        </style>
    </head>
    <body>
        <?php
        
        /*be sure to run setup on PHP admin before starting.
         * 
         * create a form that will look up a user name.
         * make an ajax call to check if the user name has been taken
         * display a message to the user indicating if the username
         * has been taken
         * 
         * msg, username, valid
         * 
         * You can use the ajax and json class given or jquery if you like
         * you must create the form on this page.
         * should just be an input field and should check onblur or 
         * on a button click.
         * 
         */
        
        ?>
        
        <h1> Username LookUp </h1>
        <form method="post" action="">            
            <label>Username</label> <input id="username_lookUp" type="text" value="" /> 
            <input type="button" value="Submit" onclick="makeAjaxCall();" /><br/>
            <div id="content"></div>
        </form>
        
        <script type="text/javascript" src="js/ajax.js"></script>
        <script type="text/javascript" src="js/json.js"></script>
        
        <script type="text/javascript">
            function getValue()
            {
                return document.getElementById("username_lookUp").value;
            }
            
            
             function makeAjaxCall() {
                ajax.send("username_check.php","login=" + getValue() ,callBack);
            }
            
             function callBack(result){
                 console.log(result);
                 var results = JSON.parse(result);
                 console.log(results);
                 document.getElementById("content").innerHTML = results.msg;
             }
        </script>
        
    </body>
</html>

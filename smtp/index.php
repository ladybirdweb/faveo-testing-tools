<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <h1>TESTING OUTGOING MAILS</h1>
        <form action="smtp.php" method="POST">
        	<h3>Please Enter From Details</h3>
        	<div>
	            <label>Email : </label>
	            <input type="text" name="Email">
            </div>

            <div>
            	<label>Password : </label>
            	<input type="text" name="Password">
           	</div>

           	<div>
            	<label>Host : </label>
            	<input type="text" name="Host">
           	</div>

           	<div>
            	<label>Port : </label>
            	<input type="text" name="Port">
            </div>

            <div>
            	<label>Encryption : </label>
            	<input type="text" name="Encryption">
            </div>

            <div>
            	<label>Enable Validation : </label>
				<input type="checkbox" name="validation">
			</div>

			<h3>Please Enter To Details</h3>
            <div>
            	<label>Email To : </label>
            	<input type="text" name="To">
            </div>

            <div>
            	<label>Name To : </label>
				<input type="text" name="Name">
			</div>

            <input type="submit">
        </form>
    </body>
</html>
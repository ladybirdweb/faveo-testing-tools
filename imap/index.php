<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    	<h1>TESTING INCOMING MAIL</h1>
        <form action="imap.php" method="POST">
            <div>
                <LABEL>Email : </LABEL>
                <input type="text" name="Email">
            </div>
            <div>
                <LABEL>Password : </LABEL>
                <input type="text" name="Password">
            </div>
            <div>
                <LABEL>Host : </LABEL>
                <input type="text" name="Host">
            </div>
            <div>
                <LABEL>Port : </LABEL>
                <input type="text" name="Port">
            </div>
            <div>
                <LABEL>Protocol : </LABEL>
                <input type="text" name="Protocol">
            </div>
            <div>
                <LABEL>Encryption : </LABEL>
                <input type="text" name="Encryption">
            </div>
            <input type="submit">
        </form>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
        <h1>This is test page</h1>
        <p>this is paragraph</p>
    
    <form action ="/save" method = "post">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">
        <input type="submit" value="save">
    </form>
    
    </body>
</html>
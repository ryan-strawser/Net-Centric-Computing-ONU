<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Play With JavaScript</h1>
        
        Enter name here:<input id="helloTag">
        <button id="submitButton" onclick="submitName()"> Submit </button>
        <script>
            function submitName(){
                var helloTag = document.getElementById("helloTag").value;
                window.alert("Hello " + helloTag);
        }
        </script>
            
    </body>
</html>

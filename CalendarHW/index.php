<!DOCTYPE html>
<style>
    table
    {
    border-spacing: 4px;
    background-color: black;
    }
    
    td
    {
        background-color: yellow;
    }
    
</style>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CalendarHW</title>
    </head>
    <body>
        <?php
        echo "<h1>March</h1>";
        CalendarHW(32);
        function CalendarHW($days) {
        
        echo "<table>";
        echo "<tr>";
        for ($i = 1; $i < $days; $i++) {
            echo "<td style='text-align:right; width:25px; height:25px; border: 1px solid black; margin: 0px;'>" . $i . "</td>";
            if ($i % 7 == 0) {
                echo "</tr>";
                echo "<tr>";
            }
        }
        echo "</tr>";
        echo "</table>";
    }
    ?>
    </body>
</html>

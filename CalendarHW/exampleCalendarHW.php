<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<link rel='stylesheet' type='text/css' href='CSS/Calendar.css'>";
echo "<p>Simple Calendar</p>";
echo "<p>";
for ($i = 1; $i < 32; $i++) {
  echo $i . "   ";
  if ($i % 7 == 0) {
    echo "</p>";
  }
}
echo "<p>Calendar as a table (no styling)</p>";
echo "<table>";
echo "<tr>";
for ($i = 1; $i < 32; $i++) {
  echo "<td>" . $i . "</td>";
  if ($i % 7 == 0) {
    echo "</tr>";
    echo "<tr>";
  }
}
echo "</tr>";
echo "</table>";
echo "<p>Calendar as a table (with styling)</p>";
echo "<table>";
echo "<tr>";
for ($i = 1; $i < 32; $i++) {
  echo "<td style='text-align:right; width:25px; height:25px; border: 1px solid black; margin: 0px;'>" . $i . "</td>";
  if ($i % 7 == 0) {
    echo "</tr>";
    echo "<tr>";
  }
}
echo "</tr>";
echo "</table>";
echo "<p>Calendar as a function call<p>";
Calendar();
echo "<p>Calendars with start days -  error</p>";
for ($i = 0; $i < 7; $i++)
{
  CalendarWithStartDay1($i);
}
echo "<p>Calendars with start days 0-6 (Sun - Sat)</p>";
for ($i = 0; $i < 7; $i++)
{
  CalendarWithStartDay2($i);
}
echo "<p>Calendars with Start Day and Number of Days</p>";
CalendarWithStartDayAndNumDays(2, 28);
CalendarWithStartDayAndNumDays(1, 30);
CalendarWithStartDayAndNumDays(5, 31);
echo "<p>Calendars for given Months</p>";
CalendarForMonthYear(2, 2017);
CalendarForMonthYear(6, 1952);
CalendarForMonthYear(9, 1752);
 
function Calendar() {
  echo "<table>";
  echo "<tr>";
  for ($i = 1; $i < 32; $i++) {
    echo "<td style='text-align:right; width:25px; height:25px; border: 1px solid black; margin: 0px;'>" . $i . "</td>";
    if ($i % 7 == 0) {
      echo "</tr>";
      echo "<tr>";
    }
  }
  echo "</tr>";
  echo "</table>";
}
function CalendarWithStartDay1($StartDay) {
  echo "<table>";
  echo "<tr>";
  for ($i = 0; $i < $StartDay; $i++) {
    echo "<td style='text-align:right; width:25px; height:25px; border: 1px solid black; margin: 0px;'>" . " " . "</td>";
  }
  for ($i = 1; $i < 32; $i++) {
    echo "<td style='text-align:right; width:25px; height:25px; border: 1px solid black; margin: 0px;'>" . $i . "</td>";
    if ($i % 7 == 0) {
      echo "</tr>";
      echo "<tr>";
    }
  }
  echo "</tr>";
  echo "</table>";
}
function CalendarWithStartDay2($StartDay) {
  echo "<table>";
  echo "<tr>";
  for ($i = 0; $i < $StartDay; $i++) {
    echo "<td style='text-align:right; width:25px; height:25px; border: 1px solid black; margin: 0px;'>" . " " . "</td>";
  }
  $CurrDayOfWeek = $StartDay;
  for ($i = 1; $i < 32; $i++) {
    echo "<td style='text-align:right; width:25px; height:25px; border: 1px solid black; margin: 0px;'>" . $i . "</td>";
    $CurrDayOfWeek++;
    if ($CurrDayOfWeek % 7 == 0) {
      echo "</tr>";
      echo "<tr>";
    }
  }
  echo "</tr>";
  echo "</table>";
}
function CalendarWithStartDayAndNumDays($StartDay, $Days) {
  echo "<table class='floater'>";
  echo "<tr>";
  for ($i = 0; $i < $StartDay; $i++) {
    echo "<td style='text-align:right; width:25px; height:25px; border: 1px solid black; margin: 0px;'>" . " " . "</td>";
  }
  $CurrDayOfWeek = $StartDay;
  for ($i = 1; $i <= $Days; $i++) {
    echo "<td style='text-align:right; width:25px; height:25px; border: 1px solid black; margin: 0px;'>" . $i . "</td>";
    $CurrDayOfWeek++;
    if ($CurrDayOfWeek % 7 == 0) {
      echo "</tr>";
      echo "<tr>";
    }
  }
  echo "</tr>";
  echo "</table>";
}
function CalendarForMonthYear($Month, $Year)
{
  $JulianDate = gregoriantojd($Month, 1, $Year);
  
  $FirstDay = jddayofweek($JulianDate);
  $DaysInMonth = cal_days_in_Month(CAL_GREGORIAN, $Month, $Year);
  echo "<p class='floater'>" . jdmonthname($JulianDate, 1) . " " . $Year . "</p>";
  CalendarWithStartDayAndNumDays($FirstDay, $DaysInMonth);
}
?>

<html>
  <head>
    <link rel='stylesheet' type='text/css' href='CSS/Calendar.css'> 
  </head>
  <body>
    <div id="MainDiv">
      <p id="Text">
        This is a lot of text about calendars.  1752 (MDCCLII) was a leap year 
        starting on Saturday (dominical letter BA) of the Gregorian calendar and 
        a leap year starting on Wednesday (dominical letter ED) of the Julian 
        calendar, the 1752nd year of the Common Era (CE) and Anno Domini (AD) 
        designations, the 752nd year of the 2nd millennium, the 52nd year of 
        the 18th century, and the 3rd <?php
          CalendarForMonthYear(2, 2017);
        ?>year of the 1750s decade. As of the start 
        of 1752, the Gregorian calendar was 11 days ahead of the Julian 
        calendar, which remained in localized use until 1923. In the British 
        Empire, it was the only year with 355 days, as 3-13
        September were skipped when the Empire adopted the Gregorian calendar.
      </p>
    </div>
  </body>
</html>


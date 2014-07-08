<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

echo"


<script type=\"text/javascript\">

// Load the Visualization API and the piechart package.
    google.load('visualization', '1.0', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(draw_" . $sports_table . "_Chart0);
    google.setOnLoadCallback(draw_" . $sports_table . "_Chart1);
    google.setOnLoadCallback(draw_" . $sports_table . "_Chart2);
    google.setOnLoadCallback(draw_" . $sports_table . "_Chart3);
    google.setOnLoadCallback(draw_" . $sports_table . "_Visualization);
    
    function draw_" . $sports_table . "_Visualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
            ['Game Date', 'Touchdowns', 'Yards', 'Receptions', 'Tackles', 'Goal', 'Average'],
            ['2004/05',  165,      938,         522,             998,           450,      614.6],
            ['2005/06',  135,      1120,        599,             1268,          288,      682],
            ['2006/07',  157,      1167,        587,             807,           397,      623],
            ['2007/08',  139,      1110,        615,             968,           215,      609.4],
            ['2008/09',  136,      691,         629,             1026,          366,      569.6]
        ]);

        var options = {        
            
width:814,
height:375,
            title : 'Main Profile Snapshot',
            vAxis: {title: \"Value\"},
            hAxis: {title: \"Game/Workout\"},
            seriesType: \"bars\",
            series: {4: {type: \"line\"},5: {type: \"line\"}}
            
        };

        var chart = new google.visualization.ComboChart(document.getElementById('" . $sports_table . "_chart_div0'));
        chart.draw(data, options);
    }
    

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function draw_" . $sports_table . "_Chart0() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
            ['Pass Completions', 3],
            ['Incomplete Passes', 1]            
        ]);

        // Set chart options
        var options = {'title':'Passing Yards',
            'width':335,
            'height':280};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('" . $sports_table . "_chart_div1'));
        chart.draw(data, options);
        
    }
    function draw_" . $sports_table . "_Chart1() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
            ['FGs Made', 4],
            ['Fg Missed', 1]          
        ]);

        // Set chart options
        var options = {'title':'Field Goals',
            'width':335,
            'height':280};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('" . $sports_table . "_chart_div2'));
        chart.draw(data, options);
        
    }
    function draw_" . $sports_table . "_Chart2() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2004',  1000,      400],
            ['2005',  1170,      460],
            ['2006',  660,       1120],
            ['2007',  1030,      540]
        ]);

        var options = {
            title: 'Company Performance',
            hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('" . $sports_table . "_chart_div3'));
        chart.draw(data, options);
    }
    function draw_" . $sports_table . "_Chart3() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2004',  1000,      400],
            ['2005',  1170,      460],
            ['2006',  660,       1120],
            ['2007',  1030,      540]
        ]);

        var options = {
            title: 'Company Performance',
            hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('" . $sports_table . "_chart_div4'));
        chart.draw(data, options);
    }
    
</script>  
";
?>

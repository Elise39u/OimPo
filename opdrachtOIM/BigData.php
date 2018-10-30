<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Social');
        data.addColumn('number', 'Games');
        data.addRows([
            ['Empries and Puzzels', 35],
            ['Spotify', 30],
            ['whatsapp', 20],
            ['instagram', 5],
            ['snap chat', 2.5],
            ['idle tycoon miner', 10],
            ['Tinder', 2.5],
            ['Hot or not', 5],
        ]);

        // Set chart options
        var options = {'title':'How do i use my phone' +
            ' in % of the phone',
            'width':600,
            'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

<?php include ("../templates/header.php");?>

<div class="container">
    <div class="row">
        <h1> Big Data </h1>
    </div>
    <div class="row">
        <div class="col-sm">
            Voor deze opdracht moesten we een week lang bijhouden wat we deden op onze telefoon <br>
            In de les moesten we dit exporteren naar de pc en verwerken <br>
            Je had een aantal keuzes om te tonen hoe je het wou laten zien
        </div>
        <div class="col-sm">
            <div id="chart_div"></div>
            <p class="subtekst darkBack"> the exercise </p>
        </div>
        <div class="col-sm">
            <p class="darkBack">
                Achteraf hoorde ik toch dat je ook andere onderwerpen mocht kiezen <br>
                Dit in verband ik er niet was omdat ik moest oppassen. <br>
                Maar dat maakte toch niet uit want ik heb mijn mobiel gekozen en het zag er goed uit
            </p>
        </div>
    </div>
</div>

<?php include ('../templates/footer.php');   ?>

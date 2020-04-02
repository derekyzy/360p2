<!DOCTYPE html>
<html>
  <head>
      <title>Analysis the tpoics</title>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
  </head>
  <body>
    <div id="container" style="width: 100%; height: 100%;"></div>
    <script>
        anychart.onDocumentReady(function() {

// set the data
var data = [
    {x: "PE", value: 223553265},
    {x: "Animation", value: 38929319},
    {x: "Gaming", value: 2932248},
    {x: "Education", value: 14674252},
];

// create the chart
var chart = anychart.pie();

// set the chart title
chart.title("Number of Posts in four forums");

// add the data
chart.data(data);

// display the chart in the container
chart.container('container');
chart.draw();

});
    </script>
  </body>
</html>
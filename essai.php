<html>
<head>
<script type="text/javascript"
src="dygraph.js"></script>
<link rel="stylesheet" src="dygraph.css" />
</head>
<body>
<div id="graphdiv2"
style="width:500px; height:300px;"></div>
<script type="text/javascript">
g2 = new Dygraph(
document.getElementById("graphdiv2"),
"sensors_data.csv", // path to CSV file
{} // options
);
</script>
</body>
</html>


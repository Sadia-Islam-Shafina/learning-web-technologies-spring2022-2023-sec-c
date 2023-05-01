<!DOCTYPE html>
<html>
<head>
	<title>Calender</title>
	<link rel="stylesheet" href="../css/academic_calender.css" />
</head>
<body>
	

	<h1>Calender details</h1>
	<button style = "background : skyblue; color: black" onclick="loadUsers()">Load Data</button>
	<button style = "background : skyblue; color: black" onclick="removeData()">Remove Data</button>
	<table style="color:black" width = "70%">
		
		<tbody id="info-data">
		
		</tbody>
	</table>
		
	<script>
		// document.addEventListener('DOMContentLoaded', function() {
		// 	loadUsers();
		// });
	</script>
	<script src="../js/calenderajex.js"></script>
</body>
</html>
<html>
	<body>
		<h1>This is HTML</h1>
		<button onclick="viewJS()">Click me to Run JS!</button>
		<p id="p1"></p>
		
		<script>
			//document.write("This is from JS");
			//alert("This is from JS");
			function viewJS(){
				var p = document.getElementById("p1");
				p.innerHTML = "This is from JS";
				p.style.color="blue";
				p.style.margin="50px";
				p.style.backgroundColor="black";
				p.style.borderRadius="3px";
				p.style.padding="5px";
			}
		</script>
	</body>
</html>
<script type="text/javascript">
	$( "#search" ).submit(function( event ) {
		if( parseInt(0) < parseInt($("#search_content").val().length) ) {
			var search_item = $("#search_content").val();
			window.location.replace("http://127.0.0.1/assignment_1/search.php?search="+search_item);
		} 
		event.preventDefault();
	});
</script>
</body>
</html>

jQuery( document ).ready(function() {
	var table = jQuery('#example').dataTable({
		"sAjaxSource": "data.php",
		"aoColumns": [
		{ mData: 'id' },
			{ mData: 'name' },
				{ mData: 'password' },
					{ mData: 'email' }
					]
	});
});
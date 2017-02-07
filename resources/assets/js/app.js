(function() {

	app = {
		init: function() {
			this.listeners();
			console.log('yoyoyoyo');
		},

		listeners: function() {
			$('#btnTest').on('click', this.test.bind(this));
			$('#btnSubtract').on('click', this.subtract.bind(this));
		},

		test: function() {
			$.get('/test')
			.done(function(response) {
				console.log(response);
			});
		},

		subtract: function() {
			console.log("yup");
			var id = $("#id").html();
			$.ajax({
				url : '/products/subtract/' + id,
				type : "post",
				token : $( this ).find( 'input[name=_token]' ).val()
			})
			.done(function() {console.log("orijtijo")});
		}
	}

	app.init();

})();
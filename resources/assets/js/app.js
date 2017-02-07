(function() {

	app = {
		init: function() {
			this.listeners();
			console.log('yoyoyoyo');
		},

		listeners: function() {
			$('#btnSubtract').on('click', this.subtract.bind(this));
		},

		subtract: function() {
			var id = $("#id").html();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: '/products/subtract/' + id,
				type: 'post'
			})
			.done(function(response) {
				$("#stock").html(response);
				console.log(response);
			});
		}

	}

	app.init();

})();
(function() {

	app = {
		init: function() {
			this.listeners();
		},

		listeners: function() {
			$('#btnSubtract').on('click', this.subtract.bind(this));
			$('#btnAdd').on('click', this.add.bind(this));
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
			});
		},

		add: function() {
			var id = $("#id").html();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: '/products/add/' + id,
				type: 'post'
			})
			.done(function(response) {
				$("#stock").html(response);
			});
		}

	}

	app.init();

})();
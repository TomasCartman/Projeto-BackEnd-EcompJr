$(document).ready(function(){
	$('.btn-read').click(function(){
		let full_id = this.id
		let id = full_id.length < 5 ? full_id[3] : full_id[3] + full_id[4].toString()

		let ajaxurl = "/routes/routes.php"
		data = { 'msg_id': id }
		$.post(ajaxurl, data, function(response){
			alert("action perfomed haha")
		})
	})
})
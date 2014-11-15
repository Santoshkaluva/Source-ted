$(function () {
		var set_message = $('#message'),
		 set_date = new Date(2014,11,24),
		 newYear = true;

		if ((new Date()) < set_date) {
			set_date = (new Date()).getTime() + 9*24*60*60*1000;
			newYear = false;
		}

		$('#set_countdown').countdown({
				timestamp : set_date,
				callback  : function(days,hours,minutes,seconds) {
					var display = "";

					display += days + " day" + (days==1 ? '':'s' ) + ", ";
					display += hours + " hour" + (hours==1 ? '':'s' ) + ", ";
					display += minutes + " minute" + (minutes==1 ? '':'s' ) + ", ";
					display += seconds + " second" + (seconds==1 ? '':'s' ) + " <br />"

			if(newYear){
				display += "There might be some error";
			}
			else {
				display += "Left for the launch of the new website";
			}
					
					set_message.html(display);
				} 
		});
});
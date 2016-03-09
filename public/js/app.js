new Vue({

	el:'#events',

	data : {
		event: { name: '', description: '', date: '' },
 		events: []
	},

	ready: function(){
		 this.fetchEvents();
	},

	methods : {

		 fetchEvents: function() {
		    // var events = [
		    //   {
		    //     id: 1,
		    //     name: 'TIFF',
		    //     description: 'Toronto International Film Festival',
		    //     date: '2015-09-10'
		    //   },
		    //   {
		    //     id: 2,
		    //     name: 'The Martian Premiere',
		    //     description: 'The Martian comes to theatres.',
		    //     date: '2015-10-02'
		    //   },
		    //   {
		    //     id: 3,
		    //     name: 'SXSW',
		    //     description: 'Music, film and interactive festival in Austin, TX.',
		    //     date: '2016-03-11'
		    //   }
		    // ];

		    // GET request
		    //Vue.http.get('/someUrl', [data], [options]).then(successCallback, errorCallback);
		      this.$http.get('api/events').then(function (events) {
		          this.$set('events', events.data);
		      }, function (response) {
		          console.log(error);
		      });

		    // If we had a back end with an events endpoint set up that responds to GET requests
			// this.$http.get('api/events').then(function(events) {
			//   this.$set('events', events);
			// }).catch(function(error) {
			//   console.log(error);
			// });
					    // $set is a convenience method provided by Vue that is similar to pushing
		    // data onto an array
		    //this.$set('events', events);
		  },

	   // Adds an event to the existing events array
		  addEvent: function() {
		    if(this.event.name) {
		      this.events.push(this.event);
		      this.event = { name: '', description: '', date: '' };
		    }
		  },

		  deleteEvent: function(event) {
		  if(confirm("Are you sure you want to delete this event?")) {
		    // $remove is a Vue convenience method similar to splice
		    this.events.$remove(event);        
		  }
		}

	}

});
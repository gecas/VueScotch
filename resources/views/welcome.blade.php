<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <meta id="token" name="token" value="{{csrf_token()}}">
    </head>
    
    <body>
        
        <!-- navigation bar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <a class="navbar-brand"><i class="glyphicon glyphicon-bullhorn"></i> Vue Events Bulletin Board</a>
    </div>
  </nav>

  <!-- main body of our application -->
  <div class="container" id="events">

    <!-- add an event form -->
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Add an Event</h3>
        </div>
        <div class="panel-body">
            <div class="panel-heading">
          <h3>Add an Event</h3>
        </div>
        <div class="panel-body">

          <div class="form-group">
            <input class="form-control" placeholder="Event Name" name="name" v-model="event.name">
          </div>

          <div class="form-group">
            <textarea class="form-control" placeholder="Event Description" name="description" v-model="event.description"></textarea>
          </div>

          <div class="form-group">
            <input type="date" class="form-control" placeholder="Date" name="date" v-model="event.date">
          </div>

          <button class="btn btn-primary" @click="postEvent">Submit</button>

        </div>
        </div>

      </div>
    </div>

    <!-- show the events -->
    <div class="col-sm-6">
      <div class="list-group">
            <div class="list-group">

          <a href="#" class="list-group-item" v-for="event in events">
            <h4 class="list-group-item-heading">
              <i class="glyphicon glyphicon-bullhorn"></i> 
              @{{ event.name }}
            </h4>

            <h5>
              <i class="glyphicon glyphicon-calendar" v-if="event.date"></i> 
              @{{ event.date }}
            </h5>

            <p class="list-group-item-text" v-if="event.description">@{{ event.description }}</p>

            <button class="btn btn-xs btn-danger" @click="deleteEvent(event)">Delete</button>
          </a>

        </div>
      </div>
    </div>
  
  </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.17/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>
    <script src="/js/app.js"></script>
    </body>
</html>

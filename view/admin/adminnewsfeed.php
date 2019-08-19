<h1>Create a event</h1>
<form name="createEventForm" action="http://localhost/pebbles/admin/createEvent" method="post" enctype="multipart/form-data">
  <div class="form-controll">
    <label for="eventImg">Please Choose Image for the Event</label>
    <input type="file" name="eventImg">
  </div>
  <div class="form-controll">
    <label for="titleEvent">Enter Event Title</label>
    <textarea name="titleEvent" rows="4" cols="79"></textarea>
  </div>
  <input type="submit" name="eventSubmit" value="Submit">
</form>

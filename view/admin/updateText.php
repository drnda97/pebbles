<?php if (isset($_SESSION['oneText'])): ?>
  <?php $oneText = $_SESSION['oneText'] ?>
  <form  id="updateTextForm" action="http://www.pebbles.com/admin/updateText?id=<?php echo $oneText['id']; ?>" method="post">
    <div class="form-controll">
      <label for="updateText">Enter new text</label>
    </div>
    <input type="submit" name="updateText" value="Submit">
  </form>
  <textarea name="updateText" form="updateTextForm" rows="8" cols="80"><?php echo $oneText['text']; ?></textarea>

<?php $texts = $_SESSION['textContact']; ?>
<div class="contact">
  <?php foreach ($texts as $text): ?>
    <?php if ($text['tag_name'] === 'headline'): ?>
      <h2 class="contact_h2"><?php echo $text['text']; ?></h2>
    <?php endif; ?>
  <?php endforeach; ?>
  <?php foreach ($texts as $text): ?>
    <?php if ($text['tag_name'] === 'p'): ?>
      <p><?php echo $text['text']; ?></p>
    <?php endif; ?>
    <?php if ($text['tag_name'] === 'a'): ?>
      <p><a href="tel:<?php echo $text['text']; ?>"><?php echo $text['text']; ?>.</a> </p>
    <?php endif; ?>
  <?php endforeach; ?>
  <form name="contactForm" action="/user/mailMe" method="post">
    <div class="form-control contactn">
      <input type="text" name="name" placeholder="Name">
    </div>
    <div class="form-control contactname clearfix">
      <input type="text" name="email" placeholder="Email">
    </div>
    <div class="form-control contact">
      <input type="text" name="telephone" placeholder="Telephone">
    </div>
    <div class="form-control contact">
      <textarea name="msg" rows="4" cols="76" placeholder="Message"></textarea>
    </div>
    <button type="button" name="mailSubmit">Send</button>
  </form>
</div>
<script type="text/javascript" src="../js/contact.js"></script>

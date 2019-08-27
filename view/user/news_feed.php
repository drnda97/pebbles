<?php $events = $_SESSION['events']; ?>
<?php $images = $_SESSION['feedImage']; ?>
<div class="news_wrapper clearfix">
  <img src="<?php echo $images['0']['img_url']; ?>" alt="" class="news-cover">
  <main id="newsFeedMain">
    <?php foreach ($events as $event): ?>
        <div class="card">
          <img src="<?php echo $event['img_url']; ?>" alt="">
          <p><?php echo $event['title']; ?></p>
        </div>
    <?php endforeach; ?>
  </main>
</div>

<?php $events = $_SESSION['events']; ?>
<div class="news_wrapper clearfix">
  <img src="../pebbles/11.jpg" alt="" class="news-cover">
  <main id="newsFeedMain">
    <?php foreach ($events as $event): ?>
        <div class="card">
          <img src="<?php echo $event['img_url']; ?>" alt="">
          <p><?php echo $event['title']; ?></p>
        </div>
    <?php endforeach; ?>
  </main>
</div>

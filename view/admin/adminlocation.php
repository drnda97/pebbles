<?php $texts = $_SESSION['locationText']; ?>
<table border="1" cellpadding="15" cellspacing="0">
  <thead>
    <tr>
      <th>Text</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($texts as $text): ?>
      <?php if ($text['option_name'] == 'location' || $text['option_name'] == 'telephone'): ?>
        <tr>
          <td><?php echo $text['text']; ?></td>
          <td><a href="<?php echo WEBROOT; ?>/admin/deleteText?id=<?php echo $text['id']; ?>">delete</a></td>
          <td><a href="<?php echo WEBROOT; ?>/admin/updateText?id=<?php echo $text['id']; ?>">update</a></td>
      <?php endif; ?>
    <?php endforeach; ?>
  </tbody>
</table>

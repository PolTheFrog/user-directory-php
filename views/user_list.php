<?php include 'header.php'; ?>
<ul>
<?php foreach ($users as $user): ?>
    <li><a href="?id=<?= $user['id'] ?>"><?= htmlspecialchars($user['name']) ?></a></li>
<?php endforeach; ?>
</ul>
<?php include 'footer.php'; ?>

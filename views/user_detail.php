<?php include 'header.php'; ?>
<?php if ($user): ?>
    <h2><?= htmlspecialchars($user['name']) ?></h2>
    <p>Email: <?= htmlspecialchars($user['email']) ?></p>
<?php else: ?>
    <p>User not found.</p>
<?php endif; ?>
<?php include 'footer.php'; ?>

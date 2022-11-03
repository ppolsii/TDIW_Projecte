<ul>
<?php foreach ($categories as $categoria): ?>
    <li>
        <h3><?php echo $categoria['id'] ?> </h3>
        <h3><?php echo $categoria['nom'] ?> </h3>
    </li>
<?php endforeach; ?>
</ul>
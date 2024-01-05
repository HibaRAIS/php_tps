<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Commentaires des Visiteurs</title>
    <!-- <link href="style.css" rel="stylesheet" />-->
</head>
<body>
    <h1>Informations du Visiteur</h1>
    <p>Prénom : <?php echo htmlspecialchars($post['firstname']); ?></p>
    <p>Nom : <?php echo htmlspecialchars($post['lastname']); ?></p>
    <p>Date de visite : <?php echo $post['french_visite_date']; ?></p>

    <h2>Commentaires</h2>
    <?php foreach ($comments as $comment) : ?>
        <div class="comment">
            <p>
                <?php echo htmlspecialchars($comment['firstname']); ?>
                a commenté le <?php echo $comment['comment_date']; ?> :<br />
                <?php echo htmlspecialchars($comment['comment']); ?>
            </p>
        </div>
    <?php endforeach; ?>
</body>
</html>

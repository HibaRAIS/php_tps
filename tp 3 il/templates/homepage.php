<!DOCTYPE html>
<html> <head>
 <meta charset="utf-8" />
 <title>Les visiteurs</title>
 <!-- <link href="style.css" rel="stylesheet" />-->
</head><body>
 <h1>Les informations des visiteurs</h1>
 <p>Date de dernier visite :</p>
 <?php
 foreach ($posts as $post) {
 ?>
 <div class="news">
 <h3>
 <?php echo htmlspecialchars($post['firstname']);
 // We display the post content.
 echo nl2br(htmlspecialchars($post['lastname'])); ?>
 <em>le <?php echo $post['french_visite_date']; ?></em>
 </h3>
 <p> <br /> <em><a href="#">Commentaires</a></em> </p>
 </div>
 <?php } // The end of the posts loop.
 ?>
</body></html
<?php
require('../src/model.php');

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $post = getPost($postId);
    $comments = getComments($postId);
    require('../templates/post.php');
} else {
    echo "Identifiant du post non trouvé.";
}
?>

<?php
function dbConnect() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=MyDataBase;charset=utf8', 'root', '');
        return $bdd;
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
function getPost($postId) {
    $bdd = dbConnect();
    $statement = $bdd->prepare('SELECT * FROM MyGuests WHERE Id = ?');
    $statement->execute([$postId]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}
function getComments($postId) {
    $bdd = dbConnect();
    $statement = $bdd->prepare('SELECT firstname, comment, comment_date FROM comments WHERE post_id = ?');
    $statement->execute([$postId]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
?>

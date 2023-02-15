<?php include "header.php";
include "connexionpdo.php";
$num=$_POST['num'];
$libelle=$_POST['libelle'];

$req=$monPdo->prepare("update nationalite set libelle = :libelle where num = :num");
$req->bindParam(':num', $num);
$req->bindParam(':libelle', $libelle);
$nb=$req->execute();

echo '<div class="container mt-5">';

echo '<div class="row">
    <div class="col mt-3"></div>
</div>';

if($nb == 1)
{
    echo ' <div class="alert alert-success" role="alert">
    La nationalité a bien été modifiée
    </div> ';
}
else
{
    echo ' <div class="alert alert-danger" role="alert">
    La nationalité n\'a pas été modifiée !
    </div> ';
}
?>

<a href="listeNationalites.php" class="btn btn-primary">Revenir à la liste des nationalités</a>
</div>
</div>
</div>

<?php include "footer.php";

?>
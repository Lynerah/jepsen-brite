 <?php
session_start();
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=jepsenBrite;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
 
if(isset($_GET['Personid']) AND $_GET['Personid'] > 0) { 
$deleteId = $_SESSION['Personid'];
 // if(isset($_POST['delete'])){
           echo "je suis la";

				$delete = $bdd->prepare("DELETE FROM persons WHERE Personid = ?");
            	$delete->execute(array($deleteId));
            	echo "supprimé";
            	             // header('Location: page-signup.php');
        }
echo "bon c est pas ca";
?>
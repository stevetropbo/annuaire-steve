<?php
/**
 * Created by PhpStorm.
 * User: christophe
 * Date: 18/10/2018
 * Time: 14:55
 */

class PdoBridge
{
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=annuaire';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdoBridge = null;
    /**
     * @var PDO   <--- need by PhpStorm to find Methods of PDO
     */
    private static $monPdo;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct()
    {
        PdoBridge::$monPdo = new PDO(PdoBridge::$serveur . ';' . PdoBridge::$bdd, PdoBridge::$user, PdoBridge::$mdp);
        PdoBridge::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        PdoBridge::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     *
     * Appel : $instancePdolafleur = PdoBridge::getPdoBridge();
     * @return l'unique objet de la classe PdoBridge
     */
    public static function getPdoBridge()
    {
        if (PdoBridge::$monPdoBridge == null) {
            PdoBridge::$monPdoBridge = new PdoBridge();
        }
        return PdoBridge::$monPdoBridge;
    }
    public function getLesMembres()
    {
        $sql = 'SELECT id, nom, prenom FROM membres';
        $req = PdoBridge::$monPdo->prepare($sql);
        $req->execute();
        $d = $req->fetchALL(PDO::FETCH_ASSOC);
        return $d;
    }

    
    
}
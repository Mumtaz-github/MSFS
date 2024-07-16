<!-- < ?php

require_once('database.php'); // Include the database.php file

class DAO {
    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }
   // categorie page accueil
    public function getPopularCategories() {
        // Requête SQL pour récupérer les 6 catégories les plus populaires
        $sql = "SELECT c.id, c.libelle, c.image FROM categorie c JOIN plat p ON c.id = p.id_categorie GROUP BY c.id ORDER BY COUNT(p.id) DESC LIMIT 6";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
// plat page accueil
    public function getBestSellingDishes() {
        // Requête SQL pour récupérer les 3 plats les plus vendus
        $sql = "SELECT p.id, p.libelle, p.image FROM plat p JOIN commande cp ON p.id = cp.id_plat GROUP BY p.id ORDER BY SUM(cp.quantite) DESC LIMIT 3";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
// categorie page categorie
    public function getCategories() {
        // Requête SQL pour récupérer toutes les catégories actives
        $sql = "SELECT * FROM categorie WHERE categorie.active = 'Yes'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Instancier le DAO
$dao = new DAO($conn);

// Récupérer les catégories populaires
$categories = $dao->getPopularCategories();

// Récupérer les plats les plus vendus
$bestSellingDishes = $dao->getBestSellingDishes();

// Récupérer toutes les catégories
$allCategories = $dao->getCategories();

?> -->

<<?php

require_once('database.php'); // Include the database.php file

class DAO {
    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }
    
    // categorie page accueil
    public function getPopularCategories() {
        // Requête SQL pour récupérer les 6 catégories les plus populaires
        $sql = "SELECT c.id, c.libelle, c.image FROM categorie c JOIN plat p ON c.id = p.id_categorie GROUP BY c.id ORDER BY COUNT(p.id) DESC LIMIT 6";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // plat page accueil
    public function getBestSellingDishes() {
        // Requête SQL pour récupérer les 3 plats les plus vendus
        $sql = "SELECT p.id, p.libelle, p.image FROM plat p JOIN commande cp ON p.id = cp.id_plat GROUP BY p.id ORDER BY SUM(cp.quantite) DESC LIMIT 3";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // categorie page categorie
    public function getCategories() {
        // Requête SQL pour récupérer toutes les catégories actives
        $sql = "SELECT * FROM categorie WHERE categorie.active = 'Yes'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Get 6 dishes from plat table
    public function getSixDishes() {
        // Requête SQL pour récupérer les 6 plats
        $sql = "SELECT * FROM plat LIMIT 6";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Instancier le DAO
$dao = new DAO($conn);

// Récupérer les catégories populaires
$categories = $dao->getPopularCategories();

// Récupérer les plats les plus vendus
$bestSellingDishes = $dao->getBestSellingDishes();

// Récupérer toutes les catégories
$allCategories = $dao->getCategories();

// Récupérer les 6 plats
$sixDishes = $dao->getSixDishes();

?>
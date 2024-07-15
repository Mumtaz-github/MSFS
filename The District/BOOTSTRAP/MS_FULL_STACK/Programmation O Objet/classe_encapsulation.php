

class Categorie {
  public $id;
  private $nom;
  public $description;

  public function __construct($id=0, $nom="", $description="") {
    $this->id = $id;
    $this->nom = $nom;
    $this->description = $description;
  }

  public getNom() {
    return $this->nom;
  }

  public setNom($nom) {
    $this->nom = $nom;
    return $this;
  }

  public function afficher() {
    echo $this->nom . " : " . $this->description;
  }
}

Documentation de l'Architecture Orientée Objet PHP:

1. Les Classes:
Une classe est un modèle pour créer des objets. Dans notre projet :

class User {
    private $id;
    private $nom;
    private $prenom;
    ...
    
    public function __construct( $nom, $prenom...) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        ...
    }
}

2. L'Héritage:
L'héritage permet à une classe d'hériter les propriétés et les méthodes d'une autre classe:

class ParentClass {
    public function displayMessage() {
        echo "Hello from ParentClass";
    }
}

class ChildClass extends ParentClass {
    public function displayMessage() {
        echo "Hello from ChildClass";
    }
}

Avantage : Réutilisation du code et organisation hiérarchique des classes.


3. Le Polymorphisme:

Le polymorphisme permet aux classes enfants de redéfinir des méthodes de la classe parent.

interface Shape {
    public function draw();
}

// Classes implementing the Shape interface
class Circle implements Shape {
    public function draw() {
        return "Drawing circle.";
    }
}

class Square implements Shape {
    public function draw() {
        return "Drawing square.";
    }
}

4. Les Classes Abstraites :

Une classe abstraite est une classe qui ne peut pas être instanciée directement.

5. La Visibilité :

Types :

private : Uniquement dans la classe
protected : Dans la classe et ses enfants
public : Partout

6. Getters et Setters:

Méthodes pour accéder et modifier les propriétés de manière contrôlée.

7. Les Fonctions Magiques

Principales fonctions magiques :

__construct() : Initialisation
__destruct() : Nettoyage
__get() : Lecture de propriété
__set() : Écriture de propriété

Conclusion:
Ces principes OOP permettent de :

Organiser le code de manière logique;
Réutiliser le code efficacement;





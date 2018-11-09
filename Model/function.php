<?php
function getErreurs() {
  return [
    ["id" => 1, "msg" => "Tous les champs du formulaire sont obligatoires."],
    ["id" => 2, "msg" => "Votre nom doit comporter 3 caractères MINIMUM."],
    ["id" => 3, "msg" => "Le mot de passe doit comporter 6 caractères minimum, au moins une lettre majuscule et au moins un chiffre."],
    ["id" => 4, "msg" => "Le mot de passe et sa confirmation doivent être identiques."],
    ["id" => 0, "msg" => "Une erreur est survenue."]
  ];
}

function getUsers() {
  return [
    ["name" => "Jean-luc", "password" => "Simplon1478963", "status" => "admin", "sexe" => "homme"],
    ["name" => "Claire45", "password" => "toutlesmatINS", "status" => "admin", "sexe" => "femme"],
    ["name" => "Doudou", "password" => "password", "status" => "user", "sexe" => "homme"],
    ["name" => "ReneGard", "password" => "mai68", "status" => "writer", "sexe" => "homme"],
  ];
}

function getProducts() {
  return [
    [
      "id" => 0,
      "name" => "Chevrolet Impala",
      "price" => 35000,
      "stock" => false,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "car",
      "made_in"=> "USA"
    ],
    [
      "id" => 1,
      "name" => "Xbox",
      "price" => 500,
      "stock" => true,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "video games",
      "made_in"=> "China"
    ],
    [
      "id" => 2,
      "name" => "MacBook Pro",
      "price" => 2000,
      "stock" => true,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "computer",
      "made_in"=> "China"
    ],
    [
      "id" => 3,
      "name" => "VTT randonnée",
      "price" => 450,
      "stock" => true,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "sport",
      "made_in"=> "France"
    ],
    [
      "id" =>4,
      "name" => "Rolex 1968",
      "price" => 15000,
      "stock" => true,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "watch",
      "made_in"=> "Switzerland"
    ],
    [
      "id" =>5,
      "name" => "A blue dress",
      "price" => 150,
      "stock" => false,
      "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
      "category" => "clothes",
      "made_in"=> "Britain"
    ]
  ];
}

 ?>

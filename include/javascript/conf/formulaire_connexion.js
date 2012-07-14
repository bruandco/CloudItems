var classe_formulaire_obligatoire   = 'verification_formulaire'; // Classe permettant la verification au submit du formulaire
var classe_champ_obligatoire        = 'obligatoire';    // Classe permettant de verifier les champs obligatoires du formulaire
var classe_champ_obligatoire_erreur = 'alert_message_obligatoire'; // Classe ajouté au champ du formulaire si erreur
var classe_message_erreur           = 'message_erreur_champ'; // Objet html a afficher en cas d'erreur => un message par champ
var id_message_erreur_unique        = 'message_erreur'; // Objet html a afficher en cas d'erreur => message global

var type_alert_erreur   = 2; // type = 1 => alert(message); type = 2 => affichage message html + classe erreur; type = 3 => alert(message) + affichage message html + classe erreur;
var type_message_erreur = 2; // type = 1 => affiche un message d'erreur global; type = 2 => affiche un message par block; type = 3 => affiche les deux;

var message_erreur = "Tous les champs ne sont pas remplis !";
var message_erreur_unique = "Tous les champs ne sont pas remplis !";
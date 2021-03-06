<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait',
    'fos_user.username.short' => '[-Inf,Inf]Le nom d\'utilisateur est trop court',
    'fos_user.username.long' => '[-Inf,Inf]Le nom d\'utilisateur est trop long',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait',
    'fos_user.email.short' => '[-Inf,Inf]L\'adresse e-mail est trop courte',
    'fos_user.email.long' => '[-Inf,Inf]L\'adresse e-mail est trop longue',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait',
    'fos_user.password.short' => '[-Inf,Inf]Le mot de passe est trop court',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait',
    'fos_user.new_password.short' => '[-Inf,Inf]Le nouveau mot de passe est trop court',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait',
    'fos_user.group.short' => '[-Inf,Inf]Le nom est trop court',
    'fos_user.group.long' => '[-Inf,Inf]Le nom est trop long',
    'Bad code value' => 'Mauvaise valeur pour le code visuel',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les droits d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Droits invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Pas de privilèges pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Pas de session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur ne peut pas être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les droits ont expirés.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'messages' => 
  array (
    'Symfony2 is great' => 'J\'aime Symfony2',
    'coresphere_console.headline.index' => 'Console',
    'coresphere_console.working_directory' => 'Répertoire de travail',
    'coresphere_console.environment' => 'Environnement',
    'coresphere_console.welcome_message' => 'Tapez %command% pour obtenir la liste de toutes les commandes.',
    'coresphere_console.loading' => 'Chargement en cours...',
    'coresphere_console.suggestion_head' => 'Essayez plutôt :',
    'coresphere_console.empty_response' => 'Commande exécutée ! (Mais réponse vide)',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Nom d\'utilisateur ou mot de passe incorrect',
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour',
    'group.flash.created' => 'Le groupe a été créé',
    'group.flash.deleted' => 'Le groupe a été supprimé',
    'security.login.username' => 'Nom d\'utilisateur :',
    'security.login.password' => 'Mot de passe :',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Enregistrer',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'resetting.password_already_requested' => 'Un nouveau mot de passe a déjà été demandé pour cet utilisateur dans les dernières 24 heures.',
    'resetting.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien sur lequel il vous faudra cliquer afin de réinitialiser votre mot de passe.',
    'resetting.request.invalid_username' => 'Le nom d\'utilisateur ou l\'adresse e-mail "%username%" n\'existe pas.',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail :',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe :',
    'form.username' => 'Nom d\'utilisateur :',
    'form.email' => 'Adresse e-mail :',
    'form.current_password' => 'Mot de passe actuel :',
    'form.password' => 'Mot de passe :',
    'form.password_confirmation' => 'Vérification :',
    'form.new_password' => 'Nouveau mot de passe :',
    'form.new_password_confirmation' => 'Vérification :',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administration',
    'action_delete' => 'Supprimer',
    'btn_batch' => 'OK',
    'btn_create' => 'Créer',
    'btn_create_and_edit_again' => 'Créer',
    'btn_create_and_create_a_new_one' => 'Créer et ajouter',
    'btn_create_and_return_to_list' => 'Créer et retourner à la liste',
    'btn_filter' => 'Filtrer',
    'btn_update' => 'Mettre à jour',
    'btn_update_and_edit_again' => 'Mettre à jour',
    'btn_update_and_return_to_list' => 'Mettre à jour et fermer',
    'link_delete' => 'Supprimer',
    'link_action_create' => 'Ajouter',
    'link_action_list' => 'Retourner à la liste',
    'link_action_show' => 'Afficher',
    'link_action_edit' => 'Editer',
    'link_add' => 'Ajouter',
    'link_list' => 'Liste',
    'link_reset_filter' => 'Effacer',
    'title_create' => 'Créer',
    'title_dashboard' => 'Tableau de bord',
    'title_edit' => 'Éditer "%name%"',
    'title_list' => 'Liste',
    'link_next_pager' => 'Suivant',
    'link_previous_pager' => 'Précédent',
    'link_first_pager' => 'Première',
    'link_last_pager' => 'Dernière',
    'Admin' => 'Admin',
    'link_expand' => 'Étendre/Réduire',
    'no_result' => 'Aucun résultat',
    'confirm_msg' => 'Êtes-vous sûr ?',
    'action_edit' => 'Éditer',
    'action_show' => 'Afficher',
    'all_elements' => 'Tous les éléments',
    'flash_batch_empty' => 'Action interrompue. Aucun élément n\'a été séléctionné.',
    'flash_create_success' => 'L\'élément "%name%" a été créé avec succès.',
    'flash_create_error' => 'Une erreur est intervenue lors de la création de l\'élément "%name%".',
    'flash_edit_success' => 'L\'élément "%name%" a été mis à jour avec succès.',
    'flash_edit_error' => 'Une erreur est intervenue lors de la mise à jour de l\'élément "%name%".',
    'flash_batch_delete_success' => 'Les éléments séléctionnés ont été supprimés avec succès.',
    'flash_batch_delete_error' => 'Une erreur est intervenue lors de la suppression des éléments séléctionnés.',
    'flash_delete_error' => 'Une erreur est intervenue lors de la suppression de l\'élément "%name%".',
    'flash_delete_success' => 'L\'élément "%name%" a été supprimé avec succès.',
    'breadcrumb.link_dashboard' => '⌂',
    'title_delete' => 'Confirmation de suppression',
    'message_delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer l\'élément "%object%" sélectionné?',
    'btn_delete' => 'Oui, supprimer',
    'title_batch_confirmation' => 'Confirmation d\'un traitement par lots: \'%action%\'',
    'message_batch_confirmation' => 'Êtes-vous sûr de vouloir confirmer cette action et de l\'exécuter pour l\'élément sélectionné?|Êtes-vous sûr de vouloir confirmer cette action et de l\'exécuter pour les %count% éléments sélectionnés?',
    'message_batch_all_confirmation' => 'Êtes-vous sûr de vouloir confirmer cette action et de l\'exécuter pour tous les éléments?',
    'btn_execute_batch_action' => 'Oui, exécuter',
    'label_type_yes' => 'oui',
    'label_type_no' => 'non',
    'label_type_contains' => 'contient',
    'label_type_not_contains' => 'ne contient pas',
    'label_type_equals' => 'est égal à',
    'label_type_not_equals' => 'n\'est pas égal à',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'est vide',
    'label_date_type_not_null' => 'n\'est pas vide',
    'label_date_type_between' => 'est entre',
    'label_date_type_not_between' => 'n\'est pas entre',
    'label_filters' => 'Filtres',
    'delete_or' => 'ou',
    'link_action_history' => 'Révisions',
    'td_action' => 'Action',
    'td_revision' => 'Révisions',
    'td_timestamp' => 'Date',
    'td_username' => 'Auteur',
    'label_view_revision' => 'Afficher la révision',
    'list_results_count' => '1 résultat|%count% résultats',
    'label_export_download' => 'Export',
    'loading_information' => 'Chargement des informations…',
    'btn_preview' => 'Prévisualiser',
    'btn_preview_approve' => 'Accepter',
    'btn_preview_decline' => 'Refuser',
    'label_per_page' => 'Par page',
    'list_select' => 'Sélectionner',
    'confirm_exit' => 'Vous avez effectué des modifications non sauvegardées.',
    'link_edit_acl' => 'Editer les permissions',
    'btn_update_acl' => 'Mettre à jour les permissions',
    'flash_acl_edit_success' => 'Les permissions ont été mises à jour avec succès.',
    'link_action_acl' => 'Permissions',
    'short_object_description_placeholder' => 'Aucune sélection',
    'title_search_results' => 'Résultats de recherche: %query%',
    'search_placeholder' => 'Rechercher',
    'no_results_found' => 'pas de résultats',
    'add_new_entry' => 'rajouter un élément',
    'link_actions' => 'Liste d\'actions',
    'noscript_warning' => 'Certaines fonctionnalités ne fonctionnent sans JavaScript; merci de l\'activer sur votre navigateur.',
    'message_form_group_empty' => 'Pas de champs disponibles.',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Ajouter',
    'label_type_yes' => 'oui',
    'label_type_no' => 'non',
    'sonata_core_template_box_file_found_in' => 'Ce fichier est localisé à l\'emplacement',
  ),
  'SonataUserBundle' => 
  array (
    'title_user_registration' => 'Inscription',
    'title_user_account' => 'Profil utilisateur',
    'title_user_edit_profile' => 'Éditer',
    'title_user_authentication' => 'Identification',
    'sonata_user_submit' => 'Envoyer',
    'breadcrumb.link_user_list' => 'Utilisateurs',
    'breadcrumb.link_user_create' => 'Ajouter',
    'breadcrumb.link_user_edit' => 'Éditer',
    'breadcrumb.link_user_delete' => 'Supprimer',
    'breadcrumb.link_group_list' => 'Groupes',
    'breadcrumb.link_group_create' => 'Ajouter',
    'breadcrumb.link_group_edit' => 'Éditer',
    'users' => 'Utilisateurs',
    'groups' => 'Groupes',
    'switch_user_exit' => 'Quitter l\'identité',
    'switch_user' => 'Changer d\'identité',
    'user_block_logout' => 'Déconnexion',
    'user_block_profile' => 'Profil',
    'form.label_username' => 'Nom d\'utilisateur',
    'form.label_email' => 'Email',
    'form.label_plain_password' => 'Mot de passe',
    'form.label_groups' => 'Groupes',
    'form.label_roles' => 'Rôles',
    'form.label_locked' => 'Verrouillé',
    'form.label_expired' => 'Expiré',
    'form.label_enabled' => 'Activé',
    'form.label_credentials_expired' => 'Droits expirés',
    'form.label_created_at' => 'Créé le',
    'form.label_last_login' => 'Dernière connexion',
    'form.label_name' => 'Nom',
    'filter.label_username' => 'Nom d\'utilisateur',
    'filter.label_name' => 'Nom',
    'filter.label_email' => 'Email',
    'filter.label_locked' => 'Verrouillé',
    'filter.label_id' => 'ID',
    'filter.label_groups' => 'Groupes',
    'filter.label_created_at' => 'Créé le',
    'filter.label_last_login' => 'Dernière connexion',
    'filter.label_firstname' => 'Prénom',
    'filter.label_lastname' => 'Nom',
    'list.label_username' => 'Nom d\'utilisateur',
    'list.label_name' => 'Nom',
    'list.label_email' => 'Adresse email',
    'list.label_groups' => 'Groupes',
    'list.label_locked' => 'Verrouillé',
    'list.label_enabled' => 'Activé',
    'list.label_created_at' => 'Créé le',
    'list.label_last_login' => 'Dernière connexion',
    'list.label_impersonating' => 'Changer d\'identité',
    'list.label_roles' => 'Rôles',
    'list.label_firstname' => 'Prénom',
    'list.label_lastname' => 'Nom',
    'label_two_step_code' => 'Validation en deux étapes',
    'message_two_step_code_help' => 'Rentrer votre code de validation provenant de votre téléphone',
    'label_two_step_code_error' => 'Le code de validation est invalide',
    'sonata_user' => 'Utilisateurs',
    'General' => 'Général',
    'Groups' => 'Groupes',
    'Management' => 'Gestion',
    'Profile' => 'Profil',
    'Social' => 'Social',
    'Security' => 'Sécurité',
    'field.label_roles_editable' => 'Rôles',
    'form.label_date_of_birth' => 'Date de naissance',
    'form.label_firstname' => 'Prénom',
    'form.label_lastname' => 'Nom',
    'form.label_website' => 'Site web',
    'form.label_biography' => 'Biographie',
    'form.label_gender' => 'Civilité',
    'form.label_locale' => 'Langue',
    'form.label_timezone' => 'Fuseau horaire',
    'form.label_phone' => 'Téléphone',
    'form.label_facebook_uid' => 'Uid Facebook',
    'form.label_facebook_name' => 'Nom Facebook',
    'form.label_twitter_uid' => 'Uid Twitter',
    'form.label_twitter_name' => 'Nom Twitter',
    'form.label_gplus_uid' => 'Uid Google+',
    'form.label_gplus_name' => 'Nom Google+',
    'form.label_token' => 'Jeton',
    'form.label_two_step_verification_code' => 'Code de validation en deux étapes',
    'show.label_username' => 'Nom d\'utilisateur',
    'show.label_email' => 'Email',
    'show.label_groups' => 'Groupes',
    'show.label_date_of_birth' => 'Date de naissance',
    'show.label_firstname' => 'Prénom',
    'show.label_lastname' => 'Nom',
    'show.label_website' => 'Site web',
    'show.label_biography' => 'Biographie',
    'show.label_gender' => 'Civilité',
    'show.label_locale' => 'Langue',
    'show.label_timezone' => 'Fuseau horaire',
    'show.label_phone' => 'Téléphone',
    'show.label_facebook_uid' => 'Uid Facebook',
    'show.label_facebook_name' => 'Nom Facebook',
    'show.label_twitter_uid' => 'Uid Twitter',
    'show.label_twitter_name' => 'Nom Twitter',
    'show.label_gplus_uid' => 'Uid Google+',
    'show.label_gplus_name' => 'Nom Google+',
    'show.label_token' => 'Jeton',
    'show.label_two_step_verification_code' => 'Code de validation en deux étapes',
    'show.label_created_at' => 'Créé le',
    'show.label_last_login' => 'Dernière connexion',
    'breadcrumb.link_user_show' => 'Voir',
    'gender_unknown' => 'non défini',
    'gender_female' => 'femme',
    'gender_male' => 'homme',
    'sonata_profile_title' => 'Mon tableau de bord',
    'link_show_profile' => 'Mon tableau de bord',
    'link_edit_profile' => 'Mon profil',
    'title_user_edit_authentication' => 'Informations de connexion',
    'link_edit_authentication' => 'Informations de connexion',
    'label_profile_gender' => 'Civilité',
    'label_profile_firstname' => 'Prénom',
    'label_profile_lastname' => 'Nom',
    'label_profile_website' => 'Site web',
    'label_profile_dob' => 'Date de naissance',
    'label_profile_biography' => 'Biographie',
    'label_profile_locale' => 'Langue',
    'label_profile_timezone' => 'Fuseau horaire',
    'label_profile_phone' => 'Téléphone',
    'profile.flash.updated' => 'Votre profil a été mis à jour.',
    'sonata_change_password_link' => 'Changer votre mot de passe',
    'link_register' => 'S\'inscrire',
    'link_login' => 'S\'identifier',
    'link_logout' => 'Se déconnecter',
    'registration.flash.user_created' => 'Votre compte est créé avec succès !',
    'forgotten_password' => 'Mot de passe oublié ?',
    'sonata_user_profile_breadcrumb_index' => 'Tableau de bord',
    'sonata_user_profile_breadcrumb_edit' => 'Éditer votre profil',
    'sonata_user_already_authenticated' => 'Vous êtes déjà identifié',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Vérification',
  ),
  'SonataSeoBundle' => 
  array (
    'sonata_seo_homepage_breadcrumb' => 'Accueil',
    'sonata_seo_share_by_email' => 'Partager par e-mail',
  ),
  'SonataMediaBundle' => 
  array (
    'default' => 'Défaut',
    'media' => 'Média',
    'gallery' => 'Galerie',
    'sonata_media' => 'Médiathèque',
    'no_provider_available' => 'Pas de type disponible',
    'title_select_provider' => 'Sélectionner un type',
    'breadcrumb.link_media_create' => 'Ajouter',
    'breadcrumb.link_media_list' => 'Médias',
    'breadcrumb.link_media_edit' => 'Edition',
    'breadcrumb.link_media_view' => 'Visualiser',
    'breadcrumb.link_media_delete' => 'Supprimer',
    'breadcrumb.link_gallery_create' => 'Ajouter',
    'breadcrumb.link_media_show' => 'Afficher',
    'breadcrumb.link_gallery_list' => 'Galeries',
    'breadcrumb.link_gallery_edit' => 'Edition',
    'breadcrumb.link_gallery_delete' => 'Supprimer',
    'description.roles_download_strategy' => 'Le média peut être récupéré par les utilisateurs avec une des permissions suivantes : %roles%.',
    'description.public_download_strategy' => 'Le média peut être récupéré par tout le monde.',
    'description.forbidden_download_strategy' => 'Le média peut être récupéré par personne.',
    'filter.label_name' => 'Nom',
    'filter.label_provider_reference' => 'Référence du type',
    'filter.label_enabled' => 'Actif',
    'filter.label_context' => 'Contexte',
    'filter.label_provider_name' => 'Type',
    'form.label_enabled' => 'Actif',
    'form.label_media' => 'Média',
    'form.label_position' => 'Position',
    'form.label_context' => 'Contexte',
    'form.label_name' => 'Nom',
    'form.label_default_format' => 'Format',
    'form.label_gallery_has_medias' => 'Médias',
    'form.label_author_name' => 'Auteur',
    'form.label_cdn_is_flushable' => 'A raffraichir sur le CDN',
    'form.label_description' => 'Description',
    'form.label_copyright' => 'Copyright',
    'form.label_binary_content' => 'Fichier/Référence',
    'label.size' => 'Taille',
    'label.length' => 'label.length',
    'label.width' => 'Largeur',
    'label.height' => 'Hauteur',
    'label.content_type' => 'Type de contenu',
    'label.copyright' => 'Copyright',
    'label.author_name' => 'Auteur',
    'label.cdn' => 'CDN',
    'label.to_be_flushed' => 'A vider',
    'label.flushed_at' => 'Vidé le',
    'label.public_url' => 'URL publique',
    'label.name' => 'Nom',
    'label.file' => 'Fichier',
    'label.author' => 'Auteur',
    'label.enabled' => 'Actif',
    'label.cdn_is_flushable' => 'A raffraichir sur le CDN',
    'label.video_reference' => 'Change video',
    'label.description' => 'Description',
    'label.select_context' => 'Contexte : ',
    'label.select_provider' => 'Type : ',
    'label.protected_download_url' => 'URL protégée',
    'label.protected_download_url_notice' => 'Attention',
    'label.edit_with_pixlr' => 'Editer ce media avec Pixlr',
    'label.pixlr_warning' => '
                    
                        <span class="label important">Important</span> vous allez envoyer le média sur un <strong>service externe</strong>. <br />
                        Si vous travaillez sur des éléments confidentiels, il ne faut pas utiliser ce service.
                    
                ',
    'label.pixlr_express_editor' => '
                    
                        <strong style="color: white">Editeur rapide</strong> <br />
                        Interface simple pour l\'edition rapide
                    
                ',
    'label.pixlr_advanced_editor' => '
                    
                        <strong style="color: white">Editeur avancé</strong> <br />
                        Pour utilisateurs expérimentés
                    
                ',
    'link.all_providers' => 'Tous',
    'link.test_protected_url' => 'Lien d\'exemple',
    'list.label_enabled' => 'Actif',
    'list.label_name' => 'Nom',
    'list.label_context' => 'Contexte',
    'list.label_default_format' => 'Format par défaut',
    'list.label__action' => 'Action',
    'list.label_custom' => 'Personnalisé',
    'sidemenu.link_edit_media' => 'Edition',
    'sidemenu.link_media_view' => 'Visualiser',
    'sonata.media.provider.dailymotion' => 'DailyMotion',
    'sonata.media.provider.youtube' => 'YouTube',
    'sonata.media.provider.vimeo' => 'Vimeo',
    'sonata.media.provider.image' => 'Image',
    'sonata.media.provider.file' => 'Fichier',
    'title.media_preview' => 'Visualiser',
    'title.media_thumbnail' => 'Vignette',
    'title.informations' => 'Information',
    'title.formats' => 'Formats',
    'link_media' => 'link_media',
    'no_linked_media' => 'no_linked_media',
    'sonata_media_gallery_index' => 'Galeries',
    'sonata_template_box_media_gallery_block' => 'Ceci est un bloc de gallerie de médias. Vous pouvez le surcharger librement.',
  ),
  'SonataNotificationBundle' => 
  array (
    'sonata_notification' => 'Notification',
    'notifications' => 'Notifications',
    'breadcrumb.link_message_list' => 'Messages',
    'list.label_id' => 'Id',
    'list.label_type' => 'Type',
    'list.label_created_at' => 'Date de création',
    'list.label_started_at' => 'Date de début',
    'list.label_completed_at' => 'Date de fin',
    'list.label_get_state_name' => 'Etat',
    'show.label_id' => 'Id',
    'show.label_type' => 'Type',
    'show.label_created_at' => 'Date de création',
    'show.label_started_at' => 'Date de début',
    'show.label_completed_at' => 'Date de fin',
    'show.label_get_state_name' => 'Etat',
    'breadcrumb.link_message_show' => 'Message',
    'show.label_body' => 'Payload',
    'filter.label_type' => 'Type',
    'filter.label_state' => 'Etat',
    'batch.message_publish' => 'Publier les messages',
    'batch.message_cancelled' => 'Annuler les messages',
    'list.label_restart_count' => 'Restart #',
    'show.label_restart_count' => 'Restart #',
  ),
  'CmfRoutingBundle' => 
  array (
    'dashboard.cmf' => 'Symfony CMF',
    'dashboard.label_routing' => 'Route',
    'dashboard.label_redirect_routing' => 'Redirection',
    'breadcrumb.link_route_list' => 'Routes',
    'breadcrumb.link_route_create' => 'Créer',
    'breadcrumb.link_route_edit' => 'Éditer',
    'breadcrumb.link_route_delete' => 'Supprimer',
    'breadcrumb.link_redirect_route_list' => 'Redirection',
    'breadcrumb.link_redirect_route_create' => 'Créer',
    'breadcrumb.link_redirect_route_edit' => 'Éditer',
    'breadcrumb.link_redirect_route_delete' => 'Supprimer',
    'filter.label_name' => 'Nom',
    'list.label_id' => 'Id',
    'form.group_general' => 'Général',
    'form.label_parent' => 'Parent',
    'form.label_name' => 'Dernière partie de l\'URL',
    'form.label_variable_pattern' => 'Motif variable',
    'form.label_content' => 'Contenu',
    'form.label_defaults' => 'Defauts',
    'form.label_route_name' => 'Nom',
    'form.label_uri' => 'URI',
    'form.label_route_target' => 'Route objectif',
    'form.group_routes' => 'Routes',
    'form.label_routes' => 'Routes',
    'form.label_add_format_pattern' => 'Ajouter le motif du format',
    'form.label_add_trailing_slash' => 'Ajouter une barre oblique en fin',
    'form.help_add_format_pattern' => 'Ajoute le format à la route tel que /your/route.{format}. Le format par défaut est html.',
    'form.help_add_trailing_slash' => 'Ajoute un slash à la fin de la route tel que /your/route/.',
  ),
  'gregwar_captcha' => 
  array (
    'Renew' => 'Renouveler',
  ),
  'pagerfanta' => 
  array (
    'previous' => 'Précédent',
    'next' => 'Suivant',
  ),
));


return $catalogue;

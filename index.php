<?php
    $services = [
        ["title" => "FORMATION TECHNICIENS INSTALLATEURS", "description" => "<strong><em>OUI ! En seulement 2 JOURS, vous apprendrez à réaliser un montage électrique autonome. Découvrez 'L'Électricité par la RÉSONANCE utilisant le TRANSFERT D'ÉNERGIE par COUPLAGE MAGNÉTIQUE'.</em></strong>"],
        ["title" => "VENTE APPAREILS SPÉCIAUX PRÊTS À INSTALLER", "description" => "<strong><em>Venez découvrir nos solutions pour éviter les coupures intempestives ! ÉCLAIRAGE, TV, VENTILATEUR, RÉFRIGÉRATEUR, CONGÉLATEUR... La 'CASE' a tout ce qu'il vous faut !</em></strong>"],
        ["title" => "LOCATION ÉLECTRICITÉ MOBILE", "description" => "<strong><em>Pour tous vos événements : mariage, funérailles, pique-nique... La 'CASE' vous fournit une alimentation électrique mobile fiable !</em></strong>"],
        ["title" => "INSTALLATION ÉLECTRICITÉ AUTONOME", "description" => "<strong><em>Nous réalisons des installations électriques autonomes, sans besoin de soleil ni de carburant. Dites adieu aux factures élevées et aux coupures d'électricité !</em></strong>"]
    ];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LA CASE</title>
    <link rel="stylesheet" href="FICHIER.css">
    <link rel="icon" href="favicon.png" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
            overflow-y: scroll;
        }
        header {
            background-color: #FFD700;
            color: #222;
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
            font-weight: bold;
        }
        .container {
            text-align: center;
            padding: 20px;
        }
        .service-item {
            margin: 20px auto;
            padding: 15px;
            background-color: #FFFFE0;
            border-radius: 8px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }
        footer {
            background-color: #4682B4;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: relative;
            width: 100%;
        }
        footer ul {
            list-style: none;
            padding: 0;
        }
        footer ul li {
            display: inline;
            margin: 0 10px;
        }
        footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .whatsapp-btn {
            display: inline-block;
            background-color: #25D366;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            margin-top: 10px;
        }
        .whatsapp-btn:hover {
            background-color: #1EBE5D;
        }
    </style>
</head>
<body>
    <header>
        <h1>LA CASE - ÉLECTRICITÉ GRATUITE</h1>
    </header>
    
    <div class="container">
        <h2>[ Caserne des Appareils Spéciaux en Électricité ]</h2>
        <p>
            <strong><em>VOTRE ÉLECTRICITÉ GRATUITE CHEZ VOUS GRÂCE à la Boutique de la "CASE".</em></strong>
            <br>
            <strong><em>Venez chez NOUS, et chez VOUS, ADIEU vos problèmes d'ÉLECTRICITÉ !!</em></strong>
            <br>
            <strong><em>Notre Boutique répond à vos besoins dans les domaines suivants :</em></strong>
        </p>
    </div>
    
    <?php foreach ($services as $service): ?>
        <div class="service-item">
            <h3><?php echo $service["title"]; ?></h3>
            <p><?php echo $service["description"]; ?></p>
        </div>
    <?php endforeach; ?>
    
    <footer>
        <p><strong>Pour plus de détails, contactez-nous sur :</strong></p>
        <a href="https://wa.me/+447850428319" class="whatsapp-btn">📱 Cliquez ici pour WhatsApp</a>
        <br><br>
        &copy; 2024 CASE. Tous droits réservés.
        <ul>
            <li><a href="#politique_confidentialite.php">Politique de confidentialité</a></li>
            <li><a href="#condition_utilisation.php">Conditions d'utilisation</a></li>
        </ul>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
<!-- 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta http-equiv="refresh" content="">
-->
    <meta charset="UTF-8">
<!-- 
    width=device-width : Définit la largeur de la fenêtre pour correspondre à la largeur de l'écran de l'appareil
    initial-scale=1.0 : Définit le niveau de zoom initial (aucun zoom par défaut)
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Valentin</title>
    <link rel="icon" href=""/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/commun.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
    <?php include("includes/header.php"); ?>

    <main id="contenu" class="container">
        <div id="presentation" class="col-12">
            <div id="quisuisje">
                <div>
                    <p>Je suis actuellement en BTS SIO 1ère année (Services Informatiques aux Organisations), option SLAM (Solutions Logicielles et Applications Métier). J'ai notamment découvert l'informatique au lycée avec python qui m'a donné goût à l'algorithmie et la programmation.</p>
                </div>
                
                <div>
                    <p>Malgré tout, j'ai d'abord poursuivi mon premier projet, celui de travailler dans le domaine de la santé et du social en réalisant une première de année de Licence en psychologie. Bien que très enrichissant, j'ai décidé de quitter cette formation pour me lancer en informatique, tout en gardant en tête mon idée de départ.</p>
                </div>
            </div>
            <div id="projetsPro">
                <div>
                    <p>Mon projet actuel serait de combiner l'informatique et la santé en travaillant par exemple sur des nouvelles technologies, comme des applications ou des systèmes embarqués liés à l'imagerie médicale, la chirurgie, la recherche pharmaceutique...</p>
                </div>

                <div>
                    <p>J'envisage donc de compléter mon BTS par une licence professionnelle afin de renforcer mes compétences, puis de continuer sur des études d'ingénieur se rapportant au domaine de la santé.</p>
                </div>
            </div>
        </div>

        <div id="parcours" class="col-12">
            <div id="formations_diplomes">

            </div>
            <div id="experiencesPro">

            </div>
        </div>
    </main>

    <?php include("includes/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
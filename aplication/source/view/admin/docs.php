<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once 'sections/head.php'; ?>
</head>
<body>    
    <div class="container">    
        <?php $menu= "blog"; ?>
        <?php require_once 'sections/header.php'; ?>

        <section class="row list">
            <?php require_once 'tabla_docs.php'; ?>
        </section>
    </div>
        
    <?php require_once 'sections/footer.php'; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Listar Cursos</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Listar Cursos</h1>
        </div>
        <a href="/novo-curso" class="btn btn-primary mb-2">
            Novo Curso
        </a>
        <ul class="list-group">
            <?php foreach ($cursos as $curso): ?>
                <li class="list-group-item">
                    <?= $curso->getDescricao(); ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlgoFLIX</title>
    <link rel="stylesheet" href="filmes2.css">
</head>
<body>
    <header>
        <h1>AlgoFLIX</h1>
        <form action="pesquisar.php" method="get">
            <input type="text" name="busca" placeholder="Buscar por título ou gênero">
            <button type="submit">Pesquisar</button>
        </form>
    </header>
    <nav>
        <ul>
            <li><a href="#filmes">Filmes</a></li>
            <li><a href="#series">Séries</a></li>
        </ul>
    </nav>
    <main>
        <section id="filmes">
            <h2>Filmes Disponíveis</h2>
            <ul id="lista-filmes">
                </ul>
        </section>
        <section id="series">
            <h2>Séries Disponíveis</h2>
            <ul id="lista-series">
                </ul>
        </section>
        <section id="detalhes">
            </section>
    </main>
    <footer>
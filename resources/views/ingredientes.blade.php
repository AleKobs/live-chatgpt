<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muskai</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <header>
        <h1> Gerador de Receitas 🤖 </h1>
        <nav>
            <a href="/">Voltar </a>
        </nav>
    </header>

    <main id="ingredientes">
        <h2> Gerador de receitas </h2>
        <p> Encontre Receitas Deliciosas baseadas em seus Ingredientes da Geladeira - Inteligência Artificial
            Transformando suas Comidas em Obra de Arte!</p>
        <article>
            <label> Ingredientes </label>
            <form method="post" action="{{ route('ingredientesAcao') }}">
                @csrf
                <input type="text" name="ingredientes" value="{{ $ingredientes ?? '' }}" />
                <input type="submit" value="Bora cozinhar!" />
            </form>
        </article>
        @if (!empty($receita))
            {!! preg_replace("/\r\n|\n/", '<br>', $receita) !!}
        @endif
    </main>

    <footer>
        B7web - 2023
    </footer>


</body>

</html>

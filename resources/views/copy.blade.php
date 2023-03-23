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
        <h1> Copy Generator AI Atomic Supla Bomb 2023 Ultra 🤖 </h1>
        <nav>
            <a href="/">Voltar </a>
        </nav>
    </header>

    <main>
        <h2> Gerador de Copy's</h2>
        <p>Bora ficar rico falando dos products!</p>
        <article>

            <form id="copyForm" method="post" action="{{ route('copyAcao') }}">
                @csrf
                <p>
                    <label>Nome do Produto</label>
                    <input type="text" name="nome_produto" required />
                </p>
                <p>
                    <label>Preço do produto</label>
                    <input type="number" name="preco_produto" required />
                </p>
                <p>
                    <label>Características do Produto</label>
                    <input type="text" name="caracteristicas_produto" required />
                </p>
                <p>
                    <label>Público Alvo</label>
                    <input type="text" name="publico_produto" required />
                </p>
                <p>
                    <label> Estilo da Copy </label>
                    <select name="estilo_copy">
                        <option value="formal">Formal </option>
                        <option value="descontraida">Descontraída </option>
                        <option value="Vida Louca">Vida Louca </option>
                    </select>
                </p>
                <p>
                    <input type="submit" value="Bora!" />
                </p>

                @if (!empty($copyGerada))
                    <img src="{{ $image }}" /> <br />
                    {!! preg_replace("/\r\n|\n/", '<br>', $copyGerada) !!}
                @endif

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

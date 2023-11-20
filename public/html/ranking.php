<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/tetrisIcon.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <title>Tetris</title>
</head>

<body>
    <h1>
   TETRIS
</h1>

    <main>
        <section class="coluna">

            <div class="linha">
                <h2> TIME</h2>
                <span id="timer" class="time">0:00</span>
            </div>

            <div class="linha">
                <h2>SCORE</h2>
                <span id="score"></span>
            </div>

            <div class="linha">
                <h2>LEVEL</h2>
                <span id="level"></span>
            </div>

            <div class="linha">
                <h2>LINES</h2>
                <span id="line"></span>
            </div>
        </section>

        <div id="game" class="full-screen with-bg">
            <canvas id="tetris" width="200" height="400"></canvas>
        </div>

        <div class="right-data">
            <div id="ranking">
                <h2 id="ranking-texto">
                MY RANKIG
            </h2>

                <table id="tabela">
                    <tr>
                        <th>
                            Best
                        </th>
                        <th>
                            Time
                        </th>

                        <th>
                            Score
                        </th>
                    </tr>

                    <tr>
                        <td>
                            1
                        </td>

                        <td>
                            02:10
                        </td>

                        <td>
                            11790
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>

                        <td>
                            01:52
                        </td>

                        <td>
                            1990
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>

                        <td>
                            01:03
                        </td>

                        <td>
                            1000
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4
                        </td>
                        <td>
                            00:58
                        </td>
                        <td>
                            538
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>00:10</td>
                        <td>100</td>
                    </tr>
                </table>
            </div>
            <div class="options">
                <a href="login.html"><img src="../images/Home.png" alt="Home"></a>
                <a href="Ranking.html"> <img src="../images/Ranking.png" alt="Ranking" width="100px" height="100px"></a>
                <a href="atualizacao.html"> <img src="../images/Login.png" alt="Atualização" width="100px" height="100px"></a>
                <a id="pausa" onclick="Game.pause()"><img src="../images/pausa.png" alt="pausa"></a>
                <a id="reinicia" onclick="Game.reload()"><img src="../images/atualiza.png" alt="reinicia"></a>
            </div>
        </div>
    </main>


    <footer>
        <p>Grupo 04 © 2023</p>
    </footer>

    <script src="../../src/esqueletopeca.js"></script>
    <script src="../../src/funcoes.js"></script>
    <script src="../../src/jogo.js"></script>
    <script src="../../src/tabuleiro.js"></script>



</body>
</html>

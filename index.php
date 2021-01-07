<?php 
require_once("data.php")
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <title>ポケモン種族値クイズ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./jquery-3.5.1.min.js"></script> 
    <script src="./script.js"></script>
</head>
<body>
    <header>
        <h1>ポケモン種族値クイズ</h1>
    </header>

    <div class="main">

        <div class="canvas-wrapper">
            <canvas id="myRaderChart" class="myRaderChart">
            </canvas> 
            <!-- CDN -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    
                <script>
                var pokeStatus__js = JSON.parse('<?php echo $pokeStatus__json ?>');
                
                var ctx = document.getElementById("myRaderChart");
                var myRadarChart = new Chart(ctx, {
                    type: 'radar', 
                    data: { 
                        labels: ["HP", "こうげき", "ぼうぎょ", "とくこう", "とくぼう", "すばやさ"],
                        datasets: [{
                            label: '',
                            data: pokeStatus__js,
                            backgroundColor: 'RGBA(225,95,150, 0.5)',
                            borderColor: 'RGBA(225,95,150, 1)',
                            borderWidth: 1,
                            pointBackgroundColor: 'RGB(46,106,177)',
                            pointRadius: 0
                        }]
                    },
                    options: {
                        responsice: true,
                        title: {
                            display: true,
                            text: ''
                        },
                        scale:{
                            ticks:{
                                suggestedMin: 0,
                                suggestedMax: 200,
                                stepSize: 50,
                                callback: function(value, index, values){
                                    return  value
                                }
                            }
                        }
                    }
                });
                </script>
        </div>
    
        <div class="form-wrapper">
            <form action="confirm.php" method="POST">
                <p class="pokeStatusString"><?php echo $pokeStatusString ?></p>
                <div class="hint-boxes">
                
                    <div class="hint-box hidden">
                        <p class="type"><?php echo $pokeType[0] ?></p>
                        <p class="type"><?php echo $pokeType[1] ?></p>
                    </div>
                
                
                    <div class="hint-box hidden">
                        <p class="ability"><?php echo $pokeAbility[0] ?></p>
                        <p class="ability"><?php echo $pokeAbility[1] ?></p>
                    </div>
                
                </div>
                <p class="hint-text">↑ヒント（左：タイプ，右：とくせい）</p>
                <p class="question">このポケモンはだれ？（進化前もふくむ）</p>
                <input class="answer" type="text" name="answer" required>
                <input class="submit-btn" type="submit" value="送信">
                <input class="invisible-answer" type="text" name="invisible-answer" value=<?php echo $pokeName ?>>
            </form>
    
            <p class="debug-answer"><?php echo $targetLine[1] ?></p>

    
        </div>

    </div>
</body>
</html>

<?php
header('Content-Type: text/html; charset=UTF-8');
$op = $_POST['operation'] ?? '';

switch ($op) {
  case 'sum':
    $a = floatval($_POST['a'] ?? 0);
    $b = floatval($_POST['b'] ?? 0);
    $r = $a + $b;
    echo "<div><strong>Resultado</strong><br> {$a} + {$b} = {$r}</div>";
    break;

  case 'mul':
    $n = intval($_POST['n'] ?? 0);
    echo "<div><strong>Tabla de {$n}</strong><br>";
    for ($i = 1; $i <= 10; $i++) {
      echo "{$n} × {$i} = " . ($n * $i) . "<br>";
    }
    echo "</div>";
    break;

  case 'par':
    $n = intval($_POST['n'] ?? 0);
    $tipo = ($n % 2 === 0) ? 'Par ✅' : 'Impar ❌';
    echo "<div><strong>{$n}</strong> es <strong>{$tipo}</strong></div>";
    break;

  case 'age':
    $year = intval($_POST['year'] ?? 0);
    $edad = date('Y') - $year;
    echo "<div>Tienes <strong>{$edad}</strong> años</div>";
    break;

  default:
    echo "<div>Error: operación desconocida</div>";
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск информации по артиклю</title>
</head>
<body>
    <div class="page">
        <div class="article-form">
            <h2>Поиск информации по артиклю</h2>
            <form class="form" action="" method="get">
                <label for="art">Введите артикль:</label>
                <input class="input" type="text" id="art" name="art">
                <button class="button" type="submit">Найти</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
$url = 'https://api.forum-auto.ru/v2/listGoods';
$params = [
    'login' => '493358_stroyzar',
    'pass' => 'sAVDkrEbqd',
    'art' => $_GET['art']
];
$url .= '?' . http_build_query($params);

$ch = curl_init();
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$data = json_decode($response, true);

if(curl_errno($ch)){
    echo 'Ошибка: ' . curl_error($ch);
} else {
    echo '<table border="1">';
    echo '<tr>
            <th>gid</th>
            <th>brand</th>
            <th>art</th>
            <th>name</th>
            <th>d_deliv</th>
            <th>h_deliv</th>
            <th>kr</th>
            <th>num</th>
            <th>price</th>
            <th>whse</th>
            <th>is_returnable</th>
          </tr>';

    foreach ($data as $item) {
        echo '<tr>';
        echo '<td>' . $item['gid'] . '</td>';
        echo '<td>' . $item['brand'] . '</td>';
        echo '<td>' . $item['art'] . '</td>';
        echo '<td>' . $item['name'] . '</td>';
        echo '<td>' . $item['d_deliv'] . '</td>';
        echo '<td>' . $item['h_deliv'] . '</td>';
        echo '<td>' . $item['kr'] . '</td>';
        echo '<td>' . $item['num'] . '</td>';
        echo '<td>' . $item['price'] . '</td>';
        echo '<td>' . $item['whse'] . '</td>';
        echo '<td>' . $item['is_returnable'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}

curl_close($ch);
?>
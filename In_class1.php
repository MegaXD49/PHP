<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการแข่งขันฟุตบอลยูโร 2024</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .match {
            background-color: #fff;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .match-date {
            font-size: 14px;
            color: #888;
        }
        .match-teams {
            font-size: 18px;
            margin: 5px 0;
        }
        .match-score {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>

    <h1>ผลการแข่งขันฟุตบอลยูโร 2024</h1>

    <?php
    // ตัวอย่างข้อมูลการแข่งขัน
    $matches = [
        [
            'team1' => 'France',
            'team2' => 'Germany',
            'score1' => 2,
            'score2' => 1,
            'date' => '2024-06-15'
        ],
        [
            'team1' => 'Spain',
            'team2' => 'Italy',
            'score1' => 1,
            'score2' => 1,
            'date' => '2024-06-16'
        ],
        [
            'team1' => 'England',
            'team2' => 'Portugal',
            'score1' => 3,
            'score2' => 2,
            'date' => '2024-06-17'
        ],
    ];

    // แสดงผลการแข่งขัน
    foreach ($matches as $match) {
        echo "<div class='match'>";
        echo "<div class='match-date'>" . $match['date'] . "</div>";
        echo "<div class='match-teams'>" . $match['team1'] . " vs " . $match['team2'] . "</div>";
        echo "<div class='match-score'>" . $match['score1'] . " - " . $match['score2'] . "</div>";
        echo "</div>";
    }
    ?>

</body>
</html>

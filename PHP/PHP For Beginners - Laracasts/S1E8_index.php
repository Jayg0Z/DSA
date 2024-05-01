<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>

    <h1>My Favorite Movies Of This Century</h1>

    <?php
        $movies = [
            [
                'name' => 'Back to the Future',
                'releaseYear' => 1985,
            ],

            [
                'name' => "Fight Club",
                'releaseYear' => 1999,
            ],

            [
                'name' => 'Dunkirk',
                'releaseYear' => 2017,
            ],

            [
                'name' => 'The Shawshank Redemption',
                'releaseYear' => 1997,
            ],

            [
                'name' => 'X',
                'releaseYear' => 2022,
            ],

            [
                'name' => "Love & Monsters",
                'releaseYear' => 2020,
            ],

            [
                'name' => 'Human Traffic',
                'releaseYear' => 1999,
            ],

            [
                'name' => 'The Adjustment Bureau',
                'releaseYear' => 2011,
            ],
        ];

        function filterByRecent($movies)
        {
            $filteredMovies = [];

            foreach ($movies as $movie) {
                if ($movie['releaseYear'] >= 2000) {
                    $filteredMovies[] = $movie;
                }
            }

            return $filteredMovies;
        }
    ?>

    <ul>
        <?php foreach (filterByRecent($movies) as $movie) : ?>
            <li>
                <?= $movie['name']; ?> (<?= $movie['releaseYear'] ?>)
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

<?php

/*
$flowers = [[["розы", 100, 15],
    ["тюльпаны", 60, 25],
    ["орхидеи", 180, 7]
],
    [["розы", 100, 15],
        ["тюльпаны", 60, 25],
        ["орхидеи", 180, 7],
    ],
    [["розы", 100, 15],
        ["тюльпаны", 60, 25],
        ["орхидеи", 180, 7]
    ]
];

echo "<ul>";
for ($layer = 0; $layer < 3; $layer++) {
    echo "<li>Номер слоя $layer";
    echo "<ul>";

    for ($row = 0; $row < 3; $row++) {
        echo "<li>Номер строки $row";
        echo "<ul>";

        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $flowers[$layer][$row][$col] . "</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";
*/

$array = array(
    "foo",
    "bar",
    100,
    -100,
);

print var_dump($array);
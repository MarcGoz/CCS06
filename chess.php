<?php

// HTML Chess Symbols Unicode
// URL: https://en.wikipedia.org/wiki/Chess_symbols_in_Unicode
// Verify if these Unicodes are correct, make the adjustments if necessary

$pieces = [
    'black' => [
    'king' => '&#9818',
    'queen' => '&#9819',
    'rook' => '&#9820',
    'bishop' => '&#9821',
    'knight' => '&#9822',
    'pawn' => '&#9823'
    ],
    'white' => [
    'king' => '&#9812',
    'queen' => '&#9813',
    'rook' => '&#9814',
    'bishop' => '&#9815;',
    'knight' => '&#9816',
    'pawn' => '&#9817'
    ]
    ];

// Chessboard HTML
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chessboard</title>
    <style type="text/css">
        /* Chessboard Styling */
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
        }
        .white {
            background-color: #f0d9b5;
        }
        .black {
            background-color: #b58863;
        }
    </style>
</head>
<body>
    <table>
        <?php for ($row = 8; $row >= 1; $row--): ?>
            <tr>
                <?php for ($col = 'a'; $col <= 'h'; $col++): ?>
                    <?php $color = (($row + ord($col)) % 2 == 0) ? 'white' : 'black'; ?>
                    <td class="<?php echo $color; ?>">
                        <?php if ($row == 8): ?>
                            <?php if ($col == 'a' || $col == 'h'): ?>
                                <?php echo $pieces['black']['rook']; ?>
                            <?php elseif ($col == 'b' || $col == 'g'): ?>
                                <?php echo $pieces['black']['knight']; ?>
                            <?php elseif ($col == 'c' || $col == 'f'): ?>
                                <?php echo $pieces['black']['bishop']; ?>
                            <?php elseif ($col == 'd'): ?>
                                <?php echo $pieces['black']['queen']; ?>
                            <?php else: ?>
                                <?php echo $pieces['black']['king']; ?>
                            <?php endif; ?>
                        <?php elseif ($row == 7): ?>
                            <?php echo $pieces['black']['pawn']; ?>
                        <?php elseif ($row == 2): ?>
                            <?php echo $pieces['white']['pawn']; ?>
                        <?php elseif ($row == 1): ?>
                            <?php if ($col == 'a' || $col == 'h'): ?>
                                <?php echo $pieces['white']['rook']; ?>
                            <?php elseif ($col == 'b' || $col == 'g'): ?>
                                <?php echo $pieces['white']['knight']; ?>
                            <?php elseif ($col == 'c' || $col == 'f'): ?>
                                <?php echo $pieces['white']['bishop']; ?>
                            <?php elseif ($col == 'd'): ?>
                                <?php echo $pieces['white']['queen']; ?>
                            <?php else: ?>
                                <?php echo $pieces['white']['king']; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>

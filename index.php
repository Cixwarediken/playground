<?php
 $books = [
	[
		'name' => 'Summer Love',
		'author' => 'Subin Bhattarai',
		'price' => 300.50
	],
	[
		'name' => 'Muna Madan',
		'author' => 'Laxmi Prasad Devkota',
		'price' => 105.50
	],
	[
        'name' => 'firfire',
		'author' => 'amar neupane',
		'price' => 650.00
    ],
    [
        'name' => 'Damini bhir',
		'author' => 'rajan  mukkarung',
		'price' => 450.00
    ],
    [
        'name' => 'China harayeko maanchhe',
		'author' => 'haribansha acharya',  
		'price' => 550.00
    ],
];
 ?>
<html>  
    <head> 
    </head>  
        <body>   
        <table border="1">
        <tr><th>name</th>
        <th>author</th>
        <th>price</th>
        </tr>
        <?php
            foreach($books as $book)
            {
                echo "<tr><td>$book[name]</td>";
                echo "<td>$book[author]</td>";
                echo "<td>$book[price]</td></tr>";
            }
            ?>
        </table>
        </body>
</html>
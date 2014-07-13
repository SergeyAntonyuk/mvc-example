<h1>Портфолио</h1>
<p>Питание прогиба исходным материалом, которая в настоящее время находится ниже
    уровня моря, максимально.</p>
<table>
    <thead>
        <tr>
            <th>Год</th>
            <th>Проект</th>
            <th>Описание</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
            foreach ($data as $row)
            {
                echo "<tr><td>" . $row['Year'] . "</td><td>"
                    . $row['Site'] . "</td><td>"
                    . $row['Description'] . "</td></tr>";
            }
        
        ?>
    </tbody>
</table>

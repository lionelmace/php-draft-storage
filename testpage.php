
    <html>
    <head>        
        
    </head>
    <body>
    <div>
            <?php

            $image = 'https://s3-api.dal-us-geo.objectstorage.softlayer.net/bucket-watson-test-2/frame0_Dog-5631.jpg';
            $imageData = base64_encode(file_get_contents($image));
            echo '<table >  ';
                echo '<tr>';
                    echo '<th>PICTURE</th> ';
                echo '</tr>';
                echo "<tr>";
                    echo '<td><img src="data:image/jpeg;base64,'.$imageData.'"></td>';
                echo "</tr>";
            echo '</table>';
            ?>

    </div>

            
   


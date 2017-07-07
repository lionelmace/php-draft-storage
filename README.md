# php-lamp-storage
A LAMP PHP project with Persistence.

1. Create a PHP page with the following content
    ```html
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
    </body>
    </html>
    ```

1. Create Dockerfile with Draft
    ```
    draft create -p php
    ```

1. Build docker image
    ```
    docker build -t registry.eu-de.bluemix.net/mace/phpstorage:v1 .
    ```

1. Run docker image
    ```
    docker run -p 80:80 registry.eu-de.bluemix.net/mace/phpstorage:v1
    ```

1. Build docker image
    ```
    ```

1. Build docker image
    ```
    ```


A simple PHP web page to display a static image deployed in Cloud Object Storage. This web page is packaged in a docker container using Draft open soure tool and the deployed into Kubernetes on Bluemix.

# Build a simple php page to display an image
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

1. Create a file composer.json with the following content
    ```json
    {
        "require": {
            "monolog/monolog": "^1.23"
        }
    }
    ```

# Build docker image

1. Create Dockerfile with Draft
    ```
    draft create -p php
    ```

1. Build docker image
    ```
    docker build -t registry.eu-de.bluemix.net/mace/phpstorage:v1 .
    ```

# Run docker image locally
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

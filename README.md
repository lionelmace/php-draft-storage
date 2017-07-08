
A simple PHP web page to display a static image deployed in Cloud Object Storage. This web page is packaged in a docker container and the deployed into Kubernetes on Bluemix.

```html
<html>
<head></head>

<body>
  <div>
    <?php
      $image = 'https://s3-api.dal-us-geo.objectstorage.softlayer.net/bucket-watson-test-2/frame0_Dog-5631.jpg';
      $imageData = base64_encode(file_get_contents($image));
      echo '<table>';
      echo '  <tr>';
      echo '    <th>PICTURE</th> ';
      echo '  </tr>';
      echo '  <tr>';
      echo '    <td><img src="data:image/jpeg;base64,'.$imageData.'"></td>';
      echo '  </tr>';
      echo '</table>';
    ?>
  </div>
</body>
</html>
```

1. Build docker image
    ```
    docker build -t registry.ng.bluemix.net/<namespace>/phpstorage:v1 .
    ```

1. Run docker image locally
    ```
    docker run -p 80:80 registry.ng.bluemix.net/<namespace>/phpstorage:v1
    ```

1. Push docker image to Bluemix Private Registry
    ```
    docker push registry.eu-de.bluemix.net/<namespace>/phpstorage:v1
    ```

1. Build docker image
    ```
    ```

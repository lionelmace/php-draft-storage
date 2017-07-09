
This sample is a simple PHP web page packaged into a docker container. This web page displays using S3 API a static image stored in a service [Cloud Object Storage](https://console.bluemix.net/catalog/infrastructure/cloud_object_storage). This container is deployed into Kubernetes on Bluemix.

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

1. Clone or download the source code for the PHP web app.
    ```
    git clone https://github.com/lionelmace/php-draft-storage
    ```

1. Select the private registry based on the Bluemix Regions

| Bluemix Regions | Registry Endpoint           | Region ID |
| --------------- | --------------------------- | --------- |      
| US South        |	registry.ng.bluemix.net	    | ng        |
| Germany         |	registry.eu-de.bluemix.net  | eu-de     |
| Sydney          |	registry.au-syd.bluemix.net | au-syd    |

1. Build docker image
    ```
    docker build -t registry.<region-id>.bluemix.net/<namespace>/phpstorage:v1 .
    ```

1. Run docker image locally
    ```
    docker run -p 80:80 registry.<region-id>.bluemix.net/<namespace>/phpstorage:v1
    ```

1. Push docker image to Bluemix Private Registry
    ```
    docker push registry.<region-id>.bluemix.net/<namespace>/phpstorage:v1
    ```

1. Run this container as a service in Kubernetes
    ```
    kubectl create -f deploy2kube.yml
    ```

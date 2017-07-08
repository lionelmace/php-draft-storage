
A simple PHP web page to display a static image deployed in Cloud Object Storage. This web page is packaged in a docker container and the deployed into Kubernetes on Bluemix.


# Build docker image

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

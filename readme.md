Leaflets
=================
After pulling of this repository, navigate to parent directory and run Terminal command: ```composer install``` to download mandatory dependencies.

navigate to .docker directory and run command: ```docker-compose -p appcontainer up -d --build --force-recreate```

REST api endpoint url: ```http://localhost:{port}/api/v1/leaflet```
Perfom POST request with body in following JSON format:
```
{
    "shop":"<shop-name>",
    "url":"<leaflet-url>",
    "validFrom":"<date-format YYYY-MM-dd>",
    "expiredAt": "<date-format YYYY-MM-dd>",
    "title": "<leaflet-title>"
}
```


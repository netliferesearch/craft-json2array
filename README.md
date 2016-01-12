# craft-json2array

Twig extenstion that takes a json-string (e.g from a file) and returns it as an array.

## How to use json2array

Include a json-file located in the template-folder

```
{% set json = include('api/api.json')|json2array %}
```

The `json`-variable will now contain an array.

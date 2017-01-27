---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#Suppliers

Recurso para manejar la tabla suppliers
<!-- START_5f22d61b8f94b4bdb1c21cb7dca60e56 -->
## Index

Retorna un listado de todos los proveedores en formato JSON

> Example request:

```bash
curl "http://localhost/api/suppliers" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/suppliers",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "total": 0,
    "per_page": 10,
    "current_page": 1,
    "last_page": 0,
    "next_page_url": null,
    "prev_page_url": null,
    "from": null,
    "to": null,
    "data": []
}
```

### HTTP Request
`GET api/suppliers`

`HEAD api/suppliers`


<!-- END_5f22d61b8f94b4bdb1c21cb7dca60e56 -->
<!-- START_02559b0c8efc390fc54328b64b4f0641 -->
## Create

Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/suppliers/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/suppliers/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/suppliers/create`

`HEAD api/suppliers/create`


<!-- END_02559b0c8efc390fc54328b64b4f0641 -->
<!-- START_5aaeb2b92fa120a0025f5686cfdf3c1f -->
## Store

Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/suppliers" \
-H "Accept: application/json" \
    -d "name"="voluptas" \
    -d "nit"="1983004" \
    -d "phone"="voluptas" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/suppliers",
    "method": "POST",
    "data": {
        "name": "voluptas",
        "nit": 1983004,
        "phone": "voluptas"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/suppliers`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `5`
    nit | numeric |  required  | Must have an exact length of `7`
    phone | string |  required  | 

<!-- END_5aaeb2b92fa120a0025f5686cfdf3c1f -->
<!-- START_9787f0d8b7391ce127255ae39821557f -->
## Show

Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/suppliers/{supplier}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/suppliers/{supplier}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/suppliers/{supplier}`

`HEAD api/suppliers/{supplier}`


<!-- END_9787f0d8b7391ce127255ae39821557f -->
<!-- START_4230749a708c3147765b185802c2c2a3 -->
## Edit

Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/suppliers/{supplier}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/suppliers/{supplier}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/suppliers/{supplier}/edit`

`HEAD api/suppliers/{supplier}/edit`


<!-- END_4230749a708c3147765b185802c2c2a3 -->
<!-- START_f6d73404813e09059c8fc509c540a024 -->
## Update

Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/suppliers/{supplier}" \
-H "Accept: application/json" \
    -d "name"="accusantium" \
    -d "nit"="0" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/suppliers/{supplier}",
    "method": "PUT",
    "data": {
        "name": "accusantium",
        "nit": 0
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/suppliers/{supplier}`

`PATCH api/suppliers/{supplier}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `5`
    nit | numeric |  required  | Minimum: `7`

<!-- END_f6d73404813e09059c8fc509c540a024 -->
<!-- START_f3c81fde24e888071b2ec20bb1f24fb7 -->
## Destroy

Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/suppliers/{supplier}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/suppliers/{supplier}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/suppliers/{supplier}`


<!-- END_f3c81fde24e888071b2ec20bb1f24fb7 -->
#Taxes

Class TaxesController
<!-- START_902f3e00ca57d9363ede874022dfb334 -->
## Index

Display a listing of the resource.

> Example request:

```bash
curl "http://localhost/api/taxes" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/taxes",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/taxes`

`HEAD api/taxes`


<!-- END_902f3e00ca57d9363ede874022dfb334 -->
<!-- START_aa23ba1526689da7313be88a2bfc4588 -->
## Create

Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/taxes/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/taxes/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/taxes/create`

`HEAD api/taxes/create`


<!-- END_aa23ba1526689da7313be88a2bfc4588 -->
<!-- START_6299e398aed44abe915c726b725bd24d -->
## Store

Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/taxes" \
-H "Accept: application/json" \
    -d "name"="omnis" \
    -d "porcentage"="6254146" \
    -d "value"="6254146" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/taxes",
    "method": "POST",
    "data": {
        "name": "omnis",
        "porcentage": 6254146,
        "value": 6254146
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/taxes`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `4`
    porcentage | numeric |  required  | 
    value | numeric |  optional  | 

<!-- END_6299e398aed44abe915c726b725bd24d -->
<!-- START_6e9a089b75d196ffdfcdca1fb9a341c9 -->
## Show

Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/taxes/{tax}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/taxes/{tax}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/taxes/{tax}`

`HEAD api/taxes/{tax}`


<!-- END_6e9a089b75d196ffdfcdca1fb9a341c9 -->
<!-- START_cfc3477f0911d838ab83dcd17dddcd2b -->
## Edit

Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/taxes/{tax}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/taxes/{tax}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/taxes/{tax}/edit`

`HEAD api/taxes/{tax}/edit`


<!-- END_cfc3477f0911d838ab83dcd17dddcd2b -->
<!-- START_f5091d5bdb278faa68e0f596edba29b3 -->
## Update

Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/taxes/{tax}" \
-H "Accept: application/json" \
    -d "name"="esse" \
    -d "porcentage"="8109" \
    -d "value"="8109" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/taxes/{tax}",
    "method": "PUT",
    "data": {
        "name": "esse",
        "porcentage": 8109,
        "value": 8109
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/taxes/{tax}`

`PATCH api/taxes/{tax}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | Minimum: `4`
    porcentage | numeric |  required  | 
    value | numeric |  optional  | 

<!-- END_f5091d5bdb278faa68e0f596edba29b3 -->
<!-- START_82811e82c2b7e1daf07e18d079a6890f -->
## Destroy

Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/taxes/{tax}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/taxes/{tax}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/taxes/{tax}`


<!-- END_82811e82c2b7e1daf07e18d079a6890f -->

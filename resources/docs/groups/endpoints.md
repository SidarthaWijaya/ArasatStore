# Endpoints


## api/get-product




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/get-product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/get-product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "products": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "category_id": 2,
                "nama_barang": "Ms. Jaunita Powlowski",
                "qty_stock": 2,
                "price": 47861,
                "berat_barang": 3,
                "description": "Earum dicta vel reprehenderit numquam. Autem adipisci aut enim non dignissimos. Quos reprehenderit sed et eligendi.",
                "product_url": "ms-jaunita-powlowski",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 2,
                "category_id": 1,
                "nama_barang": "Miss Marlen Bosco",
                "qty_stock": 4,
                "price": 47383,
                "berat_barang": 3,
                "description": "Amet dolor iste eum in illum. Qui ad quis ullam magni temporibus. Vitae architecto soluta eligendi totam minus.",
                "product_url": "miss-marlen-bosco",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 3,
                "category_id": 1,
                "nama_barang": "Camryn Kunze IV",
                "qty_stock": 4,
                "price": 26756,
                "berat_barang": 4,
                "description": "Quaerat sequi nulla eum vitae. Consequatur rem temporibus sunt nihil et in magnam.",
                "product_url": "camryn-kunze-iv",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 4,
                "category_id": 3,
                "nama_barang": "Milo McGlynn",
                "qty_stock": 8,
                "price": 14805,
                "berat_barang": 4,
                "description": "Quis voluptatem qui et iusto. Voluptatem ut qui et odit aut modi eaque. Laborum temporibus eaque amet qui.",
                "product_url": "milo-mcglynn",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 5,
                "category_id": 3,
                "nama_barang": "Kailyn Rohan",
                "qty_stock": 8,
                "price": 21357,
                "berat_barang": 2,
                "description": "Et quod tempora consequuntur omnis dicta animi. Qui quibusdam nostrum deserunt perspiciatis quo ad. Nesciunt quibusdam adipisci qui ut praesentium excepturi quis.",
                "product_url": "kailyn-rohan",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 6,
                "category_id": 2,
                "nama_barang": "Philip Yundt",
                "qty_stock": 4,
                "price": 47441,
                "berat_barang": 2,
                "description": "Qui eius omnis inventore quasi. Autem nihil molestiae magni magni dignissimos. Ea accusantium animi minus aut.",
                "product_url": "philip-yundt",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 7,
                "category_id": 2,
                "nama_barang": "Dr. Mercedes McGlynn III",
                "qty_stock": 2,
                "price": 44477,
                "berat_barang": 3,
                "description": "Error qui vel omnis ipsam id voluptatem et vel. Ea totam praesentium dolor earum possimus. Aut quas autem nobis adipisci.",
                "product_url": "dr-mercedes-mcglynn-iii",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 8,
                "category_id": 2,
                "nama_barang": "Janet Deckow",
                "qty_stock": 7,
                "price": 38924,
                "berat_barang": 2,
                "description": "Ex et et dolorem. Voluptas tempore quia fugit unde iste. Praesentium similique quo id fugiat perspiciatis at.",
                "product_url": "janet-deckow",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 9,
                "category_id": 3,
                "nama_barang": "Alexzander Jakubowski",
                "qty_stock": 1,
                "price": 44135,
                "berat_barang": 1,
                "description": "Esse quibusdam voluptas voluptas eligendi. Accusamus et ad repellendus at.",
                "product_url": "alexzander-jakubowski",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 10,
                "category_id": 3,
                "nama_barang": "Dr. Carey Weimann II",
                "qty_stock": 9,
                "price": 9911,
                "berat_barang": 1,
                "description": "Aut in debitis voluptatem illo earum libero. Nisi commodi minus dolorum optio esse.",
                "product_url": "dr-carey-weimann-ii",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 11,
                "category_id": 1,
                "nama_barang": "Prof. Osbaldo Rosenbaum V",
                "qty_stock": 4,
                "price": 37855,
                "berat_barang": 2,
                "description": "Cumque et quas reprehenderit consectetur ut impedit qui. Ipsa ut distinctio porro laboriosam quo vel sunt. Asperiores aperiam et ipsa error sed.",
                "product_url": "prof-osbaldo-rosenbaum-v",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 12,
                "category_id": 3,
                "nama_barang": "Cordie Braun",
                "qty_stock": 8,
                "price": 45197,
                "berat_barang": 3,
                "description": "Consequatur non atque laboriosam eos iste sit. Consequatur adipisci consequatur iure autem qui voluptas ex.",
                "product_url": "cordie-braun",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 13,
                "category_id": 3,
                "nama_barang": "Tre Marquardt",
                "qty_stock": 3,
                "price": 5874,
                "berat_barang": 3,
                "description": "Sint eum laboriosam ea autem perspiciatis quibusdam quasi consequatur. Earum rerum saepe deserunt et vel.",
                "product_url": "tre-marquardt",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 14,
                "category_id": 3,
                "nama_barang": "Prof. Ivah Hessel",
                "qty_stock": 9,
                "price": 16959,
                "berat_barang": 2,
                "description": "Quia voluptas sed voluptates labore neque distinctio laborum. Quis enim voluptatum qui sit sunt ducimus in. Ipsam ipsam vero autem enim qui sed alias.",
                "product_url": "prof-ivah-hessel",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 15,
                "category_id": 3,
                "nama_barang": "Shannon Huel",
                "qty_stock": 2,
                "price": 25440,
                "berat_barang": 1,
                "description": "Qui eveniet iste incidunt laborum impedit ut. Quisquam quaerat ullam odio. Nobis maxime esse occaecati.",
                "product_url": "shannon-huel",
                "created_at": null,
                "updated_at": null
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/get-product?page=1",
        "from": 1,
        "last_page": 2,
        "last_page_url": "http:\/\/localhost\/api\/get-product?page=2",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/get-product?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http:\/\/localhost\/api\/get-product?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/get-product?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": "http:\/\/localhost\/api\/get-product?page=2",
        "path": "http:\/\/localhost\/api\/get-product",
        "per_page": 15,
        "prev_page_url": null,
        "to": 15,
        "total": 20
    }
}
```
<div id="execution-results-GETapi-get-product" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-get-product"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get-product"></code></pre>
</div>
<div id="execution-error-GETapi-get-product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get-product"></code></pre>
</div>
<form id="form-GETapi-get-product" data-method="GET" data-path="api/get-product" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-get-product', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-get-product" onclick="tryItOut('GETapi-get-product');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-get-product" onclick="cancelTryOut('GETapi-get-product');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-get-product" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/get-product</code></b>
</p>
</form>


## api/get-product




> Example request:

```bash
curl -X POST \
    "http://localhost/api/get-product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/get-product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-get-product" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-get-product"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-get-product"></code></pre>
</div>
<div id="execution-error-POSTapi-get-product" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-get-product"></code></pre>
</div>
<form id="form-POSTapi-get-product" data-method="POST" data-path="api/get-product" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-get-product', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-get-product" onclick="tryItOut('POSTapi-get-product');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-get-product" onclick="cancelTryOut('POSTapi-get-product');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-get-product" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/get-product</code></b>
</p>
</form>


## api/get-product/{$id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/get-product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/get-product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\AbstractRouteCollection.php",
    "line": 43,
    "trace": [
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteCollection.php",
            "line": 162,
            "function": "handleMatchedRoute",
            "class": "Illuminate\\Routing\\AbstractRouteCollection",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 647,
            "function": "match",
            "class": "Illuminate\\Routing\\RouteCollection",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "findRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-get-product--$id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-get-product--$id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get-product--$id-"></code></pre>
</div>
<div id="execution-error-GETapi-get-product--$id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get-product--$id-"></code></pre>
</div>
<form id="form-GETapi-get-product--$id-" data-method="GET" data-path="api/get-product/{$id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-get-product--$id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-get-product--$id-" onclick="tryItOut('GETapi-get-product--$id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-get-product--$id-" onclick="cancelTryOut('GETapi-get-product--$id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-get-product--$id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/get-product/{$id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>$id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="$id" data-endpoint="GETapi-get-product--$id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/create/{id}




> Example request:

```bash
curl -X POST \
    "http://localhost/api/create/saepe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/create/saepe"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-create--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-create--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-create--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-create--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-create--id-"></code></pre>
</div>
<form id="form-POSTapi-create--id-" data-method="POST" data-path="api/create/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-create--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-create--id-" onclick="tryItOut('POSTapi-create--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-create--id-" onclick="cancelTryOut('POSTapi-create--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-create--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/create/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-create--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/order




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "order_details": [
        {
            "id": 1,
            "order_id": 1,
            "product_id": 1,
            "quantity": 1,
            "note": null,
            "created_at": "2021-05-25T10:09:39.000000Z",
            "updated_at": "2021-05-25T10:09:39.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-order"></code></pre>
</div>
<div id="execution-error-GETapi-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-order"></code></pre>
</div>
<form id="form-GETapi-order" data-method="GET" data-path="api/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-order" onclick="tryItOut('GETapi-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-order" onclick="cancelTryOut('GETapi-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/order</code></b>
</p>
</form>


## api/order-update/{id}




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/order-update/quam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order-update/quam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-order-update--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-order-update--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-order-update--id-"></code></pre>
</div>
<div id="execution-error-PATCHapi-order-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-order-update--id-"></code></pre>
</div>
<form id="form-PATCHapi-order-update--id-" data-method="PATCH" data-path="api/order-update/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-order-update--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-order-update--id-" onclick="tryItOut('PATCHapi-order-update--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-order-update--id-" onclick="cancelTryOut('PATCHapi-order-update--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-order-update--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/order-update/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PATCHapi-order-update--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/delete-data/{id}




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/delete-data/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/delete-data/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-delete-data--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-delete-data--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-delete-data--id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-delete-data--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-delete-data--id-"></code></pre>
</div>
<form id="form-DELETEapi-delete-data--id-" data-method="DELETE" data-path="api/delete-data/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-delete-data--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-delete-data--id-" onclick="tryItOut('DELETEapi-delete-data--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-delete-data--id-" onclick="cancelTryOut('DELETEapi-delete-data--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-delete-data--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/delete-data/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEapi-delete-data--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/create-profile




> Example request:

```bash
curl -X POST \
    "http://localhost/api/create-profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/create-profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-create-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-create-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-create-profile"></code></pre>
</div>
<div id="execution-error-POSTapi-create-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-create-profile"></code></pre>
</div>
<form id="form-POSTapi-create-profile" data-method="POST" data-path="api/create-profile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-create-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-create-profile" onclick="tryItOut('POSTapi-create-profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-create-profile" onclick="cancelTryOut('POSTapi-create-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-create-profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/create-profile</code></b>
</p>
</form>


## api/invoice




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/invoice" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/invoice"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
       <h6>invoice: 20210525170937</h6>
       <h6>Customer:budi</h6>
       <h6>Phone number: 8115546</h6>
       <h6>Alamat:scbd</h6>
       <h6>kota/kecamatan:dki jakarta jakarta selatan</h6>
       <h6>kode pos: 11420</h6>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>nama barang</th>
                    <th>qty</th>
                    <th>price</th>
                    <th>total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                                            <td>Ms. Jaunita Powlowski</td>
                        <td>1</td>
                        <td>47861</td>
                        <td>47861</td>
                </tr>
                            </tbody>
        </table>
    </div>
    <div class="container">
        <h6>subtotal: 47861</h6>
        <h6>pengiriman:</h6>
        <h6>total:0</h6>
     </div>
</body>
</html>
```
<div id="execution-results-GETapi-invoice" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-invoice"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-invoice"></code></pre>
</div>
<div id="execution-error-GETapi-invoice" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-invoice"></code></pre>
</div>
<form id="form-GETapi-invoice" data-method="GET" data-path="api/invoice" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-invoice', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-invoice" onclick="tryItOut('GETapi-invoice');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-invoice" onclick="cancelTryOut('GETapi-invoice');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-invoice" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/invoice</code></b>
</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v8.34.0 (PHP v7.4.16)
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>


## shop




> Example request:

```bash
curl -X GET \
    -G "http://localhost/shop" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/shop"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="O8ePScnb5N1oeknDYSiFjpWTOTtuJulUFH6GMGg0">

    <title>Shop</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    </head>

<body>
  
    <div class="container mt-5" style="max-width: 550px">
      
                    <div id="data-wrapper">
              
                                             
                <h6>Whitney Bergnaum</h6>
                <h6>Itaque iusto enim repellendus quae amet ab. Labore rerum debitis tempore corrupti. Ducimus blanditiis laborum necessitatibus aliquid quasi ut.</h6>
                <h6>9582</h6>
                <a href="https://api.arasatu.com/api/get-product/1">add to chart</a>
                
                                             
                <h6>Ms. Nelda Schaefer</h6>
                <h6>Harum quia expedita similique architecto. Dolores maxime molestias voluptate assumenda est.</h6>
                <h6>6292</h6>
                <a href="https://api.arasatu.com/api/get-product/2">add to chart</a>
                
                                             
                <h6>Christiana Deckow</h6>
                <h6>Vitae et officiis veniam eveniet vitae odit sed quis. Consequuntur ut vero impedit est.</h6>
                <h6>42861</h6>
                <a href="https://api.arasatu.com/api/get-product/3">add to chart</a>
                
                                             
                <h6>Mitchell Cruickshank</h6>
                <h6>Aut voluptatem voluptatum qui culpa. Ut non temporibus placeat et. Quia praesentium maiores est blanditiis autem vel.</h6>
                <h6>15748</h6>
                <a href="https://api.arasatu.com/api/get-product/4">add to chart</a>
                
                                             
                <h6>Ryder Jacobs</h6>
                <h6>Ducimus culpa et ut sapiente velit eveniet. Velit omnis ab voluptatibus vitae. Quis laudantium et repellendus quia explicabo.</h6>
                <h6>18705</h6>
                <a href="https://api.arasatu.com/api/get-product/5">add to chart</a>
                
                                             
                <h6>Mr. Dario Schamberger</h6>
                <h6>Est sunt non suscipit ab quae exercitationem necessitatibus. In et libero eum id id. Itaque explicabo dignissimos ut cum tempore officiis.</h6>
                <h6>40997</h6>
                <a href="https://api.arasatu.com/api/get-product/6">add to chart</a>
                
                                             
                <h6>Dr. Krystina Lang MD</h6>
                <h6>Ut distinctio dolores assumenda et aut sapiente inventore. Nihil sint animi omnis quos exercitationem qui id ullam. Occaecati rerum et autem dolores qui nostrum.</h6>
                <h6>7528</h6>
                <a href="https://api.arasatu.com/api/get-product/7">add to chart</a>
                
                                             
                <h6>Lilliana Bode</h6>
                <h6>Voluptate vel dolores voluptatibus eum. Sunt consequatur optio quas. Voluptatem a adipisci quo labore ipsa non sint.</h6>
                <h6>32365</h6>
                <a href="https://api.arasatu.com/api/get-product/8">add to chart</a>
                
                                             
                <h6>Dr. Mariana Cummings</h6>
                <h6>Perspiciatis omnis omnis repudiandae ducimus. Repellendus quisquam reiciendis amet iure ea beatae.</h6>
                <h6>17776</h6>
                <a href="https://api.arasatu.com/api/get-product/9">add to chart</a>
                
                                             
                <h6>Roman Willms MD</h6>
                <h6>Maxime laboriosam tenetur omnis earum dicta. Ut a suscipit quidem dolorem. Deleniti consequatur sed quos magni.</h6>
                <h6>37095</h6>
                <a href="https://api.arasatu.com/api/get-product/10">add to chart</a>
                
              
             <h4>===================================================================================================================</h4>       
            </div>
        
       

        <!-- Data Loader -->
        <div class="auto-load text-center">
            <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <path fill="#000"
                    d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                    <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                        from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
                </path>
            </svg>
        </div>
    </div>
 
   
    <form action="/shop" method="POST">
        <input type="hidden" name="_token" value="O8ePScnb5N1oeknDYSiFjpWTOTtuJulUFH6GMGg0">        <input type="text" name="page" id="page">
        <input type="text" name="pageSize" id="pageSize">
        <button value="submit" id="submit"> submit</button>
    </form>
    
    <a href="/pengiriman">chart</a>


    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var ENDPOINT = "http://localhost";
        var page = 1;
        var last_page=0;


        infinteLoadMore(page);
        $(window).scroll(function () {
            
            if ($(window).scrollTop() + $(window).height() >= $(document).height()-4) {
               
            // console.log($(window).scrollTop() + $(window).height());
            // console.log($(window).scrollTop());
            // console.log($(window).height());
            // console.log($(document).height());

           
            page++;
               
               if(page<=last_page){
               console.log(page);
               console.log(last_page);
                infinteLoadMore(page);
                console.log("load"); 
               }
                
            }
        });
        
        function infinteLoadMore(page) {
            $.ajax({
                    url: "http://127.0.0.1:8000/api/get-product?page="+page,
                    datatype: "html",
                    type: "get",
                    beforeSend: function () {
                      
                        $('.auto-load').show();
                     
                    }
                })
                .done(function (response) {
                   last_page=response.products.last_page;
                    console.log(response);
                    //console.log(response.products.data.last_page);
                    
                    if (response.products.data==0) {
                       
                        $('.auto-load').html("We don't have more data to display :(");
                        return;
                    }
                    $('.auto-load').hide();
                   
                    // $("#data-wrapper").append('<h6>'+response.products.data[1].id+'</h6>');
                    // ''+$products->id+'</h6>'+
                    //'<a href=''api/get-product/'+id+'>'+response.products.data[1].id+'</a>'
                    
                    console.log(response.products.data.length);
                    for (let index = 0; index < response.products.data.length; index++) {
                        var id=response.products.data[index].id;
                        var nama_barang=response.products.data[index].nama_barang;
                        var description=response.products.data[index].description;
                        var price=response.products.data[index].price;
                        var url= response.products.data[index].product_url;
                       
                        //console.log(id);
                        $("#data-wrapper").append('<h6>'+nama_barang+'</h6>'+
                        '<h6>'+description+'</h6>'+
                        '<h6>'+price+'</h6>'+
                        '<a href='+'shop/'+url+'>'+"add to chart"+'</a>');
                    //     
                    
                    }
                    //$("#data-wrapper").append('<a href='+'api/get-product/'+test+'>'+"add to chart"+'</a>');
                   
                })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                    
                });
        }
    </script>


</body>

</html>
```
<div id="execution-results-GETshop" hidden>
    <blockquote>Received response<span id="execution-response-status-GETshop"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETshop"></code></pre>
</div>
<div id="execution-error-GETshop" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETshop"></code></pre>
</div>
<form id="form-GETshop" data-method="GET" data-path="shop" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETshop', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETshop" onclick="tryItOut('GETshop');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETshop" onclick="cancelTryOut('GETshop');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETshop" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>shop</code></b>
</p>
</form>


## shop




> Example request:

```bash
curl -X POST \
    "http://localhost/shop" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/shop"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTshop" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTshop"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTshop"></code></pre>
</div>
<div id="execution-error-POSTshop" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTshop"></code></pre>
</div>
<form id="form-POSTshop" data-method="POST" data-path="shop" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTshop', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTshop" onclick="tryItOut('POSTshop');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTshop" onclick="cancelTryOut('POSTshop');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTshop" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>shop</code></b>
</p>
</form>


## shop/{product_url}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/shop/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/shop/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Trying to get property 'nama_barang' of non-object (View: D:\\arasatuStore\\resources\\views\\input.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "D:\\arasatuStore\\resources\\views\/\/input.blade.php",
    "line": 15,
    "trace": [
        {
            "file": "D:\\arasatuStore\\resources\\views\/\/input.blade.php",
            "line": 15,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\facade\\ignition\\src\\Views\\Engines\\CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 62,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 34,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 789,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 759,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 64,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETshop--product_url-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETshop--product_url-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETshop--product_url-"></code></pre>
</div>
<div id="execution-error-GETshop--product_url-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETshop--product_url-"></code></pre>
</div>
<form id="form-GETshop--product_url-" data-method="GET" data-path="shop/{product_url}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETshop--product_url-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETshop--product_url-" onclick="tryItOut('GETshop--product_url-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETshop--product_url-" onclick="cancelTryOut('GETshop--product_url-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETshop--product_url-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>shop/{product_url}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product_url</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product_url" data-endpoint="GETshop--product_url-" data-component="url" required  hidden>
<br>

</p>
</form>


## pengiriman




> Example request:

```bash
curl -X GET \
    -G "http://localhost/pengiriman" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/pengiriman"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
   
    <form action="/api/create-profile" method="POST">
        <input type="hidden" name="_token" value="O8ePScnb5N1oeknDYSiFjpWTOTtuJulUFH6GMGg0">        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="nama"><br>
        <label for="">Phone number</label>
        <input type="text" name="phone_number" placeholder="phone_number"><br>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="email"><br>
        <label for="">Alamat</label>
        <input type="text" name="alamat" placeholder="alamat"><br>
        <label for="">Kota atau Kecamatan</label>
        <input type="text" name="kota_kecamatan"  id='note' placeholder="kota_kecamatan"> <br>
        <label for="">Kode pos</label>
        <input type="text" name="kode_pos" placeholder="kode_pos"><br>
      
        <button id="order">submit</button>
    </form>


    
</body>
</html>
```
<div id="execution-results-GETpengiriman" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpengiriman"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpengiriman"></code></pre>
</div>
<div id="execution-error-GETpengiriman" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpengiriman"></code></pre>
</div>
<form id="form-GETpengiriman" data-method="GET" data-path="pengiriman" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpengiriman', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpengiriman" onclick="tryItOut('GETpengiriman');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpengiriman" onclick="cancelTryOut('GETpengiriman');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpengiriman" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>pengiriman</code></b>
</p>
</form>


## data




> Example request:

```bash
curl -X GET \
    -G "http://localhost/data" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/data"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETdata" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdata"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdata"></code></pre>
</div>
<div id="execution-error-GETdata" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdata"></code></pre>
</div>
<form id="form-GETdata" data-method="GET" data-path="data" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdata', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdata" onclick="tryItOut('GETdata');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdata" onclick="cancelTryOut('GETdata');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdata" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>data</code></b>
</p>
</form>


## test




> Example request:

```bash
curl -X GET \
    -G "http://localhost/test" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/test"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "Undefined variable: jsonArrayResponse",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "D:\\arasatuStore\\resources\\views\\test.php",
    "line": 11,
    "trace": [
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php",
            "line": 60,
            "function": "handleViewException",
            "class": "Facade\\Ignition\\Views\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php",
            "line": 38,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\facade\\ignition\\src\\Views\\Engines\\PhpEngine.php",
            "line": 25,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\PhpEngine",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 62,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 34,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 789,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 759,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 64,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 695,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 670,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 636,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 611,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 92,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\arasatuStore\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETtest" hidden>
    <blockquote>Received response<span id="execution-response-status-GETtest"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETtest"></code></pre>
</div>
<div id="execution-error-GETtest" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETtest"></code></pre>
</div>
<form id="form-GETtest" data-method="GET" data-path="test" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETtest', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETtest" onclick="tryItOut('GETtest');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETtest" onclick="cancelTryOut('GETtest');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETtest" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>test</code></b>
</p>
</form>


## invoice




> Example request:

```bash
curl -X GET \
    -G "http://localhost/invoice" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/invoice"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
       <h6>invoice: 20210525170937</h6>
       <h6>Customer:budi</h6>
       <h6>Phone number: 8115546</h6>
       <h6>Alamat:scbd</h6>
       <h6>kota/kecamatan:dki jakarta jakarta selatan</h6>
       <h6>kode pos: 11420</h6>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>nama barang</th>
                    <th>qty</th>
                    <th>price</th>
                    <th>total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                                            <td>Ms. Jaunita Powlowski</td>
                        <td>1</td>
                        <td>47861</td>
                        <td>47861</td>
                </tr>
                            </tbody>
        </table>
    </div>
    <div class="container">
        <h6>subtotal: 47861</h6>
        <h6>pengiriman:</h6>
        <h6>total:0</h6>
     </div>
</body>
</html>
```
<div id="execution-results-GETinvoice" hidden>
    <blockquote>Received response<span id="execution-response-status-GETinvoice"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETinvoice"></code></pre>
</div>
<div id="execution-error-GETinvoice" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETinvoice"></code></pre>
</div>
<form id="form-GETinvoice" data-method="GET" data-path="invoice" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETinvoice', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETinvoice" onclick="tryItOut('GETinvoice');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETinvoice" onclick="cancelTryOut('GETinvoice');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETinvoice" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>invoice</code></b>
</p>
</form>




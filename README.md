# REST API
Work with REST API in Laravel framework

<br>

#### Get all products
```sh
fetch('http://127.0.0.1:8000/api/products')
    .then(res => res.json())
    .then(json => console.log(json))
```
##### Output
![Output](https://github.com/effati78/REST_API_Laravel8/blob/master/images/products.png)

<br> <hr>

#### Get product by ID
```sh
fetch('http://127.0.0.1:8000/api/products/2')
    .then(res => res.json())
    .then(json => console.log(json))
```
##### Output
![Output](https://github.com/effati78/REST_API_Laravel8/blob/master/images/product-id.png)

<br> <hr>

#### Get all sponsors
```sh
fetch('http://127.0.0.1:8000/api/sponsors')
    .then(res => res.json())
    .then(json => console.log(json))
```
##### Output
![Output](https://github.com/effati78/REST_API_Laravel8/blob/master/images/sponsors.png)

<br> <hr>

#### Post comments
```sh
fetch('http://localhost:8000/api/comments/1', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      name: "رضا عفتی مقدم",
      email: "effati78@pm.me",
      avatar: "https://avatars.githubusercontent.com/u/56348113?v=4",
      score: "5",
      comment: "خیلی عالی بود",
    })
  })
    .then(res => res.json())
    .then(json => console.log(json))
```
##### Output
```sh
{
    "message": "Comment is added successfully."
}
```

<br> <hr>

#### Get comments by ID
```sh
fetch('http://127.0.0.1:8000/api/comments/3')
    .then(res => res.json())
    .then(json => console.log(json))
```
##### Output
![Output](https://github.com/effati78/REST_API_Laravel8/blob/master/images/commetns-id.png)

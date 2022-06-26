# REST API
 _کار با REST API در فریمورک لاراول_

#### Get all products
```sh
fetch('http://127.0.0.1:8000/api/products')
    .then(res => res.json())
    .then(json => console.log(json))
```
##### Output
![Output](https://travis-ci.org/joemccann/dillinger.svg?branch=master)


#### Get product by ID
```sh
fetch('http://127.0.0.1:8000/api/products/2')
    .then(res => res.json())
    .then(json => console.log(json))
```
##### Output
![Output](https://travis-ci.org/joemccann/dillinger.svg?branch=master)

#### Get all sponsors
```sh
fetch('http://127.0.0.1:8000/api/sponsors')
    .then(res => res.json())
    .then(json => console.log(json))
```
##### Output
![Output](https://travis-ci.org/joemccann/dillinger.svg?branch=master)

#### Post comments
```sh
fetch('https://api.freerealapi.com/blogs/', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      text: "test text",
      title: "test title",
      tags: "tags1,tag2,tag3",
    })
  })
    .then(res => res.json())
    .then(json => console.log(json))
```


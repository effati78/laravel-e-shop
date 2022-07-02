<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel Web Service | REST API</title>
    <link rel="icon" type="image/png" href="/images/shop.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css" />
    <link rel="stylesheet" href="/css/dracula.css">
    <link rel="stylesheet" href="/css/index.css" />
</head>

<body>
    <div class="container my-5">
        <h3 class="font-weight-bold">How to use it?</h3>
        <p>This is a fairly simple web service for a store website. using api is very simple and need no authentication,
            this type is the best choice to working with if you start using api recently.</p>

        <hr>

        <h3 class="font-weight-bold mt-5"><img src="/images/shopping.png" alt="آیکون محصولات" /> <span>Products</span>
        </h3>
        <div class="row">
            <div class="col-12">
                <h5 class="mt-5 mb-0">Get all products</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-primary border-0 py-1 px-2">GET</span></div>
                <pre><code class="language-javascript hljs">fetch('http://127.0.0.1:8000/api/products')
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button data-type="products" data-status="getAll" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>

            <div class="col-12">
                <h5 class="mt-5 mb-0">Get product by ID</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-primary border-0 py-1 px-2">GET</span></div>
                <pre><code class="language-javascript hljs">fetch('http://127.0.0.1:8000/api/products/2')
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button data-type="products" data-status="getById" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>

            <div class="col-12">
                <h5 class="mt-5 mb-0">Get featured products</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-primary border-0 py-1 px-2">GET</span></div>
                <pre><code class="language-javascript hljs">fetch('http://127.0.0.1:8000/api/products/featured')
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button  data-type="products" data-status="getFeatured" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>

            <div class="col-12">
                <h5 class="mt-5 mb-0">Delete product by ID</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-danger border-0 py-1 px-2">DELETE</span></div>
                <pre><code class="language-javascript hljs">fetch('http://127.0.0.1:8000/api/products/2')
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button  data-type="products" data-status="delete" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>

            <div class="col-12">
                <h5 class="mt-5 mb-0">Update product by ID</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-warning border-0 py-1 px-2">PUT</span></div>
                <pre><code class="language-javascript hljs">fetch('http://localhost:8000/api/products/2', {
    method: 'PUT',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      title: "آیفون ۱3پرو اپل iPhone 13 Pro 256GB NOT ACTIVE",
      content: "اندازه نمایشگر:  6.1 اینچ\r\nرزولوشن: 1170×2532\r\nدوربین‌های اصلی: 12+12+12\r\nدوربین سلفی: 12\r\nپردازنده: A15\r\nحافظه: 256 گیگابایت\r\nرم: 6 گیگابایت",
      image: "https://itech.ir/wp-content/uploads/2021/09/%D8%A2%DB%8C%D9%81%D9%88%D9%86-%DB%B13%D9%BE%D8%B1%D9%88-%D8%A7%D9%BE%D9%84-iPhone-13-Pro-128GB-570x570.jpg",
      price: "49,500,000 تومان",
      score: "4",
      isFeatured: 0,
    })
  })
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button  data-type="products" data-status="update" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>

            <div class="col-12">
                <h5 class="mt-5 mb-0">Post product</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-success border-0 py-1 px-2">POST</span></div>
                <pre><code class="language-javascript hljs">fetch('http://localhost:8000/api/products', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      title: "مک بوک ایر 13 اینچی اپل MacBook Air MGN63 2020",
      content: "ظرفیت حافظه رم: 8 گیگابایت\nظرفیت حافظه داخلی: 256 گیگابایت\nسازنده پردازنده گرافیکی: Apple\nاندازه صفحه نمایش: 13.3 اینچ\nطبقه‌بندی: کاربری عمومی ، باریک و سبک\nسری پردازنده: M1\nنوع حافظه رم: Unified\nدقت صفحه نمایش: QHD|2560×1600\nصفحه نمایش مات: خیر\nصفحه نمایش لمسی: خیر\nسیستم عامل: Apple Mac OS\nپورت HDMI: ندارد",
      image: "https://itech.ir/wp-content/uploads/2021/01/%D9%84%D9%BE-%D8%AA%D8%A7%D9%BE-13-%D8%A7%DB%8C%D9%86%DA%86%DB%8C-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-MacBook-Air-MGN63-2020.jpg",
      price: "30,650,000 تومان",
      score: "5",
      isFeatured: 1,
    })
  })
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button data-type="products" data-status="post" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>
        </div>

        <hr>

        <h3 class="font-weight-bold mt-5"><img src="/images/comment.png" alt="آیکون کامنت" /> <span>Comments</span></h3>
        <div class="row">
            <div class="col-12">
                <h5 class="mt-5 mb-0">Get comments by ID</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-primary border-0 py-1 px-2">GET</span></div>
                <pre><code class="language-javascript hljs">fetch('http://127.0.0.1:8000/api/comments/3')
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button data-type="comments" data-status="getById" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>

            <div class="col-12">
                <h5 class="mt-5 mb-0">Post comment</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-success border-0 py-1 px-2">POST</span></div>
                <pre><code class="language-javascript hljs">fetch('http://localhost:8000/api/comments/1', {
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
    .then(json => console.log(json))</code></pre>
                <button data-type="comments" data-status="post" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>
        </div>

        <hr>

        <h3 class="font-weight-bold mt-5"><img src="/images/perspective.png" alt="آیکون اسپانسر" />
            <span>Sponsors</span>
        </h3>
        <div class="row">
            <div class="col-12">
                <h5 class="mt-5 mb-0">Get all sponsors</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-primary border-0 py-1 px-2">GET</span></div>
                <pre><code class="language-javascript hljs">fetch('http://127.0.0.1:8000/api/sponsors')
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button data-type="sponsors" data-status="getAll" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>

            <div class="col-12">
                <h5 class="mt-5 mb-0">Post sponsor</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-success border-0 py-1 px-2">POST</span></div>
                <pre><code class="language-javascript hljs">fetch('http://localhost:8000/api/sponsors', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      name: "فروشگاه ساز وب از تو",
      url: "https://webazto.ir",
      img: "https://avatars.githubusercontent.com/u/56348113?v=4",
    })
  })
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button data-type="sponsors" data-status="post" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>

            <div class="col-12">
                <h5 class="mt-5 mb-0">Delete sponsor by ID</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-danger border-0 py-1 px-2">DELETE</span></div>
                <pre><code class="language-javascript hljs">fetch('http://127.0.0.1:8000/api/sponsors/2')
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button  data-type="sponsors" data-status="delete" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>

            <div class="col-12">
                <h5 class="mt-5 mb-0">Update sponsor by ID</h5>
                <div class="d-flex align-items-center justify-content-end"><span
                        class="badge badge-warning border-0 py-1 px-2">PUT</span></div>
                <pre><code class="language-javascript hljs">fetch('http://localhost:8000/api/sponsors/1', {
    method: 'PUT',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      name: "شرکت برنامه نویسی عصر شگرف",
      url: "https://singularity-age.com/",
      img: "https://singularity-age.com/wp-content/uploads/2021/08/singularity-age-logo.png",
    })
  })
    .then(res => res.json())
    .then(json => console.log(json))</code></pre>
                <button  data-type="sponsors" data-status="update" class="btn btn-success border-0 mb-3 px-4">Try it</button>
                <div></div>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start">
        <div class="text-center p-3 text-dark">
            © 2022 Copyright - Made with ♥ by
            <a class="text-dark" href="https://github.com/effati78">Reza</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
    <script src="/js/index.js"></script>
</body>

</html>

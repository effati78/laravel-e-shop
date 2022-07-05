let loading = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`;
let data = {
    sponsors: {
        getAll: `<pre><code class="language-javascript h-400">{
    "status": 200,
    "success": true,
    "sponsors": [
        {
            "id": 1,
            "name": "فروشگاه ساز وب از تو",
            "url": "https://webazto.ir",
            "img": "https://webazto.ir/img/spinner-webAzToLOGO.webp",
            "created_at": "2022-06-01T22:14:56.000000Z",
            "updated_at": "2022-06-03T22:14:56.000000Z"
        },
        {
            "id": 2,
            "name": "شرکت برنامه نویسی عصر شگرف",
            "url": "https://singularity-age.com/",
            "img": "https://singularity-age.com/wp-content/uploads/2021/08/singularity-age-logo.png",
            "created_at": "2022-06-06T22:17:45.000000Z",
            "updated_at": "2022-06-03T22:17:45.000000Z"
        }
    ]
}</code></pre>`,
        post: `<pre><code class="language-javascript h-400">{
    "status": 201,
    "success": true,
    "message": "Adding Sponsor Done"
}</code></pre>`,
        delete: `<pre><code class="language-javascript h-400">{
    "status": 202,
    "success": true,
    "message": "Deleting Sponsor Done"
}</code></pre>`,
        update: `<pre><code class="language-javascript h-400">{
    "status": 200,
    "success": true,
    "message": "Editing Sponsor Done"
}</code></pre>`,
    },
    comments: {
        getById: `<pre><code class="language-javascript h-400">{
    "status": 200,
    "success": true,
    "comments": [
        {
            "id": 4,
            "product_id": 3,
            "sender_name": "ریحانه کریمی",
            "sender_email": "reyhan0011@gmail.com",
            "sender_avatar": "https://cdn.lorem.space/images/face/.cache/500x500/pexels-pixabay-415829.jpg",
            "score": "1",
            "comment": "روی کار خط خش داشت کهنه بود و اصلا هم اندازه ایپد مینی نبود جفت نمیشد من که مرجوع کردم",
            "created_at": "2022-06-21T22:04:26.000000Z",
            "updated_at": "2022-06-09T22:04:26.000000Z"
        },
        {
            "id": 5,
            "product_id": 3,
            "sender_name": "فاطمه رصایی",
            "sender_email": "fatiRezaei@gmail.com",
            "sender_avatar": "https://cdn.lorem.space/images/face/.cache/500x500/pexels-pixabay-415829.jpg",
            "score": "5",
            "comment": "من هديه گرفتم خيلي راضي بودن",
            "created_at": "2022-06-01T22:06:07.000000Z",
            "updated_at": "2022-06-03T22:06:07.000000Z"
        }
    ]
}</code></pre>`,
        post: `<pre><code class="language-javascript h-400">{
    "status": 201,
    "success": true,
    "message": "Adding Comment Done"
}</code></pre>`,
    },
    products: {
        getAll: `<pre><code class="language-javascript h-400">{
    "status": 200,
    "success": true,
    "products": [
        {
            "id": 1,
            "title": "مک بوک ایر 13 اینچی اپل MacBook Air MGN63 2020",
            "content": "ظرفیت حافظه رم: 8 گیگابایت, ظرفیت حافظه داخلی: 256 گیگابایت, سازنده پردازنده گرافیکی: Apple, اندازه صفحه نمایش: 13.3 اینچ, طبقه‌بندی: کاربری عمومی ، باریک و سبک, سری پردازنده: M1, نوع حافظه رم: Unified, دقت صفحه نمایش: QHD|2560×1600, صفحه نمایش مات: خیر, صفحه نمایش لمسی: خیر, سیستم عامل: Apple Mac OS, پورت HDMI: ندارد",
            "image_url": "https://itech.ir/wp-content/uploads/2021/01/%D9%84%D9%BE-%D8%AA%D8%A7%D9%BE-13-%D8%A7%DB%8C%D9%86%DA%86%DB%8C-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-MacBook-Air-MGN63-2020.jpg",
            "price": "30,650,000 تومان",
            "score": "5",
            "isFeatured": 1,
            "created_at": "2022-06-01T13:51:41.000000Z",
            "updated_at": "2022-06-02T13:52:04.000000Z"
        },
        {
            "id": 2,
            "title": "آیفون ۱3پرو اپل iPhone 13 Pro 256GB NOT ACTIVE",
            "content": "اندازه نمایشگر:  6.1 اینچ, رزولوشن: 1170×2532, دوربین‌های اصلی: 12+12+12, دوربین سلفی: 12, پردازنده: A15, حافظه: 256 گیگابایت, رم: 6 گیگابایت",
            "image_url": "https://itech.ir/wp-content/uploads/2021/09/%D8%A2%DB%8C%D9%81%D9%88%D9%86-%DB%B13%D9%BE%D8%B1%D9%88-%D8%A7%D9%BE%D9%84-iPhone-13-Pro-128GB-570x570.jpg",
            "price": "49,500,000 تومان",
            "score": "4",
            "isFeatured": 0,
            "created_at": "2022-06-16T13:52:17.000000Z",
            "updated_at": "2022-06-23T13:52:17.000000Z"
        },
        {
            "id": 3,
            "title": "آیپد مینی iPad mini 8.3 inch 2021 ظرفیت 64 گیگابایت و 4 گیگابایت رم",
            "content": "مقدار رم : چهار گیگابایت, حافظه داخلی : 64 گیگابایت, بازه‌ی اندازه صفحه نمایش : بین 8 تا 10 اینچ, شبکه های ارتباطی :بدون سیم‌کارت, رابط‌ها :USB Type-C",
            "image_url": "https://itech.ir/wp-content/uploads/2022/04/%D8%A2%DB%8C%D9%BE%D8%AF-%D9%85%DB%8C%D9%86%DB%8C-iPad-mini-8.jpg",
            "price": "13,850,000 تومان",
            "score": "3",
            "isFeatured": 0,
            "created_at": "2022-06-22T13:53:54.000000Z",
            "updated_at": "2022-06-23T13:53:54.000000Z"
        },
        {
            "id": 4,
            "title": "هدفون بی سیم مدل Beats Fit Pro",
            "content": "نوع اتصال :بی‌سیم, قابلیت‌های مقاومتی : مقاومت در برابر رطوبت و عرق, نوع گوشی :دو گوشی",
            "image_url": "https://itech.ir/wp-content/uploads/2022/04/%D9%87%D8%AF%D9%81%D9%88%D9%86-%D8%A8%DB%8C-%D8%B3%DB%8C%D9%85-%D9%85%D8%AF%D9%842-Beats-Fit-Pro-.jpg",
            "price": "6,100,000 تومان",
            "score": "5",
            "isFeatured": 1,
            "created_at": "2022-06-26T13:55:11.000000Z",
            "updated_at": "2022-06-24T13:55:11.000000Z"
        }
    ]
}</code></pre>`,
        getById: `<pre><code class="language-javascript h-400">{
    "status": 200,
    "success": true,
    "product": {
        "id": 2,
        "title": "آیفون ۱3پرو اپل iPhone 13 Pro 256GB NOT ACTIVE",
        "content": "اندازه نمایشگر:  6.1 اینچ, رزولوشن: 1170×2532, دوربین‌های اصلی: 12+12+12, دوربین سلفی: 12, پردازنده: A15, حافظه: 256 گیگابایت, رم: 6 گیگابایت",
        "image_url": "https://itech.ir/wp-content/uploads/2021/09/%D8%A2%DB%8C%D9%81%D9%88%D9%86-%DB%B13%D9%BE%D8%B1%D9%88-%D8%A7%D9%BE%D9%84-iPhone-13-Pro-128GB-570x570.jpg",
        "price": "49,500,000 تومان",
        "score": "4",
        "isFeatured": 0,
        "created_at": "2022-06-16T13:52:17.000000Z",
        "updated_at": "2022-06-23T13:52:17.000000Z"
    }
}</code></pre>`,
        getFeatured: `<pre><code class="language-javascript h-400">{
    "status": 200,
    "success": true,
    "featured": [
        {
            "id": 1,
            "title": "مک بوک ایر 13 اینچی اپل MacBook Air MGN63 2020",
            "content": "ظرفیت حافظه رم: 8 گیگابایت, ظرفیت حافظه داخلی: 256 گیگابایت, سازنده پردازنده گرافیکی: Apple, اندازه صفحه نمایش: 13.3 اینچ, طبقه‌بندی: کاربری عمومی ، باریک و سبک, سری پردازنده: M1, نوع حافظه رم: Unified, دقت صفحه نمایش: QHD|2560×1600, صفحه نمایش مات: خیر, صفحه نمایش لمسی: خیر, سیستم عامل: Apple Mac OS, پورت HDMI: ندارد",
            "image_url": "https://itech.ir/wp-content/uploads/2021/01/%D9%84%D9%BE-%D8%AA%D8%A7%D9%BE-13-%D8%A7%DB%8C%D9%86%DA%86%DB%8C-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-MacBook-Air-MGN63-2020.jpg",
            "price": "30,650,000 تومان",
            "score": "5",
            "isFeatured": 1,
            "created_at": "2022-06-01T13:51:41.000000Z",
            "updated_at": "2022-06-02T13:52:04.000000Z"
        },
        {
            "id": 4,
            "title": "هدفون بی سیم مدل Beats Fit Pro",
            "content": "نوع اتصال :بی‌سیم, قابلیت‌های مقاومتی : مقاومت در برابر رطوبت و عرق, نوع گوشی :دو گوشی",
            "image_url": "https://itech.ir/wp-content/uploads/2022/04/%D9%87%D8%AF%D9%81%D9%88%D9%86-%D8%A8%DB%8C-%D8%B3%DB%8C%D9%85-%D9%85%D8%AF%D9%842-Beats-Fit-Pro-.jpg",
            "price": "6,100,000 تومان",
            "score": "5",
            "isFeatured": 1,
            "created_at": "2022-06-26T13:55:11.000000Z",
            "updated_at": "2022-06-24T13:55:11.000000Z"
        }
    ]
}</code></pre>`,
        delete: `<pre><code class="language-javascript h-400">{
    "status": 202,
    "success": true,
    "message": "Deleting Product Done"
}</code></pre>`,
        update: `<pre><code class="language-javascript h-400">{
    "status": 200,
    "success": true,
    "message": "Editing Product Done"
}</code></pre>`,
        post: `<pre><code class="language-javascript h-400">{
    "status": 201,
    "success": true,
    "message": "Adding Product Done"
}</code></pre>`,
    },
};

hljs.highlightAll();

$("button").click(function (e) {
    e.preventDefault();
    let type = $(this).attr('data-type');
    let status = $(this).attr("data-status");

    $(this).html(loading);
    setTimeout(() => {
        $(this).html("Try it");
        $(this).next().html(data[type][status]);
        
        document.querySelectorAll("pre code.h-400").forEach((el) => {
            hljs.highlightElement(el);
        });
    }, 700);
});

$('.documents').addClass('active');
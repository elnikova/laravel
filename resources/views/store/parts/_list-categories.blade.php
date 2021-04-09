<div>
    <div>
        <h4>Адресс магазина:</h4>
        <p>ул Седова, 36 р-н площади Профсоюзов<br>
        3-этажный универмаг, 4000 кв м.<br>
        Работает с 9:00 до 19:00 без перерывов и выходных.<br>
        Телефоны :(061)226-00-52 - администрация;<br>
        (061)226-00-32 отдел кухонь;</p>
    </div>
    <div>
        <h4>Адресс производства:</h4>
        <p>Ул. Хортицкое шоссе, 6а<br>
        Работает с 9:00 до 19:00 без перерывов и выходных.<br>
        Телефон: (061)707-47-94</p>
    </div>
</div>
<div class="list-group"> 
    @foreach ($shareCategories as $category)
        <a href="/category/{{$category->slug}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center
            {{ Request::is('category/'.$category->slug) ? 'category-active' : 'category' }} ">
            <h4>{{$category->name}}</h4>
        </a>
    @endforeach
</div>
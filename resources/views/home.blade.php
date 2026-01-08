<h1>
    welcome to the home page
</h1>
<p>
    Olá, {{ $name }}
</p>
<p>
    Seus habitos são:
</p>
<ul>
    @foreach($habits as $item)
        <li>
            {{ $item }}
        </li>
    @endforeach
</ul>

<p>teste</p>
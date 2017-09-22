<nav class="pagination">
    <a href="#" rel="first">&laquo;</a>
    <a href="#" rel="prev">&lsaquo;</a>
    <ul>
        @for($i = 1; $i <= $numPages; $i++)
            <li><a href="#">{{ $i }}</a></li>
        @endfor
    </ul>
    <a href="#" rel="next">&rsaquo;</a>
    <a href="#" rel="last">&raquo;</a>
</nav>

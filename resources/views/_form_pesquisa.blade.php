<form class="form-inline" method="post" action="pesquisar" >
    {!! csrf_field()!!}
    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name="nome" >
    <button class="btn btn-outline-success my-2 my-sm-2" type="submit" >Pesquisar</button>
</form>
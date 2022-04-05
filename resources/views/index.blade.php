@extends('layout')
@section('section')
    <h1> <span class="badge badge-secondary ">Escolha o Jogo</span></h1>
    <div class="tab">
        <table class="table table-striped" id="listagem">
            <tbody>
                
                @foreach ($jogo as $jogos)
               
                    <tr>
                        <td><img src='fotos/{{ $jogos->capa }}' class='mini' /></td>
                        <td><a href="{{route('detalhes',$jogos->cod)}}"> {{ $jogos->nome . '  ' }}</a>
                            @if (!empty($gene))
                                {{ '[' . $jogos->genero . ']' }} <br>
                            @else
                                {{ '[' . $jogos->genero->genero . ']' }} <br>
                            @endif

                            @if (!empty($produ) || !empty($gene))
                                <strong>{{ $jogos->produtora }}</strong>
                        </td>
                    @else
                        <strong>{{ $jogos->produtora->produtora }}</strong></td>
                @endif
                <td>
                    @if (session()->has('usuario') && session('usuario')->tipo == 'admin')
                    <span class="material-icons">add_circle</span>
                    <span class="material-icons">edit</span>
                    @endif
                    <span class="material-icons">shopping_cart</span>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

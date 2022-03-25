@extends('layout')
@section('section')
<h1 > <span class="badge badge-secondary " >Escolha o Jogo</span></h1>
<div class="tab">
    <table class="table table-striped" id="listagem">
        <tbody>            
            @foreach($jogo as $jogos )
            <tr>
                
                <td><img src='fotos/{{$jogos->capa}}' class = 'mini'/></td>
                <td>{{$jogos->nome ."  "}}
                    @if(!empty($gene))
                    {{"[".$jogos->genero."]"}} <br>
                    @else
                    {{"[".$jogos->genero->genero."]"}} <br>
                    @endif
                    
                    
                    @if(!empty($produ)||!empty($gene))
                      <strong>{{ $jogos->produtora}}</strong></td>
                      @else
                      <strong>{{$jogos->produtora->produtora}}</strong></td>
                    @endif
       
            </tr>
            @endforeach
            </tbody>
    </table>
</div>
@endsection
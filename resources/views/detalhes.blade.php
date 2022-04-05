@extends('layout')
@section('section')
    
    <div class="tab">
        <table class='detalhes'>
            
                @foreach ($jogo as $jogos)
                
                    <tr>
                        <td><img src='fotos/{{$jogos->capa}}' class='full'/></td>
                        
                        <td>

                            {{ $jogos->nome . '  ' }}
                            
                        </td>
                        <td>

                            {{$jogos->descricao}}
                        </td>    
                        </tr>
                  
                      
              
                @endforeach
          
        </table>
    </div>
@endsection

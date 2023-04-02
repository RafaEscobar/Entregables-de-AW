@foreach ($registros as $item)                    

@if (isset($item['name']))
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->matricula}}</td>
        <td>{{$item->gen}}</td>
        <td>{{$item->municipio->nombre}}</td>
    </tr>
@endif
@endforeach
<div class="table-responsive">
    <table class="table" id="farmCrops-table">

        @if(isset($result[0]))
            <thead>
            <tr>
                @foreach( $result[0] as  $header_key => $value )
                    <th>{{ $header_key }}</th>
                @endforeach
                <th colspan="3">İşlem</th>
            </tr>
            </thead>
            <tbody>

            @foreach(($result) as $row)
                <tr>
                    @foreach( $row as  $row_key => $row_value)
                        <td>{{ $row_value }}</td>
                    @endforeach

                    <td>
                        {!! Form::open(['route' => ['farmCrops.destroy', ($row->farm_id . '-' . $row->crop_id)], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Emin misiniz?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        @endif
        @if(!isset($result[0]))
            <thead>
            <tr>
                Sorgu sonucunda değer bulunamadı.
            </tr>
            </thead>
        @endif
    </table>
</div>

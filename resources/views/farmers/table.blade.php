<div class="table-responsive">
    <table class="table" id="farmers-table">
        <?php
            $Farmers_TR = [
                "id"	=> "TC Kimlik Numarası",
                "registration"	=> "Kayıt Tarihi",
                "name"	=> "İsim",
                "surname"	=> "Soyisim",
                "birthday"	=> "Doğum Tarihi",
                "phone"	=> "Telefon Numarası",
                "email"	=> "E-Posta",
                "address"	=> "Adres",
                "experience"	=> "Deneyim",
            ];
        ?>
        @if(isset($result[0]))
            <thead>
            <tr>
                @foreach( $result[0] as $header_key => $value )
                    <th>{{ $Farmers_TR[$header_key] }}</th>
                @endforeach
                <th colspan="3">İşlem</th>
            </tr>
            </thead>
            <tbody>

            @foreach($result as $row)
                <tr>
                    @foreach( $row as  $row_key => $row_value)
                        <td>{{ $row_value }}</td>
                    @endforeach
                    <td>
                        {!! Form::open(['route' => ['farmers.destroy', $row->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('farmers.show', [$row->id]) }}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('farmers.edit', [$row->id]) }}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
                    Sorgu Sonucunda Deger Bulunamadi (Boş Sonuç Dizgesi Döndü)
                </tr>
                </thead>
            @endif


    </table>
</div>

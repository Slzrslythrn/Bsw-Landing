<div class="p-3 pb-3" >
    <div class="me-5 ps-3 pe-5 pt-3 pb-3 d-flex flex-column">
        <a type="button" class="btn" disabled aria-label="Close" style="color: #FFFFFF;background-color:#3b7799;width:240px;border:1px;height:50px;text-align:start;border-radius:5px;;font-family:sans-serif;font-weight:bolder;color:#FFFFFF;align-content: center;margin-left:-30px">Kategori Urusan</a>
    @if ($statusCode == 200)
        @foreach ($data['data'] as $row)
            <a href="{{ route('menu.kategori', ['menu' => $row['nama_layanan']]) }}#section_2"
                class="nav-kat border-bottom" style="color: #818181;background-color:#f2f2f2;width:240px;border:1px;height:40px;text-align:start;align-content: center;padding: 20px;font-family:sans-serif;font-weight:bolder;font-size: 14px;margin-left:-30px">
                {{ $row['nama_layanan'] }}
            </a>
        @endforeach
    @endif
</div>
</div>
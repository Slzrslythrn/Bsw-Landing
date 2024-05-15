<div class="">
    <div class="me-5 ps-3 pe-5 pt-3 pb-3 d-flex flex-column">
        <div class="bg-header">
            <a type="button" class="btn btn-kat" disabled aria-label="Close">Kategori
                Urusan</a>
        </div>
        @if ($statusCode == 200)
            @foreach ($data['data'] as $row)
                <div class="bg-menu border-bottom">
                    <a href="{{ route('menu.kategori', ['menu' => $row['nama_layanan']]) }}#section_2" class="nav-kat ">
                        {{ $row['nama_layanan'] }}
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</div>

<style>
    .bg-header {
        background-color: #3b7799;
        width: 240px;
        height: 100%;
        border: 1px;
        padding: 10px;
    }

    .btn-kat {
        color: #FFFFFF;
        text-align: start;
        border-radius: 5px;
        font-family: sans-serif;
        font-weight: bolder;
        color: #FFFFFF;
        align-content: center;
    }

    .bg-menu {
        background-color: #f2f2f2;
        width: 240px;
        height: 100%;
        padding: 15px;
    }

    .nav-kat {
        color: #818181;
        font-family: sans-serif;
        font-weight: bolder;
        font-size: 14px;
    }
</style>

<div class="p-3 pb-3" style="background-color: #F39F55; border-radius: 20px">
    @if ($statusCode == 200)
        @foreach ($data['data'] as $row)
            <hr class="text-white">
            <a href="{{ route('menu.kategori', ['menu' => $row['nama_layanan']]) }}#section_2"
                class="nav-item text-center my-3"
                style=" color:white; font-weight: 800; text-decoration: none; width: 100%">
                {{ $row['nama_layanan'] }}
            </a>
        @endforeach
    @endif
</div>

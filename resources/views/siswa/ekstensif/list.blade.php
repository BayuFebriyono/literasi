@extends('siswa.main')

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.all.min.js"></script>
@endsection


@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Modul &nbsp;</span>Laporan Kunjungan</h4>

        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Durasi</th>
                        <th>ISBN</th>
                        <th>Judul Buku</th>
                        <th>Rangkuman</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($ekstensif as $e)
                        <tr>
                            <td>{{ Carbon\Carbon::parse($e->tanggal)->locale('id_ID')->isoFormat('DD MMMM YYYY') }}</td>
                            <td>{{ $e->durasi }} Menit</td>
                            <td>{{ $e->isbn }}</td>
                            <td>{{ $e->judul_buku }}</td>
                            <td>{{ $e->rangkuman }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

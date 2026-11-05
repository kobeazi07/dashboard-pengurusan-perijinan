@extends('layouts.index')

@section('konten')
    <div class="container">

        <h3 class="mb-4">
            Peta Kawasan
        </h3>

        <div class="row">

            @foreach ($kawasans as $kawasan)
                <div class="col-md-4 mb-4">

                    <div class="card h-100">

                        <img src="{{ asset('storage/' . $kawasan->gambar) }}" class="card-img-top"
                            style="
                            height: 220px;
                            object-fit: cover;
                        ">

                        <div class="card-body">

                            <h5>
                                {{ $kawasan->nama }}
                            </h5>

                            <p>
                                {{ $kawasan->bangunan_count }}
                                Bangunan
                            </p>

                            <a href="{{ route('kawasan.show', $kawasan->id) }}" class="btn btn-primary">
                                Lihat Peta
                            </a>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>

    </div>
@endsection

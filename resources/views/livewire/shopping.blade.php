<div>
    <div class="p-4">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        KERANJANG
                    </div>
                    <div class="card-body">
                        {{$jumlah}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        BELANJAAN SAYA
                    </div>
                    <div class="card-body">
                        @foreach ($datas as $row)
                            <p>
                                <i>{{ $row->nama_barang }}</i>
                                {{-- <button type="button" class="btn btn-primary">Primary</button> --}}
                                <button class="btn btn-danger" wire:click=destroy({{$row->id}})>Delete</button>
                            </p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        PRODUK
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="../gambar/H2R.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Ninja H2R</h5>
                                        <p class="card-text">motor idaman para pria</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp. 1.000.000.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary"
                                            wire:click="simpan('Ninja H2R','1000000000')">BELi</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="../gambar/zx25r.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">zx25r</h5>
                                        <p class="card-text">motor idaman para pria</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp. 800.000.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary"
                                            wire:click="simpan('zx25r','800000000')">BELi</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="../gambar/cbr250rr.jpeg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">cbr250rr</h5>
                                        <p class="card-text">motor idaman para pria</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp. 1.000.000.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary"
                                            wire:click="simpan('cbr250rr','1000000000')">BELi</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="../gambar/cbr250rr.jpeg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">cbr250rr</h5>
                                        <p class="card-text">motor idaman para pria</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp. 1.000.000.000</li>
                                    </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary"
                                            wire:click="simpan('cbr250rr','1000000000')">BELi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

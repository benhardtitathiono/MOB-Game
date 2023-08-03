<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="{{ asset('css/image.css') }}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container text-center position-absolute top-50 start-50 translate-middle">
    <div class="row row-cols-5">
        <img src="{{ asset('images/Number-01.png') }}" alt="" id="modalTrigger1"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/Number-02.png') }}" alt="" id="modalTrigger2"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/Number-03.png') }}" alt="" id="modalTrigger3"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/Number-04.png') }}" alt="" id="modalTrigger4"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/Number-05.png') }}" alt="" id="modalTrigger5"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/Number-06.png') }}" alt="" id="modalTrigger6"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/Number-07.png') }}" alt="" id="modalTrigger7"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/Number-08.png') }}" alt="" id="modalTrigger8"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/Number-09.png') }}" alt="" id="modalTrigger9"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/Number-10.png') }}" alt="" id="modalTrigger10"
            data-bs-target="#staticBackdrop" class="col">
    </div>
</div>


<div class="modal fade" id="staticBackdrop1-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 1-1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bumi bertuah negeri beradat (Melayu) Bumi Sang Raja Negeri Beradat adalah motto dari provinsi?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer1-1"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer1('#staticBackdrop1-1')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop1-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 1-2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Batik bono khas pelalawan berasal dari provinsi?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer1-2"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  onclick="handleModalAnswer1('#staticBackdrop1-2')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop1-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 1-3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bumi lancang kuning merupakan nama lain dari kota?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer1-3"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"  onclick="handleModalAnswer1('#staticBackdrop1-3')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop2-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 2-1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tenun corak insang merupakan tenunan tradisional berasal dari manakah?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer2-1"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer2('#staticBackdrop2-1')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop2-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 2-2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Kota terpadat ke-26 di Indonesia adalah?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer2-2"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer2('#staticBackdrop2-2')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop2-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 2-3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Kota yang memiliki julukan Kota Khatulistiwa merupakan kota apa?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer2-3"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer2('#staticBackdrop2-3')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop3-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 3-1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Rumah lamin merupakan rumah panggung dengan tinggi mencapai 3 meter, rumah adat ini berasal dari?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer3-1"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer3('#staticBackdrop3-1')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop3-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 3-2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Nasi bekepor merupakan makanan khas dari?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer3-2"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer3('#staticBackdrop3-2')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop3-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 3-3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Salah satu daerah dari provinsi ini merupakan Kerajaan Kutai pertama dan Kerajaan Bercorak Hindu Tertua,
                terletak di provinsi apakah daerah tersebut?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer3-3"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer3('#staticBackdrop3-3')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop4-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 4-1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sitou timou tumou tou yang berarti manusia hidup untuk memanusiakan manusia lain, merupakan semboyan
                dari provinsi?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer4-1"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer4('#staticBackdrop4-1')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop4-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 4-2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bumi Nyiur Melambai merupakan julukan dari provinsi apa?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer4-2"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer4('#staticBackdrop4-2')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop4-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 4-3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                O Ina Ni Keke merupakan lagu daerah?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer4-3"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer4('#staticBackdrop4-3')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop5-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 5-1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tarian suanggi berasal dari?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer5-1"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer5('#staticBackdrop5-1')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop5-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 5-2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Provinsi ini memiliki banyak suku, salah satunya adalah suku mairasi. berasal dari manakah suku
                tersebut?

            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer5-2"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer5('#staticBackdrop5-2')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop5-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 5-3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Kapak batu merupakan senjata tradisional yang berasal dari?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer5-3"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer5('#staticBackdrop5-3')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop6-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 6-1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Provinsi ini memiliki banyak makanan khas, salah satunya adalah pendap yang mirip seperti pepes ikan.
                Berasal darimanakah pendap?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer6-1"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer6('#staticBackdrop6-1')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop6-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 6-2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Provinsi ini memiliki rumah adat yang bernama bubungan lima. Berasal darimana?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer6-2"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer6('#staticBackdrop6-2')">Understood</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="staticBackdrop6-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 6-3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Suku Serawai berasal dari?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer6-3"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer6('#staticBackdrop6-3')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop7-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 7-1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Dugderan adalah tradisi perayaan menyambut bulan Ramadhan, tradisi tersebut dilakukan oleh masyarakat
                dari?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer7-1"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer7('#staticBackdrop7-1')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop7-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 7-2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Warak ngendok merupakan mainan khas dan menjadi ikon dari kota?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer7-2"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer7('#staticBackdrop7-2')"> Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop7-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 7-3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Jawi jangkep merupakan pakaian adat yang berasal dari suatu provinsi, dimanakah ibukota provinsi
                tersebut?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer7-3"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer7('#staticBackdrop7-3')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop8-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 8-1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Pulau Seribu Masjid merupakan julukan salah satu pulau, berasal dari provinsi apakah pulau tersebut?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer8-1"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer8('#staticBackdrop8-1')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop8-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 8-2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Ayam taliwang merupakan makanan khas dari?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer8-2"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer8('#staticBackdrop8-2')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop8-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 8-3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Suku Sasak berasal dari provinsi?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer8-3"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer8('#staticBackdrop8-3')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop9-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 9-1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Baileo merupakan rumah tradisional yang berasal dari salah satu provinsi, dimanakah ibukota provinsi
                tersebut?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer9-1"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer9('#staticBackdrop9-1')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop9-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 9-2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Arababu merupakan salah satu alat musik tradisional yang berbentuk seperti rebab dan berasal dari salah
                satu provinsi di Indonesia, dimanakah ibukota provinsi tersebut?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer9-2"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer9('#staticBackdrop9-2')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop9-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 9-3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Baju Cele merupakan pakaian adat yang biasanya dipakai dalam upacara adat yang berasal dari salah satu
                provinsi di Indonesia, dimanakah ibukota provinsi tersebut?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer9-3"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer9('#staticBackdrop9-3')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop10-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 10-1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Keladi tumbuk merupakan talas yang direbus lalu ditumbuk, hidangan khas manakah?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer10-1"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer10('#staticBackdrop10-1')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop10-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 10-2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Senjata tradisional dari provinsi ini adalah Pisau Belati, provinsi manakah itu?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer10-2"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer10('#staticBackdrop10-2')">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop10-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title 10-3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Suku Asmat merupakan suku yang berasal dari?
            </div>
            <div class="modal-footer">
                <input type="text" name="" class="form-control" id="txtAnswer10-3"
                    placeholder="Enter Your Answer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="handleModalAnswer10('#staticBackdrop10-3')">Understood</button>
            </div>
        </div>
    </div>
</div>



<script>
    function handleModalAnswer1(modalId) {
        var resultImage =$("#modalTrigger1");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["riau", "RIAU", "Riau"];
            if (expectedAnswers.includes(userInput)) {
                alert("Correct answer!");
                $(modalId).modal("hide");
            
                if (modalId === "#staticBackdrop1-1") {
                    $("#staticBackdrop1-2").modal("show");
                } else if (modalId === "#staticBackdrop1-2") {
                    $("#staticBackdrop1-3").modal("show");
                } else if (modalId === "#staticBackdrop1-3") {
                    resultImage.attr("src", "{{ asset('images/MOB_Game_Asset_01.jpg') }}")
                    resultImage.css("pointer-events", "none")
                }
            } else {
                alert("Incorrect answer. Please try again later.");
                resultImage.css("pointer-events", "none")
                $(modalId).modal("hide");
            }
    }

    function handleModalAnswer2(modalId) {
        var resultImage =$("#modalTrigger2");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["pontianak", "PONTIANAK", "Pontianak"];
            if (expectedAnswers.includes(userInput)) {
                alert("Correct answer!");
                $(modalId).modal("hide");
                
                if (modalId === "#staticBackdrop2-1") {
                    $("#staticBackdrop2-2").modal("show");
                } else if (modalId === "#staticBackdrop2-2") {
                    $("#staticBackdrop2-3").modal("show");
                } else if (modalId === "#staticBackdrop2-3") {
                    resultImage.attr("src", "{{ asset('images/MOB_Game_Asset_02.jpg') }}")
                    resultImage.css("pointer-events", "none")
                }
            } else {
                alert("Incorrect answer. Please try again.");
                resultImage.css("pointer-events", "none")
                $(modalId).modal("hide");
            }
    }

    function handleModalAnswer3(modalId) {
        var resultImage =$("#modalTrigger3");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["Kalimantan Timur", "KALIMANTAN TIMUR", "kalimantan timur"];
            if (expectedAnswers.includes(userInput)) {
                alert("Correct answer!");
                $(modalId).modal("hide");
                
                if (modalId === "#staticBackdrop3-1") {
                    $("#staticBackdrop3-2").modal("show");
                } else if (modalId === "#staticBackdrop3-2") {
                    $("#staticBackdrop3-3").modal("show");
                } else if (modalId === "#staticBackdrop3-3") {
                    resultImage.attr("src", "{{ asset('images/MOB_Game_Asset_03.jpg') }}")
                    resultImage.css("pointer-events", "none")
                }
            } else {
                alert("Incorrect answer. Please try again.");
                resultImage.css("pointer-events", "none")
                $(modalId).modal("hide");
            }
    }

    function handleModalAnswer4(modalId) {
        var resultImage =$("#modalTrigger4");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["sulawesi utara", "SULAWESI UTARA", "Sulawesi Utara"];
            if (expectedAnswers.includes(userInput)) {
                alert("Correct answer!");
                $(modalId).modal("hide");
                
                if (modalId === "#staticBackdrop4-1") {
                    $("#staticBackdrop4-2").modal("show");
                } else if (modalId === "#staticBackdrop4-2") {
                    $("#staticBackdrop4-3").modal("show");
                } else if (modalId === "#staticBackdrop4-3") {
                    resultImage.attr("src", "{{ asset('images/MOB_Game_Asset_04.jpg') }}")
                    resultImage.css("pointer-events", "none")
                }
            } else {
                alert("Incorrect answer. Please try again.");
                resultImage.css("pointer-events", "none")
                $(modalId).modal("hide");
            }
    }

    function handleModalAnswer5(modalId) {
        var resultImage =$("#modalTrigger5");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["papua barat", "PAPUA BARAT", "Papua Barat"];
            if (expectedAnswers.includes(userInput)) {
                alert("Correct answer!");
                $(modalId).modal("hide");
                
                if (modalId === "#staticBackdrop5-1") {
                    $("#staticBackdrop5-2").modal("show");
                } else if (modalId === "#staticBackdrop5-2") {
                    $("#staticBackdrop5-3").modal("show");
                } else if (modalId === "#staticBackdrop5-3") {
                    resultImage.attr("src", "{{ asset('images/MOB_Game_Asset_05.jpg') }}")
                    resultImage.css("pointer-events", "none")
                }
            } else {
                alert("Incorrect answer. Please try again.");
                resultImage.css("pointer-events", "none")
                $(modalId).modal("hide");
            }
    }

    function handleModalAnswer6(modalId) {
        var resultImage =$("#modalTrigger6");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["bengkulu", "BENGKULU", "Bengkulu"];
            if (expectedAnswers.includes(userInput)) {
                alert("Correct answer!");
                $(modalId).modal("hide");

                if (modalId === "#staticBackdrop6-1") {
                    $("#staticBackdrop6-2").modal("show");
                } else if (modalId === "#staticBackdrop6-2") {
                    $("#staticBackdrop6-3").modal("show");
                } else if (modalId === "#staticBackdrop6-3") {
                    resultImage.attr("src", "{{ asset('images/MOB_Game_Asset_06.jpg') }}")
                    resultImage.css("pointer-events", "none")
                }
            } else {
                alert("Incorrect answer. Please try again.");
                resultImage.css("pointer-events", "none")
                $(modalId).modal("hide");
            }
    }

    function handleModalAnswer7(modalId) {
        var resultImage =$("#modalTrigger7");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["semarang", "SEMARANG", "Semarang"];
            if (expectedAnswers.includes(userInput)) {
                alert("Correct answer!");
                $(modalId).modal("hide");
                
                if (modalId === "#staticBackdrop7-1") {
                    $("#staticBackdrop7-2").modal("show");
                } else if (modalId === "#staticBackdrop7-2") {
                    $("#staticBackdrop7-3").modal("show");
                } else if (modalId === "#staticBackdrop7-3") {
                    resultImage.attr("src", "{{ asset('images/MOB_Game_Asset_07.jpg') }}")
                    resultImage.css("pointer-events", "none")
                }
            } else {
                alert("Incorrect answer. Please try again.");
                resultImage.css("pointer-events", "none")
                $(modalId).modal("hide");
            }
    }

    function handleModalAnswer8(modalId) {
        var resultImage =$("#modalTrigger8");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["nusa tenggara barat", "NUSA TENGGARA BARAT", "Nusa Tenggara Barat"];
            if (expectedAnswers.includes(userInput)) {
                alert("Correct answer!");
                $(modalId).modal("hide");
                
                if (modalId === "#staticBackdrop8-1") {
                    $("#staticBackdrop8-2").modal("show");
                } else if (modalId === "#staticBackdrop8-2") {
                    $("#staticBackdrop8-3").modal("show");
                } else if (modalId === "#staticBackdrop8-3") {
                    resultImage.attr("src", "{{ asset('images/MOB_Game_Asset_08.jpg') }}")
                    resultImage.css("pointer-events", "none")
                }
            } else {
                alert("Incorrect answer. Please try again.");
                resultImage.css("pointer-events", "none")
                $(modalId).modal("hide");
            }
    }

    function handleModalAnswer9(modalId) {
        var resultImage =$("#modalTrigger9");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["ambon", "AMBON", "Ambon"];
            if (expectedAnswers.includes(userInput)) {
                alert("Correct answer!");
                $(modalId).modal("hide");
                
                if (modalId === "#staticBackdrop9-1") {
                    $("#staticBackdrop9-2").modal("show");
                } else if (modalId === "#staticBackdrop9-2") {
                    $("#staticBackdrop9-3").modal("show");
                } else if (modalId === "#staticBackdrop9-3") {
                    resultImage.attr("src", "{{ asset('images/MOB_Game_Asset_09.jpg') }}")
                    resultImage.css("pointer-events", "none")
                }
            } else {
                alert("Incorrect answer. Please try again.");
                resultImage.css("pointer-events", "none")
                $(modalId).modal("hide");
            }
    }

    function handleModalAnswer10(modalId) {
        var resultImage =$("#modalTrigger10");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["papua", "PAPUA", "Papua"];
            if (expectedAnswers.includes(userInput)) {
                alert("Correct answer!");
                $(modalId).modal("hide");
                
                if (modalId === "#staticBackdrop10-1") {
                    $("#staticBackdrop10-2").modal("show");
                } else if (modalId === "#staticBackdrop10-2") {
                    $("#staticBackdrop10-3").modal("show");
                } else if (modalId === "#staticBackdrop10-3") {
                    resultImage.attr("src", "{{ asset('images/MOB_Game_Asset_10.jpg') }}")
                    resultImage.css("pointer-events", "none")
                }
            } else {
                alert("Incorrect answer. Please try again.");
                resultImage.css("pointer-events", "none")
                $(modalId).modal("hide");
            }
    }

    $(document).ready(function() {
        $("#modalTrigger1").click(function() {
            $("#staticBackdrop1-1").modal("show");
        });

        $("#modalTrigger2").click(function() {
            $("#staticBackdrop2-1").modal("show");
        });

        $("#modalTrigger3").click(function() {
            $("#staticBackdrop3-1").modal("show");
        });

        $("#modalTrigger4").click(function() {
            $("#staticBackdrop4-1").modal("show");
        });

        $("#modalTrigger5").click(function() {
            $("#staticBackdrop5-1").modal("show");
        });

        $("#modalTrigger6").click(function() {
            $("#staticBackdrop6-1").modal("show");
        });

        $("#modalTrigger7").click(function() {
            $("#staticBackdrop7-1").modal("show");
        });

        $("#modalTrigger8").click(function() {
            $("#staticBackdrop8-1").modal("show");
        });

        $("#modalTrigger9").click(function() {
            $("#staticBackdrop9-1").modal("show");
        });

        $("#modalTrigger10").click(function() {
            $("#staticBackdrop10-1").modal("show");
        });
    });
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="{{ asset('css/image.css') }}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container text-center position-absolute top-50 start-50 translate-middle">
    <div class="row row-cols-5">
        <img src="{{ asset('images/MOB_Game_Asset_01.jpg') }}" alt="" id="modalTrigger1"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_02.jpg') }}" alt="" id="modalTrigger2"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_03.jpg') }}" alt="" id="modalTrigger3"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_04.jpg') }}" alt="" id="modalTrigger4"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_05.jpg') }}" alt="" id="modalTrigger5"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_06.jpg') }}" alt="" id="modalTrigger6"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_07.jpg') }}" alt="" id="modalTrigger7"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_08.jpg') }}" alt="" id="modalTrigger8"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_09.jpg') }}" alt="" id="modalTrigger9"
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_10.jpg') }}" alt="" id="modalTrigger10"
            data-bs-target="#staticBackdrop" class="col">
    </div>
</div>

<!-- Modal -->
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
                    onclick="handleModalAnswer('#staticBackdrop1-1')">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
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
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>



<script>
    function handleModalAnswer(modalId) {
        // Event listener for the "Understood" button click
        var userInput = $(modalId + " input").val().trim();
            // Get the input value
            expectedAnswers = ["riau", "RIAU", "Riau"];
            // Compare the input value with the expected answers
            if (expectedAnswers.includes(userInput)) {
                // Here, you can do something when the answer is correct, e.g., display a success message.
                alert("Correct answer!");
                // Close the current modal (optional)
                $(modalId).modal("hide");
                // Show the next modal (optional)
                // You can customize the flow here depending on your modal sequence
                // For example, if you want to show the next modal after this one:
                if (modalId === "#staticBackdrop1-1") {
                    $("#staticBackdrop1-2").modal("show");
                } else if (modalId === "#staticBackdrop1-2") {
                    $("#staticBackdrop1-3").modal("show");
                }
            } else {
                // Here, you can do something when the answer is incorrect, e.g., display an error message.
                alert("Incorrect answer. Please try again.");
            }
    }

    $(document).ready(function() {
        // When the modal trigger image is clicked
        $("#modalTrigger1").click(function() {
            // Show the modal
            $("#staticBackdrop1-1").modal("show");
        });

        $("#modalTrigger2").click(function() {
            // Show the modal
            $("#staticBackdrop2-1").modal("show");
        });

        $("#modalTrigger3").click(function() {
            // Show the modal
            $("#staticBackdrop3-1").modal("show");
        });

        $("#modalTrigger4").click(function() {
            // Show the modal
            $("#staticBackdrop4-1").modal("show");
        });

        $("#modalTrigger5").click(function() {
            // Show the modal
            $("#staticBackdrop5-1").modal("show");
        });

        $("#modalTrigger6").click(function() {
            // Show the modal
            $("#staticBackdrop6-1").modal("show");
        });

        $("#modalTrigger7").click(function() {
            // Show the modal
            $("#staticBackdrop7-1").modal("show");
        });

        $("#modalTrigger8").click(function() {
            // Show the modal
            $("#staticBackdrop8-1").modal("show");
        });

        $("#modalTrigger9").click(function() {
            // Show the modal
            $("#staticBackdrop9-1").modal("show");
        });

        $("#modalTrigger10").click(function() {
            // Show the modal
            $("#staticBackdrop10-1").modal("show");
        });
    });
</script>

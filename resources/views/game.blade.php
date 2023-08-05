<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="{{ asset('css/image.css') }}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container text-center position-absolute top-50 start-50 translate-middle">
    <div class="row row-cols-5">
        <img src="{{ asset('images/MOB_Game_Asset_01.jpg') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_02.jpg') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_03.jpg') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_04.jpg') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_05.jpg') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_06.jpg') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_07.jpg') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_08.jpg') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_09.jpg') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col">
        <img src="{{ asset('images/MOB_Game_Asset_10.jpg') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col">
    </div>
</div>

<div class="container text-center position-absolute top-50 start-50 translate-middle overlayer">
    <div class="row row-cols-5" style="color:white; font-size:170px">
        <div class="overlay" id="modalTrigger1">1</div>
        <div class="overlay" id="modalTrigger2">2</div>
        <div class="overlay" id="modalTrigger3">3</div>
        <div class="overlay" id="modalTrigger4">4</div>
        <div class="overlay" id="modalTrigger5">5</div>
        <div class="overlay" id="modalTrigger6">6</div>
        <div class="overlay" id="modalTrigger7">7</div>
        <div class="overlay" id="modalTrigger8">8</div>
        <div class="overlay" id="modalTrigger9">9</div>
        <div class="overlay" id="modalTrigger10">10</div>
    </div>
</div>

<div class="card text-center position-absolute top-50 start-50 translate-middle popup"
    style="background-color:#0d0d0d; color:white; padding:1.5rem; width:20rem; height:20rem" id="jawabanBenar">
    <div>
        <img src="{{ asset('images/jawabanBenar.png') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col" style="width:11rem;height:11rem;">
        <div style="font-size:18px; font-weight:bold;">Selamat! jawaban kamu benar</div>
    </div>
    <div class="card-footer" style="padding:1rem">
        <button style="color:white; background-color:#388eb8; width:10rem; border-radius:10px; font-weight:bold;"
            onclick="closeDiv('jawabanBenar')">Close</button>
    </div>
</div>

<div class="card text-center position-absolute top-50 start-50 translate-middle popup"
    style="background-color:#0d0d0d; color:white; padding:1.5rem; width:20rem; height:20rem" id="jawabanSalah">
    <div>
        <img src="{{ asset('images/jawabanSalah.png') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col" style="width:11rem;height:11rem;">
        <div style="font-size:18px; font-weight:bold;">Jawaban kamu masih salah, coba lagi</div>
    </div>
    <div class="card-footer" style="padding:1rem">
        <button style="color:white; background-color:#388eb8; width:10rem; border-radius:10px; font-weight:bold;"
            onclick="closeDiv('jawabanSalah')">Close</button>
    </div>
</div>

<div class="card text-center position-absolute top-50 start-50 translate-middle popup"
    style="background-color:#0d0d0d; color:white; padding:1.5rem; width:20rem; height:20rem" id="finish">
    <div>
        <img src="{{ asset('images/jawabanFinish.png') }}" alt="" id=""
            data-bs-target="#staticBackdrop" class="col" style="width:11rem;height:11rem;">
        <div style="font-size:18px; font-weight:bold;">Selamat! kamu berhasil</div>
    </div>
    <div class="card-footer" style="padding:1rem">
        <button style="color:white; background-color:#388eb8; width:10rem; border-radius:10px; font-weight:bold;"
            onclick="closeDiv('finish')">Close</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer1('#staticBackdrop1-2')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer1('#staticBackdrop1-3')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer2('#staticBackdrop2-1')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer2('#staticBackdrop2-2')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer2('#staticBackdrop2-3')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer3('#staticBackdrop3-1')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer3('#staticBackdrop3-2')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer3('#staticBackdrop3-3')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer4('#staticBackdrop4-1')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer4('#staticBackdrop4-2')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer4('#staticBackdrop4-3')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer5('#staticBackdrop5-1')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer5('#staticBackdrop5-2')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer5('#staticBackdrop5-3')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer6('#staticBackdrop6-1')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer6('#staticBackdrop6-2')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer6('#staticBackdrop6-3')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer7('#staticBackdrop7-1')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer7('#staticBackdrop7-2')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer7('#staticBackdrop7-3')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer8('#staticBackdrop8-1')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer8('#staticBackdrop8-2')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer8('#staticBackdrop8-3')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer9('#staticBackdrop9-1')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer9('#staticBackdrop9-2')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer9('#staticBackdrop9-3')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer10('#staticBackdrop10-1')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer10('#staticBackdrop10-2')">Understood</button>
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
                <button type="button" class="btn btn-primary"
                    onclick="handleModalAnswer10('#staticBackdrop10-3')">Understood</button>
            </div>
        </div>
    </div>
</div>

<script>
    function resetSessionValue() {
        localStorage.removeItem("attemptCounter");
        localStorage.removeItem("wrongAnswer");
    }
    window.addEventListener("beforeunload", resetSessionValue);

    function closeDiv(divId) {
        var div = document.getElementById(divId);
        div.classList.remove('show');
    }

    function handleModalAnswer1(modalId) {

        var resultImage = $("#modalTrigger1");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["riau", "RIAU", "Riau"];

        var attemptCounter = Number(localStorage.getItem("attemptCounter") || 0);
        var wrongAnswer = JSON.parse(localStorage.getItem("wrongAnswer") || "[]");

        if (expectedAnswers.includes(userInput)) {

            $(modalId).modal("hide");

            if (modalId === "#staticBackdrop1-1") {
                $("#staticBackdrop1-2").modal("show");
            } else if (modalId === "#staticBackdrop1-2") {
                $("#staticBackdrop1-3").modal("show");
            } else if (modalId === "#staticBackdrop1-3") {
                document.getElementById("modalTrigger1").classList.add('hidden');
                resultImage.css("pointer-events", "none");

                if (wrongAnswer.includes(1)) {
                    var indexToDelete = wrongAnswer.indexOf(1);
                    wrongAnswer.splice(indexToDelete, 1);
                    localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
                }
                attemptCounter += 1;
                localStorage.setItem("attemptCounter", attemptCounter);
                if(attemptCounter==10 && wrongAnswer.length==0){
                    document.getElementById("finish").classList.add('show');
                }
                else{
                    document.getElementById("jawabanBenar").classList.add('show');
                }
            }
        } else {
            $(modalId + " input").val('');
            resultImage.css("pointer-events", "none");
            $(modalId).modal("hide");

            attemptCounter += 1;
            localStorage.setItem("attemptCounter", attemptCounter);

            document.getElementById("jawabanSalah").classList.add('show');

            if (!wrongAnswer.includes(1)) {
                wrongAnswer.push(1);
                localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
            }
        }
        if (attemptCounter == 10) {
            localStorage.setItem("attemptCounter", 10 - wrongAnswer.length);
            for (var i = 0; i < wrongAnswer.length; i++) {
                $("#modalTrigger" + wrongAnswer[i]).css("pointer-events", "auto");
            }
        }
    }

    function handleModalAnswer2(modalId) {

        var resultImage = $("#modalTrigger2");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["pontianak", "PONTIANAK", "Pontianak"];

        var attemptCounter = Number(localStorage.getItem("attemptCounter") || 0);
        var wrongAnswer = JSON.parse(localStorage.getItem("wrongAnswer") || "[]");

        if (expectedAnswers.includes(userInput)) {

            $(modalId).modal("hide");

            if (modalId === "#staticBackdrop2-1") {
                $("#staticBackdrop2-2").modal("show");
            } else if (modalId === "#staticBackdrop2-2") {
                $("#staticBackdrop2-3").modal("show");
            } else if (modalId === "#staticBackdrop2-3") {
                document.getElementById("modalTrigger2").classList.add('hidden');
                resultImage.css("pointer-events", "none");

                if (wrongAnswer.includes(2)) {
                    var indexToDelete = wrongAnswer.indexOf(2);
                    wrongAnswer.splice(indexToDelete, 1);
                    localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
                }

                attemptCounter += 1;
                localStorage.setItem("attemptCounter", attemptCounter);
                if(attemptCounter==10 && wrongAnswer.length==0){
                    document.getElementById("finish").classList.add('show');
                }
                else{
                    document.getElementById("jawabanBenar").classList.add('show');
                }
            }
        } else {
            $(modalId + " input").val('');
            resultImage.css("pointer-events", "none");
            $(modalId).modal("hide");

            attemptCounter += 1;
            localStorage.setItem("attemptCounter", attemptCounter);

            document.getElementById("jawabanSalah").classList.add('show');

            if (!wrongAnswer.includes(2)) {
                wrongAnswer.push(2);
                localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
            }
        }
        if (attemptCounter == 10) {
            localStorage.setItem("attemptCounter", 10 - wrongAnswer.length);
            for (var i = 0; i < wrongAnswer.length; i++) {
                $("#modalTrigger" + wrongAnswer[i]).css("pointer-events", "auto");
            }
        }
    }

    function handleModalAnswer3(modalId) {

        var resultImage = $("#modalTrigger3");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["kalimantan timur", "Kalimantan Timur", "KALIMANTAN TIMUR", "Kalimantan timur"];

        var attemptCounter = Number(localStorage.getItem("attemptCounter") || 0);
        var wrongAnswer = JSON.parse(localStorage.getItem("wrongAnswer") || "[]");

        if (expectedAnswers.includes(userInput)) {

            $(modalId).modal("hide");

            if (modalId === "#staticBackdrop3-1") {
                $("#staticBackdrop3-2").modal("show");
            } else if (modalId === "#staticBackdrop3-2") {
                $("#staticBackdrop3-3").modal("show");
            } else if (modalId === "#staticBackdrop3-3") {
                document.getElementById("modalTrigger3").classList.add('hidden');
                resultImage.css("pointer-events", "none");

                if (wrongAnswer.includes(3)) {
                    var indexToDelete = wrongAnswer.indexOf(3);
                    wrongAnswer.splice(indexToDelete, 1);
                    localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));

                }
                attemptCounter += 1;
                localStorage.setItem("attemptCounter", attemptCounter);
                if(attemptCounter==10 && wrongAnswer.length==0){
                    document.getElementById("finish").classList.add('show');
                }
                else{
                    document.getElementById("jawabanBenar").classList.add('show');
                }
            }
        } else {
            $(modalId + " input").val('');
            resultImage.css("pointer-events", "none");
            $(modalId).modal("hide");

            attemptCounter += 1;
            localStorage.setItem("attemptCounter", attemptCounter);

            document.getElementById("jawabanSalah").classList.add('show');

            if (!wrongAnswer.includes(3)) {
                wrongAnswer.push(3);
                localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
            }
        }
        if (attemptCounter == 10) {
            localStorage.setItem("attemptCounter", 10 - wrongAnswer.length);
            for (var i = 0; i < wrongAnswer.length; i++) {
                $("#modalTrigger" + wrongAnswer[i]).css("pointer-events", "auto");
            }
        }
    }

    function handleModalAnswer4(modalId) {
        var resultImage = $("#modalTrigger4");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["sulawesi utara", "Sulawesi Utara", "SULAWESI UTARA", "Sulawesi utara"];

        var attemptCounter = Number(localStorage.getItem("attemptCounter") || 0);
        var wrongAnswer = JSON.parse(localStorage.getItem("wrongAnswer") || "[]");

        if (expectedAnswers.includes(userInput)) {

            $(modalId).modal("hide");

            if (modalId === "#staticBackdrop4-1") {
                $("#staticBackdrop4-2").modal("show");
            } else if (modalId === "#staticBackdrop4-2") {
                $("#staticBackdrop4-3").modal("show");
            } else if (modalId === "#staticBackdrop4-3") {
                document.getElementById("modalTrigger4").classList.add('hidden');
                resultImage.css("pointer-events", "none");

                if (wrongAnswer.includes(4)) {
                    var indexToDelete = wrongAnswer.indexOf(4);
                    wrongAnswer.splice(indexToDelete, 1);
                    localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
                }
                attemptCounter += 1;
                localStorage.setItem("attemptCounter", attemptCounter);
                if(attemptCounter==10 && wrongAnswer.length==0){
                    document.getElementById("finish").classList.add('show');
                }
                else{
                    document.getElementById("jawabanBenar").classList.add('show');
                }
            }
        } else {
            $(modalId + " input").val('');
            resultImage.css("pointer-events", "none");
            $(modalId).modal("hide");

            attemptCounter += 1;
            localStorage.setItem("attemptCounter", attemptCounter);

            document.getElementById("jawabanSalah").classList.add('show');

            if (!wrongAnswer.includes(4)) {
                wrongAnswer.push(4);
                localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
            }
        }
        if (attemptCounter == 10) {
            localStorage.setItem("attemptCounter", 10 - wrongAnswer.length);
            for (var i = 0; i < wrongAnswer.length; i++) {
                $("#modalTrigger" + wrongAnswer[i]).css("pointer-events", "auto");
            }
        }
    }

    function handleModalAnswer5(modalId) {
        var resultImage = $("#modalTrigger5");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["papua barat", "Papua Barat", "PAPUA BARAT", "Papua barat"];

        var attemptCounter = Number(localStorage.getItem("attemptCounter") || 0);
        var wrongAnswer = JSON.parse(localStorage.getItem("wrongAnswer") || "[]");

        if (expectedAnswers.includes(userInput)) {

            $(modalId).modal("hide");

            if (modalId === "#staticBackdrop5-1") {
                $("#staticBackdrop5-2").modal("show");
            } else if (modalId === "#staticBackdrop5-2") {
                $("#staticBackdrop5-3").modal("show");
            } else if (modalId === "#staticBackdrop5-3") {
                document.getElementById("modalTrigger5").classList.add('hidden');
                resultImage.css("pointer-events", "none");

                if (wrongAnswer.includes(5)) {
                    var indexToDelete = wrongAnswer.indexOf(5);
                    wrongAnswer.splice(indexToDelete, 1);
                    localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));

                }
                attemptCounter += 1;
                localStorage.setItem("attemptCounter", attemptCounter);
                if(attemptCounter==10 && wrongAnswer.length==0){
                    document.getElementById("finish").classList.add('show');
                }
                else{
                    document.getElementById("jawabanBenar").classList.add('show');
                }
            }
        } else {
            $(modalId + " input").val('');
            resultImage.css("pointer-events", "none");
            $(modalId).modal("hide");

            attemptCounter += 1;
            localStorage.setItem("attemptCounter", attemptCounter);

            document.getElementById("jawabanSalah").classList.add('show');

            if (!wrongAnswer.includes(5)) {
                wrongAnswer.push(5);
                localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
            }
        }
        if (attemptCounter == 10) {
            localStorage.setItem("attemptCounter", 10 - wrongAnswer.length);
            for (var i = 0; i < wrongAnswer.length; i++) {
                $("#modalTrigger" + wrongAnswer[i]).css("pointer-events", "auto");
            }
        }
    }

    function handleModalAnswer6(modalId) {

        var resultImage = $("#modalTrigger6");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["bengkulu", "Bengkulu", "BENGKULU"];

        var attemptCounter = Number(localStorage.getItem("attemptCounter") || 0);
        var wrongAnswer = JSON.parse(localStorage.getItem("wrongAnswer") || "[]");

        if (expectedAnswers.includes(userInput)) {

            $(modalId).modal("hide");

            if (modalId === "#staticBackdrop6-1") {
                $("#staticBackdrop6-2").modal("show");
            } else if (modalId === "#staticBackdrop6-2") {
                $("#staticBackdrop6-3").modal("show");
            } else if (modalId === "#staticBackdrop6-3") {
                document.getElementById("modalTrigger6").classList.add('hidden');
                resultImage.css("pointer-events", "none");

                if (wrongAnswer.includes(6)) {
                    var indexToDelete = wrongAnswer.indexOf(6);
                    wrongAnswer.splice(indexToDelete, 1);
                    localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
                }
                attemptCounter += 1;
                localStorage.setItem("attemptCounter", attemptCounter);
                if(attemptCounter==10 && wrongAnswer.length==0){
                    document.getElementById("finish").classList.add('show');
                }
                else{
                    document.getElementById("jawabanBenar").classList.add('show');
                }
            }
        } else {
            $(modalId + " input").val('');
            resultImage.css("pointer-events", "none");
            $(modalId).modal("hide");

            attemptCounter += 1;
            localStorage.setItem("attemptCounter", attemptCounter);

            document.getElementById("jawabanSalah").classList.add('show');

            if (!wrongAnswer.includes(6)) {
                wrongAnswer.push(6);
                localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
            }
        }
        if (attemptCounter == 10) {
            localStorage.setItem("attemptCounter", 10 - wrongAnswer.length);
            for (var i = 0; i < wrongAnswer.length; i++) {
                $("#modalTrigger" + wrongAnswer[i]).css("pointer-events", "auto");
            }
        }
    }

    function handleModalAnswer7(modalId) {

        var resultImage = $("#modalTrigger7");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["semarang", "Semarang", "SEMARANG"];

        var attemptCounter = Number(localStorage.getItem("attemptCounter") || 0);
        var wrongAnswer = JSON.parse(localStorage.getItem("wrongAnswer") || "[]");

        if (expectedAnswers.includes(userInput)) {

            $(modalId).modal("hide");

            if (modalId === "#staticBackdrop7-1") {
                $("#staticBackdrop7-2").modal("show");
            } else if (modalId === "#staticBackdrop7-2") {
                $("#staticBackdrop7-3").modal("show");
            } else if (modalId === "#staticBackdrop7-3") {
                document.getElementById("modalTrigger7").classList.add('hidden');
                resultImage.css("pointer-events", "none");

                if (wrongAnswer.includes(7)) {
                    var indexToDelete = wrongAnswer.indexOf(7);
                    wrongAnswer.splice(indexToDelete, 1);
                    localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
                }
                attemptCounter += 1;
                localStorage.setItem("attemptCounter", attemptCounter);
                  if(attemptCounter==10 && wrongAnswer.length==0){
                    document.getElementById("finish").classList.add('show');
                }
                else{
                    document.getElementById("jawabanBenar").classList.add('show');
                }
            }
        } else {
            $(modalId + " input").val('');
            resultImage.css("pointer-events", "none");
            $(modalId).modal("hide");

            attemptCounter += 1;
            localStorage.setItem("attemptCounter", attemptCounter);

            document.getElementById("jawabanSalah").classList.add('show');

            if (!wrongAnswer.includes(7)) {
                wrongAnswer.push(7);
                localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
            }
        }
        if (attemptCounter == 10) {
            localStorage.setItem("attemptCounter", 10 - wrongAnswer.length);
            for (var i = 0; i < wrongAnswer.length; i++) {
                $("#modalTrigger" + wrongAnswer[i]).css("pointer-events", "auto");
            }
        }
    }


    function handleModalAnswer8(modalId) {

        var resultImage = $("#modalTrigger8");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["NTB", "Nusa Tenggara Barat", "NUSA TENGGARA BARAT", "nusa tenggara barat"];

        var attemptCounter = Number(localStorage.getItem("attemptCounter") || 0);
        var wrongAnswer = JSON.parse(localStorage.getItem("wrongAnswer") || "[]");

        if (expectedAnswers.includes(userInput)) {

            $(modalId).modal("hide");

            if (modalId === "#staticBackdrop8-1") {
                $("#staticBackdrop8-2").modal("show");
            } else if (modalId === "#staticBackdrop8-2") {
                $("#staticBackdrop8-3").modal("show");
            } else if (modalId === "#staticBackdrop8-3") {
                document.getElementById("modalTrigger8").classList.add('hidden');
                resultImage.css("pointer-events", "none");

                if (wrongAnswer.includes(8)) {
                    var indexToDelete = wrongAnswer.indexOf(8);
                    wrongAnswer.splice(indexToDelete, 1);
                    localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
                }
                attemptCounter += 1;
                localStorage.setItem("attemptCounter", attemptCounter);
                if(attemptCounter==10 && wrongAnswer.length==0){
                    document.getElementById("finish").classList.add('show');
                }
                else{
                    document.getElementById("jawabanBenar").classList.add('show');
                }
            }
        } else {
            $(modalId + " input").val('');
            resultImage.css("pointer-events", "none");
            $(modalId).modal("hide");

            attemptCounter += 1;
            localStorage.setItem("attemptCounter", attemptCounter);

            document.getElementById("jawabanSalah").classList.add('show');

            if (!wrongAnswer.includes(8)) {
                wrongAnswer.push(8);
                localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
            }
        }
        if (attemptCounter == 10) {
            localStorage.setItem("attemptCounter", 10 - wrongAnswer.length);
            for (var i = 0; i < wrongAnswer.length; i++) {
                $("#modalTrigger" + wrongAnswer[i]).css("pointer-events", "auto");
            }
        }
    }

    function handleModalAnswer9(modalId) {

        var resultImage = $("#modalTrigger9");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["Ambon", "ambon", "AMBON"];

        var attemptCounter = Number(localStorage.getItem("attemptCounter") || 0);
        var wrongAnswer = JSON.parse(localStorage.getItem("wrongAnswer") || "[]");

        if (expectedAnswers.includes(userInput)) {

            $(modalId).modal("hide");

            if (modalId === "#staticBackdrop9-1") {
                $("#staticBackdrop9-2").modal("show");
            } else if (modalId === "#staticBackdrop9-2") {
                $("#staticBackdrop9-3").modal("show");
            } else if (modalId === "#staticBackdrop9-3") {
                document.getElementById("modalTrigger9").classList.add('hidden');
                resultImage.css("pointer-events", "none");

                if (wrongAnswer.includes(9)) {
                    var indexToDelete = wrongAnswer.indexOf(9);
                    wrongAnswer.splice(indexToDelete, 1);
                    localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
                }
                attemptCounter += 1;
                localStorage.setItem("attemptCounter", attemptCounter);
                if(attemptCounter==10 && wrongAnswer.length==0){
                    document.getElementById("finish").classList.add('show');
                }
                else{
                    document.getElementById("jawabanBenar").classList.add('show');
                }
            }
        } else {
            $(modalId + " input").val('');
            resultImage.css("pointer-events", "none");
            $(modalId).modal("hide");

            attemptCounter += 1;
            localStorage.setItem("attemptCounter", attemptCounter);

            document.getElementById("jawabanSalah").classList.add('show');

            if (!wrongAnswer.includes(9)) {
                wrongAnswer.push(9);
                localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
            }
        }
        if (attemptCounter == 10) {
            localStorage.setItem("attemptCounter", 10 - wrongAnswer.length);
            for (var i = 0; i < wrongAnswer.length; i++) {
                $("#modalTrigger" + wrongAnswer[i]).css("pointer-events", "auto");
            }
        }
    }

    function handleModalAnswer10(modalId) {

        var resultImage = $("#modalTrigger10");
        var userInput = $(modalId + " input").val().trim();
        expectedAnswers = ["papua", "Papua", "PAPUA"];

        var attemptCounter = Number(localStorage.getItem("attemptCounter") || 0);
        var wrongAnswer = JSON.parse(localStorage.getItem("wrongAnswer") || "[]");

        if (expectedAnswers.includes(userInput)) {
            $(modalId).modal("hide");
            if (modalId === "#staticBackdrop10-1") {
                $("#staticBackdrop10-2").modal("show");
            } else if (modalId === "#staticBackdrop10-2") {
                $("#staticBackdrop10-3").modal("show");
            } else if (modalId === "#staticBackdrop10-3") {
                document.getElementById("modalTrigger10").classList.add('hidden');
                resultImage.css("pointer-events", "none");

                if (wrongAnswer.includes(10)) {
                    var indexToDelete = wrongAnswer.indexOf(10);
                    wrongAnswer.splice(indexToDelete, 1);
                    localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
                }
                attemptCounter += 1;
                localStorage.setItem("attemptCounter", attemptCounter);
                if(attemptCounter==10 && wrongAnswer.length==0){
                    document.getElementById("finish").classList.add('show');
                }
                else{
                    document.getElementById("jawabanBenar").classList.add('show');
                }
            }
        } else {
            $(modalId + " input").val('');
            resultImage.css("pointer-events", "none");
            $(modalId).modal("hide");

            attemptCounter += 1;
            localStorage.setItem("attemptCounter", attemptCounter);

            document.getElementById("jawabanSalah").classList.add('show');

            if (!wrongAnswer.includes(10)) {
                wrongAnswer.push(10);
                localStorage.setItem("wrongAnswer", JSON.stringify(wrongAnswer));
            }
        }
        if (attemptCounter == 10) {
            localStorage.setItem("attemptCounter", 10 - wrongAnswer.length);
            for (var i = 0; i < wrongAnswer.length; i++) {
                $("#modalTrigger" + wrongAnswer[i]).css("pointer-events", "auto");
            }
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

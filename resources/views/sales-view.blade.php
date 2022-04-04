@extends('layout')
@section('page_title')
    Sales, welcome!
@endsection

@section('main_content')
    <main>
        <div class="container-fluid mt-5 px-5">
            <div class="row">
                <h3 class="w-100 text-center mb-5">
                    Добро пожаловать, сотрудник отдела продаж
                </h3>
                <div class="col-10">
                    <div class="row">
                        <div class="col-3">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-home-list"
                                    data-toggle="list" href="#list-home" role="tab" aria-controls="home">Все клиенты</a>
                                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                                    href="#list-settings" role="tab" aria-controls="settings">Без отзыва</a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                                    href="#list-profile" role="tab" aria-controls="profile">С отвеченным отзывом</a>
                                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                                    href="#list-messages" role="tab" aria-controls="messages">С неотвеченным отзыовом</a>

                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                    aria-labelledby="list-home-list">Все клиенты без сортировки
                                    <table class="table mt-5">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                    aria-labelledby="list-settings-list">Клиенты, на которых эксперт не дал отзыв
                                    <table class="table mt-5">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                    aria-labelledby="list-profile-list">Клиенты, на которых эксперт дал отзыв и получил
                                    ответ
                                    <table class="table mt-5">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                    aria-labelledby="list-messages-list">Клиенты, на которых эксперт дал отзыв и ждёт ответа
                                    <table class="table mt-5">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>

                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary py-3 px-3" data-toggle="modal" data-target="#exampleModalCenter">
                            Yeni müştəri əlavə etmək
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                {{-- start Modal body --}}
                                <div class="container">
                                    <div class="row">
                                        <h2 class="text-center  text-dark w-100 my-4">
                                            Yeni müştəri əlavə etmək
                                        </h2>
                                        <hr>
                                        <div class="col-md-12">
                                            <form action="{{ route('contact-submit')}}" method="POST">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" id="name" name="name"placeholder="Ad və soyad">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                       <input type="text" class="form-control" id="phone" name="phone" placeholder="Əlaqə nömrəsi">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" id="country" name="country" placeholder="Hansı ölkədə təhsil almaq istəyir">
                                                    </div>
                                                    <div class="form-group col-mdtext-12 d-flex flex-start">
                                                        <label for="graduate" >Oxuduğu və ya bitirdiyi ali məktəb</label>
                                                        <select id="graduate" name="graduate" class="form-control">
                                                            <option value="shchool_20">20</option>
                                                            <option value="shchool_23">23</option>
                                                            <option value="shchool_26">26</option>
                                                            <option value="shchool_176">176</option>
                                                            <option value="shchool_189">189</option>
                                                            <option value="220">220</option>
                                                            <option value="shchool_248">248</option>
                                                            <option value="shchool_264">264</option>
                                                            <option value="durkham">Durham uni</option>
                                                            <option value="abc">ABC British College</option>
                                                            <option value="ada">ADA</option>
                                                            <option value="adnsu">ADNSU</option>
                                                            <option value="adu">ADU</option>
                                                            <option value="adu_second">ADU (?)</option>
                                                            <option value="akdeniz">Akdeniz</option>
                                                            <option value="apu">APU</option>
                                                            <option value="aqrar">Aqrar</option>
                                                            <option value="architecture">Architecture University</option>
                                                            <option value="atibbu">AtibbU</option>
                                                            <option value="atilim">Atilim Uni</option>
                                                            <option value="atu">ATU</option>
                                                            <option value="azi">AZİ</option>
                                                            <option value="aztu">AZTU</option>
                                                            <option value="baki_modern_tk">Baki Modern Təhsil Kompleksi</option>
                                                            <option value="european_lyceum">Baku European Lyceum</option>
                                                            <option value="baku_frenchschool">Baku French School</option>
                                                            <option value="turkish_lyceum">Baku Turkish Lyceum</option>
                                                            <option value="banm">BANM</option>
                                                            <option value="bayreuth">Bayreuth uni</option>
                                                            <option value="bbu">BBU</option>
                                                            <option value="bdu">BDU</option>
                                                            <option value="belarus_fhn">Belarus FHN</option>
                                                            <option value="bmu">BMU</option>
                                                            <option value="british_school">British school Baku</option>
                                                            <option value="bsu">BSU</option>
                                                            <option value="dia">DIA</option>
                                                            <option value="diller">Dillər unisi</option>
                                                            <option value="eur_az_school">European Azerbaijan School</option>
                                                            <option value="idman">İdman</option>
                                                            <option value="iqtisad">İqtisad Uni</option>
                                                            <option value="kimya_biologiya">Kimya Biologiya təmayüllü</option>
                                                            <option value="respublika_liseyi">Respublika liseyi</option>
                                                            <option value="kollec">Kollec təhsili</option>
                                                            <option value="kooperasiya">Kooperasiya</option>
                                                            <option value="memarliq">Memarliq Inshaat</option>
                                                            <option value="tu_graz">TU Graz</option>
                                                            <option value="mingachevir">Mingecevir Uni</option>
                                                            <option value="moskva_academy">Moskva Akademiyası/option>
                                                            <option value="music_academy">Musiqi akademiyası</option>
                                                            <option value="aviation">National Aviation Academy</option>
                                                            <option value="naxchivan">Naxçıvan Uni</option>
                                                            <option value="odlar_yurdu">Odlar Yurdu</option>
                                                            <option value="qerb_mektebi">Qərb məktəbi</option>
                                                            <option value="ressamliq">Rəssamlıq Uni</option>
                                                            <option value="sechenov">Seçenov Adına Tibb Universiteti</option>
                                                            <option value="sosiologiya">Sosiologiya</option>
                                                            <option value="shushka_humanitar_kollege">Şuşa Humanitar Kolleci</option>
                                                            <option value="technical_uni">Technical University</option>
                                                            <option value="tu_clausthat">TU Clausthat</option>
                                                            <option value="turizm">Turizm</option>
                                                            <option value="ufaz">UFAZ</option>
                                                            <option value="unec">UNEC</option>
                                                            <option value="art_uni">University of Art</option>
                                                            <option value="birmingham_uni">University of Birmingham</option>
                                                            <option value="khazar">Xazar</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" id="speciality" placeholder="Oxuduğu və ya bitirdiyi ixtisas">
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex">
                                                        <label for="degree">Oxuduğu və ya bitirdiyi səviyyəsi</label>
                                                        <select id="degree" name="degree" class="form-control">
                                                            <option value="master1">Magistr 1</option>
                                                            <option value="master2">Magistr 2</option>
                                                            <option value="master_graduated">Master məzun</option>
                                                            <option value="bachelor1">Bachelor 1</option>
                                                            <option value="bachelor2">Bachelor 2</option>
                                                            <option value="bachelor3">Bachelor 3</option>
                                                            <option value="bachelor4">Bachelor 4</option>
                                                            <option value="bachelor_graduated">Bachelor məzun</option>
                                                            <option value="attestat9">Attestat 9</option>
                                                            <option value="attestat11">Attestat 11</option>
                                                            <option value="class11">11ci sinif</option>
                                                            <option value="class10">10cu sinif</option>
                                                            <option value="class9">9cu sinif</option>
                                                            <option value="class8">8ci sinif</option>
                                                            <option value="class7">7ci sinif</option>
                                                            <option value="class6">6cı sinif</option>
                                                            <option value="class5">5 və aşağı</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex">
                                                        <label for="graduate_year" class="mr-5 col-md-4">Məzuniyyət ili</label>
                                                        <select id="graduate_year" name="graduate_year" class="form-control">
                                                            <option value="y_2000-2014">2000-2014</option>
                                                            <option value="y_2014">2014</option>
                                                            <option value="y_2015">2015</option>
                                                            <option value="y_2016">2016</option>
                                                            <option value="y_2017">2017</option>
                                                            <option value="y_2018">2018</option>
                                                            <option value="y_2019">2019</option>
                                                            <option value="y_2020">2020</option>
                                                            <option value="y_2021">2021</option>
                                                            <option value="y_2022">2022</option>
                                                            <option value="y_2023">2023</option>
                                                            <option value="y_2024">2024</option>
                                                            <option value="y_2025">2025</option>
                                                            <option value="y_2026">2026</option>
                                                            <option value="y_2027">2027</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex">
                                                        <label for="gpa" class="mr-5 col-md-4">GPA%</label>
                                                        <select id="gpa" name="gpa"class="form-control">
                                                            <option value="less_50"><50%</option>
                                                            <option value="59">50-59%</option>
                                                            <option value="69">60-69%</option>
                                                            <option value="74">70-74%</option>
                                                            <option value="79">75-79%</option>
                                                            <option value="84">80-84%</option>
                                                            <option value="89">85-89%</option>
                                                            <option value="94">90-94%</option>
                                                            <option value="100">95-100%</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex">
                                                        <label for="english_level" class="col-md-4 mr-5">Ingilis dili biliyi</label>
                                                        <select id="english_level" name="english_level" class="form-control">
                                                            <option value="a1">A1</option>
                                                            <option value="a1">A2</option>
                                                            <option value="b1">B1</option>
                                                            <option value="b2">B2</option>
                                                            <option value="c1">C1</option>
                                                            <option value="c2">C2</option>
                                                            <option value="0">-0</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex">
                                                        <label for="degree" class="col-md-4 mr-5">Alman dili biliyi</label>
                                                        <select id="deutshche_level" name="deutshche_level" class="form-control">
                                                            <option value="deutshce_a1">A1</option>
                                                            <option value="deutshce_a1">A2</option>
                                                            <option value="deutshce_b1">B1</option>
                                                            <option value="deutshce_b2">B2</option>
                                                            <option value="deutshce_c1">C1</option>
                                                            <option value="deutshce_c2">C2</option>
                                                            <option value="deutshce_0">-0</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağlamaq</button>
                                                    <button type="button" class="btn btn-primary">Əlavə etmək</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            
                                </div>
                                {{-- end modal body --}}
                                </div>

                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main>
@endsection

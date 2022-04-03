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
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Ad və soyad">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                       <input type="password" class="form-control" id="inputPassword4" placeholder="Əlaqə nömrəsi">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Email">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" id="inputCity" placeholder="Hansı ölkədə təhsil almaq istəyir">
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex flex-start">
                                                        <label for="inputState">Oxuduğu və ya bitirdiyi ali məktəb</label>
                                                        <select id="inputState" class="form-control">
                                                            <option value="expert">20</option>
                                                            <option value="sales">23</option>
                                                            <option value="admin">26</option>
                                                            <option value="expert">176</option>
                                                            <option value="sales">189</option>
                                                            <option value="admin">248</option>
                                                            <option value="expert">264</option>
                                                            <option value="sales">Durham uni</option>
                                                            <option value="admin">ABC British College</option>
                                                            <option value="expert">ADA</option>
                                                            <option value="sales">ADNSU</option>
                                                            <option value="admin">ADU</option>
                                                            <option value="expert">ADU (?)</option>
                                                            <option value="sales">Akdeniz</option>
                                                            <option value="admin">APU</option>
                                                            <option value="expert">Aqrar</option>
                                                            <option value="sales">Architecture University</option>
                                                            <option value="admin">AtibbU</option>
                                                            <option value="expert">Atilim Uni</option>
                                                            <option value="sales">ATU</option>
                                                            <option value="admin">AZİ</option>
                                                            <option value="expert">AZTU</option>
                                                            <option value="sales">Baki Modern Təhsil Kompleksi</option>
                                                            <option value="admin">Baku European Lyceum</option>
                                                            <option value="expert">Baku French School</option>
                                                            <option value="sales">Baku Turkish Lyceum</option>
                                                            <option value="admin">BANM</option>
                                                            <option value="expert">Bayreuth uni</option>
                                                            <option value="sales">BBU</option>
                                                            <option value="admin">BDU</option>
                                                            <option value="expert">Belarus FHN</option>
                                                            <option value="sales">BMU</option>
                                                            <option value="admin">British school Baku</option>
                                                            <option value="expert">BSU</option>
                                                            <option value="sales">DIA</option>
                                                            <option value="admin">Dillər unisi</option>
                                                            <option value="expert">European Azerbaijan School</option>
                                                            <option value="sales">İdman</option>
                                                            <option value="admin">İqtisad Uni</option>
                                                            <option value="expert">Kimya Biologiya təmayüllü</option>
                                                            <option value="sales">Respublika liseyi</option>
                                                            <option value="admin">Kollec təhsili</option>
                                                            <option value="expert">Kooperasiya</option>
                                                            <option value="sales">220</option>
                                                            <option value="admin">Memarliq Inshaat</option>
                                                            <option value="sales">TU Graz</option>
                                                            <option value="admin">Mingecevir Uni</option>
                                                            <option value="expert">Moskva Akademiyası/option>
                                                            <option value="sales">Musiqi akademiyası</option>
                                                            <option value="admin">National Aviation Academy</option>
                                                            <option value="expert">Naxçıvan Uni</option>
                                                            <option value="sales">Odlar Yurdu</option>
                                                            <option value="admin">Qərb məktəbi</option>
                                                            <option value="expert">Rəssamlıq Uni</option>
                                                            <option value="sales">Seçenov Adına Tibb Universiteti</option>
                                                            <option value="admin">Sosiologiya</option>
                                                            <option value="expert">Şuşa Humanitar Kolleci</option>
                                                            <option value="sales">Technical University</option>
                                                            <option value="admin">TU Clausthat</option>
                                                            <option value="expert">Turizm</option>
                                                            <option value="sales">UFAZ</option>
                                                            <option value="admin">UNEC</option>
                                                            <option value="sales">University of Art</option>
                                                            <option value="admin">University of Birmingham</option>
                                                            <option value="expert">Xazar</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control" id="inputZip" placeholder="Oxuduğu və ya bitirdiyi ixtisas">
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex">
                                                        <label for="degree">Oxuduğu və ya bitirdiyi səviyyəsi</label>
                                                        <select id="" class="form-control">
                                                            <option value="">Magistr 1</option>
                                                            <option value="">Magistr 2</option>
                                                            <option value="">Master məzun</option>
                                                            <option value="">Bachelor 1</option>
                                                            <option value="">Bachelor 2</option>
                                                            <option value="">Bachelor 3</option>
                                                            <option value="">Bachelor 4</option>
                                                            <option value="">Bachelor məzun</option>
                                                            <option value="">Attestat 9</option>
                                                            <option value="">Attestat 11</option>
                                                            <option value="">11ci sinif</option>
                                                            <option value="">10cu sinif</option>
                                                            <option value="">9cu sinif</option>
                                                            <option value="">8ci sinif</option>
                                                            <option value="">7ci sinif</option>
                                                            <option value="">6cı sinif</option>
                                                            <option value="">5 və aşağı</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex">
                                                        <label for="degree" class="mr-5 col-md-4">Məzuniyyət ili</label>
                                                        <select id="" class="form-control">
                                                            <option value="">2000-2014</option>
                                                            <option value="">2014</option>
                                                            <option value="">2015</option>
                                                            <option value="">2016</option>
                                                            <option value="">2017</option>
                                                            <option value="">2018</option>
                                                            <option value="">2019</option>
                                                            <option value="">2020</option>
                                                            <option value="">2021</option>
                                                            <option value="">2022</option>
                                                            <option value="">2023</option>
                                                            <option value="">2024</option>
                                                            <option value="">2025</option>
                                                            <option value="">2026</option>
                                                            <option value="">2027</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex">
                                                        <label for="degree" class="mr-5 col-md-4">GPA%</label>
                                                        <select id="" class="form-control">
                                                            <option value=""><50%</option>
                                                            <option value="">50-59%</option>
                                                            <option value="">60-69%</option>
                                                            <option value="">70-74%</option>
                                                            <option value="">75-79%</option>
                                                            <option value="">80-84%</option>
                                                            <option value="">85-89%</option>
                                                            <option value="">90-94%</option>
                                                            <option value="">95-100%</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex">
                                                        <label for="degree" class="col-md-4 mr-5">Ingilis dili biliyi</label>
                                                        <select id="" class="form-control">
                                                            <option value="">A1</option>
                                                            <option value="">A2</option>
                                                            <option value="">B1</option>
                                                            <option value="">B2</option>
                                                            <option value="">C1</option>
                                                            <option value="">C2</option>
                                                            <option value="">-0</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12 d-flex">
                                                        <label for="degree" class="col-md-4 mr-5">Alman dili biliyi</label>
                                                        <select id="" class="form-control">
                                                            <option value="">A1</option>
                                                            <option value="">A2</option>
                                                            <option value="">B1</option>
                                                            <option value="">B2</option>
                                                            <option value="">C1</option>
                                                            <option value="">C2</option>
                                                            <option value="">-0</option>
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

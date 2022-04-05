@extends('layout')


@section('title')
Sales update
@endsection
@section('main_content')
    <div class="container text-center">
        <h2 class="my-5">Redaktə etmək</h2>
        <form action="{{ route('sales-update-submit', $data->id)}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" id="name" name="name"placeholder="Ad və soyad" value="{{$data->name}}">
                </div>
                <div class="form-group col-md-12">
                   <input type="text" class="form-control" id="phone" name="phone" placeholder="Əlaqə nömrəsi" value="{{$data->phone}}" >
                </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$data->email}}">
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" id="country" name="country" value="{{$data->country}}" placeholder="Hansı ölkədə təhsil almaq istəyir">
                </div>
                <div class="form-group col-md-12 d-flex flex-start">
                    <label for="school">Oxuduğu və ya bitirdiyi ali məktəb</label>
                    <select id="school" name="school" class="form-control">
                        <option value="20">20</option>
                        <option value="20">23</option>
                        <option value="26">26</option>
                        <option value="176">176</option>
                        <option value="189">189</option>
                        <option value="220">220</option>
                        <option value="248">248</option>
                        <option value="264">264</option>
                        <option value="Durham uni">Durham uni</option>
                        <option value="ABC British College">ABC British College</option>
                        <option value="ADA">ADA</option>
                        <option value="ADNSU">ADNSU</option>
                        <option value="ADU">ADU</option>
                        <option value="ADU (?)">ADU (?)</option>
                        <option value="Akdeniz">Akdeniz</option>
                        <option value="APU">APU</option>
                        <option value="Aqrar">Aqrar</option>
                        <option value="Architecture University">Architecture University</option>
                        <option value="AtibbU">AtibbU</option>
                        <option value="Atilim Uni">Atilim Uni</option>
                        <option value="ATU">ATU</option>
                        <option value="AZİ">AZİ</option>
                        <option value="AZTU">AZTU</option>
                        <option value="Baki Modern Təhsil Kompleksi">Baki Modern Təhsil Kompleksi</option>
                        <option value="Baku European Lyceum">Baku European Lyceum</option>
                        <option value="Baku French School">Baku French School</option>
                        <option value="Baku Turkish Lyceum">Baku Turkish Lyceum</option>
                        <option value="BANM">BANM</option>
                        <option value="Bayreuth uni">Bayreuth uni</option>
                        <option value="BBU">BBU</option>
                        <option value="BDU">BDU</option>
                        <option value="Belarus FHN">Belarus FHN</option>
                        <option value="BMU">BMU</option>
                        <option value="British school Baku">British school Baku</option>
                        <option value="BSU">BSU</option>
                        <option value="DIA">DIA</option>
                        <option value="Dillər unisi">Dillər unisi</option>
                        <option value="European Azerbaijan School">European Azerbaijan School</option>
                        <option value="İdman">İdman</option>
                        <option value="İqtisad Uni">İqtisad Uni</option>
                        <option value="Kimya Biologiya təmayüllü">Kimya Biologiya təmayüllü</option>
                        <option value="Respublika liseyi">Respublika liseyi</option>
                        <option value="Kollec təhsili">Kollec təhsili</option>
                        <option value="Kooperasiya">Kooperasiya</option>
                        <option value="Memarliq Inshaat">Memarliq Inshaat</option>
                        <option value="TU Graz">TU Graz</option>
                        <option value="Mingecevir Uni">Mingecevir Uni</option>
                        <option value="Moskva Akademiyası">Moskva Akademiyası</option>
                        <option value="Musiqi akademiyası">Musiqi akademiyası</option>
                        <option value="National Aviation Academy">National Aviation Academy</option>
                        <option value="Naxçıvan Uni">Naxçıvan Uni</option>
                        <option value="Odlar Yurdu">Odlar Yurdu</option>
                        <option value="Qərb məktəbi">Qərb məktəbi</option>
                        <option value="Rəssamlıq Uni">Rəssamlıq Uni</option>
                        <option value="Seçenov Adına Tibb Universiteti">Seçenov Adına Tibb Universiteti</option>
                        <option value="Sosiologiya">Sosiologiya</option>
                        <option value="Şuşa Humanitar Kolleci">Şuşa Humanitar Kolleci</option>
                        <option value="Technical University">Technical University</option>
                        <option value="TU Clausthat">TU Clausthat</option>
                        <option value="Turizm">Turizm</option>
                        <option value="UFAZ">UFAZ</option>
                        <option value="UNEC">UNEC</option>
                        <option value="University of Art">University of Art</option>
                        <option value="University of Birmingham">University of Birmingham</option>
                        <option value="Xazar">Xazar</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="speciality" id="speciality" placeholder="Oxuduğu və ya bitirdiyi ixtisas" value="{{ $data->speciality }}">
                </div>
                <div class="form-group col-md-12 d-flex">
                    <label for="degree">Oxuduğu və ya bitirdiyi səviyyəsi</label>
                    <select id="degree" name="degree" class="form-control">
                        <option value="Magistr 1">Magistr 1</option>
                        <option value="Magistr 2">Magistr 2</option>
                        <option value="Master məzun">Master məzun</option>
                        <option value="Bachelor 1">Bachelor 1</option>
                        <option value="Bachelor 2">Bachelor 2</option>
                        <option value="Bachelor 3">Bachelor 3</option>
                        <option value="Bachelor 4">Bachelor 4</option>
                        <option value="Bachelor məzun">Bachelor məzun</option>
                        <option value="Attestat 9">Attestat 9</option>
                        <option value="Attestat 11">Attestat 11</option>
                        <option value="11ci sinif">11ci sinif</option>
                        <option value="10cu sinif">10cu sinif</option>
                        <option value="9cu sinif">9cu sinif</option>
                        <option value="8ci sinif">8ci sinif</option>
                        <option value="7ci sinif">7ci sinif</option>
                        <option value="6cı sinif">6cı sinif</option>
                        <option value="5 və aşağı">5 və aşağı</option>
                    </select>
                </div>
                <div class="form-group col-md-12 d-flex">
                    <label for="graduate_year" class="mr-5 col-md-4">Məzuniyyət ili</label>
                    <select id="graduate_year" name="graduate_year" class="form-control">
                        <option value="2000-2014">2000-2014</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                    </select>
                </div>
                <div class="form-group col-md-12 d-flex">
                    <label for="gpa" class="mr-5 col-md-4">GPA%</label>
                    <select id="gpa" name="gpa"class="form-control">
                        <option value="<50%"><50%</option>
                        <option value="50-59%">50-59%</option>
                        <option value="60-69%">60-69%</option>
                        <option value="70-74%">70-74%</option>
                        <option value="75-79%">75-79%</option>
                        <option value="80-84%">80-84%</option>
                        <option value="85-89%">85-89%</option>
                        <option value="90-94%">90-94%</option>
                        <option value="95-100%">95-100%</option>
                    </select>
                </div>
                <div class="form-group col-md-12 d-flex">
                    <label for="english_level" class="col-md-4 mr-5">Ingilis dili biliyi</label>
                    <select id="english_level" name="english_level" class="form-control">
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="C1">C1</option>
                        <option value="C2">C2</option>
                        <option value="0">-0</option>
                    </select>
                </div>
                <div class="form-group col-md-12 d-flex">
                    <label for="degree" class="col-md-4 mr-5">Alman dili biliyi</label>
                    <select id="deutshche_level" name="deutshche_level" class="form-control">
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="C1">C1</option>
                        <option value="C2">C2</option>
                        <option value="0">-0</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağlamaq</button>
                <button type="submit" class="btn btn-success">Əlavə etmək</button>
            </div>
        </form>
    </div>

@endsection
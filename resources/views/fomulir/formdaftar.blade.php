@extends('layout.menu')
@section('title','form pendaftaran online Asrama Kalbar Bandung')
@section('content')

<footer class="footer-area relative sky-bg" id="register">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Register</h2>
                                Input Registrasi Peserta Calon Penguni
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/location-arrow.png" alt="">
                                </div>
                                <p><strong>Alamat: </strong>Jl. Gegerkalong Hilir Jl. Picung No. 107 Kota Bandung, Jawab Barat <br />Indonesia</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:8801812726495">082-214-667-037</a> <br />
                                    <a href="callto:8801687420471">082-214-667-037</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">asro.kalbar.bandung@gmail.com</a> <br />
                                    <a href="mailto:youremail@example.com">heronselianus1795@gmail.com</a>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <form action="/users" class="contact-form" method="post" id="registration-form">
                            @csrf
                            <div class="form-double">
                                <input type="text" id="form-firstname" name="form-firstname" placeholder="First name" class="form-control" required="required">
                                <input type="text" id="form-lastname" name="form-lastname" placeholder="Last name" class="form-control" required="required">
                            </div>
                            <input type="password" id="form-password" name="form-password" class="form-control" placeholder="Password">
                            <input type="text" id="form-nik" name="form-nik" class="form-control" placeholder="NIK">
                            <div class="form-double">
                                <input type="email" id="form-user-email" name="form-user-email" class="form-control" placeholder="email" required="required">
                                <input type="emailtype" id="form-re-email" name="form-re-email" class="form-control" placeholder="Re-enter email" required="required">                                
                            </div>          
                            <input type="text" id="form-phone-num" name="form-phone-number" class="form-control" placeholder="Phone Number">
                            <div class="form-group">
                            <textarea class="form-control" name="form-address" id="form-address" rows="3"placeholder="Address"></textarea>
                            </div>          
                            <div class="form-group">
                                <select class="form-control" name="select-state" id="select-state">
                                <option value="">Provinsi..</option>
                                <option value="Aceh">Kalimantan Barat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="select-city" id="select-city">
                                <option value="">Kabupaten...</option>
                                <option value="Ambon"></option>
                                <option value="Bandung">Kabupten Bengkayang</option>
                                <option value="Banjarmasin">Kabupaten Landak</option>
                                <option value="Banda Aceh">Kabupaten Kayong Utara</option>
                                <option value="bengkulu">kabupaten Pontianak</option>
                                <option value="Denpasar">Kabupaten Kubu Raya</option>
                                <option value="Gorontalo">Kabupaten Melawi</option>
                                <option value="Jakarta">Kabupaten Sanggau</option>
                                <option value="Jayapura">Kabupaten Mempawah</option>
                                <option value="Jambi">kabupaten Sekadau</option>
                                <option value="Kendari">Kabupaten Sintang</option>
                                <option value="Kupang">Kabupaten Singkawang</option>
                                <option value="Mamuju">Kabupaten Kapuas Hulu</option>                     
                                <option value="Mamuju">Kabupaten Sambas</option>   
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="select-city" id="select-city">
                                <option value="">Kota...</option>
                                <option value="Ambon"></option>
                                <option value="Bandung">Bengkayang</option>
                                <option value="Banjarmasin">Ngabang</option>
                                <option value="Banda Aceh">Naga Pinoh</option>
                                <option value="bengkulu">Pontianak</option>
                                <option value="Denpasar">Sungai Pinuh</option>
                                <option value="Gorontalo">Sambas</option>
                                <option value="Jakarta">Sanggau</option>
                                <option value="Jayapura">Sekadau</option>
                                <option value="Jambi">Sintang</option>
                                <option value="Kendari">Kubu</option>
                                <option value="Kupang">Ketapang</option>
                                <option value="Mamuju">Putusibau</option>                     
                                </select>
                            </div>               
                            <div class="form-group">
                                <label for="upload-photo">Upload Photo</label>
                                <input type="file" name="form-photo" id="select-photo" value="image" />
                            </div>
                            <div class="form-group">
                                <label for="gender">Pria</label>
                                <input type="checkbox" aria-label="...">
                                <label for="gender">Wanita</label>
                                <input type="checkbox" aria-label="...">
                            </div>   
                            <label for="date-of-birth">Tanggal dan Tahun Lahir</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <select class="form-control" name="select-date" id="date">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                    </select>                                
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="select-month" id="month">
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>                                
                                </div>
                                <div class="col-md-2">
                                    <input type="text" id="form-date-year" name="form-date-year" placeholder="e.g 1999" class="form-control" required="required">                              
                                </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" aria-label="...">
                                    <label for="">Saya menyetujui Syarat dan Ketentuan</label>
                                </div>                                   
                                
                                <div class="form-group">
                                    <input type="checkbox" aria-label="...">
                                    <label for="">Saya memberikan hak atas data diri Anda untuk situs Anda</label>
                                </div>                                   

                                <div class="form-group">
                                    <input type="checkbox" aria-label="...">
                                    <label for="">Semua data yang telah disi sesuai dengan data dan ketentuan yang berlaku</label>
                                </div>
                                
                                <button type="submit" class="button">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
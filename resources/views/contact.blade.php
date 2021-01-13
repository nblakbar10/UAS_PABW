@extends('layout/main')
@section('title','Hubungi Kami' )
@section('contact')

<section class="contact-area ptb--100" id="contact">
    <div class="container">
        <div class="section-title">
            <h2>Hubungi Kami</h2>
            <p>Silahkan menghubungi kami pada kontak yang tertera di bawah ini.</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                    <form action="#">
                        <input type="text" name="name" placeholder="Enter Your Name">
                        <input type="text" name="email" placeholder="Enter Your Email">
                        <textarea name="msg" id="msg" placeholder="Your Message "></textarea>
                        <input type="submit" value="Send" id="send">
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact_info">
                    <div class="s-info">
                        
                        <div class="meta-content">
                            <span>Jl. Soekarno Hatta Km.4 No.10, Kelurahan Graha Indah, Kecamatan Balikpapan Utara</span>
                            <span>Balikpapan, Kalimantan Timur, 76127</span>
                        </div>
                    </div>
                    <div class="s-info">
                  
                        <div class="meta-content">
                            <span>+62 81234567890</span>
                        </div>
                    </div>
                    <div class="s-info">
                      
                        <div class="meta-content">
                            <span>halo.kemudi@gmail.com</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

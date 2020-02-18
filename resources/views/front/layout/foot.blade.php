<footer id="ts-footer" class="mt-5">
    <section id="contact" class="ts-block ts-separate-bg-element" data-bg-image="{{ $bingPic[3] }}" data-bg-image-opacity=".1">
        <div class="container">
            <div class="ts-title text-center"><h2 class="ts-bubble-border">Get In Touch</h2></div>
            <div class="row ts-xs-text-center ">
                <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp">
                    <img src="/owl/pic/icon-pin.png" class="mb-4" alt="icon-pin">
                    <h5>Address</h5>
                    <div class="ts-opacity__50">
                        <figure class="mb-0">In Japan</figure>
                        <figure>The village office of Ogawa, OgawaShirakawa-ku</figure>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".1s">
                    <img src="/owl/pic/icon-phone-02.png" class="mb-4" alt="icon-phone-02">
                    <h5>Phone</h5>
                    <div class="ts-opacity__50">
                        <figure class="mb-0">0081-9012345678</figure>
                        <figure>+1 421-214-4213</figure>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".2s">
                    <img src="/owl/pic/icon-envelope.png" class="mb-4" alt="icon-envelope">
                    <h5>Email</h5>
                    <div class="ts-opacity__50">
                        <figure class="mb-0">dr_14k@yeah.net</figure>
                        <figure>longkuilx@gmail.com</figure>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".3s">
                    <img src="/owl/pic/icon-talk-bubble.png" class="mb-4" alt="icon-talk-bubble"><h5>Facebook Chat</h5>
                    <div class="ts-opacity__50">
                        <figure>Frankenstein</figure>
                    </div>
                </div>
            </div>
            <div class="pt-5">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Let’s Connect</h3>
                        <div class="ts-column-count-sm-2">
                            <a href="https://github.com/luoxulx" target="_blank" class="mb-3 d-flex text-white ts-align__vertical" target="_blank">
                                <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-github"></i></span>
                                <span>Github</span>
                            </a>
                            <a href="https://www.instagram.com/luoxulx" target="_blank" class="mb-3 d-flex text-white ts-align__vertical" target="_blank">
                                <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-instagram"></i></span>
                                <span>Instagram</span>
                            </a>
                            <a href="https://www.facebook.com/luoxulx" target="_blank" class="mb-3 d-flex text-white ts-align__vertical" target="_blank">
                                <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-facebook"></i></span>
                                <span>Facebook</span>
                            </a>
                            <a href="https://www.twitter.com/luoxulx" target="_blank" class="mb-3 d-flex text-white ts-align__vertical" target="_blank">
                                <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-twitter"></i></span>
                                <span>Twitter</span>
                            </a>
                            <a href="https://youtube.com/luoxulx" target="_blank" class="mb-3 d-flex text-white ts-align__vertical">
                                <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-youtube"></i></span>
                                <span>YouTube</span>
                            </a>
                            <a href="https://weibo.com/luoxulx" target="_blank" class="mb-3 d-flex text-white ts-align__vertical">
                                <span class="ts-circle__xs border border-white ts-border-light mr-4"><i class="fab fa-weibo"></i></span>
                                <span>Sina</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h3>LEAVE FEEDBACK</h3>
                        <feedback-component></feedback-component>
                    </div>
                    <div class="col-md-1">
                        <div class="ts-column-count-sm-2">
                            <h3>Links</h3>
                            @forelse($links as $item)
                                <small><a href="{{ $item->url }}" target="_blank" title="{{ $item->desc }}" class="mb-3 d-flex text-white ts-align__vertical"><span class="span-overflow">{{ $item->name }}</span></a></small>
                            @empty
                                <small></small>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="text-dark bg-white">
        <div class="container py-3 position-relative">
            <small class="blockquote-footer">© {{ date('Y') }} &nbsp;<a href="https://www.lnmpa.top" target="_blank">14k</a>,&nbsp;All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="http://www.beian.miit.gov.cn/">浙ICP备17055140号-1</a></small>
            <button id="totop" title="Go to top" style="display: block;"><i class="fa fa-arrow-up text-white"></i></button>
        </div>
    </div>
</footer>

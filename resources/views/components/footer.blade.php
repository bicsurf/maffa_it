<div class="container-fluid footer pt-5 bg-dark text-light me-5">
    <div class="container py-2  mb-1 justify-conted-center">
        <div class="row g-5 justify-content-between">
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4">{{ __('ui.footerAddress') }}</h5>
                <p class="mb-2">Milano. Italia</p>
                <p class="mb-2">+012 345 67890</p>
                <p class="mb-2">info@maffa.it</p>
            </div>

            {{-- Lavora con noi --}}
            <div class="col-lg-3 col-md-6 mb-5">
                <h5>www.maffa.it</h5>
                <p class="mb-2">{{ __('ui.footerWork') }}</p>
                <p class="mb-2">{{ __('ui.footerRegister') }}</p>
                <a href="{{ route('become.revisor') }}"
                    class="btn btn-primary text-ligth shadow my-3">{{ __('ui.footerReviewer') }}</a>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <p class="text-light">{{ __('ui.footerContacted') }}</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">{{ __('ui.footerSend') }}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-2">
        <div class="row justify-content-center">
            <div class="col-8 d-flex justify-content-around">
                <a href="" class="text-light"><i class="bi bi-twitter"></i></a>
                <a href="" class="text-light"><i class="bi bi-instagram"></i></a>
                <a href="" class="text-light"><i class="bi bi-facebook"></i></a>
                <a href="" class="text-light"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
    <div class="container border-top border-1">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-end mb-3 mb-md-0">
                    <p class="text-light">&#169 Maffa.it</p>
                </div>
            </div>
        </div>
    </div>
</div>
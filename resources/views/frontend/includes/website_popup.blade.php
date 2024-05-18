
<div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
    <div class="absolute-full bg-black opacity-60"></div>
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md mx-4 mx-md-auto">
        <div class="modal-content position-relative border-0 rounded-0">
            <div class="aiz-editor-data">
                <div class="d-block">
                    <img class="w-100" src="https://demo.activeitzone.com/ecommerce/public/uploads/all/O1p9teHe1TOPSxtjoFlTrnUZPx2ODTvezA6e51sk.webp" alt="dynamic_popup">
                </div>
            </div>
            <div class="pb-5 pt-4 px-3 px-md-2rem">
                <h1 class="fs-30 fw-700 text-dark">Subscribe to Our Newsletter</h1>
                <p class="fs-14 fw-400 mt-3 mb-4">Subscribe our newsletter for coupon, offer and exciting promotional discount..</p>
                <form class="" method="POST" action="https://demo.activeitzone.com/ecommerce/subscribers">
                    <input type="hidden" name="_token" value="mQKitohuD7H7LCiy18pKm0W2qRfSfROkb2tIsfEf">                                        <div class="form-group mb-0">
                        <input type="email" class="form-control" placeholder="Your Email Address" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-block mt-3 rounded-0 text-white" style="background: #baa185;">
                        Subscribe Now
                    </button>
                </form>
            </div>
            <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session" data-key="website-popup" data-value="removed" data-toggle="remove-parent" data-parent=".website-popup">
                <i class="la la-close fs-20"></i>
            </button>
        </div>
    </div>
</div>



<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    function confirm_modal(delete_url)
    {
        jQuery('#confirm-delete').modal('show', {backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

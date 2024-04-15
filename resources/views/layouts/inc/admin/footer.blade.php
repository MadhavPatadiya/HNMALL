<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright @<span id="copyright-year">{{ date('Y') }}</span> © All Rights Reserved by
                    એચ.એન.મોલ | Designed & Developed by Fuerte Developers.</p>
                <style>
                    document.addEventListener('DOMContentLoaded', function() {
                            let currentYear=new Date().getFullYear();
                            let copyrightYearElement=document.getElementById('copyright-year');

                            if (currentYear > copyrightYearElement.innerHTML) {
                                copyrightYearElement.innerHTML=currentYear;
                            }
                        });
                </style>

                {{-- Copyright @2023 All Rights Reserved by {Product Name} | Designed & Developed by Fuerte Developers. --}}

            </div>
        </div>
    </div>
</footer>

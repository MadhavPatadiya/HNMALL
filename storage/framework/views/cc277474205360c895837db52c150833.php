<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright @<span id="copyright-year"><?php echo e(date('Y')); ?></span> © All Rights Reserved by
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

                

            </div>
        </div>
    </div>
</footer>
<?php /**PATH D:\XAMPP\htdocs\HNMALL_13-02-2024\resources\views/layouts/inc/admin/footer.blade.php ENDPATH**/ ?>
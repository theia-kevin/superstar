		</div>
	</div>
	<?php do_action( 'storefront_before_footer' ); ?>
	<div class="custom-h-400 bg-no-repeat bg-cover bg-center" style="background-image: url('<?php echo get_field('footer_background', 'option')['url']; ?>');">
        <div class="container mx-auto px-4 h-full flex flex-col justify-end">
            <div class="grid grid-cols-12 custom-pb-60">
                <div class="col-span-3">
                    <img src="<?php echo getCustomLogo()[0]; ?>" alt="">
                </div>
                <div class="col-span-3">
                    <div class="flex flex-col">
                        <div class="font-jumble text-white">Quick Links</div>
                        <div class="flex">
                            <div class="flex flex-col custom-pr-60">
                                <a class="custom-text-14 text-white" href="#">About</a>
                                <a class="custom-text-14 text-white" href="#">Contact</a>
                                <a class="custom-text-14 text-white" href="#">Membership</a>
                            </div>
                            <div class="flex flex-col">
                                <a class="custom-text-14 text-white" href="#">Playground</a>
                                <a class="custom-text-14 text-white" href="#">Education</a>
                                <a class="custom-text-14 text-white" href="#">Bookings</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-4">ONE</div>
                <div class="col-span-2">ONE</div>
            </div>
            <div class="grid grid-cols-12 custom-pb-30">
                <div class="col-span-6">
                    <a class="font-jumble text-white uppercase" href="#">Copyright &copy;2021 Superstar | All Rights Reserved</a>
                </div>
                <div class="col-span-4">
                    <a class="font-jumble text-white uppercase" href="#">Terms & Conditions</a>
                </div>
                <div class="col-span-2">
                    <a class="font-jumble text-white uppercase" href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
	<?php do_action( 'storefront_after_footer' ); ?>
</div>
<?php wp_footer(); ?>
</body>
</html>

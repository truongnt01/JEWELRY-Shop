		<script src="{{ asset('client/libs/popper/js/popper.min.js') }} "></script>
		<script src="{{ asset('client/libs/jquery/js/jquery.min.js') }}"></script>
		<script src="{{ asset('client/libs/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('client/libs/slick/js/slick.min.js') }}"></script>
		<script src="{{ asset('client/libs/mmenu/js/jquery.mmenu.all.min.js') }}"></script>
		<script src="{{ asset('client/libs/slider/js/tmpl.js') }}"></script>
		<script src="{{ asset('client/libs/slider/js/jquery.dependClass-0.1.js') }}"></script>
		<script src="{{ asset('client/libs/slider/js/draggable-0.1.js') }}"></script>
		<script src="{{ asset('client/libs/slider/js/jquery.slider.js') }}"></script>
		{{-- Javescript Ajax --}}
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"
		integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<!-- Site Scripts -->
		<script src="{{ asset('client/assets/js/app.js') }}"></script>
		<script type="text/javascript">
			$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		</script>
		<script src="{{ asset('admin/assets/base.js') }}"></script>
		@yield('script')
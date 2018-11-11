	
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
 	<script>tinymce.init({ mode: 'specific_textareas',editor_selector:'textarea' });</script>

    <script src="{{ asset('js/bootstrap.min.css') }}" defer></script>

    <!-- Icons -->
    {{-- <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script> --}}
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script>
      feather.replace()
    </script>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
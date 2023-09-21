<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })


    // Add csrf token in ajax request
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {

        /** Subscribe Newsletter**/
        $('.newsletter-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                method: 'POST',
                url: "{{ route('subscribe-newsletter') }}",
                data: $(this).serialize(),
                beforeSend: function() {
                    $('.newsletter-button').text('{{ (GoogleTranslate::trans('loading...', app()->getLocale())) }}');
                    $('.newsletter-button').attr('disabled', true);
                },
                success: function(data) {
                    if (data.status === 'success') {
                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        })
                        $('.newsletter-form')[0].reset();
                        $('.newsletter-button').text('{{ (GoogleTranslate::trans('SIGN UP', app()->getLocale())) }}');

                        $('.newsletter-button').attr('disabled', false);
                    }
                },
                error: function(data) {
                    $('.newsletter-button').text('{{ (GoogleTranslate::trans('SIGN UP', app()->getLocale())) }}');
                    $('.newsletter-button').attr('disabled', false);

                    if (data.status === 422) {
                        let errors = data.responseJSON.errors;
                        $.each(errors, function(index, value) {
                            Toast.fire({
                                icon: 'error',
                                title: value[0]
                            })
                        })
                    }
                }
            })
        })
    })

    $(document).ready(function() {

/** Contact Form**/
$('.contact-form').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        method: 'POST',
        url: "{{ route('contact-mail') }}",
        data: $(this).serialize(),
        beforeSend: function() {
            $('.contact-button').text('loading...');
            $('.contact-button').attr('disabled', true);
        },
        success: function(data) {
            if (data.status === 'success') {
                Toast.fire({
                    icon: 'success',
                    title: data.message
                })
                $('.contact-form')[0].reset();
                $('.contact-button').text('SEND MESSAGE');

                $('.contact-button').attr('disabled', false);
            }
        },
        error: function(data) {
            $('.contact-button').text('SEND MESSAGE');
            $('.contact-button').attr('disabled', false);

            if (data.status === 422) {
                let errors = data.responseJSON.errors;
                $.each(errors, function(index, value) {
                    Toast.fire({
                        icon: 'error',
                        title: value[0]
                    })
                })
            }
        }
    })
})
})




</script>

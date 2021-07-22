<!-- register -->
<form method="POST" action="{{ route('register') }}">
                        @csrf

<!-- Verify -->
<form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>

<!-- Confirm -->
<form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
<!-- email -->
<form method="POST" action="{{ route('password.email') }}">
                        @csrf

<!-- reset -->
<form method="POST" action="{{ route('password.update') }}">
                        @csrf
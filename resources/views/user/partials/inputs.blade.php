{!! Form::customText('name', 'Nombre', $user, ['autofocus', 'required']) !!}
{!! Form::customEmail('email', 'Correo electrónico', $user, ['required']) !!}
{!! Form::customPassword('password', 'Contraseña', $user, isset($user) ? [] : ['required']) !!}
{!! Form::customPassword('password_confirmation', 'Repetir contraseña', $user, isset($user) ? [] : ['required']) !!}
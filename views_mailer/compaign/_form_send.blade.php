<div class="form-group">
    {!!Form::label('subject', 'Subject') !!}
    {!!Form::text('subject', null, ['class' => 'form-control']) !!}
    {!!Form::label('to', 'To') !!}
    {!!Form::text('to', null, ['class' => 'form-control']) !!}
    {!!Form::label('from', 'From') !!}
    {!!Form::text('from', null, ['class' => 'form-control']) !!}
    {!!Form::label('message', 'Message') !!}
    {!!Form::textarea('message', null, ['class' => 'form-control']) !!}
    <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="{{ route('email.campaigns.unsubscribe', ['token'=>$user->token]) }}" >{{ route('email.campaigns.unsubscribe', ['token'=>$user->token]) }}
    </a>
</div>
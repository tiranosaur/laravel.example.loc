<style>
    div{
        display: block;
        text-align: center;
    }
</style>
<div>
    <h1>{{ $user }}</h1>
    <h1>{{ $email }}</h1>
    <h1>Email validation - {{ $emailValidation?'true':'false' }}</h1>
</div>

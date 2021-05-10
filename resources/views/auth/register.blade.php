@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Seja um Agente Sul Promotora') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <!--  cpf      -->

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cfp') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

                            </div>
                        </div>





                         <!--  Telefone      -->

                         <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus>

                            </div>
                        </div>

                        

                         <!--  Whats APP      -->

                         <div class="form-group row">
                            <label for="whatsApp" class="col-md-4 col-form-label text-md-right">{{ __('WhatsApp') }}</label>

                            <div class="col-md-6">
                                <input id="whatsApp" type="text" class="form-control @error('whatsApp') is-invalid @enderror" name="whatsApp" value="{{ old('whatsApp') }}" required autocomplete="whatsApp" autofocus>

                          
                            </div>
                        </div>

                         <!--  banco      -->

                         <div class="form-group row">
                            <label for="banco" class="col-md-4 col-form-label text-md-right">{{ __('Banco') }}</label>

                            <div class="col-md-6">
                                <input id="banco" type="text" class="form-control @error('banco') is-invalid @enderror" name="banco" value="{{ old('banco') }}" >
                          
                            </div>
                        </div>




                        <!--  Tipo de Conta      -->

                         <div class="form-group row">
                            <label for="tipoConta" class="col-md-4 col-form-label text-md-right">{{ __('Tipo da Conta') }}</label>

                            <div class="col-md-6">
                                <input id="tipoConta" type="text" class="form-control @error('tipoConta') is-invalid @enderror" name="tipoConta" value="{{ old('tipoConta') }}" >

                           
                            </div>
                        </div>



                         <!--  agencia      -->

                         <div class="form-group row">
                            <label for="agencia" class="col-md-4 col-form-label text-md-right">{{ __('Agência') }}</label>

                            <div class="col-md-6">
                                <input id="agencia" type="text" class="form-control @error('agencia') is-invalid @enderror" name="agencia" value="{{ old('agencia') }}">

                           
                            </div>
                        </div>      



                          <!--  conta      -->

                          <div class="form-group row">
                            <label for="conta" class="col-md-4 col-form-label text-md-right">{{ __('Conta') }}</label>

                            <div class="col-md-6">
                                <input id="conta" type="text" class="form-control @error('conta') is-invalid @enderror" name="conta" value="{{ old('conta') }}">

                             
                            </div>
                        </div>    



                                                 <!--  pix      -->

                                                 <div class="form-group row">
                            <label for="pix" class="col-md-4 col-form-label text-md-right">{{ __('Pix') }}</label>

                            <div class="col-md-6">
                                <input id="pix" type="text" class="form-control @error('pix') is-invalid @enderror" name="pix" value="{{ old('pix') }}">

                           
                            </div>
                        </div>  





                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection










    

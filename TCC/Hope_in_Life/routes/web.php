<?php

use App\Http\Controllers\DoacoesController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\OngController;
use App\Models\Doador;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// publicos

Route::post('/cadastraOng', [DoadorController::class, 'cadastrarDoador']);

Route::get('/cadastrarOng', [OngController::class, 'cadastrarOngView']);

Route::post('/cadastrarDoador', [OngController::class, 'cadastrarOng']);

Route::get('/logout', function(){
    Auth::guard('Doador')->logout();
    Auth::guard('Ong')->logout();
});

Route::get('/login', function(){
    return "login";
})->name('login');

Route::get('/CadastrarOng', function(){
    return view('cadastrarOng');
})->name('login');

Route::get('/informacoes', function(){
    return view('Telas.informacoes');
})->name("Informacoes");

Route::get('/necessidade', function(){
    return view('Telas.ListarConteudoNecessidade');
});


Route::get('/ListaNecessidades', function(){
    return view('Telas2.listaNecessidades');
})->name("ListarNecessidades");

Route::get('/PesquisarNecessidades', function(){
    return view('Telas2.Pesquisar_Necessidade');
});

Route::get('/LogoutEfetuado', function(){
    return view('Telas3.logoutefetuado');
});
Route::get('/RecuperarSenha', function(){
    return view('Telas3.RecuperacaoSenha');
});
Route::get('/RecuperarSenha2', function(){
    return view('Telas3.recuperacaodesenha2');
});
Route::get('/VerificarEmail', function(){
    return view('Telas3.verificacaodeemail');
});

Route::get('/AtualizarContaDoador', function(){
    return view('Telas.AtualizarContaDoador');
})->name("AtualizarDoador");;
Route::get('/AtualizarContaOng', function(){
    return view('Telas.AtualizarONG');
});
Route::get('/AtualizarNecessidade', function(){
    return view('Telas.AtualizarNecessidade');
});
Route::get('/CadastrarNecessidade', function(){
    return view('Telas.CadastrarNecessidade');
});

Route::get('/DoacoesRealizadas', function(){
    return view('Telas.DoacoesRealizadas');
})->name("DoacoesRealizadas");

Route::get('/DoacoesRecebidas', function(){
    return view('Telas.DoacoesRecebidas');
})->name("DoacoesRecebidas");

Route::get('/NecessidadesDaOng', function(){
    return view('Telas.NecessidadesDaOng');
})->name("NecessidadesDaOng");

Route::get('/', function(){
    return view('index');
})->name("home");
    
Route::get('/homeOng', function(){
return view('indexOng');
})->middleware('auth:Doador');

Route::get('/notificacoes', function(){
    return view('Telas.Notificacoes');
});

Route::get('/DoacaoMaterialEnviada', function(){
    return view('Telas.DoacaoMaterialEnviada');
});

Route::get('/DoacaoMonetariaEnviada', function(){
    return view('Telas.DoacaoMonetariaEnviada');
});


Route::get('/RealizarDoacaoMaterial', function(){
    return view('Telas.RealizarDoacaoMaterial');
})->name("RealizarDoacaoMaterial");

Route::get('/ConfirmarEmailDoador', function(){
    return view('Telas2.Confimar_E-mail_Doador');
});

Route::get('/ConfirmarDesativacaoDoador', function(){
    return view('Telas2.Confirmar_Desativacao_Doador');
});

Route::get('/DesativarContaDoador', function(){
    return view('Telas2.Desativar_Conta_Doador');
});

Route::get('/RealizarPagamento', function(){
    return view('Telas.MeioDePagamento');
})->name("MeioPagamento");

Route::get('/DoacaoDesativada', function(){
    return view('Telas2.Doacao_Desativada');
});

Route::get('/DesativarDoacao', function(){
    return view('Telas2.Desativar_Doacao');
})->name("DesativarNecessidade");

Route::get('/RealizarDoacaoMonetaria', function(){
    return view('Telas.RealizarDoacaoMonetaria');
});

Route::get('/ConfirmarEmailOng', function(){
    return view('Telas2.ConfirmarEmailOng');
});
    
Route::get('/listarOngs', function(){
    return view('Telas2.Lista_ONGs');
})->name("ListarONGs");

Route::get('/ConfirmarDesativacaoOng', function(){
    return view('Telas2.Confirmar_Desativacao_ONG');
});

Route::get('/DesativarContaOng', function(){
    return view('Telas2.Desativar_Conta_ONG');
});

    
Route::get('/ContaDesativada', function(){
    return view('Telas2.Conta_Desativada');
});

Route::get('/DoacaoMaterialRecebida', function(){
    return view('Telas.DoacaoMaterialRecebida');
});

Route::get('/DoacaoMonetariaRecebida', function(){
    return view('Telas.DoacaoMonetariaRecebida');
});

Route::get('/DesativarNecessidade', function(){
    return view('Telas3.desativarnecessidade');
});

Route::get('/DesativarNecessidade2', function(){
    return view('Telas3.desativarnecessidade2');
})->name("DesativarNecessidade2");

Route::get('/homeOng', function(){
    return view('Telas3.homeong');
});

Route::get('/ListarConversas', function(){
    return view('Telas.ListarConversas');
})->name("ListarConversas");

Route::get('/TelaChat', function(){
    return view('Telas.TelaChat');
});

Route::get('cadastrarDoador', [DoadorController::class, 'cadastrarDoadorView']);

Route::post('cadastrarDoador', [DoadorController::class, 'cadastrarDoador'])->name("cadastrarDoador");

Route::get('atualizarDoador', [DoadorController::class, 'atualizarDoadorView'])->name("atualizarDoador")->middleware('auth:Doador');

Route::post('atualizarDoador', [DoadorController::class, 'atualizarDoador'])->name("atualizarDoador")->middleware('auth:Doador');

Route::get('confirmarEmailDesativacao', [DoadorController::class, 'confirmarEmailDesativacao'])->middleware('auth:Doador')->name("confirmarEmailDesativacao");

Route::get('confirmarDesativacao/{token}', [DoadorController::class, 'confirmarDesativacao'])->name("confirmarDesativacao");

Route::get('desativarConta/{token}', [DoadorController::class, 'desativarConta'])->name("desativarConta");

Route::post('atualizarSenha', [DoadorController::class, 'atualizarSenha'])->middleware("auth:Doador")->name("atualizarSenha");

// redefinição de senha

Route::get('/forgot-password', function () {
    return view('Telas3.RecuperacaoSenha');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->with(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('Telas3.recuperacaodesenha2', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (Doador $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

//verificação do email

Route::get('/email/verify', function () {
    return view('verificar_email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');



?>
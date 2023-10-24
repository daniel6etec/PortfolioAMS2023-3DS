<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use App\Models\Representante_Legal;
use App\Models\RepresentanteLegal;
use App\Models\Seguimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OngController extends Controller
{
    public function cadastrarOngView(){
        return view('cadastrarONG');
    }

    public function cadastrarOng(Request $request){
        
        $dados = Validator::make(
            $request->all(),
            [
                "NomeOng" => "required|string|min:7|max:70",
                "DataFundacao" => "required|date",
                "CNPJ" => "required|string|min:18|max:20",
                "CausaApoia"=> "required|string|min:10|max:30",
                "Descricao" => "required|string|min:30|max:100",
                "Horario" => "required|string|min:12|max:40",
                "EnderecoOng" => "required|string|min:20|max:100",
                "EmailOng" => "required|email|min:18|max:70",
                "NomeRepresentanteLegal" => "required|string|min:10|max:40",
                "EmailRepresentante" => "required|string|min:18|max:70",
                "DataNascimentoRepresentante"=> "required|string|",
                "EnderecoRepresentante" => "required|string|min:20|max:100",
                "CPFRepresentante" => "required|string|min:13|max:14",
                "RGRepresentante" => "required|string|min:12|max:14",
                "TelefoneRepresentante" => "required|string|min:13|max:19",
                "DescricaoRepresentante" => "required|min:10||max:20",
                "Senha" => "required|string|min:10|max:100"
            ]

        )->validate();

        // cadastro representante legal

        $Representante_Legal = new RepresentanteLegal();

        $Representante_Legal->NomeCompleto = $dados['NomeRepresentanteLegal'];

        $Representante_Legal->CPF = $dados['CPFRepresentante'];

        $Representante_Legal->RG = $dados['RGRepresentante'];

        $Representante_Legal->Endereco = $dados['EnderecoRepresentante'];

        $Representante_Legal->email = $dados['EmailRepresentante'];

        $Representante_Legal->DataNascimento = $dados['DataNascimentoRepresentante'];

        $Representante_Legal->save();

        // cadastro ONG

        $ONG = new Ong();

        $ONG->NomeFantasia = $dados['NomeOng'];

        $ONG->DataFundacao = $dados['DataFundacao'];

        $ONG->representante_id = $Representante_Legal->id;

        $ONG->CNPJ = $dados['CNPJ'];

        $ONG->HoraDia = $dados['Horario'];

        $ONG->SobreOng = $dados['Descricao'];

        $ONG->email = $dados['EmailOng'];

        $ONG->password = Hash::make($dados['Senha']);

        
        $ONG->seguimento_id = 1;

        $ONG->save();

        $ONG->Endereco_Ong()->create([
            'endereco' => $dados['EnderecoOng']
        ]);

        $Representante_Legal->Telefone_Representante()->create([
            'NumeroTelefone' => $dados['TelefoneRepresentante'],
            'Descricao' => $dados['DescricaoRepresentante']
        ]);

        
        if(Auth::guard('Ong')->attempt(['email' => $ONG->email, 'password' => $dados['Senha']])){
            redirect('Home');
        }else{
            return back()->withErrors("Erro ao realizar cadastro");
        }
        

        

        
    }


}

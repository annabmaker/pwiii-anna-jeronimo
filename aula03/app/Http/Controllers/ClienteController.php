<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //atualizar dados e inserir
use App\Models\Cliente; // importa a classe Cliente

class ClienteController extends Controller  //Herda todos os metodos da classe Controller
{
    public function index() // função index
    {
        $cliente = Cliente::all(); //chama o metodo all da classe Cliente e armazena na variavel $cliente
        //compact transforma a variavel em um array associativo
                    //nome da view       //nome do atributo $cliente sem $
       return view('cliente',compact('cliente')); //retorna a view cliente.blade.php com o array associativo 
    }

    public function store(Request $request) //função store que recebe os dados do formulario atraves do objeto $request     
    {
        $cliente = new Cliente(); //cria um novo objeto da classe Cliente
            $cliente ->  primeiroNome = $request -> txNomeCliente; //atribui o valor do campo txNomeCliente do formulario ao atributo primeiroNome do objeto $cliente
            $cliente ->  sobrenome = $request -> txSobrenome; //atribui o valor do campo txSobrenome do formulario ao atributo sobrenome do objeto $cliente 

            $cliente -> save (); //chama o metodo save da classe Cliente para inserir os dados no banco de dados 

            return redirect ('/cliente'); //redireciona para a rota /cliente que chama a função index
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use Hash;
use Exception;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function post(Request $request)
    {
        // Cargo las variables de entorno
        $API_URL = env('AUTH_API_URL');
        $API_TOKEN = env('AUTH_API_TOKEN');
        $API_USER = env('AUTH_API_USER');
        $API_PASS = env('AUTH_API_PASSWORD');

        try {

            // Creo el cliente Guzzle para hacer la petición
            $client = new Client();
            $data = [
                "token" => $API_TOKEN,
                "user" => $request->input('username'),
                "password" => $request->input('password'),
                "grupo" => ""
            ];
            $auth = [
                $API_USER,
                $API_PASS
            ];

            // Hago la petición a la API
            $response = $client->post($API_URL, [
                'json' => $data,
                'auth' => $auth,
                'verify' => false,
                'timeout' => 10
            ]);

            $statusCode = $response->getStatusCode();
            $ok = $response->getReasonPhrase();

            // Si la petición no fue exitosa
            if ($statusCode != 200 || $ok != 'OK') {
                error_log('Error en la autenticación');
                return redirect()->route('login')->with('error', 'Error en la autenticación');
            }

            // Si la petición fue exitosa comprobar si el usuario existe en la base de datos
            $user = User::where('name', $request->input('username'))->first();

            // Si el usuario no existe en la base de datos lo crea
            if (!$user) {
                $user = new User();
                $user->name = $request->input('username');
                $user->password = Hash::make($request->input('password'));
                $user->email = $request->input('username') . '@example.com';
                $user->save();
            }

            // Autentica al usuario
            Auth::login($user);
            return redirect()->route('home');

        } catch (ConnectException $e) {
            error_log("Error de conexión: $e");
            return redirect()->route('login')->with('error', 'Error de conexión');
        } catch (RequestException $e) {
            error_log("Error en la petición: $e");
            return redirect()->route('login')->with('error', 'Usuario y/o contraseña incorrectos.');
        } catch (Exception $e) {
            error_log("Error desconocido: $e");
            return redirect()->route('login')->with('error', 'Error desconocido');
        }
    }
}
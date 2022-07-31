<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller {

 public function showAll() {
  return response()->json(Cliente::all());
 }

 public function showOne($id) {
  return response()->json(Cliente::find($id));
 }

 public function create(Request $request) {
  $cliente = Cliente::create($request->all());

  return response()->json($cliente, 201);
 }

 public function update($id, Request $request) {
  $cliente = Cliente::findOrFail($id);
  $cliente->update($request->all());

  return response()->json($cliente, 200);
 }

 public function delete($id) {
  Cliente::findOrFail($id)->delete();
  return response()->json(['status'=>'deletado com sucesso']);
 }
 public function teste() {

  if (false) {
   $hostname = "127.0.0.1";
   $dbname = "raquel";
   $port = "3306";
   $username = "root";
   $password = "teste";
  } else {
   $hostname = "127.0.0.1";
   $dbname = "raquel";
   $port = "3307";
   $username = "root";
   $password = "helloworld";
  }

  try {

   $conn = new PDO("mysql:host={$hostname};dbname={$dbname};port={$port}", $username, $password);

   // Configure PDO error mode
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   return response('Connected Successfully', 200);
  } catch (PDOException $e) {

   return response("Failed to connect: " . $e->getMessage(), 200);
  }

  // Perform database operations

  // Close the connection
  $conn = null;

 }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VirtualServer;
use Illuminate\Http\JsonResponse;

class VirtualServerController extends Controller
{
    public function start(VirtualServer $server): JsonResponse
    {
        $server->update(['status' => 'running']);
        $server->update(['console_output' => 'Server wird gestartet...']);
        return response()->json(['message' => 'Server gestartet']);
    }

    public function stop(VirtualServer $server): JsonResponse
    {
        $server->update(['status' => 'stopped']);
        $server->update(['console_output' => 'Server wird gestoppt...']);
        return response()->json(['message' => 'Server gestoppt']);
    }

    public function restart(VirtualServer $server): JsonResponse
    {
        $server->update(['status' => 'restarting']);
        $server->update(['console_output' => 'Server wird neu gestartet...']);
        return response()->json(['message' => 'Server wird neu gestartet']);
    }

    public function getConsole(VirtualServer $server): JsonResponse
    {
        return response()->json([
            'console' => $server->console_output,
            'status' => $server->status
        ]);
    }

    public function getVncConnection(VirtualServer $server): JsonResponse
    {
        return response()->json([
            'port' => 6080,  // Der Port, auf dem der VNC-Server läuft
            'token' => encrypt($server->id) // Optional: Für die Authentifizierung
        ]);
    }
}

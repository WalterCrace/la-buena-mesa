<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Http\Requests\StoreMenuItemRequest;
use App\Http\Requests\UpdateMenuItemRequest;
use Illuminate\Http\JsonResponse;

class MenuItemController extends Controller
{
    public function index(): JsonResponse
    {
        $items = MenuItem::all();
        return response()->json($items);
    }

    public function store(StoreMenuItemRequest $request): JsonResponse
    {
        $item = MenuItem::create($request->validated());
        return response()->json($item, 201);
    }

    public function show(MenuItem $menuItem): JsonResponse
    {
        return response()->json($menuItem);
    }

    public function update(UpdateMenuItemRequest $request, MenuItem $menuItem): JsonResponse
    {
        $menuItem->update($request->validated());
        return response()->json($menuItem);
    }

    public function destroy(MenuItem $menuItem): JsonResponse
    {
        $menuItem->delete();
        return response()->json(null, 204);
    }

    public function getByCategory($category): JsonResponse
    {
        $items = MenuItem::where('category', $category)->get();
        return response()->json($items);
    }
}

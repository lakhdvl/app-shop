<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFormRequest;
use App\Http\Services\Menu\MenuService;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    
    public function index(){
        echo "abc";
        // return view('admin.menu.list', [
        //     'title' => 'Latest Category List',
        //     'menus' => $this->menuService->getAll()
        // ]);
    }
    
    public function create(){
        return view('admin.menu.add', [
            'title' => 'Add Category',
            'menus' => $this->menuService->getParent()
        ]);
    }

    public function store(CreateFormRequest $request){
        $this->menuService->create($request);

        return redirect()->back();
    }

    
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('Articles.index' , compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {

        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        if($request->hasFile('img')){
            $data['img'] = $request->file('img')->store('img' , 'public');
        }

        
       
        Article::create($data);
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('Articles.show' , ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('Articles.edit' , ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
     
        $name = $request->name ?? $article->name;    
        $description = $request->description ?? $article->description;

        $data = [
                    'name' => $name,
                    'description' => $description,
                ];

                if($request->hasFile('img')){
                    $data['img'] = $request->file('img')->store('img' , 'public');
                }

                
            
                $article->update($data);
                return redirect()->route('article.index');
        
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('message', 'Articolo eliminato');
    }
}

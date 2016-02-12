<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;


//Classes
use App\Product;
use App\Category;
use PDF;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	

		$categories = Category::all();
		return view('app.home', compact('categories'));
		//return view('app.prueba');

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$product = new Product;
		$categories = Category::lists('name','id');

		return view('app.product.create', compact('categories', 'product'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductRequest $request)
	{

		Product::create($request->all());
		return redirect()->route('products.index')->with('message','El producto ' . $request->input('name') .  ' se creo correctamente. ');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::findOrFail($id);
		//$category = Category::findOrFail($product->category_id);
		$categories = Category::lists('name','id');
		//$categoryProduct = [$product->category_id => $category->name ] ;

		return view('app.product.edit', compact('categories', 'product'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ProductRequest $request, $id)
	{
		//return "mod";
		Product::findOrFail($id)->update($request->all());
		return redirect()->route('products.index')->with('message','El producto ' . $request->input('name') .  ' se actualizó correctamente. ');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//Product::destroy($id);
		return $response = [
			'status' => 'removed ' . $id
		];
	}

	//Get all products
	public function all($category = null)
	{

		if($category != null)
		{
			return Product::where('category_id',$category)->get();
		}

		return Product::all();
	}

	public function chart()
	{
		return view('app.chart');
	}

	public function getChartBestSales()
	{
		$products =  Product::select('name','sales')->orderBy('sales','desc')->take(10)->get();

		// $labels = [];
		// $values = [];

		foreach($products as $product)
		{
			$labels[] = $product->name;
			$values[] = $product->sales;
		}

		return $response = [
			'labels' => $labels,
			'values' => $values
		];
	}

	public function pdf()
	{
		$products = Product::orderBy('name')->get();
		//return view('app.pdf',compact('products'));
		$pdf = PDF::loadView('app.pdf', compact('products') );
		return $pdf->download('Listado_Productos.pdf');
	}


}

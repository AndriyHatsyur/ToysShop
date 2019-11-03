<?php


namespace App\Exsports;



use App\Models\Product;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return Product::all()->load('category');
    }

    public function map($product) : array {
        return [
            $product->id,
            $product->code,
            $product->name,
            $product->image,
            $product->price,
            $product->sale,
            $product->price_opt,
            $product->description,
            $product->in_stock ? '+' : '-',
            $product->article,
            $product->manufacturer,
            $product->size,
            $product->country,
            $product->type,
            $product->category->name

        ] ;


    }

    public function headings() : array {
        return [
            'ID',
            'Код',
            'Наименование сайта',
            'Фотографии',
            'Цена',
            'Скидка',
            'Цена опт',
            'Дополнительное описание номенклатуры',
            'Активный',
            'Артикул',
            'Производитель',
            'Размер',
            'Страна производитель',
            'Тип',
            'Иерархия сайта',

        ] ;
    }
}
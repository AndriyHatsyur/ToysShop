<?php


namespace App\Exsports;


use App\Models\Product;
use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Helpers\TranslitConverter;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProductImport implements  WithHeadingRow, ToCollection
{

    public function collection(Collection $rows)
    {

        foreach ($rows as $row)
        {

            $slug = TranslitConverter::toTranslit($row['naimenovanie_sayta']) . '_' . $row['kod'];
            Product::updateOrCreate(
                ['code'  => $row['kod']],
                [
                    'name' => $row['naimenovanie_sayta'],
                    'slug' => $slug,
                    'image' => $row['fotografii'],
                    'price' => $row['tsena'],
                    'sale' => isset($row['skidka']) ? $row['skidka'] : 0,
                    'price_opt' => $row['tsena_opt'],
                    'description' => $row['dopolnitelnoe_opisanie_nomenklatury'],
                    'in_stock' => $row['aktivnyy'] == '+'? true: false,
                    'article' => $row['artikul'],
                    'manufacturer' => $row['proizvoditel'],
                    'size' => $row['razmer'],
                    'country' => $row['strana_proizvoditel'],
                    'type' => $row['tip'],
                    'category_id' => $this->getCategoryID($row['ierarkhiya_sayta'])

                ]
            );
        }


    }

    private function getCategoryID($name)
    {

        $category =  Category::firstOrCreate([
            'name' => $name,
            'slug' => TranslitConverter::toTranslit($name)

        ]);

        return $category->id;
    }


}
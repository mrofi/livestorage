<?php

return [
	'dateformat' => ENV('LIVESTORAGE_DATEFORMAT', 'dd-mm-yyyy'),
	'phpdateformat' => ENV('LIVESTORAGE_PHPDATEFORMAT', 'd-m-Y'),
	'phpdatetimeformat' => ENV('LIVESTORAGE_PHPDATETIMEFORMAT', 'd-m-Y H:i:s'),
    'subfolder' => ENV('LIVESTORAGE_SUBFOLDER', ''),
    'useremail' => ENV('LIVESTORAGE_USEREMAIL', true),
    'frontend' => ENV('LIVESTORAGE_FRONTEND', false),
    'salt' => ENV('LIVESTORAGE_SALT', '##SALT##__password__##SALT##'), //this_just_example_salt__password__to_make_strong    
    'theme' => ENV('LIVESTORAGE_THEME', 'AdminLTE'),
    'company' => ENV('LIVESTORAGE_COMPANY', 'PT Hiret Web Indonesia'),
    'companyaddress' => ENV('LIVESTORAGE_COMPANY_ADDRESS', 'Jl. Jendral Sudirman 146 Batang, <br>Jawa Tengah - Indonesia, 51211 '),
    'title' => ENV('LIVESTORAGE_TITLE', 'Live <b>STORAGE</b> App'),
    'shorttitle' => ENV('LIVESTORAGE_SHORTTITLE', 'L<b>S</b>A'),

    'percentToShop' => 20,  // from Profit
    'percentToCustomer' => 50,  // from customer allocation
    
    'model' => [
	    'product' => [
		    'attributes' => [
		        'name' => 'Nama Produk',
		        'category_id' => 'Kategori',
		        'brand_id' => 'Merk',
		        'unit' => 'Satuan',
		        'purchase_price' => 'Harga Beli',
		        'selling_price' => 'Harga Jual'
		    ],

		    'init_data' => [
		        'name' => '', 
		        'category_id' => '1', 
		        'brand_id' => '1', 
		        'min_stock' => '0', 
		        'init_stock' => '0', 
		        'purchase_price' => '0', 
		        'selling_price' => '0', 
		        'active' => '1', 
		        'unit' => 'pcs',
		        'multi_unit' => '0',
		        'multi_price' => '0',
		    ], 
	    ],
    ],
];
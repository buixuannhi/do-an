<?php 
return [
    [
        'label'=> 'Home', 
        'icon'=>' fa-home',
    ],
    [
        'label'=> 'quản lý danh mục', 
        'icon'=>' fa-copy',
        'items'=>[
                   [
                   'label'=> 'danh sách',
                   'route'=>'admin.category.listcategory',
                   'icon'=>'  fa-circle',
                   ],
                   [
                    'label'=> 'thêm mới',
                    'route'=>'admin.category.addcategory',
                    'icon'=>'  fa-circle',
                   ]
                    
        ]
   ],
    [
        'label'=> 'quản lý sản phẩm',  
        'icon'=>' fa-copy',
        'items'=>[
                   [
                   'label'=> 'danh sách',
                   'route'=>'admin.product.listProduct',
                   'icon'=>'  fa-circle',
                   ],
                   [
                    'label'=> 'thêm mới',
                    'route'=>'admin.product.AddProduct',
                    'icon'=>'  fa-circle',
                   ]
                    
        ]
    ],
    [
        'label'=> 'quản lý nhã hàng',   
        'icon'=>' fa-copy',
        'items'=>[
                   [
                   'label'=> 'danh sách',
                   'route'=>'admin.Brand.ListBrand',
                   'icon'=>'  fa-circle',
                   ],
                   [
                    'label'=> 'thêm mới',
                    'route'=>'admin.Brand.AddBrand',
                    'icon'=>'  fa-circle',
                   ]
                    
        ]
    ],
]

?>
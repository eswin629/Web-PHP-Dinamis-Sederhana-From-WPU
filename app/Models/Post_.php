<?php

namespace App\Models;

class Post{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Eswin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro officia numquam nam dolores iure maxime ullam rem! Magni harum, sit molestias, eveniet tempore aliquam iusto architecto quaerat beatae numquam, obcaecati itaque provident nemo laborum? Nostrum quisquam rem deserunt, amet exercitationem saepe quod asperiores repellat iusto at sed? Corrupti voluptas necessitatibus labore perferendis illum accusamus corporis nulla ut at asperiores! Repellat veritatis rem expedita molestias. Cumque, recusandae? Inventore, minus quam perspiciatis ipsa placeat voluptates rerum quod corrupti, totam earum nam ducimus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jack",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati aperiam, delectus praesentium vitae animi illo illum, nostrum sed eligendi, ratione aliquid eum possimus! Id labore magni earum ullam asperiores beatae deserunt porro praesentium exercitationem sit ipsum necessitatibus quis quidem distinctio odio corporis quos facilis pariatur molestiae, nam accusantium natus ducimus. Quis rerum ad temporibus praesentium adipisci autem commodi repudiandae vitae expedita consequatur consectetur ex explicabo error animi, porro fuga magni sint natus ipsa exercitationem veritatis qui? Explicabo nisi esse illo quisquam, debitis dolorum. In nostrum ratione repellat maiores? Minima velit eius voluptas consequuntur, perferendis similique odit unde. Fugiat, odio porro."
        ]
        ];

    public static function all()
    {
        return collect(self::$blog_post);
    }    
    
    public static function find($slug)
    {
        $post = static::all();
        // $post = [];    
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //  }
        // }
        return $post->firstWhere('slug',$slug);
    }
}

?>
<?php  
interface Search
{
    public function all();
}

Class User implements Search
{
    public function all()
    {
        return 'Obteniendo a los usuarios, XML';
    }
}
class Post implements Search
{
    public function all()
    {
        return 'Obteniendo a los posts, JSON';
    }
}

$user = new User();
echo $user->all();

$post = new Post();
echo $post->all();
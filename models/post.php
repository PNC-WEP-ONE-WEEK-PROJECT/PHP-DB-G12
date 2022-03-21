
<?php
// database 
require_once("database.php");

/**
 * Get all items
 * return array of items
 */
function getItems()
{
    global $db;
    $statement = $db->query("SELECT * FROM users_post WHERE post_id IS NOT NULL ORDER BY post_id DESC;");
    $items = $statement->fetchAll();
    return $items;
}

/**
 * Remove item related to given item id
 * @param integer $id :  the id of the item to delete
 
 * @return boolean: true if deletion was successful, false otherwise
 */

function deleteItem($id)
{
    global $db;
    $statement = $db->prepare("DELETE FROM posts WHERE post_id = :id");
    $statement->execute([
        ':id' => $id
    ]);
    return ($statement->rowCount()==1);
}

function getPicName($id) {
    global $db;
    $statement = $db->prepare("SELECT image FROM posts WHERE post_id= :id limit 1"); 
    $statement -> execute([
        'id' => $id
    ]);
 
    $img_name = $statement->fetch();
    return $img_name;
}
function deletePicFromFolder($img_name) {
    $file_img = '../images/'. $img_name['image'] ;
    unlink($file_img);
}

/**
 * Get a single post
 * @param integer $id : the post id
 
 * @return associative_array: the post related to given post id
 */
function getPostById($id)
{
    global $db;
    $statement = $db->prepare("SELECT post_description, image FROM users_post WHERE post_id=:id");
    $statement->execute([
        ':id' => $id
    ]);
    return $statement -> fetch();
}
/**
 * Update a Post given id and attibutes
 * @param integer $id :  		the id of the post to update
 * @param string  $item_name :  the item name
 * @param integer $price :  	the item price
 * 
 
 * @return boolean: true if deletion was successful, false otherwise
 */
function updatePost($id, $post_description, $post_image)
{
    global $db;
    $statement = $db->prepare("UPDATE users_post SET post_description=:post_description, image=:post_image WHERE post_id=:id");
    $statement->execute([
        ':post_description'=> $post_description,
        ':post_image'=>$post_image,
        ':id'=>$id
    ]);
    return ($statement->rowCount() == 1);
}


function createAcc($first_name, $last_name, $phone, $email, $country, $date_of_birth, $gender, $password,$create_date)
{
    global $db;
    $statement = $db->prepare("INSERT INTO users (first_name,last_name,phone,email,country,date_of_birth,gender,password,create_date) SELECT * FROM (SELECT :first_name, :last_name, :phone_number, :email_address, :country, :date_of_birth, :gender, :password, :create_date) AS tmp WHERE NOT EXISTS (SELECT user_id FROM users WHERE email = :email_address)  ");
    $statement->execute([
        ':first_name'=> $first_name,
        ':last_name'=> $last_name,
        ':phone_number'=>$phone,
        ':email_address'=>$email,
        ':country'=>$country,
        ':date_of_birth'=>$date_of_birth,
        ':gender'=>$gender,
        ':password'=>$password,
        ':create_date'=>$create_date
    ]);
    return ($statement->rowCount() == 1);
}





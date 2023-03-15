<?php
class Article
{
    public $id;
    private $text;
    private $picture;
    private $id_utilisateur;
    private $date;
    public $conn;


    public function __construct($id, $text, $picture, $id_utilisateur)
    {
        $this->id = $id;
        $this->text = $text;
        $this->picture = $picture;
        $this->id_utilisateur = $id_utilisateur;
        $this->date = date('Y-m-d H:i:s');
        $this->conn = new mysqli("localhost", "root", "", "blog-js");

        // $this->conn = new mysqli("localhost", "ToDoList123", "1M2y5es3~", "ben-david-alon_to_do_list");

        if (!$this->conn) {
            echo "db connection failed";
        }
    }

    public function fetchTask($usrId)
    {
        $stmt = $this->conn->prepare("SELECT * FROM tasks where id_utilisateur = ?");
        $stmt->bind_param('i', $usrId);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // var_dump($data);
        echo json_encode($data);
        // return $data;
    }
    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM tasks WHERE id = ?");
        $stmt->bind_param("s", $id);
        if ($stmt->execute()) {

            echo "task deleted";
            return true;
        } else {
            echo "task delete faild!";
            return false;
        }
    }
    public function createArticle()
    {
        // Assume that $mysqli is a mysqli object representing your database connection

        // Prepare the SQL statement with placeholders for the values to be inserted
        $stmt = $this->conn->prepare("INSERT INTO articles (text, picture, id_utilisateur, date) VALUES (?, ?, ?, ?)");

        // Bind the values to the placeholders in the SQL statement
        $stmt->bind_param("ssis", $this->text, $picture_path, $this->id_utilisateur, $this->date);

        // Set the values of the variables
        // $date = date('Y-m-d H:i:s'); // current date and time

        // Upload picture to server and set the picture path to the uploaded file
        if (isset($this->picture) && $this->picture['error'] == 0) {
            $picture_name = $this->picture['name'];
            $picture_tmp_name = $this->picture['tmp_name'];
            $picture_size = $this->picture['size'];
            $picture_type = $this->picture['type'];

            // Upload picture to server
            move_uploaded_file($picture_tmp_name, 'uploads/' . $picture_name);

            // Set the picture path to the uploaded file
            $picture_path = 'uploads/' . $picture_name;
        } else {
            // If picture file is not present, set the picture path to NULL
            $picture_path = NULL;
        }

        // Execute the prepared statement to insert the article into the database
        $stmt->execute();

        // Check if the statement was executed successfully
        if ($stmt->affected_rows > 0) {
            echo "Article inserted successfully!";
        } else {
            echo "Error inserting article.";
        }

        // Close the statement and database connection
        $stmt->close();
        $this->conn->close();
    }

    ////////////////////////////////////////////////////////////
    // need to fix it to be able to fetch the articls
    ///////////////////////////////////////////////////////////////
    public  function getArticles()
    {
        $stmt = $this->conn->prepare("SELECT id, text, picture, id_utilisateur, date FROM articles LIMIT 5 , 2 ");
        $stmt->execute();
        $result = $stmt->get_result();
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $stmt->close();
        // return json_encode($data);
        return $data;
    }
}

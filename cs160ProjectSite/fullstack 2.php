<?php 
include("dbconnect.php"); ?>

	
 <?php
$sql = "select * from education";
$result = mysqli_query($conn, $sql);

if ($result)
{
echo '<table border="1" style="width:100%">';
echo '<th>', "ID", '</th>';
echo '<th>', "Title", '</th>';
echo '<th>', "Description", '</th>';
echo '<th>', "lesson_link", '</th>';
echo '<th>', "lesson_image", '</th>';
echo '<th>', "category", '</th>';
echo '<th>', "student_grades", '</th>';
echo '<th>', "author", '</th>';
echo '<th>', "content_type", '</th>';
echo '<th>', "time_scraped", '</th>';


while (list($id, $title, $description, $lesson_link, $lesson_image, $category, $student_grades, $author, $content_type, $time_scraped) = mysqli_fetch_array($result))
        {
      echo '<tr>';
      echo '<td>', $id, '</td>';  
      echo '<td>', $title, '</td>';  
      echo '<td>', $description, '</td>';
      echo '<td>', $lesson_link, '</td>';  
      echo '<td>', '<img src = $lesson_image', '</td>';  
      echo '<td>', $category, '</td>';  
      echo '<td>', $student_grades, '</td>';  
      echo '<td>', $author, '</td>';  
      echo '<td>', $content_type, '</td>';  
      echo '<td>', $time_scraped, '</td>';    
      echo '</tr>';
        
        }

echo '</table>';
}

?>


<?php
/**
 * @package feedback_plugin
 */
/*
Plugin Name: feedback
Description: A plugin to create a feedback form
Version: 1.0.0
Author: Lamia 
License: GPLv2 or later
Text Domain: feedback
*/

/*
    this program is free software; you can redistribute it and/or 
    modify it under the terms of the gnu general public license 
    as published by the free software foundation; either version 2 
    of the license, or (at your option) any later version.
    this program is distributed in the hope that it will be useful,
    but without any warranty; without even the implied warranty of
    merchantability or fitness for a particular purpose.  see the
    gnu general public license for more details.
    you should have received a copy of the gnu general public license
    along with this program; if not, write to the free software
    foundation, inc., 51 franklin street, fifth floor, boston, ma  02110-1301, usa.
    or see <http://www.gnu.org/licenses/>.
    copyright (c) 2023 snoow plugin
*/

// Check if ABSPATH is defined and exit if not
if (!defined('ABSPATH')) {
  exit;
}

// Save feedback data to the database
// Prepare SQL statement and execute it when form is submitted
function save_feedback() {
  $dbhost = 'localhost';
  $dbname = 'feedback';
  $dbuser = 'root';
  $dbpass = '';
  $db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $note = $_POST['note'];
    $suggestion = $_POST['suggestion'];
    $stmt = $db->prepare("INSERT INTO feedbackt (name, note, suggestion) VALUES (:name, :note, :suggestion)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':note', $note);
    $stmt->bindParam(':suggestion', $suggestion);
    $stmt->execute();
    echo "Form data submitted successfully!";
  }
}

add_action( 'init', 'save_feedback' );

function feedback_form_shortcode() {
  ob_start();
  ?>
  <form method="post" action="" style="display:flex; flex-direction: column; justify-items:center; background-color: rgb(187 247 208); padding:2rem ;">
    <label for="name">name</label>
    <input type="text" name="name"  style="border-radius: 0.25rem; padding:1rem ; " >
    <br><br>
    <label for="note">Note obligatory:</label>
    <input type="number" name="note" min="0" max="5" required  style="border-radius: 0.25rem; padding:1rem ; " >
    <br><br>
    <label for="suggestion">suggestion</label>
    <textarea name="suggestion" rows="5" required style="border-radius: 0.25rem; padding:1rem ; "></textarea>
    <br><br>
    <input type="submit" name="submit" value="submit" style="border-radius: 0.25rem; padding:1rem ; ">
  </form>

  
  <?php
  return ob_get_clean();
}

add_shortcode( 'feedback_form', 'feedback_form_shortcode' );


function display_feedbacks_shortcode() {
  ob_start();

  $dbhost = 'localhost';
  $dbname = 'feedback';
  $dbuser = 'root';
  $dbpass = '';
  $db = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);

  $stmt = $db->query("SELECT * FROM feedbackt");
  $feedbacks = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach ($feedbacks as $feedback) {
    echo "<p><strong>Name:</strong> " . $feedback['name'] . "</p>";
    echo "<p><strong>Note:</strong> " . $feedback['note'] . "</p>";
    echo "<p><strong>Suggestion:</strong> " . $feedback['suggestion'] . "</p>";
    echo "<hr>";
  }

  return ob_get_clean();
}
add_shortcode( 'display_feedbacks', 'display_feedbacks_shortcode' );












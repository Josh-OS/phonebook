
<?php
// include 'extra.php';

$contents = file_get_contents('phonebook2.csv');
$entry = [];
$display = null;

// csv2ray($contents);

foreach(explode("\n", $contents) as $content) {
    [$firstName, $lastName, $gender, $birthdate, $id] = explode(',', $content);

    if ($id == $_GET['edit']) { //matching id

        $display = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'gender' => $gender,
            'birthdate' => $birthdate,
            'id' => $id,
             ];
             
    }
}

?>


<h3>Edit</h3>
<form action="update.php" method="POST">
        <div>
            <label>Firstname</label>
            <input type="text" name="first_name" value="<?php echo $display['first_name'] ?>">
        </div>
        <div>
            <label>Lastname</label>
            <input type="text" name="last_name" value="<?php echo $display['last_name'] ?>">
        </div>
        <div>
            <label>Gender</label>
            <input type="text" name="gender" value="<?php echo $display['gender'] ?>">
        </div>
        <div>
            <label>Birthdate</label>
            <input type="text" name="birthdate" value="<?php echo $display['birthdate'] ?>">
        </div>
        <div>
        <input type="submit" value="Save">
        </div>
 </form>


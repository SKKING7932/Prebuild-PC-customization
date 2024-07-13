<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP JSON File CRUD (Create Read Update and Delete)</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="page-header text-center">PHP JSON File CRUD (Create Read Update and Delete)</h1>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-8">
                    <a href="newEmptyPHPWebPage2.php">Back</a>
                    <form method="POST">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id" name="id">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Firstname</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="firstname" name="firstname">
                            </div>
                        </div>
                        <input type="submit" name="save" value="Save" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-5"></div>
            </div>
        </div>

        <?php
        if (isset($_POST['save'])) {
            $id = $_POST['id'];
            $firstname = $_POST['firstname'];
            $data = file_get_contents('Notification.json');
            $data = json_decode($data);
            $input = array(
                'id' => $id,
                'firstname' => $firstname
            );
            $data[] = $input;
            $data = json_encode($data, JSON_PRETTY_PRINT);
        }
        ?>

        <!-- START: Notifications -->
        <div class="nk-gap"></div>
        <div class="nk-social-notifications-options">
            <select name="ProfessionType" class="form-control w-auto">
                <option value="Select" selected="selected">Select</option>
                <option value="Gaming">Gaming</option>
                <option value="Editing">Editing</option>
                <option value="Education">Education</option>
                <option value="Office">Office</option>
                <option value="Business">Business</option>
                <option value="Animation">Animation</option>
                <option value="Developer">Developer</option>
                <option value="Scientists and Engineers">Scientists and Engineers</option>
            </select>
            <button name="GetNotified" class="nk-btn link-effect-4">Get<br>Notification</button>
        </div>

        <div class="nk-gap"></div>

        <!-- END: Notifications -->
    </div>
    <div class="nk-gap-4"></div>
</div>
</div>
</div>
<div class="nk-gap-4"></div>
<div class="nk-gap-3"></div>
</div>
<?php
// Handleform  submission (no changes needed here)
if (isset($_POST['GetNotified'])) {
    $CustomerEmailID = $Emailid;
    $ProfessionType = $_POST['ProfessionType'];
    $data = file_get_contents('members.json');
    $data = json_decode($data);
    $input = array(
        'CustomerEmailID' => $CustomerEmailID,
        'ProfessionType' => $ProfessionType
    );
    $data[] = $input;
    $data = json_encode($data, JSON_PRETTY_PRINT);
    if (file_put_contents('members.json', $data)) {
        header('Refresh:2; url=store-account.php');
    }
}
?>
<?php
$data = file_get_contents('members.json');
$data = json_decode($data);

if ($data !== null) {
    $index = 0;
    foreach ($data as $row) {
        echo $row->id;

        $index++;
    }
} else {
    
}
?>
</body>
</html>

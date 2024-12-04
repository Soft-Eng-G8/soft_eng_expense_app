<?php
  print_r($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Expense</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Edit Expense</h1>
    <form method="POST">
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" required value=<?=$data['expense']['title']?>>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required value=<?=$data['expense']['amount']?>>
        <button type="submit">Edit Expense</button>
    </form>
</body>
</html>

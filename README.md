# ClonaStatus
## API - Usage

• Usage PHP: 

```php
<?php
  include ('StatusApi.php'); //Include php file
  use io\clonalejandro\StatusApi; // Import a StatusApi class

  $req = new StatusApi('clonalejandro.me');

  if ($req->isOnline()) echo "Online";
  else echo "Offline";
?>
```
<br>

• Usage HTML: 

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interpreter</title>
</head>
<body>

<script src="interpreter.js"></script>
<script>
    new Interpreter();
</script>
</body>
</html>
```
<br>





![picture](https://i.imgur.com/1mIWzya.png)


## Copyright ©
#### Developed by clonalejandro

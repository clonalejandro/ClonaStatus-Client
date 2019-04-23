# ClonaStatus
## API - Usage

• Usage PHP: 

```php
<?php
  include ('StatusApi.php'); //Include php file
  use io\clonalejandro\StatusApi; // Import a StatusApi class

  $req = new StatusApi('domaintosearch.com');

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
    <title>StatusApi</title>
</head>
<body>

<script src="StatusApi.js"></script>
<script>
    const api = new StatusApi('domaintosearch.com');
    
    api.getRequest((err, data) => {
            if (err) console.error(err);
            else alert(data);
     });
</script>
</body>
</html>
```
<br>





![picture](https://i.imgur.com/1mIWzya.png)


## Copyright ©
#### Developed by clonalejandro

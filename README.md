 

INSTALLATION
------------

### Install via Composer
1) composer update
2) db.php database connect (I used latest docker MySQL 5.7.* )
3) php yii serve
4)
run next commands in terminal:

 - with bug:
curl  -H "Content-Type: application/json"    http://127.0.0.1:8080/place

 - with modified PlaceNew::fields()
curl  -H "Content-Type: application/json"    http://127.0.0.1:8080/place-new 
 
 
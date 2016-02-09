# PHP class alphanum.class.php
Convert **int** to **alphanumeric** hash of any base, you wants, and back

Simple inlcude class, and use as:

**AlphaNum::encode($num)**

and parse back:

**AlphaNum::parse($alphanum)**
or synonim `AlphaNum::decode($alphanum)`

###Example
```
$num=900800700;
print '$num: '.$num.PHP_EOL;
print $alphanum=AlphaNum::encode($num).PHP_EOL;
print AlphaNum::parse($alphanum).PHP_EOL;
```
outputs:
```
$num: 900800700
$alphanum: 19vnq0
900800700
```

####Overwrite default alphabet
```
new AlphaNum('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'); // overwrite default alphabet
$num=900800700;
print '$num: '.$num.PHP_EOL;
print $alphanum=AlphaNum::encode($num).PHP_EOL;
print AlphaNum::parse($alphanum).PHP_EOL;
```

outputs:
```
$num: 900800700
$alphanum: YXFpy
900800700
```

Also there is [JavaScript version](https://github.com/ershov-ilya/alphanum.js) of this module

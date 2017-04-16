# Bitcoin Ticker

bitcoinTicker.php. A PHP script that helps you grab the latest bitcoin prices (in USD) from top exchanges.

## Installation: 
Include the following line somewhere in your php script.
```php
include_once 'path/to/bitcoinTicker.php';
```


## Available Functions:
Each of the following functions returns the latest EUR value of one Bitcoin on the given exchange or price index. The functions are named after the excanhges, be careful of exchanges with similar sounding names.

* coindeskBPI()
* bitStamp()
* kraken()



## Usage:
The following is a simple script that includes the bitcoinTicker.php and then prints the latest Coindesk Bitcoin Price Index

```php
<?php
// Include the bitcoinTicker file
include_once('bitcoinTicker.php');

// Print the coindeskBPI
print_r(coindeskBPI());
?>

```

Output:
```
1119.51
```


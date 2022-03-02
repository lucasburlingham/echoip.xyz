# echoip.xyz

**Echo your public IP address with a very simple cURL request**

### Command: 
```sh
curl https://<serveraddr>/
```

### Sample output:
```txt
93.184.216.34
```

*or*

```txt
["93.184.216.34"]
```



## API parameters (optional):

* All parameters are optional. *

Set the GET parameter `type` to get a specific data format. Currently supported values are:
 - `JSON`
 - `TEXT`

Please note that the `type` parameter is not case sensitive.

 Example:

 ```sh
curl https://<serveraddr>/?type=JSON
```

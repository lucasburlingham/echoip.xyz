# echoip.xyz 

[![Wakatime](https://wakatime.com/badge/user/7e1905d0-e3a0-4cd1-8818-1f7978dac4fb/project/9687dc49-1cff-4344-8f7a-666155f03214.svg)](https://wakatime.com/badge/user/7e1905d0-e3a0-4cd1-8818-1f7978dac4fb/project/9687dc49-1cff-4344-8f7a-666155f03214)

**Echo your public IP address with a very simple cURL request**

### Command: 
```sh
curl https://echoip.xyz/
```

*or*

```sh
curl echoip.xyz
```

### Sample output:
```txt
93.184.216.34
```

*or*

```txt
["93.184.216.34"]
```



## Optional parameters:


Set the GET parameter `type` to get a specific data format. Currently supported values are:
 - `JSON`
 - `TEXT`

Please note that the `type` parameter is not case sensitive.

 Example:

 ```sh
curl https://echoip.xyz/?type=JSON
```

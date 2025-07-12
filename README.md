# EchoIP 

[![Wakatime](https://wakatime.com/badge/user/7e1905d0-e3a0-4cd1-8818-1f7978dac4fb/project/9687dc49-1cff-4344-8f7a-666155f03214.svg)](https://wakatime.com/badge/user/7e1905d0-e3a0-4cd1-8818-1f7978dac4fb/project/9687dc49-1cff-4344-8f7a-666155f03214)

**Echo your public IP address with a very simple cURL request**

### Command: 
```sh
curl https://echoip.yourhostname.com/
```

*or*

```sh
curl echoip.yourhostname.com
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
curl https://echoip.yourhostname.com/?type=JSON
```

## Deploy with Docker

Clone the repository and run the image:

```sh
git clone https://github.com/lucasburlingham/echoip.xyz
cd echoip.xyz
docker-compose up -d
```

If you want to use a different port, change the `.env` file to use a different port.

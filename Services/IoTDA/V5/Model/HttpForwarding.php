<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  **参数说明**：用于接收满足规则条件数据的http服务器地址。
    * certId  **参数说明**：证书id，请参见[获取证书ID](https://support.huaweicloud.com/usermanual-iothub/iot_01_0001.html#section3)
    * cnName  **参数说明**：当sni_enable为true时，此字段需要填写，内容为将要请求的服务端证书的域名,举例:www.example.com:8443;当sni_enbale为false时，此字段默认不填写。
    * sniEnable  **参数说明**：需要https服务端和客户端都支持此功能，默认为false，设成true表明Https的客户端在发起请求时，需要携带cn_name；https服务端根据cn_name返回对应的证书；设为false可关闭此功能。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'certId' => 'string',
            'cnName' => 'string',
            'sniEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  **参数说明**：用于接收满足规则条件数据的http服务器地址。
    * certId  **参数说明**：证书id，请参见[获取证书ID](https://support.huaweicloud.com/usermanual-iothub/iot_01_0001.html#section3)
    * cnName  **参数说明**：当sni_enable为true时，此字段需要填写，内容为将要请求的服务端证书的域名,举例:www.example.com:8443;当sni_enbale为false时，此字段默认不填写。
    * sniEnable  **参数说明**：需要https服务端和客户端都支持此功能，默认为false，设成true表明Https的客户端在发起请求时，需要携带cn_name；https服务端根据cn_name返回对应的证书；设为false可关闭此功能。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'certId' => null,
        'cnName' => null,
        'sniEnable' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * url  **参数说明**：用于接收满足规则条件数据的http服务器地址。
    * certId  **参数说明**：证书id，请参见[获取证书ID](https://support.huaweicloud.com/usermanual-iothub/iot_01_0001.html#section3)
    * cnName  **参数说明**：当sni_enable为true时，此字段需要填写，内容为将要请求的服务端证书的域名,举例:www.example.com:8443;当sni_enbale为false时，此字段默认不填写。
    * sniEnable  **参数说明**：需要https服务端和客户端都支持此功能，默认为false，设成true表明Https的客户端在发起请求时，需要携带cn_name；https服务端根据cn_name返回对应的证书；设为false可关闭此功能。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'certId' => 'cert_id',
            'cnName' => 'cn_name',
            'sniEnable' => 'sni_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  **参数说明**：用于接收满足规则条件数据的http服务器地址。
    * certId  **参数说明**：证书id，请参见[获取证书ID](https://support.huaweicloud.com/usermanual-iothub/iot_01_0001.html#section3)
    * cnName  **参数说明**：当sni_enable为true时，此字段需要填写，内容为将要请求的服务端证书的域名,举例:www.example.com:8443;当sni_enbale为false时，此字段默认不填写。
    * sniEnable  **参数说明**：需要https服务端和客户端都支持此功能，默认为false，设成true表明Https的客户端在发起请求时，需要携带cn_name；https服务端根据cn_name返回对应的证书；设为false可关闭此功能。
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'certId' => 'setCertId',
            'cnName' => 'setCnName',
            'sniEnable' => 'setSniEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  **参数说明**：用于接收满足规则条件数据的http服务器地址。
    * certId  **参数说明**：证书id，请参见[获取证书ID](https://support.huaweicloud.com/usermanual-iothub/iot_01_0001.html#section3)
    * cnName  **参数说明**：当sni_enable为true时，此字段需要填写，内容为将要请求的服务端证书的域名,举例:www.example.com:8443;当sni_enbale为false时，此字段默认不填写。
    * sniEnable  **参数说明**：需要https服务端和客户端都支持此功能，默认为false，设成true表明Https的客户端在发起请求时，需要携带cn_name；https服务端根据cn_name返回对应的证书；设为false可关闭此功能。
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'certId' => 'getCertId',
            'cnName' => 'getCnName',
            'sniEnable' => 'getSniEnable'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['certId'] = isset($data['certId']) ? $data['certId'] : null;
        $this->container['cnName'] = isset($data['cnName']) ? $data['cnName'] : null;
        $this->container['sniEnable'] = isset($data['sniEnable']) ? $data['sniEnable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            if ((mb_strlen($this->container['url']) > 256)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) > 64)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) < 1)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cnName']) && (mb_strlen($this->container['cnName']) > 64)) {
                $invalidProperties[] = "invalid value for 'cnName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cnName']) && (mb_strlen($this->container['cnName']) < 1)) {
                $invalidProperties[] = "invalid value for 'cnName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cnName']) && !preg_match("/\\b((?!\\$)\\S)+\\b/", $this->container['cnName'])) {
                $invalidProperties[] = "invalid value for 'cnName', must be conform to the pattern /\\b((?!\\$)\\S)+\\b/.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets url
    *  **参数说明**：用于接收满足规则条件数据的http服务器地址。
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url **参数说明**：用于接收满足规则条件数据的http服务器地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets certId
    *  **参数说明**：证书id，请参见[获取证书ID](https://support.huaweicloud.com/usermanual-iothub/iot_01_0001.html#section3)
    *
    * @return string|null
    */
    public function getCertId()
    {
        return $this->container['certId'];
    }

    /**
    * Sets certId
    *
    * @param string|null $certId **参数说明**：证书id，请参见[获取证书ID](https://support.huaweicloud.com/usermanual-iothub/iot_01_0001.html#section3)
    *
    * @return $this
    */
    public function setCertId($certId)
    {
        $this->container['certId'] = $certId;
        return $this;
    }

    /**
    * Gets cnName
    *  **参数说明**：当sni_enable为true时，此字段需要填写，内容为将要请求的服务端证书的域名,举例:www.example.com:8443;当sni_enbale为false时，此字段默认不填写。
    *
    * @return string|null
    */
    public function getCnName()
    {
        return $this->container['cnName'];
    }

    /**
    * Sets cnName
    *
    * @param string|null $cnName **参数说明**：当sni_enable为true时，此字段需要填写，内容为将要请求的服务端证书的域名,举例:www.example.com:8443;当sni_enbale为false时，此字段默认不填写。
    *
    * @return $this
    */
    public function setCnName($cnName)
    {
        $this->container['cnName'] = $cnName;
        return $this;
    }

    /**
    * Gets sniEnable
    *  **参数说明**：需要https服务端和客户端都支持此功能，默认为false，设成true表明Https的客户端在发起请求时，需要携带cn_name；https服务端根据cn_name返回对应的证书；设为false可关闭此功能。
    *
    * @return bool|null
    */
    public function getSniEnable()
    {
        return $this->container['sniEnable'];
    }

    /**
    * Sets sniEnable
    *
    * @param bool|null $sniEnable **参数说明**：需要https服务端和客户端都支持此功能，默认为false，设成true表明Https的客户端在发起请求时，需要携带cn_name；https服务端根据cn_name返回对应的证书；设为false可关闭此功能。
    *
    * @return $this
    */
    public function setSniEnable($sniEnable)
    {
        $this->container['sniEnable'] = $sniEnable;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


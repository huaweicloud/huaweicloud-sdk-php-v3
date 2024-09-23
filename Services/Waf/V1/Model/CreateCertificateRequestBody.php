<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCertificateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCertificateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  证书名称，证书名称只能由数字、字母、中划线、下划线和英文句点组成，长度不能超过256位字符
    * content  证书文件，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    * key  证书私钥，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'content' => 'string',
            'key' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  证书名称，证书名称只能由数字、字母、中划线、下划线和英文句点组成，长度不能超过256位字符
    * content  证书文件，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    * key  证书私钥，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'content' => null,
        'key' => null
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
    * name  证书名称，证书名称只能由数字、字母、中划线、下划线和英文句点组成，长度不能超过256位字符
    * content  证书文件，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    * key  证书私钥，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'content' => 'content',
            'key' => 'key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  证书名称，证书名称只能由数字、字母、中划线、下划线和英文句点组成，长度不能超过256位字符
    * content  证书文件，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    * key  证书私钥，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'content' => 'setContent',
            'key' => 'setKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  证书名称，证书名称只能由数字、字母、中划线、下划线和英文句点组成，长度不能超过256位字符
    * content  证书文件，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    * key  证书私钥，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'content' => 'getContent',
            'key' => 'getKey'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
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
    * Gets name
    *  证书名称，证书名称只能由数字、字母、中划线、下划线和英文句点组成，长度不能超过256位字符
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 证书名称，证书名称只能由数字、字母、中划线、下划线和英文句点组成，长度不能超过256位字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets content
    *  证书文件，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 证书文件，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets key
    *  证书私钥，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 证书私钥，仅支持PEM格式的证书和私钥文件，且文件中的换行符应以\\n替换，如请求示例所示
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
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


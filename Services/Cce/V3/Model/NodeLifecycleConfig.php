<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeLifecycleConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeLifecycleConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * preInstall  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    * postInstall  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'preInstall' => 'string',
            'postInstall' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * preInstall  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    * postInstall  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'preInstall' => null,
        'postInstall' => null
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
    * preInstall  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    * postInstall  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'preInstall' => 'preInstall',
            'postInstall' => 'postInstall'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * preInstall  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    * postInstall  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @var string[]
    */
    protected static $setters = [
            'preInstall' => 'setPreInstall',
            'postInstall' => 'setPostInstall'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * preInstall  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    * postInstall  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @var string[]
    */
    protected static $getters = [
            'preInstall' => 'getPreInstall',
            'postInstall' => 'getPostInstall'
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
        $this->container['preInstall'] = isset($data['preInstall']) ? $data['preInstall'] : null;
        $this->container['postInstall'] = isset($data['postInstall']) ? $data['postInstall'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['preInstall']) && (mb_strlen($this->container['preInstall']) > 2048)) {
                $invalidProperties[] = "invalid value for 'preInstall', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['postInstall']) && (mb_strlen($this->container['postInstall']) > 2048)) {
                $invalidProperties[] = "invalid value for 'postInstall', the character length must be smaller than or equal to 2048.";
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
    * Gets preInstall
    *  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @return string|null
    */
    public function getPreInstall()
    {
        return $this->container['preInstall'];
    }

    /**
    * Sets preInstall
    *
    * @param string|null $preInstall 安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @return $this
    */
    public function setPreInstall($preInstall)
    {
        $this->container['preInstall'] = $preInstall;
        return $this;
    }

    /**
    * Gets postInstall
    *  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @return string|null
    */
    public function getPostInstall()
    {
        return $this->container['postInstall'];
    }

    /**
    * Sets postInstall
    *
    * @param string|null $postInstall 安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @return $this
    */
    public function setPostInstall($postInstall)
    {
        $this->container['postInstall'] = $postInstall;
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


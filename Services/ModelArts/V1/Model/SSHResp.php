<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SSHResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SSHResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyPairNames  SSH密钥对名称，可以在云服务器控制台（ECS）“密钥对”页面创建和查看。
    * taskUrls  SSH连接地址信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyPairNames' => 'string[]',
            'taskUrls' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskUrls[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyPairNames  SSH密钥对名称，可以在云服务器控制台（ECS）“密钥对”页面创建和查看。
    * taskUrls  SSH连接地址信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyPairNames' => null,
        'taskUrls' => null
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
    * keyPairNames  SSH密钥对名称，可以在云服务器控制台（ECS）“密钥对”页面创建和查看。
    * taskUrls  SSH连接地址信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyPairNames' => 'key_pair_names',
            'taskUrls' => 'task_urls'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyPairNames  SSH密钥对名称，可以在云服务器控制台（ECS）“密钥对”页面创建和查看。
    * taskUrls  SSH连接地址信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyPairNames' => 'setKeyPairNames',
            'taskUrls' => 'setTaskUrls'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyPairNames  SSH密钥对名称，可以在云服务器控制台（ECS）“密钥对”页面创建和查看。
    * taskUrls  SSH连接地址信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyPairNames' => 'getKeyPairNames',
            'taskUrls' => 'getTaskUrls'
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
        $this->container['keyPairNames'] = isset($data['keyPairNames']) ? $data['keyPairNames'] : null;
        $this->container['taskUrls'] = isset($data['taskUrls']) ? $data['taskUrls'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keyPairNames'] === null) {
            $invalidProperties[] = "'keyPairNames' can't be null";
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
    * Gets keyPairNames
    *  SSH密钥对名称，可以在云服务器控制台（ECS）“密钥对”页面创建和查看。
    *
    * @return string[]
    */
    public function getKeyPairNames()
    {
        return $this->container['keyPairNames'];
    }

    /**
    * Sets keyPairNames
    *
    * @param string[] $keyPairNames SSH密钥对名称，可以在云服务器控制台（ECS）“密钥对”页面创建和查看。
    *
    * @return $this
    */
    public function setKeyPairNames($keyPairNames)
    {
        $this->container['keyPairNames'] = $keyPairNames;
        return $this;
    }

    /**
    * Gets taskUrls
    *  SSH连接地址信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskUrls[]|null
    */
    public function getTaskUrls()
    {
        return $this->container['taskUrls'];
    }

    /**
    * Sets taskUrls
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskUrls[]|null $taskUrls SSH连接地址信息。
    *
    * @return $this
    */
    public function setTaskUrls($taskUrls)
    {
        $this->container['taskUrls'] = $taskUrls;
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


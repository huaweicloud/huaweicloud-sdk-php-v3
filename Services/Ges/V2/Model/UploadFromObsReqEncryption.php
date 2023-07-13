<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadFromObsReqEncryption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadFromObsReq_encryption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  是否启动加密特性。
    * masterKeyId  对应的project下，华为云数据加密服务创建的用户主密钥ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'masterKeyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  是否启动加密特性。
    * masterKeyId  对应的project下，华为云数据加密服务创建的用户主密钥ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'masterKeyId' => null
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
    * enable  是否启动加密特性。
    * masterKeyId  对应的project下，华为云数据加密服务创建的用户主密钥ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'masterKeyId' => 'master_key_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  是否启动加密特性。
    * masterKeyId  对应的project下，华为云数据加密服务创建的用户主密钥ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'masterKeyId' => 'setMasterKeyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  是否启动加密特性。
    * masterKeyId  对应的project下，华为云数据加密服务创建的用户主密钥ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'masterKeyId' => 'getMasterKeyId'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['masterKeyId'] = isset($data['masterKeyId']) ? $data['masterKeyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets enable
    *  是否启动加密特性。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 是否启动加密特性。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets masterKeyId
    *  对应的project下，华为云数据加密服务创建的用户主密钥ID。
    *
    * @return string|null
    */
    public function getMasterKeyId()
    {
        return $this->container['masterKeyId'];
    }

    /**
    * Sets masterKeyId
    *
    * @param string|null $masterKeyId 对应的project下，华为云数据加密服务创建的用户主密钥ID。
    *
    * @return $this
    */
    public function setMasterKeyId($masterKeyId)
    {
        $this->container['masterKeyId'] = $masterKeyId;
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


<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Stage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Stage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  凭据的版本状态名称。  约束：最小长度1，最大长度64。
    * updateTime  凭据的版本状态更新的时间戳，时间戳，即从1970年1月1日至该时间的总秒数。
    * secretName  凭据名称。
    * versionId  凭据的版本号标识符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'updateTime' => 'int',
            'secretName' => 'string',
            'versionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  凭据的版本状态名称。  约束：最小长度1，最大长度64。
    * updateTime  凭据的版本状态更新的时间戳，时间戳，即从1970年1月1日至该时间的总秒数。
    * secretName  凭据名称。
    * versionId  凭据的版本号标识符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'updateTime' => 'int64',
        'secretName' => null,
        'versionId' => null
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
    * name  凭据的版本状态名称。  约束：最小长度1，最大长度64。
    * updateTime  凭据的版本状态更新的时间戳，时间戳，即从1970年1月1日至该时间的总秒数。
    * secretName  凭据名称。
    * versionId  凭据的版本号标识符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'updateTime' => 'update_time',
            'secretName' => 'secret_name',
            'versionId' => 'version_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  凭据的版本状态名称。  约束：最小长度1，最大长度64。
    * updateTime  凭据的版本状态更新的时间戳，时间戳，即从1970年1月1日至该时间的总秒数。
    * secretName  凭据名称。
    * versionId  凭据的版本号标识符。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'updateTime' => 'setUpdateTime',
            'secretName' => 'setSecretName',
            'versionId' => 'setVersionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  凭据的版本状态名称。  约束：最小长度1，最大长度64。
    * updateTime  凭据的版本状态更新的时间戳，时间戳，即从1970年1月1日至该时间的总秒数。
    * secretName  凭据名称。
    * versionId  凭据的版本号标识符。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'updateTime' => 'getUpdateTime',
            'secretName' => 'getSecretName',
            'versionId' => 'getVersionId'
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
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['secretName']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['secretName'])) {
                $invalidProperties[] = "invalid value for 'secretName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            if (!is_null($this->container['versionId']) && !preg_match("/^v[0-9]{0,63}/", $this->container['versionId'])) {
                $invalidProperties[] = "invalid value for 'versionId', must be conform to the pattern /^v[0-9]{0,63}/.";
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
    *  凭据的版本状态名称。  约束：最小长度1，最大长度64。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 凭据的版本状态名称。  约束：最小长度1，最大长度64。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets updateTime
    *  凭据的版本状态更新的时间戳，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 凭据的版本状态更新的时间戳，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets secretName
    *  凭据名称。
    *
    * @return string|null
    */
    public function getSecretName()
    {
        return $this->container['secretName'];
    }

    /**
    * Sets secretName
    *
    * @param string|null $secretName 凭据名称。
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets versionId
    *  凭据的版本号标识符。
    *
    * @return string|null
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string|null $versionId 凭据的版本号标识符。
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
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


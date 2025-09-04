<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAppsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAppsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appType  应用类型
    * providerType  应用来源
    * appId  应用ID
    * limit  每页记录数，默认值为10，取值区间为1-1000。
    * offset  查询的起始位置，取值范围为非负整数，默认为0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appType' => 'string',
            'providerType' => 'string',
            'appId' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appType  应用类型
    * providerType  应用来源
    * appId  应用ID
    * limit  每页记录数，默认值为10，取值区间为1-1000。
    * offset  查询的起始位置，取值范围为非负整数，默认为0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appType' => null,
        'providerType' => null,
        'appId' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * appType  应用类型
    * providerType  应用来源
    * appId  应用ID
    * limit  每页记录数，默认值为10，取值区间为1-1000。
    * offset  查询的起始位置，取值范围为非负整数，默认为0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appType' => 'app_type',
            'providerType' => 'provider_type',
            'appId' => 'app_id',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appType  应用类型
    * providerType  应用来源
    * appId  应用ID
    * limit  每页记录数，默认值为10，取值区间为1-1000。
    * offset  查询的起始位置，取值范围为非负整数，默认为0。
    *
    * @var string[]
    */
    protected static $setters = [
            'appType' => 'setAppType',
            'providerType' => 'setProviderType',
            'appId' => 'setAppId',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appType  应用类型
    * providerType  应用来源
    * appId  应用ID
    * limit  每页记录数，默认值为10，取值区间为1-1000。
    * offset  查询的起始位置，取值范围为非负整数，默认为0。
    *
    * @var string[]
    */
    protected static $getters = [
            'appType' => 'getAppType',
            'providerType' => 'getProviderType',
            'appId' => 'getAppId',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['providerType'] = isset($data['providerType']) ? $data['providerType'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) > 64)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) < 1)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appType']) && !preg_match("/(CloudService|Middleware|PlatformSoftware)/", $this->container['appType'])) {
                $invalidProperties[] = "invalid value for 'appType', must be conform to the pattern /(CloudService|Middleware|PlatformSoftware)/.";
            }
            if (!is_null($this->container['providerType']) && (mb_strlen($this->container['providerType']) > 64)) {
                $invalidProperties[] = "invalid value for 'providerType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['providerType']) && (mb_strlen($this->container['providerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'providerType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['providerType']) && !preg_match("/(SYS|USER)/", $this->container['providerType'])) {
                $invalidProperties[] = "invalid value for 'providerType', must be conform to the pattern /(SYS|USER)/.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets appType
    *  应用类型
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType 应用类型
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets providerType
    *  应用来源
    *
    * @return string|null
    */
    public function getProviderType()
    {
        return $this->container['providerType'];
    }

    /**
    * Sets providerType
    *
    * @param string|null $providerType 应用来源
    *
    * @return $this
    */
    public function setProviderType($providerType)
    {
        $this->container['providerType'] = $providerType;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets limit
    *  每页记录数，默认值为10，取值区间为1-1000。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页记录数，默认值为10，取值区间为1-1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  查询的起始位置，取值范围为非负整数，默认为0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 查询的起始位置，取值范围为非负整数，默认为0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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


<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourcePackageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourcePackageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源包ID。
    * engineName  引擎名称。
    * usedQuota  已使用配额。
    * totalQuota  总配额。
    * status  资源包状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'engineName' => 'string',
            'usedQuota' => 'int',
            'totalQuota' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源包ID。
    * engineName  引擎名称。
    * usedQuota  已使用配额。
    * totalQuota  总配额。
    * status  资源包状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'engineName' => null,
        'usedQuota' => 'int32',
        'totalQuota' => 'int32',
        'status' => null
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
    * resourceId  资源包ID。
    * engineName  引擎名称。
    * usedQuota  已使用配额。
    * totalQuota  总配额。
    * status  资源包状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'engineName' => 'engine_name',
            'usedQuota' => 'used_quota',
            'totalQuota' => 'total_quota',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源包ID。
    * engineName  引擎名称。
    * usedQuota  已使用配额。
    * totalQuota  总配额。
    * status  资源包状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'engineName' => 'setEngineName',
            'usedQuota' => 'setUsedQuota',
            'totalQuota' => 'setTotalQuota',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源包ID。
    * engineName  引擎名称。
    * usedQuota  已使用配额。
    * totalQuota  总配额。
    * status  资源包状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'engineName' => 'getEngineName',
            'usedQuota' => 'getUsedQuota',
            'totalQuota' => 'getTotalQuota',
            'status' => 'getStatus'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['usedQuota'] = isset($data['usedQuota']) ? $data['usedQuota'] : null;
        $this->container['totalQuota'] = isset($data['totalQuota']) ? $data['totalQuota'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets resourceId
    *  资源包ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源包ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名称。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 引擎名称。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets usedQuota
    *  已使用配额。
    *
    * @return int|null
    */
    public function getUsedQuota()
    {
        return $this->container['usedQuota'];
    }

    /**
    * Sets usedQuota
    *
    * @param int|null $usedQuota 已使用配额。
    *
    * @return $this
    */
    public function setUsedQuota($usedQuota)
    {
        $this->container['usedQuota'] = $usedQuota;
        return $this;
    }

    /**
    * Gets totalQuota
    *  总配额。
    *
    * @return int|null
    */
    public function getTotalQuota()
    {
        return $this->container['totalQuota'];
    }

    /**
    * Sets totalQuota
    *
    * @param int|null $totalQuota 总配额。
    *
    * @return $this
    */
    public function setTotalQuota($totalQuota)
    {
        $this->container['totalQuota'] = $totalQuota;
        return $this;
    }

    /**
    * Gets status
    *  资源包状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 资源包状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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


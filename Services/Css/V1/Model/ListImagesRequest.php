<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImagesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImagesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  待升级的集群的ID。
    * upgradeType  升级目标版本类型： - same：相同版本。 - cross： 跨版本。
    * start  指定查询起始值，默认值为0。
    * limit  指定查询个数，默认值为10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'upgradeType' => 'string',
            'start' => 'string',
            'limit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  待升级的集群的ID。
    * upgradeType  升级目标版本类型： - same：相同版本。 - cross： 跨版本。
    * start  指定查询起始值，默认值为0。
    * limit  指定查询个数，默认值为10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'upgradeType' => null,
        'start' => null,
        'limit' => null
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
    * clusterId  待升级的集群的ID。
    * upgradeType  升级目标版本类型： - same：相同版本。 - cross： 跨版本。
    * start  指定查询起始值，默认值为0。
    * limit  指定查询个数，默认值为10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'upgradeType' => 'upgrade_type',
            'start' => 'start',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  待升级的集群的ID。
    * upgradeType  升级目标版本类型： - same：相同版本。 - cross： 跨版本。
    * start  指定查询起始值，默认值为0。
    * limit  指定查询个数，默认值为10。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'upgradeType' => 'setUpgradeType',
            'start' => 'setStart',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  待升级的集群的ID。
    * upgradeType  升级目标版本类型： - same：相同版本。 - cross： 跨版本。
    * start  指定查询起始值，默认值为0。
    * limit  指定查询个数，默认值为10。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'upgradeType' => 'getUpgradeType',
            'start' => 'getStart',
            'limit' => 'getLimit'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['upgradeType'] = isset($data['upgradeType']) ? $data['upgradeType'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['upgradeType'] === null) {
            $invalidProperties[] = "'upgradeType' can't be null";
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
    * Gets clusterId
    *  待升级的集群的ID。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 待升级的集群的ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets upgradeType
    *  升级目标版本类型： - same：相同版本。 - cross： 跨版本。
    *
    * @return string
    */
    public function getUpgradeType()
    {
        return $this->container['upgradeType'];
    }

    /**
    * Sets upgradeType
    *
    * @param string $upgradeType 升级目标版本类型： - same：相同版本。 - cross： 跨版本。
    *
    * @return $this
    */
    public function setUpgradeType($upgradeType)
    {
        $this->container['upgradeType'] = $upgradeType;
        return $this;
    }

    /**
    * Gets start
    *  指定查询起始值，默认值为0。
    *
    * @return string|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string|null $start 指定查询起始值，默认值为0。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets limit
    *  指定查询个数，默认值为10。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 指定查询个数，默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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


<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTaskRequestBodyClusterScanInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTaskRequestBody_cluster_scan_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanTypeList  扫描项类型
    * rangeType  扫描范围类型，包含如下   - all_cluster：扫描所有符合扫描条件的集群   - specific_cluster: 扫描指定集群
    * clusterIdList  需要扫描的集群id列表，扫描范围类型为“specific_cluster”时必传
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanTypeList' => 'string[]',
            'rangeType' => 'string',
            'clusterIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanTypeList  扫描项类型
    * rangeType  扫描范围类型，包含如下   - all_cluster：扫描所有符合扫描条件的集群   - specific_cluster: 扫描指定集群
    * clusterIdList  需要扫描的集群id列表，扫描范围类型为“specific_cluster”时必传
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanTypeList' => null,
        'rangeType' => null,
        'clusterIdList' => null
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
    * scanTypeList  扫描项类型
    * rangeType  扫描范围类型，包含如下   - all_cluster：扫描所有符合扫描条件的集群   - specific_cluster: 扫描指定集群
    * clusterIdList  需要扫描的集群id列表，扫描范围类型为“specific_cluster”时必传
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanTypeList' => 'scan_type_list',
            'rangeType' => 'range_type',
            'clusterIdList' => 'cluster_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanTypeList  扫描项类型
    * rangeType  扫描范围类型，包含如下   - all_cluster：扫描所有符合扫描条件的集群   - specific_cluster: 扫描指定集群
    * clusterIdList  需要扫描的集群id列表，扫描范围类型为“specific_cluster”时必传
    *
    * @var string[]
    */
    protected static $setters = [
            'scanTypeList' => 'setScanTypeList',
            'rangeType' => 'setRangeType',
            'clusterIdList' => 'setClusterIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanTypeList  扫描项类型
    * rangeType  扫描范围类型，包含如下   - all_cluster：扫描所有符合扫描条件的集群   - specific_cluster: 扫描指定集群
    * clusterIdList  需要扫描的集群id列表，扫描范围类型为“specific_cluster”时必传
    *
    * @var string[]
    */
    protected static $getters = [
            'scanTypeList' => 'getScanTypeList',
            'rangeType' => 'getRangeType',
            'clusterIdList' => 'getClusterIdList'
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
        $this->container['scanTypeList'] = isset($data['scanTypeList']) ? $data['scanTypeList'] : null;
        $this->container['rangeType'] = isset($data['rangeType']) ? $data['rangeType'] : null;
        $this->container['clusterIdList'] = isset($data['clusterIdList']) ? $data['clusterIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scanTypeList'] === null) {
            $invalidProperties[] = "'scanTypeList' can't be null";
        }
        if ($this->container['rangeType'] === null) {
            $invalidProperties[] = "'rangeType' can't be null";
        }
            if ((mb_strlen($this->container['rangeType']) > 64)) {
                $invalidProperties[] = "invalid value for 'rangeType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['rangeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'rangeType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^all_cluster|specific_cluster$/", $this->container['rangeType'])) {
                $invalidProperties[] = "invalid value for 'rangeType', must be conform to the pattern /^all_cluster|specific_cluster$/.";
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
    * Gets scanTypeList
    *  扫描项类型
    *
    * @return string[]
    */
    public function getScanTypeList()
    {
        return $this->container['scanTypeList'];
    }

    /**
    * Sets scanTypeList
    *
    * @param string[] $scanTypeList 扫描项类型
    *
    * @return $this
    */
    public function setScanTypeList($scanTypeList)
    {
        $this->container['scanTypeList'] = $scanTypeList;
        return $this;
    }

    /**
    * Gets rangeType
    *  扫描范围类型，包含如下   - all_cluster：扫描所有符合扫描条件的集群   - specific_cluster: 扫描指定集群
    *
    * @return string
    */
    public function getRangeType()
    {
        return $this->container['rangeType'];
    }

    /**
    * Sets rangeType
    *
    * @param string $rangeType 扫描范围类型，包含如下   - all_cluster：扫描所有符合扫描条件的集群   - specific_cluster: 扫描指定集群
    *
    * @return $this
    */
    public function setRangeType($rangeType)
    {
        $this->container['rangeType'] = $rangeType;
        return $this;
    }

    /**
    * Gets clusterIdList
    *  需要扫描的集群id列表，扫描范围类型为“specific_cluster”时必传
    *
    * @return string[]|null
    */
    public function getClusterIdList()
    {
        return $this->container['clusterIdList'];
    }

    /**
    * Sets clusterIdList
    *
    * @param string[]|null $clusterIdList 需要扫描的集群id列表，扫描范围类型为“specific_cluster”时必传
    *
    * @return $this
    */
    public function setClusterIdList($clusterIdList)
    {
        $this->container['clusterIdList'] = $clusterIdList;
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


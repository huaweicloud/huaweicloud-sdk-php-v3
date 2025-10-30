<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetryTaskRequestBodyClusterScanInfoClusterInfoList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetryTaskRequestBody_cluster_scan_info_cluster_info_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * scanTypeList  **参数解释**： 该集群重新扫描的扫描项列表，若不指定则重新扫描集群下所有扫描失败的扫描项 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值3
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'scanTypeList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * scanTypeList  **参数解释**： 该集群重新扫描的扫描项列表，若不指定则重新扫描集群下所有扫描失败的扫描项 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值3
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'scanTypeList' => null
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
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * scanTypeList  **参数解释**： 该集群重新扫描的扫描项列表，若不指定则重新扫描集群下所有扫描失败的扫描项 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值3
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'scanTypeList' => 'scan_type_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * scanTypeList  **参数解释**： 该集群重新扫描的扫描项列表，若不指定则重新扫描集群下所有扫描失败的扫描项 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值3
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'scanTypeList' => 'setScanTypeList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * scanTypeList  **参数解释**： 该集群重新扫描的扫描项列表，若不指定则重新扫描集群下所有扫描失败的扫描项 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值3
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'scanTypeList' => 'getScanTypeList'
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
        $this->container['scanTypeList'] = isset($data['scanTypeList']) ? $data['scanTypeList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets scanTypeList
    *  **参数解释**： 该集群重新扫描的扫描项列表，若不指定则重新扫描集群下所有扫描失败的扫描项 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值3
    *
    * @return string[]|null
    */
    public function getScanTypeList()
    {
        return $this->container['scanTypeList'];
    }

    /**
    * Sets scanTypeList
    *
    * @param string[]|null $scanTypeList **参数解释**： 该集群重新扫描的扫描项列表，若不指定则重新扫描集群下所有扫描失败的扫描项 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值3
    *
    * @return $this
    */
    public function setScanTypeList($scanTypeList)
    {
        $this->container['scanTypeList'] = $scanTypeList;
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


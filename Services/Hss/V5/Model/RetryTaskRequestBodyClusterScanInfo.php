<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetryTaskRequestBodyClusterScanInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetryTaskRequestBody_cluster_scan_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rangeType  **参数解释**： 重新扫描的范围 **约束限制**: 必填 **取值范围**: - all_failed_cluster：任务下所有扫描失败的集群。 - specific_cluster：任务下指定扫描失败的集群。  **默认取值**: 不涉及
    * clusterInfoList  **参数解释**： 扫描范围为specific_cluster时用于指定重新扫描的集群范围 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rangeType' => 'string',
            'clusterInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\RetryTaskRequestBodyClusterScanInfoClusterInfoList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rangeType  **参数解释**： 重新扫描的范围 **约束限制**: 必填 **取值范围**: - all_failed_cluster：任务下所有扫描失败的集群。 - specific_cluster：任务下指定扫描失败的集群。  **默认取值**: 不涉及
    * clusterInfoList  **参数解释**： 扫描范围为specific_cluster时用于指定重新扫描的集群范围 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rangeType' => null,
        'clusterInfoList' => null
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
    * rangeType  **参数解释**： 重新扫描的范围 **约束限制**: 必填 **取值范围**: - all_failed_cluster：任务下所有扫描失败的集群。 - specific_cluster：任务下指定扫描失败的集群。  **默认取值**: 不涉及
    * clusterInfoList  **参数解释**： 扫描范围为specific_cluster时用于指定重新扫描的集群范围 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rangeType' => 'range_type',
            'clusterInfoList' => 'cluster_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rangeType  **参数解释**： 重新扫描的范围 **约束限制**: 必填 **取值范围**: - all_failed_cluster：任务下所有扫描失败的集群。 - specific_cluster：任务下指定扫描失败的集群。  **默认取值**: 不涉及
    * clusterInfoList  **参数解释**： 扫描范围为specific_cluster时用于指定重新扫描的集群范围 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200
    *
    * @var string[]
    */
    protected static $setters = [
            'rangeType' => 'setRangeType',
            'clusterInfoList' => 'setClusterInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rangeType  **参数解释**： 重新扫描的范围 **约束限制**: 必填 **取值范围**: - all_failed_cluster：任务下所有扫描失败的集群。 - specific_cluster：任务下指定扫描失败的集群。  **默认取值**: 不涉及
    * clusterInfoList  **参数解释**： 扫描范围为specific_cluster时用于指定重新扫描的集群范围 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200
    *
    * @var string[]
    */
    protected static $getters = [
            'rangeType' => 'getRangeType',
            'clusterInfoList' => 'getClusterInfoList'
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
        $this->container['rangeType'] = isset($data['rangeType']) ? $data['rangeType'] : null;
        $this->container['clusterInfoList'] = isset($data['clusterInfoList']) ? $data['clusterInfoList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['rangeType'] === null) {
            $invalidProperties[] = "'rangeType' can't be null";
        }
            if ((mb_strlen($this->container['rangeType']) > 64)) {
                $invalidProperties[] = "invalid value for 'rangeType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['rangeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'rangeType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^all_failed_cluster|specific_cluster$/", $this->container['rangeType'])) {
                $invalidProperties[] = "invalid value for 'rangeType', must be conform to the pattern /^all_failed_cluster|specific_cluster$/.";
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
    * Gets rangeType
    *  **参数解释**： 重新扫描的范围 **约束限制**: 必填 **取值范围**: - all_failed_cluster：任务下所有扫描失败的集群。 - specific_cluster：任务下指定扫描失败的集群。  **默认取值**: 不涉及
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
    * @param string $rangeType **参数解释**： 重新扫描的范围 **约束限制**: 必填 **取值范围**: - all_failed_cluster：任务下所有扫描失败的集群。 - specific_cluster：任务下指定扫描失败的集群。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRangeType($rangeType)
    {
        $this->container['rangeType'] = $rangeType;
        return $this;
    }

    /**
    * Gets clusterInfoList
    *  **参数解释**： 扫描范围为specific_cluster时用于指定重新扫描的集群范围 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RetryTaskRequestBodyClusterScanInfoClusterInfoList[]|null
    */
    public function getClusterInfoList()
    {
        return $this->container['clusterInfoList'];
    }

    /**
    * Sets clusterInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RetryTaskRequestBodyClusterScanInfoClusterInfoList[]|null $clusterInfoList **参数解释**： 扫描范围为specific_cluster时用于指定重新扫描的集群范围 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200
    *
    * @return $this
    */
    public function setClusterInfoList($clusterInfoList)
    {
        $this->container['clusterInfoList'] = $clusterInfoList;
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


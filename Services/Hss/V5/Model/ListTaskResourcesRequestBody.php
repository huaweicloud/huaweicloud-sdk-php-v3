<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTaskResourcesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTaskResourcesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskType' => 'string',
            'clusterScanInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesRequestBodyClusterScanInfo',
            'iacScanInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesRequestBodyIacScanInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskType' => null,
        'clusterScanInfo' => null,
        'iacScanInfo' => null
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
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskType' => 'task_type',
            'clusterScanInfo' => 'cluster_scan_info',
            'iacScanInfo' => 'iac_scan_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'taskType' => 'setTaskType',
            'clusterScanInfo' => 'setClusterScanInfo',
            'iacScanInfo' => 'setIacScanInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'taskType' => 'getTaskType',
            'clusterScanInfo' => 'getClusterScanInfo',
            'iacScanInfo' => 'getIacScanInfo'
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
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['clusterScanInfo'] = isset($data['clusterScanInfo']) ? $data['clusterScanInfo'] : null;
        $this->container['iacScanInfo'] = isset($data['iacScanInfo']) ? $data['iacScanInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskType'] === null) {
            $invalidProperties[] = "'taskType' can't be null";
        }
            if ((mb_strlen($this->container['taskType']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['taskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^cluster_scan|iac_scan$/", $this->container['taskType'])) {
                $invalidProperties[] = "invalid value for 'taskType', must be conform to the pattern /^cluster_scan|iac_scan$/.";
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
    * Gets taskType
    *  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    *
    * @return string
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string $taskType 任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets clusterScanInfo
    *  clusterScanInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesRequestBodyClusterScanInfo|null
    */
    public function getClusterScanInfo()
    {
        return $this->container['clusterScanInfo'];
    }

    /**
    * Sets clusterScanInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesRequestBodyClusterScanInfo|null $clusterScanInfo clusterScanInfo
    *
    * @return $this
    */
    public function setClusterScanInfo($clusterScanInfo)
    {
        $this->container['clusterScanInfo'] = $clusterScanInfo;
        return $this;
    }

    /**
    * Gets iacScanInfo
    *  iacScanInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesRequestBodyIacScanInfo|null
    */
    public function getIacScanInfo()
    {
        return $this->container['iacScanInfo'];
    }

    /**
    * Sets iacScanInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesRequestBodyIacScanInfo|null $iacScanInfo iacScanInfo
    *
    * @return $this
    */
    public function setIacScanInfo($iacScanInfo)
    {
        $this->container['iacScanInfo'] = $iacScanInfo;
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


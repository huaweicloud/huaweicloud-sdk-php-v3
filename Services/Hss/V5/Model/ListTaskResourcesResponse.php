<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTaskResourcesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTaskResourcesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  任务关联的资源数量
    * clusterScanDataList  本次任务关联的集群扫描详情列表，任务类型为“cluster_scan”时查询结果为该列表
    * iacScanDataList  本次任务关联的文件扫描详情列表，任务类型为“iac_scan”时查询结果为该列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'clusterScanDataList' => '\HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesResponseInfoClusterScanDataList[]',
            'iacScanDataList' => '\HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesResponseInfoIacScanDataList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  任务关联的资源数量
    * clusterScanDataList  本次任务关联的集群扫描详情列表，任务类型为“cluster_scan”时查询结果为该列表
    * iacScanDataList  本次任务关联的文件扫描详情列表，任务类型为“iac_scan”时查询结果为该列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'clusterScanDataList' => null,
        'iacScanDataList' => null
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
    * totalNum  任务关联的资源数量
    * clusterScanDataList  本次任务关联的集群扫描详情列表，任务类型为“cluster_scan”时查询结果为该列表
    * iacScanDataList  本次任务关联的文件扫描详情列表，任务类型为“iac_scan”时查询结果为该列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'clusterScanDataList' => 'cluster_scan_data_list',
            'iacScanDataList' => 'iac_scan_data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  任务关联的资源数量
    * clusterScanDataList  本次任务关联的集群扫描详情列表，任务类型为“cluster_scan”时查询结果为该列表
    * iacScanDataList  本次任务关联的文件扫描详情列表，任务类型为“iac_scan”时查询结果为该列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'clusterScanDataList' => 'setClusterScanDataList',
            'iacScanDataList' => 'setIacScanDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  任务关联的资源数量
    * clusterScanDataList  本次任务关联的集群扫描详情列表，任务类型为“cluster_scan”时查询结果为该列表
    * iacScanDataList  本次任务关联的文件扫描详情列表，任务类型为“iac_scan”时查询结果为该列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'clusterScanDataList' => 'getClusterScanDataList',
            'iacScanDataList' => 'getIacScanDataList'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['clusterScanDataList'] = isset($data['clusterScanDataList']) ? $data['clusterScanDataList'] : null;
        $this->container['iacScanDataList'] = isset($data['iacScanDataList']) ? $data['iacScanDataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
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
    * Gets totalNum
    *  任务关联的资源数量
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 任务关联的资源数量
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets clusterScanDataList
    *  本次任务关联的集群扫描详情列表，任务类型为“cluster_scan”时查询结果为该列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesResponseInfoClusterScanDataList[]|null
    */
    public function getClusterScanDataList()
    {
        return $this->container['clusterScanDataList'];
    }

    /**
    * Sets clusterScanDataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesResponseInfoClusterScanDataList[]|null $clusterScanDataList 本次任务关联的集群扫描详情列表，任务类型为“cluster_scan”时查询结果为该列表
    *
    * @return $this
    */
    public function setClusterScanDataList($clusterScanDataList)
    {
        $this->container['clusterScanDataList'] = $clusterScanDataList;
        return $this;
    }

    /**
    * Gets iacScanDataList
    *  本次任务关联的文件扫描详情列表，任务类型为“iac_scan”时查询结果为该列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesResponseInfoIacScanDataList[]|null
    */
    public function getIacScanDataList()
    {
        return $this->container['iacScanDataList'];
    }

    /**
    * Sets iacScanDataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListTaskResourcesResponseInfoIacScanDataList[]|null $iacScanDataList 本次任务关联的文件扫描详情列表，任务类型为“iac_scan”时查询结果为该列表
    *
    * @return $this
    */
    public function setIacScanDataList($iacScanDataList)
    {
        $this->container['iacScanDataList'] = $iacScanDataList;
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


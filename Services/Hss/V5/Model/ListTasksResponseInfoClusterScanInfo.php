<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTasksResponseInfoClusterScanInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTasksResponseInfo_cluster_scan_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scanTypeList  本次扫描任务涉及的扫描项类型列表
    * scanningClusterNum  当前任务处于扫描中的集群数量
    * successClusterNum  当前任务扫描成功的集群数量
    * failedClusterNum  当前任务扫描失败的集群数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scanTypeList' => 'string[]',
            'scanningClusterNum' => 'int',
            'successClusterNum' => 'int',
            'failedClusterNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scanTypeList  本次扫描任务涉及的扫描项类型列表
    * scanningClusterNum  当前任务处于扫描中的集群数量
    * successClusterNum  当前任务扫描成功的集群数量
    * failedClusterNum  当前任务扫描失败的集群数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scanTypeList' => null,
        'scanningClusterNum' => 'int32',
        'successClusterNum' => 'int32',
        'failedClusterNum' => 'int32'
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
    * scanTypeList  本次扫描任务涉及的扫描项类型列表
    * scanningClusterNum  当前任务处于扫描中的集群数量
    * successClusterNum  当前任务扫描成功的集群数量
    * failedClusterNum  当前任务扫描失败的集群数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scanTypeList' => 'scan_type_list',
            'scanningClusterNum' => 'scanning_cluster_num',
            'successClusterNum' => 'success_cluster_num',
            'failedClusterNum' => 'failed_cluster_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scanTypeList  本次扫描任务涉及的扫描项类型列表
    * scanningClusterNum  当前任务处于扫描中的集群数量
    * successClusterNum  当前任务扫描成功的集群数量
    * failedClusterNum  当前任务扫描失败的集群数量
    *
    * @var string[]
    */
    protected static $setters = [
            'scanTypeList' => 'setScanTypeList',
            'scanningClusterNum' => 'setScanningClusterNum',
            'successClusterNum' => 'setSuccessClusterNum',
            'failedClusterNum' => 'setFailedClusterNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scanTypeList  本次扫描任务涉及的扫描项类型列表
    * scanningClusterNum  当前任务处于扫描中的集群数量
    * successClusterNum  当前任务扫描成功的集群数量
    * failedClusterNum  当前任务扫描失败的集群数量
    *
    * @var string[]
    */
    protected static $getters = [
            'scanTypeList' => 'getScanTypeList',
            'scanningClusterNum' => 'getScanningClusterNum',
            'successClusterNum' => 'getSuccessClusterNum',
            'failedClusterNum' => 'getFailedClusterNum'
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
        $this->container['scanningClusterNum'] = isset($data['scanningClusterNum']) ? $data['scanningClusterNum'] : null;
        $this->container['successClusterNum'] = isset($data['successClusterNum']) ? $data['successClusterNum'] : null;
        $this->container['failedClusterNum'] = isset($data['failedClusterNum']) ? $data['failedClusterNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scanningClusterNum']) && ($this->container['scanningClusterNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'scanningClusterNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['scanningClusterNum']) && ($this->container['scanningClusterNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanningClusterNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successClusterNum']) && ($this->container['successClusterNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'successClusterNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['successClusterNum']) && ($this->container['successClusterNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successClusterNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedClusterNum']) && ($this->container['failedClusterNum'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'failedClusterNum', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['failedClusterNum']) && ($this->container['failedClusterNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedClusterNum', must be bigger than or equal to 0.";
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
    *  本次扫描任务涉及的扫描项类型列表
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
    * @param string[]|null $scanTypeList 本次扫描任务涉及的扫描项类型列表
    *
    * @return $this
    */
    public function setScanTypeList($scanTypeList)
    {
        $this->container['scanTypeList'] = $scanTypeList;
        return $this;
    }

    /**
    * Gets scanningClusterNum
    *  当前任务处于扫描中的集群数量
    *
    * @return int|null
    */
    public function getScanningClusterNum()
    {
        return $this->container['scanningClusterNum'];
    }

    /**
    * Sets scanningClusterNum
    *
    * @param int|null $scanningClusterNum 当前任务处于扫描中的集群数量
    *
    * @return $this
    */
    public function setScanningClusterNum($scanningClusterNum)
    {
        $this->container['scanningClusterNum'] = $scanningClusterNum;
        return $this;
    }

    /**
    * Gets successClusterNum
    *  当前任务扫描成功的集群数量
    *
    * @return int|null
    */
    public function getSuccessClusterNum()
    {
        return $this->container['successClusterNum'];
    }

    /**
    * Sets successClusterNum
    *
    * @param int|null $successClusterNum 当前任务扫描成功的集群数量
    *
    * @return $this
    */
    public function setSuccessClusterNum($successClusterNum)
    {
        $this->container['successClusterNum'] = $successClusterNum;
        return $this;
    }

    /**
    * Gets failedClusterNum
    *  当前任务扫描失败的集群数量
    *
    * @return int|null
    */
    public function getFailedClusterNum()
    {
        return $this->container['failedClusterNum'];
    }

    /**
    * Sets failedClusterNum
    *
    * @param int|null $failedClusterNum 当前任务扫描失败的集群数量
    *
    * @return $this
    */
    public function setFailedClusterNum($failedClusterNum)
    {
        $this->container['failedClusterNum'] = $failedClusterNum;
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


<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeConstraint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeConstraint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * other  其他限制
    * minNodeNum  最少节点数
    * maxNodeNum  最多节点数
    * minCoreNum  最少核心数
    * minMemSize  最小内存容量
    * minDiskSize  最小磁盘容量
    * maxNodeGroupNum  最大节点组数
    * minDataVolumeTotalSize  最小数据卷容量
    * diskTypeConstraint  磁盘类型限制，包含当前节点组所支持的磁盘类型
    * minRootDiskSize  最小系统磁盘大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'other' => 'map[string,object]',
            'minNodeNum' => 'int',
            'maxNodeNum' => 'int',
            'minCoreNum' => 'map[string,int]',
            'minMemSize' => 'map[string,int]',
            'minDiskSize' => 'int',
            'maxNodeGroupNum' => 'int',
            'minDataVolumeTotalSize' => 'map[string,int]',
            'diskTypeConstraint' => 'map[string,string]',
            'minRootDiskSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * other  其他限制
    * minNodeNum  最少节点数
    * maxNodeNum  最多节点数
    * minCoreNum  最少核心数
    * minMemSize  最小内存容量
    * minDiskSize  最小磁盘容量
    * maxNodeGroupNum  最大节点组数
    * minDataVolumeTotalSize  最小数据卷容量
    * diskTypeConstraint  磁盘类型限制，包含当前节点组所支持的磁盘类型
    * minRootDiskSize  最小系统磁盘大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'other' => null,
        'minNodeNum' => 'int32',
        'maxNodeNum' => 'int32',
        'minCoreNum' => 'int32',
        'minMemSize' => 'int32',
        'minDiskSize' => 'int32',
        'maxNodeGroupNum' => 'int32',
        'minDataVolumeTotalSize' => 'int32',
        'diskTypeConstraint' => null,
        'minRootDiskSize' => 'int32'
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
    * other  其他限制
    * minNodeNum  最少节点数
    * maxNodeNum  最多节点数
    * minCoreNum  最少核心数
    * minMemSize  最小内存容量
    * minDiskSize  最小磁盘容量
    * maxNodeGroupNum  最大节点组数
    * minDataVolumeTotalSize  最小数据卷容量
    * diskTypeConstraint  磁盘类型限制，包含当前节点组所支持的磁盘类型
    * minRootDiskSize  最小系统磁盘大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'other' => 'other',
            'minNodeNum' => 'min_node_num',
            'maxNodeNum' => 'max_node_num',
            'minCoreNum' => 'min_core_num',
            'minMemSize' => 'min_mem_size',
            'minDiskSize' => 'min_disk_size',
            'maxNodeGroupNum' => 'max_node_group_num',
            'minDataVolumeTotalSize' => 'min_data_volume_total_size',
            'diskTypeConstraint' => 'disk_type_constraint',
            'minRootDiskSize' => 'min_root_disk_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * other  其他限制
    * minNodeNum  最少节点数
    * maxNodeNum  最多节点数
    * minCoreNum  最少核心数
    * minMemSize  最小内存容量
    * minDiskSize  最小磁盘容量
    * maxNodeGroupNum  最大节点组数
    * minDataVolumeTotalSize  最小数据卷容量
    * diskTypeConstraint  磁盘类型限制，包含当前节点组所支持的磁盘类型
    * minRootDiskSize  最小系统磁盘大小
    *
    * @var string[]
    */
    protected static $setters = [
            'other' => 'setOther',
            'minNodeNum' => 'setMinNodeNum',
            'maxNodeNum' => 'setMaxNodeNum',
            'minCoreNum' => 'setMinCoreNum',
            'minMemSize' => 'setMinMemSize',
            'minDiskSize' => 'setMinDiskSize',
            'maxNodeGroupNum' => 'setMaxNodeGroupNum',
            'minDataVolumeTotalSize' => 'setMinDataVolumeTotalSize',
            'diskTypeConstraint' => 'setDiskTypeConstraint',
            'minRootDiskSize' => 'setMinRootDiskSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * other  其他限制
    * minNodeNum  最少节点数
    * maxNodeNum  最多节点数
    * minCoreNum  最少核心数
    * minMemSize  最小内存容量
    * minDiskSize  最小磁盘容量
    * maxNodeGroupNum  最大节点组数
    * minDataVolumeTotalSize  最小数据卷容量
    * diskTypeConstraint  磁盘类型限制，包含当前节点组所支持的磁盘类型
    * minRootDiskSize  最小系统磁盘大小
    *
    * @var string[]
    */
    protected static $getters = [
            'other' => 'getOther',
            'minNodeNum' => 'getMinNodeNum',
            'maxNodeNum' => 'getMaxNodeNum',
            'minCoreNum' => 'getMinCoreNum',
            'minMemSize' => 'getMinMemSize',
            'minDiskSize' => 'getMinDiskSize',
            'maxNodeGroupNum' => 'getMaxNodeGroupNum',
            'minDataVolumeTotalSize' => 'getMinDataVolumeTotalSize',
            'diskTypeConstraint' => 'getDiskTypeConstraint',
            'minRootDiskSize' => 'getMinRootDiskSize'
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
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
        $this->container['minNodeNum'] = isset($data['minNodeNum']) ? $data['minNodeNum'] : null;
        $this->container['maxNodeNum'] = isset($data['maxNodeNum']) ? $data['maxNodeNum'] : null;
        $this->container['minCoreNum'] = isset($data['minCoreNum']) ? $data['minCoreNum'] : null;
        $this->container['minMemSize'] = isset($data['minMemSize']) ? $data['minMemSize'] : null;
        $this->container['minDiskSize'] = isset($data['minDiskSize']) ? $data['minDiskSize'] : null;
        $this->container['maxNodeGroupNum'] = isset($data['maxNodeGroupNum']) ? $data['maxNodeGroupNum'] : null;
        $this->container['minDataVolumeTotalSize'] = isset($data['minDataVolumeTotalSize']) ? $data['minDataVolumeTotalSize'] : null;
        $this->container['diskTypeConstraint'] = isset($data['diskTypeConstraint']) ? $data['diskTypeConstraint'] : null;
        $this->container['minRootDiskSize'] = isset($data['minRootDiskSize']) ? $data['minRootDiskSize'] : null;
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
    * Gets other
    *  其他限制
    *
    * @return map[string,object]|null
    */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
    * Sets other
    *
    * @param map[string,object]|null $other 其他限制
    *
    * @return $this
    */
    public function setOther($other)
    {
        $this->container['other'] = $other;
        return $this;
    }

    /**
    * Gets minNodeNum
    *  最少节点数
    *
    * @return int|null
    */
    public function getMinNodeNum()
    {
        return $this->container['minNodeNum'];
    }

    /**
    * Sets minNodeNum
    *
    * @param int|null $minNodeNum 最少节点数
    *
    * @return $this
    */
    public function setMinNodeNum($minNodeNum)
    {
        $this->container['minNodeNum'] = $minNodeNum;
        return $this;
    }

    /**
    * Gets maxNodeNum
    *  最多节点数
    *
    * @return int|null
    */
    public function getMaxNodeNum()
    {
        return $this->container['maxNodeNum'];
    }

    /**
    * Sets maxNodeNum
    *
    * @param int|null $maxNodeNum 最多节点数
    *
    * @return $this
    */
    public function setMaxNodeNum($maxNodeNum)
    {
        $this->container['maxNodeNum'] = $maxNodeNum;
        return $this;
    }

    /**
    * Gets minCoreNum
    *  最少核心数
    *
    * @return map[string,int]|null
    */
    public function getMinCoreNum()
    {
        return $this->container['minCoreNum'];
    }

    /**
    * Sets minCoreNum
    *
    * @param map[string,int]|null $minCoreNum 最少核心数
    *
    * @return $this
    */
    public function setMinCoreNum($minCoreNum)
    {
        $this->container['minCoreNum'] = $minCoreNum;
        return $this;
    }

    /**
    * Gets minMemSize
    *  最小内存容量
    *
    * @return map[string,int]|null
    */
    public function getMinMemSize()
    {
        return $this->container['minMemSize'];
    }

    /**
    * Sets minMemSize
    *
    * @param map[string,int]|null $minMemSize 最小内存容量
    *
    * @return $this
    */
    public function setMinMemSize($minMemSize)
    {
        $this->container['minMemSize'] = $minMemSize;
        return $this;
    }

    /**
    * Gets minDiskSize
    *  最小磁盘容量
    *
    * @return int|null
    */
    public function getMinDiskSize()
    {
        return $this->container['minDiskSize'];
    }

    /**
    * Sets minDiskSize
    *
    * @param int|null $minDiskSize 最小磁盘容量
    *
    * @return $this
    */
    public function setMinDiskSize($minDiskSize)
    {
        $this->container['minDiskSize'] = $minDiskSize;
        return $this;
    }

    /**
    * Gets maxNodeGroupNum
    *  最大节点组数
    *
    * @return int|null
    */
    public function getMaxNodeGroupNum()
    {
        return $this->container['maxNodeGroupNum'];
    }

    /**
    * Sets maxNodeGroupNum
    *
    * @param int|null $maxNodeGroupNum 最大节点组数
    *
    * @return $this
    */
    public function setMaxNodeGroupNum($maxNodeGroupNum)
    {
        $this->container['maxNodeGroupNum'] = $maxNodeGroupNum;
        return $this;
    }

    /**
    * Gets minDataVolumeTotalSize
    *  最小数据卷容量
    *
    * @return map[string,int]|null
    */
    public function getMinDataVolumeTotalSize()
    {
        return $this->container['minDataVolumeTotalSize'];
    }

    /**
    * Sets minDataVolumeTotalSize
    *
    * @param map[string,int]|null $minDataVolumeTotalSize 最小数据卷容量
    *
    * @return $this
    */
    public function setMinDataVolumeTotalSize($minDataVolumeTotalSize)
    {
        $this->container['minDataVolumeTotalSize'] = $minDataVolumeTotalSize;
        return $this;
    }

    /**
    * Gets diskTypeConstraint
    *  磁盘类型限制，包含当前节点组所支持的磁盘类型
    *
    * @return map[string,string]|null
    */
    public function getDiskTypeConstraint()
    {
        return $this->container['diskTypeConstraint'];
    }

    /**
    * Sets diskTypeConstraint
    *
    * @param map[string,string]|null $diskTypeConstraint 磁盘类型限制，包含当前节点组所支持的磁盘类型
    *
    * @return $this
    */
    public function setDiskTypeConstraint($diskTypeConstraint)
    {
        $this->container['diskTypeConstraint'] = $diskTypeConstraint;
        return $this;
    }

    /**
    * Gets minRootDiskSize
    *  最小系统磁盘大小
    *
    * @return int|null
    */
    public function getMinRootDiskSize()
    {
        return $this->container['minRootDiskSize'];
    }

    /**
    * Sets minRootDiskSize
    *
    * @param int|null $minRootDiskSize 最小系统磁盘大小
    *
    * @return $this
    */
    public function setMinRootDiskSize($minRootDiskSize)
    {
        $this->container['minRootDiskSize'] = $minRootDiskSize;
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


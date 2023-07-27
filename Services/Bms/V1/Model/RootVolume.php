<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RootVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RootVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumetype  裸金属服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型SAS：高IO磁盘类型SSD：超高IO磁盘类型
    * size  系统盘大小，容量单位为GB，输入大小范围为[40-1024]。约束：系统盘大小取值应不小于镜像中系统盘的最小值（min_disk属性）。
    * clusterId  裸金属服务器系统盘对应的存储池的ID。 说明：使用专属分布式存储时需要该字段。存储池ID可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    * clusterType  裸金属服务器系统盘对应的磁盘存储类型。磁盘存储类型枚举值：DSS（专属分布式存储）。 说明：使用专属分布式存储时需要该字段。存储池类型可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumetype' => 'string',
            'size' => 'int',
            'clusterId' => 'string',
            'clusterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumetype  裸金属服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型SAS：高IO磁盘类型SSD：超高IO磁盘类型
    * size  系统盘大小，容量单位为GB，输入大小范围为[40-1024]。约束：系统盘大小取值应不小于镜像中系统盘的最小值（min_disk属性）。
    * clusterId  裸金属服务器系统盘对应的存储池的ID。 说明：使用专属分布式存储时需要该字段。存储池ID可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    * clusterType  裸金属服务器系统盘对应的磁盘存储类型。磁盘存储类型枚举值：DSS（专属分布式存储）。 说明：使用专属分布式存储时需要该字段。存储池类型可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumetype' => null,
        'size' => 'int32',
        'clusterId' => 'uuid',
        'clusterType' => null
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
    * volumetype  裸金属服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型SAS：高IO磁盘类型SSD：超高IO磁盘类型
    * size  系统盘大小，容量单位为GB，输入大小范围为[40-1024]。约束：系统盘大小取值应不小于镜像中系统盘的最小值（min_disk属性）。
    * clusterId  裸金属服务器系统盘对应的存储池的ID。 说明：使用专属分布式存储时需要该字段。存储池ID可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    * clusterType  裸金属服务器系统盘对应的磁盘存储类型。磁盘存储类型枚举值：DSS（专属分布式存储）。 说明：使用专属分布式存储时需要该字段。存储池类型可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumetype' => 'volumetype',
            'size' => 'size',
            'clusterId' => 'cluster_id',
            'clusterType' => 'cluster_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumetype  裸金属服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型SAS：高IO磁盘类型SSD：超高IO磁盘类型
    * size  系统盘大小，容量单位为GB，输入大小范围为[40-1024]。约束：系统盘大小取值应不小于镜像中系统盘的最小值（min_disk属性）。
    * clusterId  裸金属服务器系统盘对应的存储池的ID。 说明：使用专属分布式存储时需要该字段。存储池ID可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    * clusterType  裸金属服务器系统盘对应的磁盘存储类型。磁盘存储类型枚举值：DSS（专属分布式存储）。 说明：使用专属分布式存储时需要该字段。存储池类型可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumetype' => 'setVolumetype',
            'size' => 'setSize',
            'clusterId' => 'setClusterId',
            'clusterType' => 'setClusterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumetype  裸金属服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型SAS：高IO磁盘类型SSD：超高IO磁盘类型
    * size  系统盘大小，容量单位为GB，输入大小范围为[40-1024]。约束：系统盘大小取值应不小于镜像中系统盘的最小值（min_disk属性）。
    * clusterId  裸金属服务器系统盘对应的存储池的ID。 说明：使用专属分布式存储时需要该字段。存储池ID可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    * clusterType  裸金属服务器系统盘对应的磁盘存储类型。磁盘存储类型枚举值：DSS（专属分布式存储）。 说明：使用专属分布式存储时需要该字段。存储池类型可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumetype' => 'getVolumetype',
            'size' => 'getSize',
            'clusterId' => 'getClusterId',
            'clusterType' => 'getClusterType'
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
    const VOLUMETYPE_SATA = 'SATA';
    const VOLUMETYPE_SAS = 'SAS';
    const VOLUMETYPE_SSD = 'SSD';
    const CLUSTER_TYPE_DSS = 'DSS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVolumetypeAllowableValues()
    {
        return [
            self::VOLUMETYPE_SATA,
            self::VOLUMETYPE_SAS,
            self::VOLUMETYPE_SSD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClusterTypeAllowableValues()
    {
        return [
            self::CLUSTER_TYPE_DSS,
        ];
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
        $this->container['volumetype'] = isset($data['volumetype']) ? $data['volumetype'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volumetype'] === null) {
            $invalidProperties[] = "'volumetype' can't be null";
        }
            $allowedValues = $this->getVolumetypeAllowableValues();
                if (!is_null($this->container['volumetype']) && !in_array($this->container['volumetype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'volumetype', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            $allowedValues = $this->getClusterTypeAllowableValues();
                if (!is_null($this->container['clusterType']) && !in_array($this->container['clusterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets volumetype
    *  裸金属服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型SAS：高IO磁盘类型SSD：超高IO磁盘类型
    *
    * @return string
    */
    public function getVolumetype()
    {
        return $this->container['volumetype'];
    }

    /**
    * Sets volumetype
    *
    * @param string $volumetype 裸金属服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。SATA：普通IO磁盘类型SAS：高IO磁盘类型SSD：超高IO磁盘类型
    *
    * @return $this
    */
    public function setVolumetype($volumetype)
    {
        $this->container['volumetype'] = $volumetype;
        return $this;
    }

    /**
    * Gets size
    *  系统盘大小，容量单位为GB，输入大小范围为[40-1024]。约束：系统盘大小取值应不小于镜像中系统盘的最小值（min_disk属性）。
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 系统盘大小，容量单位为GB，输入大小范围为[40-1024]。约束：系统盘大小取值应不小于镜像中系统盘的最小值（min_disk属性）。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets clusterId
    *  裸金属服务器系统盘对应的存储池的ID。 说明：使用专属分布式存储时需要该字段。存储池ID可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
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
    * @param string|null $clusterId 裸金属服务器系统盘对应的存储池的ID。 说明：使用专属分布式存储时需要该字段。存储池ID可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterType
    *  裸金属服务器系统盘对应的磁盘存储类型。磁盘存储类型枚举值：DSS（专属分布式存储）。 说明：使用专属分布式存储时需要该字段。存储池类型可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType 裸金属服务器系统盘对应的磁盘存储类型。磁盘存储类型枚举值：DSS（专属分布式存储）。 说明：使用专属分布式存储时需要该字段。存储池类型可以从管理控制台或者参考《专属分布式存储API参考》的“获取专属分布式存储池详情列表”章节获取。
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
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


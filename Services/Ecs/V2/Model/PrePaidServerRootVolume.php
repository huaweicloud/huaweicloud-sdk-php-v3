<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrePaidServerRootVolume implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrePaidServerRootVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumetype' => 'string',
            'size' => 'int',
            'extendparam' => '\HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerRootVolumeExtendParam',
            'clusterType' => 'string',
            'clusterId' => 'string',
            'hwpassthrough' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumetype' => null,
        'size' => 'int32',
        'extendparam' => null,
        'clusterType' => null,
        'clusterId' => null,
        'hwpassthrough' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumetype' => 'volumetype',
            'size' => 'size',
            'extendparam' => 'extendparam',
            'clusterType' => 'cluster_type',
            'clusterId' => 'cluster_id',
            'hwpassthrough' => 'hw:passthrough'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'volumetype' => 'setVolumetype',
            'size' => 'setSize',
            'extendparam' => 'setExtendparam',
            'clusterType' => 'setClusterType',
            'clusterId' => 'setClusterId',
            'hwpassthrough' => 'setHwpassthrough'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'volumetype' => 'getVolumetype',
            'size' => 'getSize',
            'extendparam' => 'getExtendparam',
            'clusterType' => 'getClusterType',
            'clusterId' => 'getClusterId',
            'hwpassthrough' => 'getHwpassthrough'
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
    const VOLUMETYPE_GPSSD = 'GPSSD';
    const VOLUMETYPE_CO_P1 = 'co-p1';
    const VOLUMETYPE_UH_L1 = 'uh-l1';
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
            self::VOLUMETYPE_GPSSD,
            self::VOLUMETYPE_CO_P1,
            self::VOLUMETYPE_UH_L1,
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
        $this->container['extendparam'] = isset($data['extendparam']) ? $data['extendparam'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['hwpassthrough'] = isset($data['hwpassthrough']) ? $data['hwpassthrough'] : false;
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

            if (!is_null($this->container['size']) && ($this->container['size'] > 1024)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 1)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 1.";
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
    * @param string $volumetype 云服务器系统盘对应的磁盘类型，需要与系统所提供的磁盘类型相匹配。  - SATA：普通IO磁盘类型。 - SAS：高IO磁盘类型。 - SSD：超高IO磁盘类型。 - co-p1：高IO (性能优化Ⅰ型) - uh-l1：超高IO (时延优化)  > 说明： >  > 对于HANA云服务器、HL1型云服务器、HL2型云服务器，需使用co-p1和uh-l1两种磁盘类型。对于其他类型的云服务器，不能使用co-p1和uh-l1两种磁盘类型。
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
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 系统盘大小，容量单位为GB， 输入大小范围为[1,1024]。  约束：  - 系统盘大小取值应不小于镜像支持的系统盘的最小值(镜像的min_disk属性)。 - 若该参数没有指定或者指定为0时，系统盘大小默认取值为镜像中系统盘的最小值(镜像的min_disk属性)。  > 说明： >  > 镜像系统盘的最小值(镜像的min_disk属性)可在控制台中点击镜像详情查看。或通过调用“查询镜像详情（OpenStack原生）”API获取，详细操作请参考《镜像服务API参考》中“查询镜像详情（OpenStack原生）”章节。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets extendparam
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerRootVolumeExtendParam|null
    */
    public function getExtendparam()
    {
        return $this->container['extendparam'];
    }

    /**
    * Sets extendparam
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerRootVolumeExtendParam|null $extendparam extendparam
    *
    * @return $this
    */
    public function setExtendparam($extendparam)
    {
        $this->container['extendparam'] = $extendparam;
        return $this;
    }

    /**
    * Gets clusterType
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
    * @param string|null $clusterType 云服务器系统盘对应的磁盘存储类型。 磁盘存储类型枚举值： DSS：专属存储类型
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets clusterId
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
    * @param string|null $clusterId 使用SDI规格创建虚拟机时请关注该参数，如果该参数值为true，说明创建的为scsi类型的卷
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets hwpassthrough
    *
    * @return bool|null
    */
    public function getHwpassthrough()
    {
        return $this->container['hwpassthrough'];
    }

    /**
    * Sets hwpassthrough
    *
    * @param bool|null $hwpassthrough 使用SDI规格创建虚拟机时请关注该参数，如果该参数值为true，说明创建的为scsi类型的卷  > 说明： >  > 此参数为boolean类型，若传入非boolean类型字符，程序将按照false方式处理。
    *
    * @return $this
    */
    public function setHwpassthrough($hwpassthrough)
    {
        $this->container['hwpassthrough'] = $hwpassthrough;
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


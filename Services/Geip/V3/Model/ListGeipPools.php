<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGeipPools implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGeipPools';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  全域弹性公网IP池的ID
    * name  - 功能说明：全域弹性公网IP池名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * enName  英文名称
    * cnName  中文名称
    * status  状态
    * isp  全域弹性公网IP所属线路
    * ipVersion  - 功能说明：全域弹性公网IP池的版本 - 取值范围：4、6
    * accessSite  接入点信息
    * type  类型
    * createdAt  创建时间
    * updatedAt  更新时间
    * allowedBandwidthTypes  地址池支持的全域公网带宽类型资源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'enName' => 'string',
            'cnName' => 'string',
            'status' => 'string',
            'isp' => 'string',
            'ipVersion' => 'int',
            'accessSite' => 'string',
            'type' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'allowedBandwidthTypes' => '\HuaweiCloud\SDK\Geip\V3\Model\AllowedBandwidthTypes[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  全域弹性公网IP池的ID
    * name  - 功能说明：全域弹性公网IP池名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * enName  英文名称
    * cnName  中文名称
    * status  状态
    * isp  全域弹性公网IP所属线路
    * ipVersion  - 功能说明：全域弹性公网IP池的版本 - 取值范围：4、6
    * accessSite  接入点信息
    * type  类型
    * createdAt  创建时间
    * updatedAt  更新时间
    * allowedBandwidthTypes  地址池支持的全域公网带宽类型资源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'enName' => null,
        'cnName' => null,
        'status' => null,
        'isp' => null,
        'ipVersion' => 'int32',
        'accessSite' => null,
        'type' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'allowedBandwidthTypes' => null
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
    * id  全域弹性公网IP池的ID
    * name  - 功能说明：全域弹性公网IP池名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * enName  英文名称
    * cnName  中文名称
    * status  状态
    * isp  全域弹性公网IP所属线路
    * ipVersion  - 功能说明：全域弹性公网IP池的版本 - 取值范围：4、6
    * accessSite  接入点信息
    * type  类型
    * createdAt  创建时间
    * updatedAt  更新时间
    * allowedBandwidthTypes  地址池支持的全域公网带宽类型资源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'enName' => 'en_name',
            'cnName' => 'cn_name',
            'status' => 'status',
            'isp' => 'isp',
            'ipVersion' => 'ip_version',
            'accessSite' => 'access_site',
            'type' => 'type',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'allowedBandwidthTypes' => 'allowed_bandwidth_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  全域弹性公网IP池的ID
    * name  - 功能说明：全域弹性公网IP池名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * enName  英文名称
    * cnName  中文名称
    * status  状态
    * isp  全域弹性公网IP所属线路
    * ipVersion  - 功能说明：全域弹性公网IP池的版本 - 取值范围：4、6
    * accessSite  接入点信息
    * type  类型
    * createdAt  创建时间
    * updatedAt  更新时间
    * allowedBandwidthTypes  地址池支持的全域公网带宽类型资源
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'enName' => 'setEnName',
            'cnName' => 'setCnName',
            'status' => 'setStatus',
            'isp' => 'setIsp',
            'ipVersion' => 'setIpVersion',
            'accessSite' => 'setAccessSite',
            'type' => 'setType',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'allowedBandwidthTypes' => 'setAllowedBandwidthTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  全域弹性公网IP池的ID
    * name  - 功能说明：全域弹性公网IP池名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * enName  英文名称
    * cnName  中文名称
    * status  状态
    * isp  全域弹性公网IP所属线路
    * ipVersion  - 功能说明：全域弹性公网IP池的版本 - 取值范围：4、6
    * accessSite  接入点信息
    * type  类型
    * createdAt  创建时间
    * updatedAt  更新时间
    * allowedBandwidthTypes  地址池支持的全域公网带宽类型资源
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'enName' => 'getEnName',
            'cnName' => 'getCnName',
            'status' => 'getStatus',
            'isp' => 'getIsp',
            'ipVersion' => 'getIpVersion',
            'accessSite' => 'getAccessSite',
            'type' => 'getType',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'allowedBandwidthTypes' => 'getAllowedBandwidthTypes'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';
    const STATUS_SOLDOUT = 'SOLDOUT';
    const IP_VERSION_4 = 4;
    const IP_VERSION_6 = 6;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
            self::STATUS_SOLDOUT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpVersionAllowableValues()
    {
        return [
            self::IP_VERSION_4,
            self::IP_VERSION_6,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enName'] = isset($data['enName']) ? $data['enName'] : null;
        $this->container['cnName'] = isset($data['cnName']) ? $data['cnName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['allowedBandwidthTypes'] = isset($data['allowedBandwidthTypes']) ? $data['allowedBandwidthTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIpVersionAllowableValues();
                if (!is_null($this->container['ipVersion']) && !in_array($this->container['ipVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipVersion', must be one of '%s'",
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
    * Gets id
    *  全域弹性公网IP池的ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 全域弹性公网IP池的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  - 功能说明：全域弹性公网IP池名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name - 功能说明：全域弹性公网IP池名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enName
    *  英文名称
    *
    * @return string|null
    */
    public function getEnName()
    {
        return $this->container['enName'];
    }

    /**
    * Sets enName
    *
    * @param string|null $enName 英文名称
    *
    * @return $this
    */
    public function setEnName($enName)
    {
        $this->container['enName'] = $enName;
        return $this;
    }

    /**
    * Gets cnName
    *  中文名称
    *
    * @return string|null
    */
    public function getCnName()
    {
        return $this->container['cnName'];
    }

    /**
    * Sets cnName
    *
    * @param string|null $cnName 中文名称
    *
    * @return $this
    */
    public function setCnName($cnName)
    {
        $this->container['cnName'] = $cnName;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isp
    *  全域弹性公网IP所属线路
    *
    * @return string|null
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string|null $isp 全域弹性公网IP所属线路
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
        return $this;
    }

    /**
    * Gets ipVersion
    *  - 功能说明：全域弹性公网IP池的版本 - 取值范围：4、6
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion - 功能说明：全域弹性公网IP池的版本 - 取值范围：4、6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets accessSite
    *  接入点信息
    *
    * @return string|null
    */
    public function getAccessSite()
    {
        return $this->container['accessSite'];
    }

    /**
    * Sets accessSite
    *
    * @param string|null $accessSite 接入点信息
    *
    * @return $this
    */
    public function setAccessSite($accessSite)
    {
        $this->container['accessSite'] = $accessSite;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets allowedBandwidthTypes
    *  地址池支持的全域公网带宽类型资源
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\AllowedBandwidthTypes[]|null
    */
    public function getAllowedBandwidthTypes()
    {
        return $this->container['allowedBandwidthTypes'];
    }

    /**
    * Sets allowedBandwidthTypes
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\AllowedBandwidthTypes[]|null $allowedBandwidthTypes 地址池支持的全域公网带宽类型资源
    *
    * @return $this
    */
    public function setAllowedBandwidthTypes($allowedBandwidthTypes)
    {
        $this->container['allowedBandwidthTypes'] = $allowedBandwidthTypes;
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


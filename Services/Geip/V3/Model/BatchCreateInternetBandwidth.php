<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateInternetBandwidth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateInternetBandwidth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * name  资源名称
    * isp  线路
    * ingressSize  全域公网带宽大小（入云方向）
    * accessSite  接入点信息
    * size  全域公网带宽大小（出云方向）
    * description  用户自定义的资源描述
    * chargeMode  计费模式
    * domainId  租户ID
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * retStatus  是否创建成功标识，取值：successful、failed。
    * tags  全域公网带宽标签
    * sysTags  系统标签
    * enterpriseProjectId  资源的企业项目id
    * type  全域公网带宽类型
    * lockInfos  全域公网带宽资源的锁状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'isp' => 'string',
            'ingressSize' => 'int',
            'accessSite' => 'string',
            'size' => 'int',
            'description' => 'string',
            'chargeMode' => 'string',
            'domainId' => 'string',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'retStatus' => 'string',
            'tags' => '\HuaweiCloud\SDK\Geip\V3\Model\Tag[]',
            'sysTags' => '\HuaweiCloud\SDK\Geip\V3\Model\Tag[]',
            'enterpriseProjectId' => 'string',
            'type' => 'string',
            'lockInfos' => '\HuaweiCloud\SDK\Geip\V3\Model\LockInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * name  资源名称
    * isp  线路
    * ingressSize  全域公网带宽大小（入云方向）
    * accessSite  接入点信息
    * size  全域公网带宽大小（出云方向）
    * description  用户自定义的资源描述
    * chargeMode  计费模式
    * domainId  租户ID
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * retStatus  是否创建成功标识，取值：successful、failed。
    * tags  全域公网带宽标签
    * sysTags  系统标签
    * enterpriseProjectId  资源的企业项目id
    * type  全域公网带宽类型
    * lockInfos  全域公网带宽资源的锁状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'isp' => null,
        'ingressSize' => 'int32',
        'accessSite' => null,
        'size' => 'int32',
        'description' => null,
        'chargeMode' => null,
        'domainId' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'retStatus' => null,
        'tags' => null,
        'sysTags' => null,
        'enterpriseProjectId' => null,
        'type' => null,
        'lockInfos' => null
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
    * id  ID
    * name  资源名称
    * isp  线路
    * ingressSize  全域公网带宽大小（入云方向）
    * accessSite  接入点信息
    * size  全域公网带宽大小（出云方向）
    * description  用户自定义的资源描述
    * chargeMode  计费模式
    * domainId  租户ID
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * retStatus  是否创建成功标识，取值：successful、failed。
    * tags  全域公网带宽标签
    * sysTags  系统标签
    * enterpriseProjectId  资源的企业项目id
    * type  全域公网带宽类型
    * lockInfos  全域公网带宽资源的锁状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'isp' => 'isp',
            'ingressSize' => 'ingress_size',
            'accessSite' => 'access_site',
            'size' => 'size',
            'description' => 'description',
            'chargeMode' => 'charge_mode',
            'domainId' => 'domain_id',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'retStatus' => 'ret_status',
            'tags' => 'tags',
            'sysTags' => 'sys_tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'type' => 'type',
            'lockInfos' => 'lock_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * name  资源名称
    * isp  线路
    * ingressSize  全域公网带宽大小（入云方向）
    * accessSite  接入点信息
    * size  全域公网带宽大小（出云方向）
    * description  用户自定义的资源描述
    * chargeMode  计费模式
    * domainId  租户ID
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * retStatus  是否创建成功标识，取值：successful、failed。
    * tags  全域公网带宽标签
    * sysTags  系统标签
    * enterpriseProjectId  资源的企业项目id
    * type  全域公网带宽类型
    * lockInfos  全域公网带宽资源的锁状态
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'isp' => 'setIsp',
            'ingressSize' => 'setIngressSize',
            'accessSite' => 'setAccessSite',
            'size' => 'setSize',
            'description' => 'setDescription',
            'chargeMode' => 'setChargeMode',
            'domainId' => 'setDomainId',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'retStatus' => 'setRetStatus',
            'tags' => 'setTags',
            'sysTags' => 'setSysTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'type' => 'setType',
            'lockInfos' => 'setLockInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * name  资源名称
    * isp  线路
    * ingressSize  全域公网带宽大小（入云方向）
    * accessSite  接入点信息
    * size  全域公网带宽大小（出云方向）
    * description  用户自定义的资源描述
    * chargeMode  计费模式
    * domainId  租户ID
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * retStatus  是否创建成功标识，取值：successful、failed。
    * tags  全域公网带宽标签
    * sysTags  系统标签
    * enterpriseProjectId  资源的企业项目id
    * type  全域公网带宽类型
    * lockInfos  全域公网带宽资源的锁状态
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'isp' => 'getIsp',
            'ingressSize' => 'getIngressSize',
            'accessSite' => 'getAccessSite',
            'size' => 'getSize',
            'description' => 'getDescription',
            'chargeMode' => 'getChargeMode',
            'domainId' => 'getDomainId',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'retStatus' => 'getRetStatus',
            'tags' => 'getTags',
            'sysTags' => 'getSysTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'type' => 'getType',
            'lockInfos' => 'getLockInfos'
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
    const STATUS_NORMAL = 'NORMAL';
    const STATUS_FREEZED = 'FREEZED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NORMAL,
            self::STATUS_FREEZED,
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
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['ingressSize'] = isset($data['ingressSize']) ? $data['ingressSize'] : null;
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['retStatus'] = isset($data['retStatus']) ? $data['retStatus'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['lockInfos'] = isset($data['lockInfos']) ? $data['lockInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isp'] === null) {
            $invalidProperties[] = "'isp' can't be null";
        }
        if ($this->container['accessSite'] === null) {
            $invalidProperties[] = "'accessSite' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    *  ID
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
    * @param string|null $id ID
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
    *  资源名称
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
    * @param string|null $name 资源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isp
    *  线路
    *
    * @return string
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string $isp 线路
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
        return $this;
    }

    /**
    * Gets ingressSize
    *  全域公网带宽大小（入云方向）
    *
    * @return int|null
    */
    public function getIngressSize()
    {
        return $this->container['ingressSize'];
    }

    /**
    * Sets ingressSize
    *
    * @param int|null $ingressSize 全域公网带宽大小（入云方向）
    *
    * @return $this
    */
    public function setIngressSize($ingressSize)
    {
        $this->container['ingressSize'] = $ingressSize;
        return $this;
    }

    /**
    * Gets accessSite
    *  接入点信息
    *
    * @return string
    */
    public function getAccessSite()
    {
        return $this->container['accessSite'];
    }

    /**
    * Sets accessSite
    *
    * @param string $accessSite 接入点信息
    *
    * @return $this
    */
    public function setAccessSite($accessSite)
    {
        $this->container['accessSite'] = $accessSite;
        return $this;
    }

    /**
    * Gets size
    *  全域公网带宽大小（出云方向）
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
    * @param int $size 全域公网带宽大小（出云方向）
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets description
    *  用户自定义的资源描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 用户自定义的资源描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 计费模式
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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
    * Gets retStatus
    *  是否创建成功标识，取值：successful、failed。
    *
    * @return string|null
    */
    public function getRetStatus()
    {
        return $this->container['retStatus'];
    }

    /**
    * Sets retStatus
    *
    * @param string|null $retStatus 是否创建成功标识，取值：successful、failed。
    *
    * @return $this
    */
    public function setRetStatus($retStatus)
    {
        $this->container['retStatus'] = $retStatus;
        return $this;
    }

    /**
    * Gets tags
    *  全域公网带宽标签
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null $tags 全域公网带宽标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets sysTags
    *  系统标签
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null $sysTags 系统标签
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  资源的企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 资源的企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets type
    *  全域公网带宽类型
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
    * @param string|null $type 全域公网带宽类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets lockInfos
    *  全域公网带宽资源的锁状态
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\LockInfo[]|null
    */
    public function getLockInfos()
    {
        return $this->container['lockInfos'];
    }

    /**
    * Sets lockInfos
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\LockInfo[]|null $lockInfos 全域公网带宽资源的锁状态
    *
    * @return $this
    */
    public function setLockInfos($lockInfos)
    {
        $this->container['lockInfos'] = $lockInfos;
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


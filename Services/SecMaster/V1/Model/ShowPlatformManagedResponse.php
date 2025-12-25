<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPlatformManagedResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPlatformManagedResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间.
    * dwRegion  区域.
    * platformManagedDomainId  平台租户ID.
    * publishStatus  发布状态.
    * tenantManagedDomainId  业务租户ID.
    * updateTime  更新时间.
    * whitelist  是否在白名单中.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'int',
            'dwRegion' => 'string',
            'platformManagedDomainId' => 'string',
            'publishStatus' => 'string',
            'tenantManagedDomainId' => 'string',
            'updateTime' => 'int',
            'whitelist' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间.
    * dwRegion  区域.
    * platformManagedDomainId  平台租户ID.
    * publishStatus  发布状态.
    * tenantManagedDomainId  业务租户ID.
    * updateTime  更新时间.
    * whitelist  是否在白名单中.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'int64',
        'dwRegion' => null,
        'platformManagedDomainId' => null,
        'publishStatus' => null,
        'tenantManagedDomainId' => null,
        'updateTime' => 'int64',
        'whitelist' => null
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
    * createTime  创建时间.
    * dwRegion  区域.
    * platformManagedDomainId  平台租户ID.
    * publishStatus  发布状态.
    * tenantManagedDomainId  业务租户ID.
    * updateTime  更新时间.
    * whitelist  是否在白名单中.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'dwRegion' => 'dw_region',
            'platformManagedDomainId' => 'platform_managed_domain_id',
            'publishStatus' => 'publish_status',
            'tenantManagedDomainId' => 'tenant_managed_domain_id',
            'updateTime' => 'update_time',
            'whitelist' => 'whitelist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间.
    * dwRegion  区域.
    * platformManagedDomainId  平台租户ID.
    * publishStatus  发布状态.
    * tenantManagedDomainId  业务租户ID.
    * updateTime  更新时间.
    * whitelist  是否在白名单中.
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'dwRegion' => 'setDwRegion',
            'platformManagedDomainId' => 'setPlatformManagedDomainId',
            'publishStatus' => 'setPublishStatus',
            'tenantManagedDomainId' => 'setTenantManagedDomainId',
            'updateTime' => 'setUpdateTime',
            'whitelist' => 'setWhitelist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间.
    * dwRegion  区域.
    * platformManagedDomainId  平台租户ID.
    * publishStatus  发布状态.
    * tenantManagedDomainId  业务租户ID.
    * updateTime  更新时间.
    * whitelist  是否在白名单中.
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'dwRegion' => 'getDwRegion',
            'platformManagedDomainId' => 'getPlatformManagedDomainId',
            'publishStatus' => 'getPublishStatus',
            'tenantManagedDomainId' => 'getTenantManagedDomainId',
            'updateTime' => 'getUpdateTime',
            'whitelist' => 'getWhitelist'
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
    const PUBLISH_STATUS_DISABLE = 'DISABLE';
    const PUBLISH_STATUS_PROD = 'PROD';
    const PUBLISH_STATUS_GRAY = 'GRAY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPublishStatusAllowableValues()
    {
        return [
            self::PUBLISH_STATUS_DISABLE,
            self::PUBLISH_STATUS_PROD,
            self::PUBLISH_STATUS_GRAY,
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['dwRegion'] = isset($data['dwRegion']) ? $data['dwRegion'] : null;
        $this->container['platformManagedDomainId'] = isset($data['platformManagedDomainId']) ? $data['platformManagedDomainId'] : null;
        $this->container['publishStatus'] = isset($data['publishStatus']) ? $data['publishStatus'] : null;
        $this->container['tenantManagedDomainId'] = isset($data['tenantManagedDomainId']) ? $data['tenantManagedDomainId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['whitelist'] = isset($data['whitelist']) ? $data['whitelist'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPublishStatusAllowableValues();
                if (!is_null($this->container['publishStatus']) && !in_array($this->container['publishStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'publishStatus', must be one of '%s'",
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
    * Gets createTime
    *  创建时间.
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间.
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets dwRegion
    *  区域.
    *
    * @return string|null
    */
    public function getDwRegion()
    {
        return $this->container['dwRegion'];
    }

    /**
    * Sets dwRegion
    *
    * @param string|null $dwRegion 区域.
    *
    * @return $this
    */
    public function setDwRegion($dwRegion)
    {
        $this->container['dwRegion'] = $dwRegion;
        return $this;
    }

    /**
    * Gets platformManagedDomainId
    *  平台租户ID.
    *
    * @return string|null
    */
    public function getPlatformManagedDomainId()
    {
        return $this->container['platformManagedDomainId'];
    }

    /**
    * Sets platformManagedDomainId
    *
    * @param string|null $platformManagedDomainId 平台租户ID.
    *
    * @return $this
    */
    public function setPlatformManagedDomainId($platformManagedDomainId)
    {
        $this->container['platformManagedDomainId'] = $platformManagedDomainId;
        return $this;
    }

    /**
    * Gets publishStatus
    *  发布状态.
    *
    * @return string|null
    */
    public function getPublishStatus()
    {
        return $this->container['publishStatus'];
    }

    /**
    * Sets publishStatus
    *
    * @param string|null $publishStatus 发布状态.
    *
    * @return $this
    */
    public function setPublishStatus($publishStatus)
    {
        $this->container['publishStatus'] = $publishStatus;
        return $this;
    }

    /**
    * Gets tenantManagedDomainId
    *  业务租户ID.
    *
    * @return string|null
    */
    public function getTenantManagedDomainId()
    {
        return $this->container['tenantManagedDomainId'];
    }

    /**
    * Sets tenantManagedDomainId
    *
    * @param string|null $tenantManagedDomainId 业务租户ID.
    *
    * @return $this
    */
    public function setTenantManagedDomainId($tenantManagedDomainId)
    {
        $this->container['tenantManagedDomainId'] = $tenantManagedDomainId;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间.
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间.
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets whitelist
    *  是否在白名单中.
    *
    * @return bool|null
    */
    public function getWhitelist()
    {
        return $this->container['whitelist'];
    }

    /**
    * Sets whitelist
    *
    * @param bool|null $whitelist 是否在白名单中.
    *
    * @return $this
    */
    public function setWhitelist($whitelist)
    {
        $this->container['whitelist'] = $whitelist;
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


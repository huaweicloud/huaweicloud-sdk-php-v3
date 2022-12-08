<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthPkgResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthPkgResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  - 功能说明：加油包ID - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）
    * resourceName  - 功能说明：加油包名称
    * processedTime  - 功能说明：资源创建时间，UTC时间格式：2016-03-28T00:00:00Z
    * bandwidthId  - 功能说明：加油包绑定的原带宽ID
    * pkgSize  - 功能说明：加油包的大小，即在原始带宽之上提升的带宽大小 - 取值范围：>1M，pkgSize+原始带宽大小 < 云服务带宽接口限制的带宽上限
    * tenantId  - 功能说明：租户id
    * billingInfo  - 功能说明：加油包订单相关信息格式：非空时值为''orderId:productId''
    * startTime  - 功能说明：加油包起始生效时间，UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime >= 服务处理请求的时间
    * endTime  - 功能说明：加油包结束时间UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime < endTime
    * status  - 功能说明：加油包资源状态，仅管理员权限可以变更状态 - 取值范围：''pending'', ''active'', ''completed'', ''error''
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'resourceName' => 'string',
            'processedTime' => 'string',
            'bandwidthId' => 'string',
            'pkgSize' => 'int',
            'tenantId' => 'string',
            'billingInfo' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  - 功能说明：加油包ID - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）
    * resourceName  - 功能说明：加油包名称
    * processedTime  - 功能说明：资源创建时间，UTC时间格式：2016-03-28T00:00:00Z
    * bandwidthId  - 功能说明：加油包绑定的原带宽ID
    * pkgSize  - 功能说明：加油包的大小，即在原始带宽之上提升的带宽大小 - 取值范围：>1M，pkgSize+原始带宽大小 < 云服务带宽接口限制的带宽上限
    * tenantId  - 功能说明：租户id
    * billingInfo  - 功能说明：加油包订单相关信息格式：非空时值为''orderId:productId''
    * startTime  - 功能说明：加油包起始生效时间，UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime >= 服务处理请求的时间
    * endTime  - 功能说明：加油包结束时间UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime < endTime
    * status  - 功能说明：加油包资源状态，仅管理员权限可以变更状态 - 取值范围：''pending'', ''active'', ''completed'', ''error''
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'resourceName' => null,
        'processedTime' => null,
        'bandwidthId' => null,
        'pkgSize' => null,
        'tenantId' => null,
        'billingInfo' => null,
        'startTime' => null,
        'endTime' => null,
        'status' => null
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
    * resourceId  - 功能说明：加油包ID - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）
    * resourceName  - 功能说明：加油包名称
    * processedTime  - 功能说明：资源创建时间，UTC时间格式：2016-03-28T00:00:00Z
    * bandwidthId  - 功能说明：加油包绑定的原带宽ID
    * pkgSize  - 功能说明：加油包的大小，即在原始带宽之上提升的带宽大小 - 取值范围：>1M，pkgSize+原始带宽大小 < 云服务带宽接口限制的带宽上限
    * tenantId  - 功能说明：租户id
    * billingInfo  - 功能说明：加油包订单相关信息格式：非空时值为''orderId:productId''
    * startTime  - 功能说明：加油包起始生效时间，UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime >= 服务处理请求的时间
    * endTime  - 功能说明：加油包结束时间UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime < endTime
    * status  - 功能说明：加油包资源状态，仅管理员权限可以变更状态 - 取值范围：''pending'', ''active'', ''completed'', ''error''
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resourceId',
            'resourceName' => 'resourceName',
            'processedTime' => 'processedTime',
            'bandwidthId' => 'bandwidthId',
            'pkgSize' => 'pkgSize',
            'tenantId' => 'tenant_id',
            'billingInfo' => 'billingInfo',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  - 功能说明：加油包ID - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）
    * resourceName  - 功能说明：加油包名称
    * processedTime  - 功能说明：资源创建时间，UTC时间格式：2016-03-28T00:00:00Z
    * bandwidthId  - 功能说明：加油包绑定的原带宽ID
    * pkgSize  - 功能说明：加油包的大小，即在原始带宽之上提升的带宽大小 - 取值范围：>1M，pkgSize+原始带宽大小 < 云服务带宽接口限制的带宽上限
    * tenantId  - 功能说明：租户id
    * billingInfo  - 功能说明：加油包订单相关信息格式：非空时值为''orderId:productId''
    * startTime  - 功能说明：加油包起始生效时间，UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime >= 服务处理请求的时间
    * endTime  - 功能说明：加油包结束时间UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime < endTime
    * status  - 功能说明：加油包资源状态，仅管理员权限可以变更状态 - 取值范围：''pending'', ''active'', ''completed'', ''error''
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'processedTime' => 'setProcessedTime',
            'bandwidthId' => 'setBandwidthId',
            'pkgSize' => 'setPkgSize',
            'tenantId' => 'setTenantId',
            'billingInfo' => 'setBillingInfo',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  - 功能说明：加油包ID - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）
    * resourceName  - 功能说明：加油包名称
    * processedTime  - 功能说明：资源创建时间，UTC时间格式：2016-03-28T00:00:00Z
    * bandwidthId  - 功能说明：加油包绑定的原带宽ID
    * pkgSize  - 功能说明：加油包的大小，即在原始带宽之上提升的带宽大小 - 取值范围：>1M，pkgSize+原始带宽大小 < 云服务带宽接口限制的带宽上限
    * tenantId  - 功能说明：租户id
    * billingInfo  - 功能说明：加油包订单相关信息格式：非空时值为''orderId:productId''
    * startTime  - 功能说明：加油包起始生效时间，UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime >= 服务处理请求的时间
    * endTime  - 功能说明：加油包结束时间UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime < endTime
    * status  - 功能说明：加油包资源状态，仅管理员权限可以变更状态 - 取值范围：''pending'', ''active'', ''completed'', ''error''
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'processedTime' => 'getProcessedTime',
            'bandwidthId' => 'getBandwidthId',
            'pkgSize' => 'getPkgSize',
            'tenantId' => 'getTenantId',
            'billingInfo' => 'getBillingInfo',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['processedTime'] = isset($data['processedTime']) ? $data['processedTime'] : null;
        $this->container['bandwidthId'] = isset($data['bandwidthId']) ? $data['bandwidthId'] : null;
        $this->container['pkgSize'] = isset($data['pkgSize']) ? $data['pkgSize'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
        if ($this->container['processedTime'] === null) {
            $invalidProperties[] = "'processedTime' can't be null";
        }
        if ($this->container['bandwidthId'] === null) {
            $invalidProperties[] = "'bandwidthId' can't be null";
        }
        if ($this->container['pkgSize'] === null) {
            $invalidProperties[] = "'pkgSize' can't be null";
        }
        if ($this->container['billingInfo'] === null) {
            $invalidProperties[] = "'billingInfo' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets resourceId
    *  - 功能说明：加油包ID - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId - 功能说明：加油包ID - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  - 功能说明：加油包名称
    *
    * @return string
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string $resourceName - 功能说明：加油包名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets processedTime
    *  - 功能说明：资源创建时间，UTC时间格式：2016-03-28T00:00:00Z
    *
    * @return string
    */
    public function getProcessedTime()
    {
        return $this->container['processedTime'];
    }

    /**
    * Sets processedTime
    *
    * @param string $processedTime - 功能说明：资源创建时间，UTC时间格式：2016-03-28T00:00:00Z
    *
    * @return $this
    */
    public function setProcessedTime($processedTime)
    {
        $this->container['processedTime'] = $processedTime;
        return $this;
    }

    /**
    * Gets bandwidthId
    *  - 功能说明：加油包绑定的原带宽ID
    *
    * @return string
    */
    public function getBandwidthId()
    {
        return $this->container['bandwidthId'];
    }

    /**
    * Sets bandwidthId
    *
    * @param string $bandwidthId - 功能说明：加油包绑定的原带宽ID
    *
    * @return $this
    */
    public function setBandwidthId($bandwidthId)
    {
        $this->container['bandwidthId'] = $bandwidthId;
        return $this;
    }

    /**
    * Gets pkgSize
    *  - 功能说明：加油包的大小，即在原始带宽之上提升的带宽大小 - 取值范围：>1M，pkgSize+原始带宽大小 < 云服务带宽接口限制的带宽上限
    *
    * @return int
    */
    public function getPkgSize()
    {
        return $this->container['pkgSize'];
    }

    /**
    * Sets pkgSize
    *
    * @param int $pkgSize - 功能说明：加油包的大小，即在原始带宽之上提升的带宽大小 - 取值范围：>1M，pkgSize+原始带宽大小 < 云服务带宽接口限制的带宽上限
    *
    * @return $this
    */
    public function setPkgSize($pkgSize)
    {
        $this->container['pkgSize'] = $pkgSize;
        return $this;
    }

    /**
    * Gets tenantId
    *  - 功能说明：租户id
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId - 功能说明：租户id
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets billingInfo
    *  - 功能说明：加油包订单相关信息格式：非空时值为''orderId:productId''
    *
    * @return string
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string $billingInfo - 功能说明：加油包订单相关信息格式：非空时值为''orderId:productId''
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets startTime
    *  - 功能说明：加油包起始生效时间，UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime >= 服务处理请求的时间
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime - 功能说明：加油包起始生效时间，UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime >= 服务处理请求的时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  - 功能说明：加油包结束时间UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime < endTime
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime - 功能说明：加油包结束时间UTC时间格式：2016-03-28T00:00:00Z - 取值范围：startTime < endTime
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  - 功能说明：加油包资源状态，仅管理员权限可以变更状态 - 取值范围：''pending'', ''active'', ''completed'', ''error''
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status - 功能说明：加油包资源状态，仅管理员权限可以变更状态 - 取值范围：''pending'', ''active'', ''completed'', ''error''
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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


<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionResourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionResourceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源Id
    * resourceSize  资源规格
    * resourceType  资源类型
    * resourceSpecCode  资源规格编码
    * createTime  创建时间戳
    * expireTime  到期时间戳，只有按需资源有该字段
    * resourceStatus  资源状态，目前返回正常运行的资源，其状态值为0
    * orderId  订单Id，包周期资源有该字段
    * chargingMode  计费模式，目前有包周期（包年包月）PREPAID、按需POSTPAID，大小写不敏感
    * tagList  资源列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'resourceSize' => 'int',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'createTime' => 'int',
            'expireTime' => 'int',
            'resourceStatus' => 'int',
            'orderId' => 'string',
            'chargingMode' => 'string',
            'tagList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\TagInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源Id
    * resourceSize  资源规格
    * resourceType  资源类型
    * resourceSpecCode  资源规格编码
    * createTime  创建时间戳
    * expireTime  到期时间戳，只有按需资源有该字段
    * resourceStatus  资源状态，目前返回正常运行的资源，其状态值为0
    * orderId  订单Id，包周期资源有该字段
    * chargingMode  计费模式，目前有包周期（包年包月）PREPAID、按需POSTPAID，大小写不敏感
    * tagList  资源列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'resourceSize' => 'int32',
        'resourceType' => null,
        'resourceSpecCode' => null,
        'createTime' => 'int64',
        'expireTime' => 'int64',
        'resourceStatus' => 'int32',
        'orderId' => null,
        'chargingMode' => null,
        'tagList' => null
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
    * resourceId  资源Id
    * resourceSize  资源规格
    * resourceType  资源类型
    * resourceSpecCode  资源规格编码
    * createTime  创建时间戳
    * expireTime  到期时间戳，只有按需资源有该字段
    * resourceStatus  资源状态，目前返回正常运行的资源，其状态值为0
    * orderId  订单Id，包周期资源有该字段
    * chargingMode  计费模式，目前有包周期（包年包月）PREPAID、按需POSTPAID，大小写不敏感
    * tagList  资源列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'resourceSize' => 'resource_size',
            'resourceType' => 'resource_type',
            'resourceSpecCode' => 'resource_spec_code',
            'createTime' => 'create_time',
            'expireTime' => 'expire_time',
            'resourceStatus' => 'resource_status',
            'orderId' => 'order_id',
            'chargingMode' => 'charging_mode',
            'tagList' => 'tag_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源Id
    * resourceSize  资源规格
    * resourceType  资源类型
    * resourceSpecCode  资源规格编码
    * createTime  创建时间戳
    * expireTime  到期时间戳，只有按需资源有该字段
    * resourceStatus  资源状态，目前返回正常运行的资源，其状态值为0
    * orderId  订单Id，包周期资源有该字段
    * chargingMode  计费模式，目前有包周期（包年包月）PREPAID、按需POSTPAID，大小写不敏感
    * tagList  资源列表
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'resourceSize' => 'setResourceSize',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'createTime' => 'setCreateTime',
            'expireTime' => 'setExpireTime',
            'resourceStatus' => 'setResourceStatus',
            'orderId' => 'setOrderId',
            'chargingMode' => 'setChargingMode',
            'tagList' => 'setTagList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源Id
    * resourceSize  资源规格
    * resourceType  资源类型
    * resourceSpecCode  资源规格编码
    * createTime  创建时间戳
    * expireTime  到期时间戳，只有按需资源有该字段
    * resourceStatus  资源状态，目前返回正常运行的资源，其状态值为0
    * orderId  订单Id，包周期资源有该字段
    * chargingMode  计费模式，目前有包周期（包年包月）PREPAID、按需POSTPAID，大小写不敏感
    * tagList  资源列表
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'resourceSize' => 'getResourceSize',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'createTime' => 'getCreateTime',
            'expireTime' => 'getExpireTime',
            'resourceStatus' => 'getResourceStatus',
            'orderId' => 'getOrderId',
            'chargingMode' => 'getChargingMode',
            'tagList' => 'getTagList'
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
    const CHARGING_MODE_PREPAID = 'PREPAID';
    const CHARGING_MODE_POSTPAID = 'POSTPAID';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_PREPAID,
            self::CHARGING_MODE_POSTPAID,
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['resourceStatus'] = isset($data['resourceStatus']) ? $data['resourceStatus'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['resourceSize']) && ($this->container['resourceSize'] > 10000)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['resourceSize']) && ($this->container['resourceSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['resourceStatus']) && ($this->container['resourceStatus'] > 2)) {
                $invalidProperties[] = "invalid value for 'resourceStatus', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['resourceStatus']) && ($this->container['resourceStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceStatus', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 2)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 2)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 2.";
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
    *  资源Id
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源Id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceSize
    *  资源规格
    *
    * @return int|null
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param int|null $resourceSize 资源规格
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  资源规格编码
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 资源规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间戳
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
    * @param int|null $createTime 创建时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  到期时间戳，只有按需资源有该字段
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 到期时间戳，只有按需资源有该字段
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets resourceStatus
    *  资源状态，目前返回正常运行的资源，其状态值为0
    *
    * @return int|null
    */
    public function getResourceStatus()
    {
        return $this->container['resourceStatus'];
    }

    /**
    * Sets resourceStatus
    *
    * @param int|null $resourceStatus 资源状态，目前返回正常运行的资源，其状态值为0
    *
    * @return $this
    */
    public function setResourceStatus($resourceStatus)
    {
        $this->container['resourceStatus'] = $resourceStatus;
        return $this;
    }

    /**
    * Gets orderId
    *  订单Id，包周期资源有该字段
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单Id，包周期资源有该字段
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式，目前有包周期（包年包月）PREPAID、按需POSTPAID，大小写不敏感
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 计费模式，目前有包周期（包年包月）PREPAID、按需POSTPAID，大小写不敏感
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets tagList
    *  资源列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\TagInfo[]|null
    */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
    * Sets tagList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\TagInfo[]|null $tagList 资源列表
    *
    * @return $this
    */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;
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


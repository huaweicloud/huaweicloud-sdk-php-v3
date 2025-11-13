<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VoiceTrainingResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VoiceTrainingResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationType  资源操作类型。 * ADD: 新增资源 * UPDATE：更新资源 * FREEZE：停用资源 * UNFREEZE：启用资源 * REBIND: 重新绑定资源
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    * assetId  资产ID。
    * resourceId  资源ID。
    * resourceNums  资源数量。声音模型训练个数。
    * resourceAvailableNums  可用资源数量。可用声音模型训练个数。
    * resourceType  资源类型。 * BASIC: 基础版 * MIDDLE: 进阶版 * ADVANCE：高级版 * THIRD_PARTY：第三方出门问问 * THIRD_PARTY_LJZN: 第三方逻辑智能 * TTS_CMWW：TTS资源 * TTS_LJZN: 逻辑智能TTS资源 * FLEXUS: Flexus版资源
    * chargeMode  chargeMode
    * expireTime  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * status  资源状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationType' => 'string',
            'resourceSource' => 'string',
            'assetId' => 'string',
            'resourceId' => 'string',
            'resourceNums' => 'int',
            'resourceAvailableNums' => 'int',
            'resourceType' => 'string',
            'chargeMode' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ChardMode',
            'expireTime' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationType  资源操作类型。 * ADD: 新增资源 * UPDATE：更新资源 * FREEZE：停用资源 * UNFREEZE：启用资源 * REBIND: 重新绑定资源
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    * assetId  资产ID。
    * resourceId  资源ID。
    * resourceNums  资源数量。声音模型训练个数。
    * resourceAvailableNums  可用资源数量。可用声音模型训练个数。
    * resourceType  资源类型。 * BASIC: 基础版 * MIDDLE: 进阶版 * ADVANCE：高级版 * THIRD_PARTY：第三方出门问问 * THIRD_PARTY_LJZN: 第三方逻辑智能 * TTS_CMWW：TTS资源 * TTS_LJZN: 逻辑智能TTS资源 * FLEXUS: Flexus版资源
    * chargeMode  chargeMode
    * expireTime  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * status  资源状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationType' => null,
        'resourceSource' => null,
        'assetId' => null,
        'resourceId' => null,
        'resourceNums' => null,
        'resourceAvailableNums' => null,
        'resourceType' => null,
        'chargeMode' => null,
        'expireTime' => null,
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
    * operationType  资源操作类型。 * ADD: 新增资源 * UPDATE：更新资源 * FREEZE：停用资源 * UNFREEZE：启用资源 * REBIND: 重新绑定资源
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    * assetId  资产ID。
    * resourceId  资源ID。
    * resourceNums  资源数量。声音模型训练个数。
    * resourceAvailableNums  可用资源数量。可用声音模型训练个数。
    * resourceType  资源类型。 * BASIC: 基础版 * MIDDLE: 进阶版 * ADVANCE：高级版 * THIRD_PARTY：第三方出门问问 * THIRD_PARTY_LJZN: 第三方逻辑智能 * TTS_CMWW：TTS资源 * TTS_LJZN: 逻辑智能TTS资源 * FLEXUS: Flexus版资源
    * chargeMode  chargeMode
    * expireTime  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * status  资源状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationType' => 'operation_type',
            'resourceSource' => 'resource_source',
            'assetId' => 'asset_id',
            'resourceId' => 'resource_id',
            'resourceNums' => 'resource_nums',
            'resourceAvailableNums' => 'resource_available_nums',
            'resourceType' => 'resource_type',
            'chargeMode' => 'charge_mode',
            'expireTime' => 'expire_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationType  资源操作类型。 * ADD: 新增资源 * UPDATE：更新资源 * FREEZE：停用资源 * UNFREEZE：启用资源 * REBIND: 重新绑定资源
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    * assetId  资产ID。
    * resourceId  资源ID。
    * resourceNums  资源数量。声音模型训练个数。
    * resourceAvailableNums  可用资源数量。可用声音模型训练个数。
    * resourceType  资源类型。 * BASIC: 基础版 * MIDDLE: 进阶版 * ADVANCE：高级版 * THIRD_PARTY：第三方出门问问 * THIRD_PARTY_LJZN: 第三方逻辑智能 * TTS_CMWW：TTS资源 * TTS_LJZN: 逻辑智能TTS资源 * FLEXUS: Flexus版资源
    * chargeMode  chargeMode
    * expireTime  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * status  资源状态
    *
    * @var string[]
    */
    protected static $setters = [
            'operationType' => 'setOperationType',
            'resourceSource' => 'setResourceSource',
            'assetId' => 'setAssetId',
            'resourceId' => 'setResourceId',
            'resourceNums' => 'setResourceNums',
            'resourceAvailableNums' => 'setResourceAvailableNums',
            'resourceType' => 'setResourceType',
            'chargeMode' => 'setChargeMode',
            'expireTime' => 'setExpireTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationType  资源操作类型。 * ADD: 新增资源 * UPDATE：更新资源 * FREEZE：停用资源 * UNFREEZE：启用资源 * REBIND: 重新绑定资源
    * resourceSource  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    * assetId  资产ID。
    * resourceId  资源ID。
    * resourceNums  资源数量。声音模型训练个数。
    * resourceAvailableNums  可用资源数量。可用声音模型训练个数。
    * resourceType  资源类型。 * BASIC: 基础版 * MIDDLE: 进阶版 * ADVANCE：高级版 * THIRD_PARTY：第三方出门问问 * THIRD_PARTY_LJZN: 第三方逻辑智能 * TTS_CMWW：TTS资源 * TTS_LJZN: 逻辑智能TTS资源 * FLEXUS: Flexus版资源
    * chargeMode  chargeMode
    * expireTime  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    * status  资源状态
    *
    * @var string[]
    */
    protected static $getters = [
            'operationType' => 'getOperationType',
            'resourceSource' => 'getResourceSource',
            'assetId' => 'getAssetId',
            'resourceId' => 'getResourceId',
            'resourceNums' => 'getResourceNums',
            'resourceAvailableNums' => 'getResourceAvailableNums',
            'resourceType' => 'getResourceType',
            'chargeMode' => 'getChargeMode',
            'expireTime' => 'getExpireTime',
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
    const OPERATION_TYPE_ADD = 'ADD';
    const OPERATION_TYPE_UPDATE = 'UPDATE';
    const OPERATION_TYPE_FREEZE = 'FREEZE';
    const OPERATION_TYPE_UNFREEZE = 'UNFREEZE';
    const OPERATION_TYPE_REBIND = 'REBIND';
    const RESOURCE_SOURCE_PURCHASED = 'PURCHASED';
    const RESOURCE_SOURCE_SP_ALLOCATED = 'SP_ALLOCATED';
    const RESOURCE_SOURCE_ADMIN_ALLOCATED = 'ADMIN_ALLOCATED';
    const RESOURCE_TYPE_BASIC = 'BASIC';
    const RESOURCE_TYPE_MIDDLE = 'MIDDLE';
    const RESOURCE_TYPE_ADVANCE = 'ADVANCE';
    const RESOURCE_TYPE_THIRD_PARTY = 'THIRD_PARTY';
    const RESOURCE_TYPE_THIRD_PARTY_LJZN = 'THIRD_PARTY_LJZN';
    const RESOURCE_TYPE_TTS_CMWW = 'TTS_CMWW';
    const RESOURCE_TYPE_TTS_LJZN = 'TTS_LJZN';
    const RESOURCE_TYPE_FLEXUS = 'FLEXUS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_ADD,
            self::OPERATION_TYPE_UPDATE,
            self::OPERATION_TYPE_FREEZE,
            self::OPERATION_TYPE_UNFREEZE,
            self::OPERATION_TYPE_REBIND,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceSourceAllowableValues()
    {
        return [
            self::RESOURCE_SOURCE_PURCHASED,
            self::RESOURCE_SOURCE_SP_ALLOCATED,
            self::RESOURCE_SOURCE_ADMIN_ALLOCATED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_BASIC,
            self::RESOURCE_TYPE_MIDDLE,
            self::RESOURCE_TYPE_ADVANCE,
            self::RESOURCE_TYPE_THIRD_PARTY,
            self::RESOURCE_TYPE_THIRD_PARTY_LJZN,
            self::RESOURCE_TYPE_TTS_CMWW,
            self::RESOURCE_TYPE_TTS_LJZN,
            self::RESOURCE_TYPE_FLEXUS,
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
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['resourceSource'] = isset($data['resourceSource']) ? $data['resourceSource'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceNums'] = isset($data['resourceNums']) ? $data['resourceNums'] : null;
        $this->container['resourceAvailableNums'] = isset($data['resourceAvailableNums']) ? $data['resourceAvailableNums'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
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
            $allowedValues = $this->getOperationTypeAllowableValues();
                if (!is_null($this->container['operationType']) && !in_array($this->container['operationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getResourceSourceAllowableValues();
                if (!is_null($this->container['resourceSource']) && !in_array($this->container['resourceSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceNums']) && ($this->container['resourceNums'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'resourceNums', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['resourceNums']) && ($this->container['resourceNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceAvailableNums']) && ($this->container['resourceAvailableNums'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'resourceAvailableNums', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['resourceAvailableNums']) && ($this->container['resourceAvailableNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceAvailableNums', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 1)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
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
    * Gets operationType
    *  资源操作类型。 * ADD: 新增资源 * UPDATE：更新资源 * FREEZE：停用资源 * UNFREEZE：启用资源 * REBIND: 重新绑定资源
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType 资源操作类型。 * ADD: 新增资源 * UPDATE：更新资源 * FREEZE：停用资源 * UNFREEZE：启用资源 * REBIND: 重新绑定资源
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets resourceSource
    *  资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    *
    * @return string|null
    */
    public function getResourceSource()
    {
        return $this->container['resourceSource'];
    }

    /**
    * Sets resourceSource
    *
    * @param string|null $resourceSource 资源来源。 * PURCHASED: 购买 * SP_ALLOCATED：SP分配 * ADMIN_ALLOCATED：系统管理员分配 > * 开通按需；购买按需套餐包、一次性资源、包周期等都属于PURCHASED。
    *
    * @return $this
    */
    public function setResourceSource($resourceSource)
    {
        $this->container['resourceSource'] = $resourceSource;
        return $this;
    }

    /**
    * Gets assetId
    *  资产ID。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 资产ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID。
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
    * @param string|null $resourceId 资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceNums
    *  资源数量。声音模型训练个数。
    *
    * @return int|null
    */
    public function getResourceNums()
    {
        return $this->container['resourceNums'];
    }

    /**
    * Sets resourceNums
    *
    * @param int|null $resourceNums 资源数量。声音模型训练个数。
    *
    * @return $this
    */
    public function setResourceNums($resourceNums)
    {
        $this->container['resourceNums'] = $resourceNums;
        return $this;
    }

    /**
    * Gets resourceAvailableNums
    *  可用资源数量。可用声音模型训练个数。
    *
    * @return int|null
    */
    public function getResourceAvailableNums()
    {
        return $this->container['resourceAvailableNums'];
    }

    /**
    * Sets resourceAvailableNums
    *
    * @param int|null $resourceAvailableNums 可用资源数量。可用声音模型训练个数。
    *
    * @return $this
    */
    public function setResourceAvailableNums($resourceAvailableNums)
    {
        $this->container['resourceAvailableNums'] = $resourceAvailableNums;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型。 * BASIC: 基础版 * MIDDLE: 进阶版 * ADVANCE：高级版 * THIRD_PARTY：第三方出门问问 * THIRD_PARTY_LJZN: 第三方逻辑智能 * TTS_CMWW：TTS资源 * TTS_LJZN: 逻辑智能TTS资源 * FLEXUS: Flexus版资源
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
    * @param string|null $resourceType 资源类型。 * BASIC: 基础版 * MIDDLE: 进阶版 * ADVANCE：高级版 * THIRD_PARTY：第三方出门问问 * THIRD_PARTY_LJZN: 第三方逻辑智能 * TTS_CMWW：TTS资源 * TTS_LJZN: 逻辑智能TTS资源 * FLEXUS: Flexus版资源
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets chargeMode
    *  chargeMode
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ChardMode|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ChardMode|null $chargeMode chargeMode
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets expireTime
    *  资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 资源过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets status
    *  资源状态
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 资源状态
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


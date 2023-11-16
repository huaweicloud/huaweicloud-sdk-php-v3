<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUnblockQuotaStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUnblockQuotaStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  用户类型：common_user , native_protection_user
    * totalUnblockingQuota  解封总配额
    * remainingUnblockingQuota  剩余解封配额
    * unblockingQuotaToday  今日解封配额
    * remainingUnblockingQuotaToday  今日剩余解封配额
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'totalUnblockingQuota' => 'int',
            'remainingUnblockingQuota' => 'int',
            'unblockingQuotaToday' => 'int',
            'remainingUnblockingQuotaToday' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  用户类型：common_user , native_protection_user
    * totalUnblockingQuota  解封总配额
    * remainingUnblockingQuota  剩余解封配额
    * unblockingQuotaToday  今日解封配额
    * remainingUnblockingQuotaToday  今日剩余解封配额
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'totalUnblockingQuota' => 'int32',
        'remainingUnblockingQuota' => 'int32',
        'unblockingQuotaToday' => 'int32',
        'remainingUnblockingQuotaToday' => 'int32'
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
    * type  用户类型：common_user , native_protection_user
    * totalUnblockingQuota  解封总配额
    * remainingUnblockingQuota  剩余解封配额
    * unblockingQuotaToday  今日解封配额
    * remainingUnblockingQuotaToday  今日剩余解封配额
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'totalUnblockingQuota' => 'total_unblocking_quota',
            'remainingUnblockingQuota' => 'remaining_unblocking_quota',
            'unblockingQuotaToday' => 'unblocking_quota_today',
            'remainingUnblockingQuotaToday' => 'remaining_unblocking_quota_today'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  用户类型：common_user , native_protection_user
    * totalUnblockingQuota  解封总配额
    * remainingUnblockingQuota  剩余解封配额
    * unblockingQuotaToday  今日解封配额
    * remainingUnblockingQuotaToday  今日剩余解封配额
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'totalUnblockingQuota' => 'setTotalUnblockingQuota',
            'remainingUnblockingQuota' => 'setRemainingUnblockingQuota',
            'unblockingQuotaToday' => 'setUnblockingQuotaToday',
            'remainingUnblockingQuotaToday' => 'setRemainingUnblockingQuotaToday'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  用户类型：common_user , native_protection_user
    * totalUnblockingQuota  解封总配额
    * remainingUnblockingQuota  剩余解封配额
    * unblockingQuotaToday  今日解封配额
    * remainingUnblockingQuotaToday  今日剩余解封配额
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'totalUnblockingQuota' => 'getTotalUnblockingQuota',
            'remainingUnblockingQuota' => 'getRemainingUnblockingQuota',
            'unblockingQuotaToday' => 'getUnblockingQuotaToday',
            'remainingUnblockingQuotaToday' => 'getRemainingUnblockingQuotaToday'
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
    const TYPE_COMMON_USER = 'common_user';
    const TYPE_NATIVE_PROTECTION_USER = 'native_protection_user';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COMMON_USER,
            self::TYPE_NATIVE_PROTECTION_USER,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['totalUnblockingQuota'] = isset($data['totalUnblockingQuota']) ? $data['totalUnblockingQuota'] : null;
        $this->container['remainingUnblockingQuota'] = isset($data['remainingUnblockingQuota']) ? $data['remainingUnblockingQuota'] : null;
        $this->container['unblockingQuotaToday'] = isset($data['unblockingQuotaToday']) ? $data['unblockingQuotaToday'] : null;
        $this->container['remainingUnblockingQuotaToday'] = isset($data['remainingUnblockingQuotaToday']) ? $data['remainingUnblockingQuotaToday'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['totalUnblockingQuota']) && ($this->container['totalUnblockingQuota'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'totalUnblockingQuota', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['totalUnblockingQuota']) && ($this->container['totalUnblockingQuota'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalUnblockingQuota', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remainingUnblockingQuota']) && ($this->container['remainingUnblockingQuota'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'remainingUnblockingQuota', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['remainingUnblockingQuota']) && ($this->container['remainingUnblockingQuota'] < 0)) {
                $invalidProperties[] = "invalid value for 'remainingUnblockingQuota', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unblockingQuotaToday']) && ($this->container['unblockingQuotaToday'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'unblockingQuotaToday', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['unblockingQuotaToday']) && ($this->container['unblockingQuotaToday'] < 0)) {
                $invalidProperties[] = "invalid value for 'unblockingQuotaToday', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remainingUnblockingQuotaToday']) && ($this->container['remainingUnblockingQuotaToday'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'remainingUnblockingQuotaToday', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['remainingUnblockingQuotaToday']) && ($this->container['remainingUnblockingQuotaToday'] < 0)) {
                $invalidProperties[] = "invalid value for 'remainingUnblockingQuotaToday', must be bigger than or equal to 0.";
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
    * Gets type
    *  用户类型：common_user , native_protection_user
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
    * @param string|null $type 用户类型：common_user , native_protection_user
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets totalUnblockingQuota
    *  解封总配额
    *
    * @return int|null
    */
    public function getTotalUnblockingQuota()
    {
        return $this->container['totalUnblockingQuota'];
    }

    /**
    * Sets totalUnblockingQuota
    *
    * @param int|null $totalUnblockingQuota 解封总配额
    *
    * @return $this
    */
    public function setTotalUnblockingQuota($totalUnblockingQuota)
    {
        $this->container['totalUnblockingQuota'] = $totalUnblockingQuota;
        return $this;
    }

    /**
    * Gets remainingUnblockingQuota
    *  剩余解封配额
    *
    * @return int|null
    */
    public function getRemainingUnblockingQuota()
    {
        return $this->container['remainingUnblockingQuota'];
    }

    /**
    * Sets remainingUnblockingQuota
    *
    * @param int|null $remainingUnblockingQuota 剩余解封配额
    *
    * @return $this
    */
    public function setRemainingUnblockingQuota($remainingUnblockingQuota)
    {
        $this->container['remainingUnblockingQuota'] = $remainingUnblockingQuota;
        return $this;
    }

    /**
    * Gets unblockingQuotaToday
    *  今日解封配额
    *
    * @return int|null
    */
    public function getUnblockingQuotaToday()
    {
        return $this->container['unblockingQuotaToday'];
    }

    /**
    * Sets unblockingQuotaToday
    *
    * @param int|null $unblockingQuotaToday 今日解封配额
    *
    * @return $this
    */
    public function setUnblockingQuotaToday($unblockingQuotaToday)
    {
        $this->container['unblockingQuotaToday'] = $unblockingQuotaToday;
        return $this;
    }

    /**
    * Gets remainingUnblockingQuotaToday
    *  今日剩余解封配额
    *
    * @return int|null
    */
    public function getRemainingUnblockingQuotaToday()
    {
        return $this->container['remainingUnblockingQuotaToday'];
    }

    /**
    * Sets remainingUnblockingQuotaToday
    *
    * @param int|null $remainingUnblockingQuotaToday 今日剩余解封配额
    *
    * @return $this
    */
    public function setRemainingUnblockingQuotaToday($remainingUnblockingQuotaToday)
    {
        $this->container['remainingUnblockingQuotaToday'] = $remainingUnblockingQuotaToday;
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


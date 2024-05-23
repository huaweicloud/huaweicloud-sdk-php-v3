<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DelegatedAdministratorDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DelegatedAdministratorDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delegationEnabledAt  将账号设置为委托管理员的日期。
    * accountId  账号的唯一标识符（ID）。
    * accountUrn  账号的统一资源名称。
    * joinMethod  账号加入组织的方式,invited：邀请加入，created：创建加入。
    * joinedAt  账号成为组织一部分的日期。
    * accountName  账号名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delegationEnabledAt' => '\DateTime',
            'accountId' => 'string',
            'accountUrn' => 'string',
            'joinMethod' => 'string',
            'joinedAt' => '\DateTime',
            'accountName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delegationEnabledAt  将账号设置为委托管理员的日期。
    * accountId  账号的唯一标识符（ID）。
    * accountUrn  账号的统一资源名称。
    * joinMethod  账号加入组织的方式,invited：邀请加入，created：创建加入。
    * joinedAt  账号成为组织一部分的日期。
    * accountName  账号名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delegationEnabledAt' => 'date-time',
        'accountId' => null,
        'accountUrn' => null,
        'joinMethod' => null,
        'joinedAt' => 'date-time',
        'accountName' => null
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
    * delegationEnabledAt  将账号设置为委托管理员的日期。
    * accountId  账号的唯一标识符（ID）。
    * accountUrn  账号的统一资源名称。
    * joinMethod  账号加入组织的方式,invited：邀请加入，created：创建加入。
    * joinedAt  账号成为组织一部分的日期。
    * accountName  账号名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delegationEnabledAt' => 'delegation_enabled_at',
            'accountId' => 'account_id',
            'accountUrn' => 'account_urn',
            'joinMethod' => 'join_method',
            'joinedAt' => 'joined_at',
            'accountName' => 'account_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delegationEnabledAt  将账号设置为委托管理员的日期。
    * accountId  账号的唯一标识符（ID）。
    * accountUrn  账号的统一资源名称。
    * joinMethod  账号加入组织的方式,invited：邀请加入，created：创建加入。
    * joinedAt  账号成为组织一部分的日期。
    * accountName  账号名称
    *
    * @var string[]
    */
    protected static $setters = [
            'delegationEnabledAt' => 'setDelegationEnabledAt',
            'accountId' => 'setAccountId',
            'accountUrn' => 'setAccountUrn',
            'joinMethod' => 'setJoinMethod',
            'joinedAt' => 'setJoinedAt',
            'accountName' => 'setAccountName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delegationEnabledAt  将账号设置为委托管理员的日期。
    * accountId  账号的唯一标识符（ID）。
    * accountUrn  账号的统一资源名称。
    * joinMethod  账号加入组织的方式,invited：邀请加入，created：创建加入。
    * joinedAt  账号成为组织一部分的日期。
    * accountName  账号名称
    *
    * @var string[]
    */
    protected static $getters = [
            'delegationEnabledAt' => 'getDelegationEnabledAt',
            'accountId' => 'getAccountId',
            'accountUrn' => 'getAccountUrn',
            'joinMethod' => 'getJoinMethod',
            'joinedAt' => 'getJoinedAt',
            'accountName' => 'getAccountName'
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
        $this->container['delegationEnabledAt'] = isset($data['delegationEnabledAt']) ? $data['delegationEnabledAt'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['accountUrn'] = isset($data['accountUrn']) ? $data['accountUrn'] : null;
        $this->container['joinMethod'] = isset($data['joinMethod']) ? $data['joinMethod'] : null;
        $this->container['joinedAt'] = isset($data['joinedAt']) ? $data['joinedAt'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['delegationEnabledAt'] === null) {
            $invalidProperties[] = "'delegationEnabledAt' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
            if ((mb_strlen($this->container['accountId']) > 36)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 36.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['accountUrn'] === null) {
            $invalidProperties[] = "'accountUrn' can't be null";
        }
            if ((mb_strlen($this->container['accountUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'accountUrn', the character length must be smaller than or equal to 1500.";
            }
        if ($this->container['joinMethod'] === null) {
            $invalidProperties[] = "'joinMethod' can't be null";
        }
            if ((mb_strlen($this->container['joinMethod']) > 64)) {
                $invalidProperties[] = "invalid value for 'joinMethod', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['joinMethod']) < 1)) {
                $invalidProperties[] = "invalid value for 'joinMethod', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['joinedAt'] === null) {
            $invalidProperties[] = "'joinedAt' can't be null";
        }
        if ($this->container['accountName'] === null) {
            $invalidProperties[] = "'accountName' can't be null";
        }
            if ((mb_strlen($this->container['accountName']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[a-zA-Z][0-9a-zA-Z_-]+$/", $this->container['accountName'])) {
                $invalidProperties[] = "invalid value for 'accountName', must be conform to the pattern /^[a-zA-Z][0-9a-zA-Z_-]+$/.";
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
    * Gets delegationEnabledAt
    *  将账号设置为委托管理员的日期。
    *
    * @return \DateTime
    */
    public function getDelegationEnabledAt()
    {
        return $this->container['delegationEnabledAt'];
    }

    /**
    * Sets delegationEnabledAt
    *
    * @param \DateTime $delegationEnabledAt 将账号设置为委托管理员的日期。
    *
    * @return $this
    */
    public function setDelegationEnabledAt($delegationEnabledAt)
    {
        $this->container['delegationEnabledAt'] = $delegationEnabledAt;
        return $this;
    }

    /**
    * Gets accountId
    *  账号的唯一标识符（ID）。
    *
    * @return string
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string $accountId 账号的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets accountUrn
    *  账号的统一资源名称。
    *
    * @return string
    */
    public function getAccountUrn()
    {
        return $this->container['accountUrn'];
    }

    /**
    * Sets accountUrn
    *
    * @param string $accountUrn 账号的统一资源名称。
    *
    * @return $this
    */
    public function setAccountUrn($accountUrn)
    {
        $this->container['accountUrn'] = $accountUrn;
        return $this;
    }

    /**
    * Gets joinMethod
    *  账号加入组织的方式,invited：邀请加入，created：创建加入。
    *
    * @return string
    */
    public function getJoinMethod()
    {
        return $this->container['joinMethod'];
    }

    /**
    * Sets joinMethod
    *
    * @param string $joinMethod 账号加入组织的方式,invited：邀请加入，created：创建加入。
    *
    * @return $this
    */
    public function setJoinMethod($joinMethod)
    {
        $this->container['joinMethod'] = $joinMethod;
        return $this;
    }

    /**
    * Gets joinedAt
    *  账号成为组织一部分的日期。
    *
    * @return \DateTime
    */
    public function getJoinedAt()
    {
        return $this->container['joinedAt'];
    }

    /**
    * Sets joinedAt
    *
    * @param \DateTime $joinedAt 账号成为组织一部分的日期。
    *
    * @return $this
    */
    public function setJoinedAt($joinedAt)
    {
        $this->container['joinedAt'] = $joinedAt;
        return $this;
    }

    /**
    * Gets accountName
    *  账号名称
    *
    * @return string
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string $accountName 账号名称
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
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


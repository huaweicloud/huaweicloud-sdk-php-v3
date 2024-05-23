<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloseAccountStatusDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloseAccountStatusDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  账号的唯一标识符（ID）。
    * createdAt  请求关闭账号的日期和时间。
    * updatedAt  请求关闭账号状态更新的日期和时间。
    * organizationId  组织的唯一标识符（ID）。
    * state  关闭账号的状态，pending_closure：关闭中，suspended：已关闭
    * failureReason  如果请求失败，则说明失败原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'organizationId' => 'string',
            'state' => 'string',
            'failureReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  账号的唯一标识符（ID）。
    * createdAt  请求关闭账号的日期和时间。
    * updatedAt  请求关闭账号状态更新的日期和时间。
    * organizationId  组织的唯一标识符（ID）。
    * state  关闭账号的状态，pending_closure：关闭中，suspended：已关闭
    * failureReason  如果请求失败，则说明失败原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'organizationId' => null,
        'state' => null,
        'failureReason' => null
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
    * accountId  账号的唯一标识符（ID）。
    * createdAt  请求关闭账号的日期和时间。
    * updatedAt  请求关闭账号状态更新的日期和时间。
    * organizationId  组织的唯一标识符（ID）。
    * state  关闭账号的状态，pending_closure：关闭中，suspended：已关闭
    * failureReason  如果请求失败，则说明失败原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'organizationId' => 'organization_id',
            'state' => 'state',
            'failureReason' => 'failure_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  账号的唯一标识符（ID）。
    * createdAt  请求关闭账号的日期和时间。
    * updatedAt  请求关闭账号状态更新的日期和时间。
    * organizationId  组织的唯一标识符（ID）。
    * state  关闭账号的状态，pending_closure：关闭中，suspended：已关闭
    * failureReason  如果请求失败，则说明失败原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'organizationId' => 'setOrganizationId',
            'state' => 'setState',
            'failureReason' => 'setFailureReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  账号的唯一标识符（ID）。
    * createdAt  请求关闭账号的日期和时间。
    * updatedAt  请求关闭账号状态更新的日期和时间。
    * organizationId  组织的唯一标识符（ID）。
    * state  关闭账号的状态，pending_closure：关闭中，suspended：已关闭
    * failureReason  如果请求失败，则说明失败原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'organizationId' => 'getOrganizationId',
            'state' => 'getState',
            'failureReason' => 'getFailureReason'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['failureReason'] = isset($data['failureReason']) ? $data['failureReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
            if ((mb_strlen($this->container['accountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['organizationId'] === null) {
            $invalidProperties[] = "'organizationId' can't be null";
        }
            if ((mb_strlen($this->container['organizationId']) > 34)) {
                $invalidProperties[] = "invalid value for 'organizationId', the character length must be smaller than or equal to 34.";
            }
            if (!preg_match("/^o-[0-9a-z]{10,32}$/", $this->container['organizationId'])) {
                $invalidProperties[] = "invalid value for 'organizationId', must be conform to the pattern /^o-[0-9a-z]{10,32}$/.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            if ((mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
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
    * Gets createdAt
    *  请求关闭账号的日期和时间。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 请求关闭账号的日期和时间。
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
    *  请求关闭账号状态更新的日期和时间。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 请求关闭账号状态更新的日期和时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets organizationId
    *  组织的唯一标识符（ID）。
    *
    * @return string
    */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
    * Sets organizationId
    *
    * @param string $organizationId 组织的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;
        return $this;
    }

    /**
    * Gets state
    *  关闭账号的状态，pending_closure：关闭中，suspended：已关闭
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 关闭账号的状态，pending_closure：关闭中，suspended：已关闭
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets failureReason
    *  如果请求失败，则说明失败原因。
    *
    * @return string|null
    */
    public function getFailureReason()
    {
        return $this->container['failureReason'];
    }

    /**
    * Sets failureReason
    *
    * @param string|null $failureReason 如果请求失败，则说明失败原因。
    *
    * @return $this
    */
    public function setFailureReason($failureReason)
    {
        $this->container['failureReason'] = $failureReason;
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


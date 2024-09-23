<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAccountStatusDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAccountStatusDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  如果账号创建成功，则为新账号的唯一标识符（ID）。
    * accountName  账号名称
    * completedAt  创建账号和完成请求的日期和时间。
    * createdAt  请求创建账号的日期和时间。
    * id  请求的唯一标识符（ID）。您可以从创建账号的初始CreateAccount请求的响应中获得此值。
    * state  创建账号的异步请求的状态，in_progress：处理中，succeeded：成功，failed：失败。
    * failureReason  如果请求失败，则说明失败原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'accountName' => 'string',
            'completedAt' => '\DateTime',
            'createdAt' => '\DateTime',
            'id' => 'string',
            'state' => 'string',
            'failureReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  如果账号创建成功，则为新账号的唯一标识符（ID）。
    * accountName  账号名称
    * completedAt  创建账号和完成请求的日期和时间。
    * createdAt  请求创建账号的日期和时间。
    * id  请求的唯一标识符（ID）。您可以从创建账号的初始CreateAccount请求的响应中获得此值。
    * state  创建账号的异步请求的状态，in_progress：处理中，succeeded：成功，failed：失败。
    * failureReason  如果请求失败，则说明失败原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'accountName' => null,
        'completedAt' => 'date-time',
        'createdAt' => 'date-time',
        'id' => null,
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
    * accountId  如果账号创建成功，则为新账号的唯一标识符（ID）。
    * accountName  账号名称
    * completedAt  创建账号和完成请求的日期和时间。
    * createdAt  请求创建账号的日期和时间。
    * id  请求的唯一标识符（ID）。您可以从创建账号的初始CreateAccount请求的响应中获得此值。
    * state  创建账号的异步请求的状态，in_progress：处理中，succeeded：成功，failed：失败。
    * failureReason  如果请求失败，则说明失败原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'accountName' => 'account_name',
            'completedAt' => 'completed_at',
            'createdAt' => 'created_at',
            'id' => 'id',
            'state' => 'state',
            'failureReason' => 'failure_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  如果账号创建成功，则为新账号的唯一标识符（ID）。
    * accountName  账号名称
    * completedAt  创建账号和完成请求的日期和时间。
    * createdAt  请求创建账号的日期和时间。
    * id  请求的唯一标识符（ID）。您可以从创建账号的初始CreateAccount请求的响应中获得此值。
    * state  创建账号的异步请求的状态，in_progress：处理中，succeeded：成功，failed：失败。
    * failureReason  如果请求失败，则说明失败原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'accountName' => 'setAccountName',
            'completedAt' => 'setCompletedAt',
            'createdAt' => 'setCreatedAt',
            'id' => 'setId',
            'state' => 'setState',
            'failureReason' => 'setFailureReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  如果账号创建成功，则为新账号的唯一标识符（ID）。
    * accountName  账号名称
    * completedAt  创建账号和完成请求的日期和时间。
    * createdAt  请求创建账号的日期和时间。
    * id  请求的唯一标识符（ID）。您可以从创建账号的初始CreateAccount请求的响应中获得此值。
    * state  创建账号的异步请求的状态，in_progress：处理中，succeeded：成功，failed：失败。
    * failureReason  如果请求失败，则说明失败原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'accountName' => 'getAccountName',
            'completedAt' => 'getCompletedAt',
            'createdAt' => 'getCreatedAt',
            'id' => 'getId',
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['completedAt'] = isset($data['completedAt']) ? $data['completedAt'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
        if ($this->container['accountName'] === null) {
            $invalidProperties[] = "'accountName' can't be null";
        }
            if ((mb_strlen($this->container['accountName']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[a-zA-Z][0-9a-zA-Z_-]+$/", $this->container['accountName'])) {
                $invalidProperties[] = "invalid value for 'accountName', must be conform to the pattern /^[a-zA-Z][0-9a-zA-Z_-]+$/.";
            }
        if ($this->container['completedAt'] === null) {
            $invalidProperties[] = "'completedAt' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!preg_match("/^car-[0-9a-z]{8,32}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^car-[0-9a-z]{8,32}$/.";
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
    *  如果账号创建成功，则为新账号的唯一标识符（ID）。
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
    * @param string $accountId 如果账号创建成功，则为新账号的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
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
    * Gets completedAt
    *  创建账号和完成请求的日期和时间。
    *
    * @return \DateTime
    */
    public function getCompletedAt()
    {
        return $this->container['completedAt'];
    }

    /**
    * Sets completedAt
    *
    * @param \DateTime $completedAt 创建账号和完成请求的日期和时间。
    *
    * @return $this
    */
    public function setCompletedAt($completedAt)
    {
        $this->container['completedAt'] = $completedAt;
        return $this;
    }

    /**
    * Gets createdAt
    *  请求创建账号的日期和时间。
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
    * @param \DateTime $createdAt 请求创建账号的日期和时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets id
    *  请求的唯一标识符（ID）。您可以从创建账号的初始CreateAccount请求的响应中获得此值。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 请求的唯一标识符（ID）。您可以从创建账号的初始CreateAccount请求的响应中获得此值。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets state
    *  创建账号的异步请求的状态，in_progress：处理中，succeeded：成功，failed：失败。
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
    * @param string $state 创建账号的异步请求的状态，in_progress：处理中，succeeded：成功，failed：失败。
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


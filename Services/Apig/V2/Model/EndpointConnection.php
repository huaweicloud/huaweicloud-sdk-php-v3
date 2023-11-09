<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EndpointConnection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EndpointConnection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  连接编号
    * markerId  连接报文标识
    * createdAt  连接创建时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  连接更新时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    * domainId  用户的Domain ID
    * status  连接状态 - pendingAcceptance 待接受 - creating 创建中 - accepted 已接受 - rejected 已拒绝 - failed 失败 - deleting 删除中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'markerId' => 'int',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'domainId' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  连接编号
    * markerId  连接报文标识
    * createdAt  连接创建时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  连接更新时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    * domainId  用户的Domain ID
    * status  连接状态 - pendingAcceptance 待接受 - creating 创建中 - accepted 已接受 - rejected 已拒绝 - failed 失败 - deleting 删除中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'markerId' => 'int32',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'domainId' => null,
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
    * id  连接编号
    * markerId  连接报文标识
    * createdAt  连接创建时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  连接更新时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    * domainId  用户的Domain ID
    * status  连接状态 - pendingAcceptance 待接受 - creating 创建中 - accepted 已接受 - rejected 已拒绝 - failed 失败 - deleting 删除中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'markerId' => 'marker_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'domainId' => 'domain_id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  连接编号
    * markerId  连接报文标识
    * createdAt  连接创建时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  连接更新时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    * domainId  用户的Domain ID
    * status  连接状态 - pendingAcceptance 待接受 - creating 创建中 - accepted 已接受 - rejected 已拒绝 - failed 失败 - deleting 删除中
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'markerId' => 'setMarkerId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'domainId' => 'setDomainId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  连接编号
    * markerId  连接报文标识
    * createdAt  连接创建时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  连接更新时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    * domainId  用户的Domain ID
    * status  连接状态 - pendingAcceptance 待接受 - creating 创建中 - accepted 已接受 - rejected 已拒绝 - failed 失败 - deleting 删除中
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'markerId' => 'getMarkerId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'domainId' => 'getDomainId',
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
    const STATUS_PENDING_ACCEPTANCE = 'pendingAcceptance';
    const STATUS_CREATING = 'creating';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_REJECTED = 'rejected';
    const STATUS_FAILED = 'failed';
    const STATUS_DELETING = 'deleting';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_ACCEPTANCE,
            self::STATUS_CREATING,
            self::STATUS_ACCEPTED,
            self::STATUS_REJECTED,
            self::STATUS_FAILED,
            self::STATUS_DELETING,
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
        $this->container['markerId'] = isset($data['markerId']) ? $data['markerId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['markerId'] === null) {
            $invalidProperties[] = "'markerId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    *  连接编号
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
    * @param string $id 连接编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets markerId
    *  连接报文标识
    *
    * @return int
    */
    public function getMarkerId()
    {
        return $this->container['markerId'];
    }

    /**
    * Sets markerId
    *
    * @param int $markerId 连接报文标识
    *
    * @return $this
    */
    public function setMarkerId($markerId)
    {
        $this->container['markerId'] = $markerId;
        return $this;
    }

    /**
    * Gets createdAt
    *  连接创建时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
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
    * @param \DateTime $createdAt 连接创建时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
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
    *  连接更新时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
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
    * @param \DateTime $updatedAt 连接更新时间。UTC时间，格式：YYYY-MM-DDTHH:MM:SSZ
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets domainId
    *  用户的Domain ID
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 用户的Domain ID
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
    *  连接状态 - pendingAcceptance 待接受 - creating 创建中 - accepted 已接受 - rejected 已拒绝 - failed 失败 - deleting 删除中
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
    * @param string $status 连接状态 - pendingAcceptance 待接受 - creating 创建中 - accepted 已接受 - rejected 已拒绝 - failed 失败 - deleting 删除中
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


<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectionEndpoints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectionEndpoints';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  终端节点的ID，唯一标识。
    * markerId  终端节点的报文标识。
    * createdAt  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * updatedAt  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * domainId  用户的Domain ID。
    * error  错误信息。  当终端节点服务状态异常，即“status”的值为“failed”时，会返回该字段。
    * status  终端节点的连接状态。 ● pendingAcceptance：待接受 ● creating：创建中 ● accepted：已接受 ● rejected：已拒绝 ● failed：失败 ● deleting：删除中
    * description  终端节点连接描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'markerId' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'domainId' => 'string',
            'error' => '\HuaweiCloud\SDK\Vpcep\V1\Model\QueryError[]',
            'status' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  终端节点的ID，唯一标识。
    * markerId  终端节点的报文标识。
    * createdAt  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * updatedAt  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * domainId  用户的Domain ID。
    * error  错误信息。  当终端节点服务状态异常，即“status”的值为“failed”时，会返回该字段。
    * status  终端节点的连接状态。 ● pendingAcceptance：待接受 ● creating：创建中 ● accepted：已接受 ● rejected：已拒绝 ● failed：失败 ● deleting：删除中
    * description  终端节点连接描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'markerId' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'domainId' => null,
        'error' => null,
        'status' => null,
        'description' => null
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
    * id  终端节点的ID，唯一标识。
    * markerId  终端节点的报文标识。
    * createdAt  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * updatedAt  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * domainId  用户的Domain ID。
    * error  错误信息。  当终端节点服务状态异常，即“status”的值为“failed”时，会返回该字段。
    * status  终端节点的连接状态。 ● pendingAcceptance：待接受 ● creating：创建中 ● accepted：已接受 ● rejected：已拒绝 ● failed：失败 ● deleting：删除中
    * description  终端节点连接描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'markerId' => 'marker_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'domainId' => 'domain_id',
            'error' => 'error',
            'status' => 'status',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  终端节点的ID，唯一标识。
    * markerId  终端节点的报文标识。
    * createdAt  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * updatedAt  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * domainId  用户的Domain ID。
    * error  错误信息。  当终端节点服务状态异常，即“status”的值为“failed”时，会返回该字段。
    * status  终端节点的连接状态。 ● pendingAcceptance：待接受 ● creating：创建中 ● accepted：已接受 ● rejected：已拒绝 ● failed：失败 ● deleting：删除中
    * description  终端节点连接描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'markerId' => 'setMarkerId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'domainId' => 'setDomainId',
            'error' => 'setError',
            'status' => 'setStatus',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  终端节点的ID，唯一标识。
    * markerId  终端节点的报文标识。
    * createdAt  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * updatedAt  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    * domainId  用户的Domain ID。
    * error  错误信息。  当终端节点服务状态异常，即“status”的值为“failed”时，会返回该字段。
    * status  终端节点的连接状态。 ● pendingAcceptance：待接受 ● creating：创建中 ● accepted：已接受 ● rejected：已拒绝 ● failed：失败 ● deleting：删除中
    * description  终端节点连接描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'markerId' => 'getMarkerId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'domainId' => 'getDomainId',
            'error' => 'getError',
            'status' => 'getStatus',
            'description' => 'getDescription'
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
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  终端节点的ID，唯一标识。
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
    * @param string|null $id 终端节点的ID，唯一标识。
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
    *  终端节点的报文标识。
    *
    * @return int|null
    */
    public function getMarkerId()
    {
        return $this->container['markerId'];
    }

    /**
    * Sets markerId
    *
    * @param int|null $markerId 终端节点的报文标识。
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
    *  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
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
    *  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MMDDTHH:MM:SSZ
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
    *  用户的Domain ID。
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
    * @param string|null $domainId 用户的Domain ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets error
    *  错误信息。  当终端节点服务状态异常，即“status”的值为“failed”时，会返回该字段。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\QueryError[]|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\QueryError[]|null $error 错误信息。  当终端节点服务状态异常，即“status”的值为“failed”时，会返回该字段。
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets status
    *  终端节点的连接状态。 ● pendingAcceptance：待接受 ● creating：创建中 ● accepted：已接受 ● rejected：已拒绝 ● failed：失败 ● deleting：删除中
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
    * @param string|null $status 终端节点的连接状态。 ● pendingAcceptance：待接受 ● creating：创建中 ● accepted：已接受 ● rejected：已拒绝 ● failed：失败 ● deleting：删除中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  终端节点连接描述。
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
    * @param string|null $description 终端节点连接描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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


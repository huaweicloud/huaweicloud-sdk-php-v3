<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Connections implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'connections';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  终端节点ID。
    * status  终端节点状态。 - accepted：允许该终端节点连接。 - rejected：拒绝该终端节点连接。
    * maxSession  最大连接数。
    * specificationName  终端节点名称。
    * createdAt  创建时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * updateAt  更新时间。默认为null。
    * domainId  拥有者。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'maxSession' => 'string',
            'specificationName' => 'string',
            'createdAt' => 'string',
            'updateAt' => 'string',
            'domainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  终端节点ID。
    * status  终端节点状态。 - accepted：允许该终端节点连接。 - rejected：拒绝该终端节点连接。
    * maxSession  最大连接数。
    * specificationName  终端节点名称。
    * createdAt  创建时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * updateAt  更新时间。默认为null。
    * domainId  拥有者。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'maxSession' => null,
        'specificationName' => null,
        'createdAt' => null,
        'updateAt' => null,
        'domainId' => null
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
    * id  终端节点ID。
    * status  终端节点状态。 - accepted：允许该终端节点连接。 - rejected：拒绝该终端节点连接。
    * maxSession  最大连接数。
    * specificationName  终端节点名称。
    * createdAt  创建时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * updateAt  更新时间。默认为null。
    * domainId  拥有者。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'maxSession' => 'maxSession',
            'specificationName' => 'specificationName',
            'createdAt' => 'created_at',
            'updateAt' => 'update_at',
            'domainId' => 'domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  终端节点ID。
    * status  终端节点状态。 - accepted：允许该终端节点连接。 - rejected：拒绝该终端节点连接。
    * maxSession  最大连接数。
    * specificationName  终端节点名称。
    * createdAt  创建时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * updateAt  更新时间。默认为null。
    * domainId  拥有者。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'maxSession' => 'setMaxSession',
            'specificationName' => 'setSpecificationName',
            'createdAt' => 'setCreatedAt',
            'updateAt' => 'setUpdateAt',
            'domainId' => 'setDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  终端节点ID。
    * status  终端节点状态。 - accepted：允许该终端节点连接。 - rejected：拒绝该终端节点连接。
    * maxSession  最大连接数。
    * specificationName  终端节点名称。
    * createdAt  创建时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * updateAt  更新时间。默认为null。
    * domainId  拥有者。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'maxSession' => 'getMaxSession',
            'specificationName' => 'getSpecificationName',
            'createdAt' => 'getCreatedAt',
            'updateAt' => 'getUpdateAt',
            'domainId' => 'getDomainId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['maxSession'] = isset($data['maxSession']) ? $data['maxSession'] : null;
        $this->container['specificationName'] = isset($data['specificationName']) ? $data['specificationName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  终端节点ID。
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
    * @param string|null $id 终端节点ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  终端节点状态。 - accepted：允许该终端节点连接。 - rejected：拒绝该终端节点连接。
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
    * @param string|null $status 终端节点状态。 - accepted：允许该终端节点连接。 - rejected：拒绝该终端节点连接。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets maxSession
    *  最大连接数。
    *
    * @return string|null
    */
    public function getMaxSession()
    {
        return $this->container['maxSession'];
    }

    /**
    * Sets maxSession
    *
    * @param string|null $maxSession 最大连接数。
    *
    * @return $this
    */
    public function setMaxSession($maxSession)
    {
        $this->container['maxSession'] = $maxSession;
        return $this;
    }

    /**
    * Gets specificationName
    *  终端节点名称。
    *
    * @return string|null
    */
    public function getSpecificationName()
    {
        return $this->container['specificationName'];
    }

    /**
    * Sets specificationName
    *
    * @param string|null $specificationName 终端节点名称。
    *
    * @return $this
    */
    public function setSpecificationName($specificationName)
    {
        $this->container['specificationName'] = $specificationName;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
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
    * @param string|null $createdAt 创建时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间。默认为null。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 更新时间。默认为null。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets domainId
    *  拥有者。
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
    * @param string|null $domainId 拥有者。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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


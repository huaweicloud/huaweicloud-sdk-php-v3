<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgencyCreateResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgencyCreateResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  委托创建时间。
    * description  委托描述信息。
    * domainId  委托方账号ID。
    * expireTime  委托过期时间。“null”表示不过期。
    * id  委托ID。
    * name  委托名。
    * trustDomainId  被委托方账号ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'expireTime' => 'string',
            'id' => 'string',
            'name' => 'string',
            'trustDomainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  委托创建时间。
    * description  委托描述信息。
    * domainId  委托方账号ID。
    * expireTime  委托过期时间。“null”表示不过期。
    * id  委托ID。
    * name  委托名。
    * trustDomainId  被委托方账号ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => null,
        'description' => null,
        'domainId' => null,
        'expireTime' => null,
        'id' => null,
        'name' => null,
        'trustDomainId' => null
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
    * createTime  委托创建时间。
    * description  委托描述信息。
    * domainId  委托方账号ID。
    * expireTime  委托过期时间。“null”表示不过期。
    * id  委托ID。
    * name  委托名。
    * trustDomainId  被委托方账号ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'description' => 'description',
            'domainId' => 'domain_id',
            'expireTime' => 'expire_time',
            'id' => 'id',
            'name' => 'name',
            'trustDomainId' => 'trust_domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  委托创建时间。
    * description  委托描述信息。
    * domainId  委托方账号ID。
    * expireTime  委托过期时间。“null”表示不过期。
    * id  委托ID。
    * name  委托名。
    * trustDomainId  被委托方账号ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'expireTime' => 'setExpireTime',
            'id' => 'setId',
            'name' => 'setName',
            'trustDomainId' => 'setTrustDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  委托创建时间。
    * description  委托描述信息。
    * domainId  委托方账号ID。
    * expireTime  委托过期时间。“null”表示不过期。
    * id  委托ID。
    * name  委托名。
    * trustDomainId  被委托方账号ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'expireTime' => 'getExpireTime',
            'id' => 'getId',
            'name' => 'getName',
            'trustDomainId' => 'getTrustDomainId'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['trustDomainId'] = isset($data['trustDomainId']) ? $data['trustDomainId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['expireTime'] === null) {
            $invalidProperties[] = "'expireTime' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets createTime
    *  委托创建时间。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 委托创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets description
    *  委托描述信息。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 委托描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domainId
    *  委托方账号ID。
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
    * @param string|null $domainId 委托方账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets expireTime
    *  委托过期时间。“null”表示不过期。
    *
    * @return string
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string $expireTime 委托过期时间。“null”表示不过期。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets id
    *  委托ID。
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
    * @param string $id 委托ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  委托名。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 委托名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets trustDomainId
    *  被委托方账号ID。
    *
    * @return string|null
    */
    public function getTrustDomainId()
    {
        return $this->container['trustDomainId'];
    }

    /**
    * Sets trustDomainId
    *
    * @param string|null $trustDomainId 被委托方账号ID。
    *
    * @return $this
    */
    public function setTrustDomainId($trustDomainId)
    {
        $this->container['trustDomainId'] = $trustDomainId;
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


<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceShare implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceShare';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资源共享实例的ID。
    * name  资源共享实例的名称。
    * description  资源共享实例的描述。
    * allowExternalPrincipals  资源共享实例是否支持共享给组织外账号。
    * owningAccountId  资源共享实例的所有者ID。
    * status  资源共享实例的状态。
    * tags  资源共享实例的标签列表。
    * createdAt  创建资源共享实例的时间。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'allowExternalPrincipals' => 'bool',
            'owningAccountId' => 'string',
            'status' => 'string',
            'tags' => '\HuaweiCloud\SDK\Ram\V1\Model\Tag[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源共享实例的ID。
    * name  资源共享实例的名称。
    * description  资源共享实例的描述。
    * allowExternalPrincipals  资源共享实例是否支持共享给组织外账号。
    * owningAccountId  资源共享实例的所有者ID。
    * status  资源共享实例的状态。
    * tags  资源共享实例的标签列表。
    * createdAt  创建资源共享实例的时间。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'allowExternalPrincipals' => null,
        'owningAccountId' => null,
        'status' => null,
        'tags' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * id  资源共享实例的ID。
    * name  资源共享实例的名称。
    * description  资源共享实例的描述。
    * allowExternalPrincipals  资源共享实例是否支持共享给组织外账号。
    * owningAccountId  资源共享实例的所有者ID。
    * status  资源共享实例的状态。
    * tags  资源共享实例的标签列表。
    * createdAt  创建资源共享实例的时间。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'allowExternalPrincipals' => 'allow_external_principals',
            'owningAccountId' => 'owning_account_id',
            'status' => 'status',
            'tags' => 'tags',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源共享实例的ID。
    * name  资源共享实例的名称。
    * description  资源共享实例的描述。
    * allowExternalPrincipals  资源共享实例是否支持共享给组织外账号。
    * owningAccountId  资源共享实例的所有者ID。
    * status  资源共享实例的状态。
    * tags  资源共享实例的标签列表。
    * createdAt  创建资源共享实例的时间。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'allowExternalPrincipals' => 'setAllowExternalPrincipals',
            'owningAccountId' => 'setOwningAccountId',
            'status' => 'setStatus',
            'tags' => 'setTags',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源共享实例的ID。
    * name  资源共享实例的名称。
    * description  资源共享实例的描述。
    * allowExternalPrincipals  资源共享实例是否支持共享给组织外账号。
    * owningAccountId  资源共享实例的所有者ID。
    * status  资源共享实例的状态。
    * tags  资源共享实例的标签列表。
    * createdAt  创建资源共享实例的时间。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'allowExternalPrincipals' => 'getAllowExternalPrincipals',
            'owningAccountId' => 'getOwningAccountId',
            'status' => 'getStatus',
            'tags' => 'getTags',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['allowExternalPrincipals'] = isset($data['allowExternalPrincipals']) ? $data['allowExternalPrincipals'] : null;
        $this->container['owningAccountId'] = isset($data['owningAccountId']) ? $data['owningAccountId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['owningAccountId'] === null) {
            $invalidProperties[] = "'owningAccountId' can't be null";
        }
            if ((mb_strlen($this->container['owningAccountId']) > 36)) {
                $invalidProperties[] = "invalid value for 'owningAccountId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['owningAccountId']) < 0)) {
                $invalidProperties[] = "invalid value for 'owningAccountId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    *  资源共享实例的ID。
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
    * @param string $id 资源共享实例的ID。
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
    *  资源共享实例的名称。
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
    * @param string $name 资源共享实例的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  资源共享实例的描述。
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
    * @param string $description 资源共享实例的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets allowExternalPrincipals
    *  资源共享实例是否支持共享给组织外账号。
    *
    * @return bool|null
    */
    public function getAllowExternalPrincipals()
    {
        return $this->container['allowExternalPrincipals'];
    }

    /**
    * Sets allowExternalPrincipals
    *
    * @param bool|null $allowExternalPrincipals 资源共享实例是否支持共享给组织外账号。
    *
    * @return $this
    */
    public function setAllowExternalPrincipals($allowExternalPrincipals)
    {
        $this->container['allowExternalPrincipals'] = $allowExternalPrincipals;
        return $this;
    }

    /**
    * Gets owningAccountId
    *  资源共享实例的所有者ID。
    *
    * @return string
    */
    public function getOwningAccountId()
    {
        return $this->container['owningAccountId'];
    }

    /**
    * Sets owningAccountId
    *
    * @param string $owningAccountId 资源共享实例的所有者ID。
    *
    * @return $this
    */
    public function setOwningAccountId($owningAccountId)
    {
        $this->container['owningAccountId'] = $owningAccountId;
        return $this;
    }

    /**
    * Gets status
    *  资源共享实例的状态。
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
    * @param string $status 资源共享实例的状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tags
    *  资源共享实例的标签列表。
    *
    * @return \HuaweiCloud\SDK\Ram\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ram\V1\Model\Tag[]|null $tags 资源共享实例的标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建资源共享实例的时间。
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
    * @param \DateTime $createdAt 创建资源共享实例的时间。
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
    *  最后一次更新资源共享实例的时间。
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
    * @param \DateTime $updatedAt 最后一次更新资源共享实例的时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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


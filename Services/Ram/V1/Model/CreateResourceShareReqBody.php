<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateResourceShareReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateResourceShareReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  资源共享实例的名称。
    * description  资源共享实例的描述。
    * allowExternalPrincipals  资源共享实例是否支持共享给组织外账号。
    * permissionIds  资源共享实例关联的RAM权限列表。一种资源类型只能关联一个RAM权限。如果您没有指定权限ID，RAM将自动为每个资源类型关联默认权限。
    * principals  资源共享实例关联的一个或多个资源使用者的列表。
    * resourceUrns  资源共享实例关联的一个或多个共享资源URN的列表。
    * tags  资源共享标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'allowExternalPrincipals' => 'bool',
            'permissionIds' => 'string[]',
            'principals' => 'string[]',
            'resourceUrns' => 'string[]',
            'tags' => '\HuaweiCloud\SDK\Ram\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  资源共享实例的名称。
    * description  资源共享实例的描述。
    * allowExternalPrincipals  资源共享实例是否支持共享给组织外账号。
    * permissionIds  资源共享实例关联的RAM权限列表。一种资源类型只能关联一个RAM权限。如果您没有指定权限ID，RAM将自动为每个资源类型关联默认权限。
    * principals  资源共享实例关联的一个或多个资源使用者的列表。
    * resourceUrns  资源共享实例关联的一个或多个共享资源URN的列表。
    * tags  资源共享标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'allowExternalPrincipals' => null,
        'permissionIds' => null,
        'principals' => null,
        'resourceUrns' => null,
        'tags' => null
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
    * name  资源共享实例的名称。
    * description  资源共享实例的描述。
    * allowExternalPrincipals  资源共享实例是否支持共享给组织外账号。
    * permissionIds  资源共享实例关联的RAM权限列表。一种资源类型只能关联一个RAM权限。如果您没有指定权限ID，RAM将自动为每个资源类型关联默认权限。
    * principals  资源共享实例关联的一个或多个资源使用者的列表。
    * resourceUrns  资源共享实例关联的一个或多个共享资源URN的列表。
    * tags  资源共享标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'allowExternalPrincipals' => 'allow_external_principals',
            'permissionIds' => 'permission_ids',
            'principals' => 'principals',
            'resourceUrns' => 'resource_urns',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  资源共享实例的名称。
    * description  资源共享实例的描述。
    * allowExternalPrincipals  资源共享实例是否支持共享给组织外账号。
    * permissionIds  资源共享实例关联的RAM权限列表。一种资源类型只能关联一个RAM权限。如果您没有指定权限ID，RAM将自动为每个资源类型关联默认权限。
    * principals  资源共享实例关联的一个或多个资源使用者的列表。
    * resourceUrns  资源共享实例关联的一个或多个共享资源URN的列表。
    * tags  资源共享标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'allowExternalPrincipals' => 'setAllowExternalPrincipals',
            'permissionIds' => 'setPermissionIds',
            'principals' => 'setPrincipals',
            'resourceUrns' => 'setResourceUrns',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  资源共享实例的名称。
    * description  资源共享实例的描述。
    * allowExternalPrincipals  资源共享实例是否支持共享给组织外账号。
    * permissionIds  资源共享实例关联的RAM权限列表。一种资源类型只能关联一个RAM权限。如果您没有指定权限ID，RAM将自动为每个资源类型关联默认权限。
    * principals  资源共享实例关联的一个或多个资源使用者的列表。
    * resourceUrns  资源共享实例关联的一个或多个共享资源URN的列表。
    * tags  资源共享标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'allowExternalPrincipals' => 'getAllowExternalPrincipals',
            'permissionIds' => 'getPermissionIds',
            'principals' => 'getPrincipals',
            'resourceUrns' => 'getResourceUrns',
            'tags' => 'getTags'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['allowExternalPrincipals'] = isset($data['allowExternalPrincipals']) ? $data['allowExternalPrincipals'] : null;
        $this->container['permissionIds'] = isset($data['permissionIds']) ? $data['permissionIds'] : null;
        $this->container['principals'] = isset($data['principals']) ? $data['principals'] : null;
        $this->container['resourceUrns'] = isset($data['resourceUrns']) ? $data['resourceUrns'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\u4e00-\\u9fa5a-zA-Z0-9-_.]*/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\u4e00-\\u9fa5a-zA-Z0-9-_.]*/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^(?!.*?(<|>)).*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^(?!.*?(<|>)).*$/.";
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
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 资源共享实例的描述。
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
    * Gets permissionIds
    *  资源共享实例关联的RAM权限列表。一种资源类型只能关联一个RAM权限。如果您没有指定权限ID，RAM将自动为每个资源类型关联默认权限。
    *
    * @return string[]|null
    */
    public function getPermissionIds()
    {
        return $this->container['permissionIds'];
    }

    /**
    * Sets permissionIds
    *
    * @param string[]|null $permissionIds 资源共享实例关联的RAM权限列表。一种资源类型只能关联一个RAM权限。如果您没有指定权限ID，RAM将自动为每个资源类型关联默认权限。
    *
    * @return $this
    */
    public function setPermissionIds($permissionIds)
    {
        $this->container['permissionIds'] = $permissionIds;
        return $this;
    }

    /**
    * Gets principals
    *  资源共享实例关联的一个或多个资源使用者的列表。
    *
    * @return string[]|null
    */
    public function getPrincipals()
    {
        return $this->container['principals'];
    }

    /**
    * Sets principals
    *
    * @param string[]|null $principals 资源共享实例关联的一个或多个资源使用者的列表。
    *
    * @return $this
    */
    public function setPrincipals($principals)
    {
        $this->container['principals'] = $principals;
        return $this;
    }

    /**
    * Gets resourceUrns
    *  资源共享实例关联的一个或多个共享资源URN的列表。
    *
    * @return string[]|null
    */
    public function getResourceUrns()
    {
        return $this->container['resourceUrns'];
    }

    /**
    * Sets resourceUrns
    *
    * @param string[]|null $resourceUrns 资源共享实例关联的一个或多个共享资源URN的列表。
    *
    * @return $this
    */
    public function setResourceUrns($resourceUrns)
    {
        $this->container['resourceUrns'] = $resourceUrns;
        return $this;
    }

    /**
    * Gets tags
    *  资源共享标签列表。
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
    * @param \HuaweiCloud\SDK\Ram\V1\Model\Tag[]|null $tags 资源共享标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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


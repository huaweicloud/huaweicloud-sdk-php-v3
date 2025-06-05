<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRelatedProjectInfoResultProjectInfoList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRelatedProjectInfo_result_project_info_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identifier  唯一标识
    * name  项目名
    * authorId  用户ID
    * status  状态
    * authorDomainId  项目创建者租户ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identifier' => 'string',
            'name' => 'string',
            'authorId' => 'string',
            'status' => 'int',
            'authorDomainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identifier  唯一标识
    * name  项目名
    * authorId  用户ID
    * status  状态
    * authorDomainId  项目创建者租户ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identifier' => null,
        'name' => null,
        'authorId' => null,
        'status' => null,
        'authorDomainId' => null
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
    * identifier  唯一标识
    * name  项目名
    * authorId  用户ID
    * status  状态
    * authorDomainId  项目创建者租户ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identifier' => 'identifier',
            'name' => 'name',
            'authorId' => 'author_id',
            'status' => 'status',
            'authorDomainId' => 'author_domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identifier  唯一标识
    * name  项目名
    * authorId  用户ID
    * status  状态
    * authorDomainId  项目创建者租户ID
    *
    * @var string[]
    */
    protected static $setters = [
            'identifier' => 'setIdentifier',
            'name' => 'setName',
            'authorId' => 'setAuthorId',
            'status' => 'setStatus',
            'authorDomainId' => 'setAuthorDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identifier  唯一标识
    * name  项目名
    * authorId  用户ID
    * status  状态
    * authorDomainId  项目创建者租户ID
    *
    * @var string[]
    */
    protected static $getters = [
            'identifier' => 'getIdentifier',
            'name' => 'getName',
            'authorId' => 'getAuthorId',
            'status' => 'getStatus',
            'authorDomainId' => 'getAuthorDomainId'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['authorDomainId'] = isset($data['authorDomainId']) ? $data['authorDomainId'] : null;
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
    * Gets identifier
    *  唯一标识
    *
    * @return string|null
    */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
    * Sets identifier
    *
    * @param string|null $identifier 唯一标识
    *
    * @return $this
    */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;
        return $this;
    }

    /**
    * Gets name
    *  项目名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 项目名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets authorId
    *  用户ID
    *
    * @return string|null
    */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
    * Sets authorId
    *
    * @param string|null $authorId 用户ID
    *
    * @return $this
    */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets authorDomainId
    *  项目创建者租户ID
    *
    * @return string|null
    */
    public function getAuthorDomainId()
    {
        return $this->container['authorDomainId'];
    }

    /**
    * Sets authorDomainId
    *
    * @param string|null $authorDomainId 项目创建者租户ID
    *
    * @return $this
    */
    public function setAuthorDomainId($authorDomainId)
    {
        $this->container['authorDomainId'] = $authorDomainId;
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


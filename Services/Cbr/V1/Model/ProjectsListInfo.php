<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectsListInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectsListInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  域 ID
    * isDomain  是否是域级
    * parentId  父项目 ID
    * name  名称
    * description  描述信息
    * id  项目ID
    * enabled  是否开启
    * links  links
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'isDomain' => 'bool',
            'parentId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'id' => 'string',
            'enabled' => 'bool',
            'links' => '\HuaweiCloud\SDK\Cbr\V1\Model\SelfLinksInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  域 ID
    * isDomain  是否是域级
    * parentId  父项目 ID
    * name  名称
    * description  描述信息
    * id  项目ID
    * enabled  是否开启
    * links  links
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'isDomain' => null,
        'parentId' => null,
        'name' => null,
        'description' => null,
        'id' => null,
        'enabled' => null,
        'links' => null
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
    * domainId  域 ID
    * isDomain  是否是域级
    * parentId  父项目 ID
    * name  名称
    * description  描述信息
    * id  项目ID
    * enabled  是否开启
    * links  links
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'isDomain' => 'is_domain',
            'parentId' => 'parent_id',
            'name' => 'name',
            'description' => 'description',
            'id' => 'id',
            'enabled' => 'enabled',
            'links' => 'links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  域 ID
    * isDomain  是否是域级
    * parentId  父项目 ID
    * name  名称
    * description  描述信息
    * id  项目ID
    * enabled  是否开启
    * links  links
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'isDomain' => 'setIsDomain',
            'parentId' => 'setParentId',
            'name' => 'setName',
            'description' => 'setDescription',
            'id' => 'setId',
            'enabled' => 'setEnabled',
            'links' => 'setLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  域 ID
    * isDomain  是否是域级
    * parentId  父项目 ID
    * name  名称
    * description  描述信息
    * id  项目ID
    * enabled  是否开启
    * links  links
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'isDomain' => 'getIsDomain',
            'parentId' => 'getParentId',
            'name' => 'getName',
            'description' => 'getDescription',
            'id' => 'getId',
            'enabled' => 'getEnabled',
            'links' => 'getLinks'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['isDomain'] = isset($data['isDomain']) ? $data['isDomain'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
    * Gets domainId
    *  域 ID
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
    * @param string|null $domainId 域 ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets isDomain
    *  是否是域级
    *
    * @return bool|null
    */
    public function getIsDomain()
    {
        return $this->container['isDomain'];
    }

    /**
    * Sets isDomain
    *
    * @param bool|null $isDomain 是否是域级
    *
    * @return $this
    */
    public function setIsDomain($isDomain)
    {
        $this->container['isDomain'] = $isDomain;
        return $this;
    }

    /**
    * Gets parentId
    *  父项目 ID
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父项目 ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
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
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  项目ID
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
    * @param string|null $id 项目ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets enabled
    *  是否开启
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否开启
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets links
    *  links
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\SelfLinksInfo|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\SelfLinksInfo|null $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
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


<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSparkJobTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSparkJobTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  模板类型
    * id  模板id
    * name  模板名字
    * body  body
    * group  组名
    * description  模板描述
    * language  语言
    * owner  模板拥有者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'id' => 'string',
            'name' => 'string',
            'body' => '\HuaweiCloud\SDK\Dli\V1\Model\SparkJobTemplateDetail',
            'group' => 'string',
            'description' => 'string',
            'language' => 'string',
            'owner' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  模板类型
    * id  模板id
    * name  模板名字
    * body  body
    * group  组名
    * description  模板描述
    * language  语言
    * owner  模板拥有者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => null,
        'name' => null,
        'body' => null,
        'group' => null,
        'description' => null,
        'language' => null,
        'owner' => null
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
    * type  模板类型
    * id  模板id
    * name  模板名字
    * body  body
    * group  组名
    * description  模板描述
    * language  语言
    * owner  模板拥有者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'id' => 'id',
            'name' => 'name',
            'body' => 'body',
            'group' => 'group',
            'description' => 'description',
            'language' => 'language',
            'owner' => 'owner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  模板类型
    * id  模板id
    * name  模板名字
    * body  body
    * group  组名
    * description  模板描述
    * language  语言
    * owner  模板拥有者
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'id' => 'setId',
            'name' => 'setName',
            'body' => 'setBody',
            'group' => 'setGroup',
            'description' => 'setDescription',
            'language' => 'setLanguage',
            'owner' => 'setOwner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  模板类型
    * id  模板id
    * name  模板名字
    * body  body
    * group  组名
    * description  模板描述
    * language  语言
    * owner  模板拥有者
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'id' => 'getId',
            'name' => 'getName',
            'body' => 'getBody',
            'group' => 'getGroup',
            'description' => 'getDescription',
            'language' => 'getLanguage',
            'owner' => 'getOwner'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
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
    * Gets type
    *  模板类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 模板类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets id
    *  模板id
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
    * @param string|null $id 模板id
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
    *  模板名字
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
    * @param string|null $name 模板名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\SparkJobTemplateDetail|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\SparkJobTemplateDetail|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets group
    *  组名
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 组名
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets description
    *  模板描述
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
    * @param string|null $description 模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets language
    *  语言
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets owner
    *  模板拥有者
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 模板拥有者
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
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


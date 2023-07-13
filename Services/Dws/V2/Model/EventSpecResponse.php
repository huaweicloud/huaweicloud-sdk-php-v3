<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventSpecResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventSpecResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件配置ID
    * name  事件配置定义名称
    * displayName  事件配置显示名称
    * description  事件配置描述
    * subject  事件主题
    * category  事件类别
    * severity  事件级别
    * sourceType  事件源类型
    * nameSpace  所属服务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'displayName' => 'string',
            'description' => 'string',
            'subject' => 'string',
            'category' => 'string',
            'severity' => 'string',
            'sourceType' => 'string',
            'nameSpace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件配置ID
    * name  事件配置定义名称
    * displayName  事件配置显示名称
    * description  事件配置描述
    * subject  事件主题
    * category  事件类别
    * severity  事件级别
    * sourceType  事件源类型
    * nameSpace  所属服务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'displayName' => null,
        'description' => null,
        'subject' => null,
        'category' => null,
        'severity' => null,
        'sourceType' => null,
        'nameSpace' => null
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
    * id  事件配置ID
    * name  事件配置定义名称
    * displayName  事件配置显示名称
    * description  事件配置描述
    * subject  事件主题
    * category  事件类别
    * severity  事件级别
    * sourceType  事件源类型
    * nameSpace  所属服务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'displayName' => 'display_name',
            'description' => 'description',
            'subject' => 'subject',
            'category' => 'category',
            'severity' => 'severity',
            'sourceType' => 'source_type',
            'nameSpace' => 'name_space'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件配置ID
    * name  事件配置定义名称
    * displayName  事件配置显示名称
    * description  事件配置描述
    * subject  事件主题
    * category  事件类别
    * severity  事件级别
    * sourceType  事件源类型
    * nameSpace  所属服务
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'description' => 'setDescription',
            'subject' => 'setSubject',
            'category' => 'setCategory',
            'severity' => 'setSeverity',
            'sourceType' => 'setSourceType',
            'nameSpace' => 'setNameSpace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件配置ID
    * name  事件配置定义名称
    * displayName  事件配置显示名称
    * description  事件配置描述
    * subject  事件主题
    * category  事件类别
    * severity  事件级别
    * sourceType  事件源类型
    * nameSpace  所属服务
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'description' => 'getDescription',
            'subject' => 'getSubject',
            'category' => 'getCategory',
            'severity' => 'getSeverity',
            'sourceType' => 'getSourceType',
            'nameSpace' => 'getNameSpace'
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['nameSpace'] = isset($data['nameSpace']) ? $data['nameSpace'] : null;
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
    *  事件配置ID
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
    * @param string|null $id 事件配置ID
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
    *  事件配置定义名称
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
    * @param string|null $name 事件配置定义名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  事件配置显示名称
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 事件配置显示名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets description
    *  事件配置描述
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
    * @param string|null $description 事件配置描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets subject
    *  事件主题
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 事件主题
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets category
    *  事件类别
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 事件类别
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets severity
    *  事件级别
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 事件级别
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets sourceType
    *  事件源类型
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 事件源类型
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets nameSpace
    *  所属服务
    *
    * @return string|null
    */
    public function getNameSpace()
    {
        return $this->container['nameSpace'];
    }

    /**
    * Sets nameSpace
    *
    * @param string|null $nameSpace 所属服务
    *
    * @return $this
    */
    public function setNameSpace($nameSpace)
    {
        $this->container['nameSpace'] = $nameSpace;
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


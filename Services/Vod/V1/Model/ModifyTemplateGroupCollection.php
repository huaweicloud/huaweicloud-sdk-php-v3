<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyTemplateGroupCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyTemplateGroupCollection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  模板组集合名称<br/>
    * collectionId  模板组集合ID<br/>
    * description  模板组集合介绍<br/>
    * templateGroupList  模板组列表<br/>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'collectionId' => 'string',
            'description' => 'string',
            'templateGroupList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  模板组集合名称<br/>
    * collectionId  模板组集合ID<br/>
    * description  模板组集合介绍<br/>
    * templateGroupList  模板组列表<br/>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'collectionId' => null,
        'description' => null,
        'templateGroupList' => null
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
    * name  模板组集合名称<br/>
    * collectionId  模板组集合ID<br/>
    * description  模板组集合介绍<br/>
    * templateGroupList  模板组列表<br/>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'collectionId' => 'collection_id',
            'description' => 'description',
            'templateGroupList' => 'template_group_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  模板组集合名称<br/>
    * collectionId  模板组集合ID<br/>
    * description  模板组集合介绍<br/>
    * templateGroupList  模板组列表<br/>
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'collectionId' => 'setCollectionId',
            'description' => 'setDescription',
            'templateGroupList' => 'setTemplateGroupList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  模板组集合名称<br/>
    * collectionId  模板组集合ID<br/>
    * description  模板组集合介绍<br/>
    * templateGroupList  模板组列表<br/>
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'collectionId' => 'getCollectionId',
            'description' => 'getDescription',
            'templateGroupList' => 'getTemplateGroupList'
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
        $this->container['collectionId'] = isset($data['collectionId']) ? $data['collectionId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['templateGroupList'] = isset($data['templateGroupList']) ? $data['templateGroupList'] : null;
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['templateGroupList'] === null) {
            $invalidProperties[] = "'templateGroupList' can't be null";
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
    *  模板组集合名称<br/>
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
    * @param string $name 模板组集合名称<br/>
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets collectionId
    *  模板组集合ID<br/>
    *
    * @return string|null
    */
    public function getCollectionId()
    {
        return $this->container['collectionId'];
    }

    /**
    * Sets collectionId
    *
    * @param string|null $collectionId 模板组集合ID<br/>
    *
    * @return $this
    */
    public function setCollectionId($collectionId)
    {
        $this->container['collectionId'] = $collectionId;
        return $this;
    }

    /**
    * Gets description
    *  模板组集合介绍<br/>
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
    * @param string|null $description 模板组集合介绍<br/>
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets templateGroupList
    *  模板组列表<br/>
    *
    * @return string[]
    */
    public function getTemplateGroupList()
    {
        return $this->container['templateGroupList'];
    }

    /**
    * Sets templateGroupList
    *
    * @param string[] $templateGroupList 模板组列表<br/>
    *
    * @return $this
    */
    public function setTemplateGroupList($templateGroupList)
    {
        $this->container['templateGroupList'] = $templateGroupList;
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


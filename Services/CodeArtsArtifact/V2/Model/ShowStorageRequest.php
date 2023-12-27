<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStorageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStorageRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * formatList  类型列表
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'formatList' => 'string',
            'inProject' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * formatList  类型列表
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'formatList' => null,
        'inProject' => null
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
    * formatList  类型列表
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'formatList' => 'format_list',
            'inProject' => 'in_project'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * formatList  类型列表
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $setters = [
            'formatList' => 'setFormatList',
            'inProject' => 'setInProject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * formatList  类型列表
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $getters = [
            'formatList' => 'getFormatList',
            'inProject' => 'getInProject'
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
        $this->container['formatList'] = isset($data['formatList']) ? $data['formatList'] : null;
        $this->container['inProject'] = isset($data['inProject']) ? $data['inProject'] : null;
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
    * Gets formatList
    *  类型列表
    *
    * @return string|null
    */
    public function getFormatList()
    {
        return $this->container['formatList'];
    }

    /**
    * Sets formatList
    *
    * @param string|null $formatList 类型列表
    *
    * @return $this
    */
    public function setFormatList($formatList)
    {
        $this->container['formatList'] = $formatList;
        return $this;
    }

    /**
    * Gets inProject
    *  是否在项目中
    *
    * @return string|null
    */
    public function getInProject()
    {
        return $this->container['inProject'];
    }

    /**
    * Sets inProject
    *
    * @param string|null $inProject 是否在项目中
    *
    * @return $this
    */
    public function setInProject($inProject)
    {
        $this->container['inProject'] = $inProject;
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


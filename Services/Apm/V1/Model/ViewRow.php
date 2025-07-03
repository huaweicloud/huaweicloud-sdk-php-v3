<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ViewRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ViewRow';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * viewList  视图行，包含多个视图，展示的时候根据实际的长度适配。
    * title  标题。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'viewList' => '\HuaweiCloud\SDK\Apm\V1\Model\ViewBase[]',
            'title' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * viewList  视图行，包含多个视图，展示的时候根据实际的长度适配。
    * title  标题。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'viewList' => null,
        'title' => null
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
    * viewList  视图行，包含多个视图，展示的时候根据实际的长度适配。
    * title  标题。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'viewList' => 'view_list',
            'title' => 'title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * viewList  视图行，包含多个视图，展示的时候根据实际的长度适配。
    * title  标题。
    *
    * @var string[]
    */
    protected static $setters = [
            'viewList' => 'setViewList',
            'title' => 'setTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * viewList  视图行，包含多个视图，展示的时候根据实际的长度适配。
    * title  标题。
    *
    * @var string[]
    */
    protected static $getters = [
            'viewList' => 'getViewList',
            'title' => 'getTitle'
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
        $this->container['viewList'] = isset($data['viewList']) ? $data['viewList'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
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
    * Gets viewList
    *  视图行，包含多个视图，展示的时候根据实际的长度适配。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\ViewBase[]|null
    */
    public function getViewList()
    {
        return $this->container['viewList'];
    }

    /**
    * Sets viewList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\ViewBase[]|null $viewList 视图行，包含多个视图，展示的时候根据实际的长度适配。
    *
    * @return $this
    */
    public function setViewList($viewList)
    {
        $this->container['viewList'] = $viewList;
        return $this;
    }

    /**
    * Gets title
    *  标题。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 标题。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
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


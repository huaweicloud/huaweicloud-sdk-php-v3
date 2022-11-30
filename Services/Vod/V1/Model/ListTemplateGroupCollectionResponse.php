<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTemplateGroupCollectionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTemplateGroupCollectionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateGroupCollectionList  模板组集合信息<br/>
    * total  总记录条数<br/>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateGroupCollectionList' => '\HuaweiCloud\SDK\Vod\V1\Model\TemplateGroupCollection[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateGroupCollectionList  模板组集合信息<br/>
    * total  总记录条数<br/>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateGroupCollectionList' => null,
        'total' => 'int32'
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
    * templateGroupCollectionList  模板组集合信息<br/>
    * total  总记录条数<br/>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateGroupCollectionList' => 'template_group_collection_list',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateGroupCollectionList  模板组集合信息<br/>
    * total  总记录条数<br/>
    *
    * @var string[]
    */
    protected static $setters = [
            'templateGroupCollectionList' => 'setTemplateGroupCollectionList',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateGroupCollectionList  模板组集合信息<br/>
    * total  总记录条数<br/>
    *
    * @var string[]
    */
    protected static $getters = [
            'templateGroupCollectionList' => 'getTemplateGroupCollectionList',
            'total' => 'getTotal'
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
        $this->container['templateGroupCollectionList'] = isset($data['templateGroupCollectionList']) ? $data['templateGroupCollectionList'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets templateGroupCollectionList
    *  模板组集合信息<br/>
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\TemplateGroupCollection[]|null
    */
    public function getTemplateGroupCollectionList()
    {
        return $this->container['templateGroupCollectionList'];
    }

    /**
    * Sets templateGroupCollectionList
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\TemplateGroupCollection[]|null $templateGroupCollectionList 模板组集合信息<br/>
    *
    * @return $this
    */
    public function setTemplateGroupCollectionList($templateGroupCollectionList)
    {
        $this->container['templateGroupCollectionList'] = $templateGroupCollectionList;
        return $this;
    }

    /**
    * Gets total
    *  总记录条数<br/>
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总记录条数<br/>
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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


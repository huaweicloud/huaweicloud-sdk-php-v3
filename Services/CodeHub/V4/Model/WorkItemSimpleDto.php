<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemSimpleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemSimpleDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relatedId  **参数解释：** 工作项编号。
    * relatedUrl  **参数解释：** 工作项地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relatedId' => 'string',
            'relatedUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relatedId  **参数解释：** 工作项编号。
    * relatedUrl  **参数解释：** 工作项地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relatedId' => null,
        'relatedUrl' => null
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
    * relatedId  **参数解释：** 工作项编号。
    * relatedUrl  **参数解释：** 工作项地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relatedId' => 'related_id',
            'relatedUrl' => 'related_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relatedId  **参数解释：** 工作项编号。
    * relatedUrl  **参数解释：** 工作项地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'relatedId' => 'setRelatedId',
            'relatedUrl' => 'setRelatedUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relatedId  **参数解释：** 工作项编号。
    * relatedUrl  **参数解释：** 工作项地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'relatedId' => 'getRelatedId',
            'relatedUrl' => 'getRelatedUrl'
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
        $this->container['relatedId'] = isset($data['relatedId']) ? $data['relatedId'] : null;
        $this->container['relatedUrl'] = isset($data['relatedUrl']) ? $data['relatedUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['relatedId']) && (mb_strlen($this->container['relatedId']) > 100)) {
                $invalidProperties[] = "invalid value for 'relatedId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['relatedId']) && (mb_strlen($this->container['relatedId']) < 1)) {
                $invalidProperties[] = "invalid value for 'relatedId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['relatedUrl']) && (mb_strlen($this->container['relatedUrl']) > 100000)) {
                $invalidProperties[] = "invalid value for 'relatedUrl', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['relatedUrl']) && (mb_strlen($this->container['relatedUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'relatedUrl', the character length must be bigger than or equal to 1.";
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
    * Gets relatedId
    *  **参数解释：** 工作项编号。
    *
    * @return string|null
    */
    public function getRelatedId()
    {
        return $this->container['relatedId'];
    }

    /**
    * Sets relatedId
    *
    * @param string|null $relatedId **参数解释：** 工作项编号。
    *
    * @return $this
    */
    public function setRelatedId($relatedId)
    {
        $this->container['relatedId'] = $relatedId;
        return $this;
    }

    /**
    * Gets relatedUrl
    *  **参数解释：** 工作项地址。
    *
    * @return string|null
    */
    public function getRelatedUrl()
    {
        return $this->container['relatedUrl'];
    }

    /**
    * Sets relatedUrl
    *
    * @param string|null $relatedUrl **参数解释：** 工作项地址。
    *
    * @return $this
    */
    public function setRelatedUrl($relatedUrl)
    {
        $this->container['relatedUrl'] = $relatedUrl;
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


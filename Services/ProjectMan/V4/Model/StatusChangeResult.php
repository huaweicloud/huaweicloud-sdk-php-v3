<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatusChangeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatusChangeResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cannotFinishAr  **参数解释**： 不可完成的AR工作项列表，当完成发布/迭代时，未完成的AR工作项会列出在此。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cannotFinishAr' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cannotFinishAr  **参数解释**： 不可完成的AR工作项列表，当完成发布/迭代时，未完成的AR工作项会列出在此。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cannotFinishAr' => null
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
    * cannotFinishAr  **参数解释**： 不可完成的AR工作项列表，当完成发布/迭代时，未完成的AR工作项会列出在此。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cannotFinishAr' => 'cannot_finish_ar'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cannotFinishAr  **参数解释**： 不可完成的AR工作项列表，当完成发布/迭代时，未完成的AR工作项会列出在此。
    *
    * @var string[]
    */
    protected static $setters = [
            'cannotFinishAr' => 'setCannotFinishAr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cannotFinishAr  **参数解释**： 不可完成的AR工作项列表，当完成发布/迭代时，未完成的AR工作项会列出在此。
    *
    * @var string[]
    */
    protected static $getters = [
            'cannotFinishAr' => 'getCannotFinishAr'
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
        $this->container['cannotFinishAr'] = isset($data['cannotFinishAr']) ? $data['cannotFinishAr'] : null;
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
    * Gets cannotFinishAr
    *  **参数解释**： 不可完成的AR工作项列表，当完成发布/迭代时，未完成的AR工作项会列出在此。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemVO[]|null
    */
    public function getCannotFinishAr()
    {
        return $this->container['cannotFinishAr'];
    }

    /**
    * Sets cannotFinishAr
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemVO[]|null $cannotFinishAr **参数解释**： 不可完成的AR工作项列表，当完成发布/迭代时，未完成的AR工作项会列出在此。
    *
    * @return $this
    */
    public function setCannotFinishAr($cannotFinishAr)
    {
        $this->container['cannotFinishAr'] = $cannotFinishAr;
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


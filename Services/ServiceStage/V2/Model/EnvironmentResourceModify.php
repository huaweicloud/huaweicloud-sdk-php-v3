<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvironmentResourceModify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvironmentResourceModify';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addBaseResources  添加基础资源。
    * addOptionalResources  添加其他资源。
    * removeResources  移除资源。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addBaseResources' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]',
            'addOptionalResources' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]',
            'removeResources' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addBaseResources  添加基础资源。
    * addOptionalResources  添加其他资源。
    * removeResources  移除资源。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addBaseResources' => null,
        'addOptionalResources' => null,
        'removeResources' => null
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
    * addBaseResources  添加基础资源。
    * addOptionalResources  添加其他资源。
    * removeResources  移除资源。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addBaseResources' => 'add_base_resources',
            'addOptionalResources' => 'add_optional_resources',
            'removeResources' => 'remove_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addBaseResources  添加基础资源。
    * addOptionalResources  添加其他资源。
    * removeResources  移除资源。
    *
    * @var string[]
    */
    protected static $setters = [
            'addBaseResources' => 'setAddBaseResources',
            'addOptionalResources' => 'setAddOptionalResources',
            'removeResources' => 'setRemoveResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addBaseResources  添加基础资源。
    * addOptionalResources  添加其他资源。
    * removeResources  移除资源。
    *
    * @var string[]
    */
    protected static $getters = [
            'addBaseResources' => 'getAddBaseResources',
            'addOptionalResources' => 'getAddOptionalResources',
            'removeResources' => 'getRemoveResources'
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
        $this->container['addBaseResources'] = isset($data['addBaseResources']) ? $data['addBaseResources'] : null;
        $this->container['addOptionalResources'] = isset($data['addOptionalResources']) ? $data['addOptionalResources'] : null;
        $this->container['removeResources'] = isset($data['removeResources']) ? $data['removeResources'] : null;
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
    * Gets addBaseResources
    *  添加基础资源。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]|null
    */
    public function getAddBaseResources()
    {
        return $this->container['addBaseResources'];
    }

    /**
    * Sets addBaseResources
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]|null $addBaseResources 添加基础资源。
    *
    * @return $this
    */
    public function setAddBaseResources($addBaseResources)
    {
        $this->container['addBaseResources'] = $addBaseResources;
        return $this;
    }

    /**
    * Gets addOptionalResources
    *  添加其他资源。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]|null
    */
    public function getAddOptionalResources()
    {
        return $this->container['addOptionalResources'];
    }

    /**
    * Sets addOptionalResources
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]|null $addOptionalResources 添加其他资源。
    *
    * @return $this
    */
    public function setAddOptionalResources($addOptionalResources)
    {
        $this->container['addOptionalResources'] = $addOptionalResources;
        return $this;
    }

    /**
    * Gets removeResources
    *  移除资源。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]|null
    */
    public function getRemoveResources()
    {
        return $this->container['removeResources'];
    }

    /**
    * Sets removeResources
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\Resource[]|null $removeResources 移除资源。
    *
    * @return $this
    */
    public function setRemoveResources($removeResources)
    {
        $this->container['removeResources'] = $removeResources;
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


<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OverrideSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OverrideSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceSelectors  资源选择器，限制该覆盖策略适用的资源类型
    * overriders  将应用于资源的覆盖规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceSelectors' => '\HuaweiCloud\SDK\Ucs\V1\Model\ResourceSelector[]',
            'overriders' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceSelectors  资源选择器，限制该覆盖策略适用的资源类型
    * overriders  将应用于资源的覆盖规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceSelectors' => null,
        'overriders' => null
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
    * resourceSelectors  资源选择器，限制该覆盖策略适用的资源类型
    * overriders  将应用于资源的覆盖规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceSelectors' => 'resourceSelectors',
            'overriders' => 'overriders'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceSelectors  资源选择器，限制该覆盖策略适用的资源类型
    * overriders  将应用于资源的覆盖规则
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceSelectors' => 'setResourceSelectors',
            'overriders' => 'setOverriders'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceSelectors  资源选择器，限制该覆盖策略适用的资源类型
    * overriders  将应用于资源的覆盖规则
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceSelectors' => 'getResourceSelectors',
            'overriders' => 'getOverriders'
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
        $this->container['resourceSelectors'] = isset($data['resourceSelectors']) ? $data['resourceSelectors'] : null;
        $this->container['overriders'] = isset($data['overriders']) ? $data['overriders'] : null;
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
    * Gets resourceSelectors
    *  资源选择器，限制该覆盖策略适用的资源类型
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ResourceSelector[]|null
    */
    public function getResourceSelectors()
    {
        return $this->container['resourceSelectors'];
    }

    /**
    * Sets resourceSelectors
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ResourceSelector[]|null $resourceSelectors 资源选择器，限制该覆盖策略适用的资源类型
    *
    * @return $this
    */
    public function setResourceSelectors($resourceSelectors)
    {
        $this->container['resourceSelectors'] = $resourceSelectors;
        return $this;
    }

    /**
    * Gets overriders
    *  将应用于资源的覆盖规则
    *
    * @return object|null
    */
    public function getOverriders()
    {
        return $this->container['overriders'];
    }

    /**
    * Sets overriders
    *
    * @param object|null $overriders 将应用于资源的覆盖规则
    *
    * @return $this
    */
    public function setOverriders($overriders)
    {
        $this->container['overriders'] = $overriders;
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


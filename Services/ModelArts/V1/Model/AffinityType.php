<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AffinityType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AffinityType';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requiredDuringSchedulingIgnoredDuringExecution  参数描述： 专属池场景下设置强亲和特性 参数约束： key、values、operator必填
    * preferredDuringSchedulingIgnoredDuringExecution  参数描述： 专属池场景下设置弱亲和特性 参数约束： key、values、operator必填，weight选填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requiredDuringSchedulingIgnoredDuringExecution' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AffinityRule[]',
            'preferredDuringSchedulingIgnoredDuringExecution' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AffinityRule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requiredDuringSchedulingIgnoredDuringExecution  参数描述： 专属池场景下设置强亲和特性 参数约束： key、values、operator必填
    * preferredDuringSchedulingIgnoredDuringExecution  参数描述： 专属池场景下设置弱亲和特性 参数约束： key、values、operator必填，weight选填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requiredDuringSchedulingIgnoredDuringExecution' => null,
        'preferredDuringSchedulingIgnoredDuringExecution' => null
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
    * requiredDuringSchedulingIgnoredDuringExecution  参数描述： 专属池场景下设置强亲和特性 参数约束： key、values、operator必填
    * preferredDuringSchedulingIgnoredDuringExecution  参数描述： 专属池场景下设置弱亲和特性 参数约束： key、values、operator必填，weight选填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requiredDuringSchedulingIgnoredDuringExecution' => 'required_during_scheduling_ignored_during_execution',
            'preferredDuringSchedulingIgnoredDuringExecution' => 'preferred_during_scheduling_ignored_during_execution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requiredDuringSchedulingIgnoredDuringExecution  参数描述： 专属池场景下设置强亲和特性 参数约束： key、values、operator必填
    * preferredDuringSchedulingIgnoredDuringExecution  参数描述： 专属池场景下设置弱亲和特性 参数约束： key、values、operator必填，weight选填
    *
    * @var string[]
    */
    protected static $setters = [
            'requiredDuringSchedulingIgnoredDuringExecution' => 'setRequiredDuringSchedulingIgnoredDuringExecution',
            'preferredDuringSchedulingIgnoredDuringExecution' => 'setPreferredDuringSchedulingIgnoredDuringExecution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requiredDuringSchedulingIgnoredDuringExecution  参数描述： 专属池场景下设置强亲和特性 参数约束： key、values、operator必填
    * preferredDuringSchedulingIgnoredDuringExecution  参数描述： 专属池场景下设置弱亲和特性 参数约束： key、values、operator必填，weight选填
    *
    * @var string[]
    */
    protected static $getters = [
            'requiredDuringSchedulingIgnoredDuringExecution' => 'getRequiredDuringSchedulingIgnoredDuringExecution',
            'preferredDuringSchedulingIgnoredDuringExecution' => 'getPreferredDuringSchedulingIgnoredDuringExecution'
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
        $this->container['requiredDuringSchedulingIgnoredDuringExecution'] = isset($data['requiredDuringSchedulingIgnoredDuringExecution']) ? $data['requiredDuringSchedulingIgnoredDuringExecution'] : null;
        $this->container['preferredDuringSchedulingIgnoredDuringExecution'] = isset($data['preferredDuringSchedulingIgnoredDuringExecution']) ? $data['preferredDuringSchedulingIgnoredDuringExecution'] : null;
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
    * Gets requiredDuringSchedulingIgnoredDuringExecution
    *  参数描述： 专属池场景下设置强亲和特性 参数约束： key、values、operator必填
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AffinityRule[]|null
    */
    public function getRequiredDuringSchedulingIgnoredDuringExecution()
    {
        return $this->container['requiredDuringSchedulingIgnoredDuringExecution'];
    }

    /**
    * Sets requiredDuringSchedulingIgnoredDuringExecution
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AffinityRule[]|null $requiredDuringSchedulingIgnoredDuringExecution 参数描述： 专属池场景下设置强亲和特性 参数约束： key、values、operator必填
    *
    * @return $this
    */
    public function setRequiredDuringSchedulingIgnoredDuringExecution($requiredDuringSchedulingIgnoredDuringExecution)
    {
        $this->container['requiredDuringSchedulingIgnoredDuringExecution'] = $requiredDuringSchedulingIgnoredDuringExecution;
        return $this;
    }

    /**
    * Gets preferredDuringSchedulingIgnoredDuringExecution
    *  参数描述： 专属池场景下设置弱亲和特性 参数约束： key、values、operator必填，weight选填
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AffinityRule[]|null
    */
    public function getPreferredDuringSchedulingIgnoredDuringExecution()
    {
        return $this->container['preferredDuringSchedulingIgnoredDuringExecution'];
    }

    /**
    * Sets preferredDuringSchedulingIgnoredDuringExecution
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AffinityRule[]|null $preferredDuringSchedulingIgnoredDuringExecution 参数描述： 专属池场景下设置弱亲和特性 参数约束： key、values、operator必填，weight选填
    *
    * @return $this
    */
    public function setPreferredDuringSchedulingIgnoredDuringExecution($preferredDuringSchedulingIgnoredDuringExecution)
    {
        $this->container['preferredDuringSchedulingIgnoredDuringExecution'] = $preferredDuringSchedulingIgnoredDuringExecution;
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


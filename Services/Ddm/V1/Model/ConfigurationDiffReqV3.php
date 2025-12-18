<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationDiffReqV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigurationDiffReqV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * diffPara  diffPara
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'diffPara' => '\HuaweiCloud\SDK\Ddm\V1\Model\ParaGroupDiff'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * diffPara  diffPara
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'diffPara' => null
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
    * diffPara  diffPara
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'diffPara' => 'diff_para'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * diffPara  diffPara
    *
    * @var string[]
    */
    protected static $setters = [
            'diffPara' => 'setDiffPara'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * diffPara  diffPara
    *
    * @var string[]
    */
    protected static $getters = [
            'diffPara' => 'getDiffPara'
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
        $this->container['diffPara'] = isset($data['diffPara']) ? $data['diffPara'] : null;
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
    * Gets diffPara
    *  diffPara
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\ParaGroupDiff|null
    */
    public function getDiffPara()
    {
        return $this->container['diffPara'];
    }

    /**
    * Sets diffPara
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\ParaGroupDiff|null $diffPara diffPara
    *
    * @return $this
    */
    public function setDiffPara($diffPara)
    {
        $this->container['diffPara'] = $diffPara;
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


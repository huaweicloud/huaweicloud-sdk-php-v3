<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateInstanceGlobalEipRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateInstanceGlobalEipRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dryRun  dryRun
    * globalEip  globalEip
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dryRun' => 'bool',
            'globalEip' => '\HuaweiCloud\SDK\Geip\V3\Model\AssociateInstanceGlobalEipRequestBodyGlobalEip'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dryRun  dryRun
    * globalEip  globalEip
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dryRun' => null,
        'globalEip' => null
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
    * dryRun  dryRun
    * globalEip  globalEip
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dryRun' => 'dry_run',
            'globalEip' => 'global_eip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dryRun  dryRun
    * globalEip  globalEip
    *
    * @var string[]
    */
    protected static $setters = [
            'dryRun' => 'setDryRun',
            'globalEip' => 'setGlobalEip'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dryRun  dryRun
    * globalEip  globalEip
    *
    * @var string[]
    */
    protected static $getters = [
            'dryRun' => 'getDryRun',
            'globalEip' => 'getGlobalEip'
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
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
        $this->container['globalEip'] = isset($data['globalEip']) ? $data['globalEip'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['globalEip'] === null) {
            $invalidProperties[] = "'globalEip' can't be null";
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
    * Gets dryRun
    *  dryRun
    *
    * @return bool|null
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool|null $dryRun dryRun
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
        return $this;
    }

    /**
    * Gets globalEip
    *  globalEip
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\AssociateInstanceGlobalEipRequestBodyGlobalEip
    */
    public function getGlobalEip()
    {
        return $this->container['globalEip'];
    }

    /**
    * Sets globalEip
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\AssociateInstanceGlobalEipRequestBodyGlobalEip $globalEip globalEip
    *
    * @return $this
    */
    public function setGlobalEip($globalEip)
    {
        $this->container['globalEip'] = $globalEip;
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


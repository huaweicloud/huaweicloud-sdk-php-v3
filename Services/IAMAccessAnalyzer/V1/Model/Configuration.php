<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Configuration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Configuration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * iamAgency  iamAgency
    * obsBucket  obsBucket
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'iamAgency' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IAMAgency',
            'obsBucket' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\OBSBucket'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * iamAgency  iamAgency
    * obsBucket  obsBucket
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'iamAgency' => null,
        'obsBucket' => null
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
    * iamAgency  iamAgency
    * obsBucket  obsBucket
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'iamAgency' => 'iam_agency',
            'obsBucket' => 'obs_bucket'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * iamAgency  iamAgency
    * obsBucket  obsBucket
    *
    * @var string[]
    */
    protected static $setters = [
            'iamAgency' => 'setIamAgency',
            'obsBucket' => 'setObsBucket'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * iamAgency  iamAgency
    * obsBucket  obsBucket
    *
    * @var string[]
    */
    protected static $getters = [
            'iamAgency' => 'getIamAgency',
            'obsBucket' => 'getObsBucket'
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
        $this->container['iamAgency'] = isset($data['iamAgency']) ? $data['iamAgency'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
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
    * Gets iamAgency
    *  iamAgency
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IAMAgency|null
    */
    public function getIamAgency()
    {
        return $this->container['iamAgency'];
    }

    /**
    * Sets iamAgency
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\IAMAgency|null $iamAgency iamAgency
    *
    * @return $this
    */
    public function setIamAgency($iamAgency)
    {
        $this->container['iamAgency'] = $iamAgency;
        return $this;
    }

    /**
    * Gets obsBucket
    *  obsBucket
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\OBSBucket|null
    */
    public function getObsBucket()
    {
        return $this->container['obsBucket'];
    }

    /**
    * Sets obsBucket
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\OBSBucket|null $obsBucket obsBucket
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
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


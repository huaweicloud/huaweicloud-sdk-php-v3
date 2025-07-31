<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCompareProgressResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCompareProgressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fullInfo  fullInfo
    * increInfo  increInfo
    * globalInfo  globalInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fullInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryCompareJobProgressRespFullInfo',
            'increInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryCompareJobProgressRespIncreInfo',
            'globalInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryCompareJobProgressRespGlobalInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fullInfo  fullInfo
    * increInfo  increInfo
    * globalInfo  globalInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fullInfo' => null,
        'increInfo' => null,
        'globalInfo' => null
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
    * fullInfo  fullInfo
    * increInfo  increInfo
    * globalInfo  globalInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fullInfo' => 'full_info',
            'increInfo' => 'incre_info',
            'globalInfo' => 'global_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fullInfo  fullInfo
    * increInfo  increInfo
    * globalInfo  globalInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'fullInfo' => 'setFullInfo',
            'increInfo' => 'setIncreInfo',
            'globalInfo' => 'setGlobalInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fullInfo  fullInfo
    * increInfo  increInfo
    * globalInfo  globalInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'fullInfo' => 'getFullInfo',
            'increInfo' => 'getIncreInfo',
            'globalInfo' => 'getGlobalInfo'
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
        $this->container['fullInfo'] = isset($data['fullInfo']) ? $data['fullInfo'] : null;
        $this->container['increInfo'] = isset($data['increInfo']) ? $data['increInfo'] : null;
        $this->container['globalInfo'] = isset($data['globalInfo']) ? $data['globalInfo'] : null;
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
    * Gets fullInfo
    *  fullInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryCompareJobProgressRespFullInfo|null
    */
    public function getFullInfo()
    {
        return $this->container['fullInfo'];
    }

    /**
    * Sets fullInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryCompareJobProgressRespFullInfo|null $fullInfo fullInfo
    *
    * @return $this
    */
    public function setFullInfo($fullInfo)
    {
        $this->container['fullInfo'] = $fullInfo;
        return $this;
    }

    /**
    * Gets increInfo
    *  increInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryCompareJobProgressRespIncreInfo|null
    */
    public function getIncreInfo()
    {
        return $this->container['increInfo'];
    }

    /**
    * Sets increInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryCompareJobProgressRespIncreInfo|null $increInfo increInfo
    *
    * @return $this
    */
    public function setIncreInfo($increInfo)
    {
        $this->container['increInfo'] = $increInfo;
        return $this;
    }

    /**
    * Gets globalInfo
    *  globalInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryCompareJobProgressRespGlobalInfo|null
    */
    public function getGlobalInfo()
    {
        return $this->container['globalInfo'];
    }

    /**
    * Sets globalInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryCompareJobProgressRespGlobalInfo|null $globalInfo globalInfo
    *
    * @return $this
    */
    public function setGlobalInfo($globalInfo)
    {
        $this->container['globalInfo'] = $globalInfo;
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


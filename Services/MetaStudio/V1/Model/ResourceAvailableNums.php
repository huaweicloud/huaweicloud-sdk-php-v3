<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceAvailableNums implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceAvailableNums';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flexus  flexus版资源数。
    * basic  基础版资源数。
    * middle  进阶版资源数。
    * middleOnDemand  进阶测试版资源数。
    * advance  高级版资源数。
    * thirdPartyCmww  出门问问资源数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flexus' => 'int',
            'basic' => 'int',
            'middle' => 'int',
            'middleOnDemand' => 'int',
            'advance' => 'int',
            'thirdPartyCmww' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flexus  flexus版资源数。
    * basic  基础版资源数。
    * middle  进阶版资源数。
    * middleOnDemand  进阶测试版资源数。
    * advance  高级版资源数。
    * thirdPartyCmww  出门问问资源数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flexus' => null,
        'basic' => null,
        'middle' => null,
        'middleOnDemand' => null,
        'advance' => null,
        'thirdPartyCmww' => null
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
    * flexus  flexus版资源数。
    * basic  基础版资源数。
    * middle  进阶版资源数。
    * middleOnDemand  进阶测试版资源数。
    * advance  高级版资源数。
    * thirdPartyCmww  出门问问资源数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flexus' => 'flexus',
            'basic' => 'basic',
            'middle' => 'middle',
            'middleOnDemand' => 'middle_on_demand',
            'advance' => 'advance',
            'thirdPartyCmww' => 'third_party_cmww'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flexus  flexus版资源数。
    * basic  基础版资源数。
    * middle  进阶版资源数。
    * middleOnDemand  进阶测试版资源数。
    * advance  高级版资源数。
    * thirdPartyCmww  出门问问资源数。
    *
    * @var string[]
    */
    protected static $setters = [
            'flexus' => 'setFlexus',
            'basic' => 'setBasic',
            'middle' => 'setMiddle',
            'middleOnDemand' => 'setMiddleOnDemand',
            'advance' => 'setAdvance',
            'thirdPartyCmww' => 'setThirdPartyCmww'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flexus  flexus版资源数。
    * basic  基础版资源数。
    * middle  进阶版资源数。
    * middleOnDemand  进阶测试版资源数。
    * advance  高级版资源数。
    * thirdPartyCmww  出门问问资源数。
    *
    * @var string[]
    */
    protected static $getters = [
            'flexus' => 'getFlexus',
            'basic' => 'getBasic',
            'middle' => 'getMiddle',
            'middleOnDemand' => 'getMiddleOnDemand',
            'advance' => 'getAdvance',
            'thirdPartyCmww' => 'getThirdPartyCmww'
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
        $this->container['flexus'] = isset($data['flexus']) ? $data['flexus'] : null;
        $this->container['basic'] = isset($data['basic']) ? $data['basic'] : null;
        $this->container['middle'] = isset($data['middle']) ? $data['middle'] : null;
        $this->container['middleOnDemand'] = isset($data['middleOnDemand']) ? $data['middleOnDemand'] : null;
        $this->container['advance'] = isset($data['advance']) ? $data['advance'] : null;
        $this->container['thirdPartyCmww'] = isset($data['thirdPartyCmww']) ? $data['thirdPartyCmww'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['flexus']) && ($this->container['flexus'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'flexus', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['flexus']) && ($this->container['flexus'] < 0)) {
                $invalidProperties[] = "invalid value for 'flexus', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['basic']) && ($this->container['basic'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'basic', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['basic']) && ($this->container['basic'] < 0)) {
                $invalidProperties[] = "invalid value for 'basic', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['middle']) && ($this->container['middle'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'middle', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['middle']) && ($this->container['middle'] < 0)) {
                $invalidProperties[] = "invalid value for 'middle', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['middleOnDemand']) && ($this->container['middleOnDemand'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'middleOnDemand', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['middleOnDemand']) && ($this->container['middleOnDemand'] < 0)) {
                $invalidProperties[] = "invalid value for 'middleOnDemand', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['advance']) && ($this->container['advance'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'advance', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['advance']) && ($this->container['advance'] < 0)) {
                $invalidProperties[] = "invalid value for 'advance', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thirdPartyCmww']) && ($this->container['thirdPartyCmww'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'thirdPartyCmww', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['thirdPartyCmww']) && ($this->container['thirdPartyCmww'] < 0)) {
                $invalidProperties[] = "invalid value for 'thirdPartyCmww', must be bigger than or equal to 0.";
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
    * Gets flexus
    *  flexus版资源数。
    *
    * @return int|null
    */
    public function getFlexus()
    {
        return $this->container['flexus'];
    }

    /**
    * Sets flexus
    *
    * @param int|null $flexus flexus版资源数。
    *
    * @return $this
    */
    public function setFlexus($flexus)
    {
        $this->container['flexus'] = $flexus;
        return $this;
    }

    /**
    * Gets basic
    *  基础版资源数。
    *
    * @return int|null
    */
    public function getBasic()
    {
        return $this->container['basic'];
    }

    /**
    * Sets basic
    *
    * @param int|null $basic 基础版资源数。
    *
    * @return $this
    */
    public function setBasic($basic)
    {
        $this->container['basic'] = $basic;
        return $this;
    }

    /**
    * Gets middle
    *  进阶版资源数。
    *
    * @return int|null
    */
    public function getMiddle()
    {
        return $this->container['middle'];
    }

    /**
    * Sets middle
    *
    * @param int|null $middle 进阶版资源数。
    *
    * @return $this
    */
    public function setMiddle($middle)
    {
        $this->container['middle'] = $middle;
        return $this;
    }

    /**
    * Gets middleOnDemand
    *  进阶测试版资源数。
    *
    * @return int|null
    */
    public function getMiddleOnDemand()
    {
        return $this->container['middleOnDemand'];
    }

    /**
    * Sets middleOnDemand
    *
    * @param int|null $middleOnDemand 进阶测试版资源数。
    *
    * @return $this
    */
    public function setMiddleOnDemand($middleOnDemand)
    {
        $this->container['middleOnDemand'] = $middleOnDemand;
        return $this;
    }

    /**
    * Gets advance
    *  高级版资源数。
    *
    * @return int|null
    */
    public function getAdvance()
    {
        return $this->container['advance'];
    }

    /**
    * Sets advance
    *
    * @param int|null $advance 高级版资源数。
    *
    * @return $this
    */
    public function setAdvance($advance)
    {
        $this->container['advance'] = $advance;
        return $this;
    }

    /**
    * Gets thirdPartyCmww
    *  出门问问资源数。
    *
    * @return int|null
    */
    public function getThirdPartyCmww()
    {
        return $this->container['thirdPartyCmww'];
    }

    /**
    * Sets thirdPartyCmww
    *
    * @param int|null $thirdPartyCmww 出门问问资源数。
    *
    * @return $this
    */
    public function setThirdPartyCmww($thirdPartyCmww)
    {
        $this->container['thirdPartyCmww'] = $thirdPartyCmww;
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


<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateBandwidthPackage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateBandwidthPackage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * bandwidth  带宽包实例中的带宽值。
    * billingMode  带宽包实例在大陆站或国际站的计费方式： - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'bandwidth' => 'int',
            'billingMode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * bandwidth  带宽包实例中的带宽值。
    * billingMode  带宽包实例在大陆站或国际站的计费方式： - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'bandwidth' => 'int32',
        'billingMode' => 'int32'
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
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * bandwidth  带宽包实例中的带宽值。
    * billingMode  带宽包实例在大陆站或国际站的计费方式： - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'bandwidth' => 'bandwidth',
            'billingMode' => 'billing_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * bandwidth  带宽包实例中的带宽值。
    * billingMode  带宽包实例在大陆站或国际站的计费方式： - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'bandwidth' => 'setBandwidth',
            'billingMode' => 'setBillingMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * bandwidth  带宽包实例中的带宽值。
    * billingMode  带宽包实例在大陆站或国际站的计费方式： - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'bandwidth' => 'getBandwidth',
            'billingMode' => 'getBillingMode'
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
    const BILLING_MODE_5 = 5;
    const BILLING_MODE_6 = 6;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBillingModeAllowableValues()
    {
        return [
            self::BILLING_MODE_5,
            self::BILLING_MODE_6,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['billingMode'] = isset($data['billingMode']) ? $data['billingMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 999999)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getBillingModeAllowableValues();
                if (!is_null($this->container['billingMode']) && !in_array($this->container['billingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'billingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  实例名字。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 实例名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  实例描述。不支持 <>。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 实例描述。不支持 <>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets bandwidth
    *  带宽包实例中的带宽值。
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 带宽包实例中的带宽值。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets billingMode
    *  带宽包实例在大陆站或国际站的计费方式： - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    *
    * @return int|null
    */
    public function getBillingMode()
    {
        return $this->container['billingMode'];
    }

    /**
    * Sets billingMode
    *
    * @param int|null $billingMode 带宽包实例在大陆站或国际站的计费方式： - 5：大陆站按95方式计费 - 6：国际站按95方式计费
    *
    * @return $this
    */
    public function setBillingMode($billingMode)
    {
        $this->container['billingMode'] = $billingMode;
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


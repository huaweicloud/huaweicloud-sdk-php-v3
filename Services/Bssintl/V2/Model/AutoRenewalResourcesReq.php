<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoRenewalResourcesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoRenewalResourcesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoRenewTimes  |参数名称：自动续费次数| |参数的约束及描述：该参数非必填，范围限制：0-99，0代表不限制次数。 首次开通自动续费，此参数不携带或携带值为null时，默认为不限制次数 已开通自动续费，重置自动续费次数时此参数必填，否则不做处理，不进行修改|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoRenewTimes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoRenewTimes  |参数名称：自动续费次数| |参数的约束及描述：该参数非必填，范围限制：0-99，0代表不限制次数。 首次开通自动续费，此参数不携带或携带值为null时，默认为不限制次数 已开通自动续费，重置自动续费次数时此参数必填，否则不做处理，不进行修改|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoRenewTimes' => 'int32'
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
    * autoRenewTimes  |参数名称：自动续费次数| |参数的约束及描述：该参数非必填，范围限制：0-99，0代表不限制次数。 首次开通自动续费，此参数不携带或携带值为null时，默认为不限制次数 已开通自动续费，重置自动续费次数时此参数必填，否则不做处理，不进行修改|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoRenewTimes' => 'auto_renew_times'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoRenewTimes  |参数名称：自动续费次数| |参数的约束及描述：该参数非必填，范围限制：0-99，0代表不限制次数。 首次开通自动续费，此参数不携带或携带值为null时，默认为不限制次数 已开通自动续费，重置自动续费次数时此参数必填，否则不做处理，不进行修改|
    *
    * @var string[]
    */
    protected static $setters = [
            'autoRenewTimes' => 'setAutoRenewTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoRenewTimes  |参数名称：自动续费次数| |参数的约束及描述：该参数非必填，范围限制：0-99，0代表不限制次数。 首次开通自动续费，此参数不携带或携带值为null时，默认为不限制次数 已开通自动续费，重置自动续费次数时此参数必填，否则不做处理，不进行修改|
    *
    * @var string[]
    */
    protected static $getters = [
            'autoRenewTimes' => 'getAutoRenewTimes'
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
        $this->container['autoRenewTimes'] = isset($data['autoRenewTimes']) ? $data['autoRenewTimes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['autoRenewTimes']) && ($this->container['autoRenewTimes'] > 99)) {
                $invalidProperties[] = "invalid value for 'autoRenewTimes', must be smaller than or equal to 99.";
            }
            if (!is_null($this->container['autoRenewTimes']) && ($this->container['autoRenewTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'autoRenewTimes', must be bigger than or equal to 0.";
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
    * Gets autoRenewTimes
    *  |参数名称：自动续费次数| |参数的约束及描述：该参数非必填，范围限制：0-99，0代表不限制次数。 首次开通自动续费，此参数不携带或携带值为null时，默认为不限制次数 已开通自动续费，重置自动续费次数时此参数必填，否则不做处理，不进行修改|
    *
    * @return int|null
    */
    public function getAutoRenewTimes()
    {
        return $this->container['autoRenewTimes'];
    }

    /**
    * Sets autoRenewTimes
    *
    * @param int|null $autoRenewTimes |参数名称：自动续费次数| |参数的约束及描述：该参数非必填，范围限制：0-99，0代表不限制次数。 首次开通自动续费，此参数不携带或携带值为null时，默认为不限制次数 已开通自动续费，重置自动续费次数时此参数必填，否则不做处理，不进行修改|
    *
    * @return $this
    */
    public function setAutoRenewTimes($autoRenewTimes)
    {
        $this->container['autoRenewTimes'] = $autoRenewTimes;
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


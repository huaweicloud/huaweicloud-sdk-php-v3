<?php

namespace HuaweiCloud\SDK\CloudTable\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterSettingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterSettingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parmStatus  集群参数生效状态：0、未更改 1、未应用 2、应用中 3、已应用 4、应用失败
    * parameterInfo  参数列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parmStatus' => 'int',
            'parameterInfo' => '\HuaweiCloud\SDK\CloudTable\V2\Model\ParameterInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parmStatus  集群参数生效状态：0、未更改 1、未应用 2、应用中 3、已应用 4、应用失败
    * parameterInfo  参数列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parmStatus' => 'int32',
        'parameterInfo' => null
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
    * parmStatus  集群参数生效状态：0、未更改 1、未应用 2、应用中 3、已应用 4、应用失败
    * parameterInfo  参数列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parmStatus' => 'parm_status',
            'parameterInfo' => 'parameter_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parmStatus  集群参数生效状态：0、未更改 1、未应用 2、应用中 3、已应用 4、应用失败
    * parameterInfo  参数列表
    *
    * @var string[]
    */
    protected static $setters = [
            'parmStatus' => 'setParmStatus',
            'parameterInfo' => 'setParameterInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parmStatus  集群参数生效状态：0、未更改 1、未应用 2、应用中 3、已应用 4、应用失败
    * parameterInfo  参数列表
    *
    * @var string[]
    */
    protected static $getters = [
            'parmStatus' => 'getParmStatus',
            'parameterInfo' => 'getParameterInfo'
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
        $this->container['parmStatus'] = isset($data['parmStatus']) ? $data['parmStatus'] : null;
        $this->container['parameterInfo'] = isset($data['parameterInfo']) ? $data['parameterInfo'] : null;
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
    * Gets parmStatus
    *  集群参数生效状态：0、未更改 1、未应用 2、应用中 3、已应用 4、应用失败
    *
    * @return int|null
    */
    public function getParmStatus()
    {
        return $this->container['parmStatus'];
    }

    /**
    * Sets parmStatus
    *
    * @param int|null $parmStatus 集群参数生效状态：0、未更改 1、未应用 2、应用中 3、已应用 4、应用失败
    *
    * @return $this
    */
    public function setParmStatus($parmStatus)
    {
        $this->container['parmStatus'] = $parmStatus;
        return $this;
    }

    /**
    * Gets parameterInfo
    *  参数列表
    *
    * @return \HuaweiCloud\SDK\CloudTable\V2\Model\ParameterInfo[]|null
    */
    public function getParameterInfo()
    {
        return $this->container['parameterInfo'];
    }

    /**
    * Sets parameterInfo
    *
    * @param \HuaweiCloud\SDK\CloudTable\V2\Model\ParameterInfo[]|null $parameterInfo 参数列表
    *
    * @return $this
    */
    public function setParameterInfo($parameterInfo)
    {
        $this->container['parameterInfo'] = $parameterInfo;
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


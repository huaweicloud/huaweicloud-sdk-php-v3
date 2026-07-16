<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudServiceBasic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudServiceBasic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：云服务类型编码|
    * cloudServiceTypeName  |参数名称：云服务类型名称| |参数的约束及描述：云服务类型名称|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：资源类型编码|
    * resourceTypeName  |参数名称：资源类型名称| |参数的约束及描述：资源类型名称|
    * resourceSpec  |参数名称：资源规格编码| |参数的约束及描述：资源规格编码|
    * resourceSpecName  |参数名称：资源规格名称| |参数的约束及描述：资源规格名称|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：1：包年/包月，3：按需|
    * regionCode  |参数名称：区域编码| |参数的约束及描述：区域编码|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudServiceType' => 'string',
            'cloudServiceTypeName' => 'string',
            'resourceType' => 'string',
            'resourceTypeName' => 'string',
            'resourceSpec' => 'string',
            'resourceSpecName' => 'string',
            'chargeMode' => 'string',
            'regionCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：云服务类型编码|
    * cloudServiceTypeName  |参数名称：云服务类型名称| |参数的约束及描述：云服务类型名称|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：资源类型编码|
    * resourceTypeName  |参数名称：资源类型名称| |参数的约束及描述：资源类型名称|
    * resourceSpec  |参数名称：资源规格编码| |参数的约束及描述：资源规格编码|
    * resourceSpecName  |参数名称：资源规格名称| |参数的约束及描述：资源规格名称|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：1：包年/包月，3：按需|
    * regionCode  |参数名称：区域编码| |参数的约束及描述：区域编码|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudServiceType' => null,
        'cloudServiceTypeName' => null,
        'resourceType' => null,
        'resourceTypeName' => null,
        'resourceSpec' => null,
        'resourceSpecName' => null,
        'chargeMode' => null,
        'regionCode' => null
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
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：云服务类型编码|
    * cloudServiceTypeName  |参数名称：云服务类型名称| |参数的约束及描述：云服务类型名称|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：资源类型编码|
    * resourceTypeName  |参数名称：资源类型名称| |参数的约束及描述：资源类型名称|
    * resourceSpec  |参数名称：资源规格编码| |参数的约束及描述：资源规格编码|
    * resourceSpecName  |参数名称：资源规格名称| |参数的约束及描述：资源规格名称|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：1：包年/包月，3：按需|
    * regionCode  |参数名称：区域编码| |参数的约束及描述：区域编码|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudServiceType' => 'cloud_service_type',
            'cloudServiceTypeName' => 'cloud_service_type_name',
            'resourceType' => 'resource_type',
            'resourceTypeName' => 'resource_type_name',
            'resourceSpec' => 'resource_spec',
            'resourceSpecName' => 'resource_spec_name',
            'chargeMode' => 'charge_mode',
            'regionCode' => 'region_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：云服务类型编码|
    * cloudServiceTypeName  |参数名称：云服务类型名称| |参数的约束及描述：云服务类型名称|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：资源类型编码|
    * resourceTypeName  |参数名称：资源类型名称| |参数的约束及描述：资源类型名称|
    * resourceSpec  |参数名称：资源规格编码| |参数的约束及描述：资源规格编码|
    * resourceSpecName  |参数名称：资源规格名称| |参数的约束及描述：资源规格名称|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：1：包年/包月，3：按需|
    * regionCode  |参数名称：区域编码| |参数的约束及描述：区域编码|
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudServiceType' => 'setCloudServiceType',
            'cloudServiceTypeName' => 'setCloudServiceTypeName',
            'resourceType' => 'setResourceType',
            'resourceTypeName' => 'setResourceTypeName',
            'resourceSpec' => 'setResourceSpec',
            'resourceSpecName' => 'setResourceSpecName',
            'chargeMode' => 'setChargeMode',
            'regionCode' => 'setRegionCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：云服务类型编码|
    * cloudServiceTypeName  |参数名称：云服务类型名称| |参数的约束及描述：云服务类型名称|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：资源类型编码|
    * resourceTypeName  |参数名称：资源类型名称| |参数的约束及描述：资源类型名称|
    * resourceSpec  |参数名称：资源规格编码| |参数的约束及描述：资源规格编码|
    * resourceSpecName  |参数名称：资源规格名称| |参数的约束及描述：资源规格名称|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：1：包年/包月，3：按需|
    * regionCode  |参数名称：区域编码| |参数的约束及描述：区域编码|
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudServiceType' => 'getCloudServiceType',
            'cloudServiceTypeName' => 'getCloudServiceTypeName',
            'resourceType' => 'getResourceType',
            'resourceTypeName' => 'getResourceTypeName',
            'resourceSpec' => 'getResourceSpec',
            'resourceSpecName' => 'getResourceSpecName',
            'chargeMode' => 'getChargeMode',
            'regionCode' => 'getRegionCode'
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
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['cloudServiceTypeName'] = isset($data['cloudServiceTypeName']) ? $data['cloudServiceTypeName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['resourceSpec'] = isset($data['resourceSpec']) ? $data['resourceSpec'] : null;
        $this->container['resourceSpecName'] = isset($data['resourceSpecName']) ? $data['resourceSpecName'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudServiceTypeName']) && (mb_strlen($this->container['cloudServiceTypeName']) > 200)) {
                $invalidProperties[] = "invalid value for 'cloudServiceTypeName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['cloudServiceTypeName']) && (mb_strlen($this->container['cloudServiceTypeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudServiceTypeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceTypeName']) && (mb_strlen($this->container['resourceTypeName']) > 200)) {
                $invalidProperties[] = "invalid value for 'resourceTypeName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['resourceTypeName']) && (mb_strlen($this->container['resourceTypeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceTypeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceSpec']) && (mb_strlen($this->container['resourceSpec']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpec', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceSpec']) && (mb_strlen($this->container['resourceSpec']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSpec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceSpecName']) && (mb_strlen($this->container['resourceSpecName']) > 200)) {
                $invalidProperties[] = "invalid value for 'resourceSpecName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['resourceSpecName']) && (mb_strlen($this->container['resourceSpecName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSpecName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionCode']) && (mb_strlen($this->container['regionCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionCode']) && (mb_strlen($this->container['regionCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be bigger than or equal to 0.";
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
    * Gets cloudServiceType
    *  |参数名称：云服务类型编码| |参数的约束及描述：云服务类型编码|
    *
    * @return string|null
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string|null $cloudServiceType |参数名称：云服务类型编码| |参数的约束及描述：云服务类型编码|
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets cloudServiceTypeName
    *  |参数名称：云服务类型名称| |参数的约束及描述：云服务类型名称|
    *
    * @return string|null
    */
    public function getCloudServiceTypeName()
    {
        return $this->container['cloudServiceTypeName'];
    }

    /**
    * Sets cloudServiceTypeName
    *
    * @param string|null $cloudServiceTypeName |参数名称：云服务类型名称| |参数的约束及描述：云服务类型名称|
    *
    * @return $this
    */
    public function setCloudServiceTypeName($cloudServiceTypeName)
    {
        $this->container['cloudServiceTypeName'] = $cloudServiceTypeName;
        return $this;
    }

    /**
    * Gets resourceType
    *  |参数名称：资源类型编码| |参数的约束及描述：资源类型编码|
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType |参数名称：资源类型编码| |参数的约束及描述：资源类型编码|
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  |参数名称：资源类型名称| |参数的约束及描述：资源类型名称|
    *
    * @return string|null
    */
    public function getResourceTypeName()
    {
        return $this->container['resourceTypeName'];
    }

    /**
    * Sets resourceTypeName
    *
    * @param string|null $resourceTypeName |参数名称：资源类型名称| |参数的约束及描述：资源类型名称|
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
        return $this;
    }

    /**
    * Gets resourceSpec
    *  |参数名称：资源规格编码| |参数的约束及描述：资源规格编码|
    *
    * @return string|null
    */
    public function getResourceSpec()
    {
        return $this->container['resourceSpec'];
    }

    /**
    * Sets resourceSpec
    *
    * @param string|null $resourceSpec |参数名称：资源规格编码| |参数的约束及描述：资源规格编码|
    *
    * @return $this
    */
    public function setResourceSpec($resourceSpec)
    {
        $this->container['resourceSpec'] = $resourceSpec;
        return $this;
    }

    /**
    * Gets resourceSpecName
    *  |参数名称：资源规格名称| |参数的约束及描述：资源规格名称|
    *
    * @return string|null
    */
    public function getResourceSpecName()
    {
        return $this->container['resourceSpecName'];
    }

    /**
    * Sets resourceSpecName
    *
    * @param string|null $resourceSpecName |参数名称：资源规格名称| |参数的约束及描述：资源规格名称|
    *
    * @return $this
    */
    public function setResourceSpecName($resourceSpecName)
    {
        $this->container['resourceSpecName'] = $resourceSpecName;
        return $this;
    }

    /**
    * Gets chargeMode
    *  |参数名称：计费模式| |参数的约束及描述：1：包年/包月，3：按需|
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode |参数名称：计费模式| |参数的约束及描述：1：包年/包月，3：按需|
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets regionCode
    *  |参数名称：区域编码| |参数的约束及描述：区域编码|
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode |参数名称：区域编码| |参数的约束及描述：区域编码|
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
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


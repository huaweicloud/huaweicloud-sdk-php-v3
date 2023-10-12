<?php

namespace HuaweiCloud\SDK\Cts\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TraceResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TraceResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceType  云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    * resource  云服务对应的资源类型列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceType' => 'string',
            'resource' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceType  云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    * resource  云服务对应的资源类型列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceType' => null,
        'resource' => null
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
    * serviceType  云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    * resource  云服务对应的资源类型列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceType' => 'service_type',
            'resource' => 'resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceType  云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    * resource  云服务对应的资源类型列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceType' => 'setServiceType',
            'resource' => 'setResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceType  云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    * resource  云服务对应的资源类型列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceType' => 'getServiceType',
            'resource' => 'getResource'
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
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['serviceType']) && (mb_strlen($this->container['serviceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceType', the character length must be bigger than or equal to 0.";
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
    * Gets serviceType
    *  云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 云服务类型。必须为已对接CTS的云服务的英文缩写，且服务类型一般为大写字母。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets resource
    *  云服务对应的资源类型列表。
    *
    * @return string[]|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string[]|null $resource 云服务对应的资源类型列表。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
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


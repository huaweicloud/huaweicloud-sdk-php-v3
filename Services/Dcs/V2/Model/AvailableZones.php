<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailableZones implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailableZones';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  可用区编码。
    * port  可用区端口号。
    * name  可用区名称。
    * id  可用区ID。
    * resourceAvailability  分区上是否还有可用资源。 - true：还有资源。 - false：资源已售罄。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'port' => 'string',
            'name' => 'string',
            'id' => 'string',
            'resourceAvailability' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  可用区编码。
    * port  可用区端口号。
    * name  可用区名称。
    * id  可用区ID。
    * resourceAvailability  分区上是否还有可用资源。 - true：还有资源。 - false：资源已售罄。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'port' => null,
        'name' => null,
        'id' => null,
        'resourceAvailability' => null
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
    * code  可用区编码。
    * port  可用区端口号。
    * name  可用区名称。
    * id  可用区ID。
    * resourceAvailability  分区上是否还有可用资源。 - true：还有资源。 - false：资源已售罄。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'port' => 'port',
            'name' => 'name',
            'id' => 'id',
            'resourceAvailability' => 'resource_availability'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  可用区编码。
    * port  可用区端口号。
    * name  可用区名称。
    * id  可用区ID。
    * resourceAvailability  分区上是否还有可用资源。 - true：还有资源。 - false：资源已售罄。
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'port' => 'setPort',
            'name' => 'setName',
            'id' => 'setId',
            'resourceAvailability' => 'setResourceAvailability'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  可用区编码。
    * port  可用区端口号。
    * name  可用区名称。
    * id  可用区ID。
    * resourceAvailability  分区上是否还有可用资源。 - true：还有资源。 - false：资源已售罄。
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'port' => 'getPort',
            'name' => 'getName',
            'id' => 'getId',
            'resourceAvailability' => 'getResourceAvailability'
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
    const RESOURCE_AVAILABILITY_TRUE = 'true';
    const RESOURCE_AVAILABILITY_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceAvailabilityAllowableValues()
    {
        return [
            self::RESOURCE_AVAILABILITY_TRUE,
            self::RESOURCE_AVAILABILITY_FALSE,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['resourceAvailability'] = isset($data['resourceAvailability']) ? $data['resourceAvailability'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getResourceAvailabilityAllowableValues();
                if (!is_null($this->container['resourceAvailability']) && !in_array($this->container['resourceAvailability'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceAvailability', must be one of '%s'",
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
    * Gets code
    *  可用区编码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 可用区编码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets port
    *  可用区端口号。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port 可用区端口号。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets name
    *  可用区名称。
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
    * @param string|null $name 可用区名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  可用区ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 可用区ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets resourceAvailability
    *  分区上是否还有可用资源。 - true：还有资源。 - false：资源已售罄。
    *
    * @return string|null
    */
    public function getResourceAvailability()
    {
        return $this->container['resourceAvailability'];
    }

    /**
    * Sets resourceAvailability
    *
    * @param string|null $resourceAvailability 分区上是否还有可用资源。 - true：还有资源。 - false：资源已售罄。
    *
    * @return $this
    */
    public function setResourceAvailability($resourceAvailability)
    {
        $this->container['resourceAvailability'] = $resourceAvailability;
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


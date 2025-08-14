<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplicationAssignmentDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplicationAssignmentDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationUrn  应用程序URN
    * principalId  主体Id
    * principalType  主体类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationUrn' => 'string',
            'principalId' => 'string',
            'principalType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationUrn  应用程序URN
    * principalId  主体Id
    * principalType  主体类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationUrn' => null,
        'principalId' => null,
        'principalType' => null
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
    * applicationUrn  应用程序URN
    * principalId  主体Id
    * principalType  主体类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationUrn' => 'application_urn',
            'principalId' => 'principal_id',
            'principalType' => 'principal_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationUrn  应用程序URN
    * principalId  主体Id
    * principalType  主体类型
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationUrn' => 'setApplicationUrn',
            'principalId' => 'setPrincipalId',
            'principalType' => 'setPrincipalType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationUrn  应用程序URN
    * principalId  主体Id
    * principalType  主体类型
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationUrn' => 'getApplicationUrn',
            'principalId' => 'getPrincipalId',
            'principalType' => 'getPrincipalType'
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
    const PRINCIPAL_TYPE_USER = 'USER';
    const PRINCIPAL_TYPE_GROUP = 'GROUP';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPrincipalTypeAllowableValues()
    {
        return [
            self::PRINCIPAL_TYPE_USER,
            self::PRINCIPAL_TYPE_GROUP,
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
        $this->container['applicationUrn'] = isset($data['applicationUrn']) ? $data['applicationUrn'] : null;
        $this->container['principalId'] = isset($data['principalId']) ? $data['principalId'] : null;
        $this->container['principalType'] = isset($data['principalType']) ? $data['principalType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['applicationUrn'] === null) {
            $invalidProperties[] = "'applicationUrn' can't be null";
        }
        if ($this->container['principalId'] === null) {
            $invalidProperties[] = "'principalId' can't be null";
        }
        if ($this->container['principalType'] === null) {
            $invalidProperties[] = "'principalType' can't be null";
        }
            $allowedValues = $this->getPrincipalTypeAllowableValues();
                if (!is_null($this->container['principalType']) && !in_array($this->container['principalType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'principalType', must be one of '%s'",
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
    * Gets applicationUrn
    *  应用程序URN
    *
    * @return string
    */
    public function getApplicationUrn()
    {
        return $this->container['applicationUrn'];
    }

    /**
    * Sets applicationUrn
    *
    * @param string $applicationUrn 应用程序URN
    *
    * @return $this
    */
    public function setApplicationUrn($applicationUrn)
    {
        $this->container['applicationUrn'] = $applicationUrn;
        return $this;
    }

    /**
    * Gets principalId
    *  主体Id
    *
    * @return string
    */
    public function getPrincipalId()
    {
        return $this->container['principalId'];
    }

    /**
    * Sets principalId
    *
    * @param string $principalId 主体Id
    *
    * @return $this
    */
    public function setPrincipalId($principalId)
    {
        $this->container['principalId'] = $principalId;
        return $this;
    }

    /**
    * Gets principalType
    *  主体类型
    *
    * @return string
    */
    public function getPrincipalType()
    {
        return $this->container['principalType'];
    }

    /**
    * Sets principalType
    *
    * @param string $principalType 主体类型
    *
    * @return $this
    */
    public function setPrincipalType($principalType)
    {
        $this->container['principalType'] = $principalType;
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


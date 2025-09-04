<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEdgeApplicationRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEdgeApplicationRequestDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeAppId  应用ID
    * edgeAppName  应用名称
    * description  应用描述
    * functionType  功能类型,分为数据处理（DATA_PROCESSING）、协议解析（PROTOCOL_PARSING）、IT集成（ON_PREMISE_INTEGRATION）和混合应用（COMPOSITE_APPLICATION），数据默认为DATA_PROCESSING，数据处理模块可以传输消息，协议解析为驱动类型，IT集成为部署南向3rdIA使用，混合应用可同时实现数据处理和协议解析。
    * protocol  驱动协议类型OPCUA|Modbus-TCP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeAppId' => 'string',
            'edgeAppName' => 'string',
            'description' => 'string',
            'functionType' => 'string',
            'protocol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeAppId  应用ID
    * edgeAppName  应用名称
    * description  应用描述
    * functionType  功能类型,分为数据处理（DATA_PROCESSING）、协议解析（PROTOCOL_PARSING）、IT集成（ON_PREMISE_INTEGRATION）和混合应用（COMPOSITE_APPLICATION），数据默认为DATA_PROCESSING，数据处理模块可以传输消息，协议解析为驱动类型，IT集成为部署南向3rdIA使用，混合应用可同时实现数据处理和协议解析。
    * protocol  驱动协议类型OPCUA|Modbus-TCP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeAppId' => null,
        'edgeAppName' => null,
        'description' => null,
        'functionType' => null,
        'protocol' => null
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
    * edgeAppId  应用ID
    * edgeAppName  应用名称
    * description  应用描述
    * functionType  功能类型,分为数据处理（DATA_PROCESSING）、协议解析（PROTOCOL_PARSING）、IT集成（ON_PREMISE_INTEGRATION）和混合应用（COMPOSITE_APPLICATION），数据默认为DATA_PROCESSING，数据处理模块可以传输消息，协议解析为驱动类型，IT集成为部署南向3rdIA使用，混合应用可同时实现数据处理和协议解析。
    * protocol  驱动协议类型OPCUA|Modbus-TCP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeAppId' => 'edge_app_id',
            'edgeAppName' => 'edge_app_name',
            'description' => 'description',
            'functionType' => 'function_type',
            'protocol' => 'protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeAppId  应用ID
    * edgeAppName  应用名称
    * description  应用描述
    * functionType  功能类型,分为数据处理（DATA_PROCESSING）、协议解析（PROTOCOL_PARSING）、IT集成（ON_PREMISE_INTEGRATION）和混合应用（COMPOSITE_APPLICATION），数据默认为DATA_PROCESSING，数据处理模块可以传输消息，协议解析为驱动类型，IT集成为部署南向3rdIA使用，混合应用可同时实现数据处理和协议解析。
    * protocol  驱动协议类型OPCUA|Modbus-TCP
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeAppId' => 'setEdgeAppId',
            'edgeAppName' => 'setEdgeAppName',
            'description' => 'setDescription',
            'functionType' => 'setFunctionType',
            'protocol' => 'setProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeAppId  应用ID
    * edgeAppName  应用名称
    * description  应用描述
    * functionType  功能类型,分为数据处理（DATA_PROCESSING）、协议解析（PROTOCOL_PARSING）、IT集成（ON_PREMISE_INTEGRATION）和混合应用（COMPOSITE_APPLICATION），数据默认为DATA_PROCESSING，数据处理模块可以传输消息，协议解析为驱动类型，IT集成为部署南向3rdIA使用，混合应用可同时实现数据处理和协议解析。
    * protocol  驱动协议类型OPCUA|Modbus-TCP
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeAppId' => 'getEdgeAppId',
            'edgeAppName' => 'getEdgeAppName',
            'description' => 'getDescription',
            'functionType' => 'getFunctionType',
            'protocol' => 'getProtocol'
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
    const FUNCTION_TYPE_DATA_PROCESSING = 'DATA_PROCESSING';
    const FUNCTION_TYPE_PROTOCOL_PARSING = 'PROTOCOL_PARSING';
    const FUNCTION_TYPE_ON_PREMISE_INTEGRATION = 'ON_PREMISE_INTEGRATION';
    const FUNCTION_TYPE_GATEWAY_MANAGER = 'GATEWAY_MANAGER';
    const FUNCTION_TYPE_COMPOSITE_APPLICATION = 'COMPOSITE_APPLICATION';
    const FUNCTION_TYPE_DATA_COLLECTION = 'DATA_COLLECTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFunctionTypeAllowableValues()
    {
        return [
            self::FUNCTION_TYPE_DATA_PROCESSING,
            self::FUNCTION_TYPE_PROTOCOL_PARSING,
            self::FUNCTION_TYPE_ON_PREMISE_INTEGRATION,
            self::FUNCTION_TYPE_GATEWAY_MANAGER,
            self::FUNCTION_TYPE_COMPOSITE_APPLICATION,
            self::FUNCTION_TYPE_DATA_COLLECTION,
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
        $this->container['edgeAppId'] = isset($data['edgeAppId']) ? $data['edgeAppId'] : null;
        $this->container['edgeAppName'] = isset($data['edgeAppName']) ? $data['edgeAppName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['functionType'] = isset($data['functionType']) ? $data['functionType'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['edgeAppId'] === null) {
            $invalidProperties[] = "'edgeAppId' can't be null";
        }
            if ((mb_strlen($this->container['edgeAppId']) > 32)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['edgeAppId']) < 4)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be bigger than or equal to 4.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['edgeAppId'])) {
                $invalidProperties[] = "invalid value for 'edgeAppId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['edgeAppName']) && (mb_strlen($this->container['edgeAppName']) > 64)) {
                $invalidProperties[] = "invalid value for 'edgeAppName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['edgeAppName']) && (mb_strlen($this->container['edgeAppName']) < 4)) {
                $invalidProperties[] = "invalid value for 'edgeAppName', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['edgeAppName']) && !preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['edgeAppName'])) {
                $invalidProperties[] = "invalid value for 'edgeAppName', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[a-zA-Z0-9_；：？！，;:、,.?!。\\-\\s\\u4e00-\\u9fa5]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[a-zA-Z0-9_；：？！，;:、,.?!。\\-\\s\\u4e00-\\u9fa5]*$/.";
            }
            $allowedValues = $this->getFunctionTypeAllowableValues();
                if (!is_null($this->container['functionType']) && !in_array($this->container['functionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'functionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['functionType']) && (mb_strlen($this->container['functionType']) > 255)) {
                $invalidProperties[] = "invalid value for 'functionType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['functionType']) && (mb_strlen($this->container['functionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'functionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['functionType']) && !preg_match("/(DATA_PROCESSING|PROTOCOL_PARSING|ON_PREMISE_INTEGRATION|GATEWAY_MANAGER|COMPOSITE_APPLICATION|DATA_COLLECTION)/", $this->container['functionType'])) {
                $invalidProperties[] = "invalid value for 'functionType', must be conform to the pattern /(DATA_PROCESSING|PROTOCOL_PARSING|ON_PREMISE_INTEGRATION|GATEWAY_MANAGER|COMPOSITE_APPLICATION|DATA_COLLECTION)/.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 64)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocol']) && !preg_match("/(OPCUA|Modbus-TCP|Modbus-RTU|IEC104|OPCDA|Http|JDBC|Other|ONVIF)/", $this->container['protocol'])) {
                $invalidProperties[] = "invalid value for 'protocol', must be conform to the pattern /(OPCUA|Modbus-TCP|Modbus-RTU|IEC104|OPCDA|Http|JDBC|Other|ONVIF)/.";
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
    * Gets edgeAppId
    *  应用ID
    *
    * @return string
    */
    public function getEdgeAppId()
    {
        return $this->container['edgeAppId'];
    }

    /**
    * Sets edgeAppId
    *
    * @param string $edgeAppId 应用ID
    *
    * @return $this
    */
    public function setEdgeAppId($edgeAppId)
    {
        $this->container['edgeAppId'] = $edgeAppId;
        return $this;
    }

    /**
    * Gets edgeAppName
    *  应用名称
    *
    * @return string|null
    */
    public function getEdgeAppName()
    {
        return $this->container['edgeAppName'];
    }

    /**
    * Sets edgeAppName
    *
    * @param string|null $edgeAppName 应用名称
    *
    * @return $this
    */
    public function setEdgeAppName($edgeAppName)
    {
        $this->container['edgeAppName'] = $edgeAppName;
        return $this;
    }

    /**
    * Gets description
    *  应用描述
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
    * @param string|null $description 应用描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets functionType
    *  功能类型,分为数据处理（DATA_PROCESSING）、协议解析（PROTOCOL_PARSING）、IT集成（ON_PREMISE_INTEGRATION）和混合应用（COMPOSITE_APPLICATION），数据默认为DATA_PROCESSING，数据处理模块可以传输消息，协议解析为驱动类型，IT集成为部署南向3rdIA使用，混合应用可同时实现数据处理和协议解析。
    *
    * @return string|null
    */
    public function getFunctionType()
    {
        return $this->container['functionType'];
    }

    /**
    * Sets functionType
    *
    * @param string|null $functionType 功能类型,分为数据处理（DATA_PROCESSING）、协议解析（PROTOCOL_PARSING）、IT集成（ON_PREMISE_INTEGRATION）和混合应用（COMPOSITE_APPLICATION），数据默认为DATA_PROCESSING，数据处理模块可以传输消息，协议解析为驱动类型，IT集成为部署南向3rdIA使用，混合应用可同时实现数据处理和协议解析。
    *
    * @return $this
    */
    public function setFunctionType($functionType)
    {
        $this->container['functionType'] = $functionType;
        return $this;
    }

    /**
    * Gets protocol
    *  驱动协议类型OPCUA|Modbus-TCP
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 驱动协议类型OPCUA|Modbus-TCP
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
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


<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchListEdgeAppsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchListEdgeAppsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeAppId  应用ID搜索关键字
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    * appType  应用id搜索关键字
    * functionType  功能类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeAppId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'appType' => 'string',
            'functionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeAppId  应用ID搜索关键字
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    * appType  应用id搜索关键字
    * functionType  功能类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeAppId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'appType' => null,
        'functionType' => null
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
    * edgeAppId  应用ID搜索关键字
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    * appType  应用id搜索关键字
    * functionType  功能类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeAppId' => 'edge_app_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'appType' => 'app_type',
            'functionType' => 'function_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeAppId  应用ID搜索关键字
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    * appType  应用id搜索关键字
    * functionType  功能类型
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeAppId' => 'setEdgeAppId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'appType' => 'setAppType',
            'functionType' => 'setFunctionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeAppId  应用ID搜索关键字
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    * appType  应用id搜索关键字
    * functionType  功能类型
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeAppId' => 'getEdgeAppId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'appType' => 'getAppType',
            'functionType' => 'getFunctionType'
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
    const APP_TYPE_SYSTEM_REQUIRED = 'SYSTEM_REQUIRED';
    const APP_TYPE_SYSTEM_OPTIONAL = 'SYSTEM_OPTIONAL';
    const APP_TYPE_USER = 'USER';
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
    public function getAppTypeAllowableValues()
    {
        return [
            self::APP_TYPE_SYSTEM_REQUIRED,
            self::APP_TYPE_SYSTEM_OPTIONAL,
            self::APP_TYPE_USER,
        ];
    }

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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['functionType'] = isset($data['functionType']) ? $data['functionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['edgeAppId']) && (mb_strlen($this->container['edgeAppId']) > 32)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['edgeAppId']) && (mb_strlen($this->container['edgeAppId']) < 0)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAppTypeAllowableValues();
                if (!is_null($this->container['appType']) && !in_array($this->container['appType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'appType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) > 64)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) < 0)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appType']) && !preg_match("/(SYSTEM_OPTIONAL|USER|SYSTEM_REQUIRED)/", $this->container['appType'])) {
                $invalidProperties[] = "invalid value for 'appType', must be conform to the pattern /(SYSTEM_OPTIONAL|USER|SYSTEM_REQUIRED)/.";
            }
            $allowedValues = $this->getFunctionTypeAllowableValues();
                if (!is_null($this->container['functionType']) && !in_array($this->container['functionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'functionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['functionType']) && (mb_strlen($this->container['functionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'functionType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['functionType']) && (mb_strlen($this->container['functionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'functionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['functionType']) && !preg_match("/(DATA_PROCESSING|PROTOCOL_PARSING|ON_PREMISE_INTEGRATION|GATEWAY_MANAGER|COMPOSITE_APPLICATION|DATA_COLLECTION)/", $this->container['functionType'])) {
                $invalidProperties[] = "invalid value for 'functionType', must be conform to the pattern /(DATA_PROCESSING|PROTOCOL_PARSING|ON_PREMISE_INTEGRATION|GATEWAY_MANAGER|COMPOSITE_APPLICATION|DATA_COLLECTION)/.";
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
    *  应用ID搜索关键字
    *
    * @return string|null
    */
    public function getEdgeAppId()
    {
        return $this->container['edgeAppId'];
    }

    /**
    * Sets edgeAppId
    *
    * @param string|null $edgeAppId 应用ID搜索关键字
    *
    * @return $this
    */
    public function setEdgeAppId($edgeAppId)
    {
        $this->container['edgeAppId'] = $edgeAppId;
        return $this;
    }

    /**
    * Gets offset
    *  查询的起始位置，取值范围为非负整数，默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 查询的起始位置，取值范围为非负整数，默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页记录数，默认值为10，取值区间为1-1000
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页记录数，默认值为10，取值区间为1-1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets appType
    *  应用id搜索关键字
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType 应用id搜索关键字
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets functionType
    *  功能类型
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
    * @param string|null $functionType 功能类型
    *
    * @return $this
    */
    public function setFunctionType($functionType)
    {
        $this->container['functionType'] = $functionType;
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


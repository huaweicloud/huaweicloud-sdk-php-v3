<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseInspectionDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseInspectionDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentType  响应中表明成功或失败的组件（JSON/STATUS_CODE）
    * jsonPath  JSON 路径（JSON时必选）
    * success  成功响应判定（可选）
    * fail  失败响应判定（可选）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentType' => 'string',
            'jsonPath' => 'string',
            'success' => 'string[]',
            'fail' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentType  响应中表明成功或失败的组件（JSON/STATUS_CODE）
    * jsonPath  JSON 路径（JSON时必选）
    * success  成功响应判定（可选）
    * fail  失败响应判定（可选）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentType' => null,
        'jsonPath' => null,
        'success' => null,
        'fail' => null
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
    * componentType  响应中表明成功或失败的组件（JSON/STATUS_CODE）
    * jsonPath  JSON 路径（JSON时必选）
    * success  成功响应判定（可选）
    * fail  失败响应判定（可选）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentType' => 'component_type',
            'jsonPath' => 'json_path',
            'success' => 'success',
            'fail' => 'fail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentType  响应中表明成功或失败的组件（JSON/STATUS_CODE）
    * jsonPath  JSON 路径（JSON时必选）
    * success  成功响应判定（可选）
    * fail  失败响应判定（可选）
    *
    * @var string[]
    */
    protected static $setters = [
            'componentType' => 'setComponentType',
            'jsonPath' => 'setJsonPath',
            'success' => 'setSuccess',
            'fail' => 'setFail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentType  响应中表明成功或失败的组件（JSON/STATUS_CODE）
    * jsonPath  JSON 路径（JSON时必选）
    * success  成功响应判定（可选）
    * fail  失败响应判定（可选）
    *
    * @var string[]
    */
    protected static $getters = [
            'componentType' => 'getComponentType',
            'jsonPath' => 'getJsonPath',
            'success' => 'getSuccess',
            'fail' => 'getFail'
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
    const COMPONENT_TYPE_JSON = 'JSON';
    const COMPONENT_TYPE_STATUS_CODE = 'STATUS_CODE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getComponentTypeAllowableValues()
    {
        return [
            self::COMPONENT_TYPE_JSON,
            self::COMPONENT_TYPE_STATUS_CODE,
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
        $this->container['componentType'] = isset($data['componentType']) ? $data['componentType'] : null;
        $this->container['jsonPath'] = isset($data['jsonPath']) ? $data['jsonPath'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['fail'] = isset($data['fail']) ? $data['fail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['componentType'] === null) {
            $invalidProperties[] = "'componentType' can't be null";
        }
            $allowedValues = $this->getComponentTypeAllowableValues();
                if (!is_null($this->container['componentType']) && !in_array($this->container['componentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'componentType', must be one of '%s'",
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
    * Gets componentType
    *  响应中表明成功或失败的组件（JSON/STATUS_CODE）
    *
    * @return string
    */
    public function getComponentType()
    {
        return $this->container['componentType'];
    }

    /**
    * Sets componentType
    *
    * @param string $componentType 响应中表明成功或失败的组件（JSON/STATUS_CODE）
    *
    * @return $this
    */
    public function setComponentType($componentType)
    {
        $this->container['componentType'] = $componentType;
        return $this;
    }

    /**
    * Gets jsonPath
    *  JSON 路径（JSON时必选）
    *
    * @return string|null
    */
    public function getJsonPath()
    {
        return $this->container['jsonPath'];
    }

    /**
    * Sets jsonPath
    *
    * @param string|null $jsonPath JSON 路径（JSON时必选）
    *
    * @return $this
    */
    public function setJsonPath($jsonPath)
    {
        $this->container['jsonPath'] = $jsonPath;
        return $this;
    }

    /**
    * Gets success
    *  成功响应判定（可选）
    *
    * @return string[]|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param string[]|null $success 成功响应判定（可选）
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets fail
    *  失败响应判定（可选）
    *
    * @return string[]|null
    */
    public function getFail()
    {
        return $this->container['fail'];
    }

    /**
    * Sets fail
    *
    * @param string[]|null $fail 失败响应判定（可选）
    *
    * @return $this
    */
    public function setFail($fail)
    {
        $this->container['fail'] = $fail;
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


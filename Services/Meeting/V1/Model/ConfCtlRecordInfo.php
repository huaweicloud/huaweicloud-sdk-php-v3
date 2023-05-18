<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfCtlRecordInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfCtlRecordInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateTime  操作时间（UTC时间，单位毫秒）。
    * operateSource  操作来源。
    * operator  操作者。
    * operateCode  操作描述。
    * operationObject  被操作对象。
    * operateResult  操作结果。
    * detail  详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateTime' => 'int',
            'operateSource' => 'string',
            'operator' => 'string',
            'operateCode' => 'string',
            'operationObject' => 'string',
            'operateResult' => 'string',
            'detail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateTime  操作时间（UTC时间，单位毫秒）。
    * operateSource  操作来源。
    * operator  操作者。
    * operateCode  操作描述。
    * operationObject  被操作对象。
    * operateResult  操作结果。
    * detail  详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateTime' => 'int64',
        'operateSource' => null,
        'operator' => null,
        'operateCode' => null,
        'operationObject' => null,
        'operateResult' => null,
        'detail' => null
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
    * operateTime  操作时间（UTC时间，单位毫秒）。
    * operateSource  操作来源。
    * operator  操作者。
    * operateCode  操作描述。
    * operationObject  被操作对象。
    * operateResult  操作结果。
    * detail  详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateTime' => 'operateTime',
            'operateSource' => 'operateSource',
            'operator' => 'operator',
            'operateCode' => 'operateCode',
            'operationObject' => 'operationObject',
            'operateResult' => 'operateResult',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateTime  操作时间（UTC时间，单位毫秒）。
    * operateSource  操作来源。
    * operator  操作者。
    * operateCode  操作描述。
    * operationObject  被操作对象。
    * operateResult  操作结果。
    * detail  详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'operateTime' => 'setOperateTime',
            'operateSource' => 'setOperateSource',
            'operator' => 'setOperator',
            'operateCode' => 'setOperateCode',
            'operationObject' => 'setOperationObject',
            'operateResult' => 'setOperateResult',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateTime  操作时间（UTC时间，单位毫秒）。
    * operateSource  操作来源。
    * operator  操作者。
    * operateCode  操作描述。
    * operationObject  被操作对象。
    * operateResult  操作结果。
    * detail  详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'operateTime' => 'getOperateTime',
            'operateSource' => 'getOperateSource',
            'operator' => 'getOperator',
            'operateCode' => 'getOperateCode',
            'operationObject' => 'getOperationObject',
            'operateResult' => 'getOperateResult',
            'detail' => 'getDetail'
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
        $this->container['operateTime'] = isset($data['operateTime']) ? $data['operateTime'] : null;
        $this->container['operateSource'] = isset($data['operateSource']) ? $data['operateSource'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['operateCode'] = isset($data['operateCode']) ? $data['operateCode'] : null;
        $this->container['operationObject'] = isset($data['operationObject']) ? $data['operationObject'] : null;
        $this->container['operateResult'] = isset($data['operateResult']) ? $data['operateResult'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
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
    * Gets operateTime
    *  操作时间（UTC时间，单位毫秒）。
    *
    * @return int|null
    */
    public function getOperateTime()
    {
        return $this->container['operateTime'];
    }

    /**
    * Sets operateTime
    *
    * @param int|null $operateTime 操作时间（UTC时间，单位毫秒）。
    *
    * @return $this
    */
    public function setOperateTime($operateTime)
    {
        $this->container['operateTime'] = $operateTime;
        return $this;
    }

    /**
    * Gets operateSource
    *  操作来源。
    *
    * @return string|null
    */
    public function getOperateSource()
    {
        return $this->container['operateSource'];
    }

    /**
    * Sets operateSource
    *
    * @param string|null $operateSource 操作来源。
    *
    * @return $this
    */
    public function setOperateSource($operateSource)
    {
        $this->container['operateSource'] = $operateSource;
        return $this;
    }

    /**
    * Gets operator
    *  操作者。
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作者。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets operateCode
    *  操作描述。
    *
    * @return string|null
    */
    public function getOperateCode()
    {
        return $this->container['operateCode'];
    }

    /**
    * Sets operateCode
    *
    * @param string|null $operateCode 操作描述。
    *
    * @return $this
    */
    public function setOperateCode($operateCode)
    {
        $this->container['operateCode'] = $operateCode;
        return $this;
    }

    /**
    * Gets operationObject
    *  被操作对象。
    *
    * @return string|null
    */
    public function getOperationObject()
    {
        return $this->container['operationObject'];
    }

    /**
    * Sets operationObject
    *
    * @param string|null $operationObject 被操作对象。
    *
    * @return $this
    */
    public function setOperationObject($operationObject)
    {
        $this->container['operationObject'] = $operationObject;
        return $this;
    }

    /**
    * Gets operateResult
    *  操作结果。
    *
    * @return string|null
    */
    public function getOperateResult()
    {
        return $this->container['operateResult'];
    }

    /**
    * Sets operateResult
    *
    * @param string|null $operateResult 操作结果。
    *
    * @return $this
    */
    public function setOperateResult($operateResult)
    {
        $this->container['operateResult'] = $operateResult;
        return $this;
    }

    /**
    * Gets detail
    *  详情。
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail 详情。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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


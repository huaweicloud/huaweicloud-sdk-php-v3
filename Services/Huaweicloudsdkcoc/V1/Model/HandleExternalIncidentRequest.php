<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HandleExternalIncidentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HandleExternalIncidentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * incidentNum  事件单号
    * operator  操作人ID
    * operateKey  操作类型
    * parameter  入参
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'incidentNum' => 'string',
            'operator' => 'string',
            'operateKey' => 'string',
            'parameter' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * incidentNum  事件单号
    * operator  操作人ID
    * operateKey  操作类型
    * parameter  入参
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'incidentNum' => null,
        'operator' => null,
        'operateKey' => null,
        'parameter' => null
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
    * incidentNum  事件单号
    * operator  操作人ID
    * operateKey  操作类型
    * parameter  入参
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'incidentNum' => 'incident_num',
            'operator' => 'operator',
            'operateKey' => 'operate_key',
            'parameter' => 'parameter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * incidentNum  事件单号
    * operator  操作人ID
    * operateKey  操作类型
    * parameter  入参
    *
    * @var string[]
    */
    protected static $setters = [
            'incidentNum' => 'setIncidentNum',
            'operator' => 'setOperator',
            'operateKey' => 'setOperateKey',
            'parameter' => 'setParameter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * incidentNum  事件单号
    * operator  操作人ID
    * operateKey  操作类型
    * parameter  入参
    *
    * @var string[]
    */
    protected static $getters = [
            'incidentNum' => 'getIncidentNum',
            'operator' => 'getOperator',
            'operateKey' => 'getOperateKey',
            'parameter' => 'getParameter'
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
        $this->container['incidentNum'] = isset($data['incidentNum']) ? $data['incidentNum'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['operateKey'] = isset($data['operateKey']) ? $data['operateKey'] : null;
        $this->container['parameter'] = isset($data['parameter']) ? $data['parameter'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['incidentNum'] === null) {
            $invalidProperties[] = "'incidentNum' can't be null";
        }
            if ((mb_strlen($this->container['incidentNum']) > 255)) {
                $invalidProperties[] = "invalid value for 'incidentNum', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['incidentNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'incidentNum', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
            if ((mb_strlen($this->container['operator']) > 255)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['operator']) < 0)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['operateKey'] === null) {
            $invalidProperties[] = "'operateKey' can't be null";
        }
            if ((mb_strlen($this->container['operateKey']) > 255)) {
                $invalidProperties[] = "invalid value for 'operateKey', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['operateKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'operateKey', the character length must be bigger than or equal to 0.";
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
    * Gets incidentNum
    *  事件单号
    *
    * @return string
    */
    public function getIncidentNum()
    {
        return $this->container['incidentNum'];
    }

    /**
    * Sets incidentNum
    *
    * @param string $incidentNum 事件单号
    *
    * @return $this
    */
    public function setIncidentNum($incidentNum)
    {
        $this->container['incidentNum'] = $incidentNum;
        return $this;
    }

    /**
    * Gets operator
    *  操作人ID
    *
    * @return string
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string $operator 操作人ID
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets operateKey
    *  操作类型
    *
    * @return string
    */
    public function getOperateKey()
    {
        return $this->container['operateKey'];
    }

    /**
    * Sets operateKey
    *
    * @param string $operateKey 操作类型
    *
    * @return $this
    */
    public function setOperateKey($operateKey)
    {
        $this->container['operateKey'] = $operateKey;
        return $this;
    }

    /**
    * Gets parameter
    *  入参
    *
    * @return map[string,object]|null
    */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
    * Sets parameter
    *
    * @param map[string,object]|null $parameter 入参
    *
    * @return $this
    */
    public function setParameter($parameter)
    {
        $this->container['parameter'] = $parameter;
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


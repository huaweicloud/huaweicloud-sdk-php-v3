<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePreProcessRulesResponseBodyDataPreprocessRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePreProcessRulesResponseBody_data_preprocess_rules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  映射id
    * name  名称
    * mapperId  映射id
    * mapperTypeId  映射id
    * action  预处理选项: drop-丢弃
    * expression  表达式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'mapperId' => 'string',
            'mapperTypeId' => 'string',
            'action' => 'string',
            'expression' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  映射id
    * name  名称
    * mapperId  映射id
    * mapperTypeId  映射id
    * action  预处理选项: drop-丢弃
    * expression  表达式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'mapperId' => null,
        'mapperTypeId' => null,
        'action' => null,
        'expression' => null
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
    * id  映射id
    * name  名称
    * mapperId  映射id
    * mapperTypeId  映射id
    * action  预处理选项: drop-丢弃
    * expression  表达式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'mapperId' => 'mapper_id',
            'mapperTypeId' => 'mapper_type_id',
            'action' => 'action',
            'expression' => 'expression'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  映射id
    * name  名称
    * mapperId  映射id
    * mapperTypeId  映射id
    * action  预处理选项: drop-丢弃
    * expression  表达式
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'mapperId' => 'setMapperId',
            'mapperTypeId' => 'setMapperTypeId',
            'action' => 'setAction',
            'expression' => 'setExpression'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  映射id
    * name  名称
    * mapperId  映射id
    * mapperTypeId  映射id
    * action  预处理选项: drop-丢弃
    * expression  表达式
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'mapperId' => 'getMapperId',
            'mapperTypeId' => 'getMapperTypeId',
            'action' => 'getAction',
            'expression' => 'getExpression'
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
    const ACTION_DROP = 'drop';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_DROP,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mapperId'] = isset($data['mapperId']) ? $data['mapperId'] : null;
        $this->container['mapperTypeId'] = isset($data['mapperTypeId']) ? $data['mapperTypeId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mapperId']) && (mb_strlen($this->container['mapperId']) > 64)) {
                $invalidProperties[] = "invalid value for 'mapperId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['mapperId']) && (mb_strlen($this->container['mapperId']) < 32)) {
                $invalidProperties[] = "invalid value for 'mapperId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['mapperTypeId']) && (mb_strlen($this->container['mapperTypeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'mapperTypeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['mapperTypeId']) && (mb_strlen($this->container['mapperTypeId']) < 32)) {
                $invalidProperties[] = "invalid value for 'mapperTypeId', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 64)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) > 9999)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) < 0)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  映射id
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
    * @param string|null $id 映射id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets mapperId
    *  映射id
    *
    * @return string|null
    */
    public function getMapperId()
    {
        return $this->container['mapperId'];
    }

    /**
    * Sets mapperId
    *
    * @param string|null $mapperId 映射id
    *
    * @return $this
    */
    public function setMapperId($mapperId)
    {
        $this->container['mapperId'] = $mapperId;
        return $this;
    }

    /**
    * Gets mapperTypeId
    *  映射id
    *
    * @return string|null
    */
    public function getMapperTypeId()
    {
        return $this->container['mapperTypeId'];
    }

    /**
    * Sets mapperTypeId
    *
    * @param string|null $mapperTypeId 映射id
    *
    * @return $this
    */
    public function setMapperTypeId($mapperTypeId)
    {
        $this->container['mapperTypeId'] = $mapperTypeId;
        return $this;
    }

    /**
    * Gets action
    *  预处理选项: drop-丢弃
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 预处理选项: drop-丢弃
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets expression
    *  表达式
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression 表达式
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
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


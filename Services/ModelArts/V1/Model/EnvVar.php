<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvVar implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvVar';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * label  标签
    * des  描述信息
    * envName  环境变量名称
    * envType  环境变量类型
    * value  环境变量值
    * modifiable  环境变量是否可修改
    * displayable  环境变量是否展示
    * usedSteps  环境变量使用阶段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'label' => 'string',
            'des' => 'string',
            'envName' => 'string',
            'envType' => 'string',
            'value' => 'string',
            'modifiable' => 'bool',
            'displayable' => 'bool',
            'usedSteps' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * label  标签
    * des  描述信息
    * envName  环境变量名称
    * envType  环境变量类型
    * value  环境变量值
    * modifiable  环境变量是否可修改
    * displayable  环境变量是否展示
    * usedSteps  环境变量使用阶段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'label' => null,
        'des' => null,
        'envName' => null,
        'envType' => null,
        'value' => null,
        'modifiable' => null,
        'displayable' => null,
        'usedSteps' => null
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
    * label  标签
    * des  描述信息
    * envName  环境变量名称
    * envType  环境变量类型
    * value  环境变量值
    * modifiable  环境变量是否可修改
    * displayable  环境变量是否展示
    * usedSteps  环境变量使用阶段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'label' => 'label',
            'des' => 'des',
            'envName' => 'env_name',
            'envType' => 'env_type',
            'value' => 'value',
            'modifiable' => 'modifiable',
            'displayable' => 'displayable',
            'usedSteps' => 'used_steps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * label  标签
    * des  描述信息
    * envName  环境变量名称
    * envType  环境变量类型
    * value  环境变量值
    * modifiable  环境变量是否可修改
    * displayable  环境变量是否展示
    * usedSteps  环境变量使用阶段
    *
    * @var string[]
    */
    protected static $setters = [
            'label' => 'setLabel',
            'des' => 'setDes',
            'envName' => 'setEnvName',
            'envType' => 'setEnvType',
            'value' => 'setValue',
            'modifiable' => 'setModifiable',
            'displayable' => 'setDisplayable',
            'usedSteps' => 'setUsedSteps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * label  标签
    * des  描述信息
    * envName  环境变量名称
    * envType  环境变量类型
    * value  环境变量值
    * modifiable  环境变量是否可修改
    * displayable  环境变量是否展示
    * usedSteps  环境变量使用阶段
    *
    * @var string[]
    */
    protected static $getters = [
            'label' => 'getLabel',
            'des' => 'getDes',
            'envName' => 'getEnvName',
            'envType' => 'getEnvType',
            'value' => 'getValue',
            'modifiable' => 'getModifiable',
            'displayable' => 'getDisplayable',
            'usedSteps' => 'getUsedSteps'
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
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['des'] = isset($data['des']) ? $data['des'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['envType'] = isset($data['envType']) ? $data['envType'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['modifiable'] = isset($data['modifiable']) ? $data['modifiable'] : null;
        $this->container['displayable'] = isset($data['displayable']) ? $data['displayable'] : null;
        $this->container['usedSteps'] = isset($data['usedSteps']) ? $data['usedSteps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 1000)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 0)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['des']) && (mb_strlen($this->container['des']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'des', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['des']) && (mb_strlen($this->container['des']) < 0)) {
                $invalidProperties[] = "invalid value for 'des', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['envName']) && (mb_strlen($this->container['envName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'envName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['envName']) && (mb_strlen($this->container['envName']) < 0)) {
                $invalidProperties[] = "invalid value for 'envName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['envType']) && (mb_strlen($this->container['envType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'envType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['envType']) && (mb_strlen($this->container['envType']) < 0)) {
                $invalidProperties[] = "invalid value for 'envType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 1000)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
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
    * Gets label
    *  标签
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 标签
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets des
    *  描述信息
    *
    * @return string|null
    */
    public function getDes()
    {
        return $this->container['des'];
    }

    /**
    * Sets des
    *
    * @param string|null $des 描述信息
    *
    * @return $this
    */
    public function setDes($des)
    {
        $this->container['des'] = $des;
        return $this;
    }

    /**
    * Gets envName
    *  环境变量名称
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName 环境变量名称
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets envType
    *  环境变量类型
    *
    * @return string|null
    */
    public function getEnvType()
    {
        return $this->container['envType'];
    }

    /**
    * Sets envType
    *
    * @param string|null $envType 环境变量类型
    *
    * @return $this
    */
    public function setEnvType($envType)
    {
        $this->container['envType'] = $envType;
        return $this;
    }

    /**
    * Gets value
    *  环境变量值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 环境变量值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets modifiable
    *  环境变量是否可修改
    *
    * @return bool|null
    */
    public function getModifiable()
    {
        return $this->container['modifiable'];
    }

    /**
    * Sets modifiable
    *
    * @param bool|null $modifiable 环境变量是否可修改
    *
    * @return $this
    */
    public function setModifiable($modifiable)
    {
        $this->container['modifiable'] = $modifiable;
        return $this;
    }

    /**
    * Gets displayable
    *  环境变量是否展示
    *
    * @return bool|null
    */
    public function getDisplayable()
    {
        return $this->container['displayable'];
    }

    /**
    * Sets displayable
    *
    * @param bool|null $displayable 环境变量是否展示
    *
    * @return $this
    */
    public function setDisplayable($displayable)
    {
        $this->container['displayable'] = $displayable;
        return $this;
    }

    /**
    * Gets usedSteps
    *  环境变量使用阶段
    *
    * @return string[]|null
    */
    public function getUsedSteps()
    {
        return $this->container['usedSteps'];
    }

    /**
    * Sets usedSteps
    *
    * @param string[]|null $usedSteps 环境变量使用阶段
    *
    * @return $this
    */
    public function setUsedSteps($usedSteps)
    {
        $this->container['usedSteps'] = $usedSteps;
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


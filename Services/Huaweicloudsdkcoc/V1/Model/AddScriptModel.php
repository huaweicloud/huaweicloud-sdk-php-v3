<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddScriptModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddScriptModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  脚本名称：只能包含中文、英文、数字、下划线
    * properties  properties
    * description  脚本描述
    * type  脚本类型: 对于脚本后缀： SHELL:.sh PYTHON:.py BAT:.bat
    * content  脚本内容
    * enterpriseProjectId  企业项目ID，默认为：0
    * scriptParams  脚本入参
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'properties' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptPropertiesModel',
            'description' => 'string',
            'type' => 'string',
            'content' => 'string',
            'enterpriseProjectId' => 'string',
            'scriptParams' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptParamDefine[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  脚本名称：只能包含中文、英文、数字、下划线
    * properties  properties
    * description  脚本描述
    * type  脚本类型: 对于脚本后缀： SHELL:.sh PYTHON:.py BAT:.bat
    * content  脚本内容
    * enterpriseProjectId  企业项目ID，默认为：0
    * scriptParams  脚本入参
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'properties' => null,
        'description' => null,
        'type' => null,
        'content' => null,
        'enterpriseProjectId' => null,
        'scriptParams' => null
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
    * name  脚本名称：只能包含中文、英文、数字、下划线
    * properties  properties
    * description  脚本描述
    * type  脚本类型: 对于脚本后缀： SHELL:.sh PYTHON:.py BAT:.bat
    * content  脚本内容
    * enterpriseProjectId  企业项目ID，默认为：0
    * scriptParams  脚本入参
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'properties' => 'properties',
            'description' => 'description',
            'type' => 'type',
            'content' => 'content',
            'enterpriseProjectId' => 'enterprise_project_id',
            'scriptParams' => 'script_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  脚本名称：只能包含中文、英文、数字、下划线
    * properties  properties
    * description  脚本描述
    * type  脚本类型: 对于脚本后缀： SHELL:.sh PYTHON:.py BAT:.bat
    * content  脚本内容
    * enterpriseProjectId  企业项目ID，默认为：0
    * scriptParams  脚本入参
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'properties' => 'setProperties',
            'description' => 'setDescription',
            'type' => 'setType',
            'content' => 'setContent',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'scriptParams' => 'setScriptParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  脚本名称：只能包含中文、英文、数字、下划线
    * properties  properties
    * description  脚本描述
    * type  脚本类型: 对于脚本后缀： SHELL:.sh PYTHON:.py BAT:.bat
    * content  脚本内容
    * enterpriseProjectId  企业项目ID，默认为：0
    * scriptParams  脚本入参
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'properties' => 'getProperties',
            'description' => 'getDescription',
            'type' => 'getType',
            'content' => 'getContent',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'scriptParams' => 'getScriptParams'
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
    const TYPE_SHELL = 'SHELL';
    const TYPE_PYTHON = 'PYTHON';
    const TYPE_BAT = 'BAT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SHELL,
            self::TYPE_PYTHON,
            self::TYPE_BAT,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['scriptParams'] = isset($data['scriptParams']) ? $data['scriptParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4E00-\\u9FA5A-Za-z0-9_]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4E00-\\u9FA5A-Za-z0-9_]+$/.";
            }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 4096)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  脚本名称：只能包含中文、英文、数字、下划线
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 脚本名称：只能包含中文、英文、数字、下划线
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScriptPropertiesModel
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScriptPropertiesModel $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets description
    *  脚本描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 脚本描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  脚本类型: 对于脚本后缀： SHELL:.sh PYTHON:.py BAT:.bat
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 脚本类型: 对于脚本后缀： SHELL:.sh PYTHON:.py BAT:.bat
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets content
    *  脚本内容
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 脚本内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，默认为：0
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID，默认为：0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets scriptParams
    *  脚本入参
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScriptParamDefine[]|null
    */
    public function getScriptParams()
    {
        return $this->container['scriptParams'];
    }

    /**
    * Sets scriptParams
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScriptParamDefine[]|null $scriptParams 脚本入参
    *
    * @return $this
    */
    public function setScriptParams($scriptParams)
    {
        $this->container['scriptParams'] = $scriptParams;
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


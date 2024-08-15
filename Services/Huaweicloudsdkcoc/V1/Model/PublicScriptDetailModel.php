<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicScriptDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicScriptDetailModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptUuid  脚本uuid
    * name  脚本名称
    * description  脚本描述
    * type  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    * content  脚本内容
    * scriptParams  脚本入参
    * gmtCreated  创建时间
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptUuid' => 'string',
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'content' => 'string',
            'scriptParams' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptParamDefine[]',
            'gmtCreated' => 'int',
            'properties' => '\HuaweiCloud\SDK\Coc\V1\Model\PublicScriptPropertiesModel'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptUuid  脚本uuid
    * name  脚本名称
    * description  脚本描述
    * type  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    * content  脚本内容
    * scriptParams  脚本入参
    * gmtCreated  创建时间
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptUuid' => null,
        'name' => null,
        'description' => null,
        'type' => null,
        'content' => null,
        'scriptParams' => null,
        'gmtCreated' => 'int64',
        'properties' => null
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
    * scriptUuid  脚本uuid
    * name  脚本名称
    * description  脚本描述
    * type  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    * content  脚本内容
    * scriptParams  脚本入参
    * gmtCreated  创建时间
    * properties  properties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptUuid' => 'script_uuid',
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'content' => 'content',
            'scriptParams' => 'script_params',
            'gmtCreated' => 'gmt_created',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptUuid  脚本uuid
    * name  脚本名称
    * description  脚本描述
    * type  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    * content  脚本内容
    * scriptParams  脚本入参
    * gmtCreated  创建时间
    * properties  properties
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptUuid' => 'setScriptUuid',
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'content' => 'setContent',
            'scriptParams' => 'setScriptParams',
            'gmtCreated' => 'setGmtCreated',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptUuid  脚本uuid
    * name  脚本名称
    * description  脚本描述
    * type  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    * content  脚本内容
    * scriptParams  脚本入参
    * gmtCreated  创建时间
    * properties  properties
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptUuid' => 'getScriptUuid',
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'content' => 'getContent',
            'scriptParams' => 'getScriptParams',
            'gmtCreated' => 'getGmtCreated',
            'properties' => 'getProperties'
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
        $this->container['scriptUuid'] = isset($data['scriptUuid']) ? $data['scriptUuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['scriptParams'] = isset($data['scriptParams']) ? $data['scriptParams'] : null;
        $this->container['gmtCreated'] = isset($data['gmtCreated']) ? $data['gmtCreated'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scriptUuid'] === null) {
            $invalidProperties[] = "'scriptUuid' can't be null";
        }
            if ((mb_strlen($this->container['scriptUuid']) > 25)) {
                $invalidProperties[] = "invalid value for 'scriptUuid', the character length must be smaller than or equal to 25.";
            }
            if ((mb_strlen($this->container['scriptUuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptUuid', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
        if ($this->container['gmtCreated'] === null) {
            $invalidProperties[] = "'gmtCreated' can't be null";
        }
            if (($this->container['gmtCreated'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'gmtCreated', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['gmtCreated'] < 1)) {
                $invalidProperties[] = "invalid value for 'gmtCreated', must be bigger than or equal to 1.";
            }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
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
    * Gets scriptUuid
    *  脚本uuid
    *
    * @return string
    */
    public function getScriptUuid()
    {
        return $this->container['scriptUuid'];
    }

    /**
    * Sets scriptUuid
    *
    * @param string $scriptUuid 脚本uuid
    *
    * @return $this
    */
    public function setScriptUuid($scriptUuid)
    {
        $this->container['scriptUuid'] = $scriptUuid;
        return $this;
    }

    /**
    * Gets name
    *  脚本名称
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
    * @param string $name 脚本名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    *  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
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
    * @param string $type 脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
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
    * Gets gmtCreated
    *  创建时间
    *
    * @return int
    */
    public function getGmtCreated()
    {
        return $this->container['gmtCreated'];
    }

    /**
    * Sets gmtCreated
    *
    * @param int $gmtCreated 创建时间
    *
    * @return $this
    */
    public function setGmtCreated($gmtCreated)
    {
        $this->container['gmtCreated'] = $gmtCreated;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\PublicScriptPropertiesModel
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\PublicScriptPropertiesModel $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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


<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAnalysisScriptRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAnalysisScriptRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptName  脚本名称
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * scriptType  scriptType
    * retrieveTableId  UUID
    * script  脚本内容，长度在1到10240个字符之间。
    * owner  分析脚本参数列表
    * scriptParams  分析脚本参数列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptName' => 'string',
            'directory' => 'string',
            'description' => 'string',
            'scriptType' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptType',
            'retrieveTableId' => 'string',
            'script' => 'string',
            'owner' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptParam[]',
            'scriptParams' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptName  脚本名称
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * scriptType  scriptType
    * retrieveTableId  UUID
    * script  脚本内容，长度在1到10240个字符之间。
    * owner  分析脚本参数列表
    * scriptParams  分析脚本参数列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptName' => null,
        'directory' => null,
        'description' => null,
        'scriptType' => null,
        'retrieveTableId' => null,
        'script' => null,
        'owner' => null,
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
    * scriptName  脚本名称
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * scriptType  scriptType
    * retrieveTableId  UUID
    * script  脚本内容，长度在1到10240个字符之间。
    * owner  分析脚本参数列表
    * scriptParams  分析脚本参数列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptName' => 'script_name',
            'directory' => 'directory',
            'description' => 'description',
            'scriptType' => 'script_type',
            'retrieveTableId' => 'retrieve_table_id',
            'script' => 'script',
            'owner' => 'owner',
            'scriptParams' => 'script_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptName  脚本名称
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * scriptType  scriptType
    * retrieveTableId  UUID
    * script  脚本内容，长度在1到10240个字符之间。
    * owner  分析脚本参数列表
    * scriptParams  分析脚本参数列表
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptName' => 'setScriptName',
            'directory' => 'setDirectory',
            'description' => 'setDescription',
            'scriptType' => 'setScriptType',
            'retrieveTableId' => 'setRetrieveTableId',
            'script' => 'setScript',
            'owner' => 'setOwner',
            'scriptParams' => 'setScriptParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptName  脚本名称
    * directory  脚本目录分组名称，长度在1到256个字符之间。
    * description  脚本的相关描述信息，长度在1到1024个字符之间。
    * scriptType  scriptType
    * retrieveTableId  UUID
    * script  脚本内容，长度在1到10240个字符之间。
    * owner  分析脚本参数列表
    * scriptParams  分析脚本参数列表
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptName' => 'getScriptName',
            'directory' => 'getDirectory',
            'description' => 'getDescription',
            'scriptType' => 'getScriptType',
            'retrieveTableId' => 'getRetrieveTableId',
            'script' => 'getScript',
            'owner' => 'getOwner',
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
        $this->container['scriptName'] = isset($data['scriptName']) ? $data['scriptName'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['scriptType'] = isset($data['scriptType']) ? $data['scriptType'] : null;
        $this->container['retrieveTableId'] = isset($data['retrieveTableId']) ? $data['retrieveTableId'] : null;
        $this->container['script'] = isset($data['script']) ? $data['script'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
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
        if ($this->container['scriptName'] === null) {
            $invalidProperties[] = "'scriptName' can't be null";
        }
            if ((mb_strlen($this->container['scriptName']) > 256)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['scriptName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) > 256)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) < 1)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['scriptType'] === null) {
            $invalidProperties[] = "'scriptType' can't be null";
        }
            if (!is_null($this->container['retrieveTableId']) && (mb_strlen($this->container['retrieveTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'retrieveTableId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['retrieveTableId']) && (mb_strlen($this->container['retrieveTableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'retrieveTableId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['script'] === null) {
            $invalidProperties[] = "'script' can't be null";
        }
            if ((mb_strlen($this->container['script']) > 10240)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be smaller than or equal to 10240.";
            }
            if ((mb_strlen($this->container['script']) < 1)) {
                $invalidProperties[] = "invalid value for 'script', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['scriptParams'] === null) {
            $invalidProperties[] = "'scriptParams' can't be null";
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
    * Gets scriptName
    *  脚本名称
    *
    * @return string
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string $scriptName 脚本名称
    *
    * @return $this
    */
    public function setScriptName($scriptName)
    {
        $this->container['scriptName'] = $scriptName;
        return $this;
    }

    /**
    * Gets directory
    *  脚本目录分组名称，长度在1到256个字符之间。
    *
    * @return string|null
    */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
    * Sets directory
    *
    * @param string|null $directory 脚本目录分组名称，长度在1到256个字符之间。
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets description
    *  脚本的相关描述信息，长度在1到1024个字符之间。
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
    * @param string|null $description 脚本的相关描述信息，长度在1到1024个字符之间。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets scriptType
    *  scriptType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptType
    */
    public function getScriptType()
    {
        return $this->container['scriptType'];
    }

    /**
    * Sets scriptType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptType $scriptType scriptType
    *
    * @return $this
    */
    public function setScriptType($scriptType)
    {
        $this->container['scriptType'] = $scriptType;
        return $this;
    }

    /**
    * Gets retrieveTableId
    *  UUID
    *
    * @return string|null
    */
    public function getRetrieveTableId()
    {
        return $this->container['retrieveTableId'];
    }

    /**
    * Sets retrieveTableId
    *
    * @param string|null $retrieveTableId UUID
    *
    * @return $this
    */
    public function setRetrieveTableId($retrieveTableId)
    {
        $this->container['retrieveTableId'] = $retrieveTableId;
        return $this;
    }

    /**
    * Gets script
    *  脚本内容，长度在1到10240个字符之间。
    *
    * @return string
    */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
    * Sets script
    *
    * @param string $script 脚本内容，长度在1到10240个字符之间。
    *
    * @return $this
    */
    public function setScript($script)
    {
        $this->container['script'] = $script;
        return $this;
    }

    /**
    * Gets owner
    *  分析脚本参数列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptParam[]|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptParam[]|null $owner 分析脚本参数列表
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets scriptParams
    *  分析脚本参数列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptParam[]
    */
    public function getScriptParams()
    {
        return $this->container['scriptParams'];
    }

    /**
    * Sets scriptParams
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AnalysisScriptParam[] $scriptParams 分析脚本参数列表
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


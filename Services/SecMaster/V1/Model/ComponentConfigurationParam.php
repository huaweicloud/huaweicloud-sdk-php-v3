<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentConfigurationParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentConfigurationParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentId  组件id.
    * configurationId  配置ID
    * fileName  文件名称
    * filePath  文件路径
    * fileType  fileType
    * nodeId  节点ID
    * param  参数
    * type  **参数解释**: 配置类型 - HISTORY 历史版本 - CURRENT_SAVE 当前保存 - CURRENT_APPLY 当前使用  **约束限制** 不涉及 **取值范围**: - HISTORY - CURRENT_SAVE - CURRENT_APPLY  **默认值** 不涉及
    * version  版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentId' => 'string',
            'configurationId' => 'string',
            'fileName' => 'string',
            'filePath' => 'string',
            'fileType' => '\HuaweiCloud\SDK\SecMaster\V1\Model\FileType',
            'nodeId' => 'string',
            'param' => 'string',
            'type' => 'string',
            'version' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentId  组件id.
    * configurationId  配置ID
    * fileName  文件名称
    * filePath  文件路径
    * fileType  fileType
    * nodeId  节点ID
    * param  参数
    * type  **参数解释**: 配置类型 - HISTORY 历史版本 - CURRENT_SAVE 当前保存 - CURRENT_APPLY 当前使用  **约束限制** 不涉及 **取值范围**: - HISTORY - CURRENT_SAVE - CURRENT_APPLY  **默认值** 不涉及
    * version  版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentId' => null,
        'configurationId' => null,
        'fileName' => null,
        'filePath' => null,
        'fileType' => null,
        'nodeId' => null,
        'param' => null,
        'type' => null,
        'version' => 'int32'
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
    * componentId  组件id.
    * configurationId  配置ID
    * fileName  文件名称
    * filePath  文件路径
    * fileType  fileType
    * nodeId  节点ID
    * param  参数
    * type  **参数解释**: 配置类型 - HISTORY 历史版本 - CURRENT_SAVE 当前保存 - CURRENT_APPLY 当前使用  **约束限制** 不涉及 **取值范围**: - HISTORY - CURRENT_SAVE - CURRENT_APPLY  **默认值** 不涉及
    * version  版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentId' => 'component_id',
            'configurationId' => 'configuration_id',
            'fileName' => 'file_name',
            'filePath' => 'file_path',
            'fileType' => 'file_type',
            'nodeId' => 'node_id',
            'param' => 'param',
            'type' => 'type',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentId  组件id.
    * configurationId  配置ID
    * fileName  文件名称
    * filePath  文件路径
    * fileType  fileType
    * nodeId  节点ID
    * param  参数
    * type  **参数解释**: 配置类型 - HISTORY 历史版本 - CURRENT_SAVE 当前保存 - CURRENT_APPLY 当前使用  **约束限制** 不涉及 **取值范围**: - HISTORY - CURRENT_SAVE - CURRENT_APPLY  **默认值** 不涉及
    * version  版本
    *
    * @var string[]
    */
    protected static $setters = [
            'componentId' => 'setComponentId',
            'configurationId' => 'setConfigurationId',
            'fileName' => 'setFileName',
            'filePath' => 'setFilePath',
            'fileType' => 'setFileType',
            'nodeId' => 'setNodeId',
            'param' => 'setParam',
            'type' => 'setType',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentId  组件id.
    * configurationId  配置ID
    * fileName  文件名称
    * filePath  文件路径
    * fileType  fileType
    * nodeId  节点ID
    * param  参数
    * type  **参数解释**: 配置类型 - HISTORY 历史版本 - CURRENT_SAVE 当前保存 - CURRENT_APPLY 当前使用  **约束限制** 不涉及 **取值范围**: - HISTORY - CURRENT_SAVE - CURRENT_APPLY  **默认值** 不涉及
    * version  版本
    *
    * @var string[]
    */
    protected static $getters = [
            'componentId' => 'getComponentId',
            'configurationId' => 'getConfigurationId',
            'fileName' => 'getFileName',
            'filePath' => 'getFilePath',
            'fileType' => 'getFileType',
            'nodeId' => 'getNodeId',
            'param' => 'getParam',
            'type' => 'getType',
            'version' => 'getVersion'
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
    const TYPE_HISTORY = 'HISTORY';
    const TYPE_CURRENT_SAVE = 'CURRENT_SAVE';
    const TYPE_CURRENT_APPLY = 'CURRENT_APPLY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HISTORY,
            self::TYPE_CURRENT_SAVE,
            self::TYPE_CURRENT_APPLY,
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['param'] = isset($data['param']) ? $data['param'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['configurationId']) && (mb_strlen($this->container['configurationId']) > 30)) {
                $invalidProperties[] = "invalid value for 'configurationId', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['configurationId']) && (mb_strlen($this->container['configurationId']) < 0)) {
                $invalidProperties[] = "invalid value for 'configurationId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 63)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['param']) && (mb_strlen($this->container['param']) > 1024)) {
                $invalidProperties[] = "invalid value for 'param', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['param']) && (mb_strlen($this->container['param']) < 0)) {
                $invalidProperties[] = "invalid value for 'param', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['version']) && ($this->container['version'] > 1024)) {
                $invalidProperties[] = "invalid value for 'version', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] < 1)) {
                $invalidProperties[] = "invalid value for 'version', must be bigger than or equal to 1.";
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
    * Gets componentId
    *  组件id.
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件id.
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets configurationId
    *  配置ID
    *
    * @return string|null
    */
    public function getConfigurationId()
    {
        return $this->container['configurationId'];
    }

    /**
    * Sets configurationId
    *
    * @param string|null $configurationId 配置ID
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名称
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets filePath
    *  文件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileType
    *  fileType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\FileType|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\FileType|null $fileType fileType
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets param
    *  参数
    *
    * @return string|null
    */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
    * Sets param
    *
    * @param string|null $param 参数
    *
    * @return $this
    */
    public function setParam($param)
    {
        $this->container['param'] = $param;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 配置类型 - HISTORY 历史版本 - CURRENT_SAVE 当前保存 - CURRENT_APPLY 当前使用  **约束限制** 不涉及 **取值范围**: - HISTORY - CURRENT_SAVE - CURRENT_APPLY  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**: 配置类型 - HISTORY 历史版本 - CURRENT_SAVE 当前保存 - CURRENT_APPLY 当前使用  **约束限制** 不涉及 **取值范围**: - HISTORY - CURRENT_SAVE - CURRENT_APPLY  **默认值** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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


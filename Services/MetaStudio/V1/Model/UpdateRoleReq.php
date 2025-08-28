<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRoleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRoleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  角色名称。
    * description  角色描述。
    * roleBusinessList  角色业务配置列表
    * llmSource  llmSource
    * llmConfigId  大语言模型配置ID。
    * pluginConfigList  插件配置列表
    * mcpServerIdList  MCP服务端对接配置ID列表
    * instructionLibraryId  指令集ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'roleBusinessList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RoleBusinessReq[]',
            'llmSource' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LlmSourceEnum',
            'llmConfigId' => 'string',
            'pluginConfigList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RolePluginConfigInfo[]',
            'mcpServerIdList' => 'string[]',
            'instructionLibraryId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  角色名称。
    * description  角色描述。
    * roleBusinessList  角色业务配置列表
    * llmSource  llmSource
    * llmConfigId  大语言模型配置ID。
    * pluginConfigList  插件配置列表
    * mcpServerIdList  MCP服务端对接配置ID列表
    * instructionLibraryId  指令集ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'roleBusinessList' => null,
        'llmSource' => null,
        'llmConfigId' => null,
        'pluginConfigList' => null,
        'mcpServerIdList' => null,
        'instructionLibraryId' => null
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
    * name  角色名称。
    * description  角色描述。
    * roleBusinessList  角色业务配置列表
    * llmSource  llmSource
    * llmConfigId  大语言模型配置ID。
    * pluginConfigList  插件配置列表
    * mcpServerIdList  MCP服务端对接配置ID列表
    * instructionLibraryId  指令集ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'roleBusinessList' => 'role_business_list',
            'llmSource' => 'llm_source',
            'llmConfigId' => 'llm_config_id',
            'pluginConfigList' => 'plugin_config_list',
            'mcpServerIdList' => 'mcp_server_id_list',
            'instructionLibraryId' => 'instruction_library_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  角色名称。
    * description  角色描述。
    * roleBusinessList  角色业务配置列表
    * llmSource  llmSource
    * llmConfigId  大语言模型配置ID。
    * pluginConfigList  插件配置列表
    * mcpServerIdList  MCP服务端对接配置ID列表
    * instructionLibraryId  指令集ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'roleBusinessList' => 'setRoleBusinessList',
            'llmSource' => 'setLlmSource',
            'llmConfigId' => 'setLlmConfigId',
            'pluginConfigList' => 'setPluginConfigList',
            'mcpServerIdList' => 'setMcpServerIdList',
            'instructionLibraryId' => 'setInstructionLibraryId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  角色名称。
    * description  角色描述。
    * roleBusinessList  角色业务配置列表
    * llmSource  llmSource
    * llmConfigId  大语言模型配置ID。
    * pluginConfigList  插件配置列表
    * mcpServerIdList  MCP服务端对接配置ID列表
    * instructionLibraryId  指令集ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'roleBusinessList' => 'getRoleBusinessList',
            'llmSource' => 'getLlmSource',
            'llmConfigId' => 'getLlmConfigId',
            'pluginConfigList' => 'getPluginConfigList',
            'mcpServerIdList' => 'getMcpServerIdList',
            'instructionLibraryId' => 'getInstructionLibraryId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['roleBusinessList'] = isset($data['roleBusinessList']) ? $data['roleBusinessList'] : null;
        $this->container['llmSource'] = isset($data['llmSource']) ? $data['llmSource'] : null;
        $this->container['llmConfigId'] = isset($data['llmConfigId']) ? $data['llmConfigId'] : null;
        $this->container['pluginConfigList'] = isset($data['pluginConfigList']) ? $data['pluginConfigList'] : null;
        $this->container['mcpServerIdList'] = isset($data['mcpServerIdList']) ? $data['mcpServerIdList'] : null;
        $this->container['instructionLibraryId'] = isset($data['instructionLibraryId']) ? $data['instructionLibraryId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['llmConfigId']) && (mb_strlen($this->container['llmConfigId']) > 64)) {
                $invalidProperties[] = "invalid value for 'llmConfigId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['llmConfigId']) && (mb_strlen($this->container['llmConfigId']) < 0)) {
                $invalidProperties[] = "invalid value for 'llmConfigId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instructionLibraryId']) && (mb_strlen($this->container['instructionLibraryId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instructionLibraryId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instructionLibraryId']) && (mb_strlen($this->container['instructionLibraryId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instructionLibraryId', the character length must be bigger than or equal to 0.";
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
    *  角色名称。
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
    * @param string|null $name 角色名称。
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
    *  角色描述。
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
    * @param string|null $description 角色描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets roleBusinessList
    *  角色业务配置列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RoleBusinessReq[]|null
    */
    public function getRoleBusinessList()
    {
        return $this->container['roleBusinessList'];
    }

    /**
    * Sets roleBusinessList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RoleBusinessReq[]|null $roleBusinessList 角色业务配置列表
    *
    * @return $this
    */
    public function setRoleBusinessList($roleBusinessList)
    {
        $this->container['roleBusinessList'] = $roleBusinessList;
        return $this;
    }

    /**
    * Gets llmSource
    *  llmSource
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LlmSourceEnum|null
    */
    public function getLlmSource()
    {
        return $this->container['llmSource'];
    }

    /**
    * Sets llmSource
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LlmSourceEnum|null $llmSource llmSource
    *
    * @return $this
    */
    public function setLlmSource($llmSource)
    {
        $this->container['llmSource'] = $llmSource;
        return $this;
    }

    /**
    * Gets llmConfigId
    *  大语言模型配置ID。
    *
    * @return string|null
    */
    public function getLlmConfigId()
    {
        return $this->container['llmConfigId'];
    }

    /**
    * Sets llmConfigId
    *
    * @param string|null $llmConfigId 大语言模型配置ID。
    *
    * @return $this
    */
    public function setLlmConfigId($llmConfigId)
    {
        $this->container['llmConfigId'] = $llmConfigId;
        return $this;
    }

    /**
    * Gets pluginConfigList
    *  插件配置列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RolePluginConfigInfo[]|null
    */
    public function getPluginConfigList()
    {
        return $this->container['pluginConfigList'];
    }

    /**
    * Sets pluginConfigList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RolePluginConfigInfo[]|null $pluginConfigList 插件配置列表
    *
    * @return $this
    */
    public function setPluginConfigList($pluginConfigList)
    {
        $this->container['pluginConfigList'] = $pluginConfigList;
        return $this;
    }

    /**
    * Gets mcpServerIdList
    *  MCP服务端对接配置ID列表
    *
    * @return string[]|null
    */
    public function getMcpServerIdList()
    {
        return $this->container['mcpServerIdList'];
    }

    /**
    * Sets mcpServerIdList
    *
    * @param string[]|null $mcpServerIdList MCP服务端对接配置ID列表
    *
    * @return $this
    */
    public function setMcpServerIdList($mcpServerIdList)
    {
        $this->container['mcpServerIdList'] = $mcpServerIdList;
        return $this;
    }

    /**
    * Gets instructionLibraryId
    *  指令集ID。
    *
    * @return string|null
    */
    public function getInstructionLibraryId()
    {
        return $this->container['instructionLibraryId'];
    }

    /**
    * Sets instructionLibraryId
    *
    * @param string|null $instructionLibraryId 指令集ID。
    *
    * @return $this
    */
    public function setInstructionLibraryId($instructionLibraryId)
    {
        $this->container['instructionLibraryId'] = $instructionLibraryId;
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


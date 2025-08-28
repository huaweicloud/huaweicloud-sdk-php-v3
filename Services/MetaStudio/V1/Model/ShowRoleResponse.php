<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRoleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRoleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roleId  角色ID。
    * name  角色名称。
    * description  角色描述。
    * roleBusinessList  角色业务配置列表。
    * llmSource  llmSource
    * llmConfigId  大语言模型配置ID。
    * pluginConfigList  插件配置列表
    * mcpServerInfoList  MCP服务端对接配置信息列表
    * instructionLibraryId  指令集ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roleId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'roleBusinessList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RoleBusinessInfo[]',
            'llmSource' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LlmSourceEnum',
            'llmConfigId' => 'string',
            'pluginConfigList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RolePluginConfigInfo[]',
            'mcpServerInfoList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\McpServerBaseInfo[]',
            'instructionLibraryId' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roleId  角色ID。
    * name  角色名称。
    * description  角色描述。
    * roleBusinessList  角色业务配置列表。
    * llmSource  llmSource
    * llmConfigId  大语言模型配置ID。
    * pluginConfigList  插件配置列表
    * mcpServerInfoList  MCP服务端对接配置信息列表
    * instructionLibraryId  指令集ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roleId' => null,
        'name' => null,
        'description' => null,
        'roleBusinessList' => null,
        'llmSource' => null,
        'llmConfigId' => null,
        'pluginConfigList' => null,
        'mcpServerInfoList' => null,
        'instructionLibraryId' => null,
        'createTime' => null,
        'updateTime' => null,
        'xRequestId' => null
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
    * roleId  角色ID。
    * name  角色名称。
    * description  角色描述。
    * roleBusinessList  角色业务配置列表。
    * llmSource  llmSource
    * llmConfigId  大语言模型配置ID。
    * pluginConfigList  插件配置列表
    * mcpServerInfoList  MCP服务端对接配置信息列表
    * instructionLibraryId  指令集ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roleId' => 'role_id',
            'name' => 'name',
            'description' => 'description',
            'roleBusinessList' => 'role_business_list',
            'llmSource' => 'llm_source',
            'llmConfigId' => 'llm_config_id',
            'pluginConfigList' => 'plugin_config_list',
            'mcpServerInfoList' => 'mcp_server_info_list',
            'instructionLibraryId' => 'instruction_library_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roleId  角色ID。
    * name  角色名称。
    * description  角色描述。
    * roleBusinessList  角色业务配置列表。
    * llmSource  llmSource
    * llmConfigId  大语言模型配置ID。
    * pluginConfigList  插件配置列表
    * mcpServerInfoList  MCP服务端对接配置信息列表
    * instructionLibraryId  指令集ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'roleId' => 'setRoleId',
            'name' => 'setName',
            'description' => 'setDescription',
            'roleBusinessList' => 'setRoleBusinessList',
            'llmSource' => 'setLlmSource',
            'llmConfigId' => 'setLlmConfigId',
            'pluginConfigList' => 'setPluginConfigList',
            'mcpServerInfoList' => 'setMcpServerInfoList',
            'instructionLibraryId' => 'setInstructionLibraryId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roleId  角色ID。
    * name  角色名称。
    * description  角色描述。
    * roleBusinessList  角色业务配置列表。
    * llmSource  llmSource
    * llmConfigId  大语言模型配置ID。
    * pluginConfigList  插件配置列表
    * mcpServerInfoList  MCP服务端对接配置信息列表
    * instructionLibraryId  指令集ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'roleId' => 'getRoleId',
            'name' => 'getName',
            'description' => 'getDescription',
            'roleBusinessList' => 'getRoleBusinessList',
            'llmSource' => 'getLlmSource',
            'llmConfigId' => 'getLlmConfigId',
            'pluginConfigList' => 'getPluginConfigList',
            'mcpServerInfoList' => 'getMcpServerInfoList',
            'instructionLibraryId' => 'getInstructionLibraryId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'xRequestId' => 'getXRequestId'
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
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['roleBusinessList'] = isset($data['roleBusinessList']) ? $data['roleBusinessList'] : null;
        $this->container['llmSource'] = isset($data['llmSource']) ? $data['llmSource'] : null;
        $this->container['llmConfigId'] = isset($data['llmConfigId']) ? $data['llmConfigId'] : null;
        $this->container['pluginConfigList'] = isset($data['pluginConfigList']) ? $data['pluginConfigList'] : null;
        $this->container['mcpServerInfoList'] = isset($data['mcpServerInfoList']) ? $data['mcpServerInfoList'] : null;
        $this->container['instructionLibraryId'] = isset($data['instructionLibraryId']) ? $data['instructionLibraryId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 1.";
            }
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
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets roleId
    *  角色ID。
    *
    * @return string|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string|null $roleId 角色ID。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
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
    *  角色业务配置列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RoleBusinessInfo[]|null
    */
    public function getRoleBusinessList()
    {
        return $this->container['roleBusinessList'];
    }

    /**
    * Sets roleBusinessList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RoleBusinessInfo[]|null $roleBusinessList 角色业务配置列表。
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
    * Gets mcpServerInfoList
    *  MCP服务端对接配置信息列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\McpServerBaseInfo[]|null
    */
    public function getMcpServerInfoList()
    {
        return $this->container['mcpServerInfoList'];
    }

    /**
    * Sets mcpServerInfoList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\McpServerBaseInfo[]|null $mcpServerInfoList MCP服务端对接配置信息列表
    *
    * @return $this
    */
    public function setMcpServerInfoList($mcpServerInfoList)
    {
        $this->container['mcpServerInfoList'] = $mcpServerInfoList;
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
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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


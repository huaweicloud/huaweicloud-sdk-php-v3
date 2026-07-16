<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageCreateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageCreateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  **参数解释**：该镜像所对应的描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制512个字符。 **默认取值**：不涉及。
    * name  **参数解释**：镜像名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持小写字母、数字、中划线、下划线和点，字符串必须以小写字母或数字开头和结尾。 **默认取值**：不涉及。
    * namespace  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **约束限制**：不涉及。 **取值范围**：长度限制为64个字符，支持大小写字母、数字、中划线、下划线和点号，且必须是小写字母开头。 **默认取值**：不涉及。
    * tag  **参数解释**：镜像tag。 **约束限制**：不涉及。 **取值范围**：长度限制64个字符，支持大小写字母、数字、中划线、下划线和点号。 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * swrInstanceId  **参数解释**：企业版SWR仓库ID。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * swrInstanceDomain  **参数解释**：企业版SWR仓库域名。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'name' => 'string',
            'namespace' => 'string',
            'tag' => 'string',
            'workspaceId' => 'string',
            'swrInstanceId' => 'string',
            'swrInstanceDomain' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  **参数解释**：该镜像所对应的描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制512个字符。 **默认取值**：不涉及。
    * name  **参数解释**：镜像名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持小写字母、数字、中划线、下划线和点，字符串必须以小写字母或数字开头和结尾。 **默认取值**：不涉及。
    * namespace  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **约束限制**：不涉及。 **取值范围**：长度限制为64个字符，支持大小写字母、数字、中划线、下划线和点号，且必须是小写字母开头。 **默认取值**：不涉及。
    * tag  **参数解释**：镜像tag。 **约束限制**：不涉及。 **取值范围**：长度限制64个字符，支持大小写字母、数字、中划线、下划线和点号。 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * swrInstanceId  **参数解释**：企业版SWR仓库ID。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * swrInstanceDomain  **参数解释**：企业版SWR仓库域名。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'name' => null,
        'namespace' => null,
        'tag' => null,
        'workspaceId' => null,
        'swrInstanceId' => null,
        'swrInstanceDomain' => null
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
    * description  **参数解释**：该镜像所对应的描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制512个字符。 **默认取值**：不涉及。
    * name  **参数解释**：镜像名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持小写字母、数字、中划线、下划线和点，字符串必须以小写字母或数字开头和结尾。 **默认取值**：不涉及。
    * namespace  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **约束限制**：不涉及。 **取值范围**：长度限制为64个字符，支持大小写字母、数字、中划线、下划线和点号，且必须是小写字母开头。 **默认取值**：不涉及。
    * tag  **参数解释**：镜像tag。 **约束限制**：不涉及。 **取值范围**：长度限制64个字符，支持大小写字母、数字、中划线、下划线和点号。 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * swrInstanceId  **参数解释**：企业版SWR仓库ID。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * swrInstanceDomain  **参数解释**：企业版SWR仓库域名。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'name' => 'name',
            'namespace' => 'namespace',
            'tag' => 'tag',
            'workspaceId' => 'workspace_id',
            'swrInstanceId' => 'swr_instance_id',
            'swrInstanceDomain' => 'swr_instance_domain'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  **参数解释**：该镜像所对应的描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制512个字符。 **默认取值**：不涉及。
    * name  **参数解释**：镜像名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持小写字母、数字、中划线、下划线和点，字符串必须以小写字母或数字开头和结尾。 **默认取值**：不涉及。
    * namespace  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **约束限制**：不涉及。 **取值范围**：长度限制为64个字符，支持大小写字母、数字、中划线、下划线和点号，且必须是小写字母开头。 **默认取值**：不涉及。
    * tag  **参数解释**：镜像tag。 **约束限制**：不涉及。 **取值范围**：长度限制64个字符，支持大小写字母、数字、中划线、下划线和点号。 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * swrInstanceId  **参数解释**：企业版SWR仓库ID。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * swrInstanceDomain  **参数解释**：企业版SWR仓库域名。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'tag' => 'setTag',
            'workspaceId' => 'setWorkspaceId',
            'swrInstanceId' => 'setSwrInstanceId',
            'swrInstanceDomain' => 'setSwrInstanceDomain'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  **参数解释**：该镜像所对应的描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制512个字符。 **默认取值**：不涉及。
    * name  **参数解释**：镜像名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持小写字母、数字、中划线、下划线和点，字符串必须以小写字母或数字开头和结尾。 **默认取值**：不涉及。
    * namespace  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **约束限制**：不涉及。 **取值范围**：长度限制为64个字符，支持大小写字母、数字、中划线、下划线和点号，且必须是小写字母开头。 **默认取值**：不涉及。
    * tag  **参数解释**：镜像tag。 **约束限制**：不涉及。 **取值范围**：长度限制64个字符，支持大小写字母、数字、中划线、下划线和点号。 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * swrInstanceId  **参数解释**：企业版SWR仓库ID。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * swrInstanceDomain  **参数解释**：企业版SWR仓库域名。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'tag' => 'getTag',
            'workspaceId' => 'getWorkspaceId',
            'swrInstanceId' => 'getSwrInstanceId',
            'swrInstanceDomain' => 'getSwrInstanceDomain'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['swrInstanceId'] = isset($data['swrInstanceId']) ? $data['swrInstanceId'] : null;
        $this->container['swrInstanceDomain'] = isset($data['swrInstanceDomain']) ? $data['swrInstanceDomain'] : null;
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
            if (!preg_match("/^[a-z0-9]([-_a-z0-9]{0,126}[a-z0-9])?$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9]([-_a-z0-9]{0,126}[a-z0-9])?$/.";
            }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            if (!preg_match("/^[a-z][A-Za-z0-9-_.]{0,63}$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^[a-z][A-Za-z0-9-_.]{0,63}$/.";
            }
            if (!is_null($this->container['tag']) && !preg_match("/^[-_.a-zA-Z0-9]{1,64}$/", $this->container['tag'])) {
                $invalidProperties[] = "invalid value for 'tag', must be conform to the pattern /^[-_.a-zA-Z0-9]{1,64}$/.";
            }
            if (!is_null($this->container['workspaceId']) && !preg_match("/^[0-9a-z]{32}|0$/", $this->container['workspaceId'])) {
                $invalidProperties[] = "invalid value for 'workspaceId', must be conform to the pattern /^[0-9a-z]{32}|0$/.";
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
    * Gets description
    *  **参数解释**：该镜像所对应的描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制512个字符。 **默认取值**：不涉及。
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
    * @param string|null $description **参数解释**：该镜像所对应的描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制512个字符。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：镜像名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持小写字母、数字、中划线、下划线和点，字符串必须以小写字母或数字开头和结尾。 **默认取值**：不涉及。
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
    * @param string $name **参数解释**：镜像名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持小写字母、数字、中划线、下划线和点，字符串必须以小写字母或数字开头和结尾。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **约束限制**：不涉及。 **取值范围**：长度限制为64个字符，支持大小写字母、数字、中划线、下划线和点号，且必须是小写字母开头。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **约束限制**：不涉及。 **取值范围**：长度限制为64个字符，支持大小写字母、数字、中划线、下划线和点号，且必须是小写字母开头。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释**：镜像tag。 **约束限制**：不涉及。 **取值范围**：长度限制64个字符，支持大小写字母、数字、中划线、下划线和点号。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag **参数解释**：镜像tag。 **约束限制**：不涉及。 **取值范围**：长度限制64个字符，支持大小写字母、数字、中划线、下划线和点号。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释**：工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets swrInstanceId
    *  **参数解释**：企业版SWR仓库ID。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSwrInstanceId()
    {
        return $this->container['swrInstanceId'];
    }

    /**
    * Sets swrInstanceId
    *
    * @param string|null $swrInstanceId **参数解释**：企业版SWR仓库ID。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSwrInstanceId($swrInstanceId)
    {
        $this->container['swrInstanceId'] = $swrInstanceId;
        return $this;
    }

    /**
    * Gets swrInstanceDomain
    *  **参数解释**：企业版SWR仓库域名。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSwrInstanceDomain()
    {
        return $this->container['swrInstanceDomain'];
    }

    /**
    * Sets swrInstanceDomain
    *
    * @param string|null $swrInstanceDomain **参数解释**：企业版SWR仓库域名。 **参数约束**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSwrInstanceDomain($swrInstanceDomain)
    {
        $this->container['swrInstanceDomain'] = $swrInstanceDomain;
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


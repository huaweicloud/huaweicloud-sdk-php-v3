<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadAssetFileRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadAssetFileRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * assetType  **参数解释**: 资产指纹类型 **约束限制**: 不涉及 **取值范围**: - users         ：账号 - auto_launch   ：自启动项 - database      ：数据库 - jar_package   ：中间件 - port          ：开放端口 - process       ：进程 - web_cms       ：web应用 - web_framework ：web框架 - web_service   ：web服务 - web_site      ：web站点 - app           ：软件 - kernel_module ：内核模块  **默认取值**: 不涉及
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host     ：主机 - container：容器  **默认取值**: host
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'assetType' => 'string',
            'category' => 'string',
            'body' => '\HuaweiCloud\SDK\Hss\V5\Model\DownloadAssetFileRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * assetType  **参数解释**: 资产指纹类型 **约束限制**: 不涉及 **取值范围**: - users         ：账号 - auto_launch   ：自启动项 - database      ：数据库 - jar_package   ：中间件 - port          ：开放端口 - process       ：进程 - web_cms       ：web应用 - web_framework ：web框架 - web_service   ：web服务 - web_site      ：web站点 - app           ：软件 - kernel_module ：内核模块  **默认取值**: 不涉及
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host     ：主机 - container：容器  **默认取值**: host
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'assetType' => null,
        'category' => null,
        'body' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * assetType  **参数解释**: 资产指纹类型 **约束限制**: 不涉及 **取值范围**: - users         ：账号 - auto_launch   ：自启动项 - database      ：数据库 - jar_package   ：中间件 - port          ：开放端口 - process       ：进程 - web_cms       ：web应用 - web_framework ：web框架 - web_service   ：web服务 - web_site      ：web站点 - app           ：软件 - kernel_module ：内核模块  **默认取值**: 不涉及
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host     ：主机 - container：容器  **默认取值**: host
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'assetType' => 'asset_type',
            'category' => 'category',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * assetType  **参数解释**: 资产指纹类型 **约束限制**: 不涉及 **取值范围**: - users         ：账号 - auto_launch   ：自启动项 - database      ：数据库 - jar_package   ：中间件 - port          ：开放端口 - process       ：进程 - web_cms       ：web应用 - web_framework ：web框架 - web_service   ：web服务 - web_site      ：web站点 - app           ：软件 - kernel_module ：内核模块  **默认取值**: 不涉及
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host     ：主机 - container：容器  **默认取值**: host
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'assetType' => 'setAssetType',
            'category' => 'setCategory',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * assetType  **参数解释**: 资产指纹类型 **约束限制**: 不涉及 **取值范围**: - users         ：账号 - auto_launch   ：自启动项 - database      ：数据库 - jar_package   ：中间件 - port          ：开放端口 - process       ：进程 - web_cms       ：web应用 - web_framework ：web框架 - web_service   ：web服务 - web_site      ：web站点 - app           ：软件 - kernel_module ：内核模块  **默认取值**: 不涉及
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host     ：主机 - container：容器  **默认取值**: host
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'assetType' => 'getAssetType',
            'category' => 'getCategory',
            'body' => 'getBody'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['assetType'] === null) {
            $invalidProperties[] = "'assetType' can't be null";
        }
            if ((mb_strlen($this->container['assetType']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['assetType']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/(^users|auto_launch|database|jar_package|port|process|web_cms|web_framework|web_service|web_site|app|kernel_module$)/", $this->container['assetType'])) {
                $invalidProperties[] = "invalid value for 'assetType', must be conform to the pattern /(^users|auto_launch|database|jar_package|port|process|web_cms|web_framework|web_service|web_site|app|kernel_module$)/.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            if ((mb_strlen($this->container['category']) > 64)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets assetType
    *  **参数解释**: 资产指纹类型 **约束限制**: 不涉及 **取值范围**: - users         ：账号 - auto_launch   ：自启动项 - database      ：数据库 - jar_package   ：中间件 - port          ：开放端口 - process       ：进程 - web_cms       ：web应用 - web_framework ：web框架 - web_service   ：web服务 - web_site      ：web站点 - app           ：软件 - kernel_module ：内核模块  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    /**
    * Sets assetType
    *
    * @param string $assetType **参数解释**: 资产指纹类型 **约束限制**: 不涉及 **取值范围**: - users         ：账号 - auto_launch   ：自启动项 - database      ：数据库 - jar_package   ：中间件 - port          ：开放端口 - process       ：进程 - web_cms       ：web应用 - web_framework ：web框架 - web_service   ：web服务 - web_site      ：web站点 - app           ：软件 - kernel_module ：内核模块  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host     ：主机 - container：容器  **默认取值**: host
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host     ：主机 - container：容器  **默认取值**: host
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\DownloadAssetFileRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\DownloadAssetFileRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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


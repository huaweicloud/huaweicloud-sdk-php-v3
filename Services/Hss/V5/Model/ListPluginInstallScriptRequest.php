<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPluginInstallScriptRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPluginInstallScriptRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * outsideHost  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    * batchInstall  **参数解释**： 是否批量安装 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： true
    * plugin  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    * operateType  **参数解释**： 操作类型 **约束限制**： 不涉及 **取值范围**： - install：安装。 - upgrade：升级。 - uninstall：卸载。  **默认取值**： install
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'outsideHost' => 'bool',
            'batchInstall' => 'bool',
            'plugin' => 'string',
            'operateType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * outsideHost  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    * batchInstall  **参数解释**： 是否批量安装 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： true
    * plugin  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    * operateType  **参数解释**： 操作类型 **约束限制**： 不涉及 **取值范围**： - install：安装。 - upgrade：升级。 - uninstall：卸载。  **默认取值**： install
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'outsideHost' => null,
        'batchInstall' => null,
        'plugin' => null,
        'operateType' => null
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
    * outsideHost  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    * batchInstall  **参数解释**： 是否批量安装 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： true
    * plugin  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    * operateType  **参数解释**： 操作类型 **约束限制**： 不涉及 **取值范围**： - install：安装。 - upgrade：升级。 - uninstall：卸载。  **默认取值**： install
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'outsideHost' => 'outside_host',
            'batchInstall' => 'batch_install',
            'plugin' => 'plugin',
            'operateType' => 'operate_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * outsideHost  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    * batchInstall  **参数解释**： 是否批量安装 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： true
    * plugin  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    * operateType  **参数解释**： 操作类型 **约束限制**： 不涉及 **取值范围**： - install：安装。 - upgrade：升级。 - uninstall：卸载。  **默认取值**： install
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'outsideHost' => 'setOutsideHost',
            'batchInstall' => 'setBatchInstall',
            'plugin' => 'setPlugin',
            'operateType' => 'setOperateType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * outsideHost  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    * batchInstall  **参数解释**： 是否批量安装 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： true
    * plugin  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    * operateType  **参数解释**： 操作类型 **约束限制**： 不涉及 **取值范围**： - install：安装。 - upgrade：升级。 - uninstall：卸载。  **默认取值**： install
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'outsideHost' => 'getOutsideHost',
            'batchInstall' => 'getBatchInstall',
            'plugin' => 'getPlugin',
            'operateType' => 'getOperateType'
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
        $this->container['outsideHost'] = isset($data['outsideHost']) ? $data['outsideHost'] : null;
        $this->container['batchInstall'] = isset($data['batchInstall']) ? $data['batchInstall'] : null;
        $this->container['plugin'] = isset($data['plugin']) ? $data['plugin'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
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
        if ($this->container['plugin'] === null) {
            $invalidProperties[] = "'plugin' can't be null";
        }
            if ((mb_strlen($this->container['plugin']) > 256)) {
                $invalidProperties[] = "invalid value for 'plugin', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['plugin']) < 1)) {
                $invalidProperties[] = "invalid value for 'plugin', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['plugin'])) {
                $invalidProperties[] = "invalid value for 'plugin', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['operateType'] === null) {
            $invalidProperties[] = "'operateType' can't be null";
        }
            if ((mb_strlen($this->container['operateType']) > 256)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['operateType']) < 1)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(install|upgrade|uninstall)$/", $this->container['operateType'])) {
                $invalidProperties[] = "invalid value for 'operateType', must be conform to the pattern /^(install|upgrade|uninstall)$/.";
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
    * Gets outsideHost
    *  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @return bool|null
    */
    public function getOutsideHost()
    {
        return $this->container['outsideHost'];
    }

    /**
    * Sets outsideHost
    *
    * @param bool|null $outsideHost **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @return $this
    */
    public function setOutsideHost($outsideHost)
    {
        $this->container['outsideHost'] = $outsideHost;
        return $this;
    }

    /**
    * Gets batchInstall
    *  **参数解释**： 是否批量安装 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： true
    *
    * @return bool|null
    */
    public function getBatchInstall()
    {
        return $this->container['batchInstall'];
    }

    /**
    * Sets batchInstall
    *
    * @param bool|null $batchInstall **参数解释**： 是否批量安装 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： true
    *
    * @return $this
    */
    public function setBatchInstall($batchInstall)
    {
        $this->container['batchInstall'] = $batchInstall;
        return $this;
    }

    /**
    * Gets plugin
    *  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    *
    * @return string
    */
    public function getPlugin()
    {
        return $this->container['plugin'];
    }

    /**
    * Sets plugin
    *
    * @param string $plugin **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    *
    * @return $this
    */
    public function setPlugin($plugin)
    {
        $this->container['plugin'] = $plugin;
        return $this;
    }

    /**
    * Gets operateType
    *  **参数解释**： 操作类型 **约束限制**： 不涉及 **取值范围**： - install：安装。 - upgrade：升级。 - uninstall：卸载。  **默认取值**： install
    *
    * @return string
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string $operateType **参数解释**： 操作类型 **约束限制**： 不涉及 **取值范围**： - install：安装。 - upgrade：升级。 - uninstall：卸载。  **默认取值**： install
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
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


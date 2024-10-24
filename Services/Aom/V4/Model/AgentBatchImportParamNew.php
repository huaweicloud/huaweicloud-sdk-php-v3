<?php

namespace HuaweiCloud\SDK\Aom\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentBatchImportParamNew implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentBatchImportParamNew';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentImportParamList  导入待安装UniAgent的机器参数列表。
    * proxyRegionId  代理区域ID： - 直连接入填0。 - 代理接入填实际代理区域ID。
    * installerAgentId  安装机（代理机）的agent ID。
    * icagentInstallFlag  是否需要安装ICAgent插件： - true：安装ICAgent插件。默认安装最新版本的ICAgent插件。 - false：不安装ICAgent插件。
    * pluginInstallBaseParam  pluginInstallBaseParam
    * version  待安装的UniAgent版本号。
    * publicNetFlag  是否公网接入： - true：公网接入设置。 - false：代理接入设置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentImportParamList' => '\HuaweiCloud\SDK\Aom\V4\Model\AgentImportParamNew[]',
            'proxyRegionId' => 'int',
            'installerAgentId' => 'string',
            'icagentInstallFlag' => 'bool',
            'pluginInstallBaseParam' => '\HuaweiCloud\SDK\Aom\V4\Model\PluginInstallBasicParam',
            'version' => 'string',
            'publicNetFlag' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentImportParamList  导入待安装UniAgent的机器参数列表。
    * proxyRegionId  代理区域ID： - 直连接入填0。 - 代理接入填实际代理区域ID。
    * installerAgentId  安装机（代理机）的agent ID。
    * icagentInstallFlag  是否需要安装ICAgent插件： - true：安装ICAgent插件。默认安装最新版本的ICAgent插件。 - false：不安装ICAgent插件。
    * pluginInstallBaseParam  pluginInstallBaseParam
    * version  待安装的UniAgent版本号。
    * publicNetFlag  是否公网接入： - true：公网接入设置。 - false：代理接入设置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentImportParamList' => null,
        'proxyRegionId' => 'int32',
        'installerAgentId' => null,
        'icagentInstallFlag' => null,
        'pluginInstallBaseParam' => null,
        'version' => null,
        'publicNetFlag' => null
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
    * agentImportParamList  导入待安装UniAgent的机器参数列表。
    * proxyRegionId  代理区域ID： - 直连接入填0。 - 代理接入填实际代理区域ID。
    * installerAgentId  安装机（代理机）的agent ID。
    * icagentInstallFlag  是否需要安装ICAgent插件： - true：安装ICAgent插件。默认安装最新版本的ICAgent插件。 - false：不安装ICAgent插件。
    * pluginInstallBaseParam  pluginInstallBaseParam
    * version  待安装的UniAgent版本号。
    * publicNetFlag  是否公网接入： - true：公网接入设置。 - false：代理接入设置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentImportParamList' => 'agent_import_param_list',
            'proxyRegionId' => 'proxy_region_id',
            'installerAgentId' => 'installer_agent_id',
            'icagentInstallFlag' => 'icagent_install_flag',
            'pluginInstallBaseParam' => 'plugin_install_base_param',
            'version' => 'version',
            'publicNetFlag' => 'public_net_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentImportParamList  导入待安装UniAgent的机器参数列表。
    * proxyRegionId  代理区域ID： - 直连接入填0。 - 代理接入填实际代理区域ID。
    * installerAgentId  安装机（代理机）的agent ID。
    * icagentInstallFlag  是否需要安装ICAgent插件： - true：安装ICAgent插件。默认安装最新版本的ICAgent插件。 - false：不安装ICAgent插件。
    * pluginInstallBaseParam  pluginInstallBaseParam
    * version  待安装的UniAgent版本号。
    * publicNetFlag  是否公网接入： - true：公网接入设置。 - false：代理接入设置。
    *
    * @var string[]
    */
    protected static $setters = [
            'agentImportParamList' => 'setAgentImportParamList',
            'proxyRegionId' => 'setProxyRegionId',
            'installerAgentId' => 'setInstallerAgentId',
            'icagentInstallFlag' => 'setIcagentInstallFlag',
            'pluginInstallBaseParam' => 'setPluginInstallBaseParam',
            'version' => 'setVersion',
            'publicNetFlag' => 'setPublicNetFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentImportParamList  导入待安装UniAgent的机器参数列表。
    * proxyRegionId  代理区域ID： - 直连接入填0。 - 代理接入填实际代理区域ID。
    * installerAgentId  安装机（代理机）的agent ID。
    * icagentInstallFlag  是否需要安装ICAgent插件： - true：安装ICAgent插件。默认安装最新版本的ICAgent插件。 - false：不安装ICAgent插件。
    * pluginInstallBaseParam  pluginInstallBaseParam
    * version  待安装的UniAgent版本号。
    * publicNetFlag  是否公网接入： - true：公网接入设置。 - false：代理接入设置。
    *
    * @var string[]
    */
    protected static $getters = [
            'agentImportParamList' => 'getAgentImportParamList',
            'proxyRegionId' => 'getProxyRegionId',
            'installerAgentId' => 'getInstallerAgentId',
            'icagentInstallFlag' => 'getIcagentInstallFlag',
            'pluginInstallBaseParam' => 'getPluginInstallBaseParam',
            'version' => 'getVersion',
            'publicNetFlag' => 'getPublicNetFlag'
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
        $this->container['agentImportParamList'] = isset($data['agentImportParamList']) ? $data['agentImportParamList'] : null;
        $this->container['proxyRegionId'] = isset($data['proxyRegionId']) ? $data['proxyRegionId'] : null;
        $this->container['installerAgentId'] = isset($data['installerAgentId']) ? $data['installerAgentId'] : null;
        $this->container['icagentInstallFlag'] = isset($data['icagentInstallFlag']) ? $data['icagentInstallFlag'] : null;
        $this->container['pluginInstallBaseParam'] = isset($data['pluginInstallBaseParam']) ? $data['pluginInstallBaseParam'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['publicNetFlag'] = isset($data['publicNetFlag']) ? $data['publicNetFlag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agentImportParamList'] === null) {
            $invalidProperties[] = "'agentImportParamList' can't be null";
        }
        if ($this->container['proxyRegionId'] === null) {
            $invalidProperties[] = "'proxyRegionId' can't be null";
        }
        if ($this->container['installerAgentId'] === null) {
            $invalidProperties[] = "'installerAgentId' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['publicNetFlag'] === null) {
            $invalidProperties[] = "'publicNetFlag' can't be null";
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
    * Gets agentImportParamList
    *  导入待安装UniAgent的机器参数列表。
    *
    * @return \HuaweiCloud\SDK\Aom\V4\Model\AgentImportParamNew[]
    */
    public function getAgentImportParamList()
    {
        return $this->container['agentImportParamList'];
    }

    /**
    * Sets agentImportParamList
    *
    * @param \HuaweiCloud\SDK\Aom\V4\Model\AgentImportParamNew[] $agentImportParamList 导入待安装UniAgent的机器参数列表。
    *
    * @return $this
    */
    public function setAgentImportParamList($agentImportParamList)
    {
        $this->container['agentImportParamList'] = $agentImportParamList;
        return $this;
    }

    /**
    * Gets proxyRegionId
    *  代理区域ID： - 直连接入填0。 - 代理接入填实际代理区域ID。
    *
    * @return int
    */
    public function getProxyRegionId()
    {
        return $this->container['proxyRegionId'];
    }

    /**
    * Sets proxyRegionId
    *
    * @param int $proxyRegionId 代理区域ID： - 直连接入填0。 - 代理接入填实际代理区域ID。
    *
    * @return $this
    */
    public function setProxyRegionId($proxyRegionId)
    {
        $this->container['proxyRegionId'] = $proxyRegionId;
        return $this;
    }

    /**
    * Gets installerAgentId
    *  安装机（代理机）的agent ID。
    *
    * @return string
    */
    public function getInstallerAgentId()
    {
        return $this->container['installerAgentId'];
    }

    /**
    * Sets installerAgentId
    *
    * @param string $installerAgentId 安装机（代理机）的agent ID。
    *
    * @return $this
    */
    public function setInstallerAgentId($installerAgentId)
    {
        $this->container['installerAgentId'] = $installerAgentId;
        return $this;
    }

    /**
    * Gets icagentInstallFlag
    *  是否需要安装ICAgent插件： - true：安装ICAgent插件。默认安装最新版本的ICAgent插件。 - false：不安装ICAgent插件。
    *
    * @return bool|null
    */
    public function getIcagentInstallFlag()
    {
        return $this->container['icagentInstallFlag'];
    }

    /**
    * Sets icagentInstallFlag
    *
    * @param bool|null $icagentInstallFlag 是否需要安装ICAgent插件： - true：安装ICAgent插件。默认安装最新版本的ICAgent插件。 - false：不安装ICAgent插件。
    *
    * @return $this
    */
    public function setIcagentInstallFlag($icagentInstallFlag)
    {
        $this->container['icagentInstallFlag'] = $icagentInstallFlag;
        return $this;
    }

    /**
    * Gets pluginInstallBaseParam
    *  pluginInstallBaseParam
    *
    * @return \HuaweiCloud\SDK\Aom\V4\Model\PluginInstallBasicParam|null
    */
    public function getPluginInstallBaseParam()
    {
        return $this->container['pluginInstallBaseParam'];
    }

    /**
    * Sets pluginInstallBaseParam
    *
    * @param \HuaweiCloud\SDK\Aom\V4\Model\PluginInstallBasicParam|null $pluginInstallBaseParam pluginInstallBaseParam
    *
    * @return $this
    */
    public function setPluginInstallBaseParam($pluginInstallBaseParam)
    {
        $this->container['pluginInstallBaseParam'] = $pluginInstallBaseParam;
        return $this;
    }

    /**
    * Gets version
    *  待安装的UniAgent版本号。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 待安装的UniAgent版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets publicNetFlag
    *  是否公网接入： - true：公网接入设置。 - false：代理接入设置。
    *
    * @return bool
    */
    public function getPublicNetFlag()
    {
        return $this->container['publicNetFlag'];
    }

    /**
    * Sets publicNetFlag
    *
    * @param bool $publicNetFlag 是否公网接入： - true：公网接入设置。 - false：代理接入设置。
    *
    * @return $this
    */
    public function setPublicNetFlag($publicNetFlag)
    {
        $this->container['publicNetFlag'] = $publicNetFlag;
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


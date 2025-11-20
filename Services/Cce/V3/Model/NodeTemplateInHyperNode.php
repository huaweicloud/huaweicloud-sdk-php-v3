<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeTemplateInHyperNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeTemplateInHyperNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * az  **参数解释**： 超节点下节点所在的可用区。 [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk)
    * os  **参数解释**： 超节点下节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。
    * login  login
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**： 节点的数据盘参数。
    * storage  storage
    * k8sTags  **参数解释**： 超节点创建时下发到节点上的 k8s 标签，格式为key/value键值对。此接口中仅为展示作用。 示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```
    * runtime  runtime
    * extendParam  extendParam
    * hostnameConfig  hostnameConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'az' => 'string',
            'os' => 'string',
            'login' => '\HuaweiCloud\SDK\Cce\V3\Model\Login',
            'rootVolume' => '\HuaweiCloud\SDK\Cce\V3\Model\Volume',
            'dataVolumes' => '\HuaweiCloud\SDK\Cce\V3\Model\Volume[]',
            'storage' => '\HuaweiCloud\SDK\Cce\V3\Model\Storage',
            'k8sTags' => 'map[string,string]',
            'runtime' => '\HuaweiCloud\SDK\Cce\V3\Model\Runtime',
            'extendParam' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeExtendParam',
            'hostnameConfig' => '\HuaweiCloud\SDK\Cce\V3\Model\HostnameConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * az  **参数解释**： 超节点下节点所在的可用区。 [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk)
    * os  **参数解释**： 超节点下节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。
    * login  login
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**： 节点的数据盘参数。
    * storage  storage
    * k8sTags  **参数解释**： 超节点创建时下发到节点上的 k8s 标签，格式为key/value键值对。此接口中仅为展示作用。 示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```
    * runtime  runtime
    * extendParam  extendParam
    * hostnameConfig  hostnameConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'az' => null,
        'os' => null,
        'login' => null,
        'rootVolume' => null,
        'dataVolumes' => null,
        'storage' => null,
        'k8sTags' => null,
        'runtime' => null,
        'extendParam' => null,
        'hostnameConfig' => null
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
    * az  **参数解释**： 超节点下节点所在的可用区。 [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk)
    * os  **参数解释**： 超节点下节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。
    * login  login
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**： 节点的数据盘参数。
    * storage  storage
    * k8sTags  **参数解释**： 超节点创建时下发到节点上的 k8s 标签，格式为key/value键值对。此接口中仅为展示作用。 示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```
    * runtime  runtime
    * extendParam  extendParam
    * hostnameConfig  hostnameConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'az' => 'az',
            'os' => 'os',
            'login' => 'login',
            'rootVolume' => 'rootVolume',
            'dataVolumes' => 'dataVolumes',
            'storage' => 'storage',
            'k8sTags' => 'k8sTags',
            'runtime' => 'runtime',
            'extendParam' => 'extendParam',
            'hostnameConfig' => 'hostnameConfig'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * az  **参数解释**： 超节点下节点所在的可用区。 [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk)
    * os  **参数解释**： 超节点下节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。
    * login  login
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**： 节点的数据盘参数。
    * storage  storage
    * k8sTags  **参数解释**： 超节点创建时下发到节点上的 k8s 标签，格式为key/value键值对。此接口中仅为展示作用。 示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```
    * runtime  runtime
    * extendParam  extendParam
    * hostnameConfig  hostnameConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'az' => 'setAz',
            'os' => 'setOs',
            'login' => 'setLogin',
            'rootVolume' => 'setRootVolume',
            'dataVolumes' => 'setDataVolumes',
            'storage' => 'setStorage',
            'k8sTags' => 'setK8sTags',
            'runtime' => 'setRuntime',
            'extendParam' => 'setExtendParam',
            'hostnameConfig' => 'setHostnameConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * az  **参数解释**： 超节点下节点所在的可用区。 [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk)
    * os  **参数解释**： 超节点下节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。
    * login  login
    * rootVolume  rootVolume
    * dataVolumes  **参数解释**： 节点的数据盘参数。
    * storage  storage
    * k8sTags  **参数解释**： 超节点创建时下发到节点上的 k8s 标签，格式为key/value键值对。此接口中仅为展示作用。 示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```
    * runtime  runtime
    * extendParam  extendParam
    * hostnameConfig  hostnameConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'az' => 'getAz',
            'os' => 'getOs',
            'login' => 'getLogin',
            'rootVolume' => 'getRootVolume',
            'dataVolumes' => 'getDataVolumes',
            'storage' => 'getStorage',
            'k8sTags' => 'getK8sTags',
            'runtime' => 'getRuntime',
            'extendParam' => 'getExtendParam',
            'hostnameConfig' => 'getHostnameConfig'
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
        $this->container['az'] = isset($data['az']) ? $data['az'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['rootVolume'] = isset($data['rootVolume']) ? $data['rootVolume'] : null;
        $this->container['dataVolumes'] = isset($data['dataVolumes']) ? $data['dataVolumes'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['k8sTags'] = isset($data['k8sTags']) ? $data['k8sTags'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
        $this->container['hostnameConfig'] = isset($data['hostnameConfig']) ? $data['hostnameConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets az
    *  **参数解释**： 超节点下节点所在的可用区。 [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk)
    *
    * @return string|null
    */
    public function getAz()
    {
        return $this->container['az'];
    }

    /**
    * Sets az
    *
    * @param string|null $az **参数解释**： 超节点下节点所在的可用区。 [CCE支持的可用区请参考[地区和终端节点](https://console.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://console-intl.huaweicloud.com/apiexplorer/#/endpoint/CCE)。](tag:hws_hk)
    *
    * @return $this
    */
    public function setAz($az)
    {
        $this->container['az'] = $az;
        return $this;
    }

    /**
    * Gets os
    *  **参数解释**： 超节点下节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os **参数解释**： 超节点下节点的操作系统类型。具体支持的操作系统请参见[节点操作系统说明](node-os.xml)。
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets login
    *  login
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Login|null
    */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
    * Sets login
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Login|null $login login
    *
    * @return $this
    */
    public function setLogin($login)
    {
        $this->container['login'] = $login;
        return $this;
    }

    /**
    * Gets rootVolume
    *  rootVolume
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Volume|null
    */
    public function getRootVolume()
    {
        return $this->container['rootVolume'];
    }

    /**
    * Sets rootVolume
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Volume|null $rootVolume rootVolume
    *
    * @return $this
    */
    public function setRootVolume($rootVolume)
    {
        $this->container['rootVolume'] = $rootVolume;
        return $this;
    }

    /**
    * Gets dataVolumes
    *  **参数解释**： 节点的数据盘参数。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Volume[]|null
    */
    public function getDataVolumes()
    {
        return $this->container['dataVolumes'];
    }

    /**
    * Sets dataVolumes
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Volume[]|null $dataVolumes **参数解释**： 节点的数据盘参数。
    *
    * @return $this
    */
    public function setDataVolumes($dataVolumes)
    {
        $this->container['dataVolumes'] = $dataVolumes;
        return $this;
    }

    /**
    * Gets storage
    *  storage
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Storage|null
    */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
    * Sets storage
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Storage|null $storage storage
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets k8sTags
    *  **参数解释**： 超节点创建时下发到节点上的 k8s 标签，格式为key/value键值对。此接口中仅为展示作用。 示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```
    *
    * @return map[string,string]|null
    */
    public function getK8sTags()
    {
        return $this->container['k8sTags'];
    }

    /**
    * Sets k8sTags
    *
    * @param map[string,string]|null $k8sTags **参数解释**： 超节点创建时下发到节点上的 k8s 标签，格式为key/value键值对。此接口中仅为展示作用。 示例： ``` \"k8sTags\": {   \"key\": \"value\" } ```
    *
    * @return $this
    */
    public function setK8sTags($k8sTags)
    {
        $this->container['k8sTags'] = $k8sTags;
        return $this;
    }

    /**
    * Gets runtime
    *  runtime
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Runtime|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Runtime|null $runtime runtime
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
        return $this;
    }

    /**
    * Gets hostnameConfig
    *  hostnameConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\HostnameConfig|null
    */
    public function getHostnameConfig()
    {
        return $this->container['hostnameConfig'];
    }

    /**
    * Sets hostnameConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\HostnameConfig|null $hostnameConfig hostnameConfig
    *
    * @return $this
    */
    public function setHostnameConfig($hostnameConfig)
    {
        $this->container['hostnameConfig'] = $hostnameConfig;
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


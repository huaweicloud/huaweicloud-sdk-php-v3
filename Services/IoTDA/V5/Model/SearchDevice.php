<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchDevice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchDevice';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  资源空间ID。
    * appName  资源空间名称。
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。
    * gatewayId  网关ID，用于标识设备所属的父设备，即父设备的设备ID。当设备是直连设备时，gateway_id与设备的device_id一致。当设备是非直连设备时，gateway_id为设备所关联的父设备的device_id。
    * deviceName  设备名称。
    * nodeType  设备节点类型。 - ENDPOINT：非直连设备。 - GATEWAY：直连设备或网关。 - UNKNOWN：未知。
    * fwVersion  设备的固件版本。
    * swVersion  设备的软件版本。
    * deviceSdkVersion  设备的sdk信息。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型。
    * productName  设备关联的产品名称。
    * groups  设备组列表。
    * status  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    * tags  设备的标签列表。
    * marker  搜索结果记录Id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'appName' => 'string',
            'deviceId' => 'string',
            'nodeId' => 'string',
            'gatewayId' => 'string',
            'deviceName' => 'string',
            'nodeType' => 'string',
            'fwVersion' => 'string',
            'swVersion' => 'string',
            'deviceSdkVersion' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'groups' => 'object',
            'status' => 'string',
            'tags' => 'object',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  资源空间ID。
    * appName  资源空间名称。
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。
    * gatewayId  网关ID，用于标识设备所属的父设备，即父设备的设备ID。当设备是直连设备时，gateway_id与设备的device_id一致。当设备是非直连设备时，gateway_id为设备所关联的父设备的device_id。
    * deviceName  设备名称。
    * nodeType  设备节点类型。 - ENDPOINT：非直连设备。 - GATEWAY：直连设备或网关。 - UNKNOWN：未知。
    * fwVersion  设备的固件版本。
    * swVersion  设备的软件版本。
    * deviceSdkVersion  设备的sdk信息。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型。
    * productName  设备关联的产品名称。
    * groups  设备组列表。
    * status  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    * tags  设备的标签列表。
    * marker  搜索结果记录Id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'appName' => null,
        'deviceId' => null,
        'nodeId' => null,
        'gatewayId' => null,
        'deviceName' => null,
        'nodeType' => null,
        'fwVersion' => null,
        'swVersion' => null,
        'deviceSdkVersion' => null,
        'productId' => null,
        'productName' => null,
        'groups' => null,
        'status' => null,
        'tags' => null,
        'marker' => null
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
    * appId  资源空间ID。
    * appName  资源空间名称。
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。
    * gatewayId  网关ID，用于标识设备所属的父设备，即父设备的设备ID。当设备是直连设备时，gateway_id与设备的device_id一致。当设备是非直连设备时，gateway_id为设备所关联的父设备的device_id。
    * deviceName  设备名称。
    * nodeType  设备节点类型。 - ENDPOINT：非直连设备。 - GATEWAY：直连设备或网关。 - UNKNOWN：未知。
    * fwVersion  设备的固件版本。
    * swVersion  设备的软件版本。
    * deviceSdkVersion  设备的sdk信息。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型。
    * productName  设备关联的产品名称。
    * groups  设备组列表。
    * status  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    * tags  设备的标签列表。
    * marker  搜索结果记录Id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'appName' => 'app_name',
            'deviceId' => 'device_id',
            'nodeId' => 'node_id',
            'gatewayId' => 'gateway_id',
            'deviceName' => 'device_name',
            'nodeType' => 'node_type',
            'fwVersion' => 'fw_version',
            'swVersion' => 'sw_version',
            'deviceSdkVersion' => 'device_sdk_version',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'groups' => 'groups',
            'status' => 'status',
            'tags' => 'tags',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  资源空间ID。
    * appName  资源空间名称。
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。
    * gatewayId  网关ID，用于标识设备所属的父设备，即父设备的设备ID。当设备是直连设备时，gateway_id与设备的device_id一致。当设备是非直连设备时，gateway_id为设备所关联的父设备的device_id。
    * deviceName  设备名称。
    * nodeType  设备节点类型。 - ENDPOINT：非直连设备。 - GATEWAY：直连设备或网关。 - UNKNOWN：未知。
    * fwVersion  设备的固件版本。
    * swVersion  设备的软件版本。
    * deviceSdkVersion  设备的sdk信息。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型。
    * productName  设备关联的产品名称。
    * groups  设备组列表。
    * status  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    * tags  设备的标签列表。
    * marker  搜索结果记录Id。
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'deviceId' => 'setDeviceId',
            'nodeId' => 'setNodeId',
            'gatewayId' => 'setGatewayId',
            'deviceName' => 'setDeviceName',
            'nodeType' => 'setNodeType',
            'fwVersion' => 'setFwVersion',
            'swVersion' => 'setSwVersion',
            'deviceSdkVersion' => 'setDeviceSdkVersion',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'groups' => 'setGroups',
            'status' => 'setStatus',
            'tags' => 'setTags',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  资源空间ID。
    * appName  资源空间名称。
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。
    * gatewayId  网关ID，用于标识设备所属的父设备，即父设备的设备ID。当设备是直连设备时，gateway_id与设备的device_id一致。当设备是非直连设备时，gateway_id为设备所关联的父设备的device_id。
    * deviceName  设备名称。
    * nodeType  设备节点类型。 - ENDPOINT：非直连设备。 - GATEWAY：直连设备或网关。 - UNKNOWN：未知。
    * fwVersion  设备的固件版本。
    * swVersion  设备的软件版本。
    * deviceSdkVersion  设备的sdk信息。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型。
    * productName  设备关联的产品名称。
    * groups  设备组列表。
    * status  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    * tags  设备的标签列表。
    * marker  搜索结果记录Id。
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'deviceId' => 'getDeviceId',
            'nodeId' => 'getNodeId',
            'gatewayId' => 'getGatewayId',
            'deviceName' => 'getDeviceName',
            'nodeType' => 'getNodeType',
            'fwVersion' => 'getFwVersion',
            'swVersion' => 'getSwVersion',
            'deviceSdkVersion' => 'getDeviceSdkVersion',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'groups' => 'getGroups',
            'status' => 'getStatus',
            'tags' => 'getTags',
            'marker' => 'getMarker'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['fwVersion'] = isset($data['fwVersion']) ? $data['fwVersion'] : null;
        $this->container['swVersion'] = isset($data['swVersion']) ? $data['swVersion'] : null;
        $this->container['deviceSdkVersion'] = isset($data['deviceSdkVersion']) ? $data['deviceSdkVersion'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 36)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['deviceId']) && (mb_strlen($this->container['deviceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) > 256)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['deviceName']) && (mb_strlen($this->container['deviceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'deviceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['nodeType']) && !preg_match("/(ENDPOINT|GATEWAY|UNKNOWN)/", $this->container['nodeType'])) {
                $invalidProperties[] = "invalid value for 'nodeType', must be conform to the pattern /(ENDPOINT|GATEWAY|UNKNOWN)/.";
            }
            if (!is_null($this->container['fwVersion']) && (mb_strlen($this->container['fwVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'fwVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['swVersion']) && (mb_strlen($this->container['swVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'swVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['deviceSdkVersion']) && (mb_strlen($this->container['deviceSdkVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'deviceSdkVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['productId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['productId'])) {
                $invalidProperties[] = "invalid value for 'productId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
            if (!is_null($this->container['productName']) && !preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/", $this->container['productName'])) {
                $invalidProperties[] = "invalid value for 'productName', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/.";
            }
            if (!is_null($this->container['status']) && !preg_match("/(ONLINE|OFFLINE|ABNORMAL|INACTIVE|FROZEN)/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /(ONLINE|OFFLINE|ABNORMAL|INACTIVE|FROZEN)/.";
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
    * Gets appId
    *  资源空间ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 资源空间ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  资源空间名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 资源空间名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets deviceId
    *  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。
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
    * @param string|null $nodeId 设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets gatewayId
    *  网关ID，用于标识设备所属的父设备，即父设备的设备ID。当设备是直连设备时，gateway_id与设备的device_id一致。当设备是非直连设备时，gateway_id为设备所关联的父设备的device_id。
    *
    * @return string|null
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string|null $gatewayId 网关ID，用于标识设备所属的父设备，即父设备的设备ID。当设备是直连设备时，gateway_id与设备的device_id一致。当设备是非直连设备时，gateway_id为设备所关联的父设备的device_id。
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets deviceName
    *  设备名称。
    *
    * @return string|null
    */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
    * Sets deviceName
    *
    * @param string|null $deviceName 设备名称。
    *
    * @return $this
    */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;
        return $this;
    }

    /**
    * Gets nodeType
    *  设备节点类型。 - ENDPOINT：非直连设备。 - GATEWAY：直连设备或网关。 - UNKNOWN：未知。
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 设备节点类型。 - ENDPOINT：非直连设备。 - GATEWAY：直连设备或网关。 - UNKNOWN：未知。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets fwVersion
    *  设备的固件版本。
    *
    * @return string|null
    */
    public function getFwVersion()
    {
        return $this->container['fwVersion'];
    }

    /**
    * Sets fwVersion
    *
    * @param string|null $fwVersion 设备的固件版本。
    *
    * @return $this
    */
    public function setFwVersion($fwVersion)
    {
        $this->container['fwVersion'] = $fwVersion;
        return $this;
    }

    /**
    * Gets swVersion
    *  设备的软件版本。
    *
    * @return string|null
    */
    public function getSwVersion()
    {
        return $this->container['swVersion'];
    }

    /**
    * Sets swVersion
    *
    * @param string|null $swVersion 设备的软件版本。
    *
    * @return $this
    */
    public function setSwVersion($swVersion)
    {
        $this->container['swVersion'] = $swVersion;
        return $this;
    }

    /**
    * Gets deviceSdkVersion
    *  设备的sdk信息。
    *
    * @return string|null
    */
    public function getDeviceSdkVersion()
    {
        return $this->container['deviceSdkVersion'];
    }

    /**
    * Sets deviceSdkVersion
    *
    * @param string|null $deviceSdkVersion 设备的sdk信息。
    *
    * @return $this
    */
    public function setDeviceSdkVersion($deviceSdkVersion)
    {
        $this->container['deviceSdkVersion'] = $deviceSdkVersion;
        return $this;
    }

    /**
    * Gets productId
    *  设备关联的产品ID，用于唯一标识一个产品模型。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 设备关联的产品ID，用于唯一标识一个产品模型。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productName
    *  设备关联的产品名称。
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 设备关联的产品名称。
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets groups
    *  设备组列表。
    *
    * @return object|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param object|null $groups 设备组列表。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets status
    *  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tags
    *  设备的标签列表。
    *
    * @return object|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param object|null $tags 设备的标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets marker
    *  搜索结果记录Id。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 搜索结果记录Id。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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


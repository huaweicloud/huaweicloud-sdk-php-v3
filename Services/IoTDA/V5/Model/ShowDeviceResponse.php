<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeviceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeviceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  资源空间ID。
    * appName  资源空间名称。
    * deviceId  设备ID，用于唯一标识一个设备。在注册设备时直接指定，或者由物联网平台分配获得。由物联网平台分配时，生成规则为\"product_id\" + \"_\" + \"node_id\"拼接而成。
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。
    * gatewayId  网关ID，用于标识设备所属的父设备，即父设备的设备ID。当设备是直连设备时，gateway_id与设备的device_id一致。当设备是非直连设备时，gateway_id为设备所关联的父设备的device_id。
    * deviceName  设备名称。
    * nodeType  设备节点类型。 - ENDPOINT：非直连设备。 - GATEWAY：直连设备或网关。 - UNKNOWN：未知。
    * description  设备的描述信息。
    * fwVersion  设备的固件版本。
    * swVersion  设备的软件版本。
    * deviceSdkVersion  设备的sdk信息。
    * authInfo  authInfo
    * productId  设备关联的产品ID，用于唯一标识一个产品模型。
    * productName  设备关联的产品名称。
    * status  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    * createTime  在物联网平台注册设备的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * connectionStatusUpdateTime  设备最近一次连接状态(ONLINE:在线，OFFLINE：离线，ABNORMAL：异常)变化时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    * activeTime  设备激活时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    * tags  设备的标签列表。
    * modules  设备的OTA模块列表。
    * extensionInfo  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。
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
            'description' => 'string',
            'fwVersion' => 'string',
            'swVersion' => 'string',
            'deviceSdkVersion' => 'string',
            'authInfo' => '\HuaweiCloud\SDK\IoTDA\V5\Model\AuthInfoRes',
            'productId' => 'string',
            'productName' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'connectionStatusUpdateTime' => 'string',
            'activeTime' => 'string',
            'tags' => '\HuaweiCloud\SDK\IoTDA\V5\Model\TagV5DTO[]',
            'modules' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ModuleDTO[]',
            'extensionInfo' => 'object'
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
    * description  设备的描述信息。
    * fwVersion  设备的固件版本。
    * swVersion  设备的软件版本。
    * deviceSdkVersion  设备的sdk信息。
    * authInfo  authInfo
    * productId  设备关联的产品ID，用于唯一标识一个产品模型。
    * productName  设备关联的产品名称。
    * status  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    * createTime  在物联网平台注册设备的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * connectionStatusUpdateTime  设备最近一次连接状态(ONLINE:在线，OFFLINE：离线，ABNORMAL：异常)变化时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    * activeTime  设备激活时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    * tags  设备的标签列表。
    * modules  设备的OTA模块列表。
    * extensionInfo  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。
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
        'description' => null,
        'fwVersion' => null,
        'swVersion' => null,
        'deviceSdkVersion' => null,
        'authInfo' => null,
        'productId' => null,
        'productName' => null,
        'status' => null,
        'createTime' => null,
        'connectionStatusUpdateTime' => null,
        'activeTime' => null,
        'tags' => null,
        'modules' => null,
        'extensionInfo' => null
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
    * description  设备的描述信息。
    * fwVersion  设备的固件版本。
    * swVersion  设备的软件版本。
    * deviceSdkVersion  设备的sdk信息。
    * authInfo  authInfo
    * productId  设备关联的产品ID，用于唯一标识一个产品模型。
    * productName  设备关联的产品名称。
    * status  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    * createTime  在物联网平台注册设备的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * connectionStatusUpdateTime  设备最近一次连接状态(ONLINE:在线，OFFLINE：离线，ABNORMAL：异常)变化时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    * activeTime  设备激活时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    * tags  设备的标签列表。
    * modules  设备的OTA模块列表。
    * extensionInfo  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。
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
            'description' => 'description',
            'fwVersion' => 'fw_version',
            'swVersion' => 'sw_version',
            'deviceSdkVersion' => 'device_sdk_version',
            'authInfo' => 'auth_info',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'status' => 'status',
            'createTime' => 'create_time',
            'connectionStatusUpdateTime' => 'connection_status_update_time',
            'activeTime' => 'active_time',
            'tags' => 'tags',
            'modules' => 'modules',
            'extensionInfo' => 'extension_info'
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
    * description  设备的描述信息。
    * fwVersion  设备的固件版本。
    * swVersion  设备的软件版本。
    * deviceSdkVersion  设备的sdk信息。
    * authInfo  authInfo
    * productId  设备关联的产品ID，用于唯一标识一个产品模型。
    * productName  设备关联的产品名称。
    * status  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    * createTime  在物联网平台注册设备的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * connectionStatusUpdateTime  设备最近一次连接状态(ONLINE:在线，OFFLINE：离线，ABNORMAL：异常)变化时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    * activeTime  设备激活时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    * tags  设备的标签列表。
    * modules  设备的OTA模块列表。
    * extensionInfo  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。
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
            'description' => 'setDescription',
            'fwVersion' => 'setFwVersion',
            'swVersion' => 'setSwVersion',
            'deviceSdkVersion' => 'setDeviceSdkVersion',
            'authInfo' => 'setAuthInfo',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'connectionStatusUpdateTime' => 'setConnectionStatusUpdateTime',
            'activeTime' => 'setActiveTime',
            'tags' => 'setTags',
            'modules' => 'setModules',
            'extensionInfo' => 'setExtensionInfo'
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
    * description  设备的描述信息。
    * fwVersion  设备的固件版本。
    * swVersion  设备的软件版本。
    * deviceSdkVersion  设备的sdk信息。
    * authInfo  authInfo
    * productId  设备关联的产品ID，用于唯一标识一个产品模型。
    * productName  设备关联的产品名称。
    * status  设备的状态。 - ONLINE：设备在线。 - OFFLINE：设备离线。 - ABNORMAL：设备异常。 - INACTIVE：设备未激活。 - FROZEN：设备冻结。
    * createTime  在物联网平台注册设备的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * connectionStatusUpdateTime  设备最近一次连接状态(ONLINE:在线，OFFLINE：离线，ABNORMAL：异常)变化时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    * activeTime  设备激活时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    * tags  设备的标签列表。
    * modules  设备的OTA模块列表。
    * extensionInfo  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。
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
            'description' => 'getDescription',
            'fwVersion' => 'getFwVersion',
            'swVersion' => 'getSwVersion',
            'deviceSdkVersion' => 'getDeviceSdkVersion',
            'authInfo' => 'getAuthInfo',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'connectionStatusUpdateTime' => 'getConnectionStatusUpdateTime',
            'activeTime' => 'getActiveTime',
            'tags' => 'getTags',
            'modules' => 'getModules',
            'extensionInfo' => 'getExtensionInfo'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['fwVersion'] = isset($data['fwVersion']) ? $data['fwVersion'] : null;
        $this->container['swVersion'] = isset($data['swVersion']) ? $data['swVersion'] : null;
        $this->container['deviceSdkVersion'] = isset($data['deviceSdkVersion']) ? $data['deviceSdkVersion'] : null;
        $this->container['authInfo'] = isset($data['authInfo']) ? $data['authInfo'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['connectionStatusUpdateTime'] = isset($data['connectionStatusUpdateTime']) ? $data['connectionStatusUpdateTime'] : null;
        $this->container['activeTime'] = isset($data['activeTime']) ? $data['activeTime'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['extensionInfo'] = isset($data['extensionInfo']) ? $data['extensionInfo'] : null;
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
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
    * Gets description
    *  设备的描述信息。
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
    * @param string|null $description 设备的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets authInfo
    *  authInfo
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\AuthInfoRes|null
    */
    public function getAuthInfo()
    {
        return $this->container['authInfo'];
    }

    /**
    * Sets authInfo
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\AuthInfoRes|null $authInfo authInfo
    *
    * @return $this
    */
    public function setAuthInfo($authInfo)
    {
        $this->container['authInfo'] = $authInfo;
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
    * Gets createTime
    *  在物联网平台注册设备的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
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
    * @param string|null $createTime 在物联网平台注册设备的时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets connectionStatusUpdateTime
    *  设备最近一次连接状态(ONLINE:在线，OFFLINE：离线，ABNORMAL：异常)变化时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    *
    * @return string|null
    */
    public function getConnectionStatusUpdateTime()
    {
        return $this->container['connectionStatusUpdateTime'];
    }

    /**
    * Sets connectionStatusUpdateTime
    *
    * @param string|null $connectionStatusUpdateTime 设备最近一次连接状态(ONLINE:在线，OFFLINE：离线，ABNORMAL：异常)变化时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    *
    * @return $this
    */
    public function setConnectionStatusUpdateTime($connectionStatusUpdateTime)
    {
        $this->container['connectionStatusUpdateTime'] = $connectionStatusUpdateTime;
        return $this;
    }

    /**
    * Gets activeTime
    *  设备激活时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    *
    * @return string|null
    */
    public function getActiveTime()
    {
        return $this->container['activeTime'];
    }

    /**
    * Sets activeTime
    *
    * @param string|null $activeTime 设备激活时间。格式：yyyy-MM-dd'T'HH:mm:ss.SSS'Z' ，如2015-12-12T12:12:122Z。
    *
    * @return $this
    */
    public function setActiveTime($activeTime)
    {
        $this->container['activeTime'] = $activeTime;
        return $this;
    }

    /**
    * Gets tags
    *  设备的标签列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\TagV5DTO[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\TagV5DTO[]|null $tags 设备的标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets modules
    *  设备的OTA模块列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ModuleDTO[]|null
    */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
    * Sets modules
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ModuleDTO[]|null $modules 设备的OTA模块列表。
    *
    * @return $this
    */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;
        return $this;
    }

    /**
    * Gets extensionInfo
    *  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。
    *
    * @return object|null
    */
    public function getExtensionInfo()
    {
        return $this->container['extensionInfo'];
    }

    /**
    * Sets extensionInfo
    *
    * @param object|null $extensionInfo 设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。
    *
    * @return $this
    */
    public function setExtensionInfo($extensionInfo)
    {
        $this->container['extensionInfo'] = $extensionInfo;
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


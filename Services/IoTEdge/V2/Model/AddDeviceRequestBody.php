<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddDeviceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddDeviceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。（注意:NB设备由于模组烧录信息后无法配置，所以NB设备会校验node_id全局唯一。）
    * deviceName  设备名称。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    * authInfo  authInfo
    * description  设备的描述信息。
    * gatewayId  父设备ID，用于标识设备所属的父设备。携带该参数时，表示在该父设备下创建一个子设备，这个子设备不与平台直连，此时必须保证这个父设备在平台已存在，创建成功后子设备的gateway_id等于该参数值；不携带该参数时，表示创建一个和平台直连的设备，创建成功后设备的device_id和gateway_id一致。
    * spaceId  资源空间Id。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定注册的设备归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    * extensionInfo  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。字段值大小上限为1K。 追加：如果通过EdgeHub, EdgeAccess进行设备接入，不需要携带extension_info；如果通过用户自定义的应用进行边缘设备接入，则携带模块id参数作为extension_info, 例如：{\\\"module_id\":\\\"user_xxx\"}
    * config  设备初始配置。用户使用该字段可以为设备指定初始配置，指定后将会根据service_id和desired设置的属性值与产品中对应属性的默认值比对，如果不同，则将以设置的属性值为准写入到设备配置中。例如连接MQTT设备，配置接入平台密码，携带该参数{\\\"password\":\\\"xxxxxxxx\"}
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'deviceName' => 'string',
            'productId' => 'string',
            'authInfo' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\EdgeDeviceAuthInfo',
            'description' => 'string',
            'gatewayId' => 'string',
            'spaceId' => 'string',
            'extensionInfo' => 'object',
            'config' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。（注意:NB设备由于模组烧录信息后无法配置，所以NB设备会校验node_id全局唯一。）
    * deviceName  设备名称。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    * authInfo  authInfo
    * description  设备的描述信息。
    * gatewayId  父设备ID，用于标识设备所属的父设备。携带该参数时，表示在该父设备下创建一个子设备，这个子设备不与平台直连，此时必须保证这个父设备在平台已存在，创建成功后子设备的gateway_id等于该参数值；不携带该参数时，表示创建一个和平台直连的设备，创建成功后设备的device_id和gateway_id一致。
    * spaceId  资源空间Id。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定注册的设备归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    * extensionInfo  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。字段值大小上限为1K。 追加：如果通过EdgeHub, EdgeAccess进行设备接入，不需要携带extension_info；如果通过用户自定义的应用进行边缘设备接入，则携带模块id参数作为extension_info, 例如：{\\\"module_id\":\\\"user_xxx\"}
    * config  设备初始配置。用户使用该字段可以为设备指定初始配置，指定后将会根据service_id和desired设置的属性值与产品中对应属性的默认值比对，如果不同，则将以设置的属性值为准写入到设备配置中。例如连接MQTT设备，配置接入平台密码，携带该参数{\\\"password\":\\\"xxxxxxxx\"}
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'deviceName' => null,
        'productId' => null,
        'authInfo' => null,
        'description' => null,
        'gatewayId' => null,
        'spaceId' => null,
        'extensionInfo' => null,
        'config' => null
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
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。（注意:NB设备由于模组烧录信息后无法配置，所以NB设备会校验node_id全局唯一。）
    * deviceName  设备名称。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    * authInfo  authInfo
    * description  设备的描述信息。
    * gatewayId  父设备ID，用于标识设备所属的父设备。携带该参数时，表示在该父设备下创建一个子设备，这个子设备不与平台直连，此时必须保证这个父设备在平台已存在，创建成功后子设备的gateway_id等于该参数值；不携带该参数时，表示创建一个和平台直连的设备，创建成功后设备的device_id和gateway_id一致。
    * spaceId  资源空间Id。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定注册的设备归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    * extensionInfo  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。字段值大小上限为1K。 追加：如果通过EdgeHub, EdgeAccess进行设备接入，不需要携带extension_info；如果通过用户自定义的应用进行边缘设备接入，则携带模块id参数作为extension_info, 例如：{\\\"module_id\":\\\"user_xxx\"}
    * config  设备初始配置。用户使用该字段可以为设备指定初始配置，指定后将会根据service_id和desired设置的属性值与产品中对应属性的默认值比对，如果不同，则将以设置的属性值为准写入到设备配置中。例如连接MQTT设备，配置接入平台密码，携带该参数{\\\"password\":\\\"xxxxxxxx\"}
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'deviceName' => 'device_name',
            'productId' => 'product_id',
            'authInfo' => 'auth_info',
            'description' => 'description',
            'gatewayId' => 'gateway_id',
            'spaceId' => 'space_id',
            'extensionInfo' => 'extension_info',
            'config' => 'config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。（注意:NB设备由于模组烧录信息后无法配置，所以NB设备会校验node_id全局唯一。）
    * deviceName  设备名称。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    * authInfo  authInfo
    * description  设备的描述信息。
    * gatewayId  父设备ID，用于标识设备所属的父设备。携带该参数时，表示在该父设备下创建一个子设备，这个子设备不与平台直连，此时必须保证这个父设备在平台已存在，创建成功后子设备的gateway_id等于该参数值；不携带该参数时，表示创建一个和平台直连的设备，创建成功后设备的device_id和gateway_id一致。
    * spaceId  资源空间Id。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定注册的设备归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    * extensionInfo  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。字段值大小上限为1K。 追加：如果通过EdgeHub, EdgeAccess进行设备接入，不需要携带extension_info；如果通过用户自定义的应用进行边缘设备接入，则携带模块id参数作为extension_info, 例如：{\\\"module_id\":\\\"user_xxx\"}
    * config  设备初始配置。用户使用该字段可以为设备指定初始配置，指定后将会根据service_id和desired设置的属性值与产品中对应属性的默认值比对，如果不同，则将以设置的属性值为准写入到设备配置中。例如连接MQTT设备，配置接入平台密码，携带该参数{\\\"password\":\\\"xxxxxxxx\"}
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'deviceName' => 'setDeviceName',
            'productId' => 'setProductId',
            'authInfo' => 'setAuthInfo',
            'description' => 'setDescription',
            'gatewayId' => 'setGatewayId',
            'spaceId' => 'setSpaceId',
            'extensionInfo' => 'setExtensionInfo',
            'config' => 'setConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。（注意:NB设备由于模组烧录信息后无法配置，所以NB设备会校验node_id全局唯一。）
    * deviceName  设备名称。
    * productId  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    * authInfo  authInfo
    * description  设备的描述信息。
    * gatewayId  父设备ID，用于标识设备所属的父设备。携带该参数时，表示在该父设备下创建一个子设备，这个子设备不与平台直连，此时必须保证这个父设备在平台已存在，创建成功后子设备的gateway_id等于该参数值；不携带该参数时，表示创建一个和平台直连的设备，创建成功后设备的device_id和gateway_id一致。
    * spaceId  资源空间Id。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定注册的设备归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    * extensionInfo  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。字段值大小上限为1K。 追加：如果通过EdgeHub, EdgeAccess进行设备接入，不需要携带extension_info；如果通过用户自定义的应用进行边缘设备接入，则携带模块id参数作为extension_info, 例如：{\\\"module_id\":\\\"user_xxx\"}
    * config  设备初始配置。用户使用该字段可以为设备指定初始配置，指定后将会根据service_id和desired设置的属性值与产品中对应属性的默认值比对，如果不同，则将以设置的属性值为准写入到设备配置中。例如连接MQTT设备，配置接入平台密码，携带该参数{\\\"password\":\\\"xxxxxxxx\"}
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'deviceName' => 'getDeviceName',
            'productId' => 'getProductId',
            'authInfo' => 'getAuthInfo',
            'description' => 'getDescription',
            'gatewayId' => 'getGatewayId',
            'spaceId' => 'getSpaceId',
            'extensionInfo' => 'getExtensionInfo',
            'config' => 'getConfig'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['authInfo'] = isset($data['authInfo']) ? $data['authInfo'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
        $this->container['extensionInfo'] = isset($data['extensionInfo']) ? $data['extensionInfo'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
            if ((mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['nodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['nodeId'])) {
                $invalidProperties[] = "invalid value for 'nodeId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['deviceName']) && (mb_strlen($this->container['deviceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'deviceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['deviceName']) && (mb_strlen($this->container['deviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'deviceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['deviceName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/", $this->container['deviceName'])) {
                $invalidProperties[] = "invalid value for 'deviceName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/.";
            }
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
            if ((mb_strlen($this->container['productId']) > 36)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['productId']) < 1)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-f0-9-]*$/", $this->container['productId'])) {
                $invalidProperties[] = "invalid value for 'productId', must be conform to the pattern /^[a-f0-9-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/.";
            }
            if (!is_null($this->container['gatewayId']) && !preg_match("/^[a-zA-Z0-9_-]{1,128}$/", $this->container['gatewayId'])) {
                $invalidProperties[] = "invalid value for 'gatewayId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,128}$/.";
            }
            if (!is_null($this->container['spaceId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['spaceId'])) {
                $invalidProperties[] = "invalid value for 'spaceId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
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
    * Gets nodeId
    *  设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。（注意:NB设备由于模组烧录信息后无法配置，所以NB设备会校验node_id全局唯一。）
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 设备标识码，通常使用IMEI、MAC地址或Serial No作为node_id。（注意:NB设备由于模组烧录信息后无法配置，所以NB设备会校验node_id全局唯一。）
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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
    * Gets productId
    *  设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    *
    * @return string
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string $productId 设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets authInfo
    *  authInfo
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\EdgeDeviceAuthInfo|null
    */
    public function getAuthInfo()
    {
        return $this->container['authInfo'];
    }

    /**
    * Sets authInfo
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\EdgeDeviceAuthInfo|null $authInfo authInfo
    *
    * @return $this
    */
    public function setAuthInfo($authInfo)
    {
        $this->container['authInfo'] = $authInfo;
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
    * Gets gatewayId
    *  父设备ID，用于标识设备所属的父设备。携带该参数时，表示在该父设备下创建一个子设备，这个子设备不与平台直连，此时必须保证这个父设备在平台已存在，创建成功后子设备的gateway_id等于该参数值；不携带该参数时，表示创建一个和平台直连的设备，创建成功后设备的device_id和gateway_id一致。
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
    * @param string|null $gatewayId 父设备ID，用于标识设备所属的父设备。携带该参数时，表示在该父设备下创建一个子设备，这个子设备不与平台直连，此时必须保证这个父设备在平台已存在，创建成功后子设备的gateway_id等于该参数值；不携带该参数时，表示创建一个和平台直连的设备，创建成功后设备的device_id和gateway_id一致。
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets spaceId
    *  资源空间Id。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定注册的设备归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    *
    * @return string|null
    */
    public function getSpaceId()
    {
        return $this->container['spaceId'];
    }

    /**
    * Sets spaceId
    *
    * @param string|null $spaceId 资源空间Id。此参数为非必选参数，用于兼容平台老用户存在多应用的场景。存在多应用的用户需要使用该接口时，必须携带该参数指定注册的设备归属到哪个应用下，否则接口会提示错误。如果用户存在多应用，同时又不想携带该参数，可以联系华为技术支持对用户数据做应用合并。
    *
    * @return $this
    */
    public function setSpaceId($spaceId)
    {
        $this->container['spaceId'] = $spaceId;
        return $this;
    }

    /**
    * Gets extensionInfo
    *  设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。字段值大小上限为1K。 追加：如果通过EdgeHub, EdgeAccess进行设备接入，不需要携带extension_info；如果通过用户自定义的应用进行边缘设备接入，则携带模块id参数作为extension_info, 例如：{\\\"module_id\":\\\"user_xxx\"}
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
    * @param object|null $extensionInfo 设备扩展信息。用户可以自定义任何想要的扩展信息，如果在创建设备时为子设备指定该字段，将会通过MQTT接口“平台通知网关子设备新增“将该信息通知给网关。字段值大小上限为1K。 追加：如果通过EdgeHub, EdgeAccess进行设备接入，不需要携带extension_info；如果通过用户自定义的应用进行边缘设备接入，则携带模块id参数作为extension_info, 例如：{\\\"module_id\":\\\"user_xxx\"}
    *
    * @return $this
    */
    public function setExtensionInfo($extensionInfo)
    {
        $this->container['extensionInfo'] = $extensionInfo;
        return $this;
    }

    /**
    * Gets config
    *  设备初始配置。用户使用该字段可以为设备指定初始配置，指定后将会根据service_id和desired设置的属性值与产品中对应属性的默认值比对，如果不同，则将以设置的属性值为准写入到设备配置中。例如连接MQTT设备，配置接入平台密码，携带该参数{\\\"password\":\\\"xxxxxxxx\"}
    *
    * @return object|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param object|null $config 设备初始配置。用户使用该字段可以为设备指定初始配置，指定后将会根据service_id和desired设置的属性值与产品中对应属性的默认值比对，如果不同，则将以设置的属性值为准写入到设备配置中。例如连接MQTT设备，配置接入平台密码，携带该参数{\\\"password\":\\\"xxxxxxxx\"}
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
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


<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeDevServerOSResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeDevServerOSResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需模式 - [PRE_PAID：包周期](tag:hws,hws_hk)
    * cloudServer  cloudServer
    * endpointsResponse  **参数解释**：实例私有IP信息。
    * flavor  **参数解释**：实例规格名称。 **取值范围**：^.{1,128}$。
    * id  **参数解释**：实例ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * keyPairName  **参数解释**：密钥对名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    * name  **参数解释**：实例名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    * orderId  **参数解释**：订单ID。 **取值范围**：^[a-zA-Z0-9]{1,64}$。
    * status  **参数解释**：实例状态。表示实例的当前运行状态，用于监控实例的生命周期和健康状况。 **取值范围**： - CREATE_FAILED: 创建失败 - CREATING: 创建中 - DELETED: 已删除 - DELETE_FAILED: 删除失败 - DELETING: 删除中 - ERROR: 错误 - RUNNING: 运行中 - STARTING: 启动中 - START_FAILED: 启动失败 - STOPPED: 已停止 - STOPPING: 停止中 - STOP_FAILED: 停止失败 - REBOOTING: 重启中 - REBOOT_FAILED: 重启失败 - CHANGINGOS: 切换操作系统中 - CHANGINGOS_FAILED: 切换操作系统失败 - REINSTALLINGOS: 重装操作系统中 - REINSTALLINGOS_FAILED: 重装操作系统失败
    * vpcId  **参数解释**：实例所在虚拟私有云ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * endpoints  **参数解释**：服务器私有IP信息。
    * volumes  **参数解释**：挂载硬盘信息。
    * image  image
    * category  **参数解释**：服务器归属类型。 **取值范围**： - [HPS：超节点服务器](tag:hws,hws_hk) - [SPOD：整柜服务器](tag:hws,hws_hk) - [SERVER：单台服务器](tag:hws,hws_hk)
    * serverHps  serverHps
    * subnetId  **参数解释**：实例所在子网的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createAt' => 'int',
            'updateAt' => 'int',
            'chargingMode' => 'string',
            'cloudServer' => '\HuaweiCloud\SDK\ModelArts\V1\Model\CloudServer',
            'endpointsResponse' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Endpoints[]',
            'flavor' => 'string',
            'id' => 'string',
            'keyPairName' => 'string',
            'name' => 'string',
            'orderId' => 'string',
            'status' => 'string',
            'vpcId' => 'string',
            'endpoints' => '\HuaweiCloud\SDK\ModelArts\V1\Model\EndpointsRes[]',
            'volumes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerVolume[]',
            'image' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerImageResponse',
            'category' => 'string',
            'serverHps' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerHpsInfo',
            'subnetId' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需模式 - [PRE_PAID：包周期](tag:hws,hws_hk)
    * cloudServer  cloudServer
    * endpointsResponse  **参数解释**：实例私有IP信息。
    * flavor  **参数解释**：实例规格名称。 **取值范围**：^.{1,128}$。
    * id  **参数解释**：实例ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * keyPairName  **参数解释**：密钥对名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    * name  **参数解释**：实例名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    * orderId  **参数解释**：订单ID。 **取值范围**：^[a-zA-Z0-9]{1,64}$。
    * status  **参数解释**：实例状态。表示实例的当前运行状态，用于监控实例的生命周期和健康状况。 **取值范围**： - CREATE_FAILED: 创建失败 - CREATING: 创建中 - DELETED: 已删除 - DELETE_FAILED: 删除失败 - DELETING: 删除中 - ERROR: 错误 - RUNNING: 运行中 - STARTING: 启动中 - START_FAILED: 启动失败 - STOPPED: 已停止 - STOPPING: 停止中 - STOP_FAILED: 停止失败 - REBOOTING: 重启中 - REBOOT_FAILED: 重启失败 - CHANGINGOS: 切换操作系统中 - CHANGINGOS_FAILED: 切换操作系统失败 - REINSTALLINGOS: 重装操作系统中 - REINSTALLINGOS_FAILED: 重装操作系统失败
    * vpcId  **参数解释**：实例所在虚拟私有云ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * endpoints  **参数解释**：服务器私有IP信息。
    * volumes  **参数解释**：挂载硬盘信息。
    * image  image
    * category  **参数解释**：服务器归属类型。 **取值范围**： - [HPS：超节点服务器](tag:hws,hws_hk) - [SPOD：整柜服务器](tag:hws,hws_hk) - [SERVER：单台服务器](tag:hws,hws_hk)
    * serverHps  serverHps
    * subnetId  **参数解释**：实例所在子网的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createAt' => 'int64',
        'updateAt' => 'int64',
        'chargingMode' => null,
        'cloudServer' => null,
        'endpointsResponse' => null,
        'flavor' => null,
        'id' => null,
        'keyPairName' => null,
        'name' => null,
        'orderId' => null,
        'status' => null,
        'vpcId' => null,
        'endpoints' => null,
        'volumes' => null,
        'image' => null,
        'category' => null,
        'serverHps' => null,
        'subnetId' => null,
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
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需模式 - [PRE_PAID：包周期](tag:hws,hws_hk)
    * cloudServer  cloudServer
    * endpointsResponse  **参数解释**：实例私有IP信息。
    * flavor  **参数解释**：实例规格名称。 **取值范围**：^.{1,128}$。
    * id  **参数解释**：实例ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * keyPairName  **参数解释**：密钥对名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    * name  **参数解释**：实例名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    * orderId  **参数解释**：订单ID。 **取值范围**：^[a-zA-Z0-9]{1,64}$。
    * status  **参数解释**：实例状态。表示实例的当前运行状态，用于监控实例的生命周期和健康状况。 **取值范围**： - CREATE_FAILED: 创建失败 - CREATING: 创建中 - DELETED: 已删除 - DELETE_FAILED: 删除失败 - DELETING: 删除中 - ERROR: 错误 - RUNNING: 运行中 - STARTING: 启动中 - START_FAILED: 启动失败 - STOPPED: 已停止 - STOPPING: 停止中 - STOP_FAILED: 停止失败 - REBOOTING: 重启中 - REBOOT_FAILED: 重启失败 - CHANGINGOS: 切换操作系统中 - CHANGINGOS_FAILED: 切换操作系统失败 - REINSTALLINGOS: 重装操作系统中 - REINSTALLINGOS_FAILED: 重装操作系统失败
    * vpcId  **参数解释**：实例所在虚拟私有云ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * endpoints  **参数解释**：服务器私有IP信息。
    * volumes  **参数解释**：挂载硬盘信息。
    * image  image
    * category  **参数解释**：服务器归属类型。 **取值范围**： - [HPS：超节点服务器](tag:hws,hws_hk) - [SPOD：整柜服务器](tag:hws,hws_hk) - [SERVER：单台服务器](tag:hws,hws_hk)
    * serverHps  serverHps
    * subnetId  **参数解释**：实例所在子网的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'chargingMode' => 'charging_mode',
            'cloudServer' => 'cloud_server',
            'endpointsResponse' => 'endpoints_response',
            'flavor' => 'flavor',
            'id' => 'id',
            'keyPairName' => 'key_pair_name',
            'name' => 'name',
            'orderId' => 'order_id',
            'status' => 'status',
            'vpcId' => 'vpc_id',
            'endpoints' => 'endpoints',
            'volumes' => 'volumes',
            'image' => 'image',
            'category' => 'category',
            'serverHps' => 'server_hps',
            'subnetId' => 'subnet_id',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需模式 - [PRE_PAID：包周期](tag:hws,hws_hk)
    * cloudServer  cloudServer
    * endpointsResponse  **参数解释**：实例私有IP信息。
    * flavor  **参数解释**：实例规格名称。 **取值范围**：^.{1,128}$。
    * id  **参数解释**：实例ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * keyPairName  **参数解释**：密钥对名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    * name  **参数解释**：实例名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    * orderId  **参数解释**：订单ID。 **取值范围**：^[a-zA-Z0-9]{1,64}$。
    * status  **参数解释**：实例状态。表示实例的当前运行状态，用于监控实例的生命周期和健康状况。 **取值范围**： - CREATE_FAILED: 创建失败 - CREATING: 创建中 - DELETED: 已删除 - DELETE_FAILED: 删除失败 - DELETING: 删除中 - ERROR: 错误 - RUNNING: 运行中 - STARTING: 启动中 - START_FAILED: 启动失败 - STOPPED: 已停止 - STOPPING: 停止中 - STOP_FAILED: 停止失败 - REBOOTING: 重启中 - REBOOT_FAILED: 重启失败 - CHANGINGOS: 切换操作系统中 - CHANGINGOS_FAILED: 切换操作系统失败 - REINSTALLINGOS: 重装操作系统中 - REINSTALLINGOS_FAILED: 重装操作系统失败
    * vpcId  **参数解释**：实例所在虚拟私有云ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * endpoints  **参数解释**：服务器私有IP信息。
    * volumes  **参数解释**：挂载硬盘信息。
    * image  image
    * category  **参数解释**：服务器归属类型。 **取值范围**： - [HPS：超节点服务器](tag:hws,hws_hk) - [SPOD：整柜服务器](tag:hws,hws_hk) - [SERVER：单台服务器](tag:hws,hws_hk)
    * serverHps  serverHps
    * subnetId  **参数解释**：实例所在子网的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'chargingMode' => 'setChargingMode',
            'cloudServer' => 'setCloudServer',
            'endpointsResponse' => 'setEndpointsResponse',
            'flavor' => 'setFlavor',
            'id' => 'setId',
            'keyPairName' => 'setKeyPairName',
            'name' => 'setName',
            'orderId' => 'setOrderId',
            'status' => 'setStatus',
            'vpcId' => 'setVpcId',
            'endpoints' => 'setEndpoints',
            'volumes' => 'setVolumes',
            'image' => 'setImage',
            'category' => 'setCategory',
            'serverHps' => 'setServerHps',
            'subnetId' => 'setSubnetId',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createAt  **参数解释**：创建时间。 **取值范围**：不涉及。
    * updateAt  **参数解释**：更新时间。 **取值范围**：不涉及。
    * chargingMode  **参数解释**：计费模式。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需模式 - [PRE_PAID：包周期](tag:hws,hws_hk)
    * cloudServer  cloudServer
    * endpointsResponse  **参数解释**：实例私有IP信息。
    * flavor  **参数解释**：实例规格名称。 **取值范围**：^.{1,128}$。
    * id  **参数解释**：实例ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * keyPairName  **参数解释**：密钥对名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    * name  **参数解释**：实例名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    * orderId  **参数解释**：订单ID。 **取值范围**：^[a-zA-Z0-9]{1,64}$。
    * status  **参数解释**：实例状态。表示实例的当前运行状态，用于监控实例的生命周期和健康状况。 **取值范围**： - CREATE_FAILED: 创建失败 - CREATING: 创建中 - DELETED: 已删除 - DELETE_FAILED: 删除失败 - DELETING: 删除中 - ERROR: 错误 - RUNNING: 运行中 - STARTING: 启动中 - START_FAILED: 启动失败 - STOPPED: 已停止 - STOPPING: 停止中 - STOP_FAILED: 停止失败 - REBOOTING: 重启中 - REBOOT_FAILED: 重启失败 - CHANGINGOS: 切换操作系统中 - CHANGINGOS_FAILED: 切换操作系统失败 - REINSTALLINGOS: 重装操作系统中 - REINSTALLINGOS_FAILED: 重装操作系统失败
    * vpcId  **参数解释**：实例所在虚拟私有云ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * endpoints  **参数解释**：服务器私有IP信息。
    * volumes  **参数解释**：挂载硬盘信息。
    * image  image
    * category  **参数解释**：服务器归属类型。 **取值范围**： - [HPS：超节点服务器](tag:hws,hws_hk) - [SPOD：整柜服务器](tag:hws,hws_hk) - [SERVER：单台服务器](tag:hws,hws_hk)
    * serverHps  serverHps
    * subnetId  **参数解释**：实例所在子网的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'chargingMode' => 'getChargingMode',
            'cloudServer' => 'getCloudServer',
            'endpointsResponse' => 'getEndpointsResponse',
            'flavor' => 'getFlavor',
            'id' => 'getId',
            'keyPairName' => 'getKeyPairName',
            'name' => 'getName',
            'orderId' => 'getOrderId',
            'status' => 'getStatus',
            'vpcId' => 'getVpcId',
            'endpoints' => 'getEndpoints',
            'volumes' => 'getVolumes',
            'image' => 'getImage',
            'category' => 'getCategory',
            'serverHps' => 'getServerHps',
            'subnetId' => 'getSubnetId',
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
    const CHARGING_MODE_COMMON = 'COMMON';
    const CHARGING_MODE_POST_PAID = 'POST_PAID';
    const CHARGING_MODE_PRE_PAID = 'PRE_PAID';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_CREATING = 'CREATING';
    const STATUS_DELETED = 'DELETED';
    const STATUS_DELETE_FAILED = 'DELETE_FAILED';
    const STATUS_DELETING = 'DELETING';
    const STATUS_ERROR = 'ERROR';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_STARTING = 'STARTING';
    const STATUS_START_FAILED = 'START_FAILED';
    const STATUS_STOPPED = 'STOPPED';
    const STATUS_STOPPING = 'STOPPING';
    const STATUS_STOP_FAILED = 'STOP_FAILED';
    const STATUS_REBOOTING = 'REBOOTING';
    const STATUS_REBOOT_FAILED = 'REBOOT_FAILED';
    const STATUS_CHANGINGOS = 'CHANGINGOS';
    const STATUS_CHANGINGOS_FAILED = 'CHANGINGOS_FAILED';
    const STATUS_REINSTALLINGOS = 'REINSTALLINGOS';
    const STATUS_REINSTALLINGOS_FAILED = 'REINSTALLINGOS_FAILED';
    const CATEGORY_SPOD = 'SPOD';
    const CATEGORY_SERVER = 'SERVER';
    const CATEGORY_HPS = 'HPS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_COMMON,
            self::CHARGING_MODE_POST_PAID,
            self::CHARGING_MODE_PRE_PAID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATE_FAILED,
            self::STATUS_CREATING,
            self::STATUS_DELETED,
            self::STATUS_DELETE_FAILED,
            self::STATUS_DELETING,
            self::STATUS_ERROR,
            self::STATUS_RUNNING,
            self::STATUS_STARTING,
            self::STATUS_START_FAILED,
            self::STATUS_STOPPED,
            self::STATUS_STOPPING,
            self::STATUS_STOP_FAILED,
            self::STATUS_REBOOTING,
            self::STATUS_REBOOT_FAILED,
            self::STATUS_CHANGINGOS,
            self::STATUS_CHANGINGOS_FAILED,
            self::STATUS_REINSTALLINGOS,
            self::STATUS_REINSTALLINGOS_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_SPOD,
            self::CATEGORY_SERVER,
            self::CATEGORY_HPS,
        ];
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['cloudServer'] = isset($data['cloudServer']) ? $data['cloudServer'] : null;
        $this->container['endpointsResponse'] = isset($data['endpointsResponse']) ? $data['endpointsResponse'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['keyPairName'] = isset($data['keyPairName']) ? $data['keyPairName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['serverHps'] = isset($data['serverHps']) ? $data['serverHps'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
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
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['flavor']) && !preg_match("/^[a-zA-Z0-9.]{1,128}$/", $this->container['flavor'])) {
                $invalidProperties[] = "invalid value for 'flavor', must be conform to the pattern /^[a-zA-Z0-9.]{1,128}$/.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['keyPairName']) && (mb_strlen($this->container['keyPairName']) > 128)) {
                $invalidProperties[] = "invalid value for 'keyPairName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['keyPairName']) && (mb_strlen($this->container['keyPairName']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyPairName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 1)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 1.";
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
    * Gets createAt
    *  **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释**：创建时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释**：更新时间。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释**：更新时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**：计费模式。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需模式 - [PRE_PAID：包周期](tag:hws,hws_hk)
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释**：计费模式。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需模式 - [PRE_PAID：包周期](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets cloudServer
    *  cloudServer
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\CloudServer|null
    */
    public function getCloudServer()
    {
        return $this->container['cloudServer'];
    }

    /**
    * Sets cloudServer
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\CloudServer|null $cloudServer cloudServer
    *
    * @return $this
    */
    public function setCloudServer($cloudServer)
    {
        $this->container['cloudServer'] = $cloudServer;
        return $this;
    }

    /**
    * Gets endpointsResponse
    *  **参数解释**：实例私有IP信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Endpoints[]|null
    */
    public function getEndpointsResponse()
    {
        return $this->container['endpointsResponse'];
    }

    /**
    * Sets endpointsResponse
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Endpoints[]|null $endpointsResponse **参数解释**：实例私有IP信息。
    *
    * @return $this
    */
    public function setEndpointsResponse($endpointsResponse)
    {
        $this->container['endpointsResponse'] = $endpointsResponse;
        return $this;
    }

    /**
    * Gets flavor
    *  **参数解释**：实例规格名称。 **取值范围**：^.{1,128}$。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor **参数解释**：实例规格名称。 **取值范围**：^.{1,128}$。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：实例ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：实例ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets keyPairName
    *  **参数解释**：密钥对名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    *
    * @return string|null
    */
    public function getKeyPairName()
    {
        return $this->container['keyPairName'];
    }

    /**
    * Sets keyPairName
    *
    * @param string|null $keyPairName **参数解释**：密钥对名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    *
    * @return $this
    */
    public function setKeyPairName($keyPairName)
    {
        $this->container['keyPairName'] = $keyPairName;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：实例名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
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
    * @param string|null $name **参数解释**：实例名称。 **取值范围**：^[-_.a-zA-Z0-9]{1,64}$。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets orderId
    *  **参数解释**：订单ID。 **取值范围**：^[a-zA-Z0-9]{1,64}$。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId **参数解释**：订单ID。 **取值范围**：^[a-zA-Z0-9]{1,64}$。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：实例状态。表示实例的当前运行状态，用于监控实例的生命周期和健康状况。 **取值范围**： - CREATE_FAILED: 创建失败 - CREATING: 创建中 - DELETED: 已删除 - DELETE_FAILED: 删除失败 - DELETING: 删除中 - ERROR: 错误 - RUNNING: 运行中 - STARTING: 启动中 - START_FAILED: 启动失败 - STOPPED: 已停止 - STOPPING: 停止中 - STOP_FAILED: 停止失败 - REBOOTING: 重启中 - REBOOT_FAILED: 重启失败 - CHANGINGOS: 切换操作系统中 - CHANGINGOS_FAILED: 切换操作系统失败 - REINSTALLINGOS: 重装操作系统中 - REINSTALLINGOS_FAILED: 重装操作系统失败
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
    * @param string|null $status **参数解释**：实例状态。表示实例的当前运行状态，用于监控实例的生命周期和健康状况。 **取值范围**： - CREATE_FAILED: 创建失败 - CREATING: 创建中 - DELETED: 已删除 - DELETE_FAILED: 删除失败 - DELETING: 删除中 - ERROR: 错误 - RUNNING: 运行中 - STARTING: 启动中 - START_FAILED: 启动失败 - STOPPED: 已停止 - STOPPING: 停止中 - STOP_FAILED: 停止失败 - REBOOTING: 重启中 - REBOOT_FAILED: 重启失败 - CHANGINGOS: 切换操作系统中 - CHANGINGOS_FAILED: 切换操作系统失败 - REINSTALLINGOS: 重装操作系统中 - REINSTALLINGOS_FAILED: 重装操作系统失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**：实例所在虚拟私有云ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId **参数解释**：实例所在虚拟私有云ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets endpoints
    *  **参数解释**：服务器私有IP信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\EndpointsRes[]|null
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\EndpointsRes[]|null $endpoints **参数解释**：服务器私有IP信息。
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets volumes
    *  **参数解释**：挂载硬盘信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerVolume[]|null
    */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
    * Sets volumes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerVolume[]|null $volumes **参数解释**：挂载硬盘信息。
    *
    * @return $this
    */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;
        return $this;
    }

    /**
    * Gets image
    *  image
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerImageResponse|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerImageResponse|null $image image
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**：服务器归属类型。 **取值范围**： - [HPS：超节点服务器](tag:hws,hws_hk) - [SPOD：整柜服务器](tag:hws,hws_hk) - [SERVER：单台服务器](tag:hws,hws_hk)
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**：服务器归属类型。 **取值范围**： - [HPS：超节点服务器](tag:hws,hws_hk) - [SPOD：整柜服务器](tag:hws,hws_hk) - [SERVER：单台服务器](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets serverHps
    *  serverHps
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerHpsInfo|null
    */
    public function getServerHps()
    {
        return $this->container['serverHps'];
    }

    /**
    * Sets serverHps
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerHpsInfo|null $serverHps serverHps
    *
    * @return $this
    */
    public function setServerHps($serverHps)
    {
        $this->container['serverHps'] = $serverHps;
        return $this;
    }

    /**
    * Gets subnetId
    *  **参数解释**：实例所在子网的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId **参数解释**：实例所在子网的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
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


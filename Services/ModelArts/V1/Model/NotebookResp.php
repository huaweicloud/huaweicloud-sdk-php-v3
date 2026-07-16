<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotebookResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotebookResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionProgress  **参数解释**：实例初始化进度。
    * description  **参数解释**：实例描述。 **取值范围**：不涉及。
    * endpoints  **参数解释**：本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    * failReason  **参数解释**：实例失败原因。 **取值范围**：不涉及。
    * flavor  **参数解释**：实例规格， 1.当用户选择系统规格时，返回值为系统规格码； 2.当用户创建实例时选择了自定义规格，则此字段会固定返回\"custom.flavor.spec.code\"。 **取值范围**：不涉及。
    * customSpec  customSpec
    * id  **参数解释**：实例ID。 **取值范围**：不涉及。
    * image  image
    * lease  lease
    * name  **参数解释**：实例名称。 **取值范围**：不涉及。
    * pool  pool
    * status  **参数解释**：实例状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结
    * token  **参数解释**：Notebook鉴权使用的token信息。 **取值范围**：不涉及。
    * url  **参数解释**：实例访问的URL。 **取值范围**：不涉及。
    * volume  volume
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * feature  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    * billingItems  **参数解释**：计费资源类型。枚举类型，取值如下： - STORAGE：存储资源计费。 - COMPUTE：计算资源计费。 - ALL：所有计费类型。
    * user  user
    * affinity  affinity
    * runUser  runUser
    * dataVolumes  **参数解释**：扩展存储信息
    * ip  **参数解释**：实例所在节点ip。 **取值范围**：不涉及。
    * userVpc  userVpc
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    * isNeedCredentials  **参数解释**：是否需要默认创建用户secret，默认为true。 **取值范围**：不涉及。
    * jupyterVersion  **参数解释**：jupyter version版本号。 **取值范围**：不涉及。
    * tags  **参数解释**：实例标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionProgress' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobProgress[]',
            'description' => 'string',
            'endpoints' => '\HuaweiCloud\SDK\ModelArts\V1\Model\EndpointsRes[]',
            'failReason' => 'string',
            'flavor' => 'string',
            'customSpec' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NotebookCustomSpecRep',
            'id' => 'string',
            'image' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Image',
            'lease' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Lease',
            'name' => 'string',
            'pool' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Pool',
            'status' => 'string',
            'token' => 'string',
            'url' => 'string',
            'volume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\VolumeRes',
            'workspaceId' => 'string',
            'feature' => 'string',
            'billingItems' => 'string[]',
            'user' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UserResponse',
            'affinity' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AffinityType',
            'runUser' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RunUserInfo',
            'dataVolumes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\VolumeResponse[]',
            'ip' => 'string',
            'userVpc' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UserVpcResponse',
            'userId' => 'string',
            'isNeedCredentials' => 'bool',
            'jupyterVersion' => 'string',
            'tags' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TmsTagResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionProgress  **参数解释**：实例初始化进度。
    * description  **参数解释**：实例描述。 **取值范围**：不涉及。
    * endpoints  **参数解释**：本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    * failReason  **参数解释**：实例失败原因。 **取值范围**：不涉及。
    * flavor  **参数解释**：实例规格， 1.当用户选择系统规格时，返回值为系统规格码； 2.当用户创建实例时选择了自定义规格，则此字段会固定返回\"custom.flavor.spec.code\"。 **取值范围**：不涉及。
    * customSpec  customSpec
    * id  **参数解释**：实例ID。 **取值范围**：不涉及。
    * image  image
    * lease  lease
    * name  **参数解释**：实例名称。 **取值范围**：不涉及。
    * pool  pool
    * status  **参数解释**：实例状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结
    * token  **参数解释**：Notebook鉴权使用的token信息。 **取值范围**：不涉及。
    * url  **参数解释**：实例访问的URL。 **取值范围**：不涉及。
    * volume  volume
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * feature  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    * billingItems  **参数解释**：计费资源类型。枚举类型，取值如下： - STORAGE：存储资源计费。 - COMPUTE：计算资源计费。 - ALL：所有计费类型。
    * user  user
    * affinity  affinity
    * runUser  runUser
    * dataVolumes  **参数解释**：扩展存储信息
    * ip  **参数解释**：实例所在节点ip。 **取值范围**：不涉及。
    * userVpc  userVpc
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    * isNeedCredentials  **参数解释**：是否需要默认创建用户secret，默认为true。 **取值范围**：不涉及。
    * jupyterVersion  **参数解释**：jupyter version版本号。 **取值范围**：不涉及。
    * tags  **参数解释**：实例标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionProgress' => null,
        'description' => null,
        'endpoints' => null,
        'failReason' => null,
        'flavor' => null,
        'customSpec' => null,
        'id' => null,
        'image' => null,
        'lease' => null,
        'name' => null,
        'pool' => null,
        'status' => null,
        'token' => null,
        'url' => null,
        'volume' => null,
        'workspaceId' => null,
        'feature' => null,
        'billingItems' => null,
        'user' => null,
        'affinity' => null,
        'runUser' => null,
        'dataVolumes' => null,
        'ip' => null,
        'userVpc' => null,
        'userId' => null,
        'isNeedCredentials' => null,
        'jupyterVersion' => null,
        'tags' => null
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
    * actionProgress  **参数解释**：实例初始化进度。
    * description  **参数解释**：实例描述。 **取值范围**：不涉及。
    * endpoints  **参数解释**：本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    * failReason  **参数解释**：实例失败原因。 **取值范围**：不涉及。
    * flavor  **参数解释**：实例规格， 1.当用户选择系统规格时，返回值为系统规格码； 2.当用户创建实例时选择了自定义规格，则此字段会固定返回\"custom.flavor.spec.code\"。 **取值范围**：不涉及。
    * customSpec  customSpec
    * id  **参数解释**：实例ID。 **取值范围**：不涉及。
    * image  image
    * lease  lease
    * name  **参数解释**：实例名称。 **取值范围**：不涉及。
    * pool  pool
    * status  **参数解释**：实例状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结
    * token  **参数解释**：Notebook鉴权使用的token信息。 **取值范围**：不涉及。
    * url  **参数解释**：实例访问的URL。 **取值范围**：不涉及。
    * volume  volume
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * feature  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    * billingItems  **参数解释**：计费资源类型。枚举类型，取值如下： - STORAGE：存储资源计费。 - COMPUTE：计算资源计费。 - ALL：所有计费类型。
    * user  user
    * affinity  affinity
    * runUser  runUser
    * dataVolumes  **参数解释**：扩展存储信息
    * ip  **参数解释**：实例所在节点ip。 **取值范围**：不涉及。
    * userVpc  userVpc
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    * isNeedCredentials  **参数解释**：是否需要默认创建用户secret，默认为true。 **取值范围**：不涉及。
    * jupyterVersion  **参数解释**：jupyter version版本号。 **取值范围**：不涉及。
    * tags  **参数解释**：实例标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionProgress' => 'action_progress',
            'description' => 'description',
            'endpoints' => 'endpoints',
            'failReason' => 'fail_reason',
            'flavor' => 'flavor',
            'customSpec' => 'custom_spec',
            'id' => 'id',
            'image' => 'image',
            'lease' => 'lease',
            'name' => 'name',
            'pool' => 'pool',
            'status' => 'status',
            'token' => 'token',
            'url' => 'url',
            'volume' => 'volume',
            'workspaceId' => 'workspace_id',
            'feature' => 'feature',
            'billingItems' => 'billing_items',
            'user' => 'user',
            'affinity' => 'affinity',
            'runUser' => 'run_user',
            'dataVolumes' => 'data_volumes',
            'ip' => 'ip',
            'userVpc' => 'user_vpc',
            'userId' => 'user_id',
            'isNeedCredentials' => 'is_need_credentials',
            'jupyterVersion' => 'jupyter_version',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionProgress  **参数解释**：实例初始化进度。
    * description  **参数解释**：实例描述。 **取值范围**：不涉及。
    * endpoints  **参数解释**：本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    * failReason  **参数解释**：实例失败原因。 **取值范围**：不涉及。
    * flavor  **参数解释**：实例规格， 1.当用户选择系统规格时，返回值为系统规格码； 2.当用户创建实例时选择了自定义规格，则此字段会固定返回\"custom.flavor.spec.code\"。 **取值范围**：不涉及。
    * customSpec  customSpec
    * id  **参数解释**：实例ID。 **取值范围**：不涉及。
    * image  image
    * lease  lease
    * name  **参数解释**：实例名称。 **取值范围**：不涉及。
    * pool  pool
    * status  **参数解释**：实例状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结
    * token  **参数解释**：Notebook鉴权使用的token信息。 **取值范围**：不涉及。
    * url  **参数解释**：实例访问的URL。 **取值范围**：不涉及。
    * volume  volume
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * feature  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    * billingItems  **参数解释**：计费资源类型。枚举类型，取值如下： - STORAGE：存储资源计费。 - COMPUTE：计算资源计费。 - ALL：所有计费类型。
    * user  user
    * affinity  affinity
    * runUser  runUser
    * dataVolumes  **参数解释**：扩展存储信息
    * ip  **参数解释**：实例所在节点ip。 **取值范围**：不涉及。
    * userVpc  userVpc
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    * isNeedCredentials  **参数解释**：是否需要默认创建用户secret，默认为true。 **取值范围**：不涉及。
    * jupyterVersion  **参数解释**：jupyter version版本号。 **取值范围**：不涉及。
    * tags  **参数解释**：实例标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'actionProgress' => 'setActionProgress',
            'description' => 'setDescription',
            'endpoints' => 'setEndpoints',
            'failReason' => 'setFailReason',
            'flavor' => 'setFlavor',
            'customSpec' => 'setCustomSpec',
            'id' => 'setId',
            'image' => 'setImage',
            'lease' => 'setLease',
            'name' => 'setName',
            'pool' => 'setPool',
            'status' => 'setStatus',
            'token' => 'setToken',
            'url' => 'setUrl',
            'volume' => 'setVolume',
            'workspaceId' => 'setWorkspaceId',
            'feature' => 'setFeature',
            'billingItems' => 'setBillingItems',
            'user' => 'setUser',
            'affinity' => 'setAffinity',
            'runUser' => 'setRunUser',
            'dataVolumes' => 'setDataVolumes',
            'ip' => 'setIp',
            'userVpc' => 'setUserVpc',
            'userId' => 'setUserId',
            'isNeedCredentials' => 'setIsNeedCredentials',
            'jupyterVersion' => 'setJupyterVersion',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionProgress  **参数解释**：实例初始化进度。
    * description  **参数解释**：实例描述。 **取值范围**：不涉及。
    * endpoints  **参数解释**：本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    * failReason  **参数解释**：实例失败原因。 **取值范围**：不涉及。
    * flavor  **参数解释**：实例规格， 1.当用户选择系统规格时，返回值为系统规格码； 2.当用户创建实例时选择了自定义规格，则此字段会固定返回\"custom.flavor.spec.code\"。 **取值范围**：不涉及。
    * customSpec  customSpec
    * id  **参数解释**：实例ID。 **取值范围**：不涉及。
    * image  image
    * lease  lease
    * name  **参数解释**：实例名称。 **取值范围**：不涉及。
    * pool  pool
    * status  **参数解释**：实例状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结
    * token  **参数解释**：Notebook鉴权使用的token信息。 **取值范围**：不涉及。
    * url  **参数解释**：实例访问的URL。 **取值范围**：不涉及。
    * volume  volume
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * feature  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    * billingItems  **参数解释**：计费资源类型。枚举类型，取值如下： - STORAGE：存储资源计费。 - COMPUTE：计算资源计费。 - ALL：所有计费类型。
    * user  user
    * affinity  affinity
    * runUser  runUser
    * dataVolumes  **参数解释**：扩展存储信息
    * ip  **参数解释**：实例所在节点ip。 **取值范围**：不涉及。
    * userVpc  userVpc
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    * isNeedCredentials  **参数解释**：是否需要默认创建用户secret，默认为true。 **取值范围**：不涉及。
    * jupyterVersion  **参数解释**：jupyter version版本号。 **取值范围**：不涉及。
    * tags  **参数解释**：实例标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'actionProgress' => 'getActionProgress',
            'description' => 'getDescription',
            'endpoints' => 'getEndpoints',
            'failReason' => 'getFailReason',
            'flavor' => 'getFlavor',
            'customSpec' => 'getCustomSpec',
            'id' => 'getId',
            'image' => 'getImage',
            'lease' => 'getLease',
            'name' => 'getName',
            'pool' => 'getPool',
            'status' => 'getStatus',
            'token' => 'getToken',
            'url' => 'getUrl',
            'volume' => 'getVolume',
            'workspaceId' => 'getWorkspaceId',
            'feature' => 'getFeature',
            'billingItems' => 'getBillingItems',
            'user' => 'getUser',
            'affinity' => 'getAffinity',
            'runUser' => 'getRunUser',
            'dataVolumes' => 'getDataVolumes',
            'ip' => 'getIp',
            'userVpc' => 'getUserVpc',
            'userId' => 'getUserId',
            'isNeedCredentials' => 'getIsNeedCredentials',
            'jupyterVersion' => 'getJupyterVersion',
            'tags' => 'getTags'
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
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_CREATING = 'CREATING';
    const STATUS_DELETED = 'DELETED';
    const STATUS_DELETE_FAILED = 'DELETE_FAILED';
    const STATUS_DELETING = 'DELETING';
    const STATUS_ERROR = 'ERROR';
    const STATUS_FROZEN = 'FROZEN';
    const STATUS_INIT = 'INIT';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_SNAPSHOTTING = 'SNAPSHOTTING';
    const STATUS_STARTING = 'STARTING';
    const STATUS_START_FAILED = 'START_FAILED';
    const STATUS_STOPPED = 'STOPPED';
    const STATUS_STOPPING = 'STOPPING';
    const BILLING_ITEMS_STORAGE = 'STORAGE';
    const BILLING_ITEMS_COMPUTE = 'COMPUTE';
    const BILLING_ITEMS_ALL = 'ALL';
    

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
            self::STATUS_FROZEN,
            self::STATUS_INIT,
            self::STATUS_RUNNING,
            self::STATUS_SNAPSHOTTING,
            self::STATUS_STARTING,
            self::STATUS_START_FAILED,
            self::STATUS_STOPPED,
            self::STATUS_STOPPING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBillingItemsAllowableValues()
    {
        return [
            self::BILLING_ITEMS_STORAGE,
            self::BILLING_ITEMS_COMPUTE,
            self::BILLING_ITEMS_ALL,
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
        $this->container['actionProgress'] = isset($data['actionProgress']) ? $data['actionProgress'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['customSpec'] = isset($data['customSpec']) ? $data['customSpec'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['lease'] = isset($data['lease']) ? $data['lease'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pool'] = isset($data['pool']) ? $data['pool'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['billingItems'] = isset($data['billingItems']) ? $data['billingItems'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['affinity'] = isset($data['affinity']) ? $data['affinity'] : null;
        $this->container['runUser'] = isset($data['runUser']) ? $data['runUser'] : null;
        $this->container['dataVolumes'] = isset($data['dataVolumes']) ? $data['dataVolumes'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['userVpc'] = isset($data['userVpc']) ? $data['userVpc'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['isNeedCredentials'] = isset($data['isNeedCredentials']) ? $data['isNeedCredentials'] : null;
        $this->container['jupyterVersion'] = isset($data['jupyterVersion']) ? $data['jupyterVersion'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets actionProgress
    *  **参数解释**：实例初始化进度。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobProgress[]|null
    */
    public function getActionProgress()
    {
        return $this->container['actionProgress'];
    }

    /**
    * Sets actionProgress
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobProgress[]|null $actionProgress **参数解释**：实例初始化进度。
    *
    * @return $this
    */
    public function setActionProgress($actionProgress)
    {
        $this->container['actionProgress'] = $actionProgress;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：实例描述。 **取值范围**：不涉及。
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
    * @param string|null $description **参数解释**：实例描述。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets endpoints
    *  **参数解释**：本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
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
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\EndpointsRes[]|null $endpoints **参数解释**：本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets failReason
    *  **参数解释**：实例失败原因。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason **参数解释**：实例失败原因。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets flavor
    *  **参数解释**：实例规格， 1.当用户选择系统规格时，返回值为系统规格码； 2.当用户创建实例时选择了自定义规格，则此字段会固定返回\"custom.flavor.spec.code\"。 **取值范围**：不涉及。
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
    * @param string|null $flavor **参数解释**：实例规格， 1.当用户选择系统规格时，返回值为系统规格码； 2.当用户创建实例时选择了自定义规格，则此字段会固定返回\"custom.flavor.spec.code\"。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets customSpec
    *  customSpec
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NotebookCustomSpecRep|null
    */
    public function getCustomSpec()
    {
        return $this->container['customSpec'];
    }

    /**
    * Sets customSpec
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NotebookCustomSpecRep|null $customSpec customSpec
    *
    * @return $this
    */
    public function setCustomSpec($customSpec)
    {
        $this->container['customSpec'] = $customSpec;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：实例ID。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：实例ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets image
    *  image
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Image|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Image|null $image image
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets lease
    *  lease
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Lease|null
    */
    public function getLease()
    {
        return $this->container['lease'];
    }

    /**
    * Sets lease
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Lease|null $lease lease
    *
    * @return $this
    */
    public function setLease($lease)
    {
        $this->container['lease'] = $lease;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：实例名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：实例名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets pool
    *  pool
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Pool|null
    */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
    * Sets pool
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Pool|null $pool pool
    *
    * @return $this
    */
    public function setPool($pool)
    {
        $this->container['pool'] = $pool;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：实例状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结
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
    * @param string|null $status **参数解释**：实例状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets token
    *  **参数解释**：Notebook鉴权使用的token信息。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token **参数解释**：Notebook鉴权使用的token信息。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释**：实例访问的URL。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释**：实例访问的URL。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeRes|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeRes|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
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
    * @param string|null $workspaceId **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets feature
    *  **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    *
    * @return string|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string|null $feature **参数解释**：实例类别。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets billingItems
    *  **参数解释**：计费资源类型。枚举类型，取值如下： - STORAGE：存储资源计费。 - COMPUTE：计算资源计费。 - ALL：所有计费类型。
    *
    * @return string[]|null
    */
    public function getBillingItems()
    {
        return $this->container['billingItems'];
    }

    /**
    * Sets billingItems
    *
    * @param string[]|null $billingItems **参数解释**：计费资源类型。枚举类型，取值如下： - STORAGE：存储资源计费。 - COMPUTE：计算资源计费。 - ALL：所有计费类型。
    *
    * @return $this
    */
    public function setBillingItems($billingItems)
    {
        $this->container['billingItems'] = $billingItems;
        return $this;
    }

    /**
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\UserResponse|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UserResponse|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets affinity
    *  affinity
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AffinityType|null
    */
    public function getAffinity()
    {
        return $this->container['affinity'];
    }

    /**
    * Sets affinity
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AffinityType|null $affinity affinity
    *
    * @return $this
    */
    public function setAffinity($affinity)
    {
        $this->container['affinity'] = $affinity;
        return $this;
    }

    /**
    * Gets runUser
    *  runUser
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RunUserInfo|null
    */
    public function getRunUser()
    {
        return $this->container['runUser'];
    }

    /**
    * Sets runUser
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RunUserInfo|null $runUser runUser
    *
    * @return $this
    */
    public function setRunUser($runUser)
    {
        $this->container['runUser'] = $runUser;
        return $this;
    }

    /**
    * Gets dataVolumes
    *  **参数解释**：扩展存储信息
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeResponse[]|null
    */
    public function getDataVolumes()
    {
        return $this->container['dataVolumes'];
    }

    /**
    * Sets dataVolumes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeResponse[]|null $dataVolumes **参数解释**：扩展存储信息
    *
    * @return $this
    */
    public function setDataVolumes($dataVolumes)
    {
        $this->container['dataVolumes'] = $dataVolumes;
        return $this;
    }

    /**
    * Gets ip
    *  **参数解释**：实例所在节点ip。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip **参数解释**：实例所在节点ip。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets userVpc
    *  userVpc
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\UserVpcResponse|null
    */
    public function getUserVpc()
    {
        return $this->container['userVpc'];
    }

    /**
    * Sets userVpc
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UserVpcResponse|null $userVpc userVpc
    *
    * @return $this
    */
    public function setUserVpc($userVpc)
    {
        $this->container['userVpc'] = $userVpc;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets isNeedCredentials
    *  **参数解释**：是否需要默认创建用户secret，默认为true。 **取值范围**：不涉及。
    *
    * @return bool|null
    */
    public function getIsNeedCredentials()
    {
        return $this->container['isNeedCredentials'];
    }

    /**
    * Sets isNeedCredentials
    *
    * @param bool|null $isNeedCredentials **参数解释**：是否需要默认创建用户secret，默认为true。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setIsNeedCredentials($isNeedCredentials)
    {
        $this->container['isNeedCredentials'] = $isNeedCredentials;
        return $this;
    }

    /**
    * Gets jupyterVersion
    *  **参数解释**：jupyter version版本号。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getJupyterVersion()
    {
        return $this->container['jupyterVersion'];
    }

    /**
    * Sets jupyterVersion
    *
    * @param string|null $jupyterVersion **参数解释**：jupyter version版本号。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setJupyterVersion($jupyterVersion)
    {
        $this->container['jupyterVersion'] = $jupyterVersion;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：实例标签。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TmsTagResponse[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TmsTagResponse[]|null $tags **参数解释**：实例标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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


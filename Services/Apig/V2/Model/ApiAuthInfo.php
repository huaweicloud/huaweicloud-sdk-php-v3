<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiAuthInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiAuthInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  授权关系编号
    * apiId  API的编号
    * apiName  API的名称
    * groupName  API绑定的分组名称
    * apiType  API类型
    * apiRemark  API的描述信息
    * envId  api授权绑定的环境ID
    * authRole  授权者
    * authTime  授权创建的时间
    * appName  APP的名称
    * appRemark  APP的描述
    * appType  APP的类型：  默认为apig，暂不支持其他类型
    * appCreator  APP的创建者，取值如下： - USER：租户自己创建 - MARKET：API市场分配，暂不支持
    * publishId  API的发布编号
    * groupId  API绑定的分组ID
    * authTunnel  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    * authWhitelist  绿色通道的白名单配置
    * authBlacklist  绿色通道的黑名单配置
    * visitParam  访问参数。
    * romaAppType  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    * tags  API绑定的标签，标签配额默认10条，可以联系技术调整。
    * envName  api授权绑定的环境名称
    * appId  APP的编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'apiId' => 'string',
            'apiName' => 'string',
            'groupName' => 'string',
            'apiType' => 'int',
            'apiRemark' => 'string',
            'envId' => 'string',
            'authRole' => 'string',
            'authTime' => '\DateTime',
            'appName' => 'string',
            'appRemark' => 'string',
            'appType' => 'string',
            'appCreator' => 'string',
            'publishId' => 'string',
            'groupId' => 'string',
            'authTunnel' => 'string',
            'authWhitelist' => 'string[]',
            'authBlacklist' => 'string[]',
            'visitParam' => 'string',
            'romaAppType' => 'string',
            'tags' => 'string[]',
            'envName' => 'string',
            'appId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  授权关系编号
    * apiId  API的编号
    * apiName  API的名称
    * groupName  API绑定的分组名称
    * apiType  API类型
    * apiRemark  API的描述信息
    * envId  api授权绑定的环境ID
    * authRole  授权者
    * authTime  授权创建的时间
    * appName  APP的名称
    * appRemark  APP的描述
    * appType  APP的类型：  默认为apig，暂不支持其他类型
    * appCreator  APP的创建者，取值如下： - USER：租户自己创建 - MARKET：API市场分配，暂不支持
    * publishId  API的发布编号
    * groupId  API绑定的分组ID
    * authTunnel  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    * authWhitelist  绿色通道的白名单配置
    * authBlacklist  绿色通道的黑名单配置
    * visitParam  访问参数。
    * romaAppType  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    * tags  API绑定的标签，标签配额默认10条，可以联系技术调整。
    * envName  api授权绑定的环境名称
    * appId  APP的编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'apiId' => null,
        'apiName' => null,
        'groupName' => null,
        'apiType' => 'int32',
        'apiRemark' => null,
        'envId' => null,
        'authRole' => null,
        'authTime' => 'date-time',
        'appName' => null,
        'appRemark' => null,
        'appType' => null,
        'appCreator' => null,
        'publishId' => null,
        'groupId' => null,
        'authTunnel' => null,
        'authWhitelist' => null,
        'authBlacklist' => null,
        'visitParam' => null,
        'romaAppType' => null,
        'tags' => null,
        'envName' => null,
        'appId' => null
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
    * id  授权关系编号
    * apiId  API的编号
    * apiName  API的名称
    * groupName  API绑定的分组名称
    * apiType  API类型
    * apiRemark  API的描述信息
    * envId  api授权绑定的环境ID
    * authRole  授权者
    * authTime  授权创建的时间
    * appName  APP的名称
    * appRemark  APP的描述
    * appType  APP的类型：  默认为apig，暂不支持其他类型
    * appCreator  APP的创建者，取值如下： - USER：租户自己创建 - MARKET：API市场分配，暂不支持
    * publishId  API的发布编号
    * groupId  API绑定的分组ID
    * authTunnel  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    * authWhitelist  绿色通道的白名单配置
    * authBlacklist  绿色通道的黑名单配置
    * visitParam  访问参数。
    * romaAppType  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    * tags  API绑定的标签，标签配额默认10条，可以联系技术调整。
    * envName  api授权绑定的环境名称
    * appId  APP的编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'apiId' => 'api_id',
            'apiName' => 'api_name',
            'groupName' => 'group_name',
            'apiType' => 'api_type',
            'apiRemark' => 'api_remark',
            'envId' => 'env_id',
            'authRole' => 'auth_role',
            'authTime' => 'auth_time',
            'appName' => 'app_name',
            'appRemark' => 'app_remark',
            'appType' => 'app_type',
            'appCreator' => 'app_creator',
            'publishId' => 'publish_id',
            'groupId' => 'group_id',
            'authTunnel' => 'auth_tunnel',
            'authWhitelist' => 'auth_whitelist',
            'authBlacklist' => 'auth_blacklist',
            'visitParam' => 'visit_param',
            'romaAppType' => 'roma_app_type',
            'tags' => 'tags',
            'envName' => 'env_name',
            'appId' => 'app_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  授权关系编号
    * apiId  API的编号
    * apiName  API的名称
    * groupName  API绑定的分组名称
    * apiType  API类型
    * apiRemark  API的描述信息
    * envId  api授权绑定的环境ID
    * authRole  授权者
    * authTime  授权创建的时间
    * appName  APP的名称
    * appRemark  APP的描述
    * appType  APP的类型：  默认为apig，暂不支持其他类型
    * appCreator  APP的创建者，取值如下： - USER：租户自己创建 - MARKET：API市场分配，暂不支持
    * publishId  API的发布编号
    * groupId  API绑定的分组ID
    * authTunnel  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    * authWhitelist  绿色通道的白名单配置
    * authBlacklist  绿色通道的黑名单配置
    * visitParam  访问参数。
    * romaAppType  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    * tags  API绑定的标签，标签配额默认10条，可以联系技术调整。
    * envName  api授权绑定的环境名称
    * appId  APP的编号
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'apiId' => 'setApiId',
            'apiName' => 'setApiName',
            'groupName' => 'setGroupName',
            'apiType' => 'setApiType',
            'apiRemark' => 'setApiRemark',
            'envId' => 'setEnvId',
            'authRole' => 'setAuthRole',
            'authTime' => 'setAuthTime',
            'appName' => 'setAppName',
            'appRemark' => 'setAppRemark',
            'appType' => 'setAppType',
            'appCreator' => 'setAppCreator',
            'publishId' => 'setPublishId',
            'groupId' => 'setGroupId',
            'authTunnel' => 'setAuthTunnel',
            'authWhitelist' => 'setAuthWhitelist',
            'authBlacklist' => 'setAuthBlacklist',
            'visitParam' => 'setVisitParam',
            'romaAppType' => 'setRomaAppType',
            'tags' => 'setTags',
            'envName' => 'setEnvName',
            'appId' => 'setAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  授权关系编号
    * apiId  API的编号
    * apiName  API的名称
    * groupName  API绑定的分组名称
    * apiType  API类型
    * apiRemark  API的描述信息
    * envId  api授权绑定的环境ID
    * authRole  授权者
    * authTime  授权创建的时间
    * appName  APP的名称
    * appRemark  APP的描述
    * appType  APP的类型：  默认为apig，暂不支持其他类型
    * appCreator  APP的创建者，取值如下： - USER：租户自己创建 - MARKET：API市场分配，暂不支持
    * publishId  API的发布编号
    * groupId  API绑定的分组ID
    * authTunnel  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    * authWhitelist  绿色通道的白名单配置
    * authBlacklist  绿色通道的黑名单配置
    * visitParam  访问参数。
    * romaAppType  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    * tags  API绑定的标签，标签配额默认10条，可以联系技术调整。
    * envName  api授权绑定的环境名称
    * appId  APP的编号
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'apiId' => 'getApiId',
            'apiName' => 'getApiName',
            'groupName' => 'getGroupName',
            'apiType' => 'getApiType',
            'apiRemark' => 'getApiRemark',
            'envId' => 'getEnvId',
            'authRole' => 'getAuthRole',
            'authTime' => 'getAuthTime',
            'appName' => 'getAppName',
            'appRemark' => 'getAppRemark',
            'appType' => 'getAppType',
            'appCreator' => 'getAppCreator',
            'publishId' => 'getPublishId',
            'groupId' => 'getGroupId',
            'authTunnel' => 'getAuthTunnel',
            'authWhitelist' => 'getAuthWhitelist',
            'authBlacklist' => 'getAuthBlacklist',
            'visitParam' => 'getVisitParam',
            'romaAppType' => 'getRomaAppType',
            'tags' => 'getTags',
            'envName' => 'getEnvName',
            'appId' => 'getAppId'
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
    const APP_TYPE_APIG = 'apig';
    const APP_TYPE_ROMA = 'roma';
    const AUTH_TUNNEL_NORMAL = 'NORMAL';
    const AUTH_TUNNEL_GREEN = 'GREEN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAppTypeAllowableValues()
    {
        return [
            self::APP_TYPE_APIG,
            self::APP_TYPE_ROMA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTunnelAllowableValues()
    {
        return [
            self::AUTH_TUNNEL_NORMAL,
            self::AUTH_TUNNEL_GREEN,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['apiType'] = isset($data['apiType']) ? $data['apiType'] : null;
        $this->container['apiRemark'] = isset($data['apiRemark']) ? $data['apiRemark'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['authRole'] = isset($data['authRole']) ? $data['authRole'] : null;
        $this->container['authTime'] = isset($data['authTime']) ? $data['authTime'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appRemark'] = isset($data['appRemark']) ? $data['appRemark'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['appCreator'] = isset($data['appCreator']) ? $data['appCreator'] : null;
        $this->container['publishId'] = isset($data['publishId']) ? $data['publishId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['authTunnel'] = isset($data['authTunnel']) ? $data['authTunnel'] : null;
        $this->container['authWhitelist'] = isset($data['authWhitelist']) ? $data['authWhitelist'] : null;
        $this->container['authBlacklist'] = isset($data['authBlacklist']) ? $data['authBlacklist'] : null;
        $this->container['visitParam'] = isset($data['visitParam']) ? $data['visitParam'] : null;
        $this->container['romaAppType'] = isset($data['romaAppType']) ? $data['romaAppType'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAppTypeAllowableValues();
                if (!is_null($this->container['appType']) && !in_array($this->container['appType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'appType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAuthTunnelAllowableValues();
                if (!is_null($this->container['authTunnel']) && !in_array($this->container['authTunnel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authTunnel', must be one of '%s'",
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
    * Gets id
    *  授权关系编号
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
    * @param string|null $id 授权关系编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets apiId
    *  API的编号
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId API的编号
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets apiName
    *  API的名称
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName API的名称
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
        return $this;
    }

    /**
    * Gets groupName
    *  API绑定的分组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName API绑定的分组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets apiType
    *  API类型
    *
    * @return int|null
    */
    public function getApiType()
    {
        return $this->container['apiType'];
    }

    /**
    * Sets apiType
    *
    * @param int|null $apiType API类型
    *
    * @return $this
    */
    public function setApiType($apiType)
    {
        $this->container['apiType'] = $apiType;
        return $this;
    }

    /**
    * Gets apiRemark
    *  API的描述信息
    *
    * @return string|null
    */
    public function getApiRemark()
    {
        return $this->container['apiRemark'];
    }

    /**
    * Sets apiRemark
    *
    * @param string|null $apiRemark API的描述信息
    *
    * @return $this
    */
    public function setApiRemark($apiRemark)
    {
        $this->container['apiRemark'] = $apiRemark;
        return $this;
    }

    /**
    * Gets envId
    *  api授权绑定的环境ID
    *
    * @return string|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string|null $envId api授权绑定的环境ID
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets authRole
    *  授权者
    *
    * @return string|null
    */
    public function getAuthRole()
    {
        return $this->container['authRole'];
    }

    /**
    * Sets authRole
    *
    * @param string|null $authRole 授权者
    *
    * @return $this
    */
    public function setAuthRole($authRole)
    {
        $this->container['authRole'] = $authRole;
        return $this;
    }

    /**
    * Gets authTime
    *  授权创建的时间
    *
    * @return \DateTime|null
    */
    public function getAuthTime()
    {
        return $this->container['authTime'];
    }

    /**
    * Sets authTime
    *
    * @param \DateTime|null $authTime 授权创建的时间
    *
    * @return $this
    */
    public function setAuthTime($authTime)
    {
        $this->container['authTime'] = $authTime;
        return $this;
    }

    /**
    * Gets appName
    *  APP的名称
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
    * @param string|null $appName APP的名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appRemark
    *  APP的描述
    *
    * @return string|null
    */
    public function getAppRemark()
    {
        return $this->container['appRemark'];
    }

    /**
    * Sets appRemark
    *
    * @param string|null $appRemark APP的描述
    *
    * @return $this
    */
    public function setAppRemark($appRemark)
    {
        $this->container['appRemark'] = $appRemark;
        return $this;
    }

    /**
    * Gets appType
    *  APP的类型：  默认为apig，暂不支持其他类型
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType APP的类型：  默认为apig，暂不支持其他类型
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets appCreator
    *  APP的创建者，取值如下： - USER：租户自己创建 - MARKET：API市场分配，暂不支持
    *
    * @return string|null
    */
    public function getAppCreator()
    {
        return $this->container['appCreator'];
    }

    /**
    * Sets appCreator
    *
    * @param string|null $appCreator APP的创建者，取值如下： - USER：租户自己创建 - MARKET：API市场分配，暂不支持
    *
    * @return $this
    */
    public function setAppCreator($appCreator)
    {
        $this->container['appCreator'] = $appCreator;
        return $this;
    }

    /**
    * Gets publishId
    *  API的发布编号
    *
    * @return string|null
    */
    public function getPublishId()
    {
        return $this->container['publishId'];
    }

    /**
    * Sets publishId
    *
    * @param string|null $publishId API的发布编号
    *
    * @return $this
    */
    public function setPublishId($publishId)
    {
        $this->container['publishId'] = $publishId;
        return $this;
    }

    /**
    * Gets groupId
    *  API绑定的分组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId API绑定的分组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets authTunnel
    *  授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    *
    * @return string|null
    */
    public function getAuthTunnel()
    {
        return $this->container['authTunnel'];
    }

    /**
    * Sets authTunnel
    *
    * @param string|null $authTunnel 授权通道类型 - NORMAL：普通通道 - GREEN：绿色通道  暂不支持，默认NORMAL
    *
    * @return $this
    */
    public function setAuthTunnel($authTunnel)
    {
        $this->container['authTunnel'] = $authTunnel;
        return $this;
    }

    /**
    * Gets authWhitelist
    *  绿色通道的白名单配置
    *
    * @return string[]|null
    */
    public function getAuthWhitelist()
    {
        return $this->container['authWhitelist'];
    }

    /**
    * Sets authWhitelist
    *
    * @param string[]|null $authWhitelist 绿色通道的白名单配置
    *
    * @return $this
    */
    public function setAuthWhitelist($authWhitelist)
    {
        $this->container['authWhitelist'] = $authWhitelist;
        return $this;
    }

    /**
    * Gets authBlacklist
    *  绿色通道的黑名单配置
    *
    * @return string[]|null
    */
    public function getAuthBlacklist()
    {
        return $this->container['authBlacklist'];
    }

    /**
    * Sets authBlacklist
    *
    * @param string[]|null $authBlacklist 绿色通道的黑名单配置
    *
    * @return $this
    */
    public function setAuthBlacklist($authBlacklist)
    {
        $this->container['authBlacklist'] = $authBlacklist;
        return $this;
    }

    /**
    * Gets visitParam
    *  访问参数。
    *
    * @return string|null
    */
    public function getVisitParam()
    {
        return $this->container['visitParam'];
    }

    /**
    * Sets visitParam
    *
    * @param string|null $visitParam 访问参数。
    *
    * @return $this
    */
    public function setVisitParam($visitParam)
    {
        $this->container['visitParam'] = $visitParam;
        return $this;
    }

    /**
    * Gets romaAppType
    *  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    *
    * @return string|null
    */
    public function getRomaAppType()
    {
        return $this->container['romaAppType'];
    }

    /**
    * Sets romaAppType
    *
    * @param string|null $romaAppType ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    *
    * @return $this
    */
    public function setRomaAppType($romaAppType)
    {
        $this->container['romaAppType'] = $romaAppType;
        return $this;
    }

    /**
    * Gets tags
    *  API绑定的标签，标签配额默认10条，可以联系技术调整。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags API绑定的标签，标签配额默认10条，可以联系技术调整。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets envName
    *  api授权绑定的环境名称
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName api授权绑定的环境名称
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets appId
    *  APP的编号
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
    * @param string|null $appId APP的编号
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
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

